@extends('layout.index')

@section('content')
	@if($products)
  	@foreach($products as $product)
  	<!-- <div class="carousel_container touchDrag">
         <div class="carousel_item col-sm-12 col-md-3 ">
            <a href="{{route('get.detail.product',[$product->tenkd,$product->id])}}">
               <img src="./image/cooky-recipe-637028846248659693.jpg" alt="a" alt="Lights" style="width:100%" class="hover-fade-out">
               <div class="carousel_content p-2"><h5>{{$product->ten_sp}}</h5></div>
               <div class="carousel_content p-2"><h5>{{$product->content}}</h5></div>
            </a>
         </div>
      </div> -->
      <nav class="form pt-5" data-aos="fade-up" data-aos-duration="3000">
        <div class="box">
            <div class="title pl-5 pr-4"><h3> <b>{{$category->c_ten}}</b> </h3></div>
            <div class="box_empty mb-4"></div>
                <div class="box_box row row-cols-4">
                    <div class="box_container col-sm-12 col-md-3 ">
                        <div class="box_item ">
                          <a href="{{route('get.detail.product',[$product->tenkd,$product->id])}}">
                              <img src="image/img_product/{{$product->anh_sp}}" alt="a" alt="Lights" style="width:100%" class="hover-fade-out">
                              <div class="box_content p-2">
                                <h5>
                                <b>{{$product->ten_sp}}</b>
                                </h5>
                              <p style="font-size: 12px;">
                                {{$product->content}}
                                </p>
                            </div>   
                          </a>
                        </div>  
                    </div>
                </div>
            <div class="box_end p-4"></div>
        </div>
      </nav>
      @endforeach
    @endif
@endsection