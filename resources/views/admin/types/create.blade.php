@extends('layouts.app')

@section('page-title', 'Add')

@section('main-content')
<div class="container-sm">
<form action="" method="POST">
    @csrf
  <div class="mb-3">
    <label for="inputTitle" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror"  id="inputTitle" name="title" 
    placeholder="Enter title" value="{{old('title')}}">
  </div>
  @error('title')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3">
  <label class="form-label" for="inputImage">Image</label>
  <input type="text" class="form-control @error('slug') is-invalid @enderror" id="inputImage" name="slug" 
  placeholder="Enter url" value="{{old('slug')}}">
</div>
@error('slug')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
  <div class="mb-3 container-sm">
    <label for="inputDescription" class="form-label" >Content</label>
    <textarea class="form-control @error('content') is-invalid @enderror" placeholder="Enter description" id="inputDescription" style="height: 100px" 
    name="content">{{old('content')}}</textarea>
  </div>
  @error('content')
      <div class="alert alert-danger">
        {{$message}}
        @enderror
      </div>
      <div class="container-sm">
      <button type="submit" class="btn btn-success">Add</button>
      </div>
</form>
</div>
@endsection