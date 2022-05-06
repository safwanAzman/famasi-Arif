<?php

namespace App\Exports\Report;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\DB;
use App\Models\InvoiceHDR;
use Log;
class ReportExport implements FromView, ShouldAutoSize
{
    public $startDate;
    public $endDate;
    public $report_branch;
    public $data;

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

        $result = InvoiceHDR::on($this->report_branch)
        ->join('InvoiceDtl', 'InvoiceHdr.IH_DocNo', '=', 'InvoiceDtl.ID_DocNo')
        ->orderBy('IH_PaymentMode','asc', 'IH_UpdDate' ,'asc')
        ->whereBetween('IH_UpdDate', [$this->startDate, $this->endDate])
        ->get();

        return view('excel.report-export', [
            'result' => $result,
            'starDate' => $this->startDate,
            'endDate' => $this->endDate,
        ]);
    }
}
