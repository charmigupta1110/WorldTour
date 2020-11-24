<?php
 $payment=mysqli_connect("localhost","root","","pay");
	if($payment){
		//echo "Connection Successful";
		?>
		<script> 
				alert('Connection Successful');
		</script>
		<?php
	}
