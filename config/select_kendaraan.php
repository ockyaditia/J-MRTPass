<?php
	include('config/config.php');
	$resultdb = mysql_query("SELECT * FROM data_kendaraan");
		
	while ($row = mysql_fetch_array($resultdb)) {
	   $a = $row['id'];
	   $b = $row['tahun'];
	   $c = $row['mobil_penumpang'];
	   $d = $row['bis'];
	   $e = $row['truk'];
	   $f = $row['sepeda_motor'];
	   $g = $row['total'];
			print("<tr>");
			print("<td style = 'font-size:9pt; text-align:center;'>$a</td>");
			print("<td style = 'font-size:9pt; text-align:center;'>$b</td>");
			print("<td style = 'font-size:9pt; text-align:center;'>$c</td>");
			print("<td style = 'font-size:9pt; text-align:center; width:100px;'>$d</td>");
			print("<td style = 'font-size:9pt; text-align:center; width:100px;'>$e</td>");
			print("<td style = 'font-size:9pt; text-align:center;'>$f</td>");
			print("<td style = 'font-size:9pt; text-align:center; width:100px;'>$g</td>");
			print("</tr>");
		}
?>