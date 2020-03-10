<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function createMessage(){
    	return view('backend.admin.message.create_message');
    }
}
