<?php
include ('phpScript/dbconnect.php') ; 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Page</title>
    <link rel="shortcut icon" href="asset/images/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/user_profile.css">

    <!-- =======GOOGLE FONT CDN======= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
    </style>

</head>
<body>

<!-- HEADER -->
<?php  include 'header_footer/header.php' ;  ?>
<!-- /HEADER -->
    
    <div class="profile_main_section">
        <div class="profile_left_section">
            <h4>User Profile</h4>
            <div class="left_user_img_name">
                <img src="asset/images/testimonials-img/user1.webp" alt="">
            </div>
            <div class="link_section">
                <button  class="tablinks" onclick="openCity(event, 'User_Information')" id="defaultOpen" >User Information</button>
                <button  class="tablinks" onclick="openCity(event, 'Payments_Information')" >Payments Information</button>
                <button  class="tablinks" onclick="openCity(event, 'Booking_Information')" >Booking Information</button>
                <button  class="tablinks" onclick="openCity(event, 'Schedule_visit')" >Schedule Visit</button>
            </div>
        </div>
        <div class="profile_right_section">
            <div id="User_Information" class="tabcontent">
                <h1>User Information</h1>
                <table >
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile Number</th>
                            </tr>
                <?php
                if(isset($_SESSION['user_id'])){
                    $user_id = $_SESSION['user_id'];

                    $get_user_sql = "SELECT * FROM `roomsoom_user` WHERE user_id = $user_id";
                    $result = mysqli_query($conn, $get_user_sql);
                    $count = mysqli_num_rows($result);
                    if($count == 0){
                        echo "<h2>No Record Found</h2>";
                    }

                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['user_id'];
                        $name = $row['username'];
                        $email = $row['email'];
                        $mobile = $row['mobile_number'];

                        echo "
                        <tr>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$mobile</td>
                        </tr>
                        ";
                    }

                    echo "</table>";
                }

                ?>
            </div>
            <div id="Payments_Information" class="tabcontent">
                <h1>Payments Information</h1>
                <table >
                            <tr style="background-color:white; position: sticky; top: 0rem;">
                              <th>Email</th>
                              <th>Transection ID</th>
                              <th>Amount</th>
                              <th>Date</th>
                            </tr>
                <?php
                    if(isset($_SESSION['user_id'])){
                        $user_id = $_SESSION['user_id'];
                        $payment_sql = "SELECT * FROM `roomsoom_user` WHERE user_id = $user_id";
                        $payment_result = mysqli_query($conn, $payment_sql  );
                        $row3 = mysqli_fetch_assoc($payment_result);
                        $user_email = $row3['email'];
                        // echo $user_email;
                        $payment_query = "SELECT * FROM `payment` WHERE user_email = '$user_email'";
                        $query_result = mysqli_query($conn, $payment_query);
                        $count3 = mysqli_num_rows($query_result);
                        if($count3 == 0){
                            echo "<h3>No Payment History Available</h3>";
                        }
                        while($row4 = mysqli_fetch_assoc($query_result)){
                            $email = $row4['user_email'];
                            $trx_id = $row4['transection_id'];
                            $amount = $row4['amount'];
                            $date = $row4['date'];

                            echo "
                            <tr>
                              <td>$email</td>
                              <td>$trx_id</td>
                              <td> Rs. $amount/-</td>
                              <td>$date</td>
                            </tr>
                        ";
                        }
                        echo " </table>";
                    }


                ?>
            </div>
            <div id="Booking_Information" class="tabcontent">
                <h1 >Booking Information</h1>
                <table >
                            <tr style="background-color:white; position: sticky; top: 0rem;">
                              <th>Name</th>
                              <th>Email</th>
                              <th>City</th>
                              <th>Address</th>
                              <th>Checkin Date</th>
                              <th>Booking Date</th>
                            </tr>
                <?php
                if(isset($_SESSION['user_id'])){
                    $user_id = $_SESSION['user_id'];

                    $get_user_sql2 = "SELECT * FROM `roomsoom_booking` WHERE user_id = $user_id";
                    $result2 = mysqli_query($conn, $get_user_sql2);
                    $count2 = mysqli_num_rows($result2);
                    
                    if($count2 == 0){
                        echo "<h2>No Record Found</h2>";
                    }
                    
                    while($row2 = mysqli_fetch_assoc($result2)){
                        $customer_id = $row2['user_id'];
                        $customer_name = $row2['customer_name'];
                        $customer_mobile = $row2['customer_mobile'];
                        $city = $row2['city'];
                        $address = $row2['address'];
                        $arrvl_date = $row2['joining_date'];
                        $booking_date = $row2['booking_date'];
                        // $customer_mobile = $row2['customer_mobile'];
                        echo "
                            <tr>
                              <td>$customer_name</td>
                              <td>$customer_mobile</td>
                              <td>$city</td>
                              <td>$address</td>
                              <td>$arrvl_date</td>
                              <td>$booking_date</td>
                            </tr>
                        ";
                    }
                    echo " </table>";
                    
                }
                ?>
            </div>
            <div id="Schedule_visit" class="tabcontent">
                <h1 >Schedule for visit</h1>
                <table >
                            <tr style="background-color:white; position: sticky; top: 0rem;">
                              <th>S. No.</th>
                              <th>City</th>
                              <th>Address</th>
                              <th>Visit Date</th>
                              <th>Visit time</th>
                            </tr>
                <?php
                if(isset($_SESSION['user_id'])){
                    $user_id = $_SESSION['user_id'];

                    $get_user_sql2 = "SELECT * FROM `visit_table` WHERE user_id = $user_id";
                    $result2 = mysqli_query($conn, $get_user_sql2);
                    $count2 = mysqli_num_rows($result2);
                    
                    if($count2 == 0){
                        echo "<h2>No Record Found</h2>";
                    }
                    $count = 1;
                    while($row2 = mysqli_fetch_assoc($result2)){
                        $customer_id = $row2['user_id'];
                        $visit_date = $row2['visit_date'];
                        $visit_time = $row2['visit_time'];
                        $time = strftime($visit_time);
                        $property_city = $row2['property_city'];
                        $address = $row2['property_address'];
                        
                        // $customer_mobile = $row2['customer_mobile'];
                        echo "
                            <tr>
                              <td>$count</td>
                              <td>$property_city</td>
                              <td>$address</td>
                              <td>$visit_date</td>
                              <td>$time</td>
                            </tr>
                        ";
                        $count++;
                    }
                   
                    echo " </table>";
                    
                }
                ?>
            </div>
        </div>
    </div>

    <script src="js/login_info_popup.js"></script>
    <script src="js/side_nav.js"></script>

    <script>
function openCity(evt, btnName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(btnName).style.display = "flex";
  evt.currentTarget.className += " active";
  evt.currentTarget.style.color = " black";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>

</body>
</html>