<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIIT ONLINE LIBRARY</title>
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://kit.fontawesome.com/07c9a11431.js" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</head>
<body>
    <header>
        <div class="slide">
            <div class="slidecaption">
                <img class="mainSlide" src="./img/Slide/1.jpg">
            </div>

            <img class="mainSlide" src="./img/Slide/2.jpg">
            <img class="mainSlide" src="./img/Slide/3.jpg">
        </div>
        
        <div class="topLeft">
            <div style="background-color:black;opacity:0.8;">
                <h2 id="date_time" style="color: white;padding:10px;"></h2>
                
                
            </div>
        </div>


        <?php
                function logIn() {
        
            echo' <div class="topRight">
                    <form method="POST" action="Login.php">
                    <input type="email"placeholder="E-mail" id="index_pg_mail" name="index_pg_mail">
                        <input type="password" placeholder="Password" id="index_pg_pwd" name="index_pg_pwd">
                        <button type="submit">Login</button> </br>
                        <a id="fosrget_pwd_link" class="right" href="forget_password.php">forget password</a>
                    </form>
                </div>';
                }

                function logout(){
                    global $userName;
                    echo "<div class=\"topRight\"><a href=\"./userProfile.php\">
                            <span class=\"username\">$userName</span></a>
                            <a href=\"logout.php\" class=\"btn primary\">Logout</a> </br>
                        </div>";
                }
        ?>

        <script>
            carousel();
            setInterval(time, 1000);
        </script>

    </header>

    <?php

    if (isset($_SESSION['userID'])){
        $userName = $_SESSION['NWI'];
        logout();
    }else{
        logIn();
    }
    ?>
