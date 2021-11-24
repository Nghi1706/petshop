<?php
class detai{
	function ketnoi()
	{				
		$con=mysqli_connect("localhost","admin","admin","detai");
  		if(!$con)
   		{
	   		die("Khong ket noi duoc den CSDL");
			exit();
		}
		else
		{			
			mysqli_set_charset($con,"utf8");
			return $con;
		}
	}

	function xuatsanpham($sql)
	{
		$link = $this -> ketnoi();
		$ketqua=mysqli_query($link,$sql);
		$i = mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			while($row= @mysqli_fetch_array($ketqua))
			{
				$id=$row['id_sanpham'];
				$ten=$row['tensanpham'];
				$gia=$row['giasanpham'];
				$gioithieu=$row['gioithieu'];
				$hinh=$row['hinhsanpham'];
				$id_loai=$row['id_loai'];
				echo'<div class="col-sm-4">
				<center>
							<div >
								<div>
									<img src="picphp/'.$hinh.'" style="height:200px;width:60%" />
									<h2>'.$gia.'VND</h2>
									<p>'.$ten.'</p>
									<a href="product-details.php?id='.$id.'" class="btn btn-default add-to-cart">More info</a>
									<a href="cart.php?id='.$id.'" class="btn btn-default add-to-cart">Add product</a>
									
									</div>
							</div>
							</center>
							
						</div>';
				
						
			}
		}
		else{
			echo 'updating data ! ';
		}
	}
	function infosanpham($sql)
	{
		$link = $this -> ketnoi();
		$ketqua=mysqli_query($link,$sql);
		$i = mysqli_num_rows($ketqua);
		@mysqli_close(@link);
		if($i>0)
		{
			while($row= @mysqli_fetch_array($ketqua))
			{
				$id=$row['id_sanpham'];
				$ten=$row['tensanpham'];
				$gia=$row['giasanpham'];
				$gioithieu=$row['gioithieu'];
				$hinh=$row['hinhsanpham'];
				$id_loai=$row['id_loai'];
				$_SESSION['id']=$id;
				$_SESSION['ten']=$ten;
				$_SESSION['gia']=$gia;
				$_SESSION['$hinh']=$hinh;
				$_SESSION['loai']=$id_loai;
				echo'<div class="col-sm-3">
					'.$gioithieu.'
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="picphp/'.$hinh.'" alt="" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2>'.$ten.'</h2>
								<span>
									<span>'.$gia.'.VND</span>
								</span>
								<br>
								<a href="cart.php?id='.$id.'" class="btn btn-default add-to-cart">Add Product</a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
				</div>';
			}
		}
		else{
			echo 'updating data ! ';
		}
	}
	function xuatmenu($sql)
	{
		$link= $this -> ketnoi();
		$ketqua = mysqli_query($link,$sql);
		$i=mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			while($row=@mysqli_fetch_array($ketqua))
			{
				$id=$row['id_loai'];
				$name=$row['tenloaisanpham'];
				echo'<li><a class="active" href="index.php?id='.$id.'"style="font-size: 20px">'.$name.'</a></li>';
			}
		}
		else
		{
			echo 'updating data';
		}
	}
	function upload($local,$folder,$name)
	{
		if($local != '' && $name !='')
		{
			$name1=$folder.'/'.$name;
			if(move_uploaded_file($local,$name1))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		
	}
	function select($sql)
		{
			$link = $this->ketnoi();
			$ketqua = mysqli_query($link,$sql);
			$i = mysqli_num_rows($ketqua);
			@mysqli_close(@link);
			if($i>0)
			{
				while($row=@mysqli_fetch_array($ketqua))
				{
					
					$id=$row['id_loai'];
					$name=$row['tenloaisanpham'];
					echo'<option value="'.$id.'">'.$name.'</option>';
				}
				
			}
			
		}

	function insert($sql){
		$link = $this -> ketnoi();
		if(mysqli_query($link,$sql))
		{
			return 1;
		}
		else{
			return 0;
		}
	}
	function delete($sql){
		$link = $this -> ketnoi();
		if(mysqli_query($link,$sql))
		{
			return 1;
		}
		else{
			return 0;
		}
	}
		
	function giohang($sql){
		$link = $this -> ketnoi();
		$ketqua=mysqli_query($link,$sql);
		$i = mysqli_num_rows($ketqua);
		@mysqli_close(@link);
		if($i>0)
		{
			while($row= @mysqli_fetch_array($ketqua))
			{
				$id=$row['id_sanpham'];
				$ten=$row['tensanpham'];
				$gia=$row['giasanpham'];
				$hinh=$row['hinhsanpham'];
				$id_loai=$row['id_loai'];
				$STT=$row['STT'];
				$_SESSION['STT']=$STT;
				echo'<tbody>
						<form>
						<tr>
							<td class="cart_product">
								<a href=""><img src="picphp/'.$hinh.'" style="height:100px;width:100px"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">'.$ten.'</a></h4>
								<p>ID:'.$id.'</p>
							</td>
							<td class="cart_price">
								<p>'.$gia.'VND</p>
							</td>
						</tr>
						</form>
					</tbody>';
			}
		}
		else{
			echo 'updating data ! ';
		}
	}
	function chonsanpham($sql)
	{
		$link = $this -> ketnoi();
		$ketqua=mysqli_query($link,$sql);
		$i = mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			while($row= @mysqli_fetch_array($ketqua))
			{
				session_start();
				$id=$row['id_sanpham'];
				$ten=$row['tensanpham'];
				$gia=$row['giasanpham'];
				$gioithieu=$row['gioithieu'];
				$hinh=$row['hinhsanpham'];
				$id_loai=$row['id_loai'];
				$_SESSION['id']=$id;
				$_SESSION['ten']=$ten;
				$_SESSION['gia']=$gia;
				$_SESSION['$hinh']=$hinh;
				$_SESSION['loai']=$id_loai;

			}
		}
		else{
			echo 'updating data ! ';
		}
	}

	function sanphamgiohang($sql)
	{
		$link = $this -> ketnoi();
		$ketqua=mysqli_query($link,$sql);
		$i = mysqli_num_rows($ketqua);
		@mysqli_close($link);
		if($i>0)
		{
			while($row= @mysqli_fetch_array($ketqua))
			{
				$id=$row['id_sanpham'];
				$ten=$row['tensanpham'];
				$gia=$row['giasanpham'];
				$hinh=$row['hinhsanpham'];
				$id_nguoimua=$row['id_nguoimua'];
				$soluong=$row['STT'];
				$_SESSION['id']=$id;
				$_SESSION['ten']=$ten;
				$_SESSION['gia']=$gia;
				$_SESSION['$hinh']=$hinh;
				$_SESSION['id_nguoimua']=$id_nguoimua;
				$_SESSION['soluong']=$soluong;
			}
		}
		else{
			echo 'updating data ! ';
		}
	}
	
	
	
	
}
?>