<?php
	$lokasi_file = $_FILES['fupload']['tmp_name'];
	$nama_file   = $_FILES['fupload']['name'];
	$deskripsi   = $_POST['deskripsi'];
	$direktori = "c:/xampp/htdocs/responsi/$nama_file";

	if (move_uploaded_file($lokasi_file, $direktori))
	{
		echo "Nama File : <b>$nama_file</b> berhasil di upload <br>";
		echo "Deskripsi File :<br>$deskripsi";
	}
	else{
		echo "File gagal di upload";
	}
	echo "<p><a href=div.php><input type=submit value=Kembali></a></p>";
?>