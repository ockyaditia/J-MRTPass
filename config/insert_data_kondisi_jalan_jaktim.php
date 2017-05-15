<?php
	include('config.php');

	$a = $_POST['jakarta'];
	$b = $_POST['luas'];

	//simpan data ke database
	$query = mysql_query("insert into data_kondisi_jalan_jaktim(jakarta_timur, luas) values('$a','$b')") or die(mysql_error());
	if ($query) {
	header('location:../insert_data_kondisi_jalan_jaktim.php?message=success');
}
?>