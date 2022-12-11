<!DOCTYPE html>
<!--    t5homepage.html   Tables page
    09/21/2022 t5 Original Program
-->
<html lang="en">

    <head>
        <title>
            View Tables
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
        <center><img src="logo.png"; width = 1100px; height = 250px></center>
        
    </header>
    <!-- Links to navigate the website-->
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
                <th><a class= "active" href="logout.php"> Logout</a></th>
            </tr>
        </table>
        <br>
        
        
        <?php
        session_start();
        $FILE_AUTHOR="Maeve Lonergan";

        //initialize session variables
        if (isset($_SESSION['login_status'])){
            $login_status = $_SESSION['login_status'];
          } else{
            $login_status = "NOT LOGGED IN";
          }
            echo "<br>" . $login_status;

        //if logged in, you can choose which table to view
        if (isset($_SESSION['login_status'])){
            echo "<form action='product.php' method = 'POST'>";
            echo "<input type='submit' value='Products Table' name='submit' style='background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 55px;'>";
            echo "</form>";
            echo "<form action='suppliers.php' method = 'POST'>";
            echo "<input type='submit' value='Suppliers Table' name='submit' style='background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 55px;'>";
            echo "</form>";
            echo "<form action='customer.php' method = 'POST'>";
            echo "<input type='submit' value='Customers Table' name='submit' style='background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 55px;'>";
            echo "</form>";
        //prompt for login
        } else{
            echo "<br> You have not logged in yet!";
            echo "<br> Please log in at link below in order to change tables or add to the tables!";
        }
         echo "<table style = 'border-collapse: separate; border-spacing: 150px 0;''>
         <tr>
             <th><a class= 'active' href='login.php'> Login</a></th>
         </tr>
        </table>";

        include "footer.php";
       
        ?>
    </main>
    <br>

    </body>
</html>
