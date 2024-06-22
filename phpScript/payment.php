<?php
// if($payment){
//     $roomPrice = $_POST['room_price'];
//     $date = $_POST['date'];
//     $username = $_SESSION['username'];
//     $user_mobile = $_SESSION['mobile_number'];

//     $sql = "INSERT INTO `roomsoom_booking`(`user_id`, `s_id`, `customer_name`, `customer_mobile`,
//      `city`, `address`, `room_type`, `plan`, `joining_date`) 
//     VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]',
//     '[value-9]','[value-10]')";
// }

include 'dbconnect.php';
session_start();
if(!isset($_SESSION['login'])){
    echo "<script>alert('You are not logged in')</script>";
    echo "<script>history.back()</script>";
}elseif($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // $property_ID = $_GET['property_id'];
    // $City = $_GET['city'];
        $plan            = $_POST['room_price'];
        $joining_date    = $_POST['date'];
        $customer_name   = $_SESSION['username'];
        $customer_number = $_SESSION['mobile_number'];
        $customer_email  = $_SESSION['email'];
        $client_id       = $_SESSION['user_id'];
        $property_id     = $_GET['property_id'];

        $property_sql = "SELECT * FROM `properties` WHERE s_id = $property_id";
        $property_result = mysqli_query($conn, $property_sql);
        $property_row = mysqli_fetch_assoc($property_result);

        $city = $property_row['city'];
        $address = $property_row['property_address'];
        $price = $property_row['solo_room_price'];
        $type = $property_row['property_type'];

        if($plan == '' || $joining_date == '' ){
            echo "<script>alert('Please fill all the required fields.')</script>";
            echo "<script>history.back()</script>";
        }else{

        $book_sql = "INSERT INTO `roomsoom_booking`(`user_id`, `s_id`, `customer_name`, `customer_mobile`,
        `city`, `address`, `room_type`, `plan`, `joining_date`) 
        VALUES ('$client_id','$property_id','$customer_name','$customer_number','$city','$address','$type',
        '$plan','$joining_date')";

            $sql_execut = mysqli_query($conn, $book_sql);  

            if($sql_execut){
                $to = $customer_email;
                $subject = "You have successfully requested for booking room at Roomsoom ";
                $message = "Thank you for requesting booking room at 'Roomsoom'";
                $header = "From : do-notreply@roomsoom.com";
                $header.= "Content-type: text\html";

                $mail = mail($to, $subject, $message, $header);

                    if($mail){
                        echo "Thank you for booking room at Roomsoom";
                    }
                
                    echo "<script>alert('property booked successfully')</script>";
                    echo "<script>window.open('../property_details.php?property_id= $property_id &city= $city','_self')</script>";
            }
        } 
       }else{
        echo "Error Encountered";
    }

?>