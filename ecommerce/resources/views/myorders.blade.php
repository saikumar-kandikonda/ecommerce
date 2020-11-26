@extends('layout')
@section('content')

<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Previous Orders</h4>
            @if($myorders->count()== 1)
            @foreach($myorders as $item)
  
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-6">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}" width=350px height=300px>
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Name : {{$item->name}}</h2>
                      <h5>Delivery Status : {{$item->status}}</h5>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment Status : {{$item->paymentstatus}}</h5>
                      <h5>Payment Method : {{$item->paymentmethod}}</h5>

                    </div>
             </div>
            
            </div>
           
            @endforeach
            @else
            <h1>you dont have any orders</h1>
            @endif
          
          </div>

     </div>
</div>
@endsection 