<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		*{margin: 0; padding: 0; box-sizing: border-box; font-family:Times New Roman;text-align: center;}
		.main-div{
			width: 1900px; height: 100vh;
			background-color: orange;
			padding: 20px;
			border-radius: 20%;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
		.centerdiv{
			width: 1800px;
			height: 80vh;
			backgroung: -webkit-linear-gradient(left,#5DADE2 ,#00c6ff) ;
			padding: 20px , 0, 0, 0;
			box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
			border-radius: 10px;
		}
		h1{
			font-size: 18px;
			color: #000;
			text-align: center;
			margin-top: -20px;
			margin-bottom: 20px;
		}
		table{
			border-collapse: collapse;
			background-color: #fff;
			box-shadow: 0 10px 20px 0 rgba(0,0,0,0.03)
			border-radius: 30px;
			margin: 40px;
		}
		
		td,th{
			border: 1px solid #f2f2f2;
			padding: 8px 30px;
			text-align: center;
			color: grey;
		}
		th{
			text-transform: uppercase;
			font-weight: 500;
		}
		td{font-size: 13px;}
		.tableresponsive{
			margin: 40px;
			height: auto;
			background-color: white;
			border-radius: 20%;
			padding: 20px;
			text-align: center;
		}
		img{
			margin: 5px;
		}
	</style>
</head>
<body>

<div class="main-div">

	<h1> List Of Booking </h1>
	<div class="centerdiv">

		<div class= "tableresponsive" >
			<table>
				<thead>
					<tr>
						<th>Booking ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone no</th>
						<th>Pickup Location</th>
						<th>Drop Location</th>
						<th>Arrival Date</th>
						<th>Departure date</th>
						<th>Arrival Time</th>
						<th>Departure Time</th>
						<th>Operation</th>						
					</tr>
				</thead>

				<tbody>
					<?php

						$username = "root";
						$password = "";
						$server ='localhost';
						$db = 'shivatoursandtravels';

						$con = mysqli_connect($server,$username,$password,$db);

						$selectquery = " select * from booking ";

						$query = mysqli_query($con,$selectquery);

						$nums = mysqli_num_rows($query);

						 

						while ($res = mysqli_fetch_array($query)) {
					?>

							<tr>
							<td><?php echo $res['costumer_number'] ?></td>
							<td><?php echo $res['name'] ?></td>
							<td><?php echo $res['email'] ?></td>
							<td><?php echo $res['pn'] ?></td>
							<td><?php echo $res['pl'] ?></td>
							<td><?php echo $res['dl'] ?></td>
							<td><?php echo $res['ad'] ?></td>
							<td><?php echo $res['dd'] ?></td>
							<td><?php echo $res['at'] ?></td>
							<td><?php echo $res['dt'] ?></td>
							<td>
<a href="update.php" data-toggle="tooltip" data-placement="top" title="Update"><img src="edit.png" width="15px" height="15px"></a>
								<img src="trash.jpg" width="15px" height="15px">
							</td>
							</tr>
								
						<?php
					    }
					    ?>

						
					
				</tbody>
			</table>
		</div>
		
	</div>
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>