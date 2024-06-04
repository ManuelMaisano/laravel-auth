@extends('layouts.app')
@section('title', $project->title)
@section('content')
<section class="my-2">
    <h1>{{$project->title}}</h1>
    <hr>
    <div>{{$project->content}}</div>
    <hr>
    <div>{{$project->slug}}</div>
    <div class="d-flex justify-content-end">
        <div>
            <a href="{{route('admin.projects.index')}}" class="btn btn-primary btn-sm">Return</a>
        </div>
    </div>
</section>
@endsection