<footer>
	<nav>
	    <div class="footer">
	        <div class="container">
	              <div class="row cc ">
	                 <div class="col-sm-7 col-md-7">
	                    <div class="row ">
	                          <div class="col-6 ">
	                             <h5 class="ct-name">Loại món ăn</h5>
	                             
	                             @foreach($category as $cat)
	                             <div class="ct-name-text">
	                                <p><a href="#">{{$cat->c_ten}}</a></p>
	                             </div>
	                             @endforeach
	                          </div>
	                          <div class="col-6">
	                             <h5 class="ct-name ">Món ăn tiêu biểu</h5>

	                             @foreach($type as $ty)
	                             <div class="ct-name-text">
	                                <p><a href="#">{{$ty->ten_ty}}</a></p>
	                             </div>
								@endforeach

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