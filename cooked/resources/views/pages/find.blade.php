@extends('layout.index')

@section('content')
    @if($productLists)
        <?php
            function changeColor($tr, $keyword) {
                return str_replace($keyword, "<span style='color:#E80000; font-style: italic;'>$keyword</span>", $tr);
            }
         ?>
        <nav class="form pt-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="box">
                <div class="title pl-5 pr-4"><h3> <b>Tìm kiếm: {{$keyword ?? ''}}</b> </h3></div>
                <div class="box_empty mb-4"></div>

                <div class="box_box row row-cols-4">
  	                @foreach($productLists as $pro)
                        <div class="box_container col-sm-12 col-md-3 rounded">
                            <div class="box_item">
                                <a href="{{route('get.detail.product',[$pro->tenkd,$pro->id])}}">
                                    <img src="image/img_product/{{$pro->anh_sp}}" alt="a" alt="Lights" style="width:100%" class="hover-fade-out">
                                    <div class="box_content pt-3 pb-3">
                                        <h5>
                                            <b>{!! changeColor($pro->ten_sp, $keyword) !!}</b>
                                        </h5>
                                        <p style="font-size: 14px;">
                                            {!! changeColor($pro->content, $keyword) !!}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </nav>
    @endif
@endsection
