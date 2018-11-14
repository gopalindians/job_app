<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Job;

class JobController extends Controller
{
    public function showJobs()
    {
    	$jobs = Job::paginate(10);

    	return response()->json([
    $jobs
]);
    }

    public function showSingleJob($job_id)
    {
    	$job = DB::table('jobs')->where('id', '=',$job_id )->simplePaginate(15);
  
   	return response()->json([
    $job[0]
]);
    }

    public function search(Request $request)
    {
    	$q =$request->get('q');

    		$jobs = Job::where('job_title', 'like', '%'.$q.'%')
                ->orWhere('job_description', 'like', '%'.$q.'%')
                ->paginate(10);
    	return response()->json([
    $jobs
]);
    }
}
