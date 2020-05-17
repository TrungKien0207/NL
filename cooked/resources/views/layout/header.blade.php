<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #051B35; ">

   <a class="navbar-brand text-center" href="homepage"><i class="fas fa-book" style="color: #FFF ;"></i><h3 style="color: #FFF ;"><b>Cooked</b></h3></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
            <a class="nav-link" href="homepage" style="font-size: 18px; color: #FFF ;">Trang chủ </a>
         </li>

         <li class="nav-item dropdown ">
            <a style="font-size: 18px; color: #FFF;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Loại món ăn</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">



               </div>
            </div>
         </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: #FFF;">
               Món ăn tiêu biểu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
               @if($type)
                  @foreach($type as $ty)
                     <a class="dropdown-item" href="#">{{$ty->ten_ty}}</a>
                  @endforeach
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

