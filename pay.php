<?php
 include 'payment.php';

 	if(isset($_POST['btn'])){
 	$card=$_POST['card'];
 	$date=$_POST['date'];
 	$cvc=$_POST['cvc'];
 	$name=$_POST['name'];
 	
 		
 		if(!isset($err)){
 			$insert=mysqli_query($payment,"insert into car(
 				card,date,name) value('$card','$date','$name')");
 		}

 }
?>

<!DOCTYPE html>
<html>
<head>
	<title> Flight Booking Payment </title>
	<style> 
		.app{
				height:450px;
				width:650px;
				background-image:linear-gradient(#580e8f,#9200ff);
				top:50%;
				left:50%;
				transform: translate(-50%,-50%);
				position:absolute;
				font-size:30px;
		}

		
	</style>
</head>
<body>
	<div class= "app">
		<h1 align= "center" > Pay Now  </h1><br>


<form method="post">
<label for="card"> Pay using credit or debit card:</label>
<input type="number" placeholder="xxxx-xxxx-xxxx-xxxx" name="card" required>
<br>


<label for="date"> Expiry Date:</label>
<input type="text" name="date" required>
<br>



<label for="cvc"> CVC:</label>
<input type="password" placeholder="xxx" name="cvc" required>
<br>

<label for="name"> Card Holder Name:</label>
<input type="text" placeholder="Full Name" name="name" required>
<br>
<input type="submit" name="btn">
<a href="paymen.php"> Check your payment </a>
</form>
	</div>
</body>
</html>











