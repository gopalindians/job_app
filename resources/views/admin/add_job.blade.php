@extends('admin/lay')

@section('content')
<form  style="width: 18rem;" action="/admin/add_job" method="post">
	@csrf
  <div class="form-group">
    <label for="jobTitle">Job title</label>
    <input type="text" class="form-control" id="jobTitle" name="job_title" placeholder="Job title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Job description</label>
    <textarea class="form-control" name="description"></textarea> 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection