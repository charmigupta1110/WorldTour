<?php 
	$cn=mysqli_connect("localhost","root","","pr");
	if($cn){
		//echo "Connection Successful";
		?>
		<script> 
				alert('Connection Successful');
		</script>
		<?php
	}
	?>