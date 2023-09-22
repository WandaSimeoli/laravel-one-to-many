@extends('layouts.app')

@section('page-title', 'Project')

@section('main-content')
<div class="container-sm">
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Slug</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>{{ $type->id}}</td>
        <td>{{ $type->title}}</td>
        <td> {{ $type->slug}}</td>
        </tr>
    </tbody>
    </table>
    <h2>Related Projects</h2>
    <ul>
        @foreach($type->projects as $project)
        <li>
        <a href="{{route('admin.projects.show', ['project'=> $project->id])}}">
        {{ $project->title}}
        </a>
        </li>
    @endforeach
    </ul>
</div>
@endsection