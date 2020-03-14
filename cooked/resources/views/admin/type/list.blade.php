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
                <h1 class="page-header">Loại món ăn tiêu biểu
                    <small>Danh sách</small>
                </h1>
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">Tên loại món ăn tiêu biểu</th>
                        <th class="text-center">Tên không dấu</th>
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($type as $ty)
	                    <tr class="odd gradeX" align="center">
	                        <td>{{$ty->id}}</td>
	                        <td>{{$ty->ten_ty}}</td>
                            <td>{{$ty->tenkd}}</td>
	                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/type/delete/{{$ty->id}}"> Xóa</a></td>
	                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/type/edit/{{$ty->id}}">Sửa</a></td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>	
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection