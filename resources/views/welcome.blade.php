
@extends('layout')

@section('content')

@foreach($jobs as $job)
<div class="card w-75" style="margin-top: 2px;"> 
  <div class="card-body">
    <h5 class="card-title"><a href="/job/{{$job->id}}">{{$job->job_title}}</a></h5>
    <p class="card-text">{{$job->job_description}}</p>
    <small>{{$job->created_at}}</small>
  </div>
</div>

@endforeach

{{ $jobs->links() }}
@endsection


