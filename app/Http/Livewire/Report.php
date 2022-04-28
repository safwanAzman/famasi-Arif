<?php

namespace App\Http\Livewire;

use DB;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\Report\ReportExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Branch;
use App\Models\InvoiceHDR;
use App\Models\InvoiceDtl;




class Report extends Component
{
    use WithPagination;
    public $startDate;
    public $endDate;
    public $report_branch = 'branch_01';

    public function mount()
    {
        $this->startDate = now()->format('Y-m-d');
        $this->endDate = now()->lastOfMonth()->format('Y-m-d');

    }

    public function generateExcel()
    {
        return Excel::download(new ReportExport($this->startDate,$this->endDate,$this->report_branch), 'report.xlsx');
    }


    public function render()
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

        return view('livewire.report',[
            'result' => $result
        ])->extends('default.default');
    }
}
