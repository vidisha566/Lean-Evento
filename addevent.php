<html>
<head>
  <title>Add event</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/leanevent.css">
</head>
<body>
  <div id="wrapper">
    
      <div class="row" style="overflow:auto">
        <img src="images/logo-blanco.png" height="50" width="50"><b>LEANEVENTO</b>
        <div align="right">
            <a href="agentHome.php"><strong>Inicio</strong></a> &nbsp; 
              <a href="ListIndividual.php"><strong>Lista de Voluntaris</strong></a> &nbsp;
              <a href="Listbusiness.php"><strong>Lista de Fundaciones</strong></a> &nbsp;
              <a href="LOEBusiness.php"><strong>Eventos</strong></a> &nbsp;
              <a href="profileagent.php"><strong>Agente</strong></a> &nbsp;
             </div>
      </div><br>
			<div class="container">
					<img src="images/bannerregistro.jpg" height="40%" width="100%">
			</div><br><br>
			<form action="functions.php?action=register_event" method="post">
				<br><br>
   			 		<legend>&nbsp;&nbsp;Registro de evento</legend><br>
   			 		<div class="side">
   			 		&nbsp; &nbsp;Nombres<br>
   			 		&nbsp; &nbsp;<input type="text" name="name" placeholder="Nombre del Evento" size="50"><br><br>
            <!-- <input type="text" name="name" placeholder="Nombre del Evento" size="50" required> -->
   			 		&nbsp; &nbsp;Responsable<br>
   			 		&nbsp; &nbsp;<input type="text" name="details" placeholder="Nombre del Responsable" size="50"><br><br>
            <!-- <input type="text" name="details" placeholder="Nombre del Responsable" size="50" required> -->
   			 		</div><br>
    				&nbsp;&nbsp; Lugar<br>
    				&nbsp;&nbsp;<input type="text" name="direction" placeholder="Direccion del Lugar del Eventos" size="50"><br><br>
            <!-- <input type="text" name="direction" placeholder="Direccion del Lugar del Eventos" size="50" required> -->
    				<div class="side">
    				&nbsp;&nbsp; Fecha<br>
    				&nbsp;&nbsp;<input type="text" name="date" placeholder="00/00/0000" size="30"><br><br>
            <!-- <input type="text" name="date" placeholder="00/00/0000" size="30" required> -->
    				</div>
    				<div class="side">
    				&nbsp;&nbsp; Hora<br>
    				&nbsp;&nbsp;<input type="text" name="time" placeholder="00:00" size="30"><br><br>
            <!-- <input type="text" name="time" placeholder="00:00" size="30" required> -->
    				</div>
    				<div class="side">
    				&nbsp;&nbsp; Valor de Boleto<br>
    				&nbsp;&nbsp;<input type="text" name="price" placeholder="$000.00" size="30"><br><br>
            <!-- <input type="text" name="price" placeholder="$000.00" size="30" required> -->
    				</div><br><br>
    				<center>
    				<button style="border-radius: 30px;"> Guardar </button></center><br><br>
			</form>
			<div class="footer">
        <br>
        
          Copyright © 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps" style="color:#FFC300;"><u>DiazApps</u></a>
          <br>
          <img src="images/Scrollup.PNG" style="float: right;">
      </div>
    </div>


</div></body></html>

			

