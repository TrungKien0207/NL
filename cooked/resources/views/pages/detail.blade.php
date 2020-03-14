@extends('layout.index')

@section('content')
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-alt-circle-up fa-2x"></i></button>
    <main>
        <nav class="intro d-flex justify-content-center p-5" data-aos="fade-up" data-aos-duration="3000">
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
                            <div class="d-flex pl-3">
                                <div class="p-1 text-muted"><p>Cách thực hiện:</p></div>
                                <div class="p-1"><p><i><b>Rang</b></i></p></div>
                            </div>
                        </div>
						@if($productDetail)
						@foreach($productDetail as $productDetails)
                        <div class="second_content d-flex justify-content-center">
                            <div>
                                <h3>{{$productDetails->ten_sp}}</h3>
                            </div>
                        </div>
						
						@endforeach
						@endif
                        <div class="end_content d-flex justify-content-between pt-2 rounded-pill shadow mt-3">
                            <div>
                                <h5 class="text-center">Nguyên liệu</h5>
                                <h4 class="text-center" style="color: #ffa500;">5</h4>
                            </div>
                            <div>
                                <h5 class="text-center" >Thời gian nấu</h5>
                                <h4 class="text-center d-flex justify-content-center" style="color: #ffa500;">20 <p style="font-size: 14px;">phút</p> </h4>
                            </div>
                            <div>
                                <h5 class="text-center">Phần</h5>
                                <h4 class="text-center d-flex justify-content-center" style="color: #ffa500;"> 2  <p style="font-size: 14px;">người</p></h4>
                            </div>
                            <div>
                                <h5 class="text-center">Độ khó</h5>
                                <h4 class="text-center" style="color: #ffa500;">Dễ</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="ingredients d-flex justify-content-center pl-5 pr-5 pb-3" data-aos="fade-up" data-aos-duration="3000" >
            <div class="ingredients_container shadow" >
                <div class="ingredients_box">
                    <div class="ingredients_name border-bottom pb-1">
                        <h4>Nguyên liệu làm tôm xóc tỏi ớt</h4>
                        <p class="text-muted ">cho 2 Phần ăn</p>
                    </div>
                    <div class="ingredients_content pt-3">
                        <ul class="row ">
                            <li class="d-flex  col-6">
                                <p class="pl-5 sticker"><i class="far fa-paper-plane pr-3" style="color: #ff0000;"></i>Tôm tươi</p>
                                <p class="pl-3" style="color: #ffa500;"><b>400 gram</b></p>
                            </li>
                            <li class="d-flex  col-6">
                                <p class="pl-5"><i class="far fa-paper-plane pr-3" style="color: #ff0000;"></i>Dầu ăn</p>
                                <p class="pl-3" style="color: #ffa500;"><b>200 ml</b></p>
                            </li>
                            <li class="d-flex  col-6">
                                <p class="pl-5"><i class="far fa-paper-plane pr-3" style="color: #ff0000;"></i>Tỏi</p>
                                <p class="pl-3" style="color: #ffa500;"><b>3 củ</b></p>
                            </li>
                            <li class="d-flex  col-6">
                                <p class="pl-5"><i class="far fa-paper-plane pr-3" style="color: #ff0000;"></i>Hạt nêm</p>
                                <p class="pl-3" style="color: #ffa500;"><b>3 muỗng cà phê</b></p>
                            </li>
                            <li class="d-flex  col-6">
                                <p class="pl-5"><i class="far fa-paper-plane pr-3" style="color: #ff0000;"></i>Ớt</p>
                                <p class="pl-3" style="color: #ffa500;"><b>5 quả</b></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="cook d-flex justify-content-center pt-4 pb-5 " data-aos="fade-up" data-aos-duration="3000">
            <div class="cook_container shadow">
                <div class="cook_box">
                    <div class="cook_first d-flex justify-content-between border-bottom">
                        <div> 
                            <h4>Cách làm</h4>
                        </div>
                        <div class="d-flex">
                            <h6 class="text-muted"> <i>Thời gian thực hiện:</i> </h6>
                            <h5 class="d-flex justify-content-center pl-3" style="color: #ffa500;">20 <p style="font-size: 14px;">phút</p> </h5>
                        </div>
                    </div>
                    <div>
                        <div class="step pl-5 pr-5 pt-5 d-flex">
                            <div class="step_number pr-4 ">
                                <div class="bg-light border rounded step_box shadow">
                                    <p style="font-size: 16px;" class="text-muted pt-2">Bước</p>
                                    <h1 class="text-center" style="color: #ff0000;">1</h1>
                                </div>
                            </div>
                            <div class="step_content">
                                <p>Tôm mua về các bạn rửa sạch rồi cắt bớt phần chân, râu. Dùng dao rạch phần lưng lấy chỉ.
                                    Ướp tôm với 1.5 muỗng hạt nêm trong vòng 20 phút.</p>
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
                    <div>
                        <div class="step pl-5 pr-5 pt-5 d-flex">
                            <div class="step_number pr-4 ">
                                <div class="bg-light border rounded step_box shadow">
                                    <p style="font-size: 16px;" class="text-muted pt-2">Bước</p>
                                    <h1 class="text-center" style="color: #ff0000;">2</h1>
                                </div>
                            </div>
                            <div class="step_content">
                                <p>Bóc tỏi và băm nhuyễn tỏi, cho 100ml dầu ăn vào chảo rồi phi thơm tỏi, đến khi tỏi vàng đều là khâu chuẩn bị đã hoàn tất.</p>                           
                            </div>
                        </div>
                        <div class="step_box_img row row-cols-2">
                            <div class="step_img col p-3">
                                <img src="./image/buoc2-1.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc2-2.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc2-3.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc2-4.jpg" width="286px" height="286px" alt="1">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="step pl-5 pr-5 pt-5 d-flex">
                            <div class="step_number pr-4 ">
                                <div class="bg-light border rounded step_box shadow">
                                    <p style="font-size: 16px;" class="text-muted pt-2">Bước</p>
                                    <h1 class="text-center" style="color: #ff0000;">3</h1>
                                </div>
                            </div>
                            <div class="step_content">
                                <p>Vớt phần tỏi ra chén sạch, cho phần tôm đã ướp vào chiên cho đến khi lưng tôm tách ra và phần vỏ và đuôi giòn thì vớt ra. Dùng 1 cái chảo sạch khác cho dầu vào phi thơm phần ớt bằm, cho tôm vào đảo đều, 
                                    sau đó cho phần tỏi phi vào đảo cùng, thêm hạt nêm vào chảo, đảo đều rồi tắt bếp.</p>
                                <p class="text-muted" style="font-size: 14px;"><i class="far fa-bell pr-1"></i>Nếu không đủ dầu, bạn có thể đổ thêm 1 ít.</p>
                                
                            </div>
                        </div>
                        <div class="step_box_img row row-cols-2">
                            <div class="step_img col p-3">
                                <img src="./image/buoc3-1.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc3-2.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc3-3.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc3-4.jpg" width="286px" height="286px" alt="1">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="step pl-5 pr-5 pt-5 d-flex">
                            <div class="step_number pr-4 ">
                                <div class="bg-light border rounded step_box shadow">
                                    <p style="font-size: 16px;" class="text-muted pt-2">Bước</p>
                                    <h1 class="text-center" style="color: #ff0000;">4</h1>
                                </div>
                            </div>
                            <div class="step_content">
                                <p>Và thế là mồi đã sẵn sàng ra đĩa rồi. Rót bia và chén cùng chiến hữu thôi. Thêm một chén muối tiêu chanh nữa là ngon bá phát.</p>
                                <p class="text-muted" style="font-size: 14px;"><i class="far fa-bell pr-1"></i>Lưu ngay cách làm tôm xóc tỏi ớt đơn giản để có thể triển nhanh những buổi cuối tuần nhé.</p>
                                
                            </div>
                        </div>
                        <div class="step_box_img row row-cols-2">
                            <div class="step_img col p-3">
                                <img src="./image/buoc4-1.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc4-2.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc4-3.jpg" width="286px" height="286px" alt="1">
                            </div>
                            <div class="step_img col p-3">
                                <img src="./image/buoc4-4.jpg" width="286px" height="286px" alt="1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </main>
@endsection