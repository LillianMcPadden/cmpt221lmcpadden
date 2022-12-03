<!DOCTYPE html>
<!--    t5homepage.html   Homepage
    09/21/2022 t5 Original Program
-->
<html lang="en">

    <head>
        <title>
            Stellar Sneakers Admin
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
        <center><img src="logo.png"; width = "100%"; height = 300px></center>
        
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
                <th><a class= "active" href="logout.php"> Logout</a></th>
            </tr>
        </table>
        <br>
        
        <!-- start of the new code -->
        <?php
        session_start();
        $FILE_AUTHOR="Maeve Lonergan";

        if (isset($_SESSION['login_status'])){
            $login_status = $_SESSION['login_status'];
          } else{
            $login_status = "NOT LOGGED IN";
          }
            echo "<br>" . $login_status;

        if (isset($_SESSION['login_status'])){
            echo"<h1><a class= 'active' href='product.php'> Products</a></h1>";
            echo"<h1><a class= 'active' href='sales.php'> Suppliers</a></h1>";
            echo"<h1><a class= 'active' href='customer.php'> Customers</a></h1>";
        } else{
            echo "<br> You have not logged in yet!";
            echo "<br> Please log in at link below in order to change tables or add to the tables!";
        }
         echo "<table style = 'border-collapse: separate; border-spacing: 150px 0;''>
         <tr>
             <th><a class= 'active' href='login.php'> Login</a></th>
         </tr>
        </table>";
       
        ?>
    </main>
    <br>

    </body>
</html>
