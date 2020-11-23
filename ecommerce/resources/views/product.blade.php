@extends('layout')
@section('content')
<h1>welcome to Home page {{session()->get('username')}}</h1>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
  @foreach($productdata as $item)
    <div class="item {{$item['id']==1?'active':''}}" >
<a href="detailsofeachproduct/{{$item['id']}}">
      <img src="{{$item['gallery']}}" alt="Los Angeles" style="height:300px">
      <h3>{{$item['name']}}</h3>

      </a>
      </div>
    @endforeach
   

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br><br>
@foreach($productdata as $item)
    <div class="item {{$item['id']==1?'active':''}}" style="float:left" >
<a href="detailsofeachproduct/{{$item['id']}}">
      <img src="{{$item['gallery']}}" alt="Los Angeles" style="height:100px">
      <h3>{{$item['name']}}</h3>

      </a>
      </div>
    @endforeach

@endsection
