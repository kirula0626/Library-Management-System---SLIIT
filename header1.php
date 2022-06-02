<?php session_start(); ?>

<script src="./js/main.js"></script>

<header>
    <div class="slide">
        <div class="slidecaption">
            <img class="mainSlide" src="./img/Slide/1.jpg">
        </div>

        <img class="mainSlide" src="./img/Slide/2.jpg">
        <img class="mainSlide" src="./img/Slide/3.jpg">
    </div>

    <div class="topLeft">
        <div>
            <h2 style="color: white;" id="date_time">
                <script>

                </script>
            </h2>


        </div>
    </div>


 
   <div class="topRight">
               
                <?php

                if(isset($_SESSION["u"])){
                    ?>
                    <span class="username"><?php echo $_SESSION["u"]["username"]; ?></span> 
                    <?php
                }else{
            
                }
                ?>
              
                    <button class="btn_logout" onclick="logout();">Logout</button> </br>
                
               
            </div>
  
    <script>
        carousel();
        setInterval(time, 1000);
    </script>

</header>
