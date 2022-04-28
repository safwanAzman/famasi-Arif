<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Exports\Report\ReportExport;
use Maatwebsite\Excel\Facades\Excel;


class Report extends Component
{
    public $startDate;
    public $endDate;
    public $reportType;

    public function mount()
    {
        $this->startDate = now()->format('Y-m-d');
        $this->endDate = now()->lastOfMonth()->format('Y-m-d');
    }

    public function generateExcel()
    {
        return Excel::download(new ReportExport(), 'report.xlsx');
    }


    public function render()
    {
        return view('livewire.report')->extends('default.default');
    }
}
