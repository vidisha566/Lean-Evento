<html>
<head>
	<title>Home Page</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/advse.css">
	<script type="text/javascript">function formValidate(){
    
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    
    emailError = "";
    msgError = "";
    

    /* Check if email is empty or invalid */
    if (email == "" || email == null){
                if(nameError == ""){
                    emailError = "- e-mail cannot be empty!";
                    msgError = emailError;
                }else{
                    emailError = "- e-mail cannot be empty!";
                    msgError = msgError + "\n" + emailError;
                }//endif inner
    }else{
            /* check for email validation with regular expresssion */
            if (/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(email)){
                var np = "";
            }else{
                if(nameError == "" || nameError == null){
                    emailError = "- Invalid e-mail!";
                    msgError = emailError;
                }else{
                    emailError = "- Invalid e-mail!";
                    msgError = msgError + "\n" + emailError;
                }//endif inner
            }
    }//endif outer
    if (password == "" || password == null){
                if(nameError == ""){
                    passwordError = "- password cannot be empty!";
                    msgError = passwordError;
                }else{
                    passwordError = "- password cannot be empty!";
                    msgError = msgError + "\n" + passwordError;
                }//endif inner
    }    

    if(msgError != ""){
        alert(msgError);
    }
    else{
      return false;

    }
    }</script>
</head>
<body>
<div id="wrapper">		
			<div class="row" style="overflow:auto"><br><br>
				<nav>
							<div align="center">
						  <a href="Home.php"><strong>Inicio</strong></a> &nbsp; 
					   	<a href="AboutUs.php"><strong>Quienes somos</strong></a> &nbsp;
					   </div>
					</div>
		<br>
	</nav>
		<br><br>
			<div class="container">
		<img src="images/bannerlogin.jpg" height="30%" width="100%"/>
		<div class="text-l">
		<center>INICIAR SESION<br>
						<a href="Home.php">Home</a> &nbsp;
						<a href="login.php">INICIAR SESION</a> &nbsp;
		</center>
		</div><br><br><br><br><br>
			<div class="content" style="left: 10%; font-size: 15">
			<!-- <form method="post" onsubmit="return(formValidate())" >	 -->
			<form method="post" action="functions.php?action=login">
				<br><br>
   			 		<legend>&nbsp; &nbsp; &nbsp; &nbsp;<b>Inciar Sesion</b></legend><br>
   			 		<div class="side">
   			 		&nbsp; &nbsp; &nbsp; &nbsp;Nombre de Usuario<br>
   			 		&nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="email" placeholder="Nombre de Usuario Correo" size="40"><br><br>
            <!-- &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="email" placeholder="Nombre de Usuario Correo" size="40" required><br><br> -->
   			 		</div>
   			 		<div class="side">
   			 		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Contrasena<br>
   			 		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="password" placeholder="Contrasena" size="40"><br><br>
            <!-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="password" placeholder="Contrasena" size="40" required><br><br> -->
   			 		</div><br><br>
   			 		<center><a href="Forgetpassword.php" style="color:#FFC300; font-size: 15;">Olvido su Contrasena?</a></center><br><br>
   			 		<center><button type="submit" style="padding-right: 25px; padding-left: 25px; border-radius:30px;">Entra</button></center><br><br>
   			 	</form>

		</body></html>