<?php

namespace App\Http\Controllers;

use App\Models\employee_details;
use App\Models\income_details;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class payslipController extends Controller
{
    public function payslip()
    {
        return view('admin.index');
    }

    public function store(Request $request)
    {
        $request->validate([

        ]);
        
    $employeeDetail = new employee_details();
    $employeeDetail->company_name = $request->input('company_name');
    $employeeDetail->company_address = $request->input('company_address');
    $employeeDetail->pincode = $request->input('pincode');
    $employeeDetail->country = $request->input('country');
    $employeeDetail->employee_name = $request->input('employee_name');
    $employeeDetail->employee_id = $request->input('employee_id');
    $employeeDetail->pay_period = $request->input('pay_period');
    $employeeDetail->pay_date = $request->input('pay_date');
    $employeeDetail->paid_days = $request->input('paid_days');
    $employeeDetail->loss_of_pay_days = $request->input('loss_of_pay_days');
    $employeeDetail->save();

    $incomeDetail = new income_details();
    $incomeDetail->basic = (int)filter_var($request->input('basic'), FILTER_SANITIZE_NUMBER_INT);
    $incomeDetail->hra = (int)filter_var($request->input('hra'), FILTER_SANITIZE_NUMBER_INT);
    $incomeDetail->gross_earnings = (int)filter_var($request->input('gross_earnings'), FILTER_SANITIZE_NUMBER_INT);
    $incomeDetail->income_tax = (int)filter_var($request->input('income_tax'), FILTER_SANITIZE_NUMBER_INT);
    $incomeDetail->provident_fund = (int)filter_var($request->input('provident_fund'), FILTER_SANITIZE_NUMBER_INT);
    $incomeDetail->total_deductions = (int)filter_var($request->input('total_deductions'), FILTER_SANITIZE_NUMBER_INT);
    $incomeDetail->total_net_payable = (int)filter_var($request->input('total_net_payable'), FILTER_SANITIZE_NUMBER_INT);
    $incomeDetail->save();

    $pdf = PDF::loadView('admin.payslipPdf', compact('employeeDetail', 'incomeDetail'));
    return $pdf->download('payslip.pdf');

    return redirect()->route('index')->with('success', 'Income details saved successfully.');
    }

    public function sample()
    {
        return view ('admin.sample');
    }
}

    // $logoPath = null;
    // if ($request->hasFile('logo')) {
    //     $logoPath = $request->file('logo')->store('logos', 'public');
    // }
    // $pdf = PDF::loadView('admin.payslipPdf', compact('employeeDetail', 'incomeDetail', 'logoPath'));
    // return $pdf->download('payslip.pdf');

