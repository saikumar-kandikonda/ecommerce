@extends('layout')
@section('content')
<h1>Your wishlist  {{session()->get('username')}}</h1>

<br>

    
    
    <br>
    <div class="usercart">
@foreach($usercart as $item)

<div class="row searched-item cart-list-devider">
             <div class="col-sm-3">
             <a href="detailsofeachproduct/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}" width=200px height=200px>
                    </a>
             </div>
             <div class="col-sm-3">
                    <div class="">
                    <a href="detailsofeachproduct/{{$item->id}}">
                      <h2>{{$item->name}}</h2>
                      </a>
                    </div>
             </div>
             
             <div class="col-sm-1">
             PRICE: <h3> {{$item->price}}</h3>
             </div>
           
             <div class="col-sm-1">
             <form action="/addtocart" method="post">
            @csrf
            <input type="hidden" name="productid" value="{{$item->id}}">
            <button class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button><br>
            </form> 
             </div>
            </div>
            <br><br>
         
    @endforeach
</div>
   

@stop