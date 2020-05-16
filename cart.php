<html>
<head>
  <title>Cart</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/leanevent.css">
</head>
<body>
<div id="wrapper">    
      <div class="row" style="overflow:auto"><br><br>
        <nav>
        &nbsp; &nbsp; &nbsp; <img src="images/logo-blanco.png" height="50" width="50"><b>LEANEVENTO</b>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="Home.php"><strong>Inicio</strong></a> &nbsp; 
              <a href="AboutUs.php"><strong>Quienes somos</strong></a> &nbsp;
              <a href="http://vidishashetty.uta.cloud/"><strong>Blog</strong></a> &nbsp;
              <a href="Signup.php"><strong>Registrate</strong></a> &nbsp;
              <a href="Contactus.php"><strong>Contacto</strong></a> &nbsp;
              <a href="login.php"><strong>Iniciar Sesión</strong></a> &nbsp;
              <a href="Buyfromus.php"><strong>Comprar Boletos</strong></a>
          </div>
        </nav>
    <br><br>
      <div class="container">
    <img src="images/bannercboleto.jpg" height="30%" width="100%">
    <div class="text-">
    <center>COMPRAR BOLETOS<br>
            <a href="Home.php">INICIO</a> &nbsp;
            <a href="Buyfromus.php">COMPRAR BOLETOS</a> &nbsp;
    </center>
    </div>
    <br><br><br><br><br>
      <div class="box"  style="width: 800px; height: 600px; padding: 50px;margin-left: 20%;"><br><br>
        <form method="post" action="functions.php?action=Order">
        <table>
          <tr>
            <th colspan = 2 align = "left"> Contact Information</th>
          </tr>
          <tr>
          <!-- <td>     
           
             <img src="images/franela2.jpg" alt="Denim Jeans" style="width:100%"> 
             <p></p>  
            <p style="font-size: 22px; color: grey;">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
            <p><button class="button">ADD TO CART</button></p> 
          </td> -->
          <td colspan = "2">      
            <input type="text" name="email" placeholder="Enter Email" size="80" style="margin-bottom: 10px;">
            <br>
          </td>
          </tr>
           <tr> 
            <th colspan = "2" align = "left">Shipping Address</th>
          </tr>
          <tr>
            <td>      
              <input type="text" name="firstname" placeholder="Enter First Name" size="30" style="margin-bottom: 10px;">
              <br>
            </td>
            <td>
              <input type="text" name="lastname" placeholder="Enter your last name" size="30" style="margin-bottom: 10px;">
              <br>
            </td>
          </tr>
          <tr>
            <td colspan = "2">  
            <input type="text" name="address" placeholder="Enter Address" size="30" style="margin-bottom: 10px;">
              <br>
            </td>
          </tr>
          <tr>
              <td colspan = "2">  
              <input type="text" name="apt" placeholder="Enter Apartment, suite,etc." size="30" style="margin-bottom: 10px;">
                <br>
              </td>
            </tr>
            <tr>
                <td colspan = "2" width="20px">  
                <input type="text" name="city" placeholder="Enter City" size="30" style="margin-bottom: 10px;">
                  <br>
                </td>
              </tr>
              <tr>
                  <td>      
                    <input type="text" name="state" placeholder="Enter state" size="30" style="margin-bottom: 10px;">
                    <br>
                  </td>
                  <td>
                    <input type="text" name="postal" placeholder="Enter Postal Code" size="30" style="margin-bottom: 10px;">
                    <br>
                  </td>
                </tr>
        </table>
            <button type="submit" class="button"  value ="SEND" style="margin-left: 25%;"> CONFIRM </button>     
      <!-- </form>   -->
    </form>
    </div>
			<div class="footer">
        <br>
        
          Copyright © 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps" style="color:#FFC300;"><u>DiazApps</u></a>
          <br>
          <img src="images/Scrollup.PNG" style="float: right;">
      </div>
    </div>


</div></body></html>

			

