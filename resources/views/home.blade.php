@extends('layouts.main',['title'=>'Home'])

@section('container')
  <div class="container">
      <div class="row flex-lg-row-reverse align-items-center g-2">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="img/magang.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1>Temukan Tempat Magangmu</h1>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, sunt repudiandae</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="/program" class="btn btn-outline-success">Cari Sekarang</a>
          </div>
        </div>
      </div>
    
  
@endsection