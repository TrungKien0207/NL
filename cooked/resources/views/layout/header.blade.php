<nav class="navbar navbar-expand-lg navbar-light hd">
   <a class="navbar-brand text-center nav-type" href="homepage"><div class="hi"></div></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item active nav-type pt-3">
            <a class="nav-link" href="homepage" style="font-size: 18px; color: #F8F8F8; ;"> <p class="ki">Trang chủ </p></a>
         </li>

         <li class="nav-item dropdown pt-3">
            <a class="nav-link dropdown-toggle nav-type"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 18px; color: #F8F8F8;">
               Loại món ăn
            </a>
            <div class="dropdown-menu drop-link dl " style="width: 400px;" aria-labelledby="navbarDropdown" >

               @if(isset($cate))
               <div class="row">
                  @foreach($cate as $ct)
                     <div class="col-6 col-sm-4 justify-content-center">
                        <div class="nav-type"><a class="dropdown-item navber-link " href="{{route('get.menuc.product',[$ct->c_tenkd,$ct->id])}}">{{$ct->c_ten}}</a></div>
                     </div>
                  @endforeach
               </div>
               @endif
            </div>
         </li>

         <li class="nav-item dropdown pt-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: #F8F8F8;font-size: 18px;">
               Món ăn tiêu biểu
            </a>
            <div class="dropdown-menu drop-link dl" style="width: 580px;" aria-labelledby="navbarDropdown" >
               @if(isset($typ))
                  <div class="row">
                     @foreach($typ as $tt)
                        <div class="col-6 col-sm-4 ">
                           <div class="nav-type justify-content-center"><a class="dropdown-item navber-link p-2 pl-3" href="{{route('get.menut.product',[$tt->tenkd,$tt->id])}}">{{$tt->ten_ty}}</a></div>
                        </div>
                     @endforeach
                  </div>
               @endif
            </div>
         </li>

      </ul>

      <form class="form-inline my-2 my-lg-0 mr-4" action="{{route('find.product')}}">
         <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Tìm kiếm" aria-label="Search">
         <button class="btn btn-outline-info my-2 my-sm-0"  style="color: white;" type="submit">Tìm kiếm</button>
         <div id="search-suggest" class="s-suggest"></div>
      </form>

      <li class="nav-item dropdown " style="list-style-type: none;">
         <a class="nav-link sign-up" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-sign-in-alt pr-1"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-right container-item" aria-labelledby="navbarDropdown">
            @if(Auth::Check())
               <a class="dropdown-item dd-item" href="{{route('user_edit',\Auth::user()->id)}}"><i class="fas fa-user-tie mr-2"></i><b>{{\Auth::user()->name}}</b></a>
               <a class="dropdown-item dd-item" href="{{route('post.logout.user')}}"><i class="fas fa-sign-out-alt mr-2"></i>Đăng xuất</a>
            @else
               <a class="dropdown-item dd-item" href="login"><i class="fas fa-sign-in-alt mr-2"></i>Đăng nhập</a>
               <a class="dropdown-item dd-item" href="signup"><i class="far fa-address-card mr-2"></i>Đăng kí</a>
            @endif
         </div>
      </li>
   </div>
</nav>

