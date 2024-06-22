<?php
include 'dbconnect.php';
session_start();

if(isset($_POST['confirm_visit']) && isset($_GET['property_id'])){
    // $property_ID = $_GET['property_id'];
    // $City = $_GET['city'];
    if(!isset($_SESSION['username'])){
        echo "<script>alert('Please login first to book property')</script>";
        echo "<script>window.open('../property_details.php?property_id= $property_ID&city= $City','_self')</script>";
    }else{
    
        $arr_date     = $_POST['arr_date'];
        $time_slote   = $_POST['time_slote'];
        $property_ID  =  $_GET['property_id'];
        $user_id      = $_SESSION['user_id'];

        $property_sql = "SELECT * FROM `properties` WHERE s_id = $property_ID";
        $property_result = mysqli_query($conn, $property_sql);
        $property_row = mysqli_fetch_assoc($property_result);

        $city = $property_row['city'];
        $address = $property_row['property_address'];
        $price = $property_row['solo_room_price'];

        $book_sql = "INSERT INTO `visit_table`( `visit_date`, `visit_time`, `property_city`, `property_address`) 
        VALUES ('$arr_date','$time_slote','$city','$address')";

            $sql_execut = mysqli_query($conn, $book_sql);  

        if($sql_execut){
            $uid = $_SESSION['user_id'];
            $user_sql = "SELECT * FROM `roomsoom_user` WHERE user_id = $uid";
            $user_result = mysqli_query($conn, $user_sql);
            $row = mysqli_fetch_assoc($user_result);
            $email = $row['email'];
            $to = $email;
            $subject = "You have successfully scheduled a visit for room at Roomsoom ";
            $message = "Thank you for schedule a visit at 'Roomsoom'";
            // $header = "From : do-notreply@roomsoom.com";
            // $header.= "Content-type: text\html";

            $header = [
                'From' => 'do-notreplay@roomsoom.com',
                'City' =>  $city,
                'Address' =>  $address,
                'Price' => $price,
                'Message' => $message
            ];
            
            $header = implode("\r\n", $header);

            $mail = mail($to, $subject, $message, $header);

            if($mail){
                echo "Thank you for schedule a visit room at Roomsoom";
            }

            echo "<script>alert('Schedule visit is successfull')</script>";
            echo "<script>window.open('../property_details.php?property_id= $property_ID&city= $City','_self')</script>";
        }
            
    }
}
?>