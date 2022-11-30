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
    echo "<h1> Logout </h1>";

    //isset for the log in status
    if (isset($_SESSION['login_status'])){
        $login_status = $_SESSION['login_status'];
    } else{
        $login_status = "NOT LOGGED IN";
    }
    echo "<br>" . $login_status;

    //isset to reset the session vairables
    if (($_SERVER['REQUEST_METHOD']==='GET')) {
        $_SESSION["login_status"] = "";
        unset($_SESSION["login_status"]);
    }
    
   
   

    //sumbit button
    echo "<form action='' method='POST'>";
    echo "<br><input type='submit' value='Submit Me!' style='background-color:red;color:white'>";
    echo "</form>";


    include "file_author.php";
    ?>  
    </main>
    </body>
</html>
