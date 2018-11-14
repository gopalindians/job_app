<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    public function dashboard(){

    	$jobs = DB::table('jobs')->get();
    	return view('admin/dashboard',['jobs'=>$jobs]);
    }

    public function addJob()
    {
    	return view('admin/add_job');	
    }

   public function saveJob(Request $request)
   {

   	$job_title       = $request->post('job_title');
   	$job_description = $request->post('description');

   	DB::table('jobs')->insert([
   		'job_title'       => $job_title,
   		'job_description' => $job_description,
   		'created_at'      => date('Y-m-d H:i:s'),
   		'updated_at'      => date('Y-m-d H:i:s')
   	]);
   	return redirect('/admin')->with('success', 'Job added successfully !');
   }

   public function showJob($job_id)
   {
   	$job = DB::table('jobs')->where('id', '=',$job_id )->get();
   	return view('admin/show_job',['job'=>$job]);

   }

  public function editJob($job_id)
   {
    $job = DB::table('jobs')->where('id', '=',$job_id )->get();
    return view('admin/edit_job',['job'=>$job]);
   }

  public function  updateJob(Request $request, $job_id){
    $job_title       =  $request->post('job_title');
    $job_description =  $request->post('job_description');

    DB::table('jobs')
            ->where('id', $job_id)
            ->update([
              'job_title'       => $job_title,
              'job_description' => $job_description
            ]);
    return redirect('admin/job/'.$job_id.'/edit')->with('updated', 'Job updated successfully !');
  }


  public function deleteJob($job_id)
  {
    DB::table('jobs')->where('id', '=', $job_id)->delete();
    return redirect('admin')->with('deleted', 'Job deleted successfully !'); 
  }
}
