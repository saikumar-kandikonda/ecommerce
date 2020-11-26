@extends('layout')
@section('content')
<h1>Hey, {{session()->get('username')}} Your total amount is</h1><br><br>
<table class="table table-striped">
    <tbody>
    <tr>
      <th scope="row">Amount</th>
      <td>
      <!-- @php
    $totalprice=$totalprice
    @endphp -->
    {{$totalprice}}
    </td>
    </tr>
    <tr>
      <th scope="row">tax</th>
      <td>
      @php
    $taxes=0
    @endphp
    {{$taxes}}
    </td>
        </tr>
        <tr>
      <th scope="row">delivery charges</th>
      <td>
      @php
    $delivery_charges=50
    @endphp
    {{$delivery_charges}}
    </td>
        </tr>
        <tr>
      <th scope="row"><h1>Total Amount</h1></th>
      <td>
      {{$taxes+$delivery_charges}}
      </td>
        </tr>
      </tbody>
</table>
<div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
            
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="online" id="online"name="payment"><label for="online"> <span>online payment</span> </label><br> <br>
                  <input type="radio" value="EMI" id="EMI"name="payment"><label for="EMI"> <span>EMI payment</span></label> <br><br>
                  <input type="radio" value="Delivery" id="Delivery"name="payment"> <label for="Delivery"><span>Payment on Delivery</span></label> <br> <br>

                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
          </div>
@endsection