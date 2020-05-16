<!DOCTYPE html>
<html>
<title>Register</title>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/advse.css">
<body>
    <br>
    <table>
        <tr>
         <td>&nbsp; &nbsp; &nbsp; <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; color: white; border-radius:30px;">Como Individual</button></td>
         <td><button onclick="document.getElementById('id02').style.display='block'" style="width:auto; color: white; border-radius:30px;">Como Negocio o Fundacion</button></td>
         <td><button onclick="document.getElementById('id03').style.display='block'" style="width:auto; color: white; border-radius:30px;">Como Angente LEAN</button></td>
         </tr>
      </table><br><br>
    </div>
    </div><br><br>
      <center>
        <p><b> LEAN EN LAS REDES SOCIALAS </b></p>
        <img src="images/twitter-xxl.png" height="3%" width="2%">
        <img src="images/facebook-xxl.png" height="3%" width="2%">
        <img src="images/images%201.png" height="3%" width="2%">
    </center>
<br>

      <div class="footer">
        <br>
        
          Copyright © 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps" style="color:#FFC300;"><u>DiazApps</u></a>
          <br>
          <img src="images/Scrollup.PNG" style="float: right;">
      </div>
    </div>
</div>
  <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <div id="wrapper">
  <form class="modal-content" action="functions.php?action=register_individual" method="post">
    <div class="container">
      <h3> Registro Individual </h3>
      <hr>
      <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp;<b>Correo</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp;<input type="email" name="email" placeholder="Correo" size="40"><br><br>
            <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="email" name="email" placeholder="Correo" size="40" required><br><br> -->
            </div>
            <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <b>Contrasena</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="password" placeholder="Contrasena" size="40"><br><br>
            <!-- <input type="text" name="password" placeholder="Contrasena" size="40" required><br><br> -->
      </div><br>
      <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp;<b>Nombre</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="firstname" placeholder="Nombre" size="40"><br>
            <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="firstname" placeholder="Nombre" size="40" required><br> -->
            <br>
            </div>
            <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <b>Apellido</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="lastname" placeholder="Apellido" size="40"><br><br>
            <!-- <input type="text" name="lastname" placeholder="Apellido" size="40" required><br><br> -->
      </div><br>

      &nbsp; &nbsp; &nbsp; &nbsp;<b>Direccion </b><br>
      &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Direccion" name="addr" size="103"><br>
      <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Direccion" name="addr" size="103" required><br> -->

      <br>

      &nbsp; &nbsp; &nbsp; &nbsp;<b>Ciudad</b><br>
      &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Ciudad" name="city" size="103"><br><br>
      <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Ciudad" name="city" size="103" required><br><br> -->


      <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp;<b>Estado</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp;<select name= "state" style="width: 400px">
            <!-- &nbsp; &nbsp; &nbsp; &nbsp;<select name= "state" style="width: 400px" required> -->
           <option value="" hidden> Escoger...</option>
           <option value="Texas">Texas</option>
           <option value="California">California</option>
           <option value="Florida">Florida</option>
           <option value="Washington">Washington</option>
           <option value="Arizona">Arizona</option>
           </select>
           <br><br>
            </div>
            <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <b>Codigo Postal</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="postaladdr" size="20"><br><br>
            <!-- <input type="text" name="postaladdr" size="20" required><br><br> -->
          </div><br>
      &nbsp; &nbsp; &nbsp; &nbsp;<button style="padding-right: 25px; padding-left: 25px; border-radius:30px;" type="submit">Registrarse</button></center><br><br>
            <hr>
      <p align="right">
      <button style="padding-right: 25px; padding-left: 25px; border-radius:30px; background-color: #777777;">Cerrar </button></p><br><br>
  </form>
