<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "proyecto");

if(isset($conn)){
    // echo 'db conectada';
}

?>