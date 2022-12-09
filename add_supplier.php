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
            require "../connect_db.php";
            require "../error_handler.php";

            $error_message = "";
        
        
            if (ISSET($_POST ["supplier_id"])) {
                $supplier_id = $_POST ["supplier_id"];
            }
            else {
                $supplier_id = " ";
            }

            if (ISSET($_POST ["supName"])) {
                $supName = $_POST ["supName"];
            }
            else {
                $supName = " ";
            }

            if (ISSET($_POST ["supAddress"])) {
                $supAddress = $_POST ["supAddress"];
            }
            else {
                $supAddress = " ";
            }

            if (ISSET($_POST ["number_of_sales"])) {
                $number_of_sales = $_POST ["number_of_sales"];
            }
            else {
                $number_of_sales = " ";
            }

            if (ISSET($_POST ["supEmail"])) {
                $supEmail = $_POST ["supEmail"];
            }
            else {
                $supEmail = " ";
            }

            if (ISSET($_POST ["supPhone_num"])) {
                $supPhone_num = $_POST ["supPhone_num"];
            }
            else {
                $supPhone_num = " ";
            }

            if (ISSET($_POST ["deleted"])) {
                $deleted = $_POST ["deleted"];
            }
            else {
                $deleted = " ";
            }

            if ($supplier_id == "")   {$error_message = "<h3 style='color:red'> The id cannot be blank! </h3>";}
            if ($supName == "") {$error_message = "<h3 style='color:red'> The name cannot be blank! </h3>";}
            if ($supAddress == "") {$error_message = "<h3 style='color:red'> The address cannot be blank! </h3>";}
            if ($number_of_sales == "") {$error_message = "<h3 style='color:red'> The number of sales cannot be blank! </h3>";}
            if ($supEmail == "") {$error_message = "<h3 style='color:red'> The email cannot be blank! </h3>";}
            if ($supPhone_num == "") {$error_message = "<h3 style='color:red'> The phone number cannot be blank! </h3>";}
            if ($deleted == "") {$error_message = "<h3 style='color:red'> The delete cannot be blank! </h3>";}

            echo "<h1> Add A Row to Supplier </h1>";
        
            echo "<form action = '' method = 'POST'>";
            echo "<br> Enter the Supplier Id <input type = 'number' name = 'supplier_id' min='0'>";
            echo "<br>";
            echo "<br> Enter the First and Last Name <input type = 'text' name = 'supName' max='60'>";
            echo "<br>";
            echo "<br> Enter the Address <input type = 'text' name = 'supAddress' max='30'>";
            echo "<br>";
            echo "<br> Enter the Number of Sales <input type = 'number' name = 'number_of_sales'  min='0'>";
            echo "<br>";
            echo "<br> Enter the Email <input type = 'email' name = 'supEmail' max='40'>";
            echo "<br>";
            echo "<br> Enter the Phone Number <input type = 'text' name = 'supPhone_num'>";
            echo "<br>";
            echo "<br> Enter either y for yes or n for no <input type = 'text' name = 'deleted' max='1'>";
            echo "<br>";
            echo "<br><br><input type = 'submit' value = 'Submit Me!' style='background-color: red; color: white'>";
            echo "</form>";

            
            if ($error_message =="") {
                $q = "INSERT INTO t5_supplier VALUES ('$supplier_id', '$supName', '$supAddress', '$number_of_sales', '$supEmail', '$supPhone_num', '$deleted')";
                $r = mysqli_query($dbc, $q);

                if($r) {echo "Values successfully inserted!";}
                else {echo "Unable to insert into the table!";}
            }
            else {
                echo "$error_message";  
            }
        ?>
</main>
</body>
</html>