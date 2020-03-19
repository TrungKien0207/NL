

<div class="choice-box pt-5">

	@foreach($category as $cat)
	    <div class="cuisine-box " data-micron="bounce">
	       <div class="choice_item">
	          <a href="{{route('get.category.product',[$cat->c_tenkd,$cat->id])}}" target="_blank">
	             <img src="image/img_category/{{$cat->c_img}}" style="height: 40px;" alt="{{$cat->c_ten}}" c>
	             <span style="font-size: 15px;"> {{$cat->c_ten}} </span>
	          </a> 
	       </div>
	    </div>
	@endforeach

</div>