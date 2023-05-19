@extends('master')
@section("content")
    <!-- ======================================carousel slide============================== -->
 <div id="demo" class="carousel slide bg-secondary" data-bs-ride="carousel">
   <!-- Indicators/dots -->
   <div class="carousel-indicators">
     <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active text-primary"></button>
     <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
   </div>
   <!-- The slideshow/carousel -->
   <div class="carousel-inner">
     @foreach ($products as $item)
     <div class="carousel-item p-5 {{$item['id']==1?'active':''}} ">
      <a href="detail/{{$item['id']}}">
       <img src="{{$item['gallery']}}" alt="..." style="height: 300PX;">
       <div class="carousel-caption  bg-info mx-5">
         <h1 class="slider-title text-black">{{$item['name']}}</h1>
         <h4 class="slider-text text-black">{{$item['Description']}}</h4>
       </div>
     </a>
     </div>
     @endforeach
    
   </div>
   <!-- Left and right controls/icons -->
   <button class="carousel-control-prev text-black" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon text-black"></span>
   </button>
   <button class="carousel-control-next text-black" type="button" data-bs-target="#demo" data-bs-slide="next">
     <span class="carousel-control-next-icon"></span>
    </button>
 </div>
 <div class="container">
 <div class="row mt-4">
  <h1>trending products</h1>
  @foreach ($products as $item)
   <div class="col-2 mt-3 p-2 ">
     <a href="detail/{{$item['id']}}">
       <img src="{{$item['gallery']}}" style="height: 200px;">
     <h4 class="slider-title text-black">{{$item['name']}}</h4>
     </a>
   </div>
   @endforeach
 </div>
 </div>

@endsection

