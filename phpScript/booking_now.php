<?php
include 'dbconnect.php';
session_start();

if(isset($_POST['form_book_Now_Submit_btn'])){
    if(!isset($_SESSION['username'])){
        echo "<script>alert('Please login first to book property')</script>";
        echo "<script>window.open('../properties.php','_self')</script>";
    }else{
    $property_id = $_GET['property_id'];
    $customer_name = $_POST['name'];
    $customer_gender = $_POST['gender'];
    $customer_age = $_POST['age'];
    $customer_email = $_POST['email'];
    $customer_phone = $_POST['phone'];
    $customer_profession = $_POST['profession'];

    $client_id = $_SESSION['user_id'];
    // echo $client_id;

    $check_sql = "SELECT * FROM `roomsoom_booking` WHERE user_id = '$client_id' AND s_id = '$property_id'";
    $result = mysqli_query($conn, $check_sql);
    $rows_count = mysqli_num_rows($result);

    if($rows_count>0){
        echo "<script>alert('You have already booked this property!')</script>";
    }else{
        $book_sql = "INSERT INTO `roomsoom_booking`(`user_id`, `s_id`, `customer_name`, `customer_gender`, 
        `customer_age`, `customer_email`, `customer_mobile`, `customer_profession`) 
        VALUES ('$client_id','$property_id','$customer_name','$customer_gender','$customer_age','$customer_email',
        '$customer_phone','$customer_profession')";

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
    }
}
}
?>