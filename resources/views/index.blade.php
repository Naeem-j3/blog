@extends('layouts.app')

@section('content')
  <div class="bg-im d-flex justify-content-center align-items-center flex-column">
    <h1>welcom to my blog</h1>
    <a class="d-block btn btn-primary" href="/">start reading</a>
  </div>  

  <div class="container mt-5">
    <div class="  row ">
      <div class=" col">
        <img src="img/cloud.jpg" class="w-100" />
      </div>
      <div class=" col">
        <h2 >how to be reach </h2>
        <p class="fw-light fs-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem veniam voluptatum expedita fugiat iste m
          inus, consectetur neque modi nemo deleniti dignissimos obcaecati repudiandae vitae ad ea, sapiente ipsam sed soluta!</p>
          <a class="btn btn-secondary" href="">read more</a>
      </div>
    </div>
  </div>
<!------------------->
  <div class="bg-dark text-center text-white my-5 p-5">
    <h2>blog categories</h2>
    <div class="container">
    <div class="row  fs-4 pt-5 ">
      <div class="col">front end</div>
      <div class="col">back end</div>
      <div class="col">graghic desighn</div>
      <div class="col">ux design</div>
    </div>
  </div>
  </div>
  <!------------------->
<div class="container text-center p-5">
  <h2>Recent post</h2>
  <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corporis repellendus rem repudiandae reprehenderit, nemo quae ea explicabo sunt quod eaque ducimus expedita vitae minima illum, libero dicta ex culpa!</p>
</div>
<!------------------->
<div class="container">
  <div class="row">
  <div class="bg-info p-4 col fs-5">
    <ul class="list-group list-group-horizontal mb-4">
      <li class="list-group-item "><a class="text-decoration-none" href="">php</a></li>
      <li class="list-group-item "><a class="text-decoration-none" href="">backen</a></li>
      <li class="list-group-item "><a class="text-decoration-none" href="">grahic</a></li>
      <li class="list-group-item "><a class="text-decoration-none" href="">react</a></li>
    </ul>
    <p class="text-white fw-bold mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sint, iusto corporis id enim assumenda quas odio iure asperiores ut debitis et vitae nihil? Earum corrupti culpa eaque voluptatum atque.</p>
  </div>
  <div class="col">
      <img src="img/city edit.jpg" class="img-fluid" alt="photo">
  </div>
   </div>
</div>
@endsection