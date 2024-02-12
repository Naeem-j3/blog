@extends('layouts.app')

@section('content')

<div class="container text-center my-5">
    <h1>create new post</h1>
</div>
<div class="container ">

<form action="{{route('blog.store')}}" method="POST" class="text-center " enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="title" class="w-50 p-2 rounded-4 fs-2 my-3 border border-success p-2 border-opacity-10" >
    <input type="file" name="image_path" class="btn btn-info w-50 p-2 rounded-4 fs-2 mb-3 " >
    <textarea name="description" placeholder="description" class="  w-50 p-2 rounded-4 fs-1 my-3 border border-success p-2 border-opacity-10"></textarea>
    <button type="submit" class=" btn btn-primary fs-3 p-3 w-50 m">create</button>
</form>
</div>

@endsection