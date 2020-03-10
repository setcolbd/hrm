<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function createLoan(){
    	return view('backend.admin.loan.create_loan');
    }

    public function loanPeriod(){
    	return view('backend.admin.loan.create_loan_period');
    }

    public function loanInfo(){
    	return view('backend.admin.loan.loan_info');
    }
}
