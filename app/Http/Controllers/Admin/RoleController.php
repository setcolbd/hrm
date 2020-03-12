<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function createRole(){
    	return view('backend.admin.role.create_role');
    }

    public function roleInfo(){
    	return view('backend.admin.role.role_info');
    }
}
