@extends('layouts.app')

@section('page-title', 'Projects')

@section('main-content')
<div class="container-sm">
<a href="{{route('admin.projects.create')}}" class="btn btn-primary mb-2">Add</a>
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Slug</th>
        <th scope="col">Content</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($projects as $project)
        <td>{{ $project->id}}</td>
        <td>{{ $project->title}}</td>
        <td> {{ $project->slug}}</td>
        <td> {{ $project->content}}</td>
        <td> <a href="{{ route('admin.projects.show',['project'=>$project->id])}}"  class="btn btn-info m-2">Look</a>
        <a href="{{ route('admin.projects.edit',['project'=>$project->id])}}"  class="btn btn-warning m-2">Modify</a>
    </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection