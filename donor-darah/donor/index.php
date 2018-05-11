<?php
	include "connect.php";
	$x = new func_sql;

	session_start();
	if (isset($_POST['username']) and isset($_POST['password']))
	{
		$username = ($_POST['username']);
		$password = ($_POST['password']);
					
		$res=$x -> con()-> query("SELECT * FROM `register` WHERE username='$username' and password='$password'");
		if($res ->fetch(PDO::FETCH_ASSOC) !=0)
		{
			$_SESSION['username'] = $username;
			if($_SESSION['username']=='admin'){
				echo "<script type='text/javascript'> document.location ='/donor-darah/donor/admin/index.php';</script>";
			}
			else{
			    echo "<script type='text/javascript'>alert('LOGIN $_SESSION[username] SUKSES'); document.location ='/donor-darah/donor/pmi/index.php';</script>";}
		}
		else
		{
			echo "<script type='text/javascript'>alert('LOGIN GAGAL'); document.location ='index.php';</script>";
		}
	}
	if (isset($_POST['register'])){
		echo "<script type='text/javascript'> document.location ='register.php';</script>";
	}
?>

<!DOCTYPE HTML> 
<html lang="id"> 
	<head> 
		<title>LOGIN</title> 
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
				height:35px;
				font-size:15px;
			}
						
			
			
		</style>
	</head> 
	<<head>
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
		<h1 class="agile-head text-center">Siaga Donor</h1>
		<div class="container">
			<div class="form_w3layouts">
				<div class="w3layouts-title">
					<h2 class="w3ls-left">Sign in</h2>
				<div class="clear"></div>
		<div id="isi"> 
			<form method="POST" action="">
				<p align="center">
					<input type="text" name="username" placeholder="username" title="harus huruf" size="16" required>
				</p>
				<p align="center">
					<input type="password" name="password" placeholder="password" title="input password" size="16" required>
				</p>
				<p align="center">
					<input id="button" type="submit" name="submit" value="LOGIN">
				</p>
			</form>
			<form method="POST" action="">
				<p align="center">
					<input id="button" type="submit" name="register" value="REGISTER">
				</p>
				<p align="center">
				<br>
					<a href="/donor-darah/">Back to Home</a>
				</br>
				</p>
			</form>
		</div>
				</form>
			</div>			
		</div>
		<div class="agileits-w3layouts-copyright text-center">
			<p>© 2018 SI</p>
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