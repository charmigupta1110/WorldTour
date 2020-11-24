<?php
 include 'cn.php';

 	if(isset($_POST['btn'])){
 		$flight=$_POST['flight'];
 		$time=$_POST['ftime'];
 		$date=$_POST['in'];

 		if(empty($flight)){
 			$err['flight']="Enter a Flight";
 		}
 		if(empty($time)){
 			$err['time']="Enter a Time";
 		}
 		if(empty($date)){
 			$err['date']="Enter a Date";
 		}
 		if(!isset($err)){
 			$insert=mysqli_query($cn,"insert into addflight(flight,ftime,boardingdate) values('$flight','$time','$date')");
 		}
 	}

?>
<html>
<head> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#example3{
	background-image: url('img3.jpg');
	background-size: cover;
	background-repeat: no-repeat;
}
.btn {
	 color:blue;
 	 padding: 24px 36px;
  	font-size: 20px;
  	cursor: pointer;
	margin-left:60px;
}
.btn:hover{
	background-color:green;
	
}
	
h1{
	font-size=120px;
}
*{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
.book{
	background:green;
	text-align:center;
}
.book li{
	font-size:20px;
}
.book ul {
	display: inline-flex;
	list-style:none;
      }

.book ul li{
	width:120px;
	margin:15px;
	padding:15px;
}
.book ul li a{
	text-decoration:none;
}
.book ul li:hover{
	background-color:black;
	background-radius:3px;
}
p{
	margin-left:20px;
	font-size:30px;
	background-color:white;
}
.dot {
 	 height:10px;
	  width:10px;
 	 background-color: black;
  	border-radius: 50%;
  	display: inline-block;
}
.do{
 	color:white;
 	 background-color: black;
	 height:10px;
	  width:10px;
  	border-radius: 50%;
  	display: inline-block;
}
.myy{
	background-color: black;
	color:white;
}
.photo{
	margin-left:950px;
	font-size:30px;
	text-decoration:none;
	text-align:center;
	background-color:black;
}

.fa:hover{
	opacity:0.7;
}
.fa-facebook{
	color:white;
	background-color:#3B5998;
}
.fa-instagram{
	color:pink;
	background-color:blue;
}
.fa-youtube{
	color:white;
	background-color:red;
}
.fa-twitter{
	color:#55ACEE;
	background-color:white;
}
.media{
	margin-left:200px;
	margin-top:300px;
	word-spacing:30px;
}
span{
	color:red;
}
</style>
</head>
<body>
<h1 align= "center" > Online Booking </h1><br>
<div class="book">
<ul>
<li> <a href="a.php"><i class="fa fa-home"><br> Home</i> </a></li>
<li> <a href="b.php"><i class="fa fa-bed" > <br>Hotels </i></a> </li>
<li> <a href="c.php"> <i class="fa fa-fighter-jet" ><br>Flights </i></a> </li>
<li> <a href="Flight.php"> <i class="fa fa-fighter-jet" ><br>ADD Flights </i></a> </li>
<li> <a href="e.php"> <i class="fa fa-plane" ><br>Airport Taxi </i></a> </li>
<li> <a href="f.php"> <i class="fa fa-phone" > <br>Contacts </i></a> </li>
</ul></div><br>

<div id="example3">
<h1 align= "center" style="color:red;" > SEARCH FLIGHTS </h1>
<h1 align= "center" style="color:red;" > Search And Book Flights With No Booking Fees </h1>

<form method="post">
	<label for="flight">flight </label>
	<SELECT name="flight"  style="width:200px">
		<option value="">select flight</option>
		<option value="AirIndia">AirIndia</option>
		<option value="SpiceJet">SpiceJet</option>
		<option value="Emirates">Emirates</option>
		<option value="Indigo">Indigo</option>
	</SELECT>
	<span><?php if(isset($err)){echo $err['flight'];} ?></span>
	<br>
	<label for ="ftime">ftime</label>
	<SELECT name="ftime" style="width:200px">
		<option value="">select Time</option>
		<option value="9:00AM">9:00AM</option>
		<option value="1PM">1PM</option>
		<option value="6PM">6PM</option>
		<option value="2AM">2AM</option>
	</SELECT>
	<span><?php if(isset($err)){echo $err['time'];} ?></span>
	<br>
	<label for="date">Boarding date </label>
	<input type="date" name="in">
	<span><?php if(isset($err)){echo $err['date'];} ?></span>
	<br>
	<input type="submit" name="btn">

</form>
<div class="media">
<h1 style="color:white; margin-bottom:100px;"> AmericanAirlines
Qantas
<i class="fa fa-plane">america</i>
<i class="fa fa-plane">Emirates</i>
jetBlue</h1><br>
</div>
</div>

<a href="Flight.html"><button class="btn"><i class="fa fa-tags" ><align="center">  Best Price<br> Find out Airline Tickets<br> at the best<br> price. </i></button></a>
<a href="Flight.html"><button class="btn"> <i class="fa fa-user-circle"> <align="center"> Easy Booking<br> Compare all the top<br> travel booking <br>website. </i> </button></a>
 <a href="Flight.html"><button class="btn"><i class="fa fa-usd"><align="center">   Huge Savings<br> Booking travel with no <br>booking fees and hidden <br> cost.  </i></button></a>
<a href="Flight.html"><button class="btn"><i class="fa fa-handshake-o"><align="center"> Exclusive Deals <br> Plan your travels from <br> exclusive travel <br> websites. </i></button> </a>

<h1 align="center" style="color:blue;"> WHY USE OUR SERVICE? <br></h1>
<p><span class="dot"></span>We work with many partner companies so you can have a huge choice of destinations, promotions and discounts.<br>
<span class="dot"></span>We find the best flight deals and you choose the one you prefer.Just simply search and compare the best flights.<br>
<span class="dot"></span>We don’t charge any commissions or extra fees from our customers. We help thousands of people save money on their flight every month.<br>
<span class="dot"></span>We believe that there are a huge best and beautiful cities destinations in the world. Use the search box above to find and book your cheap flight.<br> </p>

<div class="myy">
<h2  style="color:white; margin-left:150px; background-color:black;"> ABOUT US </h2>
<h3 style="margin-left:50px; background-color:black;"><br><span class="do"></span> Travel is the right place to find hotels and fights at the best price.</h3>
<div class="photo">
<a href="https://www.facebook.com/"  class= "fa fa-facebook">  </a>
<a href="https://www.youtube.com/" class= "fa fa-youtube">  </a>
<a href="https://www.instagram.com/accounts/login/?hl=en"  class= "fa fa-instagram">  </a>
<a href="https://twitter.com/login?lang=en"  class= "fa fa-twitter"> </a> </div> <h3 style="margin-left:50px;background-color:black;"><span class="do"> </span> We will help you book tickets for worldwide destinations.</h3>
<div class="eye"> <a href ="privacypolicy.html"><h4  style="color:white; margin-left:1100px;background-color:black;">  Privacypolicy </h4> </a>  </div><h3 style="margin-left:50px;background-color:black;"><span class ="do"> </span> We have access to a global database of hotels and flights by huge<br></h3><h3 style="margin-left:5px;background-color:black;"> travel booking agencies, which allows us to find hotels and flights in <br></h3> <h3 style="margin-left:5px; background-color:black;">real time and compare them with each other.</h3>
<br><h3 style="margin-left:50px;background-color:black;"><span class ="do"> </span>Access over 220 countries, 24 languages and 120 currencies.
</h3></div>
<br>

</div>
</body>
</html>