<nav class="navbar navbar-expand-lg navbar-light " style="background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);">
  
  <a class="navbar-brand text-center" href="homepage"><i class="fas fa-book"></i><h3><b>Cooked</b></h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="homepage" style="font-size: 18px">Trang chủ </a>
      </li>

      <li class="nav-item dropdown ">
        <a style="font-size: 18px" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Loại món ăn
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if($category)
            @foreach($category as $cat)
              <a class="dropdown-item" href="{{route('get.category.product',[$cat->c_tenkd,$cat->id])}}">{{$cat->c_ten}}</a>
            @endforeach
          @endif
        </div>
      
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Món ăn tiêu biểu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if($type)
            @foreach($type as $ty)
              <a class="dropdown-item" href="{{route('get.detail.product',[$ty->tenkd,$ty->id])}}">{{$ty->ten_ty}}</a>
            @endforeach
          @endif
        </div>
      </li>

    </ul>

    <form class="form-inline my-2 my-lg-0 mr-4">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
    <li class="nav-item dropdown " style="list-style-type: none;"> 
      <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-in-alt fa-2x"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
         @if(Auth::Check())
          <a class="dropdown-item" href="user"><i class="fas fa-user-tie mr-2"></i><b>{{\Auth::user()->name}}</b></a>
          <a class="dropdown-item" href="{{route('post.logout.user')}}"><i class="fas fa-sign-out-alt mr-2"></i>Đăng xuất</a>
        @else
          <a class="dropdown-item" href="login"><i class="fas fa-sign-in-alt mr-2"></i>Đăng nhập</a>
          <a class="dropdown-item" href="signup"><i class="far fa-address-card mr-2"></i>Đăng kí</a>
        @endif
      </div>
    </li>
    

  </div>
</nav>