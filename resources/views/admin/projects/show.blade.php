@extends('layouts.app')

@section('page-title', 'Project')

@section('main-content')
<div class="container-sm">
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">slug</th>
        <th scope="col">Content</th>
        <th scope="col">Type</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>{{ $project->id}}</td>
        <td>{{ $project->title}}</td>
        <td> {{ $project->slug}}</td>
        <td> {{ $project->content}}</td>
        <td> {{ $project->type->title}}</td>
        </tr>
    </tbody>
    </table>
</div>
@endsection