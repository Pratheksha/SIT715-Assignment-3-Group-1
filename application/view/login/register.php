<!DOCTYPE html>

<!-- Register Page	Created by Group 1 - SIT715 Assignment3-->

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Blue Mix Admin Panel" />
<meta name="author" content="" />

<title>PhotoOp Register</title>


<link rel="stylesheet"
	href="<?php echo URL_LENCO; ?>css/fonts/linecons/css/linecons.css">
<link rel="stylesheet"
	href="<?php echo URL_LENCO; ?>css/fonts/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo URL_LENCO; ?>css/bootstrap.css">
<link rel="stylesheet" href="<?php echo URL_LENCO; ?>css/xenon-core.css">
<link rel="stylesheet"
	href="<?php echo URL_LENCO; ?>css/xenon-forms.css">
<link rel="stylesheet"
	href="<?php echo URL_LENCO; ?>css/xenon-components.css">
<link rel="stylesheet"
	href="<?php echo URL_LENCO; ?>css/xenon-skins.css">
<link rel="stylesheet" href="<?php echo URL_LENCO; ?>css/custom.css">

<script src="<?php echo URL_LENCO; ?>js/jquery-1.11.1.min.js"></script>

<style>
.loginWrong {
	color: #E81D02;
}

.errMsg {
	color: #E81D02;
}
</style>
</head>
<body class="page-body login-page login-light" style="background-image:url('/public/images/PhotoOp.jpg'); background-size: 100%">


	<div class="login-container">

		<div class="row">

			<div class="col-sm-6" style="margin-top: -15%; padding-left: 26%; float: right">

				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						// Reveal Login form
						setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
	
	
						// Validation and Ajax action
						$("form#login").validate({
							rules: {
								username: {
									required: true
								},
								email: {
									required: true
								},
								passwd: {
									required: true
								},
								conpasswd: {
									required: true
								}
							},
	
							messages: {
								username: {
									required: 'Please enter your username.'
								},
								email: {
									required: 'Please enter your Email.'
								},
								passwd: {
									required: 'Please enter your password.'
								},
								conpasswd: {
									required: 'Please enter your Confirm Password.'
								}
							},
	
							// Form Processing via AJAX
							submitHandler: function(form)
							{
								
                                $form.submit();

							}
						});
	
						// Set Form focus
						$("form#login .form-group:has(.form-control):first .form-control").focus();
					});
				</script>

				<!-- Errors container -->
				<div class="errors-container"></div>

				<!-- Add class "fade-in-effect" for login form effect -->
				<form method="post" role="form" id="login"
					class="login-form fade-in-effect">

					<div class="login-header">

						<p>Dear user, Please Register Here !</p>
					</div>


					<div class="form-group">
						<label class="control-label" for="username">Username</label> <input
							type="text" class="form-control" name="username" id="username"
							autocomplete="off" />
					</div>
					<div class="form-group">
						<label class="control-label" for="username">Email</label> <input
							type="text" class="form-control" name="email" id="email"
							autocomplete="off" />
					</div>
					<div class="form-group">
						<label class="control-label" for="passwd">Password</label> <input
							type="password" class="form-control" name="passwd" id="passwd"
							autocomplete="off" />
					</div>
					<div class="form-group">
						<label class="control-label" for="passwd">Confirm Password</label>
						<input type="password" class="form-control" name="conpasswd"
							id="conpasswd" autocomplete="off" />
					</div>
					<div class="form-group">
						<button type="button" name="registerSubmit"
							class="btn btn-primary  btn-block text-left"
							onClick="register();">
							<i class="fa-lock"></i> Submit
						</button>

					</div>
                    <?php
																				if ($message) {
																					?>
					<div class="loginWrong">
						<?php echo $message;?>!

						<!--div class="info-links">
							<a href="#">ToS</a> -
							<a href="#">Privacy Policy</a>
						</div-->

					</div>
                    <?php } ?>
					<div class="errMsg"></div>
				</form>

				<!-- External login -->
				<!-- <div class="external-login">
					<a href="#" class="facebook">
						<i class="fa-facebook"></i>
						Facebook Login
					</a>
	
					
					<a href="" class="twitter">
						<i class="fa-twitter"></i>
						Login with Twitter
					</a>
	
					<a href="" class="gplus">
						<i class="fa-google-plus"></i>
						Login with Google Plus
					</a>
					 
				</div> -->

			</div>

		</div>

	</div>
	<script type="text/javascript">
function register(){
	
				var username=jQuery('#username').val();
				var email=jQuery('#email').val();
				var passwd=jQuery('#passwd').val();
            	var conpasswd=jQuery('#conpasswd').val();
            	var urlnew= "<?php echo URL;?>events/index";
            	jQuery.ajax({
             		type : "POST",
             		url :"<?php echo URL; ?>events/registerCheck/?username=" +username+"&email="+email+"&passwd="+passwd+"&conpasswd="+conpasswd,
             		//dataype:"json",
             		success:function(response){
                 	if(response == "true"){
                 		window.location.href = urlnew;
                 	}else{
                 	$(".errMsg").html(response);
                 	}
             		}
             		});
				}
</script>
	<!-- Bottom Scripts -->
	<script src="<?php echo URL_LENCO; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo URL_LENCO; ?>js/TweenMax.min.js"></script>
	<script src="<?php echo URL_LENCO; ?>js/resizeable.js"></script>
	<script src="<?php echo URL_LENCO; ?>js/joinable.js"></script>
	<script src="<?php echo URL_LENCO; ?>js/xenon-api.js"></script>
	<script src="<?php echo URL_LENCO; ?>js/xenon-toggles.js"></script>
	<script
		src="<?php echo URL_LENCO; ?>js/jquery-validate/jquery.validate.min.js"></script>
	<script src="<?php echo URL_LENCO; ?>js/toastr/toastr.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo URL_LENCO; ?>js/xenon-custom.js"></script>

</body>
</html>