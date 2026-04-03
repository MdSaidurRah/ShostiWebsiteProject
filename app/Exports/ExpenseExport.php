<?php

namespace App\Exports;

use App\Models\Expense;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ExpenseExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Expense::select('expense_reference_no', 'project_name', 'expense_head', 'sub_head_name','child_head_name',
        'employee', 'amount', 'expense_status', 'date')->get();
    }

    public function headings(): array
    {
        return ["Reference No", "Project", "Head", "Sub Head","Child Head",
            "Employee", "Amount", "Expense Status", "Date"];

    }
}
