@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid ">
	<div class="row ">
		<div class="col-lg-12 ">
			<h1 class="page-header">Chi tiết
				<small>Thêm</small>
			</h1>
		</div>
		<!-- /.col-lg-12 -->
		<div class="col-lg-12 " style="padding-bottom:120px">
			@if(count($errors) > 0)
			<div class="alert alert-danger">
				@foreach($errors->all() as $err)
				{{$err}} <br>
				@endforeach
			</div>
			@endif

			@if(session('thongbao'))
			<div class="alert alert-success">
				{{session('thongbao')}}
			</div>
			@endif

			<form action="admin/detail/insert" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				{{csrf_field()}} <!-- có dòng này mới được submit -->
				<div class="form-group col">
					<label><h4>Món ăn</h4></label>
					<select class="form-control" name="idproduct" placeholder="Nhập tên món ăn">
						<option value="">Món ăn</option>
						@if(isset($product))
						@foreach($product as $pro)
						<option value="{{$pro->id}}">{{$pro->ten_sp}}</option>
						@endforeach
						@endif
					</select>
				</div>
				<div class="form-group col-sm">
					<label><h4>Bước</h4></label>
					<input class="form-control" name="step" placeholder="Nhập tên gia vị" />
				</div>

				<div class="form-group col">
					<label><h4>Nội dung</h4></label>
					<input class="form-control" name="content" placeholder="Nhập tên gia vị" />
				</div>

				<div class="form-group col">
					<label><h4>Chú ý</h4></label>
					<input class="form-control" name="note" placeholder="Nhập tên gia vị" />
				</div>

				<div class="row">
					<div class="form-group col-sm-4">
						<label><h4>Ảnh background</h4></label>
						<input type="file" class="form-control-file" name="bg" placeholder="Nhập tên gia vị" />
					</div>


					<div class="row">
						<div class="form-group col-sm-4">
							<label><h4>Ảnh 1</h4></label>
							<input type="file" class="form-control-file" name="image1" placeholder="Nhập tên gia vị" />
						</div>

						<div class="form-group col-sm-4">
							<label><h4>Ảnh 2</h4></label>
							<input type="file" class="form-control-file" name="image2" placeholder="Nhập tên gia vị" />
						</div>

						<div class="form-group col-sm-4">
							<label><h4>Ảnh 3</h4></label>
							<input type="file" class="form-control-file" name="image3" placeholder="Nhập tên gia vị" />
						</div>

						<div class="form-group col-sm-4">
							<label><h4>Ảnh 4</h4></label>
							<input type="file" class="form-control-file" name="image4" placeholder="Nhập tên gia vị" />
						</div>

						<div class="form-group col-sm-4">
							<label><h4>Ảnh 5</h4></label>
							<input type="file" class="form-control-file" name="image5" placeholder="Nhập tên gia vị" />
						</div>

						<div class="form-group col-sm-4">
							<label><h4>Ảnh 6</h4></label>
							<input type="file" class="form-control-file" name="image6" placeholder="Nhập tên gia vị" />
						</div>
					</div>

					<button type="submit" class="btn btn-success">Thêm</button>
					<button type="reset" class="btn btn-danger">Đặt lại</button>
				</form>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection