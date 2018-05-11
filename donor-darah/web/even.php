<!-- banner -->
<div class="banner page_head">

</div>
<!-- //banner -->
<div class="about-page">
	<div class="container">
		<h3 class="tittle">Berita</h3>
			<div>
				<div class="choose-grid wow fadeInRight animated" data-wow-delay=".5s">
		<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Alamat</th>
                <th>Kontak</th>				
            </tr>
        </thead>


        <tbody>
<?php

// Connection data (server_address, database, name, poassword)
$hostdb = 'localhost';
$namedb = 'ads';
$userdb = 'root';
$passdb = '';

  $conn = new PDO("mysql:host=$hostdb; dbname=$namedb", $userdb, $passdb);
  $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

  // Define and perform the SQL query
  $sql = "SELECT DISTINCT * FROM `even`";
  $result = $conn->query($sql);
$no=1;
while ($row = $result->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <td style="vertical-align:middle;"><?php echo $row['judul']?></td>
                <td style="vertical-align:middle;"><?php echo $row['isi']?></td>
				<td style="vertical-align:middle;"><?php echo $row['alamat']?></td>
				<td style="vertical-align:middle;"><?php echo $row['kontak']?></td>
            </tr>
<?php
}
?>
        </tbody>

    </table>
	</div>

            </div>
			<div class="clearfix"></div>

	</div>
</div>