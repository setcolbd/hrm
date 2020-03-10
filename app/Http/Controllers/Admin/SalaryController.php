<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function createSalary(){
    	return view('backend.admin.salary.create_salary');
    }

    public function salaryInfo(){
    	return view('backend.admin.salary.salary_info');
    }
}
