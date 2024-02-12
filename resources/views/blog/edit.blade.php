@extends('layouts.app')

@section('content')

<div class="container text-center my-5">
    <h1>Edit Post</h1>
</div>
<div class="container ">

<form action="/blog/{{$post->id}}" method="POST" class="text-center " enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="text" name="title" placeholder="title" value="{{ old('title', $post->title) }}" class="w-50 p-2 rounded-4 fs-2 my-3 border border-success p-2 border-opacity-10" >
    @error('title')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <input type="file" name="image_path"  class="btn btn-info w-50 p-2 rounded-4 fs-2 mb-3 " >
    @error('image_path')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <textarea name="description" placeholder="description"  class="  w-50 p-2 rounded-4 fs-1 my-3 border border-success p-2 border-opacity-10">{{ old('description', $post->description) }}</textarea>
    @error('description')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class=" btn btn-primary fs-3 p-3 w-50 m">Update</button>
</form>
</div>

@endsection
