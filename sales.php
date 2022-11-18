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
        $FILE_AUTHOR="Veronica Longley";

        require "../connect_db.php";

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


        echo "<br><br><h3>Display the Supplier Table </h3>";
        $q = "Select * from t5_supplier".  $sort_type . " " . $dir;


        $r = mysqli_query($dbc, $q);
        echo " <table border = 2> <tr> <th> Supplier ID </th> <th> Supplier Name </th> <th> Supplier Address </th> <th> Number of Sales </th> <th> Supplier Email </th> <th> Supplier Phone Number </th><th> Deleted </th>";
        if($r ){
            while ($row= mysqli_fetch_array($r, MYSQLI_NUM))
            {
                echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3] . "</td><td>". $row[4]. "</td><td>". $row[5]. "</td><td> ". $row[6]. "</td></tr>";
            }
        }
        echo "</table>";


        echo "<form action = '' method = 'POST'>";
        echo "<br> <input type = 'submit' value = 'Sort it!' style = 'background-color:rgb(220, 26, 34); color:white;'>";
        echo "<input type = 'radio' name = 'sort' value = 'supplier_id'>    ID";
        echo "<input type = 'radio' name = 'sort' value = 'supName'>    Name";
        echo "<input type = 'radio' name = 'sort' value = 'supAddress'>    Address";
        echo "<input type = 'radio' name = 'sort' value = 'number_of_sales'>    Number of Sales";
        echo "<input type = 'radio' name = 'sort' value = 'supEmail'>    Email";
        echo "<input type = 'radio' name = 'sort' value = 'supPhone_num'>    Phone Number";
        echo "<input type = 'radio' name = 'sort' value = 'deleted'>    Deleted";
        echo "<br><input type = 'radio' name = 'direction' value = 'ASC'>    Ascending";
        echo "<input type = 'radio' name = 'direction' value = 'DESC'>    Descending";
        echo "</form>";
        include "file_author.php";
        ?>
    </main>
    <br>
    </body>
</html>
