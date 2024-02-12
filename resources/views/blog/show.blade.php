 @extends('layouts.app')
@section('content')
<link rel=stylesheet href="{{url('css/style2.css')}}">
@if (session()->has('message'))
<div class="alert alert-danger text-center" role="alert">
{{session()->get('message')}}
  </div>
  @endif


<div class="container">
    <img  src="/img/{{$post->image_path}}" alt="" >
    <h1 class="p-3 text-dark">{{$post->title}}</h1>
    <div class="p-3 fs-4"><p>{{$post->description}}</p></div>
    {{--&& Auth::user()->id == $post->user_id --}}
    @if (Auth::check() )
    <div class="d-flex">
        <a class="btn btn-success p-3 d-md-inline-block" href="{{route('blog.edit',$post->id)}}">edit post</a>
     <form action="/blog/{{$post->id}}" method="POST" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger p-3 d-md-inline-block">DELETE POST</button>
     </form>
    </div>

    @endif

 </div>
@endsection
