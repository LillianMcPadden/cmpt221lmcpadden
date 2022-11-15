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
                <th><a class= "active" href="sales.php"> Sales</a></th>
                <th><a class= "active" href="login.php"> Login</a></th>
                <th><a class= "active" href="contact.php"> Contact</a></th>
                <th><a class= "active" href="admin.php"> Admin</a></th>
                <th><a class= "active" href="suppliers.php"> Suppliers</a></th>
            </tr>
        </table>
        <br>
        
        <!-- start of the new code -->
        <body>
           
        <?php
            echo " <p><b> Connect to site_db: </b>";
            require "connect_db.php";

            echo "<h1> Explain tables: </h1>";
            echo "<hr>";

            echo "Explaining table t5_customer";
            $q = "EXPLAIN t5_customer";
            $r = mysqli_query ($dbc,$q);
            if ($r ){
                while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)){
                    echo "<br>" . $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];
                } 
            }
            echo "<hr>";
            
            echo "Explaining table t5_orders";
            $q = "EXPLAIN t5_orders";
            $r = mysqli_query ($dbc,$q);
            if ($r ){
                while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)){
                    echo "<br>" . $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];
                }
            }
            echo "<hr>";

            echo "Explaining table t5_product";
            $q = "EXPLAIN t5_product";
            $r = mysqli_query ($dbc,$q);
            if ($r ){
                while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)){
                    echo "<br>" . $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];
                }
            }
            echo "<hr>";

            echo "Explaining table t5_supplier";
            $q = "EXPLAIN t5_supplier";
            $r = mysqli_query ($dbc,$q);
            if ($r ){
                while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)){
                    echo "<br>" . $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];
                }
            }
            echo "<hr>";

            echo "Explaining table t5_user";
            $q = "EXPLAIN t5_user";
            $r = mysqli_query ($dbc,$q);
            if ($r ){
                while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)){
                    echo "<br>" . $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3];
                }
            }
    ?>
     </body>
    </main>
    <br>
    <!-- Copy right-->
    <footer>
        <center><small> &copy; Maeve Lonergan, Veronica Longley, Sorin Macaluso, Lillian McPadden 2022</small></center>
    </footer>
    </body>
</html>