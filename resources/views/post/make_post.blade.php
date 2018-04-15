@extends('layout2')
@section('content')
@if(Auth::user())
<Center><h1> Create a post here<h1></Center>

<style>
select {width:400px;}
</style>

<div class="container">
  <form action="\post_action" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group" class=''>
	 <p><b>Order Product</b></p>
    <select name="class" class="form-control">
	 <option value="AnyProduct" selected>AnyProduct</option>
    <option value="Napa">Napa</option>
    <option value="Alatrol" >Alatrol</option>
    <option value="Parasitamol">Parasitamol</option>
   <option value="Napa extra">Napa extra</option>
    </select>
   
	<div class="form-group">
	 <p><b> Medium</b></p>
     <select name="medium" class="form-control">
	 <option value="Bangla medium" selected>Representator</option>
     <option value="English medium">Offline</option>
  </select>
  <div class="form-group">
	 <p><b> Student Gender</b></p>
     <select name="gender" class="form-control">
	 <option value="Male" selected>Male</option>
     <option value="Female">Female</option>
	  <option value="Other">Other</option>
  </select>

      
	<div class="form-group" class=''>
	 <p><b>City/Area</b></p>
    <select name="city" class="form-control">
	 <option value="Dhaka" selected>Dhaka</option>
    <option value="Chittagong">Chittagong</option>
    <option value="Comilla" >Comilla</option>
    <option value="Rangpur">Rangpur</option>
   <option value="Mymensingh">Mymensingh</option>
    </select>
 <div class="form-group">
   <p><b>Salary</b></p>
   <input type="text" name="salary" class="form-control"  placeholder="Provided preferable salary" required />
  </div>
  <div class="form-group">
   <p><b>Describes Address in Details</b></p>
   <input type="text" name="content" class="form-control"style="height:100px; width:500px;"  placeholder="You can add any additional requirement here" required />
  </div>
   </br>
   <center> <button type="submit" style=" width:100px; Color:green;"  class="btn btn-default">Order</button></center>
  </form>
</div>

</body>
@else
  <center><h2> Please logged to get access of this page</h2></center>
@endif
@endsection