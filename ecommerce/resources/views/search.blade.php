@extends('layout')
@section('content')
<h1>Your search results  {{session()->get('username')}}</h1>

@foreach($search as $item)
    <div class="item {{$item['id']==1?'active':''}}" style="float:left" >
<a href="detailsofeachproduct/{{$item['id']}}">
      <img src="{{$item['gallery']}}" alt="Los Angeles" style="height:100px">
      <h3>{{$item['name']}}</h3>

      </a>
      </div>
    @endforeach

@endsection
