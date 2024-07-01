<?php
include 'dbconnect.php';

if(!isset($_SESSION['username'])){
    echo "<script>alert('You are not logged in')</script>";
}else{
    if(isset($_POST['property_id'])){
        $p_id = $_POST['property_id'];

        $like_sql = "SELECT * FROM `properties` WHERE s_id = $p_id";
        $result = mysqli_query($con, $like_sql);
        $count = mysqli_fetch_assoc($result);
        if($cout == 1){
            echo "You liked this property";
        }
    }
}


?>