@extends('admin/lay')

@section('content')

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
    <li class="breadcrumb-item" active" aria-current="page"><a href="/admin/job/{{$job[0]->id}}">{{$job[0]->job_title}}</a></li>
  </ol>
</nav>

<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{$job[0]->job_title}} <a href="/admin/job/{{$job[0]->id}}/edit">Edit</a></h5>
        <p class="card-text">{{$job[0]->job_description}}</p>
      </div>
    </div>
  </div>
</div>
@endsection