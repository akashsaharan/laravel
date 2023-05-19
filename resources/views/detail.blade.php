@extends('master')
@section("content")
   <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="{{$products['gallery']}}" style="height: 300px;">
        </div>
        <div class="col-sm-6">
          <a href="/">go back</a>
          <h2>Name:{{$products['name']}}</h2>
           <h2>price:{{$products['price']}}</h2>
           <h4>category:{{$products['category']}}</h2>
            <h4>Description:{{$products['Description']}}</h2>
             <form action="/add_to_cart" method="POST">
              @csrf
               <input type="hidden" name="product_id" value="{{$products['id']}}">
               <button class="bg-primary">Add To Cart</button>
             </form>
               <button class="bg-secondary">Buy Now</button>
        </div>
      </div>

   </div>

@endsection

