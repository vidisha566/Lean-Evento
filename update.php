<?php
			$con = mysqli_connect('localhost','root','');
			mysqli_select_db($con,'leanevento_db');

			$sql = "UPDATE lean_event SET `DETALLES DEL EVENTOS`='$_POST[details]',`LUGAR`='$_POST[place]',`FECHA`='$_POST[date]' WHERE ID='$_POST[ID]'";

			if (mysqli_query($con,$sql))
				header("refresh:1; url=LOEBusiness.php");
			else
				echo "Not Updated";
?>