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
        <!-- style for the page -->
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
        <center><img src="logo.png"; width = "1100px"; height = 250px></center>

        
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
            //requiring for the files to connect to database and error_handling
            require "../connect_db.php";
            require "error_handler.php";

            $error_message = "";
        
            //inilizing variable needed for the program
            if (ISSET($_POST ["id"])) {
                $id = $_POST ["id"];
            }
            else {
                $id = " ";
            }

            if (ISSET($_POST ["lname"])) {
                $lname = $_POST ["lname"];
            }
            else {
                $lname = " ";
            }

            if (ISSET($_POST ["fname"])) {
                $fname = $_POST ["fname"];
            }
            else {
                $fname = " ";
            }

            if (ISSET($_POST ["add"])) {
                $add = $_POST ["add"];
            }
            else {
                $add = " ";
            }

            if (ISSET($_POST ["email"])) {
                $email = $_POST ["email"];
            }
            else {
                $email = " ";
            }

            if (ISSET($_POST ["dele"])) {
                $dele = $_POST ["dele"];
            }
            else {
                $dele = " ";
            }

            //all the error messages for the inout fields for if there is a blank value
            if ($id == "")   {$error_message = "<h3 style='color:red'> The id cannot be blank! </h3>";}
            if ($lname == "") {$error_message = "<h3 style='color:red'> The last name cannot be blank! </h3>";}
            if ($fname == "") {$error_message = "<h3 style='color:red'> The firrst name cannot be blank! </h3>";}
            if ($add == "") {$error_message = "<h3 style='color:red'> The address cannot be blank! </h3>";}
            if ($email == "") {$error_message = "<h3 style='color:red'> The email cannot be blank! </h3>";}
            if ($dele == "") {$error_message = "<h3 style='color:red'> The delete cannot be blank! </h3>";}

            //header
            echo "<h1> Add A Row to Customer </h1>";
            
            //form for the input fields to add the new data to the table
            echo "<form action = '' method = 'POST'>";
            echo "<br> Enter the Customer Id <input type = 'number' name = 'id' min='0'>";
            echo "<br>";
            echo "<br> Enter the Last Name <input type = 'text' name = 'lname' max='30'>";
            echo "<br>";
            echo "<br> Enter the First Name <input type = 'text' name = 'fname' max='30'>";
            echo "<br>";
            echo "<br> Enter the Address <input type = 'text' name = 'add' max='40'>";
            echo "<br>";
            echo "<br> Enter the Email <input type = 'email' name = 'email' max='40'>";
            echo "<br>";
            echo "<br> Enter either y for yes or n for no <input type = 'text' name = 'dele' max='1'>";
            echo "<br>";
            echo "<br><br><input type = 'submit' value = 'Submit Me!' style='background-color: red; color: white'>";
            echo "</form>";

            //inserting the new data into the table and a error message if there was a problem with the insert
            if ($error_message =="") {
                $q = "INSERT INTO t5_customer VALUES ('$id', '$lname', '$fname', '$add', '$email', '$dele')";
                $r = mysqli_query($dbc, $q);

                if($r) {echo "Values successfully inserted!";}
                else {echo "Unable to insert into the table!";}
            }
            else { 
                //echoing out the error message if something is blank
                echo "$error_message";  
            }

            include "file_author.php";
        ?>
</main>
</body>
</html>

