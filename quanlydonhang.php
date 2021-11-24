<?php
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
	</header><!--/header-->
	<center><h1 style="">Quản Lý Đơn Hàng ADMIN-PETSHOP</h1></center>
	<div class="row">
	<div class="col-sm-6"><center><h3>Thông Tin Người Nhận</h3></center>
		<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu"> 
							<td width="21%" class="image">Họ Và Tên</td>
							<td width="49%" class="description">Địa Chỉ</td>
							<td width="30%" class="price">Số Điện thoại</td>
						</tr>
					</thead>
					<tbody>
						<form>
						<tr>
							<td class="cart_product">
								<p>Nguyễn Văn A</p>
							</td>
							<td class="cart_description">
								<p>xã huyện tỉnh nào đó</p>
							</td>
							<td class="cart_price">
								<p>0123456789</p>
							</td>
						</tr>
						</form>
					</tbody>
				</table>
				<br>
			</div>	
	</div>
		<div class="col-sm-6"><center><h3>Hàng Đã Mua</h3></center>
		<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td width="21%" class="image">Ảnh sản phẩm</td>
							<td width="49%" class="description">Tên sản phẩm</td>
							<td width="30%" class="price">Giá Sản phẩm</td>
						</tr>
					</thead>
					<tbody>
						<form>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
						</tr>
						</form>
					</tbody>
				</table>
				<br>
			</div>	
	</div>
	</div>
	
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
</html>