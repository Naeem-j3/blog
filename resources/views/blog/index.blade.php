@extends('layouts.app')
@section('content')
@if (session()->has('message'))
<div class="alert alert-danger" role="alert">
{{session()->get('message')}}   
  </div>
  @endif
<div class="container text-center my-5">
    <h1>All Posts</h1>
</div>
@if (Auth::check())
<div class="container  my-2">
    <a class="btn btn-primary" href="/blog/create">create new post</a>
</div>   
@endif

@foreach ($posts as $post)
    

<div class="container mt-4 ">
<div class="row mb-5 ">
    <div class="col"><img class="img-fluid " src="/img/{{$post->image_path}}" alt=""></div>
    <div class="col">
        <h2 class="mb-0">{{$post->title}} </h2>
        <span class="fw-light">by {{$post->user['name']}}</span> on {{date('d-m-y',strtotime($post->updated_at))}}
        <p class="mt-2 fs-5">{{$post->description}}</p>
        <a class="btn btn-secondary" href="{{route('blog.show',$post->id)}}">read more</a>
    </div>
</div>
@endforeach

</div>
    
@endsection
