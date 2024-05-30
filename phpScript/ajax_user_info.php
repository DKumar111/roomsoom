<?php
include 'dbconnect.php';
session_start();

if(isset($_SESSION['user_id'])){
    $get_user_id = $_SESSION['user_id'];

    echo $get_user_id;
}


?>