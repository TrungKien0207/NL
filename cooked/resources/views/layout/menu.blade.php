

<div class="choice-box pt-5">

	@foreach($category as $cat)
	    <div class="cuisine-box " data-micron="bounce">
	       <div class="choice_item">
	          <a href="#" target="_blank">
	             <img src="./image/nuong.png" alt="nướng">
	             <span> {{$cat->c_ten}} </span>
	          </a> 
	       </div>
	    </div>
	@endforeach

</div>