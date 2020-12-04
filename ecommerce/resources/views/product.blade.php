@extends('layout')
@section('content')



<!-- carousel code -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    
    <div class="carousel-item active">
      <img src="asset\images\springsale.jpg" alt="Chicago" width="auto" height="500">
    </div>
    <div class="carousel-item">
      <img src="asset\images\girlimage.jpg" alt="New York" width="auto" height="500">
    </div>
    <div class="carousel-item">
      <img src="asset\images\boyjeans.jpg" alt="New York" width="auto" height="500">
    </div>
    <div class="carousel-item ">
      <img src="asset\images\wallpaper.jpg" alt="Los Angeles" width="auto" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div><br><br>


<!-- carousel code -->

<!-- allprdoucts list here -->

<div class="allproducts">
@foreach($productdata as $item)
    <div class="item {{$item['id']==1?'active':''}}" style="float:left" >

    
    <div class="card">
    
    <a href="detailsofeachproduct/{{$item['id']}}">

      <img src="{{$item['gallery']}}" alt="Los Angeles">
    <div class="card-body">
      <h4 class="card-title">{{$item['name']}}</h4>
      <h5 class="card-text">{{$item['productname']}}</h5>
      </a>
    </div>
  </div>
      </div>

      
    @endforeach
    
    <br><br>
  <!-- allprdoucts list here -->
    
  
 
<!-- 
    <img src="\asset\images\shirts_men\shirt1.jpg" alt="" />this should bedisplayed here -->



@endsection

</div>