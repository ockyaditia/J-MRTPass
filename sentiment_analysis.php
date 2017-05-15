<!DOCTYPE html>
<html>
	<head>
		<!-- data -->
		<title>J-MRT PASS</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width">        
		<link rel="stylesheet" href="css/templatemo_main.css">
		
		<style>
		th { font-size: 11pt; text-align:center; color:gold; background-color: rgba(26, 182, 255, 1); font-weight:bolder; border:2px solid black;}
		tr td { font-size: 8pt; }
		table { width:100%;}
		</style>
	</head>
	
	<body style = "background-image:url(images/jayaraya2.jpg); background-attachment: fixed; background-size: 100%; background-repeat: no-repeat;">
		
		<div class="container">
			<!-- Static navbar -->
			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
			  <div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				  <li><a href="index.php"><i class="fa fa-home"></i>Beranda</a></li>
				  <li class="active"><a href="index.php"><i class="fa fa-external-link"></i>Data</a></li>
				  <li><a href="index.php"><i class="fa fa-laptop"></i>Analisis</a></li>
				  <li><a href="index.php"><i class="fa fa-video-camera"></i>Visualisasi</a></li>
				  <li><a href="index.php"><i class="fa fa-users"></i>Tentang</a></li>
				  <li><a href="index.php"><i class="fa fa-envelope-o"></i>Kontak</a></li>
			  </ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	
		<br>
		
		<div style = "background-color: rgba(25, 181, 254, 0.9); border: 5px solid white; padding: 20px; height: 700px; overflow: auto;">
		
			<h3>Ketikkan kata kunci yang Anda ingin cari di Twitter</h3>
			
			<form method="GET">
				<h3>Kata kunci: </h3>
				<input type="text" name="q" />
				<div style = "margin-top:-88px; margin-left:230px;"><h3>Jumlah data: </h3>
				<input type="text" name="x" />
				<input type="submit" class="btn btn-primary" /></div>
			</form>

			<?php
			$inc = (int)0;
			$inc2 = (int)0;
			
			if(isset($_GET['q']) && $_GET['q']!='' && isset($_GET['x']) && $_GET['x']!='') {
				include_once(dirname(__FILE__).'/config.php');
				include_once(dirname(__FILE__).'/lib/TwitterSentimentAnalysis.php');

				$TwitterSentimentAnalysis = new TwitterSentimentAnalysis(DATUMBOX_API_KEY,TWITTER_CONSUMER_KEY,TWITTER_CONSUMER_SECRET,TWITTER_ACCESS_KEY,TWITTER_ACCESS_SECRET);

				//Search Tweets parameters as described at https://dev.twitter.com/docs/api/1.1/get/search/tweets
				$twitterSearchParams=array(
					'q'=>$_GET['q'],
					'lang'=>'en',
					'count'=>$_GET['x'] + 1,
				);
				$results=$TwitterSentimentAnalysis->sentimentAnalysis($twitterSearchParams);


				?>
				<h3>Results for "<?php echo $_GET['q']; ?>"</h3>
				<table border="1">
					<tr>
						<th>Id</th>
						<th>User</th>
						<th>Text</th>
						<th>Twitter Link</th>
						<th>Sentiment</th>
					</tr>
					<?php
					
					foreach($results as $tweet) {
						
						$color=NULL;
						if($tweet['sentiment']=='positive') {
							$color='#00FF00';
							$inc++;
						}
						else if($tweet['sentiment']=='negative') {
							$color='#FF0000';
							$inc2++;
						}
						else if($tweet['sentiment']=='neutral') {
							$color='#FFFFFF';
						}
						?>
						<tr style="background:<?php echo $color; ?>;">
							<td><?php echo $tweet['id']; ?></td>
							<td><?php echo $tweet['user']; ?></td>
							<td><?php echo $tweet['text']; ?></td>
							<td><a href="<?php echo $tweet['url']; ?>" target="_blank">View</a></td>
							<td><?php echo $tweet['sentiment']; ?></td>
						</tr>
						<?php
					}
					?>    
				</table>
				<br><center>
				<form action = "sentiment_analysis_chart.php" method = "post">
					<input type = "hidden" name = "positive" value = "<?php echo $inc; ?>"/>
					<input type = "hidden" name = "negative" value = "<?php echo $inc2; ?>"/>
					<input type = "submit" value = "Lihat Grafik" class="btn btn-primary"/>
				</form></center>
				<?php
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