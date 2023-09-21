@extends('layouts.app')

@section('page-title', 'Types')

@section('main-content')
<div class="container-sm">
<a href="" class="btn btn-primary mb-2">Add</a>
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Slug</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($types as $type)
        <td>{{ $type->id}}</td>
        <td>{{ $type->title}}</td>
        <td> {{ $type->slug}}</td>
        <td> <a href="{{ route('admin.types.show',['type'=>$types->id])}}"  class="btn btn-info m-2">Look</a>
        <a href=""  class="btn btn-warning m-2">Modify</a>
    </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection