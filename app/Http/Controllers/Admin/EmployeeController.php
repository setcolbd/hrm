<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function createUser(){
    	return view('backend.admin.user.create_user');
    }

   public function UserInfo(){
    	return view('backend.admin.user.user_info');
    } 

    public function resignUser(){
    	return view('backend.admin.user.resigned_user');
    } 

    public function terminateUser(){
    	return view('backend.admin.user.terminate_user');
    } 
}
