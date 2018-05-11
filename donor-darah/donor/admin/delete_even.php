<?php
	include "connect.php";
	$fu = new func_sql;
	
	session_start();
	if (isset($_POST['val_even']))
	{
		$judul = ($_POST['judul']);
		$isi = ($_POST['isi']);
		$alamat = ($_POST['alamat']);
		$kontak = ($_POST['kontak']);
		
			if($sql=$fu -> con()-> query				$sql=$fu -> con()-> query("DELETE FROM `even_temp` WHERE judul='$judul'")){
				echo "<script type='text/javascript'>alert('Data Has Been Deleted'); document.location ='validasi_even.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Error Can't Delete Data');</script>";
			}
	}
?>