<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function createLeave(){
    	return view('backend.admin.leave.create_leave');
    }

    public function leaveInfo(){
    	return view('backend.admin.leave.leave_info');
    }
}
