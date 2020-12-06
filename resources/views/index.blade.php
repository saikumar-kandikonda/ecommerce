<!-- @extends('layout')
@section('content') -->




<!-- carousel code -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="\asset\images\shirts_men\shirt1.jpg" alt="Los Angeles" width="auto" height="500">
    </div>
    <div class="carousel-item">
      <img src="\asset\images\shirts_men\shirt2.jpg" alt="Chicago" width="auto" height="500">
    </div>
    <div class="carousel-item">
      <img src="\asset\images\shirts_men\shirt3.jpg" alt="New York" width="auto" height="500">
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
<div class="container">
<!-- card -->
<div class="card">
    <div class="card-body">Basic card</div>
    <div class="row">
        <div class="col-sm-4">
        <img src="\asset\images\shirts_men\shirt1.jpg" alt="" />
        </div>  
            <div class="col-sm-6">
            this should bedisplayed here
        </div>
        </div>
        </div>
<!-- card -->
<div class="break"></div><br><br>
<!-- card -->
<div class="card">
    <div class="card-body">Basic card</div>
    <div class="row">
        <div class="col-sm-6">
        this should bedisplayed here
        </div>  
            <div class="col-sm-4">
            <img src="\asset\images\shirts_men\shirt1.jpg" alt="" />
            
        </div>
</div>
</div>
<!-- card -->
  
</div>
@endsection


