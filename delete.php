<?php

include 'cn.php';

$id=$_GET['ids'];

$deletequery="delete from Flight where id=$id";
$query=mysqli_query($cn,$deletequery);

if($query){

?>
<script>
	alert('deleted successfull');
	</script>
	<?php
}

?>