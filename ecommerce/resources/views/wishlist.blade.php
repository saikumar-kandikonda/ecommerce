@extends('layout')
@section('content')
<h1>Your wishlist  {{session()->get('username')}}</h1>

<br><br><br>

    
    
    <br><br><br>
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
             <form action="/addtocart" method="post">
            @csrf
            <input type="hidden" name="productid" value="{{$item->id}}">
            <button class="btn btn-danger">Add to cart</button><br>
            </form> 
             </div>
            </div>
            <br><br>
         
    @endforeach
 
   

@endsection