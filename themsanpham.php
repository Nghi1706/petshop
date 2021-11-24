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
	<center><h1 style="">Thêm Sản Phẩm</h1></center>
	<form method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="436" border="1" align="center">
    <tbody>
      <tr>
        <td width="127">Chọn loại sản phẩm</td>
        <td width="293">
			<select name="select" id="select">
			<option value="0" selected="selected">Click here !</option>
            <?php
				$p->select("select * from loaisanpham");
			?>
        	</select>
		</td>
      </tr>
      <tr>
        <td>Nhập tên</td>
        <td><input type="text" name="tensanpham" id="tensanpham"></td>
      </tr>
      <tr>
        <td>Nhập giá</td>
        <td><input type="text" name="giasanpham" id="giasanpham"></td>
      </tr>
		<tr>
        <td>giới thiệu</td>
        <td><input type="textarea" name="gioithieu" id="gioithieu"></td>
      </tr>
      <tr>
        <td>Chọn ảnh sản phẩm</td>
        <td><input type="file" name="file" id="file"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input name="submit" type="submit" id="submit" formmethod="POST" value="add product"></td>
      </tr>
    </tbody>
  </table>
</form>
	
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
	switch ($_POST['submit'])
	{
		case 'add product':
			{
				$local = $_FILES['file']['tmp_name'];
				$fname = $_FILES['file']['name'];
				$tensanpham = $_REQUEST['tensanpham'];
				$giasanpham = $_REQUEST['giasanpham'];
				$gioithieu = $_REQUEST['gioithieu'];
				$id_ct = $_REQUEST['select'];
				// $p->upload($local,"picphp",$fname);
				if($p->themsanpham("INSERT INTO sanpham (tensanpham,giasanpham,hinhsanpham,gioithieu,id_loai) VALUES('$tensanpham','$giasanpham','$fname','$gioithieu','$id_ct')")==1)
				{
					echo'fuccessfull';
				}
				else{
					echo 'fail';
				}
			}
	}
?>
</html>