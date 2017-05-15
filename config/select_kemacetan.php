<?php
	include('config/config.php');
	$resultdb = mysql_query("SELECT * FROM data_kemacetan");
		
	while ($row = mysql_fetch_array($resultdb)) {
	   $a = $row['no'];
	   $b = $row['jakarta_timur'];
	   $c = $row['jakarta_selatan'];
	   $d = $row['jakarta_utara'];
	   $e = $row['jakarta_pusat'];
	   $f = $row['jakarta_barat'];
			print("<tr>");
			print("<td style = 'font-size:9pt; text-align:center;'>$a</td>");
			print("<td style = 'font-size:9pt; text-align:center;'>$b</td>");
			print("<td style = 'font-size:9pt; text-align:center;'>$c</td>");
			print("<td style = 'font-size:9pt; text-align:center;'>$d</td>");
			print("<td style = 'font-size:9pt; text-align:center;'>$e</td>");
			print("<td style = 'font-size:9pt; text-align:center;'>$f</td>");
			print("</tr>");
		}
?>