<!DOCTYPE html>
<!--    t5homepage.html   Product Table
    09/21/2022 t5 Original Program
-->
<html lang="en">

    <head>
        <title>
            Products
        </title>
        <meta charset="utf-8">
        <style>
            * {background-color: rgb(255, 255, 255);}
            h1 { color : black; font-family: Papyrus;font-size: 45px;}
            h3 { color:rgb(220, 26, 34);font-size: 25px;font-family: Monaco;}
            header {background-color:rgb(220, 26, 34);}
            footer {background-color:rgb(245, 255, 245);}
            th {font-family: Papyrus; padding: 5px 5px 5px 5px; font-size: 25px;}
            td {padding: 5px 5px 5px 5px;font-size: 25px;} 
            form { font-family: Monaco;font-size: 15px;}
           .tableoutline {background-color:rgb(220, 26, 34);}
           .tableheader {background:rgb(249, 208, 208 );}
           .redcolor {color:rgb(220, 26, 34);}
           .test {font-family: Papyrus; font-size:16px; padding: 0px 0px 0px 0px;  }
           
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
        <center><table border=0 ></center>
        <table style = "border-collapse: separate; border-spacing: 150px 0;">
            <tr>
                <th class='test'><a class= "active" href="index.php"> Home</a></th>
                <th class='test'><a class= "active" href="tables.php"> Tables</a></th>
                <th class='test'><a class= "active" href="contact.php"> Contact</a></th>
                <th class='test'><a class= "active" href="admin.php"> Admin</a></th>
                <th class='test'><a class= "active" href="login.php"> Login</a></th>
                <th class='test'><a class= "active" href="logout.php"> Logout</a></th>
            </tr>
        </table>
        <br>
        <?php
        $FILE_AUTHOR="Lillian McPadden";
   
        require "connect_db.php";
        
        //initialize variables
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

        //display table
        echo "<br><br><h1 class='redcolor'>Display the Product Table </h1>";
        $q = "Select * from t5_product $sort_type $dir";
        $r = mysqli_query($dbc, $q);

        echo " <table border = 1 class = 'tableoutline'> <tr><th class='tableheader'> Product ID </th><th class='tableheader'> Our Price </th><th class='tableheader'> Color </th><th class='tableheader'> Quantity </th><th class='tableheader'> Shoe Condition  </th> <th class='tableheader'> Size </th><th class='tableheader'> Brand </th><th class='tableheader'> Style Number </th><th class='tableheader'> Listing Price </th><th class='tableheader'> deleted </th>";
        if($r ){
            while ($row= mysqli_fetch_array($r, MYSQLI_NUM))
            {
                echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3] . "</td><td>". $row[4]. "</td><td>". $row[5]. "</td><td> ". $row[6]. "</td><td>". $row[7]. "</td><td>". $row[8]. "</td><td>" . $row[9] . "</td></tr>";
            }
        }
        echo "</table>";

        //options to sort table
        echo "<h1 class='redcolor'>Sort table</h1>";
        echo "<form action = '' method = 'POST'>";
        echo "<p class='redcolor'>TABLE COLUMN</p>";
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
        echo "<br><p class='redcolor'>DIRECTION</p>";
        echo "<input type = 'radio' name = 'direction' value = 'ASC'>    Ascending";
        echo "<input type = 'radio' name = 'direction' value = 'DESC'>    Descending";
        echo "<br><br> <input type = 'submit' value = 'Sort it!' style = 'background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 15px; '>";
        echo "</form>";

        //button to add a row
        echo "<form action='add_product.php' method = 'POST'>";
        echo "<br><br> <input type='submit' value='Add a Row' name='submit' style='background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 45px;'>";
        echo "</form>";
        include "file_author.php";
        ?>
    </main>
    <br>

    </body>
</html>
