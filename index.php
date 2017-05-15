<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>J-MRT PASS</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width">        
    <link rel="stylesheet" href="css/templatemo_main.css">
	<style>
		#map-canvas {
			margin: 0;
			padding: 0;
			height: 400px;
			max-width: none;
		}
		#map-canvas img {
			max-width: none !important;
		}
		.gm-style-iw {
			width: 350px !important;
			top: 15px !important;
			left: 0px !important;
			background-color: #fff;
			box-shadow: 0 1px 6px rgba(178, 178, 178, 0.6);
			border: 1px solid rgba(72, 181, 233, 0.6);
			border-radius: 2px 2px 10px 10px;
		}
		#iw-container {
			margin-bottom: 10px;
		}
		#iw-container .iw-title {
			font-family: 'Open Sans Condensed', sans-serif;
			font-size: 22px;
			font-weight: 400;
			padding: 10px;
			background-color: #48b5e9;
			color: white;
			margin: 0;
			border-radius: 2px 2px 0 0;
		}
		#iw-container .iw-content {
			font-size: 13px;
			line-height: 18px;
			font-weight: 400;
			margin-right: 1px;
			padding: 15px 5px 20px 15px;
			max-height: 140px;
			overflow-y: auto;
			overflow-x: hidden;
		}
		.iw-content img {
			float: right;
			margin: 0 5px 5px 10px; 
		}
		.iw-subTitle {
			font-size: 16px;
			font-weight: 700;
			padding: 5px 0;
		}
		.iw-bottom-gradient {
			position: absolute;
			width: 326px;
			height: 25px;
			bottom: 10px;
			right: 18px;
			background: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
			background: -webkit-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
			background: -moz-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
			background: -ms-linear-gradient(top, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%);
		}
	</style>
		
	<script src="amcharts/amcharts.js" type="text/javascript"></script>
	<script src="amcharts/pie.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		var chart;
		var legend;

		var chartData = [
			{
				"country": "Sedang Dibangun",
				"value": 1
			},
			{
				"country": "Efektif Dibangun",
				"value": 5
			},
			{
				"country": "Kurang Efektif Dibangun",
				"value": 5
			},
			{
				"country": "Tidak Efektif Dibangun",
				"value": 4
			}
		];

		AmCharts.ready(function () {
			// PIE CHART
			chart = new AmCharts.AmPieChart();
			chart.dataProvider = chartData;
			chart.titleField = "country";
			chart.valueField = "value";
			chart.outlineColor = "#FFFFFF";
			chart.outlineAlpha = 0.8;
			chart.outlineThickness = 2;
			chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
			// this makes the chart 3D
			chart.depth3D = 15;
			chart.angle = 30;

			// WRITE
			chart.write("chartdiv");
		});
		
		var chart;
		var legend;

		var chartData6 = [
			{
				"country5": "Kemacetan Parah di Jakarta Utara",
				"value5": 5
			},
			{
				"country5": "Kemacetan Sedang di Jakarta Utara",
				"value5": 4
			},
			{
				"country5": "Kemacetan Ringan di Jakarta Utara",
				"value5": 4
			}
		];

		AmCharts.ready(function () {
			// PIE CHART
			chart = new AmCharts.AmPieChart();
			chart.dataProvider = chartData6;
			chart.titleField = "country5";
			chart.valueField = "value5";
			chart.outlineColor = "#FFFFFF";
			chart.outlineAlpha = 0.8;
			chart.outlineThickness = 2;
			chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value5]]</b> ([[percents]]%)</span>";
			// this makes the chart 3D
			chart.depth3D = 15;
			chart.angle = 30;

			// WRITE
			chart.write("chartdiv2");
		});
		
		var chart;
		var legend;

		var chartData5 = [
			{
				"country4": "Kemacetan Parah di Jakarta Barat",
				"value4": 5
			},
			{
				"country4": "Kemacetan Sedang di Jakarta Barat",
				"value4": 3
			},
			{
				"country4": "Kemacetan Ringan di Jakarta Barat",
				"value4": 2
			}
		];

		AmCharts.ready(function () {
			// PIE CHART
			chart = new AmCharts.AmPieChart();
			chart.dataProvider = chartData5;
			chart.titleField = "country4";
			chart.valueField = "value4";
			chart.outlineColor = "#FFFFFF";
			chart.outlineAlpha = 0.8;
			chart.outlineThickness = 2;
			chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value4]]</b> ([[percents]]%)</span>";
			// this makes the chart 3D
			chart.depth3D = 15;
			chart.angle = 30;

			// WRITE
			chart.write("chartdiv3");
		});
		
		var chart;
		var legend;

		var chartData4 = [
			{
				"country3": "Kemacetan Parah di Jakarta Timur",
				"value3": 10
			},
			{
				"country3": "Kemacetan Sedang di Jakarta Timur",
				"value3": 6
			},
			{
				"country3": "Kemacetan Ringan di Jakarta Timur",
				"value3": 5
			}
		];

		AmCharts.ready(function () {
			// PIE CHART
			chart = new AmCharts.AmPieChart();
			chart.dataProvider = chartData4;
			chart.titleField = "country3";
			chart.valueField = "value3";
			chart.outlineColor = "#FFFFFF";
			chart.outlineAlpha = 0.8;
			chart.outlineThickness = 2;
			chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value3]]</b> ([[percents]]%)</span>";
			// this makes the chart 3D
			chart.depth3D = 15;
			chart.angle = 30;

			// WRITE
			chart.write("chartdiv4");
		});
		
		var chart;
		var legend;

		var chartData3 = [
			{
				"country2": "Kemacetan Parah di Jakarta Pusat",
				"value2": 4
			},
			{
				"country2": "Kemacetan Sedang di Jakarta Pusat",
				"value2": 3
			},
			{
				"country2": "Kemacetan Ringan di Jakarta Pusat",
				"value2": 6
			}
		];

		AmCharts.ready(function () {
			// PIE CHART
			chart = new AmCharts.AmPieChart();
			chart.dataProvider = chartData3;
			chart.titleField = "country2";
			chart.valueField = "value2";
			chart.outlineColor = "#FFFFFF";
			chart.outlineAlpha = 0.8;
			chart.outlineThickness = 2;
			chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value2]]</b> ([[percents]]%)</span>";
			// this makes the chart 3D
			chart.depth3D = 15;
			chart.angle = 30;

			// WRITE
			chart.write("chartdiv5");
		});

		var chartData2 = [
			{
				"country1": "Kemacetan Parah di Jakarta Selatan",
				"value1": 3
			},
			{
				"country1": "Kemacetan Sedang di Jakarta Selatan",
				"value1": 2
			},
			{
				"country1": "Kemacetan Ringan di Jakarta Selatan",
				"value1": 2
			}
		];

		AmCharts.ready(function () {
			// PIE CHART
			chart = new AmCharts.AmPieChart();
			chart.dataProvider = chartData2;
			chart.titleField = "country1";
			chart.valueField = "value1";
			chart.outlineColor = "#FFFFFF";
			chart.outlineAlpha = 0.8;
			chart.outlineThickness = 2;
			chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value1]]</b> ([[percents]]%)</span>";
			// this makes the chart 3D
			chart.depth3D = 15;
			chart.angle = 30;

			// WRITE
			chart.write("chartdiv6");
		});
	</script>
	
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="map.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&sensor=false"></script>
</head>
<body>
	<div style = "position:absolute; margin-left:20px; margin-top:10px;">
		<img src = "images/logo.jpg" width = "120">
	</div>
	<!--<div style = "position:absolute; margin-left:1220px; margin-top:10px;">
		<img src = "images/logo.jpg" width = "120">
	</div>-->
    <div id="main-wrapper">
            <!--[if lt IE 7]>
                <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a rel="nofollow" href="http://browsehappy.com">upgrade your browser</a> or <a rel="nofollow" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
                <![endif]-->

                <div class="container">
                    <!-- Static navbar -->
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                      </div>
                      <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="#templatemo-page1"><i class="fa fa-home" style = " background-size: 100%;"></i>Beranda</a></li>
						  <li><a href="#templatemo-page6"><i class="fa fa-external-link" style = " background-size: 100%;"></i>Data</a></li>
                          <li><a href="#templatemo-page2"><i class="fa fa-laptop" style = " background-size: 100%;"></i>Analisis</a></li>
                          <li><a href="#templatemo-page3"><i class="fa fa-video-camera" style = " background-size: 100%;"></i>Visualisasi</a></li>
                          <li><a href="#templatemo-page4"><i class="fa fa-users" style = " background-size: 100%;"></i>Tentang</a></li>
                          <li><a href="#templatemo-page5"><i class="fa fa-envelope-o" style = " background-size: 100%;"></i>Kontak</a></li>
                      </ul>
                  </div><!--/.nav-collapse -->
              </div><!--/.container-fluid -->
          </div>
          <div class="image-section">
            <div class="image-container">
                <img src="images/templatemo-bg-4.jpg" id="templatemo-page1-img" class="main-img inactive" alt="Home">
                <img src="images/templatemo-bg-2.jpg" id="templatemo-page2-img" class="inactive" alt="Services">
                <img src="images/templatemo-bg-3.jpg" id="templatemo-page3-img" class="inactive" alt="Awards">
                <img src="images/templatemo-bg-4.jpg" id="templatemo-page4-img" class="inactive" alt="Company">
                <img src="images/templatemo-bg-4.jpg" id="templatemo-page5-img" class="inactive" alt="Contact">
				<img src="images/templatemo-bg-1.jpg" id="templatemo-page6-img" class="inactive" alt="Contact">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 templatemo-content-wrapper">
                <div class="templatemo-content">   
                    <section id="templatemo-page1-text" class="active">
                        <div class="col-sm-12 col-md-12" >
                            <h2><center> J-MRT PASS <br><br>
							( JAKARTA MASS RAPID TRANSIT PATH AREA SUPPORT SYSTEM )</center></h2><br>
                            <p>Sistem pengambilan keputusan untuk mendukung pemerintah agar dapat menentukan jalur MRT yang akan dibuat sehingga dapat memecahkan masalah kemacetan yang ada di Jakarta. </p>
                            <br>
							<div id="slider" class="flexslider">
                              <ul class="slides">
                                <li>
                                  <img src="images/slider/slide1.jpg" alt="Slide 1" width = "730" height = "540"/>
                              </li>
                              <li>
                                  <img src="images/slider/slide2.jpg" alt="Slide 2" width = "730" height = "540"/>
                              </li>
                              <li>
                                  <img src="images/slider/slide3.jpg" alt="Slide 3" width = "730" height = "540"/>
                              </li>
                              <li>
                                  <img src="images/slider/slide4.jpg" alt="Slide 4" width = "730" height = "540"/>
                              </li>
                              <li>
                                  <img src="images/slider/slide5.jpg" alt="Slide 5" width = "730" height = "540"/>
                              </li>
							  <li>
                                  <img src="images/slider/slide6.jpg" alt="Slide 6" width = "730" height = "540"/>
                              </li>
							  <li>
                                  <img src="images/slider/slide7.jpg" alt="Slide 7" width = "730" height = "540"/>
                              </li>
                          </ul>
                      </div>
                      <div id="carousel" class="flexslider">
                          <ul class="slides">
                            <li>
                              <img src="images/slider/thumb1.jpg" alt="Thumbnail 1"/>
                          </li>
                          <li>
                              <img src="images/slider/thumb2.jpg" alt="Thumbnail 2"/>
                          </li>
                          <li>
                              <img src="images/slider/thumb3.jpg" alt="Thumbnail 3"/>
                          </li>
                          <li>
                              <img src="images/slider/thumb4.jpg" alt="Thumbnail 4"/>
                          </li>
                          <li>
                              <img src="images/slider/thumb5.jpg" alt="Thumbnail 5"/>
                          </li>
						  <li>
                              <img src="images/slider/thumb6.jpg" alt="Thumbnail 6"/>
                          </li>
						  <li>
                              <img src="images/slider/thumb7.jpg" alt="Thumbnail 7"/>
                          </li>
                      </ul>
                  </div>
              </div>
          </section><!-- /.templatemo-page1-text --> 
					
          <section id="templatemo-page2-text" class="inactive">
            <div class="col-sm-12 col-md-12">
                <h2>Analysis</h2>
                <p>Pada fitur ini anda dapat memilih chart yang di inginkan untuk memvisualisasikan data yang telah anda masukan di langkah sebelumnya.</p>
				
				<link rel="stylesheet" href="code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
				<script src="code.jquery.com/jquery-1.10.2.js"></script>
				<script src="code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
				
				<h3>Pilih Chart</h3>
				<select name="combobox" id="combobox">
					<option value="">Pilih satu...</option>
					<option value="Column Chart">Column Chart</option>
					<option value="Pie Chart">Pie Chart</option>
				</select>
				
				<div id = "showData" style = "position:absolute; margin-top:-87px; margin-left:250px;">
					<h3>Pilih Data</h3>
					<select name="data" id="data">
						<option value="">Pilih satu...</option>
						<option value="Kendaraan">Data Kendaraan</option>
						<option value="Kemacetan">Data Kemacetan</option>
						<option value="Kondisi Jalan">Data Kondisi Jalan</option>
					</select>
				</div>
				
				<div id = "showData2" style = "position:absolute; margin-top:-87px; margin-left:500px;">
					<h3>Pilih Tahun</h3>
					<select name="tahun" id="tahun">
						<option value="">Pilih satu...</option>
						<option value="2000">2000</option>
						<option value="2001">2001</option>
						<option value="2002">2002</option>
						<option value="2003">2003</option>
						<option value="2004">2004</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
					</select>
				</div>
				
				<div id = "showDataKJ" style = "position:absolute; margin-top:-87px; margin-left:500px;">
					<h3>Pilih Wilayah</h3>
					<select name="wilayah" id="wilayah">
						<option value="">Pilih satu...</option>
						<option value="Jakarta Utara">Jakarta Utara</option>
						<option value="Jakarta Timur">Jakarta Timur</option>
						<option value="Jakarta Selatan">Jakarta Selatan</option>
						<option value="Jakarta Barat">Jakarta Barat</option>
						<option value="Jakarta Pusat">Jakarta Pusat</option>
					</select>
				</div>
				
				<script src="chart/highcharts.js"></script>
				<script src="chart/jquery.highchartTable-min.js"></script>
				<script>
					$(document).ready(function() {
					  $('table.highchart').highchartTable();
					});
				</script>
				
				<script src = "chart.js"></script>
					 
				<div class="videoWrapper" style = "background: rgba(255,255,255,0.4); margin-top:30px; height:1000px;">
					<div id = "showData3" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2000'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData4" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2001'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData5" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2002'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData6" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2003'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData7" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2004'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData8" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2005'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData9" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2006'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData10" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2007'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData11" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2008'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData12" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2009'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData13" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2010'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData14" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2011'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showData15" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Mobil Penumpang</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2012'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Kendaraan</td>
										<td><?php echo $mobil_penumpang; ?></td>
										<td><?php echo $bis; ?></td>
										<td><?php echo $truk; ?></td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<script>
						$('a[href="#all"]').click(function(){
							 $("#showData16").toggle(1000);
						}); 
					</script>
					
					<br>
						
					<div id = "showData16" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Total Kendaraan Per Tahun</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan");
									while ($row = mysql_fetch_array($query)) {
										$tahun = $row['tahun'];
										$total = $row['total'];
								?>
									<tr>
										<td><?php echo $tahun; ?></td>
										<td><?php echo $total; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					
					<div id = "showData17" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Timur</th>
									<th>Jakarta Selatan</th>
									<th>Jakarta Utara</th>
									<th>Jakarta Pusat</th>
									<th>Jakarta Barat</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select sum(case when jakarta_timur = '' then 0 else 1 end) as a, 
											sum(case when jakarta_selatan = '' then 0 else 1 end) as b,
											sum(case when jakarta_utara = '' then 0 else 1 end) as c,
											sum(case when jakarta_pusat = '' then 0 else 1 end) as d,
											sum(case when jakarta_barat = '' then 0 else 1 end) as e from data_kemacetan");
									while ($row = mysql_fetch_array($query)) {
										$jakarta_timur = $row['a'];
										$jakarta_selatan = $row['b'];
										$jakarta_utara = $row['c'];
										$jakarta_pusat = $row['d'];
										$jakarta_barat = $row['e'];
								?>
									<tr>
										<td>Jumlah Kemacetan Terparah</td>
										<td><?php echo $jakarta_timur; ?></td>
										<td><?php echo $jakarta_selatan; ?></td>
										<td><?php echo $jakarta_utara; ?></td>
										<td><?php echo $jakarta_pusat; ?></td>
										<td><?php echo $jakarta_barat; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all2">Lihat Data Kemacetan Tiap Wilayah</a></h3></center>
						
						<script>
							$('a[href="#all2"]').click(function(){
								 $("#showData18").toggle(1000);
							}); 
						</script>
						
						<br>
						
						<center><div id = "showData18">
							<table border = "1px solid black" style = "background:#fff; font-size:12pt;">
							<tr>
								<th style = "background:gold; text-align:center;">&nbsp;No&nbsp;</th>
								<th style = "background:#2980b9; text-align:center; color:white">&nbsp;Jakarta Timur&nbsp;</th>
								<th style = "background:#c0392b; text-align:center; color:white">&nbsp;Jakarta Selatan&nbsp;</th>
								<th style = "background:#27ae60; text-align:center; color:white">&nbsp;Jakarta Utara&nbsp;</th>
								<th style = "background:#8e44ad; text-align:center; color:white">&nbsp;Jakarta Pusat&nbsp;</th>
								<th style = "background:#4aa3df; text-align:center; color:white">&nbsp;Jakarta Barat&nbsp;</th>
							</tr>
							<?php
								include("config/select_kemacetan.php");
							?>
							</table>
							
							<h3><a href = "data_kemacetan.php">Ubah Data Kemacetan</a></h3>
						</div></center>
					</div>
					
					<div id = "showData19" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Utara</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_jakut");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['jakarta_utara'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all3">Luas Seluruh DKI Jakarta</a></h3></center>
					</div>
					
					<div id = "showData20" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Barat</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_jakbar");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['jakarta_barat'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all3">Luas Seluruh DKI Jakarta</a></h3></center>
					</div>
					
					<div id = "showData21" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Timur</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_jaktim");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['jakarta_timur'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all3">Luas Seluruh DKI Jakarta</a></h3></center>
					</div>
					
					<div id = "showData22" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Selatan</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_jaksel");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['jakarta_selatan'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all3">Luas Seluruh DKI Jakarta</a></h3></center>
					</div>
					
					<div id = "showData23" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Pusat</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_jakpus");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['jakarta_pusat'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all3">Luas Seluruh DKI Jakarta</a></h3></center>
					</div>
					
					<script>
						$('a[href="#all3"]').click(function(){
							 $("#showData24").toggle(1000);
						}); 
					</script>
					
					<br>
						
					<div id = "showData24" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Luas Seluruh DKI Jakarta</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_dki");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['wilayah'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					
					
					<!-- PIE -->
					
					
					<div id = "showPie3" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2000'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie4" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2001'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie5" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2002'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie6" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2003'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie7" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2004'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie8" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2005'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie9" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2006'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie10" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2007'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie11" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2008'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie12" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2009'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie13" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2010'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie14" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2011'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<div id = "showPie15" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Data Kendaraan</th>
									<th>Bis</th>
									<th>Truk</th>
									<th>Sepeda Motor</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan where tahun = '2012'");
									while ($row = mysql_fetch_array($query)) {
										$mobil_penumpang = $row['mobil_penumpang'];
										$bis = $row['bis'];
										$truk = $row['truk'];
										$sepeda_motor = $row['sepeda_motor'];
								?>
									<tr>
										<td>Data Mobil Penumpang</td>
										<td><?php echo $mobil_penumpang; ?></td>
									</tr>
									<tr>
										<td>Data Bis</td>
										<td><?php echo $bis; ?></td>
									</tr>
									<tr>
										<td>Data Truk</td>
										<td><?php echo $truk; ?></td>
									</tr>
									<tr>
										<td>Data Sepeda Motor</td>
										<td><?php echo $sepeda_motor; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all6">Bandingkan setiap tahun</a></h3></center>
					</div>
					
					<script>
						$('a[href="#all6"]').click(function(){
							 $("#showPie16").toggle(1000);
						}); 
					</script>
					
					<br>
						
					<div id = "showPie16" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Total Kendaraan Per Tahun</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kendaraan");
									while ($row = mysql_fetch_array($query)) {
										$tahun = $row['tahun'];
										$total = $row['total'];
								?>
									<tr>
										<td><?php echo $tahun; ?></td>
										<td><?php echo $total; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					
					<div id = "showPie17" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Timur</th>
									<th>Jakarta Selatan</th>
									<th>Jakarta Utara</th>
									<th>Jakarta Pusat</th>
									<th>Jakarta Barat</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select sum(case when jakarta_timur = '' then 0 else 1 end) as a, 
											sum(case when jakarta_selatan = '' then 0 else 1 end) as b,
											sum(case when jakarta_utara = '' then 0 else 1 end) as c,
											sum(case when jakarta_pusat = '' then 0 else 1 end) as d,
											sum(case when jakarta_barat = '' then 0 else 1 end) as e from data_kemacetan");
									while ($row = mysql_fetch_array($query)) {
										$jakarta_timur = $row['a'];
										$jakarta_selatan = $row['b'];
										$jakarta_utara = $row['c'];
										$jakarta_pusat = $row['d'];
										$jakarta_barat = $row['e'];
								?>
									<tr>
										<td>Jumlah Kemacetan Terparah</td>
										<td><?php echo $jakarta_timur; ?></td>
									</tr>
									<tr>
										<td>Jumlah Kemacetan Terparah</td>
										<td><?php echo $jakarta_selatan; ?></td>
									</tr>
									<tr>
										<td>Jumlah Kemacetan Terparah</td>
										<td><?php echo $jakarta_utara; ?></td>
									</tr>
									<tr>
										<td>Jumlah Kemacetan Terparah</td>
										<td><?php echo $jakarta_pusat; ?></td>
									</tr>
									<tr>
										<td>Jumlah Kemacetan Terparah</td>
										<td><?php echo $jakarta_barat; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all5">Lihat Data Kemacetan Tiap Wilayah</a></h3></center>
						
						<script>
							$('a[href="#all5"]').click(function(){
								 $("#showPie18").toggle(1000);
							}); 
						</script>
						
						<br>
						
						<center><div id = "showPie18">
							<table border = "1px solid black" style = "background:#fff; font-size:12pt;">
							<tr>
								<th style = "background:gold; text-align:center;">&nbsp;No&nbsp;</th>
								<th style = "background:#2980b9; text-align:center; color:white">&nbsp;Jakarta Timur&nbsp;</th>
								<th style = "background:#c0392b; text-align:center; color:white">&nbsp;Jakarta Selatan&nbsp;</th>
								<th style = "background:#27ae60; text-align:center; color:white">&nbsp;Jakarta Utara&nbsp;</th>
								<th style = "background:#8e44ad; text-align:center; color:white">&nbsp;Jakarta Pusat&nbsp;</th>
								<th style = "background:#4aa3df; text-align:center; color:white">&nbsp;Jakarta Barat&nbsp;</th>
							</tr>
							<?php
								include("config/select_kemacetan.php");
							?>
							</table>
							
							<h3><a href = "data_kemacetan.php">Ubah Data Kemacetan</a></h3>
						</div></center>
					</div>
					
					<div id = "showPie19" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Utara</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_jakut");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['jakarta_utara'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all4">Luas Seluruh DKI Jakarta</a></h3></center>
					</div>
					
					<div id = "showPie20" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Barat</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_jakbar");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['jakarta_barat'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all4">Luas Seluruh DKI Jakarta</a></h3></center>
					</div>
					
					<div id = "showPie21" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Timur</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_jaktim");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['jakarta_timur'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all4">Luas Seluruh DKI Jakarta</a></h3></center>
					</div>
					
					<div id = "showPie22" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Selatan</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_jaksel");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['jakarta_selatan'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all4">Luas Seluruh DKI Jakarta</a></h3></center>
					</div>
					
					<div id = "showPie23" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Jakarta Pusat</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_jakpus");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['jakarta_pusat'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						<center><h3><a href = "#all4">Luas Seluruh DKI Jakarta</a></h3></center>
					</div>
					
					<script>
						$('a[href="#all4"]').click(function(){
							 $("#showPie24").toggle(1000);
						}); 
					</script>
					
					<br>
						
					<div id = "showPie24" style = "width:1100px;">
						<table class="highchart" data-graph-container-before="1" data-graph-type="pie" style="display:none" data-graph-datalabels-enabled="1" data-graph-color-1="#999">
							<thead>
								<tr>                                  
									<th>Month</th>
									<th>Luas Seluruh DKI Jakarta</th>
								</tr>
							 </thead>
							 <tbody>
								<?php
									include('config/config.php');
									$query = mysql_query("select * from data_kondisi_jalan_dki");
									while ($row = mysql_fetch_array($query)) {
										$wilayah = $row['wilayah'];
										$luas = $row['luas'];
								?>
									<tr>
										<td><?php echo $wilayah; ?></td>
										<td><?php echo $luas; ?></td>
									</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					
				</div>
        </section><!-- /.templatemo-page2-text --> 
		
        <section id="templatemo-page6-text" class="inactive">
            <div class="col-sm-12 col-md-12">
                <h2>Data</h2>
                <p>Dalam Fitur ini Anda dapat melihat beberapa data yang berperan dalam mendukung pengambilan keputusan efektifitas pembangunan MRT di Jakarta </p>         
				<div class="videoWrapper"  style = "overflow:auto;">
					<div style = "margin-left:200px;">
						<img style = "width:190px; height:150px; position:absolute; margin-left:-200px;" src = "images/data_kendaraan.jpg">
						<h3>Data Kendaraan</h3>
						<p>Berisi data jumlah kendaraan pertahun di Jakarta, seperti kendaraan mobil penumpang, bis, truk, sepeda motor <a href = "#" id = "show">lihat data</a></p>
						<a href = "data kendaraan.xlsx"><button>xlsx</button></a>
						<a href = "data kendaraan.csv"><button>csv</button></a>
						<a href = "data kendaraan.doc"><button>doc</button></a>
						<a href = "data kendaraan.rtf"><button>rtf</button></a>
						<a href = "data kendaraan.xml"><button>xml</button></a>
						<hr>
						
						<script>
							$(document).ready(function(){
								$("#data_kendaraan").hide();
								$("#show").click(function(){
									$("#data_kendaraan").toggle(1000);
								});
							});
						</script>
						
						<div id = "data_kendaraan">
							<table border = "1px solid black" style = "background:#fff; font-size:12pt;">
							<tr>
								<th style = "background:gold; text-align:center;">&nbsp;No&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Tahun&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Mobil Penumpang&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Bis&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Truk&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Sepeda Motor&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Total&nbsp;</th>
							</tr>
							<?php
								include("config/select_kendaraan.php");
							?>
							</table>
							
							<h3><a href = "data_kendaraan.php">Ubah Data Kendaraan</a></h3>
						</div>
						
						<br><br><br><br>
						
						<img style = "width:190px; height:150px; position:absolute; margin-left:-200px;" src = "images/data_kemacetan.jpg">
						<h3>Data Kemacetan</h3>
						<p>Berisi data titik-titik tempat yang sering terjadi kemacetan parah di Jakarta <a href = "#" id = "show2">lihat data</a></p>
						<a href = "data kemacetan.xlsx"><button>xlsx</button></a>
						<a href = "data kemacetan.csv"><button>csv</button></a>
						<a href = "data kemacetan.doc"><button>doc</button></a>
						<a href = "data kemacetan.rtf"><button>rtf</button></a>
						<a href = "data kemacetan.xml"><button>xml</button></a>
						<hr>
						
						<script>
							$(document).ready(function(){
								$("#data_kemacetan").hide();
								$("#show2").click(function(){
									$("#data_kemacetan").toggle(1000);
								});
							});
						</script>
						
						<div id = "data_kemacetan">
							<table border = "1px solid black" style = "background:#fff; font-size:12pt;">
							<tr>
								<th style = "background:gold; text-align:center;">&nbsp;No&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Jakarta Timur&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Jakarta Selatan&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Jakarta Utara&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Jakarta Pusat&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Jakarta Barat&nbsp;</th>
							</tr>
							<?php
								include("config/select_kemacetan.php");
							?>
							</table>
							
							<h3><a href = "data_kemacetan.php">Ubah Data Kemacetan</a></h3>
						</div>
						
						<br><br><br>
						
						<img style = "width:190px; height:150px; position:absolute; margin-left:-200px;" src = "images/data_kondisi_jalan.jpg">
						<h3>Data Kondisi Jalan</h3>
						<p>Berisi data kondisi jalan yang berada di Jakarta, kondisi jalan tersebut juga merupakan parameter untuk membangun jalur MRT <a href = "#" id = "show3">lihat data</a></p>
						<a href = "data kondisi jalan.xlsx"><button>xlsx</button></a>
						<a href = "data kondisi jalan.csv"><button>csv</button></a>
						<a href = "data kondisi jalan.doc"><button>doc</button></a>
						<a href = "data kondisi jalan.rtf"><button>rtf</button></a>
						<a href = "data kondisi jalan.xml"><button>xml</button></a>
						<hr>
						
						<script>
							$(document).ready(function(){
								$("#data_kondisi_jalan").hide();
								$("#show3").click(function(){
									$("#data_kondisi_jalan").toggle(1000);
								});
							});
						</script>
						
						<div id = "data_kondisi_jalan">
							<table border = "1px solid black" style = "background:#fff; font-size:12pt;">
							<tr>
								<th style = "background:gold; text-align:center;">&nbsp;No&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Jakarta Barat&nbsp;</th>
								<th style = "background:gold; text-align:center;">&nbsp;Luas&nbsp;</th>
							</tr>
							<?php
								include("config/select_kondisi_jalan_jakbar.php");
							?>
							</table>
							
							<h3><a href = "data_kondisi_jalan_jakbar.php">Ubah Data Jakarta Barat</a></h3>
							
							<div style = "position:absolute; margin-top:-230px; margin-left:300px;">
								<table border = "1px solid black" style = "background:#fff; font-size:12pt;">
								<tr>
									<th style = "background:gold; text-align:center;">&nbsp;No&nbsp;</th>
									<th style = "background:gold; text-align:center;">&nbsp;Jakarta Timur&nbsp;</th>
									<th style = "background:gold; text-align:center;">&nbsp;Luas&nbsp;</th>
								</tr>
								<?php
									include("config/select_kondisi_jalan_jaktim.php");
								?>
								</table>
								
								<h3><a href = "data_kondisi_jalan_jaktim.php">Ubah Data Jakarta Timur</a></h3>
							</div>
							
							<div style = "position:absolute; margin-top:-230px; margin-left:600px;">
								<table border = "1px solid black" style = "background:#fff; font-size:12pt;">
								<tr>
									<th style = "background:gold; text-align:center;">&nbsp;No&nbsp;</th>
									<th style = "background:gold; text-align:center;">&nbsp;Jakarta Selatan&nbsp;</th>
									<th style = "background:gold; text-align:center;">&nbsp;Luas&nbsp;</th>
								</tr>
								<?php
									include("config/select_kondisi_jalan_jaksel.php");
								?>
								</table>
								
								<h3><a href = "data_kondisi_jalan_jaksel.php">Ubah Data Jakarta Selatan</a></h3>
							</div>
							
							<br><br><br><br><br><br><br>
							
							<div style = "margin-top:0px; margin-left:170px;">
								<table border = "1px solid black" style = "background:#fff; font-size:12pt;">
								<tr>
									<th style = "background:gold; text-align:center;">&nbsp;No&nbsp;</th>
									<th style = "background:gold; text-align:center;">&nbsp;Jakarta Utara&nbsp;</th>
									<th style = "background:gold; text-align:center;">&nbsp;Luas&nbsp;</th>
								</tr>
								<?php
									include("config/select_kondisi_jalan_jakut.php");
								?>
								</table>
							
								<h3><a href = "data_kondisi_jalan_jakut.php">Ubah Data Jakarta Utara</a></h3>
							</div>
							
							<div style = "margin-top:-200px; margin-left:450px;">
								<table border = "1px solid black" style = "background:#fff; font-size:12pt;">
								<tr>
									<th style = "background:gold; text-align:center;">&nbsp;No&nbsp;</th>
									<th style = "background:gold; text-align:center;">&nbsp;Jakarta Pusat&nbsp;</th>
									<th style = "background:gold; text-align:center;">&nbsp;Luas&nbsp;</th>
								</tr>
								<?php
									include("config/select_kondisi_jalan_jakpus.php");
								?>
								</table>
								
								<h3><a href = "data_kondisi_jalan_jakpus.php">Ubah Data Jakarta Pusat</a></h3>
							</div>
						</div>
						
						<br><br><br>
						
						<img style = "width:190px; height:150px; position:absolute; margin-left:-200px;" src = "images/data_komentar_masyarakat.jpg">
						<h3>Data Komentar Masyarakat</h3>
						<p>Berisi data komentar masyarakat tentang pembangunan MRT di Jakarta. Metode yang akan digunakan menggunakan Sentiment Analysis<br><br><a href = "sentiment_analysis.php">Lakukan pencarian</a></p>
						
						<hr>
					</div>
                </div>
            </div>
        </section><!-- /.templatemo-page6-text -->
		
        <section id="templatemo-page3-text" class="inactive">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2>Visualisasi Peta</h2>
				<p>Fitur ini memvisualisasikan peta kota Jakarta yang menunjukan jalur MRT yang efektif untuk dibuat. </p>
				<div style = "position:absolute; margin-top:360px; margin-left:230px; z-index:999;">
					<table class = "searchBackground">
						<tr>
							<th><input id = "address" type = "search" placeholder = "Cari....." style = "height:30px; width:300px;"/></th>
							<th><input id = "lookup" type = "submit" value = "Cari" style = "height:30px; width:100px;" class="btn btn-primary"></th>
						</tr>
					</table>
				</div>
				<div>
					<h3>Tampilkan data titik kemacetan di DKI Jakarta</h3>
					<input type = "checkbox" id = "jakarta_utara" onclick="validate()"> <span style = "color:white; font-size:11pt;">Jakarta Utara</span>&nbsp;&nbsp;&nbsp;
					<input type = "checkbox" id = "jakarta_barat" onclick="validate()"> <span style = "color:white; font-size:11pt;">Jakarta Barat</span>&nbsp;&nbsp;&nbsp;
					<input type = "checkbox" id = "jakarta_timur" onclick="validate()"> <span style = "color:white; font-size:11pt;">Jakarta Timur</span>&nbsp;&nbsp;&nbsp;
					<input type = "checkbox" id = "jakarta_selatan" onclick="validate()"> <span style = "color:white; font-size:11pt;">Jakarta Selatan</span>&nbsp;&nbsp;&nbsp;
					<input type = "checkbox" id = "jakarta_pusat" onclick="validate()"> <span style = "color:white; font-size:11pt;">Jakarta Pusat</span>
				</div>
				<div>
					<h3>Tampilkan data luas jalan di DKI Jakarta</h3>
					<input type = "checkbox" id = "jakarta_utara2" onclick="validate_jalan()"> <span style = "color:white; font-size:11pt;">Jakarta Utara</span>&nbsp;&nbsp;&nbsp;
					<input type = "checkbox" id = "jakarta_barat2" onclick="validate_jalan()"> <span style = "color:white; font-size:11pt;">Jakarta Barat</span>&nbsp;&nbsp;&nbsp;
					<input type = "checkbox" id = "jakarta_timur2" onclick="validate_jalan()"> <span style = "color:white; font-size:11pt;">Jakarta Timur</span>&nbsp;&nbsp;&nbsp;
					<input type = "checkbox" id = "jakarta_selatan2" onclick="validate_jalan()"> <span style = "color:white; font-size:11pt;">Jakarta Selatan</span>&nbsp;&nbsp;&nbsp;
					<input type = "checkbox" id = "jakarta_pusat2" onclick="validate_jalan()"> <span style = "color:white; font-size:11pt;">Jakarta Pusat</span>
				</div>
				<div>
					<h3>Tampilkan keputusan jalur pembangunan MRT di DKI Jakarta</h3>
					<input type = "radio" name = "validate_mrt" id = "sudah" onclick="validate_mrt()"> <span style = "color:white; font-size:11pt;">Sedang dibangun jalur MRT</span>&nbsp;&nbsp;&nbsp;
					<input type = "radio" name = "validate_mrt" id = "efektif" onclick="validate_mrt()"> <span style = "color:white; font-size:11pt;">Efektif dibangun jalur MRT</span>&nbsp;&nbsp;&nbsp;
					<input type = "radio" name = "validate_mrt" id = "kurang_efektif" onclick="validate_mrt()"> <span style = "color:white; font-size:11pt;">Kurang efektif dibangun jalur MRT</span>&nbsp;&nbsp;&nbsp;
					<input type = "radio" name = "validate_mrt" id = "tidak_efektif" onclick="validate_mrt()"> <span style = "color:white; font-size:11pt;">Tidak efektif dibangun jalur MRT</span>
				</div>
				<div style = "margin-top:30px;">
					<span><img src = "icon/2.png"> Titik Kemacetan Parah
					<img src = "icon/3.png"> Titik Kemacetan Sedang
					<img src = "icon/1.png"> Titik Kemacetan Ringan</span>
				</div>
                <div>
					<div id="map-canvas" style="width:830px;height:750px; margin-top:30px; background: rgba(255,255,255,0.4);"></div>
					<div id="chartdiv" style="width: 30%; height: 400px; position:absolute; margin-top:-830px; margin-left:800px;"></div>
					<div style = "position:absolute; margin-top:-780px; margin-left:900px;"><h3>Detail Jalur MRT</h3></div>
					<div style = "position:absolute; margin-top:-320px; margin-left:850px;">
						<div id="showDetail" style="color:white; font-size:10pt; width:250px; height:150px; margin-right:15px;"></div>
						<img id="showImage" style="width:250px; height:170px; margin-right:15px;">
					</div>
				</div>
				
				<div id="chartdiv2" style="width: 30%; height: 400px;"></div>
				<div style = "position:absolute; margin-top:-400px; margin-left:50px; "><h3>Data Kemacetan di Jakarta Utara</h3></div>
				
				<div style = "position:absolute; margin-top:-400px; margin-left:400px; "><h3>Data Kemacetan di Jakarta Pusat</h3></div>
				<div id="chartdiv5" style="position:absolute; margin-top:-400px; margin-left:350px; width: 30%; height: 400px;"></div>
				
				<div style = "position:absolute; margin-top:-400px; margin-left:730px; "><h3>Data Kemacetan di Jakarta Selatan</h3></div>
				<div id="chartdiv6" style="position:absolute; margin-top:-400px; margin-left:700px; width: 30%; height: 400px;"></div>
				
				<div id="chartdiv4" style="margin-left:150px; width: 30%; height: 400px;"></div>
				<div style = "position:absolute; margin-top:-400px; margin-left:180px; "><h3>Data Kemacetan di Jakarta Timur</h3></div>
				
				<div style = "position:absolute; margin-top:-400px; margin-left:650px; "><h3>Data Kemacetan di Jakarta Barat</h3></div>
				<div id="chartdiv3" style="position:absolute; margin-top:-400px; margin-left:620px; width: 30%; height: 400px;"></div>
            </div>
        </section><!-- /.templatemo-page3-text --> 
		
        <section id="templatemo-page4-text" class="inactive">
        	<h2 class="text-center">Tentang Kami</h2>
            <div class="col-sm-6 col-md-6">
                <h3>Latar Belakang</h3>
                <p>J-MRT PASS yaitu sebuah sistem pendukung keputusan berbasis web yang dapat digunakan untuk menentukan jalur prioritas MRT yang akan dibangun di Jakarta. 
				Pada sistem ini kami akan menganalisa titik – titik kemacetan yang ada di Jakarta, hasil analisa yang kami buat akan divisualisasikan dengan bentuk peta yang didukung menggunakan Google map,
				dari visualisasi tersebut akan terlihat dimana jalur MRT yang akan menjadi prioritas untuk dibuat agar dapat  menanggulangi permasalahan pembangunan MRT terkait kemacetan yang ada di Jakarta.</p>
            </div>
            <div class="col-sm-6 col-md-6">
                <h3>Tim Kami</h3>
                <p>	Ocky Aditia Saputra / 1402012089	(Fak. Teknologi Informasi 2012)<br>
					Dian Ayu Wulandari H / 1402012021 (Fak. Teknologi Informasi 2012)<br>
					Intan Nurjanah / 1402012044 (Fak. Teknologi Informasi 2012)<br>
					Taufik Hidayat Raharjo / 1402012082 (Fak. Teknologi Informasi 2012)<br>
					Try Anugrah R / 1402012088 (Fak. Teknologi Informasi 2012)<br>
					Achmad Abrar / 1402011002 (Fak. Teknologi Informasi 2011)
				</p>
            </div>
            <div class="col-sm-6 col-md-6" style = "margin-top:30px;">
                <h3>Manfaat</h3>
                <p>Dengan diterapkannya sistem ini, diharapkan dapat memberikan solusi untuk membantu mengefisiensikan pembangunan jalur MRT di Jakarta. 
				Sarana MRT yang berhasil dibangun dan digunakan serta di manfaatkan dengan baik dapat membantu mengatasi masalah kemacetan. 
				MRT dihimbau untuk meningkatkan kesadaran masyarakat agar lebih memilih menggunakan angkutan umum daripada kendaraan pribadi, hal ini berguna untuk membantu pemerintah memaksimalkan kinerja MRT. 
				Keberhasilan ini akan memberikan dampak yang besar untuk kota Jakarta salah satunya yaitu menghemat waktu dan BBM serta menjadikan Jakarta sebagai kota yang produktif.</p>
            </div>
            <div class="col-sm-6 col-md-6" style = "margin-top:-253px;">
                <h3>Tujuan</h3>
                <p>•	Membuat sistem pendukung keputusan untuk menentukan jalur MRT di Jakarta.<br>
				   •	Menganalisa data-data kemacetan yang terjadi di Jakarta, kondisi jalan yang memungkinkan untuk dibangun jalur MRT dan komentar dari masyarakat terkait pembangunan jalur MRT.<br>
				   •	Membuat visualisasi prioritas jalur MRT yang akan dibangun.
				</p>
            </div>
            
        </section><!-- /.templatemo-page4-text --> 

        <section id="templatemo-page5-text" class="inactive">
            <div class="col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                    	<h2>Informasi Kontak</h2>
                    	<p>Kirimi Kami umpan balik untuk perbaikan Sistem yang lebih baik lagi.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                    	<h3>Lokasi</h3>
                        <div id="mapcanvas"></div>
                        <p>Jalan Letjen R Suprapto No.72, Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10640, Indonesia</p>
                    </div>

                    <div class="col-sm-6 col-md-6">
                    	<h3>Kirim Kami Pesan</h3>
                        <form action="config/insert_umpanbalik.php" method="post">

                            <div class="form-group">
                                <!--<label for="contact_name">Name:</label>-->
                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Nama" required />
                            </div>
                            <div class="form-group">
                                <!--<label for="contact_email">Email:</label>-->
                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required />
                            </div>
                            <div class="form-group">
                                <!--<label for="contact_subject">Subject:</label>-->
                                <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Judul" required />
                            </div>
                            <div class="form-group">
                                <!--<label for="contact_message">Message:</label>-->
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Pesan"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>

                        </form>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </section><!-- /.templatemo-page5-text --> 
    </div><!-- /.templatemo-content -->  
</div><!-- /.templatemo-content-wrapper --> 
</div><!-- /.row --> 

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
</div> <!-- /.container -->
</div><!-- /#main-wrapper -->

<div id="preloader">
    <div id="status">&nbsp;</div>
</div><!-- /#preloader -->

<script src="js/jquery.backstretch.min.js"></script>
<script src="js/jquery.flexslider.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/templatemo_script.js"></script>
</body>
</html>