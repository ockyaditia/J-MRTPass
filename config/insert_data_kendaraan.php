<?php
	include('config.php');

	$a = $_POST['tahun'];
	$b = $_POST['mobil_penumpang'];
	$c = $_POST['bis'];
	$d = $_POST['truk'];
	$e = $_POST['sepeda_motor'];
	$f = $_POST['total'];

	//simpan data ke database
	$query = mysql_query("insert into data_kendaraan(tahun, mobil_penumpang, bis, truk, sepeda_motor, total) values('$a','$b','$c','$d','$e','$f')") or die(mysql_error());
	if ($query) {
	header('location:../insert_data_kendaraan.php?message=success');
}
?>