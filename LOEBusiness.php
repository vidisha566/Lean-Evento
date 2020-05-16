<html>
<head>
	<title>List of events</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/leanevent.css">
</head>
<body>
	<div id="wrapper">
		
			<div class="row" style="overflow:auto"><br>
				<nav>
				<img src="images/logo-blanco.png" height="60" width="60"><b>LEANEVENTO</b>
					 <div align="right">
					 	<a href="agentHome.php"><strong>Inicio</strong></a> &nbsp; 
					   	<a href="ListIndividual.php"><strong>Lista de Voluntaris</strong></a> &nbsp;
					   	<a href="Listbusiness.php"><strong>Lista de Fundaciones</strong></a> &nbsp;
					   	<a href="LOEBusiness.php"><strong>Eventos</strong></a> &nbsp;
					   	<a href="profileagent.php"><strong>Agente</strong></a> &nbsp;		
					   </div>
			</div>
		</nav>
			<center><br><br><br>
				<b> Lista de Eventos </b>
			</center>
			<div align="right"><a href="addevent.php" style="color: white;"><button type="button" style="background-color: green; width: 10%; border-radius: 30px;"> Agregar </button></a></div>
			<table>
				<tr bgcolor="lightgrey" align="center">
					<td>DETALLES DEL EVENTOS</td>
					<td>LUGAR</td>
					<td>FECHA</td>
					<td>MODIFICAR</td>
					<td>ELIMINAR</td>
				</tr>
			<?php
				$con = mysqli_connect('localhost','root','');
				mysqli_select_db($con,'leanevento_db');

				$sql = "SELECT * FROM lean_event";

				$records = mysqli_query($con,$sql);

				while($row = mysqli_fetch_array($records))
				{
				echo "<tr>";
				echo"<td>".$row['DETALLES DEL EVENTOS']."</td>";
				echo"<td>".$row['LUGAR']."</td>";
				echo"<td>".$row['FECHA']."</td>";
				echo"<td><a href=edit.php?ID=".$row['ID'].">EDIT </a></td>";
			    echo"<td><a href=delete.php?ID=".$row['ID'].">DELETE</a></td>";
				}
			?>
				<!-- <tr>
					<td><img src="images/minibaner1.jpg" height="12%" width="10%">Nombre del Evento y sus detalles</td>
					<td>Direccion del lugar</td>&nbsp;
					<td>14/01/2019</td>
					<td align="center"><button type="button" style="height: 30px; width: 50px; border-radius: 30px;"> </button></td>
					<td align="center"><button type="button" style="height: 30px; width: 50px; background-color: maroon; border-radius: 30px;"> </button></td>
				</tr> 
				<tr>
					<td><img src="images/minibaner2.jpg" height="12%" width="10%">Nombre del Evento y sus detalles</td>
					<td>Dirrecion del lugar</td>&nbsp;
					<td>14/01/2019</td>
					<td align="center"><button type="button" style="height: 30px; width: 50px; border-radius: 30px;"> </button></td>
					<td align="center"><button type="button" style="height: 30px; width: 50px; background-color: maroon; border-radius: 30px;"> </button></td>
				</tr>
				<tr>
					<td><img src="images/minibaner3.jpg" height="12%" width="10%">Nombre del Evento y sus detalles</td>
					<td>Dirrecion del lugar</td>&nbsp;
					<td>14/01/2019</td>
					<td align="center"><button type="button" style="height: 30px; width: 50px; border-radius: 30px;"> </button></td>
					<td align="center"><button type="button" style="height: 30px; width: 50px; background-color: maroon; border-radius: 30px;"> </button></td>
				</tr> -->
			</table><br><br><br><br><br>
			<div class="footer">
				<br>
				
					Copyright © 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps" style="color:#FFC300;"><u>DiazApps</u></a>
					<br>
					<img src="images/Scrollup.PNG" style="float: right;">
			</div>
		</div>


</div></body></html>