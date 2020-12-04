@extends('layout')
@section('content')

<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Previous Orders</h4>
          
            @foreach($myorders as $item)
  
            <div class=" row searched-item cart-list-devider myorderscard">
             <div class="col-sm-4">
                <a href="detailsofeachproduct/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}" width=350px height=300px>
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h1>Name : {{$item->name}}</h1>
                      <h4>Delivery Status : {{$item->status}}</h4>
                      <h4>Address : {{$item->address}}</h4>
                      <h4>Payment Status : {{$item->paymentstatus}}</h4>
                      <h4>Payment Method : {{$item->paymentmethod}}</h4>

                    </div>
             </div>
            
            </div>
           
            @endforeach
           
          
          </div>

     </div>
</div>
@endsection 