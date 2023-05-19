@extends('master')
@section("content")
<table class="table table-striped">
    <thead>
      <tr>
        <th>price</th>
        <th>{{$total}} rupees</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>tax</td>
        <td>0 rupees</td>
      </tr>
      <tr>
        <td>delivery charge</td>
        <td>100</td>
        
      </tr>
      <tr>
        <td>total amount</td>
        <td>{{$total+100}}</td>
      </tr>
    </tbody>
  </table>
 <div class="col-sm-6">
   <form action="orderplace" method="POST">
    @csrf
  <div class="form-group">
    <textarea class="form-control" placeholder="enter ur address" name="address"></textarea>
  </div>
  <div class="form-group">
    <label for="">Payment method</label>
    <p><input type="radio" value="online" name="payment"><span> online payment</span></p>
    <p><input type="radio" value="emi" name="payment"><span> EMI payment</span></p>
    <p><input type="radio" value="cash" name="payment"><span> payment on dilevery</span></p>
  </div>
  <button type="submit" class="btn btn-success">order now</button>

</form>
   
 </div>
@endsection
