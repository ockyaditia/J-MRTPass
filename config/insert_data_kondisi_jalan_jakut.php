<?php
	include('config.php');

	$a = $_POST['jakarta'];
	$b = $_POST['luas'];

	//simpan data ke database
	$query = mysql_query("insert into data_kondisi_jalan_jakut(jakarta_utara, luas) values('$a','$b')") or die(mysql_error());
	if ($query) {
	header('location:../insert_data_kondisi_jalan_jakut.php?message=success');
}
?>