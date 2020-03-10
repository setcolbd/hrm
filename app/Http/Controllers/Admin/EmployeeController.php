<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function createEmployee(){
    	return view('backend.admin.employee.create_employee');
    }

   public function employeeinfo(){
    	return view('backend.admin.employee.employee_info');
    } 

    public function resignEmployee(){
    	return view('backend.admin.employee.resigned_employee');
    } 

    public function terminateEmployee(){
    	return view('backend.admin.employee.terminate_employee');
    } 
}
