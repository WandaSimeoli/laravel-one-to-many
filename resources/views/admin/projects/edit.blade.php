@extends('layouts.app')

@section('page-title', 'Modify')

@section('main-content')
<div class="container-sm">
<form action="{{ route('admin.projects.update', ['project'=>$project->id])}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="inputTitle" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror"  id="inputTitle" name="title" 
    placeholder="Enter title" value="{{old('title', $project->title)}}">
  </div>
  @error('title')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3">
  <label class="form-label" for="inputslug">Slug</label>
  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="inputslug" name="slug" 
  placeholder="Enter url" value="{{old('slug', $project->slug)}}">
</div>
@error('slug')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3 container-sm">
    <label for="inputDescription" class="form-label" >Content</label>
    <textarea class="form-control @error('content') is-invalid @enderror" placeholder="Enter description" id="inputDescription" style="height: 100px" 
    name="content">{{old('content', $project->content)}}</textarea>
  </div>
  @error('content')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
      <div class="mb-3 container-sm">
        <label for="typeId" class="form-label">Type</label>
        <select name="type_id" id="type_id" class="form-select">
        <option selected value="">Open this select menu</option>
        @foreach($types as $type)
        <option value="{{$type->id}}"
        @if (old('type_id', $project->title) == $type->id) selected
        @endif>
        {{$type->title}}</option>
        @endforeach
        </select>
      <div class="container-sm">
      <button type="submit" class="btn btn-success">Update</button>
      </div>
</form>
</div>
@endsection