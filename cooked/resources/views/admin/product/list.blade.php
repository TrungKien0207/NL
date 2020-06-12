@extends('admin.layout.index')

@section('content');
<!-- Page Content -->
<div id="page-wrapper">
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Món ăn
                    <small>Danh sách</small>
                </h1>
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">ID Loại Món ăn</th>
                        <th class="text-center">ID Loại Món ăn tiêu biểu</th>
                        <th class="text-center">Tên món ăn</th>
                        <th class="text-center">Tên không dấu</th>
                        <th class="text-center">Hình ảnh</th>
                        <th class="text-center">Nội dung</th>
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $pro)
                        <tr class="odd gradeX" align="center">
                            <td class="bg-info">{{$pro->id}}</td>
                            <td>{{$pro->idCategory}}</td>
                            <td>{{$pro->idType}}</td>
                            <td class="bg-info">{{$pro->ten_sp}}</td>
                            <td>{{$pro->tenkd}}</td>
                            <td class="bg-info">{{$pro->anh_sp}}</td>
                            <td>{{$pro->content}}</td>
                            <td class="center"><img src="https://img.icons8.com/fluent/48/000000/filled-trash.png" width="20px"/><a href="admin/product/delete/{{$pro->id}}"> Xóa</a></td>
                            <td class="center"><img src="https://img.icons8.com/cotton/64/000000/edit--v1.png"  width="20px"/>  <a href="admin/product/edit/{{$pro->id}}">Sửa</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Bình luận
                    <small>Danh sách</small>
                </h1>
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">Tên người dùng</th>
                        <th class="text-center">Tên sản phẩm</th>
                        <th class="text-center">Nội dung</th>
                        <th class="text-center">Ngày đăng</th>
                        <th class="text-center">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @if($comments)
                    @foreach($comments as $comment)
                        <tr class="odd gradeX" align="center">
                            <td class="bg-info">{{$comment->id}}</td>
                            <td>{{isset($comment->getComment->name) ? $comment->getComment->name : 'NO'}}</td>
                            <td>{{isset($comment->product->ten_sp) ? $comment->product->ten_sp : 'NO'}}</td>
                            <td>{{$comment->contentC}}</td>
                            <td class="bg-info">{{$comment->created_at}}</td>

                            <td class="center"><img src="https://img.icons8.com/fluent/48/000000/filled-trash.png" width="20px"/><a href="admin/comment/delete/{{$comment->id}}"> Xóa</a></td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection