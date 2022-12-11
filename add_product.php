<!DOCTYPE html>
<!--    t5homepage.html   Add Row to Products Table
    09/21/2022 t5 Original Program
-->
    <html lang="en">

    <head>
        <title>
            Add Row: Product
        </title>
        <meta charset="utf-8">

       <!-- style for the page -->
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

            $FILE_AUTHOR="Lillian McPadden";
            $error_message = "";
        
             # initializes all variables
            if (ISSET($_POST ["id"])) {
                $id = $_POST ["id"];
            }
            else {
                $id = " ";
            }

            if (ISSET($_POST ["price"])) {
                $price = $_POST ["price"];
            }
            else {
                $price = " ";
            }

            if (ISSET($_POST ["color"])) {
                $color = $_POST ["color"];
            }
            else {
                $color = " ";
            }

            if (ISSET($_POST ["quantity"])) {
                $quantity = $_POST ["quantity"];
            }
            else {
                $quantity = " ";
            }

            if (ISSET($_POST ["shoecond"])) {
                $shoecond = $_POST ["shoecond"];
            }
            else {
                $shoecond = " ";
            }

            if (ISSET($_POST ["size"])) {
                $size = $_POST ["size"];
            }
            else {
                $size = " ";
            }

            if (ISSET($_POST ["brand"])) {
                $brand = $_POST ["brand"];
            }
            else {
                $brand = " ";
            }

            if (ISSET($_POST ["stylenum"])) {
                $stylenum = $_POST ["stylenum"];
            }
            else {
                $stylenum = " ";
            }

            if (ISSET($_POST ["lprice"])) {
                $lprice = $_POST ["lprice"];
            }
            else {
                $lprice = " ";
            }

            if (ISSET($_POST ["dele"])) {
                $dele = $_POST ["dele"];
            }
            else {
                $dele = " ";
            }

            if (ISSET($_POST ["supplier"])) {
                $supplier = $_POST ["supplier"];
            }
            else {
                $supplier = " ";
            }
            #checks to make sure none of the slots are blank
            if ($id == "")   {$error_message = "<h3 style='color:red'> The product id cannot be blank! </h3>";}
            if ($price == "") {$error_message = "<h3 style='color:red'> Our price cannot be blank! </h3>";}
            if ($color == "") {$error_message = "<h3 style='color:red'> Color cannot be blank! </h3>";}
            if ($quantity == "") {$error_message = "<h3 style='color:red'> The quantity cannot be blank! </h3>";}
            if ($shoecond == "") {$error_message = "<h3 style='color:red'> The shoe condition cannot be blank! </h3>";}
            if ($size == "") {$error_message = "<h3 style='color:red'> The size cannot be blank! </h3>";}
            if ($brand == "") {$error_message = "<h3 style='color:red'> The brand cannot be blank! </h3>";}
            if ($stylenum == "") {$error_message = "<h3 style='color:red'> The style number cannot be blank! </h3>";}
            if ($lprice == "") {$error_message = "<h3 style='color:red'> The listing price cannot be blank! </h3>";}
            if ($dele == "") {$error_message = "<h3 style='color:red'> The delete cannot be blank! </h3>";}
            if ($supplier == "") {$error_message = "<h3 style='color:red'> The supplier cannot be blank! </h3>";}
            
               #creates form for admin to add info about the product to be added
               echo "<h1> Add A Row to Products </h1>";
        
               echo "<form action = '' method = 'POST'>";
               echo "<br> Enter the product id <input type = 'number' name = 'id' min='0'>";
               echo "<br>";
               echo "<br> Enter the original selling price <input type = 'number' name = 'price' min='0' step='any'>";
               echo "<br>";
               echo "<br> Enter the color <select name = 'color'>";
               echo "<option value='white'>White</option>";
               echo "<option value='black'>Black</option>";
               echo "<option value='gray'>Gray</option>";
               echo "<option value='red'>Red</option>";
               echo "<option value='beige'>Beige</option>";
               echo "<option value='orange'>Orange</option>";
               echo "<option value='yellow'>Yellow</option>";
               echo "<option value='green'>Green</option>";
               echo "<option value='blue'>Blue</option>";
               echo "<option value='purple'>Purple</option>";
               echo "</select><br>";
               echo "<br> Enter the quantity <input type = 'number' name = 'quantity' min='0'>";
               echo "<br>";
               echo "<br> Enter the shoe condition <select name = 'shoecond'>";
               echo "<option value='Grade A'>Grade A</option>";
               echo "<option value='Grade B'>Grade B</option>";
               echo "<option value='Grade C'>Grade C</option>";
               echo "<option value='Grade D'>Grade D</option>";
               echo "<option value='Grade F'>Grade F</option>";
               echo "</select><br>";
               echo "<br> Enter the size <input type = 'number' name = 'size' min='1'>";
               echo "<br>";
               echo "<br> Enter the brand <select name = 'brand'>";
               echo "<option value='Nike'>Nike</option>";
               echo "<option value='Jordan'>Jordan</option>";
               echo "<option value='Adidas'>Adidas</option>";
               echo "<option value='Converse'>Converse</option>";
               echo "<option value='Reebok'>Reebok</option>";
               echo "<option value='New Balance'>New Balance</option>";
               echo "<option value='Vans'>Vans</option>";
               echo "<option value='Puma'>Puma</option>";
               echo "<option value='Yeezy'>Yeezy</option>";
               echo "</select><br>";
               echo "<br> Enter the style number <input type = 'number' name = 'stylenum' min='0'>";
               echo "<br>";
               echo "<br> Enter the new selling price <input type = 'number' name = 'lprice' min='0'>";
               echo "<br>";
               echo "<br> Enter either y for yes or n for no <input type = 'text' name = 'dele' max='1'>";
               echo "<br>";
               echo "<br> Enter the supplier <input type = 'text' name = 'supplier'>";
               echo "<br>";
               echo "<br><br><input type = 'submit' value = 'Add to table!' style='background-color: red; color: white'>";
               echo "</form>";
            
            #if no errors, add values into the t5_product database
            if ($error_message =="") {
                $q = "INSERT INTO t5_product VALUES ('$id', '$price', '$color', '$quantity', '$shoecond', '$size', '$brand', '$stylenum', '$lprice', '$dele', '$supplier')";
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
