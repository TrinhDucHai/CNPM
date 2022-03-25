<?php
ob_start();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!DOCTYPE html>
<html>
<head>	
	<title>Đăng nhập trang quan trị</title>
	<script src="jQuery/jquery-3.1.1.min.js" type="text/javascript"></script>

	<style>

body{
			background-color: black;
		}

		#box{
			height: 2px;
			width: 1px;
			padding: 5px;
			background-color: #fcc39b;
			border-radius: 10px;
			line-height:90px;
			box-shadow: 0 0 15px #f3906c;
		}
		
		#in{
			width: 90%;
			height: 50px;
			border-radius: 10px;
			padding: 8px;
			border : 4px solid #f3906c;
			background-color: #333333;
			color: white;
		}
		#in:focus{
			border:6px solid #00cccc;
		}
		#inBtn{
			width: 90%;
			height: 50px;
			border-radius: 10px;
			line-height:10px;
			border : 4px solid #00cccc;
			background-color: #333333;
			color:white;
			cursor: pointer;
		}
		#copy{
			color: #00cccc;
			text-align: center;
			font-style: italic;
		}
		footer{
			position:fixed;		    
		    bottom:0px;
		    left:0px;
		    right:0px;
		    margin-bottom:0px;
		}
		hr{
			color: black;
		}
	</style>


</head>
<body background="https://img.pikbest.com/backgrounds/20190810/study-abroad-simple-book-black-background-poster_1901346.jpg!bw700" style="background-repeat:no-repeat;background-size:cover;" >
	<br>
	<hr>
	<h1 align="center" style="color:#f3906c">Đăng Nhập Trang Quản Trị</h2>
	<hr>
	<br>
	<form action="<?php include "loginAdmin.php" ?>" method="post">
		<center>
				<div id="box">
					<input type="text" name="txtdangnhap" id="in" placeholder="Tên đăng nhập" style="margin-top: 50px"><br>
					<input type="password" name="txtmatkhau" placeholder="Mật khẩu	" id="in" style="margin-top: 10px">
					<button type="submit" name="dnhapadmin"class="btn" style="background-color: black; color: #fcc39b; margin-top: 50px">Đăng nhập</button>
					<p style="color:red"><?php echo  $kq ?></p>
				</div>
			
		</center>
	</form>
	<br><br><br><br>
	<script src="script.js"></script>
	<footer>
		<hr>
			<p id="copy" style="color: black; font-size: 2rem"><b>61TH3 Nhóm 3</b></p>
		<hr>
	</footer>
</body>
</html>

<?php ob_end_flush(); ?>