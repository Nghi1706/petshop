<?php
session_start();
include("function.php");
$p=new detai();
$p->ketnoi();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My PetShop !</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>+84 966 862 072</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>nguyenvannghi17062000@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<center>
					<div class="col-sm-4">
				</div>
					<div class="col-sm-4">
					<div class="login-form"><!--login form-->
						<h2>Admin-Login</h2>
						<form>
							<input type="text" placeholder="UserName" name="username"/>
							<input type="password" placeholder="Password" name="password" />
							<input name="submit" type="submit" class="btn btn-default" id="submit" formmethod="POST" style="background-color: #F5A522" value="Login">
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-4">
				</div>
				</center>
			</div>
		</div>
	</section><!--/form-->
	
<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
			  <div class="row">
					<div class="col-sm-12 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</footer><!--/Footer-->
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
	<?php

	switch($_REQUEST['submit'])
	{
		case 'Login':
			{
				$user=$_REQUEST['username'];
				$pass=$_REQUEST['password'];
			if($user=='nghi' && $pass=='17062000')
			{
				$_SESSION['user']=$user;
				$_SESSION['pass']=$pass;
				header('location:admin.php');
			}
			else
			{
				header('location:login.php');
			}
			}
	}
		
	?>
</html>