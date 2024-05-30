<?php
include 'dbconnect.php';
session_start();

if(isset($_POST['form_book_Now_Submit_btn'])){
    
    if(!isset($_SESSION['username'])){
        echo "<script>alert('Please login first to book property')</script>";
        echo "<script>window.open('../properties.php','_self')</script>";
    }else{
    
    $customer_name = $_POST['name'];
    $customer_email = $_POST['email'];
    $room_type = $_POST['room-type'];
    $arr_date = $_POST['arr_date'];
    // $dep_date = $_POST['dep_date'];
    $client_id = $_SESSION['user_id'];
    $property_id = $_GET['property_id'];

    $property_sql = "SELECT * FROM `properties` WHERE s_id = '$property_id'";
    $property_result = mysqli_query($conn, $property_sql);
    $property_row = mysqli_fetch_assoc($property_result);

    $city = $property_row['city'];
    $locality = $property_row['locality'];
    $address = $property_row['property_address'];
    $price = $property_row['solo_room_price'];

    $check_sql = "SELECT * FROM `roomsoom_booking` WHERE user_id = '$client_id' AND s_id = '$property_id'";
    $result = mysqli_query($conn, $check_sql);
    $rows_count = mysqli_num_rows($result);

    // if($rows_count>0){
    //     echo "<script>alert('You have already booked this property!')</script>";
    // }else{
        $book_sql = "INSERT INTO `roomsoom_booking`(`user_id`, `s_id`, `customer_name`, 
         `customer_email`, `city`, `locality`, `address`, `price`,`arrival_date`) 
        VALUES ('$client_id','$property_id','$customer_name','$customer_email', 
        '$city','$locality','$address','$price','$room_type','$arr_date')";

        $sql_execute = mysqli_query($conn, $book_sql);

        if($sql_execute){
            // echo "<script>alert('property booked successfully')</script>";
            $to = $customer_email;
            $subject = "You have successfully booked room at Roomsoom ";
            $message = "Thank you for booking room at 'Roomsoom'";
            $header = "From : do-notreply@roomsoom.com";
            $header.= "Content-type: text\html";

            $mail = mail($to, $subject, $message, $header);

            if($mail){
                echo "Thank you for booking room at Roomsoom";
            }

            echo "<script>alert('property booked successfully')</script>";
        }
    // }
}
}
?>