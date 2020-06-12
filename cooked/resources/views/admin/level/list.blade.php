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
                <h1 class="page-header">Mức độ
                    <small>Danh sách</small>
                </h1>
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">ID Món ăn</th>
                        <th class="text-center">Mức độ</th>
                        <th class="text-center">Mức độ không dấu</th>
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($level as $lv)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $lv->id }}</td>
                            <td>{{ $lv->idPDuct }}</td>
                            <td>{{ $lv->l_ten }}</td>
                            <td>{{ $lv->l_tenkd }}</td>
                            <td class="center"><img src="https://img.icons8.com/fluent/48/000000/filled-trash.png" width="20px"/><a href="admin/level/delete/{{ $lv->id }}"> Xóa</a></td>
                            <td class="center"><img src="https://img.icons8.com/cotton/64/000000/edit--v1.png"  width="20px"/> <a href="admin/level/edit/{{ $lv->id }}">Sửa</a></td>
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