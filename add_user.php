<!DOCTYPE html>
<!--    t5homepage.html   Add Row to Users Table
    09/21/2022 t5 Original Program
-->
    <html lang="en">

    <head>
        <title>
            Add Row: Users
        </title>
        <meta charset="utf-8">
       <style>
            * {background-color: rgb(255, 255, 255);}
            h1 { color : black; font-family: Papyrus;font-size: 45px;}
            h3 { color:rgb(220, 26, 34);font-size: 25px;font-family: Monaco;}
            header {background-color:rgb(220, 26, 34);}
            footer {background-color:rgb(245, 255, 245);}
            th {font-family: Papyrus; font-size:16px; padding: 0px 0px 0px 0px;  }
        </style>
            </head>
    <body>
    <!-- Logo to for the website-->
    <header>
        <center><img src="logo.png"; width = "1100px"; height = 250px></center>

        
    </header>
    <!-- Links to navigate the website-->
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
            require "connect_db.php";
            require "error_handler.php";

            $FILE_AUTHOR="Maeve Lonergan";

            $error_message = "";
        
            //initialize variables
            if (ISSET($_POST ["username"])) {
                $username= $_POST ["username"];
            }
            else {
                $username = " ";
            }

            if (ISSET($_POST ["password"])) {
                $password = $_POST ["password"];
            }
            else {
                $password = " ";
            }

            if (ISSET($_POST ["title"])) {
                $title = $_POST ["title"];
            }
            else {
                $title = " ";
            }

            if (ISSET($_POST ["email"])) {
                $email = $_POST ["email"];
            }
            else {
                $email = " ";
            }

            if (ISSET($_POST ["deleted"])) {
                $deleted = $_POST ["deleted"];
            }
            else {
                $deleted= " ";
            }

            if (ISSET($_POST ["password_type"])) {
                $password_type = $_POST ["password_type"];
            }
            else {
                $password_type = " ";
            }

            //error checking if blank
            if ($username== "")   {$error_message = "<h3 style='color:red'> The username cannot be blank! </h3>";}
            if ($password == "") {$error_message= "<h3 style='color:red'> The password cannot be blank! </h3>";}
            if ($title == "") {$error_message = "<h3 style='color:red'> You must select a title! </h3>";}
            if ($email == "") {$error_message= "<h3 style='color:red'> The email cannot be blank! </h3>";}
            if ($deleted == "") {$error_message = "<h3 style='color:red'> You must select an option! </h3>";}
            if ($password_type == "") {$error_message = "<h3 style='color:red'> You must select a password type! </h3>";}
            
            //setting varibles that don't accept user input
            $password_reset=date("Y-m-d");
            $monthly_report="N/A";
            $last_changed=date("Y-m-d");


            //form to accept user input for row
            echo "<h1> Add A Row to Users Table </h1>";
        
            echo "<form action = '' method = 'POST'>";
            echo "<br> Enter the username <input type = 'text' name = 'username' max='30'>";
            echo "<br>";
            echo "<br> Enter the password <input type = 'password' name = 'password' max='40'>";
            echo "<br>";
            echo "<br> Select the job title <select name='title'>";
            echo "     <option value='Stakeholder'> Stakeholder </option>";
            echo "     <option value='Employee'> Employee </option>";
            echo "     <option value='Admin/IT'> Admin/IT </option>";
            echo "     <option value='Customer'> Customer </option>";
            echo "</select><br>";
            echo "<br> Enter the Email <input type = 'email' name = 'email' max='40'>";
            echo "<br>";
            echo "<br> Select either y for yes or n for no (deleted) <select name='deleted'>";
            echo "     <option value='y'> y </option>";
            echo "     <option value='n'> n </option>";
            echo "</select><br>";
            echo "<br> Select the password type <select name='password_type'>";
            echo "     <option value='hashed'> hashed </option>";
            echo "     <option value='text'> text </option>";
            echo "</select><br>";
            echo "<br><br><input type = 'submit' value = 'Add to table!' style='background-color: red; color: white'>";
            echo "</form>";

            //if no errors, insert row
            if ($error_message =="") {
                $q = "INSERT INTO t5_user VALUES ('$username', '$password', '$password_reset', '$title', '$monthly_report', '$email', '$deleted', '$last_changed', '$password_type')";
                $r = mysqli_query($dbc, $q);

                if($r) {echo "Values successfully inserted!";}
                else {echo "Unable to insert into the table!";}
            }
            else {
                echo "$error_message";  
            }

        include "file_author.php";
        ?>
</main>
</body>
</html>
