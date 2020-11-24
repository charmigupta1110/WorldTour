<?php
 $cat=mysqli_connect("localhost","root","","flight");
	if($cat){
		//echo "Connection Successful";
		?>
		<script> 
				alert('Connection Successful');
		</script>
		<?php
	}
