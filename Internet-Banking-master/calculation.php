
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
	echo "kanika";
	$receiver = $_POST["receiver"];
	$sender = $_POST["sender"];
	$amount = $_POST["amount"];
	echo $receiver."\n";
	echo $sender."\n";
	echo $amount."\n";
	$sql4 = "select * from Customers where Name ='{$sender}'";
	$result4 = mysqli_query($conn,$sql4);
	$row4 = mysqli_fetch_array($result4);
	
	$sql5 = "select * from Customers where Name ='{$receiver}'";
	$result5 = mysqli_query($conn,$sql5);
	$row5 = mysqli_fetch_array($result5);
	
	$s_balance = $row4["Balance"] - $amount ;
	
	$r_balance = $row5["Balance"] + $amount ;
	
	echo $s_balance."\n";
	echo $r_balance."\n";
	
	$sql1 = "UPDATE Customers SET Balance ='{$s_balance}' where Name='{$sender}'";
	$result1 = mysqli_query($conn,$sql1);
	
	
	$sql2 = "update Customers set Balance ='{$r_balance}' where Name = '{$receiver}'";
	$result2 = mysqli_query($conn,$sql2);
	
	
	$sql3 = "Insert into Transactions values('{$sender}','{$receiver}','{$amount}',now(),now())";
	$result3 = mysqli_query($conn,$sql3) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
	
	
	if ( (isset($result1)) && (isset($result2)) && (isset($result3)) ) {
				header("Location: TransHistory.php");
    }
	
?>