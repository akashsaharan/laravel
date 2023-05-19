<?php
use App\Http\Controllers\productcontroller;
$total=0;
if(Session::has('user'))
{
$total=productcontroller::cartitem();

}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">E-COM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="myorder">orders</a>
      </li>
         <form action="/search" class="navbar-form">
          <div class="form-group">
            <input type="text" name="query" class="form-control" placeholder="search">
          </div>
        </form>
    </ul>
    <ul class=" nav navbar-nav navbar-right px-5">
      <li> <a class="nav-link " href="/cartlist">cart({{$total}})</a> </li>
      @if (Session::has('user'))
       <li> <a class="nav-link " href="">{{Session::get('user')['name']}}</a> </li>
        <li> <a class="nav-link " href="/logout">logout</a> </li>
        @else
          <a class="nav-link" href="/login">login</a>
          @endif
    </ul>

    
  </div>
</nav>