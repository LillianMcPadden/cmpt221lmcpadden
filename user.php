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
            th {font-family: Papyrus; padding: 5px 5px 5px 5px; font-weight:2300; font-size: 25px;}
            td {padding: 5px 5px 5px 5px;font-size: 25px;} 
            form { font-family: Monaco;font-size: 15px;}
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
         <?php
        $FILE_AUTHOR="Maeve Lonergan";

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


        echo "<h1 class='redcolor'>Users </h1>";
        $q = "Select * from t5_user".  $sort_type . " " . $dir;


        $r = mysqli_query($dbc, $q);
        echo " <table border = 2 class='tableoutline'> <tr> <th class='tableheader'> Username </th> <th class='tableheader'> Password </th> <th class='tableheader'> Password reset date </th> <th class='tableheader'> Position title </th> <th class='tableheader'> Monthly Report </th> <th class='tableheader'> Deleted </th> <th class='tableheader'> Email </th> <th class='tableheader'> Date of last password cange </th> <th class='tableheader'> Type of passsword </th>";
        if($r ){
            while ($row= mysqli_fetch_array($r, MYSQLI_NUM))
            {
                echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3] . "</td><td>". $row[4] ."</td><td>". $row[5] ."</td><td>". $row[6] ."</td><td>". $row[7] ."</td><td>". $row[8] ."</td></tr>";
            }
        }
        echo "</table>";

        echo "<br><h1 class='redcolor'>Sort table</h1>";
        echo "<form action = '' method = 'POST'>";
        echo "<p class='redcolor'>TABLE COLUMN</p>";
        echo "<input type = 'radio' name = 'sort' value = 'username'>    Username";
        echo "<br><input type = 'radio' name = 'sort' value = 'passwrd'>    Password";
        echo "<br><input type = 'radio' name = 'sort' value = 'passwrd_reset'>    Password reset date";
        echo "<br><input type = 'radio' name = 'sort' value = 'title'>    Job title";
        echo "<br><input type = 'radio' name = 'sort' value = 'monthly_report'>    Monthly Report";
        echo "<br><input type = 'radio' name = 'sort' value = 'deleted'>    Deleted";
        echo "<br><input type = 'radio' name = 'sort' value = 'email'>    Email";
        echo "<br><input type = 'radio' name = 'sort' value = 'lastchanged'>    Date of last password change";
        echo "<br><input type = 'radio' name = 'sort' value = 'password_type'>    Type of password";
        echo "<p class='redcolor'>DIRECTION</p>";
        echo "<input type = 'radio' name = 'direction' value = 'ASC'>    Ascending";
        echo "<br><input type = 'radio' name = 'direction' value = 'DESC'>    Descending";
        echo "<br><br> <input type = 'submit' value = 'Sort it!' style = 'background-color:rgb(220, 26, 34); color:white;font-family: Monaco;font-size: 15px; '>";
        echo "</form>";
        include "file_author.php";
        ?>
    </main>
   
    </body>
</html>
