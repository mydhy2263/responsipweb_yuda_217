<?php
	$mydir = "c:/xampp/htdocs/responsi/";
	$dir = opendir($mydir);
	echo "Isi folder (Klik link untuk download : <br>";

	while($tmp = readdir($dir)){
		echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
	}

	closedir($dir);

	echo "<p><a href=div.php><input type=submit value=Kembali></a></p>";
	?>