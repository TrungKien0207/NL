<!-- @extends('layout.index')

@section('content')
	<div class="row carousel-holder m-5 ">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default border border-info rounded">
				<div class="panel-heading p-5">
					<h4>Thông tin tài khoản	</h4>
				</div>
				<div class="panel-body pb-5 pl-5 pr-5">
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
					<form class="needs-validation" >
						@csrf
					  <div class="form-row">

					    <div class="col-md-6 mb-3">
					      <label for="validationTooltip01">Họ và tên</label>
					      <input type="text" class="form-control" id="validationTooltip01" name="ten" value="{{\Auth::user()->name}}">
					      <div class="valid-tooltip">
					        Nhập họ và tên
					      </div>
					    </div>
					    
					    <div class="col-md-6 mb-3">
					      <label for="validationTooltipUsername">Email</label>
					      <div class="input-group">
					        <div class="input-group-prepend">
					          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
					        </div>
					        <input type="text" name="email" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" value="{{\Auth::user()->email}}" required>
					        <div class="invalid-tooltip">
					          Nhập email.
					        </div>
					      </div>
					    </div>
					  </div>
					  <div class="form-row">
					  	<div class="custom-control custom-switch col-md-12 p-3">
							 <input type="checkbox" class="custom-control-input" id="customSwitch1" name="checkpassword">
							  <label class="custom-control-label"  for="customSwitch1">Đổi mật khẩu</label>
						</div>

					    <div class="col-md-6 mb-3">
					      <label for="validationTooltip03">Mật khẩu mới</label>
					      <input type="password" name="password" class="form-control password" id="validationTooltip03" required disabled>
					      <div class="invalid-tooltip">
					        Nhập mật khẩu mới.
					      </div>
					    </div>
					    <div class="col-md-6 mb-3">
					      <label for="validationTooltip03">Nhập lại mật khẩu</label>
					      <input type="password" name="passwordAgain" class="form-control password" id="validationTooltip03" required disabled>
					      <div class="invalid-tooltip">
					        Nhập lại mật khẩu mới.
					      </div>
					    </div>
					  </div>
					  @if(isset($users))
					  @foreach($users as $user)
					  <button class="btn btn-info" type="submit">Lưu</button>
					  <a class="btn btn-success" href="{{route('user_edit',$user->id)}}" >Edit</a>
					  @endforeach
					  @endif
					</form>
				</div>
			</div>
		</div>			
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#customSwitch1').click(function() {
				if ($(this).is(':checked')) {
					$('.password').removeAttr('disabled');
				}
				else {
					$('.password').attr('disabled','');
				}
			});
		});
	</script>
@endsection -->