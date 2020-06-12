@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Món ăn
					<small>{{ isset($product->name ) ? $product->name  : ''}}</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-7" style="padding-bottom:120px">
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

				<form action="admin/product/edit/{{$product->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					{{csrf_field()}} <!-- có dòng này mới được submit -->

					<div class="form-group">
						<label><h4>Loại món ăn</h4></label>
						<select class="form-control" name="idCategory" placeholder="Nhập tên món ăn" value="{{old('idCategory',isset($product->idCategory) ? $product->idCategory : '')}}">
							<option value="">Loại món ăn</option>
							@if(isset($category))
							@foreach($category as $categorys)
							<option value="{{$categorys->id}}" {{old('idCategory',isset($product->idCategory) ? $product->idCategory : '') == ($categorys->id) ? 'selected' : ''}}>{{$categorys->c_ten}}</option>
							@endforeach
							@endif
						</select>
					</div>

					<div class="form-group">
						<label><h4>Loại món ăn tiêu biểu</h4></label>
						<select class="form-control" name="idType" placeholder="Nhập tên món ăn" value="{{old('idType',isset($product->idType) ? $product->idType : '')}}">
							<option value="">Loại món ăn tiêu biểu</option>
							@if(isset($type))
							@foreach($type as $ty)
							<option value="{{$ty->id}}" {{old('idType',isset($product->idType) ? $product->idType : '') == ($ty->id) ? 'selected' : ''}}>{{$ty->ten_ty}}</option>
							@endforeach
							@endif
						</select>
					</div>

					<div class="form-group">
						<label><h4>Tên món ăn</h4></label>
						<input class="form-control" name="name" placeholder="Nhập tên loại món ăn" value="{{old('ten_sp',isset($product->ten_sp) ? $product->ten_sp : '')}}" />
					</div>

					<div class="form-group">
						<label><h4>Hình ảnh</h4></label>
						<div style="border: 1px solid #B8B8B8; border-radius: 5px;"><input type="file" class="form-control-file" name="img" style="padding: 5px;" value="{{old('anh_sp',isset($product->anh_sp) ? $product->anh_sp : '')}}"/></div>
					</div>

					<div class="form-group">
						<label><h4>Nội dung</h4></label>
						<input class="form-control" name="content" placeholder="Nhập nội dung món ăn" value="{{old('content',isset($product->content) ? $product->content : '')}}"/>
					</div>

					<button type="submit" class="btn btn-warning">Sửa</button>
					<button type="reset" class="btn btn-danger">Đặt lại</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection