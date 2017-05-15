<?php
/**
 * PHP based Ajax Grid to update all our favourite imdb movies
 *
 * @author Shakeel Osmani <shakeel.osmani@gmail.com> - http://www.codecaninsters.in
 * @version 1.0.0
 * @license: open source so fuck it up
 */
  
// open up DB connection
include_once("lib/config.php");

// set up DB
mysql_connect("localhost", "root", "root");
mysql_select_db("j-mrtpass");

// include and create object
include("lib/inc/jqgrid_dist.php");

$col = array();
$col["title"] = "No"; 
$col["name"] = "no"; 
$col["search"] = true; 
$col["width"] = "30";
$cols[] = $col;		

$col = array();
$col["title"] = "Jakarta Selatan"; // caption of column
$col["name"] = "jakarta_selatan"; // nama harus sama yaaaa ^_^ buat semua $col[name]
$col["editable"] = true; 
$col["search"] = true; 
$col["width"] = "130";
$cols[] = $col;	

$col = array();
$col["title"] = "Luas";
$col["name"] = "luas";
$col["editable"] = true; 
$col["search"] = true; 
$col["width"] = "130";
$cols[] = $col;

$g = new jqgrid();

$grid["rowNum"] = 20; // by default 20
$grid["sortname"] = 'no'; // by default sort grid by this field
$grid["sortorder"] = "asc"; // ASC or DESC
$grid["caption"] = "Data Kondisi Jalan Jakarta Selatan"; // caption of grid
$grid["autowidth"] = true; // expand grid to screen width
$grid["resizable"] = true; // expand grid to screen width
$grid["multiselect"] = true; // allow you to multi-select through checkboxes
$grid["altRows"] = true; 
$grid["altclass"] = "myAltRowClass"; 

$grid["rowactions"] = true; // allow you to multi-select through checkboxes

// export XLS file
// export to excel parameters
$grid["export"] = array("format"=>"pdf", "filename"=>"my-file", "sheetname"=>"test");

// RTL support
// $grid["direction"] = "rtl";

$g->set_options($grid);

$g->set_actions(array(	
						"add"=>false, // allow/disallow add
						"edit"=>true, // allow/disallow edit
						"delete"=>true, // allow/disallow delete
						"rowactions"=>true, // show/hide row wise edit/del/save option
						"export"=>true, // show/hide export to excel option
						"autofilter" => true, // show/hide autofilter for search
						"search" => "advance" // show single/multi field search condition (e.g. simple or advance)
					) 
				);
			

// you can provide custom SQL query to display data
$g->select_command = "SELECT * from data_kondisi_jalan_jaksel";

// this db table will be used for add,edit,delete
$g->table = "data_kondisi_jalan_jaksel";

// pass the cooked columns to grid
$g->set_columns($cols);

// generate grid output, with unique grid name as 'list1'
$out = $g->render("list1");
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- data -->
		<title>J-MRT PASS</title>
		<link rel="stylesheet" type="text/css" media="screen" href="lib/js/themes/redmond/jquery-ui.custom.css"></link> 
		<link rel="stylesheet" type="text/css" media="screen" href="lib/js/jqgrid/css/ui.jqgrid.css"></link>    
		<script src="lib/js/jquery.min.js" type="text/javascript"></script>
		<script src="lib/js/jqgrid/js/i18n/grid.locale-en.js" type="text/javascript"></script>
		<script src="lib/js/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>    
		<script src="lib/js/themes/jquery-ui.custom.min.js" type="text/javascript"></script>
		
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width">        
		<link rel="stylesheet" href="css/templatemo_main.css">
	</head>
	
	<body style = "background-image:url(images/jayaraya2.jpg); background-attachment: fixed; background-size: 100%; background-repeat: no-repeat;">
	
		<div><a href = "insert_data_kondisi_jalan_jaksel.php"><img src = "images/file_add.png" width = "50" style = "position:absolute; margin-top:200px; margin-left:40px;"></a></div>
		
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
		
		<div id="showdata">
			<?php echo $out?>
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