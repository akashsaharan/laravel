@extends('master')
@section("content")
<h1 class="text-center text-danger"> login here </h1>

<div class="container"> 
	 <div class="col-4 m-auto">
	 	<form action="login" method="POST">
      @csrf
  <div class="form-group mt-5">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group mt-3">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <input type="submit" name="submit" class="btn btn-primary mt-3" value="login">
</form>
	 	
	 </div>
</div>
@endsection