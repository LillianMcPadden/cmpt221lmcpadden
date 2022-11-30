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
        $FILE_AUTHOR="Maeve Lonergan";

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


        echo "<br><br><h3>Display the User Table </h3>";
        $q = "Select * from t5_user".  $sort_type . " " . $dir;


        $r = mysqli_query($dbc, $q);
        echo " <table border = 2> <tr> <th> Username </th> <th> Password </th> <th> Password reset date </th> <th> Position title </th> <th> Monthly Report </th> <th> Deleted </th> <th> Email </th> <th> Date of last password cange </th> <th> Type of passsword </th>";
        if($r ){
            while ($row= mysqli_fetch_array($r, MYSQLI_NUM))
            {
                echo "<tr><td>". $row[0] . "</td><td>". $row[1]. "</td><td>". $row[2]. "</td><td>". $row[3] . "</td><td>". $row[4] ."</td><td>". $row[5] ."</td><td>". $row[6] ."</td><td>". $row[7] ."</td><td>". $row[8] ."</td><td>". $row[9] ."</td></tr>";
            }
        }
        echo "</table>";


        echo "<form action = '' method = 'POST'>";
        echo "<br> <input type = 'submit' value = 'Sort it!' style = 'background-color:rgb(220, 26, 34); color:white;'>";
        echo "<input type = 'radio' name = 'sort' value = 'username'>    Username";
        echo "<input type = 'radio' name = 'sort' value = 'passwrd'>    Password";
        echo "<input type = 'radio' name = 'sort' value = 'passwrd_reset'>    Password reset date";
        echo "<input type = 'radio' name = 'sort' value = 'title'>    Job title";
        echo "<input type = 'radio' name = 'sort' value = 'monthly_report'>    Monthly Report";
        echo "<input type = 'radio' name = 'sort' value = 'deleted'>    Deleted";
        echo "<input type = 'radio' name = 'sort' value = 'email'>    Email";
        echo "<input type = 'radio' name = 'sort' value = 'lastchanged'>    Date of last password change";
        echo "<input type = 'radio' name = 'sort' value = 'password_type'>    Type of password";
        echo "<br><input type = 'radio' name = 'direction' value = 'ASC'>    Ascending";
        echo "<input type = 'radio' name = 'direction' value = 'DESC'>    Descending";
        echo "</form>";
        include "file_author.php";
        ?>
    </main>
   
    </body>
</html>
