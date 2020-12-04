<?php


Use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
$total=ProductController::cartitemscount();
}
?>


<nav class="navbar navbar-expand-sm bg-light navbar-light navbar-fixed-top">

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
</nav>