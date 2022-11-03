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
                <th><a class= "active" href="sales.php"> Sales</a></th>
                <th><a class= "active" href="login.php"> Login</a></th>
                <th><a class= "active" href="contact.php"> Contact</a></th>
                <th><a class= "active" href="admin.php"> Admin</a></th>
                <th><a class= "active" href="suppliers.php"> Suppliers</a></th>
            </tr>
        </table>
        <br>
        <?php
        echo " <p><b> Connect to site_db: </b>";
        require "connect_db.php";

        echo "<br><br><h3>Display the User Table </h3>";
        $q = "Select * from t5_user";
        $r = mysqli_query($dbc, $q);

        echo " <table> <tr> <th> username </th> <th> passwrd </th> <th> passwrd_reset </th> <th> title </th> <th> monthly_report </th> <th> deleted </th><th> email </th><th> lastchanged </th><th> password_type </th>";
        if($r ){
            while ($row= mysqli_fetch_array($r, MYSQLI_NUM))
            {
                echo "<br><tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3] . "</td><td>". $row[4]. "</td><td>". $row[5]. "</td><td> ". $row[6]. "</td><td>". $row[7]. "</td><td>". $row[8]. "</td></tr>";
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
