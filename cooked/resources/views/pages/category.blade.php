@extends('layout.index');

@section('content')
	@if($products)
  	@foreach($products as $product)
  	<div class="carousel_container touchDrag">
         <div class="carousel_item ">
            <a href="{{route('get.detail.product',[$product->tenkd,$product->id])}}">
               <img src="./image/cooky-recipe-637028846248659693.jpg" alt="a" alt="Lights" style="width:100%" class="hover-fade-out">
               <div class="carousel_content p-2"><h5>{{$product->ten_sp}}</h5></div>
               <div class="carousel_content p-2"><h5>{{$product->content}}</h5></div>
            </a>
         </div>
      </div>
      @endforeach
    @endif
@endsection