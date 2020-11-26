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
<!-- Buy Now -->
<form action="/ordernow" method="post">
@csrf
<input type="hidden" name="productid" value="{{$singleproductdetails['id']}}">
<button class="btn-lg btn-success">Buy Now</button>
</form>
<!-- Buy Now -->
<!-- Add to cart -->
<form action="/addtocart" method="post">
@csrf
<input type="hidden" name="productid" value="{{$singleproductdetails['id']}}">
<button class="btn-lg btn-primary">Add to cart</button><br>
</form>
<!-- Add to cart -->
<!-- Add to Wishlist -->
<form action="/wishlist" method="post">
@csrf
<input type="hidden" name="productid" value="{{$singleproductdetails['id']}}">
<button class="btn-lg btn-danger">Add to Wishlist</button><br>
</form>
<!-- Add to Wishlist -->
</div>
</div>

</div>
@endsection