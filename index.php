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
        <center><img src="logo.png"; width= 100%; height = 300px></center>
        
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
        <!-- A small section descibing the company-->
        <center><h1> About Us</h1></center>
        <h3 style = "font-size: 15px;">
        Stellar Sneakers is a company that will allow anyone to sell their designer shoes. We will also be able to accurately<br> 
        identify any shoes that are replicas of the original shoe so that the customer is reassured that the product they are<br>
        buying is indeed authentic.<br>
        
        <br>In order to do this the supplier would send there shoes to our warehouse so that an employee<br>
        can use our patented validation process to ensure that the shoes are real. Then, when a coustomer is looking for a shoe, they can<br>
        purchase their desired shoe from our website.
        </h3>


        <center><h1> Shop Our Most Popular Shoes! </h1>

        <a class= "active" href="product.php"> <img src="nike.png" width="350" height="200"> </a>
        <a class= "active" href="product.php"> <img src="nike2.png" width="350" height="200"> </a>
        <a class= "active" href="product.php"> <img src="yeezy.png" width="350" height="200"> </a>

        </center>

        <center><small><a class= "active" href="disclaimer.php"> Legal Disclaimer</a></small></center>
        <?php
        $FILE_AUTHOR="Maeve Lonergan, Veronica Longley, Sorin Macaluso, Lillian McPadden";
        include "file_author.php";
        
        ?>

        
    </main>

    <br>
    <!-- Copy right-->
    </body>
</html>
