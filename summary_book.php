<?php
include ('phpScript/dbconnect.php') ; 
include ('phpScript/functions.php') ; 
session_start();

if(isset($_GET['property_id'])){
    $property_id = $_GET['property_id'];

    $details_sql = "SELECT * FROM `roomsoom_booking` WHERE s_id = $property_id";
    $details_result = mysqli_query($conn, $details_sql);
    $row = mysqli_fetch_assoc($details_result);

    $name = $row['customer_name'];
    $email = $row['customer_email'];
    $property_type = $row['property_type'];
    $arr_date = $row['arrival_date'];
    $price = $row['price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary of booking</title>
    <link rel="shortcut icon" href="asset/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<style>
.booking_form_summary_main_div{
    width: 100%;
    display:flex; 
    justify-content:center; 
    align-items:center; 
    margin-top: 8rem
}

.booking_form_inner_div{
    padding: 2rem;
    border: 1px solid gray; 
    width: 40%; 
    display:flex; 
    justify-content:center; 
    align-items:center; 
    flex-direction:column; 
    gap: 2rem
}

@media screen and (min-width: 320px) and (max-width: 425px) {
    .booking_form_summary_main_div{
    width: 100%;
    
}
.booking_form_inner_div{
    padding: 2rem;
    width: 90%;
}
}

@media screen and (min-width: 426px) and (max-width: 768px) {
    .booking_form_inner_div{
    padding: 2rem;
    width: 70%;
}
}

</style>
<body >

<!-- HEADER -->
<?php include  'header_footer/header.php'; ?>
<!-- /HEADER -->

<div  class="booking_form_summary_main_div">
<div  class="booking_form_inner_div">
<h2>Summary of Booking</h2>
Name :- <?php echo $name; ?><br><br>
Email:- <?php echo $email; ?><br><br>
Room Type:- <?php echo $property_type; ?><br><br>
Arrival Date:- <?php echo $arr_date; ?><br><br>
Amount:- <?php echo $price; ?><br><br>

<a href="http://localhost/roomsoom/Stripe?property_id=<?php  echo $property_id  ?>">
<input type="submit" name="payment" value="Confirm and pay Now">
</a>
<button onclick="history.back()">Go Back</button>
</div>
</div>

<?php
}

?>

  <!-- =======JS FILES LINKS -->
  <script src="js/side_nav.js"></script>
    <script src="js/request-call.js"></script>
    <script src="js/cityCardSlide.js"></script>
    <!-- <script src="js/testimonCardSlide.js"></script> -->
    <script src="js/collapsiblFAQ.js"></script>
    <script src="js/explore_tab.js"></script>
    <script src="js/automatic_slide.js"></script>
    <script src="js/active_class.js"></script>
    <script src="js/bookNowPopup.js"></script>
    <script src="js/login_info_popup.js"></script>
    <script src="js/near-by-card-slide.js"></script>
</body>
</html>