@extends('layouts.app')
@section('content')
<br>
    <legend> Products </legend>
<br>

  <div class="row">
    @foreach ($products as $item)
        <a href="">
        <div class="image-cards col-md-3">
            <div class="image-card">
                <div class="image-card-banner">
                    <img src="{{$item->image}}">
                </div>
                <div class="card-details">
                    <h1><b>{{$item->name}}</b></h1>
                    <p class="cards-p"><i class=""></i>
                      price: <span id="price"> {{$item->price}}</span> taka
                  </p>
                  <a href="{{route('products.addtocart',['id'=>$item->id])}}" class="btn btn-primary" style="color:white">Add to Cart</a>
                </div>
              
            </div>
        </div>
    </a>
  @endforeach
  
  </div>
@endsection