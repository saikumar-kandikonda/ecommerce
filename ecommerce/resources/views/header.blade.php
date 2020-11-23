<?php


Use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
$total=ProductController::cartitemscount();
}
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">E-Commerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li> <form action="/search" method="get">
  @csrf
  <input type="text" name="search" id="search" style="width:750px"> 
  <button class="glyphicon glyphicon-search " type="submit"></button>
</span>
  </form></li>
 
  
    </ul>

    
    <ul class="nav navbar-nav navbar-right">
      
      @if(Session::has('user'))
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart({{$total}})</a></li>

      <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Sign Out</a></li>
        </ul>
        </li>
@else
<li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart({{$total}})</a></li>

@endif

    </ul>
  </div>
</nav>