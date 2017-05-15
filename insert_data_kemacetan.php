<!DOCTYPE html>
<html>
	<head>
		<!-- data -->
		<title>J-MRT PASS</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width">        
		<link rel="stylesheet" href="css/templatemo_main.css">
	</head>
	
	<body style = "background-image:url(images/jayaraya2.jpg); background-attachment: fixed; background-size: 100%; background-repeat: no-repeat;">
		
		<div class="container">
			<!-- Static navbar -->
			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
			  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				  <li class="active"><a href="index.php"><i class="fa fa-home"></i>Beranda</a></li>
				  <li><a href="index.php"><i class="fa fa-external-link"></i>Data</a></li>
				  <li><a href="index.php"><i class="fa fa-laptop"></i>Analisis</a></li>
				  <li><a href="index.php"><i class="fa fa-video-camera"></i>Visualisasi</a></li>
				  <li><a href="index.php"><i class="fa fa-users"></i>Tentang</a></li>
				  <li><a href="index.php"><i class="fa fa-envelope-o"></i>Kontak</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	
		<br>
		
		<div style = "background-color: rgba(25, 181, 254, 0.9); border: 5px solid white; padding: 20px;">
			<form action="config/insert_data_kemacetan.php" method="post">
			
				<h2 style = "color: gold; font-weight:bolder;">Data Kemacetan DKI Jakarta</h2>
				
				<br>

				<div class="form-group">
					<input type="text" id="contact_name" name="jakarta_timur" class="form-control" placeholder="Jakarta Timur" />
				</div>
				<div class="form-group">
					<input type="text" id="contact_email" name="jakarta_selatan" class="form-control" placeholder="Jakarta Selatan" />
				</div>
				<div class="form-group">
					<input type="text" id="contact_subject" name="jakarta_utara" class="form-control" placeholder="Jakarta Utara" />
				</div>
				<div class="form-group">
					<input type="text" id="contact_subject" name="jakarta_pusat" class="form-control" placeholder="Jakarta Pusat" />
				</div>
				<div class="form-group">
					<input type="text" id="contact_subject" name="jakarta_barat" class="form-control" placeholder="Jakarta Barat" />
				</div>
				
				<button type="submit" class="btn btn-primary">Kirim</button>
				<button type="reset" class="btn btn-primary">Hapus</button>

			</form>
			
			<?php
				if(!empty($_GET['message'])){
					if($_GET['message'] == "success"){
			?>
						<center><h3 style = "color: gold; font-weight:bolder;">Data Kemacetan Berhasil Di Tambah</h3>
						<h3><a href = "data_kemacetan.php">Lihat Data</a></h3>
						</center>
			<?php
					}
				}
			?>
			
			
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