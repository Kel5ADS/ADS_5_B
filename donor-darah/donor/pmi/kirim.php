<?php
	include "connect.php";
	$fu = new func_sql;
	
	session_start();
	if (isset($_POST['kirim']))
	{
		$judul = ($_POST['judul']);
		$isi = ($_POST['isi']);
		$alamat = ($_POST['alamat']);
		$kontak = ($_POST['kontak']);

		
			if($sql=$fu -> con()-> query("INSERT INTO even_temp VALUES('$judul','$isi','$alamat','$kontak')")){
				echo "<script type='text/javascript'>alert('Data Has Been Sent'); document.location ='index.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Error Can't Sent Data');</script>";
			}
	}
?>