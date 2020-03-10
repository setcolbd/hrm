<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function createCandidate(){
    	return view('backend.admin.job.create_candidate');
    }

    public function candidateInfo(){
    	return view('backend.admin.job.candidate_info');
    }
}
