@extends('layout')
@section('content')

<div class="containerlogin">
<form action="register" method="post">

<div class="col-sm-6">
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your full name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password"id="password" placeholder="Password">
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputPassword2">RE-enter Password</label>
    <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Re-enter Password">
  </div><br> -->
  @csrf<br><br>
  <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>


@endsection
</div>