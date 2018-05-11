<?php
	include "connect.php";
	$fu = new func_sql;
	
	session_start();
	if (isset($_POST['val']))
	{
		$pendonor = ($_POST['pendonor']);
		$gol_darah = ($_POST['gol_darah']);
		$pmi = ($_POST['pmi']);
		$alamat = ($_POST['alamat']);
		$kontak = ($_POST['kontak']);
		
			if($sql=$fu -> con()-> query("INSERT INTO work (pendonor, gol_darah, pmi, alamat, kontak) VALUES('$pendonor','$gol_darah','$pmi','$alamat','$kontak')")){
				$sql=$fu -> con()-> query("DELETE FROM `temp` WHERE pendonor='$pendonor'");
				echo "<script type='text/javascript'>alert('Data Has Been Sent'); document.location ='./validasi.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Error Can't Sent Data');</script>";
			}
	}
	if (isset($_POST['del']))
	{
		$pendonor = ($_POST['pendonor']);
		$gol_darah = ($_POST['gol_darah']);
		$pmi = ($_POST['pmi']);
		$alamat = ($_POST['alamat']);
		$kontak = ($_POST['kontak']);
		
			if($sql=$fu -> con()-> query("DELETE FROM `temp` WHERE pendonor='$pendonor'")){
				echo "<script type='text/javascript'>alert('Data Has Been Deleted'); document.location ='./validasi.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Error Can't Delete Data');</script>";
			}
	}
?>