<?php
include("function.php");
$p=new detai();
$p->ketnoi();
session_start();
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
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/logo/logo.png" style="width:109px;height:69px;" alt="" /></a>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="index.php"><i class="fa fa-home"></i>Home Page</a></li>
								<li><a href="admin.php"><i class="fa fa-lock"></i>Admin</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="row"><h1 style="text-align:center">Thông Tin Đơn Hàng</h1></div>			
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td width="21%" class="image">Ảnh sản phẩm</td>
							<td width="49%" class="description">Tên sản phẩm</td>
							<td width="30%" class="price">Giá Sản phẩm</td>
						</tr>
					</thead>
					<?php
					if (isset($_GET['id']))
					{
						$idsp=$_GET['id'];
						echo $idsp;
						if($p->insert("INSERT INTO giohang (id_sanpham,tensanpham,giasanpham,hinhsanpham,id_loai)
							SELECT id_sanpham,tensanpham,giasanpham,hinhsanpham,id_loai from sanpham WHERE(id_sanpham=$idsp &&  NOT EXISTS (SELECT id_sanpham FROM giohang));")==1)
						{
							echo'thêm thành công';
						}
						else
						{
							echo'thêm không thành công ';
						}
						}
						
						$p->giohang("select * from giohang");
					?>
				</table>
				<br>
			</div>
							
				<form action ="index.php"method = "post"> <h1 style="text-align:center">Thông Tin Người Nhận</h1>
					  <div class="form-group" style="font-size: 24px;">
						<label for="name">Họ Và Tên</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Nguyễn Văn Tí">
					  </div>
					  <div class="form-group" style="font-size: 24px;">
						<label for="dc">Địa Chỉ</label>
						<input type="text" class="form-control" id="dc" name="dc" placeholder="Phường 5 xã lũng cũng huyện lũng cú tỉnh lũng túi ">
					  </div>
					  <div class="form-group" style="font-size: 24px;">
						<label for="sdt">Số Điện Thoại</label>
						<input type="number" class="form-control" id="sdt" name="sdt" placeholder="0123456789">
					</div>
					<center>
					<input name="submit" type="submit" id="submit" formmethod="post"  value="Đặt Hàng" class="btn btn-primary">
					</center>
					</form>
			
			<?php
			if(isset($_POST['submit']))
			{
				switch($_POST['submit'])
				{
					case 'Đặt Hàng':
						{
							if($_REQUEST['name'] !='' && $_REQUEST['dc'] !='' && $_REQUEST['sdt'] !='')
							{
								$_SSESION['hovaten']=$_REQUEST['name'];
								$_SSESION['diachi']=$_REQUEST['dc'];
								$_SSESION['sodienthoai']=$_REQUEST['sdt'];
								break;
							}
							else
							{
								echo"info NOT NULL !";
							}
						}
				}
			}
				
			?>
		</div>
	</section> <!--/#cart_items-->

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