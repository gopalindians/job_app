@extends('admin/lay')

@section('content')

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
@if (session('deleted'))
    <div class="alert alert-success" role="alert">
        {{ session('deleted') }}
    </div>
@endif


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Job title</th>
      <th scope="col">Created on</th>
      <th scope="col">Updated on</th>
    </tr>
  </thead>
  <tbody>

  	@foreach($jobs as $job)
    <tr>
      <th scope="row">{{$job->id}}</th>
      <td><a href="/admin/job/{{$job->id}}"> {{$job->job_title}}</a></td>
      <td>{{$job->created_at}}</td>
      <td>{{$job->updated_at}}</td>
    </tr>
    @endforeach()
  </tbody>
</table>
@endsection