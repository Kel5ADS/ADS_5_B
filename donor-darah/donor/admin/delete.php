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
		
			if($sql=$fu -> con()-> query				$sql=$fu -> con()-> query("DELETE FROM `temp` WHERE pendonor='$pendonor'")){
				echo "<script type='text/javascript'>alert('Data Has Been Deleted'); document.location ='validasi.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Error Can't Delete Data');</script>";
			}
	}
?>