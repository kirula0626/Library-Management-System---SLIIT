<?php
    $con=new mysqli("localhost", "root", "", "lims");

    if ($con->connect_error) { 
        header("Location: ./error.php");
    }

    else{
        $displayCon ="<script>console.log('Connected Successfully')</script>";
        echo $displayCon;
    }
?>