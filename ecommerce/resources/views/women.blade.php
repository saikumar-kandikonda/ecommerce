@extends('layout')
@section('content')



<h1>welcome to MEnProducts page {{session()->get('username')}}</h1>


<div class="allproducts">
@foreach($allwomen as $item)
    <div class="item {{$item->id==1?'active':''}}" style="float:left" >

    
    <div class="card">
    
    <a href="detailsofeachproduct/{{$item->id}}">

      <img src="{{$item->gallery}}" alt="Los Angeles">
    <div class="card-body">
      <h4 class="card-title">{{$item->name}}</h4>
      <h5 class="card-text">{{$item->productname}}</h5>
      </a>
    </div>
  </div>
      </div>

      
    @endforeach
    
    <br><br>
   