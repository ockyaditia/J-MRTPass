<?php
	include('config.php');

	$a = $_POST['jakarta_timur'];
	$b = $_POST['jakarta_selatan'];
	$c = $_POST['jakarta_utara'];
	$d = $_POST['jakarta_pusat'];
	$e = $_POST['jakarta_barat'];

	//simpan data ke database
	$query = mysql_query("insert into data_kemacetan(jakarta_timur, jakarta_selatan, jakarta_utara, jakarta_pusat, jakarta_barat) values('$a','$b','$c','$d','$e')") or die(mysql_error());
	if ($query) {
	header('location:../insert_data_kemacetan.php?message=success');
}
?>