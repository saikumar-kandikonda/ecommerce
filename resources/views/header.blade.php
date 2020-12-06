<?php


Use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
$total=ProductController::cartitemscount();
}
?>
<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">E-Commerce Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/men">Men</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/women">Women</a>
      </li>
      <li class="nav-item">
      <form class="form-inline" action="/search" method="get">
  @csrf
  <input  class="form-control mr-sm-2" type="text" name="search" id="search" placeholder="search here for products"style="width:750px"> 
  <button class="form-control glyphicon glyphicon-search " type="submit"></button>

  </form>
      </li>


      
      @if(Session::has('user'))
      <li class="nav-item"><a class="nav-link" href="/usercart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart({{$total}})</a></li>
      <li class="nav-item"><a class="nav-link" href="/wishlisthere"><span class="glyphicon glyphicon-bookmark"></span>Wishlist</a></li>


        <li class="nav-item"><a class="nav-link"  href="/myorders"><span class="glyphicon glyphicon-hourglass"></span>My orders</a></li>
          <li class="nav-item"><a class="nav-link" href="/logout"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a></li>
          
        
@else
<li class="nav-item"><a class="nav-link" href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="nav-item"><a class="nav-link" href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
      <li class="nav-item"><a class="nav-link" href="/usercart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart({{$total}})</a></li>

@endif

    </ul>
  </div>
</nav>



<!-- 
<nav class="navbar navbar-expand-sm navbar-light  bg-light  navbar-fixed-top" id="myNavbar">

  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/"><span> E-COMMERCE</span></a>
    </div>
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="/men">Men</a></li>
      <li><a href="/women">Women</a></li> 
    
      <li> 
        <form class="form-inline" action="/search" method="get">
  @csrf
  <input  class="form-control mr-sm-2" type="text" name="search" id="search" placeholder="search here for products"style="width:750px"> 
  <button class="form-control glyphicon glyphicon-search " type="submit"></button>

  </form></li>
 
  
    </ul>
    <div class="collapse navbar-collapse" id="myNavbar">
    
    <ul class="nav navbar-nav navbar-right">
      
      @if(Session::has('user'))
      <li><a href="/usercart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart({{$total}})</a></li>
      <li><a href="/wishlisthere"><span class="glyphicon glyphicon-bookmark"></span>Wishlist</a></li>
      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{Session::get('user')['name']}}
        </a>
        <ul class="dropdown-menu">
        <li><a href="/myorders">My orders</a></li>
          <li><a href="/logout">Sign Out</a></li>
        </ul>
        </li>
@else
<li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
      <li><a href="/usercart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart({{$total}})</a></li>

@endif

    </ul>
  </div>
</nav> -->