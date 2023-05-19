@extends('master')
@section("content")
 
 <div class="container">
 <div class="row mt-4">
  <h1>cart list</h1>
  @foreach ($products as $item)
   <div class="col-2 mt-3  ">
     <a href="detail/{{$item->id}}">
       <img src="{{$item->gallery}}" style="height: 100px;">
     <h4 class="slider-title text-black">{{$item->name}}</h4>
     <h4 class="slider-title text-black">{{$item->Description}}</h4>
         </a>
         <a href="/removecart/{{$item->cart_id}}" class="bg-danger mt-3 nav-link  text-center py-2 px-0">Remove from cart</a>
   </div>
   @endforeach
 </div>
 <a class="btn btn-success" href="/ordernow"> Order Now</a>
 </div>

@endsection