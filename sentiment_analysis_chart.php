<!DOCTYPE html>
<html>
	<head>
		<!-- data -->
		<title>J-MRT PASS</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width">        
		<link rel="stylesheet" href="css/templatemo_main.css">
		
		<script src="chart/jquery.min.js" type="text/javascript"></script>
		<script src="chart/highcharts.js"></script>
		<script src="chart/jquery.highchartTable-min.js"></script>
		<script>
			$(document).ready(function() {
			  $('table.highchart').highchartTable();
			});
		</script>
	</head>
	
	<body style = "background-image:url(images/jayaraya2.jpg); background-attachment: fixed; background-size: 100%; background-repeat: no-repeat;">
		
		<div class="container">
			<!-- Static navbar -->
			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
			  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				  <li><a href="index.php"><i class="fa fa-home"></i>Beranda</a></li>
				  <li><a href="index.php"><i class="fa fa-external-link"></i>Data</a></li>
				  <li class="active"><a href="index.php"><i class="fa fa-laptop"></i>Analisis</a></li>
				  <li><a href="index.php"><i class="fa fa-video-camera"></i>Visualisasi</a></li>
				  <li><a href="index.php"><i class="fa fa-users"></i>Tentang</a></li>
				  <li><a href="index.php"><i class="fa fa-envelope-o"></i>Kontak</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	
		<br>
		
		<div style = "background-color: rgba(25, 181, 254, 0.9); border: 5px solid white; padding: 20px;">
		
			<center><h2>Tampilan data dalam bentuk chart</h2></center>
			
			<h3>Column Chart</h3>
			<?php
				include('config/config.php');

				$a = (int)$_POST['positive'];
				$b = (int)$_POST['negative'];
				
				if ($a <= $b)
					$c = $b;
				else
					$c = $a;
			
			?>
			
			<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
				<thead>
					<tr>                                  
						<th>Month</th>
						<th>Positive</th>
						<th>Negative</th>
					</tr>
				 </thead>
				 <tbody>
						<tr>
							<td>Jumlah Data</td>
							<td><?php echo $a; ?></td>
							<td><?php echo $b; ?></td>
						</tr>
				</tbody>
			</table>
			
			<br><br>
			
			<h3>Bar Chart</h3>
			<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
				<thead>
					<tr>                                  
						<th>Month</th>
						<th>Positive</th>
						<th>Negative</th>
					</tr>
				 </thead>
				 <tbody>
						<tr>
							<td>Data Positive</td>
							<td><?php echo $a; ?></td>
						</tr>
						<tr>
							<td>Data Negative</td>
							<td><?php echo $b; ?></td>
						</tr>
				</tbody>
			</table>
			
			<br><br>
			<center><a href = "sentiment_analysis.php">Coba data lain</a></center>
		</div>
		<div class="row" style = "background-color:rgba(25, 181, 254, 1); border: 5px solid white;">
	<br><br>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
        <div class="footer-wrapper">
            <p class="social-icons">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </p>
            <p id="tm-copyright">
            	Copyright &copy; 2015 J-MRT PASS
			</p>
            </div>                    
        </div><!-- /.footer --> 
    </div>          
	</body>
</html>