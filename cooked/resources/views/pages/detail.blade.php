@extends('layout.index')

@section('content')
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-alt-circle-up fa-2x"></i></button>
    <main>
        <nav class="intro d-flex justify-content-center p-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="intro_container shadow">
                <div class="intro_box">
                    <div class="intro_image w-100">
                        <img src="./image/content1.jpg" alt="1">
                    </div>
                    <div class="intro_content">
                        <div class="first_content d-flex justify-content-center pt-4">
                            <div class="d-flex">
                                <div class="p-1 text-muted"><p>Mục đích:</p></div>
                                <div class="p-1"><p><i><b>Tiệc</b></i></p></div>
                            </div>

                            @if($category)
                                @foreach($category as $categorys)
                            <div class="d-flex pl-3">
                                <div class="p-1 text-muted"><p>Cách thực hiện:</p></div>
                                <div class="p-1"><p><i><b>{{$categorys->c_ten}}</b></i></p></div>
                            </div>
                                @endforeach
                            @endif

                        </div>

						@if($productDetails)
						@foreach($productDetails as $productDetail)
<!-- 						{{$productDetail}}
 -->                        <div class="second_content d-flex justify-content-center">
                            <div>
                                <h1><b>{{$productDetail->ten_sp}}</b></h1>
                            </div>
                        </div>
						 @endforeach
						@endif
						
                        <div class="end_content d-flex justify-content-between pt-2 rounded-pill shadow mt-3">
                           <!--  <div>
                                <h5 class="text-center">Nguyên liệu</h5>
                                <h4 class="text-center" style="color: #ffa500;">5</h4>
                            </div> -->
                            @if( $timecooks )
                                @foreach( $timecooks as $timecook )
                            <div>
                                <h5 class="text-center" >Thời gian nấu</h5>
                                <h4 class="text-center d-flex justify-content-center" style="color: #ffa500;">{{ $timecook->t_ten }} <p style="font-size: 14px;">phút</p> </h4>
                            </div>
                                @endforeach
                            @endif
                            <div>
                                <h5 class="text-center">Phần</h5>
                                <h4 class="text-center d-flex justify-content-center" style="color: #ffa500;"> 2  <p style="font-size: 14px;">người</p></h4>
                            </div>

                            @if($levels)
                                @foreach($levels as $level)
                            <div>
                                <h5 class="text-center">Độ khó</h5>
                                <h4 class="text-center" style="color: #ffa500;">{{ $level->l_ten }}</h4>
                            </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="ingredients d-flex justify-content-center pl-5 pr-5 pb-3" data-aos="fade-up" data-aos-duration="2000" >
            <div class="ingredients_container shadow" >
                <div class="ingredients_box">
                    <div class="ingredients_name border-bottom pb-1">
                        <h4>Nguyên liệu làm tôm xóc tỏi ớt</h4>
                        <p class="text-muted ">cho 2 Phần ăn</p>
                    </div>

                    @if($getMaterials)
                        @foreach($getMaterials as $getMaterial)
                    <div class="ingredients_content pt-3">
                        <ul class="row ">
                            <li class="d-flex  col-6">
                                <p class="pl-5 sticker"><i class="far fa-paper-plane pr-3" style="color: #ff0000;"></i>{{$getMaterial->r_ten}}</p>
                                <p class="pl-3" style="color: #ffa500;"><b>{{$getMaterial->r_soluong}}</b></p>
                            </li>
                        </ul>
                    </div>
                        @endforeach
                    @endif
                    
                    @if( $getSpices )
                        @foreach( $getSpices as $getSpice )
                    <div class="ingredients_content pt-3">
                        <ul class="row ">
                            <li class="d-flex  col-6">
                                <p class="pl-5 sticker"><i class="far fa-paper-plane pr-3" style="color: #ff0000;"></i>{{$getSpice->s_ten}}</p>
                                <p class="pl-3" style="color: #ffa500;"><b>{{$getSpice->s_soluong}}</b></p>
                            </li>
                        </ul>
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </nav>
        <nav class="cook d-flex justify-content-center pt-4 pb-5 " data-aos="fade-up" data-aos-duration="2000">
            <div class="cook_container shadow">
                <div class="cook_box">
                    <div class="cook_first d-flex justify-content-between border-bottom">
                        <div> 
                            <h4>Cách làm</h4>
                        </div>
                        
                        @if( $timecooks )
                            @foreach( $timecooks as $timecook )
                        <div class="d-flex">
                            <h6 class="text-muted"> <i>Thời gian thực hiện:</i> </h6>
                            <h5 class="d-flex justify-content-center pl-3" style="color: #ffa500;">{{$timecook->t_ten}} <p style="font-size: 14px;">phút</p> </h5>
                        </div>
                            @endforeach
                        @endif
                    </div>

							@if($getDetails)
							@foreach($getDetails as $getDetail)			
                    <div>
                        <div class="step pl-5 pr-5 pt-5 d-flex">
                            <div class="step_number pr-4 ">
                                <div class="bg-light border rounded step_box shadow">
                                    <p style="font-size: 16px;" class="text-muted pt-2">Bước</p>
                                    <h1 class="text-center" style="color: #ff0000;">
                                    {{$getDetail->step}}	</h1>
                                </div>
                            </div>
                            <div class="step_content">
                                <p>{{$getDetail->content}}</p>
                                <p class="text-muted" style="font-size: 14px;"><i class="far fa-bell pr-1"></i>Rạch càng sâu thì tôm xòe ra càng đẹp và thấm gia vị hơn, tuy nhiên, tránh làm đứt phần thân, đầu và đuôi.</p>
                                
                            </div>
                        </div>
                        <div class="step_box_img row row-cols-2">
                            <div class="step_img col p-3">
                                <img src="./image/buoc1-1.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc1-2.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc1-3.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc1-4.jpg" width="286px" height="286px" alt="1">
                            </div>
                        </div>
                    </div>
                   
					@endforeach
						@endif

                </div>
            </div>

        </nav>
        @if(Auth::Check())
            <div class="m-3"  data-aos="fade-up" data-aos-duration="2000">
                <div class="newsletter">
                    @if(session('thongbao'))
                        {{session('thongbao')}}
                    @endif
                    <form action="danh-gia/{{$postProduct->id}}" method="post">
                    @csrf
                        <div class="container-newsletter">
                            <h5 class="ct-name ">Đóng góp</h5>
                            <div class="email">
                                <h6 class="text-center">Mọi ý kiến xin nhập ở đây! Chúng tôi rất vui khi nhận được sự đóng góp của bạn!</h6>
                            
                                <div class="container-email d-flex justify-content-center">
                                    <div class="form-group mx-sm-3 mb-2 ">
                                        <label for="inputPassword2" class="sr-only ">Đóng góp</label>
                                        <div class="input-group"></div>
                                        <textarea class="form-control" aria-label="With textarea" name="content"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info mb-2">Gửi</button>
                                </div>
                                @if($commentDetails)
                                    @foreach($commentDetails as $commentDetail)
                                        <div class="comment pl-5 pr-4">
                                            <div class="cont pt-3 pb-1">
                                                <div class="comment__txt p-3" style="background-color: #C3BABA; border-radius: 10px;">
                                                    <div class="d-flex pb-2">
                                                        <h6 class="comment__name mb-1" style="color: black; font-family: inherit;">{{$commentDetail->getComment->name}}</h6>
                                                        <div class="comment__conent pl-4" style="font-size: 12px; font-family: monospace; color: #fff">{{$commentDetail->created_at}}</div>
                                                    </div>

                                                    <div class="comment__conent">{{$commentDetail->contentC}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endif

    </main>
@endsection