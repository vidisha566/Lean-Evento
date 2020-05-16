<html>
<head>
	<title> Delete records </title>
</head>
<body>
	<table border=1>
		<tr>
			<th>eventid</th>
			<th>r_id</th>
			<th>firstname</th>
			<th>lastname</th>
			<th>email</th>
			<th>password</th>
			<th>DELETE</th>
		</tr>
		<?php
			$con = mysqli_connect('localhost','root','');
			mysqli_select_db($con,'leanevento_db');

			$sql = "SELECT * FROM lean_event";

			$records = mysqli_query($con,$sql);

			while($row = mysqli_fetch_array($records))
			{
				echo "<tr>";
				echo"<td>".$row['eventid']."</td>";
				echo"<td>".$row['r_id']."</td>";
				echo"<td>".$row['firstname']."</td>";
				echo"<td>".$row['lastname']."</td>";
				echo"<td>".$row['email']."</td>";
				echo"<td>".$row['password']."</td>";
				echo"<td><a href=delete.php?id=".$row['eventid'].">Delete</a></td>";
			}
		?>
	</table>
</head>
</html>
