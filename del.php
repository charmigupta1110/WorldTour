<?php

include 'cat.php';
//include 'payment.php';
$id=$_GET['id'];

$deletequery="delete from going where id=$id";
//$deletequery="delete from car where id=$id";
$query=mysqli_query($cat,$deletequery);

if($query){

?>
<script>
	alert('deleted successfull');
	</script>
	<?php
}

?>