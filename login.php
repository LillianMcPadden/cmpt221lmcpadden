<!DOCTYPE html>
<!--    t5homepage.html   Homepage
    09/21/2022 t5 Original Program
-->
<html lang="en">

    <head>
        <title>
            Stellar Sneakers Login
        </title>
        <meta charset="utf-8">
        <style>
            * {background-color: rgb(255, 255, 255);}
            h1 { color : black; font-family: Papyrus;font-size: 45px;}
            h3 { color:rgb(220, 26, 34);font-size: 25px;font-family: Monaco;}
            header {background-color:rgb(220, 26, 34);}
            footer {background-color:rgb(245, 255, 245);}
            th {font-family: Papyrus;}
        </style>
    </head>
    <body>
    <!-- Logo to for the website-->
    <header>
        <center><img src="https://lh3.googleusercontent.com/R9mBkfrGZ7arGjewA9RXfo-Y6Miw-50wTVs8uoTtFLLjjZqkv1BRQZeXuWMQu9NIlIR7Qh2O3dNcgRd-qMMW-bVRCb_5KE-qBW2FIceB7vcdY_egVWyEb8AYx6CYLvhU_PQGjxtkMcg=w2400"; width = "100%"; height = 300px></center>
        
    </header>
    <!-- Will become links to navigate the website-->
    <main>
        <br>
        <center><table border=0></center>
        <table style = "border-collapse: separate; border-spacing: 150px 0;">
            <tr>
                <th><a class= "active" href="index.php"> Home</a></th>
                <th><a class= "active" href="tables.php"> Tables</a></th>
                <th><a class= "active" href="contact.php"> Contact</a></th>
                <th><a class= "active" href="admin.php"> Admin</a></th>
                <th><a class= "active" href="login.php"> Login</a></th>
            </tr>
        </table>
        <br>
        
        <!-- start of the new code -->
       <?php 
       session_start();
       $FILE_AUTHOR = "Maeve Lonergan";

    //connect to site_db
    require "../connect_db.php";
    echo "<h1> Login </h1>";

    if (isset($_SESSION['login_status'])){
        $login_status = $_SESSION['login_status'];
    } else{
        $login_status = "NOT LOGGED IN";
    }
    echo "<br>" . $login_status;
    //initialize variables to the user input or if the user input is missing, a blank
    if (isset($_POST['user_name'])){
        $user_name = $_POST['user_name'];
    } else {
        $user_name = "";
    }
    if (isset($_POST['user_password'])){
        $user_password = $_POST['user_password'];
    } else {
        $user_password = "";
    }


    if (($_SERVER['REQUEST_METHOD']=='POST')){ //variables are saved as blanks and used to populate form, this ensures errors are not shown before the user inputs values
    
    //error checking for if variables are blank
        if ($user_name==''){
            $error_message = "<br>Please enter a username";
            echo $error_message;
        } 
         if ($user_password=='') {
             $error_message = "<br>Please enter a password";
             echo $error_message;
        } 
    }
   
    if (($_SERVER['REQUEST_METHOD']=='GET') OR (isset($error_message))){ //shows form only on first load or if user input has an error
        //begin form
        echo "<form action='' method='POST'>";
        echo "<br> Enter your username <input value = '$user_name' type='text' name='user_name'>";
        echo "<br> Enter your password <input value = '$user_password' type='password' name='user_password'>";

        //sumbit button
        echo "<br><input type='submit' value='Submit Me!' style='background-color:red;color:white'>";

        //end form
        echo "</form>";
   
    } if (($_SERVER['REQUEST_METHOD']=='POST') AND !isset($error_message)) { //if it is not the first load and if user input has no errors 
        //checking if username and password given match ones in database 
            $q= "select username, passwrd from t5_user where username='" .$user_name. "' and passwrd='" . $user_password. "'";
            $r = mysqli_query ($dbc,$q);
            if ($r){ 
                if (mysqli_num_rows($r) == 0) { //if not a match print error
                    $error_message="Invalid username/password combination.";
                    echo "<h3>$error_message</h3>";
                } else { 
                    //if a match, print confirmation for user and update session login status
                    echo "<br><h3> User $user_name successfully logged in!</h3>";
                    $_SESSION["login_status"]= "LOGGED IN";
                }
            }
    } 
    include "file_author.php";
    ?>  
    </main>
    </body>
</html>
