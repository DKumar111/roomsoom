<?php
include 'dbconnect.php';
session_start();

if(isset($_POST['form_book_Now_Submit_btn']) && isset($_GET['property_id'])){
    // $property_ID = $_GET['property_id'];
    // $City = $_GET['city'];
    if(!isset($_SESSION['username'])){
        echo "<script>alert('Please login first to book property')</script>";
        echo "<script>window.open('../property_details.php?property_id= $property_ID&city= $City','_self')</script>";
    }else{
    
        $customer_name      = $_POST['name'];
        $customer_email     = $_POST['email'];
        $room_type          = $_POST['room-type'];
        $arr_date           = $_POST['arr_date'];
        $client_id          = $_SESSION['user_id'];
        $property_id        = $_GET['property_id'];

        $property_sql = "SELECT * FROM `properties` WHERE s_id = $property_id";
        $property_result = mysqli_query($conn, $property_sql);
        $property_row = mysqli_fetch_assoc($property_result);

        $city = $property_row['city'];
        $address = $property_row['property_address'];
        $price = $property_row['solo_room_price'];

        $book_sql = "INSERT INTO `roomsoom_booking`(`user_id`, `s_id`, `customer_name`,
         `customer_email`, `city`, `address`, `room_type`, `price`, `arrival_date`) 
        VALUES ('$client_id','$property_id','$customer_name','$customer_email','$city',
        '$address','$room_type','$price','$arr_date')";

            $sql_execut = mysqli_query($conn, $book_sql);  

        if($sql_execut){
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
            echo "<script>window.open('../summary_book.php?property_id= $property_id &city= $city','_self')</script>";
        }
            
    }
}
?>