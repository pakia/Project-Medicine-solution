@extends('view_layout')
@section('content')

<Center><h1> Create a Order Here<h1></Center>

<style>
select {width:400px;}
</style>

<div class="container">
  <form action="\admin_post_insert" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group" class=''>
	 <p><b> MEdicine Category</b></p>
    <select name="class" class="form-control">
	 <option value="Product" selected>Product</option>
    <option value="Napa">Napa</option>
    <option value="Alatrol" >Alatrol</option>
    <option value="Parasitamol">Parasitamol</option>
   <option value="Napa extra">Napa extra</option>
    </select>
   

  <div class="form-group">
	 <p><b> Student Gender</b></p>
     <select name="gender" class="form-control">
	 <option value="Male" selected>Male</option>
     <option value="Female">Female</option>
	  <option value="other">Other</option>
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
   <input type="text" name="salary"  class="form-control"  placeholder="Provided preferable salary" required />
  </div>

   <center> <button type="submit" style=" width:100px; Color:green;"  class="btn btn-default">Post</button></center>
  </form>
</div>

</body>

@endsection