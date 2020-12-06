<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-light ">
<a class="navbar-brand" href="/"><span> E-COMMERCE</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a href="/men">Men</a>
      </li>
      <li class="nav-item">
      <a href="/women">Women</a>
      </li>
      <li class="nav-item">
      <form class="form-inline" action="/search" method="get">
  @csrf
  <input  class="form-control mr-sm-2" type="text" name="search" id="search" placeholder="search here for products"style="width:750px"> 
  <button class="form-control" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span></button>

  </form>
      </li>
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