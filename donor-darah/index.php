<?php
	error_reporting(0);
	session_start();
	require 'koneksi/koneksi.php';
	$dd=$_REQUEST['dd'];
	switch($dd){
	
	default:
		require'view/header.php';
		require'view/main2.php';
		require'view/footer.php';
		break;
		
		case 'tentang-kami':
			require'view/header.php';
			require 'web/tentang-kami.php';
			require'view/footer.php';
			break;
			
		case 'berita':
			require'view/header.php';
			require 'web/berita.php';
			require 'web/even.php';
			require'view/footer.php';
			break;
			
		case 'stok-darah':
			require'view/header.php';
			require 'web/stok-darah.php';
			require'view/footer.php';
			break;
			
		case 'hubungi-kami':
			require'view/header.php';
			require 'web/hubungi-kami.php';
			require'view/footer.php';
			break;
			
		case 'donor-sekarang':
			require'view/header.php';
			require 'web/ingin-donor.php';
			require'view/footer.php';
			break;
		
	}
?>