<html>
<head>
	<title>Inicio-Individual</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/leanevent.css">
</head>
<body>
<div id="wrapper">		
			<div class="row" style="overflow:auto"><br><br>
				<nav>
				&nbsp; &nbsp; &nbsp; <img src="images/logo-blanco.png" height="50" width="50"/><b>LEANEVENTO</b>
				<div align="right">
						<a href="HomeIndividual.php"><strong>Inicio</strong></a> &nbsp; 
					   	<a href="profileindividual.php"><strong>Individual</strong></a> &nbsp;
						</div>
					</div>
				</nav>
		<br><br>
			<center><br><br><br>
				<b> Lista de Eventos </b>
			</center>
			<table>
				<tr bgcolor="lightgrey" align="center">
					<td>DETALLES DEL EVENTOS</td>
					<td>LUGAR</td>
					<td>FECHA</td>
					<td>HORA</td>
					<td>ASISTENCIA</td>
				</tr>
				<tr>
					<td><img src="images/minibaner1.jpg" height="12%" width="10%">Nombre del Evento y sus detalles</td>
					<td>Dirrecion del lugar</td>&nbsp;
					<td>14/01/2019</td>
					<td>8AM</td>
					<td><button onclick="document.getElementById('id').style.display='none'" type="button" style="border-radius: 30px;"> Confirmar </button>&nbsp; &nbsp; </td>
				</tr>
				<tr>
					<td><img src="images/minibaner2.jpg" height="12%" width="10%">Nombre del Evento y sus detalles</td>
					<td>Dirrecion del lugar</td>&nbsp;
					<td>14/01/2019</td>
					<td>8AM</td>
					<td><button type="button" style="border-radius: 30px;"> Confirmar </button>&nbsp; &nbsp; </td>
				</tr>
				<tr>
					<td><img src="images/minibaner3.jpg" height="12%" width="10%">Nombre del Evento y sus detalles</td>
					<td>Dirrecion del lugar</td>&nbsp;
					<td>14/01/2019</td>
					<td>8AM</td>
					<td><button type="button" style="border-radius: 30px;"> Confirmar </button>&nbsp; &nbsp; </td>
				</tr>
			</table><br><br><br><br><br>
			<div class="footer">
				<br>
				
					Copyright © 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps" style="color:#FFC300;"><u>DiazApps</u></a>
					<br>
					<img src="images/Scrollup.PNG" style="float: right;">
			</div>
		</div>
</div>
<div id="wrapper">
<div id="id" class="modal">
  				<span onclick="document.getElementById('id').style.display='none'" class="close" title="Close Modal">&times;</span>
  				<center>Bienvenido</center>
  				<hr>
  				Gracias por ser parte en nuestros evento
  				<hr>
  				<p align="right">
      			<button style="padding-right: 25px; padding-left: 25px; border-radius:30px; background-color: #777777;">Close </button></p><br><br>

<script>
// Get the modal
var modal = document.getElementById('id');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



</body></html>