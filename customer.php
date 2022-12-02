<!DOCTYPE html>
<!--    t5homepage.html   Homepage
    09/21/2022 t5 Original Program
-->
<html lang="en">

    <head>
        <title>
            Stellar Sneakers Homepage
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
            </tr>
        </table>
        <br>
         <?php
        $FILE_AUTHOR="Sorin Macaluso";

        require "connect_db.php";

        if(ISSET($_POST['sort'])){
            $sort_type = " ORDER BY ". $_POST['sort'];
        }
        else {
            $sort_type = " ";
        }
        if(ISSET($_POST['direction'])){
            $dir = $_POST['direction'];
        }
        else {
            $dir = " ";
        }


        echo "<br><br><h3>Display the Customer Table </h3>";
        $q = "Select * from t5_customer".  $sort_type . " " . $dir;


        $r = mysqli_query($dbc, $q);
        echo " <table border = 2> <tr> <th> Customer ID </th> <th> Last Name </th> <th> First Name </th> <th> Address </th> <th> Email </th> <th> Deleted </th>";
        if($r ){
            while ($row= mysqli_fetch_array($r, MYSQLI_NUM))
            {
                echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3] . "</td><td>". $row[4] ."</td><td>". $row[5] ."</td></tr>";
            }
        }
        echo "</table>";


        echo "<form action = '' method = 'POST'>";
        echo "<br> <input type = 'submit' value = 'Sort it!' style = 'background-color:rgb(220, 26, 34); color:white;'>";
        echo "<input type = 'radio' name = 'sort' value = 'customer_id'>    Customer ID";
        echo "<input type = 'radio' name = 'sort' value = 'last_name'>    Last name";
        echo "<input type = 'radio' name = 'sort' value = 'first_name'>    First name";
        echo "<input type = 'radio' name = 'sort' value = 'cus_address'>    Address";
        echo "<input type = 'radio' name = 'sort' value = 'cus_email'>    Email";
        echo "<input type = 'radio' name = 'sort' value = 'deleted'>    Deleted";
        echo "<br><input type = 'radio' name = 'direction' value = 'ASC'>    Ascending";
        echo "<input type = 'radio' name = 'direction' value = 'DESC'>    Descending";
        echo "</form>";
        include "file_author.php";
        ?>

        
        
    </main>
    </body>
</html>
