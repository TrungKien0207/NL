@extends('layout.index')

@section('content')
	<main class="pt-5" data-aos="fade-up" data-aos-duration="3000">
		<nav class="container carouselCt">
			<h4 class="d-flex justify-content-center h-100 pt-4"><b>Hôm nay ăn gì? Tìm hiểu nào!</b></h4>
			<div class="search h-100 " >
				<form action="{{route('find.product')}}">
					<div class="d-flex justify-content-center h-100 pt-2">
						<div class="searchbar">
							<input class="search_input " type="text" name="keyword" placeholder="Gà nướng, canh cải, cá kho tiêu,...">
							<!-- <button type="submit" class="search_icon"><i class="fas fa-search"></i></button> -->
						</div>
					</div>
				</form>
			</div>
			<!-- menu -->
			@include('layout.menu')
		</nav>

		<nav><div class="clearfix h-100 p-5"></div></nav>

		<nav data-aos="fade-up" data-aos-duration="3000" class="mb-5">
			<div class="col-sm d-block cod bd1-right bia p-0" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 0;">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active ">
							<img class="d-block " src="./image/bia1.jpg" alt="First slide" style="width: 1360px; height: 550px; margin: 0 auto; border-radius: 0;">
						</div>
						<div class="carousel-item " >
							<img class="d-block" src="./image/20171229-094344-3.jpg" alt="Second slide" style="width: 1360px; height: 550px; margin: 0 auto; border-radius: 0;">
						</div>
						<div class="carousel-item " >
							<img class="d-block" src="./image/20171229-094443-5.jpg" alt="Three slide" style="width: 1360px; height: 550px; margin: 0 auto; border-radius: 0;">
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
					<div class="d-flex justify-content-between viewdetail">
						<div class="title pl-5 pr-4"><h3> <b>{{$val->ten_ty}}</b> </h3></div>
						<div class="pr-5 view_more"><a href="{{route('get.type.product',[$val->ten_ty,$val->id])}}">Xem thêm <i class="fas fa-angle-right"></i></a></div>
					</div>
					<div class="box_empty mb-4"></div>
					@if(isset($val->getType) != null)
						<div class="box_box row row-cols-4">
							@foreach($val->getType as $key => $value )
								<div class="box_container col-sm-12 col-md-3 ">
									<div class="box_item ">
										<a href="{{route('get.detail.product',[$value->tenkd,$value->id])}}">
											<img src="image/img_product/{{$value->anh_sp}}" alt="a" alt="Lights" style="width:100%" class="hover-fade-out">
											<div class="box_content p-3">
												<h4>
													<b>{{isset($value->ten_sp) ? $value->ten_sp : ''}}</b>
												</h4>
												<p>
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