<?php

namespace App\Exports\Report;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Facades\DB;

class ReportExport implements FromView, ShouldAutoSize
{
    // public $startDate;
    // public $endDate;
    // public $reportType;

    function __construct(
        // $startDate, 
        // $endDate , 
        // $reportType
    ) {

            // $this->startDate = $startDate;
            // $this->endDate = $endDate;
            // $this->reportType = $reportType;
    }

    public function view(): View
    {
        // $sql = "FMS.up_rpt_list_non_cash_products'$this->startDate','$this->endDate'";
        // $results = DB::select($sql);

        return view('excel.report-export', [
            // 'results' => $results
        ]);
    }
}
