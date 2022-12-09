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
           th {font-family: Papyrus; padding: 5px 5px 5px 5px; font-weight:2300; font-size: 25px;}
            td {padding: 5px 5px 5px 5px;font-size: 25px;} 
            form { font-family: Monaco;font-size: 25px;}
           .tableoutline{background-color:rgb(220, 26, 34);}
           .tableheader{background:rgb(249, 208, 208 );}
           .redcolor{color:rgb(220, 26, 34);}
        </style>
    </head>
    <body>
    <!-- Logo to for the website-->
    <header>
        <center><img src="logo.png"; width = 1100px; height = 250px></center>
        
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
            $FILE_AUTHOR = "Maeve Lonergan";
          
            require "connect_db.php";

            echo "<h3> Choose a table to view its explanation </h3>";
            echo "<form action = '' method = 'POST'>";
            echo "<input type = 'radio' name = 'sort' value = 'customers'> Customers Table";
            echo "<br><input type = 'radio' name = 'sort' value = 'orders'> Orders Table";
            echo "<br><input type = 'radio' name = 'sort' value = 'products'> Products Table";
            echo "<br><input type = 'radio' name = 'sort' value = 'suppliers'> Suppliers Table";
            echo "<br><input type = 'radio' name = 'sort' value = 'users'> Users Table";
            echo "<br>";
            echo "<br> <input type = 'submit' value = 'Explain' style = 'background-color:rgb(220, 26, 34); color:white; height:40px; width:150px;font-family: Monaco; font-size: 25px;'>";
            echo "</form>";
            echo "<br>";
            
            if (isset($_POST['sort'])){
                if ($_POST['sort']=='customers'){
                    echo "<hr>";
                    echo "<h1 class='redcolor'> CUSTOMERS </h1>";
                    echo "<table border = 1 class = 'tableoutline'><tr> <th class='tableheader'> Column Name </th> <th class='tableheader'> Column Type </th> <th class='tableheader'> Null/Not Null</th> <th class='tableheader'> Primary Key </th>";
                    $q = "EXPLAIN t5_customer";
                    $r = mysqli_query ($dbc,$q);
                    if($r ){
                        while ($row= mysqli_fetch_array($r, MYSQLI_NUM)){
                            echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3]. "</td></tr>";
                        }
                    }
                    echo "</table>";
                }
                if ($_POST['sort']=='orders'){
                    echo "<hr>";
                    echo "<h1 class='redcolor'> ORDERS </h1>";
                    echo "<table border = 1 class = 'tableoutline'><tr> <th class='tableheader'> Column Name </th> <th class='tableheader'> Column Type </th> <th class='tableheader'> Null/Not Null</th> <th class='tableheader'> Primary Key </th>";
                    $q = "EXPLAIN t5_orders";
                    $r = mysqli_query ($dbc,$q);
                    if($r ){
                        while ($row= mysqli_fetch_array($r, MYSQLI_NUM)){
                            echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]."</td><td>". $row[3]. "</td></tr>";
                        }
                    }
                    echo "</table>";
                }
            
                if ($_POST['sort']=='products'){
                    echo "<hr>";
                    echo "<h1 class='redcolor'> PRODUCTS </h1>";
                    echo "<table border = 1 class = 'tableoutline'><tr> <th class='tableheader'> Column Name </th> <th class='tableheader'> Column Type </th> <th class='tableheader'> Null/Not Null</th> <th class='tableheader'> Primary Key </th>";
                    $q = "EXPLAIN t5_product";
                    $r = mysqli_query ($dbc,$q);
                    if($r ){
                        while ($row= mysqli_fetch_array($r, MYSQLI_NUM)){
                            echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]."</td><td>". $row[3]. "</td></tr>";
                        }
                    }
                    echo "</table>";
                }
                if ($_POST['sort']=='suppliers'){
                    echo "<hr>";
                    echo "<h1 class='redcolor'> SUPPLIERS </h1>"; 
                    echo "<table border = 1 class = 'tableoutline'><tr> <th class='tableheader'> Column Name </th> <th class='tableheader'> Column Type </th> <th class='tableheader'> Null/Not Null</th> <th class='tableheader'> Primary Key </th>";
                    $q = "EXPLAIN t5_supplier";
                    $r = mysqli_query ($dbc,$q);
                    if($r ){
                        while ($row= mysqli_fetch_array($r, MYSQLI_NUM)){
                            echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3]. "</td></tr>";
                        }
                    }
                    echo "</table>";
                }
                if ($_POST['sort']=='users'){
                    echo "<hr>";
                    echo "<h1 class='redcolor'> USERS </h1>";
                    echo "<table border = 1 class = 'tableoutline'><tr> <th class='tableheader'> Column Name </th> <th class='tableheader'> Column Type </th> <th class='tableheader'> Null/Not Null</th> <th class='tableheader'> Primary Key </th>";
                    $q = "EXPLAIN t5_user";
                    $r = mysqli_query ($dbc,$q);
                    if($r ){
                        while ($row= mysqli_fetch_array($r, MYSQLI_NUM)){
                            echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3]. "</td></tr>";
                        }
                    }
                    echo "</table>";
                }

            }  
            echo "<hr>";
            include "file_author.php";
    ?>
     
    </main>
    </body>
</html>
