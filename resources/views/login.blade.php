@extends('layout')
@section('content')
<!-- this is alert box -->

<!-- this is alert box -->
<div class="containerlogin">

<form method="post" action="login">
@csrf
<div class="col-sm-6">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email"id="email" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password"id="password" placeholder="Password">
  </div><br>
  <div class="form-group" >
  <span><a href="#">forgot password?</a></span><br>
  <span><a href="/register">Click here to Register!</a></span>
  </div><br>
  <button type="submit" class="btn btn-success">Submit</button>
  </div>
</form>

</div>
@endsection
