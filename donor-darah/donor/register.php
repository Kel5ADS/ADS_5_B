<?php
	include "connect.php";
	$x = new func_sql;
	
	session_start();
	if (isset($_POST['register']))
	{
		$firstname = ($_POST['firstname']);
		$lastname = ($_POST['lastname']);
		$username = ($_POST['username']);
		$password = ($_POST['password']);
		$birth = ($_POST['birth']);
		$gender = ($_POST['gender']);
		
		if($sql=$x -> count_data("register","username = '$username'")==0)
		{
			if($sql=$x -> con()-> query("INSERT INTO register VALUES('$firstname','$lastname','$username','$password','$birth','$gender')")){
				echo "<script type='text/javascript'>alert('REGISTER BERHASIL'); document.location ='index.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('REGISTER GAGAL'); document.location ='register.php';</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('GUNAKAN USERNAME YANG LAIN'); document.location ='register.php';</script>";
		}
	}
	if(isset($_POST['cancel'])){
		echo "<script type='text/javascript'>document.location ='index.php';</script>";
	}
?>

<!DOCTYPE HTML> 
<html lang="id"> 
	<head> 
		<title>REGISTER</title> 
		<style>
			#isi{
				margin:auto;
				margin-top:10px;
				padding:10px 10px 10px 10px;
				background-color:white;
				width:250px;
				height:auto;
				border-radius:10px;
			}
			body{
				backgroun-size:cover;
			}
			#button{
				border-radius:5px;
				background-color:black;
				color:white;
				height:auto;
				width:auto;
				padding:2px 2px;
				font-size:15px;
			}
			#button:hover {
				background-color:white;
				color:black;
				transform: scale(1.1);
				cursor: pointer;
				font-size:15px;				
			}
			#button:active {
				background-color:black;
				color:white;
				transform: scale(1.2);
				font-size:15px;				
			}
			input{
				border:none;
				border-bottom:1px solid;
				font-size:15px;
			}

		</style>
	</head> 
<head>
<title>Donor Darah</title>

<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SubLime Signup Form web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,100i,300,400,400i,500,500i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body>
	<div class="bg" data-vide-bg="video/laptop">
		<div class="center-container">
		<h1 class="agile-head text-center">Sistem Informasi Donor Darah</h1>
		<div class="container">
			<div class="form_w3layouts">
				<div class="w3layouts-title">
					<h2 class="w3ls-left">Create an account</h2>
				<div class="clear"></div>
		<div id="isi"> 
			<form method="POST" action="">
				<p align="center">
					<input type="text" name="firstname" placeholder="FIRSTNAME" title="harus huruf" size="15" required>
				</p>
				<p align="center">
					<input type="text" name="lastname" placeholder="LASTNAME" title="harus huruf" size="15" required>
				</p>
				<p align="center">
					<input type="text" name="username" placeholder="USERNAME" title="harus huruf" size="12" required>
				</p>
				<p align="center">
					<input type="password" name="password" placeholder="PASSWORD" title="harus huruf" size="12" required>
				</p>
				<p align="center">
					<input type="date" name="birth" title="Harus diisi" required />
				</p>
				<p align="center">
					<input type="radio" name="gender" value="L" required> Male
					<input type="radio" name="gender" value="P" required> Female
				</p>
				<p align="center">
					<input id="button" type="submit" name="register" value="REGISTER">
				</p>
			</form>
			<form method="POST" actio
				<p align="center">
					<input id="button" type="submit" name="cancel" value="CANCEL">
				</p>
			</form>
		</div>
			</div>			
		</div>
		<div class="agileits-w3layouts-copyright text-center">
			<p>© 2018 Kelompok 5</p>
		</div>	
	</div>	
	</div>
	
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});														
		});
	</script>
	<script src="js/jquery.vide.min.js"></script>
</body>
</html>