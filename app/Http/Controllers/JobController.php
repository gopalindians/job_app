<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Job;

class JobController extends Controller
{
   public function showJob($job_id){
   	$job = DB::table('jobs')->where('id', '=',$job_id )->simplePaginate(15);
   	return view('job/job_detail',['job'=>$job]);
   }


   public function index()
   {
   	$jobs = Job::paginate(10);
   	return view('welcome',['jobs'=>$jobs]);
   }

   public function search(Request $request)
   {
   	$q = $request->get('q');
   	$jobs = Job::where('job_title', 'like', '%'.$q.'%')
                ->orWhere('job_description', 'like', '%'.$q.'%')
                ->paginate(10);

	return view('job/search',['jobs'=>$jobs]); 
   }

}
