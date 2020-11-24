
<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title> Flight Booking Table 
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
							<th> destination </th>
							<th> f_from </th>
							<th> class </th>
							<th> travellers </th>
							<th> flight_name </th>
							<th> flight_time </th>
							<th> Operation</th>
							<th> Payment </th>
						</tr>
							<?php
									include 'cn.php';

									$selectquery="select * from Flight";

									$query=mysqli_query($cn,$selectquery);

									$nums=mysqli_num_rows($query);

									while($res=mysqli_fetch_array($query))
									{
										?>
										<tr>
											<td><?php echo$res['id'];?> </td>
											<td><?php echo$res['destination'];?> </td>
											<td><?php echo$res['f_from'];?> </td>
											<td><?php echo$res['class'];?> </td>
											<td><?php echo$res['travellers'];?> </td>
											<td><?php echo$res['flight_name'];?> </td>
											<td><?php echo$res['flight_time'];?> </td>
											<td><a href="delete.php?ids=<?php echo $res['id']; ?>"><i class="fa fa-trash"> </i> </a> </td>
											<td><a href="pay.php"> <i class="fa fa-credit-card-alt"></i></a>  </td>
										</tr>
										<?php
									}
										?>
				</table>
</body>
</html>