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
        <center><img src="https://lh3.googleusercontent.com/R9mBkfrGZ7arGjewA9RXfo-Y6Miw-50wTVs8uoTtFLLjjZqkv1BRQZeXuWMQu9NIlIR7Qh2O3dNcgRd-qMMW-bVRCb_5KE-qBW2FIceB7vcdY_egVWyEb8AYx6CYLvhU_PQGjxtkMcg=w2400"; width = 1100px; height = 300px></center>
        
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
            $FILE_AUTHOR = "Maeve Lonergan";
            echo " <p><b> Connect to site_db: </b>";
            require "../connect_db.php";
            echo "<hr>";
            echo "<h3> Customers table explained </h3>";
            echo "<table border = 1><tr> <th> Column Name </th> <th> Column Type </th> <th> Null/Not Null</th> <th> Primary Key </th>";
            $q = "EXPLAIN t5_customer";
            $r = mysqli_query ($dbc,$q);
            if($r ){
                while ($row= mysqli_fetch_array($r, MYSQLI_NUM)){
                    echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3]. "</td></tr>";
                }
            }
            echo "</table>";
            echo "<hr>";

            echo "<h3> User table explained </h3>";
            echo "<table border = 1><tr> <th> Column Name </th> <th> Column Type </th> <th> Null/Not Null</th> <th> Primary Key </th>";
            $q = "EXPLAIN t5_user";
            $r = mysqli_query ($dbc,$q);
            if($r ){
                while ($row= mysqli_fetch_array($r, MYSQLI_NUM)){
                    echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]."</td><td>". $row[3]. "</td></tr>";
                }
            }
            echo "</table>";
            echo "<hr>";
           

            echo "<h3> Products table explained </h3>";
            echo "<table border = 1><tr> <th> Column Name </th> <th> Column Type </th> <th> Null/Not Null</th> <th> Primary Key </th>";
            $q = "EXPLAIN t5_product";
            $r = mysqli_query ($dbc,$q);
            if($r ){
                while ($row= mysqli_fetch_array($r, MYSQLI_NUM)){
                    echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]."</td><td>". $row[3]. "</td></tr>";
                }
            }
            echo "</table>";
            echo "<hr>";
            

            echo "<h3> Suppliers table explained </h3>"; 
            echo "<table border = 1><tr> <th> Column Name </th> <th> Column Type </th> <th> Null/Not Null</th> <th> Primary Key </th>";
            $q = "EXPLAIN t5_supplier";
            $r = mysqli_query ($dbc,$q);
            if($r ){
                while ($row= mysqli_fetch_array($r, MYSQLI_NUM)){
                    echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3]. "</td></tr>";
                }
            }
            echo "</table>";
            echo "<hr>";
            
            echo "<h3> Users table explained </h3>";
            echo "<table border = 1><tr> <th> Column Name </th> <th> Column Type </th> <th> Null/Not Null</th> <th> Primary Key </th>";
            $q = "EXPLAIN t5_user";
            $r = mysqli_query ($dbc,$q);
            if($r ){
                while ($row= mysqli_fetch_array($r, MYSQLI_NUM)){
                    echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3]. "</td></tr>";
                }
            }
            echo "</table>";
            echo "<hr>";
            include "file_author.php";
    ?>
     
    </main>
    </body>
</html>
