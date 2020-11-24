
<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title> Flight Payment
	</title>
	<style>
		table, th, td {
  						border: 1px solid black;
  						border-collapse: collapse;
					}

		table.center {
 						 margin-left: auto; 
  						margin-right: auto;
					}
}
	</style>
</head>
<body >
	
		<h1 align="center"> Flight Booking Table </h1>
				<table class="center">
						<tr>
							<th> id </th>
							<th> card </th>
							<th> date </th>
							<th> name </th>
						</tr>
							<?php
									include 'payment.php';

									$selectquery="select * from car";

									$query=mysqli_query($payment,$selectquery);

									$nums=mysqli_num_rows($query);

									while($result=mysqli_fetch_array($query))
									{
							?>		
										<tr>
											<td><?php echo$result['id'];?> </td>
											<td><?php echo$result['card'];?> </td>
											<td><?php echo$result['date'];?> </td>
											
											<td><?php echo$result['name'];?> </td>
											<!--<td><a href="delete.php?ids=<?php echo $result['id']; ?>"><i class="fa fa-trash"> </i> </a> </td>-->
										</tr>
										<?php
									}
										?>
				</table>
</body>
</html>