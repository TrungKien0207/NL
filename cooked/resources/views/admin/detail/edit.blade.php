@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Chi tiết
					<small>{{ isset( $detail->name ) ? $detail->name  : ''}}</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-12" style="padding-bottom:120px">
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

				<form action="admin/detail/edit/{{$detail->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					{{csrf_field()}} <!-- có dòng này mới được submit -->

					<div class="form-group">
						<label><h4>Món ăn</h4></label>
						<select class="form-control" name="idproduct" placeholder="Nhập tên món ăn" value="{{old('idproduct',isset($detail->idproduct) ? $detail->idproduct : '')}}">
							<option value="">Món ăn</option>
							@if(isset($product))
							@foreach($product as $pro)
							<option value="{{$pro->id}}" {{old('idproduct',isset($detail->idproduct) ? $detail->idproduct : '') == ($pro->id) ? 'selected' : ''}}>{{$pro->ten_sp}}</option>
							@endforeach
							@endif
						</select>
					</div>

					<div class="form-group">
						<label>Nội dung món ăn</label>
						<input class="form-control" name="content" placeholder="Nhập tên loại món ăn" value="{{old('content',isset($detail->content) ? $detail->content : '')}}" />
					</div>

					<div class="form-group col-sm">
						<label><h4>Bước</h4></label>
						<input class="form-control" name="step" placeholder="Nhập tên gia vị" value="{{old('step',isset($detail->step) ? $detail->step : '')}}" />
					</div>

					<div class="form-group col-sm">
						<label><h4>Chú ý</h4></label>
						<input class="form-control" name="note" placeholder="Nhập tên gia vị" value="{{old('note',isset($detail->note) ? $detail->note : '')}}" />
					</div>

					<div class="form-group col-sm-4 ">
						<label><h4>Ảnh background</h4></label>
						<input type="file" class="form-control-file" name="bg" placeholder="Nhập tên gia vị" value="{{old('bg',isset($detail->bg) ? $detail->bg : '')}}" />
					</div>

					<div class="row border">

						<div class="form-group col-sm-4 ">
							<label><h4>Ảnh 1</h4></label>
							<input type="file" class="form-control-file" name="image1" placeholder="Nhập tên gia vị" value="{{old('image1',isset($detail->img1) ? $detail->img1 : '')}}" />
						</div>

						<div class="form-group col-sm-4">
							<label><h4>Ảnh 2</h4></label>
							<input type="file" class="form-control-file" name="image2" placeholder="Nhập tên gia vị" value="{{old('image2',isset($detail->img2) ? $detail->img2 : '')}}" />
						</div>

						<div class="form-group col-sm-4">
							<label><h4>Ảnh 3</h4></label>
							<input type="file" class="form-control-file" name="image3" placeholder="Nhập tên gia vị" value="{{old('image3',isset($detail->img3) ? $detail->img3 : '')}}" />
						</div>

						<div class="form-group col-sm-4">
							<label><h4>Ảnh 4</h4></label>
							<input type="file" class="form-control-file" name="image4" placeholder="Nhập tên gia vị" value="{{old('image4',isset($detail->img4) ? $detail->img4 : '')}}" />
						</div>

						<div class="form-group col-sm-4">
							<label><h4>Ảnh 5</h4></label>
							<input type="file" class="form-control-file" name="image5" placeholder="Nhập tên gia vị" value="{{old('image5',isset($detail->img5) ? $detail->img5 : '')}}" />
						</div>

						<div class="form-group col-sm-4">
							<label><h4>Ảnh 6</h4></label>
							<input type="file" class="form-control-file" name="image6" placeholder="Nhập tên gia vị" value="{{old('image6',isset($detail->img6) ? $detail->img6 : '')}}" />
						</div>
					</div>

					<button type="submit" class="btn btn-warning">Sửa</button>
					<button type="reset" class="btn btn-danger">Đặt lại</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection