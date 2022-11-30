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
        <?php
        $FILE_AUTHOR="Lillian McPadden";
        echo " <p><b> Connect to site_db: </b>";
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

        echo "<br><br><h3>Display the Product Table </h3>";
        $q = "Select * from t5_product $sort_type $dir";
        $r = mysqli_query($dbc, $q);

        echo " <table border = '2' cellpadding = '2' border-spacing = '0px 0'> <tr><th> product_ID </th><th> our_price </th><th> color </th><th> quantity </th><th> shoe_cond  </th> <th> size </th><th> brand </th><th> style_num </th><th> listing_price </th><th> deleted </th></tr>";
        if($r ){
            while ($row= mysqli_fetch_array($r, MYSQLI_NUM))
            {
                echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3] . "</td><td>". $row[4]. "</td><td>". $row[5]. "</td><td> ". $row[6]. "</td><td>". $row[7]. "</td><td>". $row[8]. "</td></tr>";
            }
        }
        echo "</table>";

        echo "<form action = '' method = 'POST'>";
        echo "<br> <input type = 'submit' value = 'Sort it!' style = 'background-color:rgb(220, 26, 34); color:white;'>";
        echo "<input type = 'radio' name = 'sort' value = 'product_id'>    ID";
        echo "<input type = 'radio' name = 'sort' value = 'our_price'>    Our Price";
        echo "<input type = 'radio' name = 'sort' value = 'color'>    Color";
        echo "<input type = 'radio' name = 'sort' value = 'quantity'>    Quantity";
        echo "<input type = 'radio' name = 'sort' value = 'shoe_cond'>    Shoe Condition";
        echo "<input type = 'radio' name = 'sort' value = 'size'>    Size";
        echo "<input type = 'radio' name = 'sort' value = 'brand'>    Brand";
        echo "<input type = 'radio' name = 'sort' value = 'style_num'>    Style Number";
        echo "<input type = 'radio' name = 'sort' value = 'listing_price'>    Listing Price";
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
