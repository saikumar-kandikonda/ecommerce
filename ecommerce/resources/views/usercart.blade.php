@extends('layout')
@section('content')



@php
$totalprice=0
@endphp
<div class="usercart">
    @if($usercart->count()>=1)
    
    <a href="/ordernow"><button class="btn btn-success" id="ordernowbutton">ORDER NOW</button></a>
@else

@endif
    <br><br><br>
    
   
@foreach($usercart as $item)


<div class="row searched-item cart-list-divider">

             <div class="col-sm-3">
             <a href="detailsofeachproduct/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}" >
                  </a>
             </div>
             <div class="col-sm-2">
                    <div class="">
                      <h1>{{$item->name}}</h1>
                      <h4>{{$item->description}}</h4>
                    </div>
             </div>
             <div class="col-sm-1">
            PRICE: <h3> {{$item->price}}</h3>
             </div>
             <div class="col-sm-1">
             <a href="/removecart/{{$item->cartid}}" class="btn btn-danger" >Remove From Cart&nbsp;<span class="glyphicon glyphicon-remove"></span></a>
             </div>
            </div>
            <br><br>
          <input type="hidden" value="{{$totalprice+=$item->price}}">  
    @endforeach
  
    <div class="totalbutton">
      
    TOTAL PRICE IS {{$totalprice}}<br> </div>


   
      
   

@endsection
</div>
</div>