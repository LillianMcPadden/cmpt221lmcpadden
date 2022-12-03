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
        <center><img src="logo.png"; width = "100%"; height = 300px></center>
        
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
        
        <!-- Disclaimer for the website-->
        <center><h1> Disclaimer </h1>
        <br>
        Please read the disclaimer below before using the Stellar Sneakers website operated by Maeve Lonergan, 
        Veronica Longley, Sorin Macaluso, Lillian McPadden.<br>
        <br>The contents of the website are the intellectual property of Sorin Macaluso. You are not allowed to<br>
        reuse, republish, or reprint any of the contents on this website without written consent.<br>
        <br>All posted information posted on Stellar Sneakers is used for the company so that we can insure that our customers have a<br>
        comfortable and easy experience on the website. We are committed to keeping the website up to date and accurate.<br>
        If anything is found to be incorrect or out of date please notify a IT representative.<br>
        
        <br>We are also not liable for any loss as a result of any inaccuracies or incompleteness. Or any problems that occurred<br>
        because of a disruption in the internet. Stellar Sneakers has no liability for any loss related to the data on this website.<br></center>


        <?php
        $FILE_AUTHOR="Veronica Longley";
        include "file_author.php";
        
        ?>
