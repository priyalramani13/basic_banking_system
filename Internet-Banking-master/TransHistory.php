<?php
    
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "internet banking";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
    $sql2 = "SELECT * FROM transactions"; 
    $result2 = mysqli_query($conn, $sql2);
	 
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Transactions History</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bank Card Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	<script>
		jQuery(document).ready(function($) {
		$(".clickable-row").click(function() {
			window.location = $(this).data("href");
		});
	});  
</script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<link href="css/tableStyle.css" rel='stylesheet' type='text/css' />
	
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/css/util.css">
	<link rel="stylesheet" type="text/css" href="Table_Highlight_Vertical_Horizontal/css/main.css">
<!--===============================================================================================-->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Niramit:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
	<style>
		tr[data-href]{
			cursor:pointer;
		}
	</style>
	
</head>
<body>

<!-- header -->
<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="index.html"> Basic Banking System </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class=""><a href="index.html">Home</a></li>
				<li class=""><a href="services.php">View All Customers</a></li>
				<li class=""><a href="TransHistory.php">Transaction History</a></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- inner-banner -->
<section class="inner-banner" id="home">
	<div class="inner-layer">
		<div class="container">
			
		</div>
	</div>
</section>
<!-- //inner-banner -->

<!-- breadcrumb -->
<div class="breadcrumb-w3pvt">
	<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item" aria-current="page">View All Customers</li>
		</ol>
	</nav>
	</div>
</div>
<!-- //breadcrumb -->
		
<!-- services -->
<section class="services py-5">
	<div class="container py-md-5 py-sm-3">
		<h3 class="heading mb-5"><strong>Transaction History</strong></h3>
		<div class="row">

			<!--<div class="limiter">-->
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Sender</th>
								<th class="column100 column2" data-column="column2">Receiver</th>
								<th class="column100 column3" data-column="column3">Amount</th>
								<th class="column100 column4" data-column="column4">Date</th>
								<th class="column100 column5" data-column="column5">Time</th>
							</tr>
						</thead>
						<?php
							while($row2 = mysqli_fetch_assoc($result2)) {
								echo "<tbody>
										<tr class='row100'> 
											<td class='column100 column1' data-column='column1'>".$row2['Sender']."</td>
											<td class='column100 column2' data-column='column2'>".$row2['Receiver']."</td>
											<td class='column100 column3' data-column='column3'>".$row2['Amount']."</td>
											<td class='column100 column4' data-column='column4'>".$row2['Date']."</td>
											<td class='column100 column5' data-column='column5'>".$row2['Time']."</td>
										</tr> 
									 </tbody>";
							} 
					   ?>
						
					</table>
				</div>
			</div>
		</div>

	

<!--===============================================================================================-->	
	<script src="Table_Highlight_Vertical_Horizontal/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Highlight_Vertical_Horizontal/vendor/bootstrap/js/popper.js"></script>
	<script src="Table_Highlight_Vertical_Horizontal/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Highlight_Vertical_Horizontal/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Table_Highlight_Vertical_Horizontal/js/main.js"></script>
		
		</div>
	</div>
</section>

<!-- copyright -->
<section class="copy-right py-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<p class="">©Basic Banking System | Design by Priyal Ramani
					 
				</p>
			</div>
		</div>
	</div>
</section>
<!-- //copyright -->

<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

</body>
</html>