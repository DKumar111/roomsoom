<?php
include 'dbconnect.php';

if(isset($_POST['send_message'])){
    $subject = "Message form Roomsoom website";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $toEmail = "dk9094293@gmail.com";

//    $sql = "INSERT INTO `roomsoom_email`(`name`, `phone`, `city`) 
//     VALUES ('$name','$phone','$city')";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }


   $headers = [
    'Name' =>  $name,
    'Phone Number' => $phone,
    'Message' => $message
];

$headers = implode("\r\n", $headers);


    // $mailHeaders = "Name: ". $fullname .
    // "\r\n company: " . $company .
    // "\r\n Email: " . $email .
    // "\r\n Phone: " . $phone .
    // "\r\n Interest: " . $interest .
    // "\r\n Budget: " . $budget .
    // "\r\n Message: " . $message . "\r\n";

    mail($toEmail, $subject, $name, $headers);
        echo "<script>alert('Your have recieved your message successfully!.')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
        
}
?>