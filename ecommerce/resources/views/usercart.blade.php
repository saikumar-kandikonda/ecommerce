@extends('layout')
@section('content')
<h1>Your cart  {{session()->get('username')}}</h1>
<a href="/ordernow"><button class="btn-lg btn-success">ORDER NOW</button></a>
<br><br><br>
@php
$totalprice=0
@endphp

@foreach($usercart as $item)
<div class="row searched-item cart-list-devider">
             <div class="col-sm-3">
             <a href="detailsofeachproduct/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}" width=200px height=200px>
                  </a>
             </div>
             <div class="col-sm-3">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>
             </div>
             <div class="col-sm-1">
             PRICE: {{$item->price}}
             </div>
             <div class="col-sm-1">
             <a href="/removecart/{{$item->cartid}}" class="btn btn-warning" >Remove From Cart</a>
             </div>
            </div>
            <br><br>
          <input type="hidden" value="{{$totalprice+=$item->price}}">  
    @endforeach
    <h1>TOTAL PRICE IS {{$totalprice}}</h1>   

@endsection