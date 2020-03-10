<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendenceController extends Controller
{
    public function createAttendance(){
    	return view('backend.admin.attendance.create_attendance');
    }

    public function attendanceInfo(){
    	return view('backend.admin.attendance.attendance_info');
    }
}
