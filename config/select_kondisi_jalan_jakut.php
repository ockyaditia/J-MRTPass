<?php
	include('config/config.php');
	$resultdb = mysql_query("SELECT * FROM data_kondisi_jalan_jakut");
		
	while ($row = mysql_fetch_array($resultdb)) {
	   $a = $row['no'];
	   $b = $row['jakarta_utara'];
	   $c = $row['luas'];
			print("<tr>");
			print("<td style = 'font-size:9pt; text-align:center;'>$a</td>");
			print("<td style = 'font-size:9pt; text-align:center;'>$b</td>");
			print("<td style = 'font-size:9pt; text-align:center;'>$c</td>");
			print("</tr>");
		}
?>