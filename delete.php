<?php
			$con = mysqli_connect('localhost','root','');
			mysqli_select_db($con,'leanevento_db');

			$sql = "DELETE FROM lean_event WHERE ID ='$_GET[ID]'";

			if (mysqli_query($con,$sql))
				header("refresh:1; url=LOEBusiness.php");
			else
				echo "Not Deleted";
?>