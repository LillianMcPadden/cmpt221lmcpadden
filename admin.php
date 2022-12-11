<!DOCTYPE html>
<!--    t5homepage.html   Admin Page
    09/21/2022 t5 Original Program
-->
<html lang="en">

    <head>
        <title>
            Admin
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

        //session variable for login status
        if (isset($_SESSION['login_status'])){
            $login_status = $_SESSION['login_status'];
          } else{
            $login_status = "NOT LOGGED IN";
          }
            echo "<br>" . $login_status;

        //can only view/access contents if logged in
        if (isset($_SESSION['login_status'])){
            echo "<form action='explain_tables.php' method = 'POST'>";
            echo "<br><br> <input type='submit' value='Explain Tables' name='submit' style='background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 45px;'>";
            echo "</form>";

            echo "<form action='user.php' method = 'POST'>";
            echo "<br><br> <input type='submit' value='View Users Table' name='submit' style='background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 45px;'>";
            echo "</form>";

            echo "<br>";
            echo "<h1> Add row to: </h1>";
            
            echo "<form action='add_customer.php' method = 'POST'>";
            echo "<input type='submit' value='Customers Table' name='submit' style='background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 30px;'>";
            echo "</form>";

            echo "<form action='add_user.php' method = 'POST'>";
            echo "<input type='submit' value='Users Table' name='submit' style='background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 30px;'>";
            echo "</form>";

            echo "<form action='add_product.php' method = 'POST'>";
            echo "<input type='submit' value='Products Table' name='submit' style='background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 30px;'>";
            echo "</form>";

            echo "<form action='add_supplier.php' method = 'POST'>";
            echo " <input type='submit' value='Suppliers Table' name='submit' style='background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 30px;'>";
            echo "</form>";
        //required to login
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
