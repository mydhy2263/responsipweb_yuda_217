<?php  
echo "<center><h2>FAKULTAS TI</h2></center>";

include("form.html");
$nim= @$_POST['nim'];
$nama = @$_POST["nama"];
$kota = @$_POST["kota"];

//simpan ke dalam file
	$fileku=fopen("data.txt", "a"); //buka file dengan mode archive
	$data="NIM  :".$nim."\nNama :".$nama."\nKota :".$kota."\n"; //gabungkan kata
	fwrite($fileku,$data); //simpan data ke dalam file
	fclose($fileku);	//close agar terjadi write data secara fisik
echo"<br>"; 
?>