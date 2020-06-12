 <!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; border: 0px solid #fff">
    <div class="navbar-header">
        <a class="navbar-brand mb-4" href="./admin/User/list" style="font-size: 3em; color: #fff"><b>Cooked Admin</b></a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right ">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle " data-toggle="dropdown" href="#">
               <img src="https://img.icons8.com/fluent/48/000000/login-rounded-right.png" width="35px" />
            </a>
            <ul class="dropdown-menu dropdown-user container-item">
                @if (Auth::check())
                    <li class="dd-item"><a href="admin/User/edit/{{Auth::user()->id}}"><img class="mr-2" src="https://img.icons8.com/bubbles/50/000000/id-short-hair-lady.png" width="30px" /> <b>{{Auth::user()->name}}</b>  </a>
                    </li>
                    <li class="dd-item"><a href="admin/logout"><img class="mr-2" src="https://img.icons8.com/clouds/100/000000/export.png" width="30px" /> Đăng xuất</a>
                    </li>
                @endif
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    @include('admin.layout.menu')
</nav>
