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
	
    $sql2 = "SELECT * FROM customers where Customer_ID ='CID_01'"; 
    $result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($result2); 
	
	$sql3 = "SELECT * FROM customers where Customer_ID ='CID_02' "; 
    $result3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_array($result3);
	
	$sql4 = "SELECT * FROM customers where Customer_ID ='CID_03'"; 
    $result4 = mysqli_query($conn, $sql4);
	$row4 = mysqli_fetch_array($result4);
	
	$sql5 = "SELECT * FROM customers where Customer_ID ='CID_04'"; 
    $result5 = mysqli_query($conn, $sql5);
	$row5 = mysqli_fetch_array($result5);
	
	$sql6 = "SELECT * FROM customers where Customer_ID ='CID_05'"; 
    $result6 = mysqli_query($conn, $sql6);
	$row6 = mysqli_fetch_array($result6);
	
	$sql7 = "SELECT * FROM customers where Customer_ID = 'CID_06'"; 
    $result7 = mysqli_query($conn, $sql7);
	$row7 = mysqli_fetch_array($result7);
	
	$sql8 = "SELECT * FROM customers where Customer_ID = 'CID_07'"; 
    $result8 = mysqli_query($conn, $sql8);
	$row8 = mysqli_fetch_array($result8);
	
	$sql9 = "SELECT * FROM customers where Customer_ID = 'CID_08'"; 
    $result9 = mysqli_query($conn, $sql9);
	$row9 = mysqli_fetch_array($result9);
	
	$sql10 = "SELECT * FROM customers where Customer_ID = 'CID_09'"; 
    $result10 = mysqli_query($conn, $sql10);
	$row10 = mysqli_fetch_array($result10);
	
	$sql11 = "SELECT * FROM customers where Customer_ID = 'CID_10'"; 
    $result11 = mysqli_query($conn, $sql11);
	$row11 = mysqli_fetch_array($result11);
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Customers Details</title>
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
		<h3 class="heading mb-5"><strong>Customer Details</strong></h3>
		<div class="row">

			<!--<div class="limiter">-->
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Customer ID</th>
								<th class="column100 column2" data-column="column2">Name</th>
								<th class="column100 column3" data-column="column3">Email</th>
								<th class="column100 column4" data-column="column4">Account Number</th>
								<th class="column100 column5" data-column="column5">Balance</th>
							</tr>
						</thead>
						
						<tbody>
								<tr class="row100" onclick="window.location.href='about1.php';"> 
									<td class="column100 column1" data-column="column1"><?php echo $row2['Customer_ID']?></td>
									<td class="column100 column2" data-column="column2"><?php echo $row2['Name']?></td>
									<td class="column100 column3" data-column="column3"><?php echo $row2['Email']?></td>
									<td class="column100 column4" data-column="column4"><?php echo $row2['Acc_no']?></td>
									<td class="column100 column5" data-column="column5"><?php echo $row2['Balance']?></td>
							   </tr>  
							  

							<tr class="row100" onclick="window.location.href='about2.php';">
									<td class="column100 column1" data-column="column1"><?php echo $row3['Customer_ID']?></td>
									<td class="column100 column2" data-column="column2"><?php echo $row3['Name']?></td>
									<td class="column100 column3" data-column="column3"><?php echo $row3['Email']?></td>
									<td class="column100 column4" data-column="column4"><?php echo $row3['Acc_no']?></td>
									<td class="column100 column5" data-column="column5"><?php echo $row3['Balance']?></td>
							</tr>

							<tr class="row100" onclick="window.location.href='about3.php';">
									<td class="column100 column1" data-column="column1"><?php echo $row4['Customer_ID']?></td>
									<td class="column100 column2" data-column="column2"><?php echo $row4['Name']?></td>
									<td class="column100 column3" data-column="column3"><?php echo $row4['Email']?></td>
									<td class="column100 column4" data-column="column4"><?php echo $row4['Acc_no']?></td>
									<td class="column100 column5" data-column="column5"><?php echo $row4['Balance']?></td>
							</tr>

							<tr class="row100" onclick="window.location.href='about4.php';">
									<td class="column100 column1" data-column="column1"><?php echo $row5['Customer_ID']?></td>
									<td class="column100 column2" data-column="column2"><?php echo $row5['Name']?></td>
									<td class="column100 column3" data-column="column3"><?php echo $row5['Email']?></td>
									<td class="column100 column4" data-column="column4"><?php echo $row5['Acc_no']?></td>
									<td class="column100 column5" data-column="column5"><?php echo $row5['Balance']?></td>
							</tr>

							<tr class="row100" onclick="window.location.href='about5.php';">
									<td class="column100 column1" data-column="column1"><?php echo $row6['Customer_ID']?></td>
									<td class="column100 column2" data-column="column2"><?php echo $row6['Name']?></td>
									<td class="column100 column3" data-column="column3"><?php echo $row6['Email']?></td>
									<td class="column100 column4" data-column="column4"><?php echo $row6['Acc_no']?></td>
									<td class="column100 column5" data-column="column5"><?php echo $row6['Balance']?></td>
							</tr>

							<tr class="row100" onclick="window.location.href='about6.php';">
									<td class="column100 column1" data-column="column1"><?php echo $row7['Customer_ID']?></td>
									<td class="column100 column2" data-column="column2"><?php echo $row7['Name']?></td>
									<td class="column100 column3" data-column="column3"><?php echo $row7['Email']?></td>
									<td class="column100 column4" data-column="column4"><?php echo $row7['Acc_no']?></td>
									<td class="column100 column5" data-column="column5"><?php echo $row7['Balance']?></td>
							</tr>

							<tr class="row100" onclick="window.location.href='about7.php';">
									<td class="column100 column1" data-column="column1"><?php echo $row8['Customer_ID']?></td>
									<td class="column100 column2" data-column="column2"><?php echo $row8['Name']?></td>
									<td class="column100 column3" data-column="column3"><?php echo $row8['Email']?></td>
									<td class="column100 column4" data-column="column4"><?php echo $row8['Acc_no']?></td>
									<td class="column100 column5" data-column="column5"><?php echo $row8['Balance']?></td>
							</tr>

							<tr class="row100" onclick="window.location.href='about8.php';">
									<td class="column100 column1" data-column="column1"><?php echo $row9['Customer_ID']?></td>
									<td class="column100 column2" data-column="column2"><?php echo $row9['Name']?></td>
									<td class="column100 column3" data-column="column3"><?php echo $row9['Email']?></td>
									<td class="column100 column4" data-column="column4"><?php echo $row9['Acc_no']?></td>
									<td class="column100 column5" data-column="column5"><?php echo $row9['Balance']?></td>
							</tr>
							
							<tr class="row100" onclick="window.location.href='about9.php';">
									<td class="column100 column1" data-column="column1"><?php echo $row10['Customer_ID']?></td>
									<td class="column100 column2" data-column="column2"><?php echo $row10['Name']?></td>
									<td class="column100 column3" data-column="column3"><?php echo $row10['Email']?></td>
									<td class="column100 column4" data-column="column4"><?php echo $row10['Acc_no']?></td>
									<td class="column100 column5" data-column="column5"><?php echo $row10['Balance']?></td>
							</tr>
							<tr class="row100" onclick="window.location.href='about10.php';">
									<td class="column100 column1" data-column="column1"><?php echo $row11['Customer_ID']?></td>
									<td class="column100 column2" data-column="column2"><?php echo $row11['Name']?></td>
									<td class="column100 column3" data-column="column3"><?php echo $row11['Email']?></td>
									<td class="column100 column4" data-column="column4"><?php echo $row11['Acc_no']?></td>
									<td class="column100 column5" data-column="column5"><?php echo $row11['Balance']?></td>
							</tr>
						</tbody>
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