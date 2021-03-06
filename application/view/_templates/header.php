<!DOCTYPE html>
<!--Created by Group 1 - SIT715 Assignment3-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Blue Mix Admin Panel" />
<meta name="author" content="" />

<title>PhotoOp</title>

<!--link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic"-->
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
<link rel="stylesheet" href="<?php echo URL_LENCO; ?>css/flexslider.css">
<link rel="stylesheet"
	href="<?php echo URL_LENCO; ?>css/fonts/meteocons/css/meteocons.css">
<link rel="stylesheet" href="<?php echo URL_LENCO; ?>css/custom.css">
<link rel="stylesheet"
	href="<?php echo URL_LENCO; ?>/js/dropzone/css/dropzone.css">
<script src="<?php echo URL_LENCO; ?>js/jquery-1.11.1.min.js"></script>


<script type="text/javascript">
        var pathToImageCategories = "<?php echo URL_LENCO; ?>";
    </script>

</head>
<body class="page-body">

	<div class="page-container">

		<div class="sidebar-menu toggle-others collapsed">

			<div class="sidebar-menu-inner">

				<header class="logo-env">
					<div class="logo">
						<a href="#" class="logo-expanded" style="color:white;width:100%;font-size:20px;"> PHOTO OP </a> <a href="#"
							class="logo-collapsed" style="color:white;">PHOTO OP </a>
					</div>
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<!--a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a-->

						<a href="#" data-toggle="mobile-menu"> <i class="fa-bars"></i>
						</a>
					</div>



				</header>

				<!-- Sidebar User Info Bar - Added in 1.3 -->
				<section class="sidebar-user-info">
					<div class="sidebar-user-info-inner">
						<a href="#" class="user-profile"> <img
							src="<?php echo URL_LENCO; ?>images/user-4.png" width="60"
							height="60" class="img-circle img-corona" alt="user-pic" /> <span>
								<strong><?php echo $_SESSION['name']." ".$_SESSION[''];?></strong>
						 <?php echo $_SESSION['sess_username'];?>
						</span>
						</a>

						<ul class="user-links list-unstyled">
							<li class="logout-link"><a href="/login/logout" title="Log out">
									<i class="fa-power-off">&nbsp;Logout</i>
							</a></li>
						</ul>
					</div>
				</section>


				<ul id="main-menu" class="main-menu">


					<li><a href="/events/index" alt="Products - Admin"
						title="Products - Admin"> <i class="linecons-star"></i> <span
							class="title">Events</span>
					</a></li>

				</ul>

			</div>

		</div>

		<div class="main-content">

			<nav class="navbar user-info-navbar" role="navigation">
				<!-- User Info, Notifications and Menu Bar -->

				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">

					<li class="hidden-sm hidden-xs"><a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
					</a></li>
				</ul>
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">

					<li class="dropdown user-profile"><a href="#"
						class="dropdown-toggle" data-toggle="dropdown"> <img
							src="<?php echo URL_LENCO; ?>images/user-4.png" alt="user-image"
							class="img-circle img-inline userpic-32" width="28" /> <span>
								<?php echo $_SESSION['name']." "."";//$_SESSION[''];?>
								<i class="fa-angle-down"></i>
						</span>
					</a>
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li class="last"><a href="/login/logout"> <i class="fa-lock"></i>
									Logout
							</a></li>
						</ul></li>
				</ul>

			</nav>