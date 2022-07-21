<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Akhir</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
	<!-- header row 1 -->
	<div class="header">
		<h1>My Website</h1>
		<p>Tugas Akhir Pemrograman Web.</p>
	</div>
	<!-- menu navigasi row 2 -->
	<div class="topnav">
		<a href="lihat.php">Daftar Tamu</a>
		<a href="https://www.facebook.com/profile.php?id=100027622853222">My Facebook</a>
		<a href="https://wa.me/6282138711022">Chat Me</a>
	</div>
	<!-- Konten row 3 terbagi 2 kolom -->
	<div class="row">
		<!-- kolom kiri berisi artikel -->
		<div class="leftcolumn">
			<!-- artikel ke 1 -->
			<div class="card">
				<h2>Pengisian Form Buku Tamu</h2>
				<h5></h5>
				<?php include ("tampilan.html"); ?>
				<!-- <p>Some text .....</p>
				<p>Kalimat kalimat kalimat kalimat kalimat kalimat kalimat kalimat kalimat kalimat kalimat kalimat kalimat</p> -->
			</div>
			<!-- Artikel 2 -->
			<div class="card">
				#Muhammad Yusuf Dwi Hasta Yuda<br>
				#2100018217
				<h5><?php echo date("d M Y") ?></h5>
			</div>
		</div>
		<!-- kolom kanan berisi tentang dan ringkasan -->
		<div class="rightcolumn">
			<div class="card">
				<h2>Kalkulator</h2>
				<?php include("kalkulator.html")?>
				<p></p>
			</div>
			<div class="card">
				<h3>Kalender</h3>
				<?php include ("kalender.php"); ?>
			</div>
			<div class="card">
				<h3>Jam</h3>
				<p><?php include("jam.php"); ?></p>
			</div>
		</div>
	</div>
	<!-- membuat footer row 3 -->
	<div class="footer">
		<h2><center>Copyright <@> 2022 oleh Yuda</center></h2>
	</div>
</body>
</html>