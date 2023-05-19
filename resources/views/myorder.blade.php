@extends('master')
@section("content")
 
 <div class="container">
 <div class="row mt-4">
  <h1>order list</h1>
  @foreach ($orders as $item)
   <div class="col-12 mt-3  ">
     <img src="{{$item->gallery}}" style="height: 100px;">
     <h4 >{{$item->name}}</h4>    
   </div>
   @endforeach
 </div>
 </div>

@endsection