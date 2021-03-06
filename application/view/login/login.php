<!DOCTYPE html>
<!-- Login Page	Created by Group 1 - SIT715 Assignment3-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Blue Mix Admin Panel" />
<meta name="author" content="" />

<title>PhotoOp - Login</title>


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
</style>
</head>
<?php $imageUrl=URL."images/PhotoOp.jpg";?>
<body class="page-body login-page login-light" style="background-image:url('/public/images/PhotoOp.jpg'); background-size: 100%">


	<div class="login-container">

		<div class="row">

			<div class="col-sm-8" style="margin-top: -17%; padding-left: 29%;">

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
	
								passwd: {
									required: true
								}
							},
	
							messages: {
								username: {
									required: 'Please enter your username.'
								},
	
								passwd: {
									required: 'Please enter your password.'
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
					class="login-form fade-in-effect" action="/login/index"  style="padding: 10px; background-color: #BCC6CC">

					<div class="login-header">
						<p style="color:black">Dear user, log in to PhotoOp !</p>
					</div>


					<div class="form-group">
						<label class="control-label" for="username">Username</label> <input
							type="text" class="form-control" name="username" id="username"
							autocomplete="off" />
					</div>

					<div class="form-group">
						<label class="control-label" for="passwd">Password</label> <input
							type="password" class="form-control" name="passwd" id="passwd"
							autocomplete="off" />
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary  btn-block text-left">
							<i class="fa-lock"></i> Log In
						</button>
						<a href="/events/register"><h4>Not Registered... Sign Up With PhotoOp</h4></a>
					</div>
                    <?php
																				if ($success == false) {
																					?>
					<div class="loginWrong">
						Credentials are Wrong!


					</div>
                    <?php } ?>
	
				</form>


			</div>

		</div>

	</div>



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
