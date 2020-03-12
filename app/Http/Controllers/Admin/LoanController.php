<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function createLoan(){
    	return view('backend.admin.loan.create_loan');
    }

    public function loanInfo(){
    	return view('backend.admin.loan.loan_info');
    }

    public function createLoanPeriod(){
    	return view('backend.admin.loan.create_loan_period');
    }

    public function loanPeriodInfo(){
    	return view('backend.admin.loan.loanperiod_info');
    }
}
