@extends('layout')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/job/{{$job[0]->id}}">{{$job[0]->job_title}}</a></li>
  </ol>
</nav>
<div class="card w-75"> 
  <div class="card-body">
    <h5 class="card-title"><a href="/job/{{$job[0]->id}}">{{$job[0]->job_title}}</a></h5>
    <p class="card-text">{{$job[0]->job_description}}</p>
    <a href="#" class="btn btn-primary">CALL</a>
  </div>
</div>

@endsection

