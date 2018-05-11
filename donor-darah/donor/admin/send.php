<?php
	include "connect.php";
	$fu = new func_sql;
	
	session_start();
	if (isset($_POST['send']))
	{
		$pendonor = ($_POST['pendonor']);
		$gol_darah = ($_POST['gol_darah']);
		$pmi = ($_POST['pmi']);
		$alamat = ($_POST['alamat']);
		$kontak = ($_POST['kontak']);

		
			if($sql=$fu -> con()-> query("INSERT INTO temp VALUES('$pendonor','$gol_darah','$pmi','$alamat','$kontak')")){
				echo "<script type='text/javascript'>alert('Data Has Been Sent'); document.location ='index.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Error Can't Sent Data');</script>";
			}
	}
?>