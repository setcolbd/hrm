<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function createAnnouncement(){
    	return view('backend.admin.announcement.create_announcement');
    }

    public function announcementInfo(){
    	return view('backend.admin.announcement.announce_info');
    }
}
