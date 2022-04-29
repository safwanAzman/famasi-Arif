<?php

namespace App\Http\Livewire;

use DB;
use Livewire\Component;
use Livewire\WithPagination;
use App\Exports\Report\ReportExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\InvoiceHDR;




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
        $this->report_branch;

    }

    public function generateExcel()
    {
        return Excel::download(new ReportExport($this->startDate,$this->endDate,$this->report_branch), 'report.xlsx');
    }


    public function render()
    {

        $result = InvoiceHDR::on($this->report_branch)
        ->join('InvoiceDtl', 'InvoiceHdr.IH_DocNo', '=', 'InvoiceDtl.ID_DocNo')
        ->orderBy('IH_PaymentMode','asc', 'IH_UpdDate' ,'asc')
        ->whereBetween('IH_UpdDate', [$this->startDate, $this->endDate])
        ->paginate(5);
        

        return view('livewire.report',[
            'result' => $result
        ])->extends('default.default');
    }
}
