<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskAssignController extends Controller
{
    public function createTask(){
    	return view('backend.admin.taskManagement.create_task');
    }

    public function taskInfo(){
    	return view('backend.admin.taskManagement.task_info');
    }
}
