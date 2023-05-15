<?php

require "config/constants.php";

$servername = sql200.epizy.com
;
$username = epiz_34185864;
$password = A1UVQSMhXIwV;
$db = epiz_34185864_XXX;

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>