</div>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
<div id="wrapper">
  <form class="modal-content" action="functions.php?action=register_business" method="post">
    <div class="container">
      <h3>Registro Negocio o Foundacion </h3>
      <hr>
      <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp;<b>Correo</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp;<input type="email" name="email" placeholder="Correo" size="40"><br><br>
            <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="email" name="email" placeholder="Correo" size="40" required><br><br> -->
            </div>
            <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <b>Contrasena</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="password" placeholder="Contrasena" size="40"><br><br>
            <!-- <input type="text" name="password" placeholder="Contrasena" size="40" required><br><br> -->
      </div><br>
      <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp;<b>Nombre</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="firstname" placeholder="Nombre" size="40"><br>
            <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="firstname" placeholder="Nombre" size="40" required><br> -->
            <br>
            </div>
            <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <b>Apellido</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="lastname" placeholder="Apellido" size="40"><br><br>
            <!-- <input type="text" name="lastname" placeholder="Apellido" size="40" required><br><br> -->
      </div><br>

      &nbsp; &nbsp; &nbsp; &nbsp;<b>Direccion </b><br>
      &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Direccion" name="addr" size="103"><br><br>
      <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Direccion" name="addr" size="103" required><br><br> -->

      &nbsp; &nbsp; &nbsp; &nbsp;<b>Ciudad</b><br>
      &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Ciudad" name="city" size="103"><br><br>
      <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Ciudad" name="city" size="103" required><br><br> -->

      <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp;<b>Estado</b><br>
            <!-- &nbsp; &nbsp; &nbsp; &nbsp;<select style="width: 400px" required> -->
           &nbsp; &nbsp; &nbsp; &nbsp;<select style="width: 400px">
           <option value="" hidden>  Escoger...</option>
           <option value="Texas">Texas</option>
           <option value="Texas">Texas</option>
           <option value="California">California</option>
           <option value="Florida">Florida</option>
           <option value="Washington">Washington</option>
           <option value="Arizona">Arizona</option>
           </select>
           <br><br>
            </div>
            <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <b>Codigo Postal</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <!-- <input type="text" name="postaladdr" size="20" required><br><br> -->
            <input type="text" name="postaladdr" size="20"><br><br>
      </div><br>
      &nbsp; &nbsp; &nbsp; &nbsp;
            <div class="side">
            <input type="radio" name="type" value="bt1"> Tipo de negocio 1 <br></div>
            <!-- <input type="radio" name="type" value="bt1" required> Tipo de negocio 1 <br></div> -->
            <div class="side">
            <input type="radio" name="type" value="bt2"> Tipo de negocio 2 <br></div>
            <!-- <input type="radio" name="type" value="bt2" required> Tipo de negocio 2 <br></div> -->
            <div class="side">
            <input type="radio" name="type" value="bt3"> Tipo de negocio 3 <br></div><br><br>
            <!-- <input type="radio" name="type" value="bt3" required> Tipo de negocio 3 <br></div><br><br> -->
      &nbsp; &nbsp; &nbsp; &nbsp;<button style="padding-right: 25px; padding-left: 25px; border-radius:30px;">Registrarse
            </button><br><br>
            <hr>
      <p align="right">
      <button style="padding-right: 25px; padding-left: 25px; border-radius:30px; background-color: #777777;">Cerrar </button></p><br><br>
  </form>
</div>
    </div>
  </form>
</div>
<div id="id03" class="modal">
  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
<div id="wrapper">
  <form class="modal-content" action="functions.php?action=register_agent" method="post">
    <div class="container">
      <h3>Registro de Agente LEAN</h3>
      <hr>
      <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp;<b>Correo</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp;<input type="email" name="email" placeholder="Correo" size="40"><br><br>
            <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="email" name="email" placeholder="Correo" size="40" required><br><br> -->
            </div>
            <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <b>Contrasena</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="password" placeholder="Contrasena" size="40"><br><br>
            <!-- <input type="text" name="password" placeholder="Contrasena" size="40" required><br><br> -->
      </div><br>
      <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp;<b>Nombre</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="firstname" placeholder="Nombre" size="40"><br>
            <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="firstname" placeholder="Nombre" size="40" required><br> -->
            <br>
            </div>
            <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <b>Apellido</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="lastname" placeholder="Apellido" size="40"><br><br>
            <!-- <input type="text" name="lastname" placeholder="Apellido" size="40" required><br><br> -->
      </div><br>

      &nbsp; &nbsp; &nbsp; &nbsp;<b>Direccion </b><br>
      &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Direccion" name="addr" size="103"><br>
      <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Direccion" name="addr" size="103" required><br> -->
      <br>

      &nbsp; &nbsp; &nbsp; &nbsp;<b>Ciudad</b><br>
      <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Ciudad" name="city" size="103" required><br><br> -->
      &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" placeholder="Ciudad" name="city" size="103"><br><br>

      <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp;<b>Estado</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp;<select style="width: 400px">
            <!-- &nbsp; &nbsp; &nbsp; &nbsp;<select style="width: 400px" required> -->
           <option value="" hidden> Escoger...</option>
           <option value="Texas">Texas</option>
           <option value="California">California</option>
           <option value="Florida">Florida</option>
           <option value="Washington">Washington</option>
           <option value="Arizona">Arizona</option>
           </select>
           <br><br>
            </div>
            <div class="side">
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <b>Codigo Postal</b><br>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="text" name="postaladdr" size="20"><br><br>
            <!-- <input type="text" name="postaladdr" size="20" required><br><br> -->
      </div><br>
      &nbsp; &nbsp; &nbsp; &nbsp;<button style="padding-right: 25px; padding-left: 25px; border-radius:30px;">Registrarse
            </button></center><br><br>
            <hr>
      <p align="right">
      <button style="padding-right: 25px; padding-left: 25px; border-radius:30px; background-color: #777777;" >Cerrar </button></p><br><br>
  </form>
</div>
    </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Get the modal
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal.style.display = "none";
  }
}
// Get the modal
var modal3 = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal.style.display = "none";
  }
}

</script>

</body>
</html>
