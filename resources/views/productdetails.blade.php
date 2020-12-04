@extends('layout')
@section('content')
 

<div class="containerprodcutdetails">
<div class="row">
<div class="col-sm-4">
    
<img src="{{$singleproductdetails['gallery']}}" alt="" ></img><br>
</div>
<div class="col-sm-6">
<h1>{{$singleproductdetails['name']}}</h1><br>
<h2>Rs.{{$singleproductdetails['price']}}</h2><br>
<h4>{{$singleproductdetails['description']}}</h4><br><br>
<table class="table-bordered">
    <!-- Buy Now -->
<tr>
<td>
<form action="/ordernow" method="post">
@csrf
<input type="hidden" name="productid" value="{{$singleproductdetails['id']}}">
<button class="btn btn-success">Buy Now</button>
</form>
<!-- Buy Now -->
</td><td>

<!-- Add to cart -->
<form action="/addtocart" method="post">
@csrf
<input type="hidden" name="productid" value="{{$singleproductdetails['id']}}">
<button class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</button><br>
</form>
<!-- Add to cart -->
</td><td>
<!-- Add to Wishlist -->
<form action="/wishlist" method="post">
@csrf
<input type="hidden" name="productid" value="{{$singleproductdetails['id']}}">
<button class="btn btn-danger"><span class="glyphicon glyphicon-bookmark"></span>Add to Wishlist</button><br>
</form>
<!-- Add to Wishlist -->

</td>
</tr>
</table>
</div>
</div>

</div>
@endsection