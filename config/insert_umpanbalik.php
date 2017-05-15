<?php
	include('config.php');

	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_subject = $_POST['contact_subject'];
	$contact_message = $_POST['contact_message'];

	//simpan data ke database
	$query = mysql_query("insert into umpan_balik(nama, email, judul, pesan) values('$contact_name','$contact_email','$contact_subject','$contact_message')") or die(mysql_error());
	if ($query) {
	header('location:../index.php?message=success');
}
?>