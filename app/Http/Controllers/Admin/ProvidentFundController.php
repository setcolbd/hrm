<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProvidentFundController extends Controller
{
    public function providentInfo(){
    	return view('backend.admin.provident.provident_info');
    }
}
