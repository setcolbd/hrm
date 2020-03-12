<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OvertimeController extends Controller
{
    public function createOvertime(){
    	return view('backend.admin.overtime.create_overtime');
    }

    public function overtimeInfo(){
    	return view('backend.admin.overtime.overtime_info');
    }
}
