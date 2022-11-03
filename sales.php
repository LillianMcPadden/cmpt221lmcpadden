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
            table {border-collapse: separate; border-spacing: 150px 0;}
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
        <table>
            <tr>
                <th><a class= "active" href="product.php"> Product</a></th>
                <th><a class= "active" href="login.php"> Login</a></th>
                <th><a class= "active" href="contact.php"> Contact</a></th>
                <th><a class= "active" href="suppliers.php"> Suppliers</a></th>
                <th><a class= "active" href="admin.php"> Admin</a></th>
            </tr>
        </table>
        <br>
        
        <!-- start of the new code -->
        <?php
        define("FILE_AUTHOR", "Veronica Longley");

        require "t5connect.php";


        echo "<h3>Explain the Supplier Table </h3>";
        $q = "Explain t5_supplier";
        echo " <table> <tr> <th> Field </th> <th> Type </th> <th> Null </th> <th> Key </th> <th> Default </th> ";
        $r = mysqli_query($dbc, $q);
        if($r ){
            while ($row= mysqli_fetch_array($r, MYSQLI_NUM))
            {
                echo "<br><tr><td>". $row[0]. "</td><td> ". $row[1]. "</td><td> ". $row[2]. "</td><td> ". $row[3]. " </td><td>". $row['4']. "</td></tr>";
            }
        }
        echo "</table>";

        echo "<br><br><h3>Display the Supplier Table </h3>";
        $q = "Select * from t5_supplier";


        $r = mysqli_query($dbc, $q);

        echo " <table> <tr> <th> supplier_id </th> <th> supName </th> <th> supAddress </th> <th> number_of_sales </th> <th> supEmail </th> <th> supPhone_num </th><th> deleted </th>";
        if($r ){
            while ($row= mysqli_fetch_array($r, MYSQLI_NUM))
            {
                echo "<br><tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3] . "</td><td>". $row[4]. "</td><td>". $row[5]. "</td><td> ". $row[6]. "</td></tr>";
            }
        }
        echo "</table>";
        ?>
    </main>
    <br>
    <!-- Copy right-->
    <footer>
        <center><small> &copy; Maeve Lonergan, Veronica Longley, Sorin Macaluso, Lillian McPadden 2022</small></center>
    </footer>
    </body>
</html>
