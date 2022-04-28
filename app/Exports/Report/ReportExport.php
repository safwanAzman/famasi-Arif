<?php

namespace App\Exports\Report;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\DB;

class ReportExport implements FromView, ShouldAutoSize
{
    public $startDate;
    public $endDate;
    public $report_branch;

    function __construct(
        $startDate, 
        $endDate , 
        $report_branch
    ) {

            $this->startDate = $startDate;
            $this->endDate = $endDate;
            $this->report_branch = $report_branch;
    }

    public function view(): View
    {
        $result = DB::connection($this->report_branch)->select("
            select
            Top
            100
            IH_PaymentMode,
            IH_UpdDate = cast(IH_UpdDate as date),
            IH_DocNo,
            IH_Discount,
            IH_DocAmt,
            IH_PaymentAmt,
            IH_PymtModeReference,
            IH_ACCTCODE,
            IH_Rounding,
            IH_ServiceTax,
            IH_Total,
            IH_Salesperson,
            
            ID_ItemNo,
            ID_Description,
            ID_Quantity,
            ID_Price,
            ID_Disc,
            ID_Price =  (ID_Price*ID_Disc),
            ID_SellingPrice,
            ID_TotalEx
            from 
            [01]..InvoiceHDR inner join [01]..InvoiceDTL on IH_DocNo = ID_DocNo
            where cast(IH_UpdDate as date) between '$this->startDate' and '$this->endDate'
            order by rtrim(ltrim(IH_PaymentMode)),cast(IH_UpdDate as date) asc
        ");
        

        return view('excel.report-export', [
            'result' => $result,
            'starDate' => $this->startDate,
            'endDate' => $this->endDate,
        ]);
    }
}
