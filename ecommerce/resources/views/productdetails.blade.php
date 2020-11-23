@extends('layout')
@section('content')
<h1>welcome to product description page {{session()->get('username')}}</h1><br>   

<div class="container">
<div class="row" >
<div class="col-sm-6">
<img src="{{$singleproductdetails['gallery']}}" alt="" style="height:250px"></img><br>
</div>
<div class="col-sm-6">
<h2>{{$singleproductdetails['name']}}</h2><br>
<h3>{{$singleproductdetails['price']}}</h3><br>
<h4>{{$singleproductdetails['description']}}</h4><br>
<form action="">
@csrf
<input type="hidden" name="productid" value="{{$singleproductdetails['id']}}">
<button class="btn-lg btn-success">Buy Now</button>
</form>
<form action="/addtocart" method="post">
@csrf
<input type="hidden" name="productid" value="{{$singleproductdetails['id']}}">
<button class="btn-lg btn-primary">Add to cart</button><br>
</form>


</div>
</div>

</div>
@endsection