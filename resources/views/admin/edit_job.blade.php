@extends('admin/lay')

@section('content')



<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
    <li class="breadcrumb-item" active" aria-current="page"><a href="/admin/job/{{$job[0]->id}}">{{$job[0]->job_title}}</a></li>
  </ol>
</nav>

@if (session('updated'))
    <div class="alert alert-success" role="alert">
        {{ session('updated') }}
    </div>
@endif

<form action="/admin/job/{{$job[0]->id}}/edit" method="post">
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Job title</label>
    <input type="text" class="form-control"  placeholder="Enter email" value="{{$job[0]->job_title}}" name="job_title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Job Description</label>
    <textarea class="form-control" name="job_description">{{$job[0]->job_description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  <a href="/admin/job/{{$job[0]->id}}/delete">Delete</a>
</form>
@endsection