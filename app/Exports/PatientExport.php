<?php

namespace App\Exports;

use App\Models\Patient;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PatientExport implements FromView
{
    public function view(): View
    {
        $contracts_id = auth()->guard('admin')->user()->contracts->pluck('contract_id');
        $patients = Patient::whereIn('contract_id', $contracts_id)->get();

        return view('admin.patients._export', [
            'patients' => $patients
        ]);
    }

    public function columnFormats(): array
    {
        return [
            'I' =>  "0",
        ];
    }
}

?>