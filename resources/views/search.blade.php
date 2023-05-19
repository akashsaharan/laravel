@extends('master')
@section("content")
 
 <div class="container">
 <div class="row mt-4">
  <h1>result products</h1>
  @foreach ($products as $item)
   <div class="col-2 mt-3  ">
     <a href="detail/{{$item['id']}}">
       <img src="{{$item['gallery']}}" style="height: 100px;">
     <h4 class="slider-title text-black">{{$item['name']}}</h4>
     <h4 class="slider-title text-black">{{$item['Description']}}</h4>
     </a>
   </div>
   @endforeach
 </div>
 </div>

@endsection

