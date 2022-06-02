<?php

session_start();
session_destroy();

echo "Logout Successfully.";

header("Location: ./index.php");

?>