@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Mức độ
					<small>{{ isset( $level->name ) ? $level->name  : ''}}</small>
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

				<form action="admin/level/edit/{{$level->id}}" method="POST">
					<input type="hidden" name="_token" value="{{csrf_token()}}" />
					{{csrf_field()}} <!-- có dòng này mới được submit -->

					<div class="form-group">
						<label><h4>Món ăn</h4></label>
						<select class="form-control" name="idPDuct" placeholder="Nhập tên món ăn" value="{{old('idPDuct',isset($level->idPDuct) ? $level->idPDuct : '')}}">
							<option value="">Món ăn</option>
							@if(isset($product))
								@foreach($product as $pro)
									<option value="{{$pro->id}}" {{old('idPDuct',isset($level->idPDuct) ? $level->idPDuct : '') == ($pro->id) ? 'selected' : ''}}>{{$pro->ten_sp}}</option>
								@endforeach
							@endif
						</select>
					</div>

					<div class="form-group">
						<label>Tên món ăn</label>
						<select name="l_ten" class="form-control" placeholder="Chọn mức độ" value="{{old('l_ten',isset($level->l_ten) ? $level->l_ten : '')}}">
							<option value="Khó">Khó</option>
							<option value="Trung bình">Trung bình</option>
							<option value="Dễ">Dễ</option>
						</select>
					</div>

					<button type="submit" class="btn btn-warning">Sửa</button>
					<button type="reset" class="btn btn-danger">Đặt lại</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection