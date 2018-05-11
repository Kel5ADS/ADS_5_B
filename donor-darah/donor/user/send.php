<?php
	include "connect.php";
	$fu = new func_sql;
	
	session_start();
	if (isset($_POST['send']))
	{
		$name = ($_POST['name']);
		$alamat = ($_POST['alamat']);
		$latitude = ($_POST['latitude']);
		$longitude = ($_POST['longitude']);
		
			if($sql=$fu -> con()-> query("INSERT INTO temp VALUES('$name','$longitude','$latitude','$alamat',NULL)")){
				echo "<script type='text/javascript'>alert('Data Has Been Sent'); document.location ='index.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Error Can't Sent Data');</script>";
			}
	}
?>