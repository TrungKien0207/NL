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
                <h1 class="page-header">Gia vị
                    <small>Danh sách</small>
                </h1>
            </div>

            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th class="text-center">ID</th>
                        <th class="text-center">ID Món ăn</th>
                        <th class="text-center">Tên Gia vị</th>
                        <th class="text-center">Tên không dấu</th>
                        <th class="text-center">Số lượng</th>
                        <th class="text-center">Xóa</th>
                        <th class="text-center">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($spice as $spi)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $spi->id }}</td>
                            <td>{{ $spi->idPD }}</td>
                            <td>{{ $spi->s_ten }}</td>
                            <td>{{ $spi->s_tenkd }}</td>
                            <td>{{ $spi->s_soluong }}</td>

                            <td class="center"><img src="https://img.icons8.com/fluent/48/000000/filled-trash.png" width="20px"/><a href="admin/spice/delete/{{ $spi->id }}"> Xóa</a></td>
                            <td class="center"><img src="https://img.icons8.com/cotton/64/000000/edit--v1.png"  width="20px"/>  <a href="admin/spice/edit/{{ $spi->id }}">Sửa</a></td>
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