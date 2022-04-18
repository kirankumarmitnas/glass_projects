<?php
$errors=Session::has('errors');
$status=0;
$msg=0;
if(isEmptyArray($errors)>0)
{
	$status=checkVariable($errors['status'],0,'intval');
	$msg=checkVariable($errors['msg'],0);
}
?>
@include('admin.common.headerLink');
<section class="container">
<div class="row align-items-center align-self-center justify-content-center">
<div class="col-md-4 mt-3 mt-md-5">
{{ Form::open(array('url' =>url('admin/login'),'name'=>'loginForm','class'=>'form','method'=>'POST'));}}
<div class="card shadow invisible rounded mt-md-5 rounded-top bg-white text-white">
  <div class="card-body theme-bg">
    <p class="h2 text-center"><i class="fas2 fa-question2 far fa-user-circle fa-2x rounded-circle  px-3 py-2"></i></p>
    <h5 class="text-center card-title text-white">Welcome to Question Bank</h5>
  </div>
  <?php if($status!=0 && $status!=-11 && isEmptyArray($msg)<=0) { ?>
  <div class="card-body pt-2 pb-0">
  <p class="fst-normal text-danger mb-0"><i class="fas fa-exclamation-circle me-2"></i>{{ $msg }}</p>
   </div>
  <?php } ?>
  <div class="card-body">
	<div class="mb-1">
	<label  class="form-label text-dark"><i class="fas fa-user me-1"></i> Username</label>
	<input type="text" class="form-control @if($status==-11) is-invalid  @endif" value="{{ old('username') }}" required  name="username" maxlength="64" placeholder="Enter Username" />
	@if($status==-11) <div class="invalid-feedback"> Please provide a valid city.</div> @endif
	</div>
	<div class="mb-3">
	<label  class="form-label text-dark"><i class="fas fa-lock me-1"></i>Password</label>
	<input type="password" class="form-control @if($status==-11) is-invalid @endif"  value="{{  old('password') }}" autocomplete="new-password" required name="password"  maxlength="30" placeholder="Enter Password" />
	@if($status==-11) <div class="invalid-feedback"> Please provide a valid city.</div> @endif
	</div>
  </div>
  <div class="card-body theme-bg">
	<div class="text-center">
	<button class="btn btn-light bg-white" type="submit"> Login <i class="fas fa-arrow-right ms-1"></i></button>
	</div>
  </div>
</div>
{{ Form::close();}}
</div>
</div>
</section>
<script type="text/javascript">
$(document).ready(function(e){
	$("form .card").removeClass("invisible");
	$("form .card").addClass("animate__animated animate__backInUp animate__delay-0s animate__repeat-1");
	$("form .card .card-body").addClass("invisible");
	$('body').on('animationend webkitAnimationEnd oAnimationEnd mozAnimationEnd', 'form .card', function () {
	   $("form .card .card-body").removeClass("invisible");
	   $("form .card .card-body").find('input[name="username"]').parent().addClass("animate__animated animate__delay-1s animate__backInDown");
	    $("form .card .card-body").find('input[name="password"]').parent().addClass("animate__animated animate__delay-1s animate__backInUp");
		$("form .card .card-body").find('button[type="submit"]').parents().eq(1).addClass("animate__animated animate__delay-1s animate__fadeInUp");
		$("form .card .card-body").find('i.fa-user-circle').parent().addClass("animate__animated animate__delay-2s animate__fadeIn");
		$("form .card .card-body").find('.card-title').parent().addClass("animate__animated animate__delay-1s animate__fadeInDown");
	});
	$('body').on('animationend webkitAnimationEnd oAnimationEnd mozAnimationEnd', 'form .card .card-body', function () {
		
	});
});
</script>
@include('admin.common.footerLink');