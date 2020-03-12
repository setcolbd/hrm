<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userGroup(){
    	return view('backend.admin.userGroup.user_group');
    }
}
