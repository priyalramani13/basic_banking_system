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
	$cid = "CID_08";
	$sql = "SELECT * FROM Customers where Customer_ID='{$cid}'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
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
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Niramit:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
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
				<li class="active"><a href="index.html">Home</a></li>
				<li class=""><a href="services.php">View All Customers</a></li>
				<li class=""><a href="services.php">Transaction History</a></li>
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
		</ol>
	</nav>
	</div>
</div>
<!-- //breadcrumb -->

<!-- details -->
<section class="advantages pt-5">
	<div class="container pb-lg-5">
		<div class="row advantages_grids">
			<div class="col-lg-6">
				<img src="images/a2.png" alt="" height="120%" >
			</div>
			<div class="col-lg-6 mt-lg-0 mt-4">
				<h3 class="mt-3" style="text-align:center;"><b><i>Welcome <?php echo $row["Name"]?> !</i></b></h3>
				<h3 class="mt-3" style="text-align:center;">Account Number : <?php echo $row["Acc_no"]?></h3>
				<h3 class="mt-3" style="text-align:center;">Customer ID : <?php echo $row["Customer_ID"]?></h3>
				<h3 class="mt-3" style="text-align:center;">Email ID : <?php echo $row["Email"]?></h3>
				<h3 class="mt-3" style="text-align:center;">Current Balance : <?php echo $row["Balance"]?></h3>
			</div>
		</div>
	</div>
</section>
<!-- //details -->

<!-- subscribe -->
	<div>	
				
				<form action="calculation.php" method="POST" style="text-align:center;" >
					<b>Transfer To :</b>
					<select id="receiver" name="receiver"  required>
						  <option value="Priyal Ramani">Priyal Ramani</option>
						   <option value="Tanu Kurup">Tanu Kurup</option>
						   <option value="Heta Patel">Heta Patel</option>
						   <option value="Riya Shah">Riya Shah</option>
						   <option value="Aangi Shah">Aangi Shah</option>
						   <option value="Krupa Patel">Krupa Patel </option>
						   <option value="Niyati Soni">Niyati Soni</option>
						   <option value="Aesha Darji">Aesha Darji</option>
						   <option value="Krina Patel">Krina Patel</option>
						   <option value="Divya Shah">Divya Shah</option>
					</select>
					<br>
					<br>
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amount :</b>
					<input type="number" name="amount" placeholder="Amount" required>
					<br>
					<br>
					<b >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From :</b>
					<select id="sender" name="sender" " required>
						   <option value="Aesha Darji">Aesha Darji</option>
					</select>
					<br>
					<br>
					<button>Send</button>
				</form>
	</div>
<!-- //subscribe -->

<!-- copyright -->
<section class="copy-right py-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<p class="">©Basic Banking System | Design by Priyal Ramani
					
				</p>
			</div>
			<div class="col-lg-5 mt-lg-0 mt-3">
				<ul class="list-w3 d-sm-flex">
					<li>
						
					</li>
					<li class="mx-sm-4 mx-3">
						
					</li>
					<li>
						
					</li>
					<li>
						
					</li>
				</ul>
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