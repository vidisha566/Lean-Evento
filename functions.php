<?php
    include 'config.php';
    session_start();
    define("individual", 1);
    define("event", 2);
    define("business", 3);
    define("agent", 4);
    define("defaultPass","1234567");



                
        if(isset($_REQUEST['action'])){
            if(($_REQUEST['action'])=='Contact'){ 
                 
                $_POST["firstname"];
                $_POST["lastname"];
                $_POST["email"];
                $_POST["topic"];
                $_POST["message"];
                
                $fname=$_POST["firstname"];
                $lname=$_POST["lastname"];
                $email=$_POST["email"];
                $topic=$_POST["topic"];
                $message=$_POST["message"];
                $code = 0;

                if($fname==""|| $fname ==null){
                    echo "<p>Name can not be empty!</p>";
                }
                if($lname==""||$lname==null){
                    echo "<p>Last Name can not be empty!</p>";
                }
                if($topic==""||$topic==null){
                    echo "<p>Topic can not be empty!</p>";
                }
                if($message==""||$message==null){
                    echo "<p>Message can not be empty!</p>";
                }
                if(preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $_POST['email'])){
                    $code =1; 
                }
                if($code != 1){
                    echo "<p>Email is invalid!</p>";
                }
                else{
                $sqlquery = $GLOBALS['pdo']->prepare(
                    'INSERT INTO `lean_contactus`(`firstname`,`lastname`,`email`) 
                    VALUES (?,?,?)'
                    );
                $sqlquery->execute([$_POST["firstname"],$_POST["lastname"],$_POST["email"]]);
               
                header( 'Location: Contactus.php' );
            }   
         }
     }

     if(isset($_REQUEST['action'])){
            if(($_REQUEST['action'])=='ProfileIndividual'){ 
                 
                $_POST["name"];
                $_POST["nameoffoundation"];
                $_POST["email"];
                $_POST["telephone"];
                $_POST["user"];
                
                $fname=$_POST["name"];
                $nameoffondation=$_POST["nameoffoundation"];
                $email=$_POST["email"];
                $telephone=$_POST["telephone"];
                $user=$_POST["user"];
                $code = 0;

                if($fname==""|| $fname ==null){
                    echo "<p>Name can not be empty!</p>";
                }
                if($nameoffoundation==""||$nameoffoundation==null){
                    echo "<p>Name of foundation can not be empty!</p>";
                }
                if($user==""||$user==null){
                    echo "<p>User can not be empty!</p>";
                }
                if($telephone==""||$telephone==null){
                    echo "<p>Phone number can not be empty!</p>";
                }
                if(preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $_POST['email'])){
                    $code =1; 
                }
                if($code != 1){
                    echo "<p>Email is invalid!</p>";
                }
                //else{
                //$sqlquery = $GLOBALS['pdo']->prepare(
                //   'INSERT INTO `lean_contactus`(`firstname`,`lastname`,`email`) 
                //    VALUES (?,?,?)'
                //    );
                // $sqlquery->execute([$_POST["name"],$_POST["lastname"],$_POST["email"]]);
               
                header( 'Location: HomeIndividual.php' );
            }   
         }


    if(isset($_REQUEST['action'])){
    if(($_REQUEST['action'])=='register_individual'){ 
        $_POST["email"];
        $_POST["password"];       
        $_POST["firstname"]; 
        $_POST["lastname"];
        $_POST["addr"];
        $_POST["city"];
        $_POST["postaladdr"];

                $fname=$_POST["firstname"];
                $lname=$_POST["lastname"];
                $address=$_POST["addr"];
                $city=$_POST["city"];
                $email=$_POST["email"];
                $password=$_POST["password"];
                $postaladdr=$_POST["postaladdr"];
                $code = 0;
                if($fname==""|| $fname ==null){
                    echo "<p>First Name can not be empty!</p>";
                }
                if($lname==""||$lname==null){
                    echo "<p>Last Name can not be empty!</p>";
                }
                if($address==""||$address==null){
                    echo "<p>Address can not be empty!</p>";
                }
                if($city==""||$city==null){
                    echo "<p>City can not be empty!</p>";
                }
                if($email==""||$email==null){
                    echo "<p>Email can not be empty!</p>";
                }
                if($password==""||$password==null){
                    echo "<p>Password can not be empty!</p>";
                }
                if($postaladdr==""||$postaladdr==null){
                    echo "<p>Postal address can not be empty!</p>";
                }else{
                    $sqlquery = $GLOBALS['pdo']->prepare(
                    'INSERT INTO `lean_individual`(`role_id`, `First Name`, `Last Name`, `Email`, `Password`) 
                    VALUES (?,?,?,?,?)'
                    );
                    $sqlquery->execute([individual,$_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["password"]]);  

        // return_back();

        //      $query = $GLOBALS['pdo']->prepare(
        //     'INSERT INTO `users`(`u_id`,`f_name`,`l_name`,`email`,`r_id`) 
        //     VALUES (?,?,?,?,?)'
        //     );
        // $query->execute(["0",$_POST["firstname"],$_POST["lastname"],$_POST["email"],"1"]);

        // $id = retrieveId($_POST["email"])["u_id"];

        // // $query = $GLOBALS['pdo']->prepare(
        // //     'INSERT INTO `login_details`(`l_id`,`u_id`,`email`, `password`) 
        // //     VALUES (?,?,?)'
        // //     );
        // // $query->execute(["0",$id,$_POST["email"],$_POST["password"]]);


        

        header( 'Location: HomeIndividual.php' );
        //echo "Yes";
                    }
                }
            }


    if(isset($_REQUEST['action'])){
    if(($_REQUEST['action'])=='register_event'){        
        $_POST["name"]; 
        $_POST["details"];
        $_POST["direction"];
        $_POST["date"];
        $_POST["time"];
        $_POST["price"];

                $fname=$_POST["name"];
                $details=$_POST["details"];
                $direction=$_POST["direction"];
                $date=$_POST["date"];
                $time=$_POST["time"];
                $price=$_POST["price"];

                $code = 0;
                if($fname==""|| $fname ==null){
                    echo "<p>Name can not be empty!</p>";
                    //return_back();
                }
                if($details==""||$details==null){
                    echo "<p>Details can not be empty!</p>";
                }
                if($direction==""||$direction==null){
                    echo "<p>Place can not be empty!</p>";
                }
                if($date==""||$date==null){
                    echo "<p>Date can not be empty!</p>";
                }
                if($time==""||$time==null){
                    echo "<p>Time can not be empty!</p>";
                }
                if($price==""||$price==null){
                    echo "<p>Price can not be empty!</p>";
                }
                    else{
                $sqlquery = $GLOBALS['pdo']->prepare(
                    'INSERT INTO `lean_event`(`role_id`,`DETALLES DEL EVENTOS`,`LUGAR`,`FECHA`) 
                    VALUES (?,?,?,?)'
                    );
                $sqlquery->execute([event,$_POST["details"],$_POST["direction"],$_POST["date"]]);
               
                header( 'Location: LOEBusiness.php' );
            }   
         }
     }

    if(isset($_REQUEST['action'])){
    if(($_REQUEST['action'])=='register_agent'){ 
        $_POST["email"];
        $_POST["password"];       
        $_POST["firstname"]; 
        $_POST["lastname"];
        $_POST["addr"];
        $_POST["city"];
        $_POST["postaladdr"];

                $email=$_POST["email"];
                $password=$_POST["password"];
                $firstname=$_POST["firstname"];
                $lastname=$_POST["lastname"];
                $addr=$_POST["addr"];
                $city=$_POST["city"];
                $postaladdr=$_POST["postaladdr"];
                $code = 0;
                if($email==""|| $email ==null){
                    echo "<p>Email can not be empty!</p>";
                }
                if($password==""||$password==null){
                    echo "<p>Password can not be empty!</p>";
                }
                if($firstname==""||$firstname==null){
                    echo "<p>First name can not be empty!</p>";
                }
                if($lastname==""||$lastname==null){
                    echo "<p>Last name can not be empty!</p>";
                }
                if($addr==""||$addr==null){
                    echo "<p>Address can not be empty!</p>";
                }
                if($city==""||$city==null){
                    echo "<p>City can not be empty!</p>";
                }
                if($postaladdr==""||$postaladdr==null){
                    echo "<p>Postal address can not be empty!</p>";
                }else{
        //sql querry
            $sqlquery = $GLOBALS['pdo']->prepare(
            'INSERT INTO `lean_agent`(`role_id`, `First Name`, `Last Name`, `Email id`, `Password`) 
            VALUES (?,?,?,?,?)'
            );
        
            $sqlquery->execute([agent,$_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["password"]]);  

        // return_back();

        //      $query = $GLOBALS['pdo']->prepare(
        //     'INSERT INTO `users`(`u_id`,`f_name`,`l_name`,`email`,`r_id`) 
        //     VALUES (?,?,?,?,?)'
        //     );
        // $query->execute(["0",$_POST["firstname"],$_POST["lastname"],$_POST["email"],"1"]);

        // $id = retrieveId($_POST["email"])["u_id"];

        // // $query = $GLOBALS['pdo']->prepare(
        // //     'INSERT INTO `login_details`(`l_id`,`u_id`,`email`, `password`) 
        // //     VALUES (?,?,?)'
        // //     );
        // // $query->execute(["0",$id,$_POST["email"],$_POST["password"]]);


        

        header( 'Location: agenthome.php' );
        //echo "Yes";
                    }
                }
            }
  

        // return_back();

        // $query = $GLOBALS['pdo']->prepare(
        //     'INSERT INTO `login_details`(`r_id`,`email`, `password`) 
        //     VALUES (?,?,?)'
        //     );
        // $query->execute([event,$_POST["email"],$_POST["password"]]);
        

       

        //  $query = $GLOBALS['pdo']->prepare(
        //     'INSERT INTO `users`(`u_id`,`f_name`,`l_name`,`email`, `password`,`r_id`) 
        //     VALUES (?,?,?,?,?,?)'
        //     );
        // $query->execute(["0",$_POST["fname"],$_POST["lname"],$_POST["email"],$_POST["password"],individual]);
        //echo "Yes";


    if(isset($_REQUEST['action'])){
    if(($_REQUEST['action'])=='register_business'){        
        $_POST["email"]; 
        $_POST["password"];
        $_POST["firstname"];
        $_POST["lastname"]; 
        $_POST["addr"];
        $_POST["city"];
        $_POST["postaladdr"];

                $email=$_POST["email"];
                $password=$_POST["password"];
                $firstname=$_POST["firstname"];
                $lastname=$_POST["lastname"];
                $addr=$_POST["addr"];
                $city=$_POST["city"];
                $postaladdr=$_POST["postaladdr"];
                $code = 0;
                
                
                if($email==""|| $email ==null){
                    echo "<p>Email can not be empty!</p>";
                    //return_back();
                
                }
                if($password==""||$password==null){
                    echo "<p>Password can not be empty!</p>";
                }
                if($firstname==""||$firstname==null){
                    echo "<p>First name can not be empty!</p>";
                }
                if($lastname==""||$lastname==null){
                    echo "<p>Last name can not be empty!</p>";
                }
                if($addr==""||$addr==null){
                    echo "<p>Address can not be empty!</p>";
                }
                if($city==""||$city==null){
                    echo "<p>Password can not be empty!</p>";
                }
                if($postaladdr==""||$postaladdr==null){
                    echo "<p>Postal address can not be empty!</p>";
                }else{

        //sql querry
        $sqlquery = $GLOBALS['pdo']->prepare(
            'INSERT INTO `lean_business`(`role_id`,  `First Name`, `Last Name`, `Email`, `Password`) 
            VALUES (?,?,?,?,?)'
            );
        
        $sqlquery->execute([business,$_POST["firstname"], $_POST["lastname"],$_POST["email"],$_POST["password"]]);  

        // return_back();

        // $query = $GLOBALS['pdo']->prepare(
        //     'INSERT INTO `login_details`(`r_id`,`email`, `password`) 
        //     VALUES (?,?,?)'
        //     );
        // $query->execute([business,$_POST["email"],$_POST["password"]]);

        // $query = $GLOBALS['pdo']->prepare(
        //         'INSERT INTO `users`(`u_id`,`f_name`,`l_name`,`email`, `password`,`r_id`) 
        //         VALUES (?,?,?,?,?,?)'
        //         );
        //     $query->execute(["0",$_POST["fname"],$_POST["lname"],$_POST["email"],$_POST["password"],individual]);
            

        header( 'Location: HomeBusiness.php' );
        //echo "Yes";
                    }
                }

            } 


    // if(isset($_REQUEST['action'])){
    // if($_REQUEST['action']=='login'){
    //     $_POST["email"];
    //     $_POST["password"];

    //     $sqlquery = $GLOBALS['pdo']->prepare(
    //         'SELECT `r_id`, `email`, `password` FROM `login_details` LIMIT 1;'
    //         );


    //     $row = $sqlquery->fetch();
    //     if($_POST['password']==$row['password']){
    //         //header( 'Location: Home.php' );
    //         echo $row;
    //     }
    //     else{
    //      echo "Got nothing";
    //     }



    // }}    

    if(isset($_REQUEST['action'])){
    if($_REQUEST['action']=='login'){
        //echo "test";
        // echo "THISS: ".$isValid();
                $email=$_POST["email"];
                $password=$_POST["password"];
                $code = 0;

                if($password==""||$password==null){
                    echo "<p>Password can not be empty!</p>";
                }
                if(preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $_POST['email'])){
                    $code =1; 
                }
                if($code != 1){
                    echo "<p>Email is invalid!</p>";
                }
                else{
                $id = retrieveId($_POST["email"])["u_id"];

        
                if(validate()){
                if($id){
                $sqlquery =  $GLOBALS['pdo']->query("SELECT `users`.`u_id`,`password`, `users`.`f_name`,`users`.`l_name`,`users`.`r_id` FROM `login_details`
                JOIN `users` ON `users`.`u_id` = `login_details`.`u_id` 
                WHERE `users`.`email`='".$_POST["email"]."' LIMIT 1");
                $row = $sqlquery->fetch();
                if($_POST['password']==$row['password']){
                    unset($_SESSION['cred']);
                    $_SESSION['uid'] = $row['u_id'];
                    if($row['r_id']=='4'){
                        print_r($row);
                        $_SESSION['name'] = $row['f_name'].' '.$row['l_name'];
                        $_SESSION['b_name'] = $row['b_name'];
                        header("Location: agenthome.php");                
                    }else if($row['r_id']=='3'){
                        print_r($row);
                        $_SESSION['name'] = $row['f_name'].' '.$row['l_name'];
                        $_SESSION['b_name'] = $row['b_name'];
                        header("Location: HomeBusiness.php");
                        
                    }else if($row['r_id']=='2'){
                        print_r($row);
                        $_SESSION['name'] = $row['f_name'].' '.$row['l_name'];
                        $_SESSION['b_name'] = $row['b_name'];
                        header("Location: agentHome.php");
                    } else{
                        print_r($row);
                        $_SESSION['name'] = $row['f_name'].' '.$row['l_name'];
                        header("Location: HomeIndividual.php");
                        //echo "Welcome";

                        
                    }
                }else{
                    $_SESSION['cred']='Invalid Credentials';                
                    header("Location: login.php");
                    echo "Invalid Credentials"; 
                }
            }else{
                $_SESSION['cred']='Invalid Credentials';                        
                header("Location: login.php");
                echo "Invalid Credentials"; 
            }
        }
        else{
            header("Location: login.php");
            echo "Invalid Credentials";
        }
    }
}
    }   


    function validate(){
        $isValid = TRUE;
        if(isset($_POST['email'])){
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $_SESSION['email_error'] = "Invalid email format"; 
                $isValid = FALSE;
            }else{
                if(isset($_SESSION['email_error'])){
                    unset($_SESSION['email_error']);
                }
            }
        }
        if(isset($_POST['f_name'])){
            if(isset($_POST['f_name']) && empty($_POST['f_name'])){
                $_SESSION['f_name_error'] = "Invalid First Name"; 
                $isValid = FALSE;
            }else{
                if(isset($_SESSION['f_name_error'])){
                    unset($_SESSION['f_name_error']);
                }
            }
        }
        
        if(isset($_POST['firstname'])){
            if(isset($_POST['firstname']) && empty($_POST['firstname'])){
                $_SESSION['f_name_error'] = "Invalid First Name"; 
                $isValid = FALSE;
            }else{
                if(isset($_SESSION['f_name_error'])){
                    unset($_SESSION['f_name_error']);
                }
            }
        }

        if(isset($_POST['lastname'])){
            if(isset($_POST['lastname']) && empty($_POST['f_name'])){
                $_SESSION['f_name_error'] = "Invalid Last Name"; 
                $isValid = FALSE;
            }else{
                if(isset($_SESSION['f_name_error'])){
                    unset($_SESSION['f_name_error']);
                }
            }
        }


        if(isset($_POST['l_name'])){
            if(isset($_POST['l_name']) && empty($_POST['l_name'])){
                $_SESSION['l_name_error'] = "Invalid Last Name"; 
                $isValid = FALSE;
            }else{
                if(isset($_SESSION['l_name_error'])){
                    unset($_SESSION['l_name_error']);
                }
            }
        }
        if(isset($_POST['phone'])){
            if(preg_match("/^[0-1]{1}[-]\d{3}[-]\d{3}[-]\d{4}$/", $_POST['phone'])) {
                if(isset($_SESSION['phone_error'])){
                    unset($_SESSION['phone_error']);
                }
            }else{
                $_SESSION['phone_error'] = "Invalid Phone Name"; 
                $isValid = FALSE;
                
            }
        }
        if(isset($_POST['b_name'])){
            if(isset($_POST['s_name']) && empty($_POST['s_name'])){
                $_SESSION['service_error'] = "Invalid Service Name"; 
                $isValid = FALSE;
            }else{
                if(isset($_SESSION['service_error'])){
                    unset($_SESSION['service_error']);
                }
            }
            if(isset($_POST['b_name']) && empty($_POST['b_name'])){
                $_SESSION['b_error'] = "Invalid Business Name"; 
                $isValid = FALSE;
            }else{
                if(isset($_SESSION['b_error'])){
                    unset($_SESSION['b_error']);
                }
            }
        }
        if(isset($_POST['c_name'])) {
            if(isset($_POST['my_pet']) && empty($_POST['my_pet'])){
                $_SESSION['mypet_error'] = "Invalid Pet Name"; 
                $isValid = FALSE;
            }else{
                if(isset($_SESSION['mypet_error'])){
                    unset($_SESSION['mypet_error']);
                }
            }
        }
        return $isValid;
    }



            if(isset($_REQUEST['action'])){
            if(($_REQUEST['action'])=='Order'){ 
                 
                $_POST["firstname"];
                $_POST["email"];
                $_POST["address"];
                $_POST["state"];
                $_POST["city"];
                $_POST["apt"];
                $_POST["postal"];
                $_POST["lastname"];
                
                $fname=$_POST["firstname"];
                $lname=$_POST["lastname"];
                $email=$_POST["email"];
                $address=$_POST["address"];
                $state=$_POST["state"];
                $city=$_POST["city"];
                $apt=$_POST["apt"];
                $postal=$_POST["postal"];
                $code = 0;
                if($fname==""|| $fname ==null){
                    echo "<p>Name can not be empty!</p>";
                    //return_back();
                
                }
                if($lname==""||$lname==null){
                    echo "<p>Last Name can not be empty!</p>";
                }
                 if($email==""||$email==null){
                    echo "<p>Last Name can not be empty!</p>";
                }
                  if($address==""||$address==null){
                    echo "<p>Address can not be empty!</p>";
                }
                  if($state==""||$state==null){
                    echo "<p>State can not be empty!</p>";
                }
                  if($city==""||$city==null){
                    echo "<p>City can not be empty!</p>";
                }
                  if($apt==""||$apt==null){
                    echo "<p>Apartment Name can not be empty!</p>";
                }
                  if($postal==""||$postal==null){
                    echo "<p>Postal Code can not be empty!</p>";
                }else{

                $sqlquery = $GLOBALS['pdo']->prepare(
                    'INSERT INTO `lean_cart`(`email`,`f_name`,`l_name`,`address`,`apt`,`city`,`state`,`postal_code`,`product_id`,`product_name`,`units`,`price`) 
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)'
                    );


                $sqlquery->execute([$_POST["email"],$_POST["firstname"],$_POST["lastname"],$_POST["address"],$_POST["apt"],$_POST["city"],$_POST["state"],$_POST["postal"],"1",,"2","28.89"]);
                // return_back();
               echo "Order Recieved Sucessfully!";
                //header( 'Location: Contactus.php' );
            }
            }
                
               

            
        }



        function retrieveId($email) {
        $sqlquery =  $GLOBALS['pdo']->query("SELECT `u_id` FROM users where `email` = '$email' LIMIT 1");
        $id = $sqlquery->fetch();        
        return $id;
    }

        function return_back() {
        if(isset($_REQUEST["destination"])){
            header("Location: {$_REQUEST["destination"]}");
        }else if(isset($_SERVER["HTTP_REFERER"])){
            header("Location: {$_SERVER["HTTP_REFERER"]}");
        }
    }



?>

    