<footer>
	<nav>
	    <div class="footer">
	        <div class="container">
	              <div class="row cc ">
	                 <div class="col-sm-7 col-md-7 pt-5">
	                     <div class="row ">
	                        <div class="col-4" >
	                           @if(isset($cate))
                  					@foreach($cate as $ct)
                     					<div class="ft-link"><a href="{{route('get.menuc.product',[$ct->c_tenkd,$ct->id])}}">{{$ct->c_ten}}</a></div>
                  					@endforeach
               					@endif
	                        </div>
	                        <div class="col-4">
	                           @if(isset($typ))
               						@foreach($typ as $tt)
                  						<div class="ft-link"><a href="{{route('get.menut.product',[$tt->tenkd,$tt->id])}}">{{$tt->ten_ty}}</a></div>
              							@endforeach
           							@endif
	                        </div>
	                     </div>
	                 	</div>
	                 	<div class="col-sm-5 col-md-5 pl-2 pr-3">
	                    	<div class="articles ">
	                          <h5></h5>
	                          <div class="articles-list d-flex ">
	                             <div class="articles-text pl-4 pt-1 text-justify">
	                                <h6 style="font-size: 20px;">Cảm giác người ta ăn đồ của mình rồi quay sang khen ngon, nó hạnh phúc hơn được cho cả cục tiền</h6>

	                             </div>
	                          </div>
	                          <p class="text-right" style="color: #fff;">_ Alain Nguyễn _</p>

	                          <div class="articles-list d-flex text-justify pt-3">
	                             <div class="articles-text pl-4 pt-1 ">
	                                <h6 style="font-size: 20px;">Nấu ăn là một nghề đòi hỏi sức khỏe, gan lì, tầm nhìn và tư duy mở. Còn gì tuyệt vời hơn khi đi khắp thế giới và thưởng thức những món hảo hạng nhất</h6>

	                             </div>
	                          </div>
	                          <p class="text-right" style="color: #fff;">_ Gordon Ramsay _</p>
	                          <div class="clearfix"></div>
	                    </div>
	                 </div>
	            </div>
	        </div>
	     </div>
	 </nav>
</footer>