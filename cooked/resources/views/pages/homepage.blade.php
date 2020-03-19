@extends('layout.index')

@section('content')

	<main class="pt-5" data-aos="fade-up" data-aos-duration="3000">
	  	<nav class="container ">
	    	<h4 class="d-flex justify-content-center h-100 pt-4">Hôm nay ăn gì? Tìm hiểu nào!</h4>
		    
		    <div class="search h-100" >
		        <div class="d-flex justify-content-center h-100 pt-2">
		           <div class="searchbar">
		              <input class="search_input " type="text" name="" placeholder="Gà nướng, canh cải, cá kho tiêu,...">
		              <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
		           </div>
		        </div>
		    </div>

	     	<!-- menu -->
	     	@include('layout.menu')

	  	</nav>

	  	<nav><div class="clearfix h-100 p-5"></div></nav>

	  	<nav data-aos="fade-up" data-aos-duration="3000"> 
	     	<div class="col-sm d-block cod bd1-right bia pb-5">
		        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		           	<div class="carousel-inner">
		              	<div class="carousel-item active ">
		                 	<img class="d-block " src="./image/bia1.jpg" alt="First slide" style="width: 1200px; height: 500px; margin: 0 auto">
		              	</div>
		              	<div class="carousel-item " >
		                 	<img class="d-block" src="./image/20171229-094344-3.jpg" alt="Second slide" style="width: 1200px; height: 500px; margin: 0 auto">
		              	</div>
		             	<div class="carousel-item " >
		                	<img class="d-block" src="./image/20171229-094443-5.jpg" alt="Three slide" style="width: 1200px; height: 500px; margin: 0 auto">
		              	</div>
		           	</div>
		           	<a class="carousel-control-prev bot-left" href="#carouselExampleControls" role="button" data-slide="prev">
		              	<span class="carousel-control-prev-icon icon" aria-hidden="true"></span>
		              	<span class="sr-only text-primary">Previous</span>
		           	</a>
		           	<a class="carousel-control-next bot-right" href="#carouselExampleControls" role="button" data-slide="next">
		              	<span class="carousel-control-next-icon icon" aria-hidden="true"></span>
		              	<span class="sr-only">Next</span>
		           	</a>
		        </div>
	     	</div>
	  	</nav>
	  
	@foreach($type as $ty => $val)
		<nav class="form pt-5" data-aos="fade-up" data-aos-duration="3000">
	     	<div class="box">
		        <div class="title pl-5 pr-4"><h3> <b>{{$val->ten_ty}}</b> </h3></div>
		        <div class="box_empty mb-4"></div>
		        @if(isset($val->getType) != null)
 				        <div class="box_box row row-cols-4">
			        @foreach($val->getType as $key => $value )
				           	<div class="box_container col-sm-12 col-md-3 ">
				              	<div class="box_item ">
				                 	<a href="{{route('get.detail.product',[$value->tenkd,$value->id])}}">
					                    <img src="image/img_product/{{$value->anh_sp}}" alt="a" alt="Lights" style="width:100%" class="hover-fade-out">
					                    <div class="box_content p-2">
					                    	<h5>
					                    	<b>{{isset($value->ten_sp) ? $value->ten_sp : ''}}</b>
					                    	</h5>
					                		<p style="font-size: 12px;">
					                    	{{isset($value->content) ? $value->content : ''}}
					                    	</p>
					                	</div>   
				                 	</a>
				              	</div>	
				           	</div>
					@endforeach
				        </div>
				@endif
		        <div class="box_end p-4"></div>
	     	</div>
	  	</nav>
	@endforeach

	</main>

@endsection