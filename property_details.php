<?php   
include ('phpScript/dbconnect.php') ; 
include ('phpScript/functions.php') ; 
session_start();


if(isset($_GET['property_id'])){
    $property_id = $_GET['property_id'];

    $details_sql = "SELECT * FROM `properties` WHERE s_id = $property_id";
    $details_result = mysqli_query($conn, $details_sql);
    $row = mysqli_fetch_assoc($details_result);

    $owner = $row['property_owner'];
    $city = $row['city'];
    $locality = $row['locality'];
    $property_type = $row['property_type'];
    $property_address = $row['property_address'];
    $gender = $row['gender'];
    $solo_room_price = $row['solo_room_price'];
    $two_sharing_price = $row['two_sharing_price'];
    $three_sharing_price = $row['three_sharing_price'];
    $property_image = $row['property_image'];
    $property_image2 = $row['property_image2'];
    $property_image3 = $row['property_image3'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>RoomSoom Property Details Page</title>
    <link rel="shortcut icon" href="asset/images/logo.png" type="image/x-icon">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===FONTAWESOME CDN=== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ===/FONTAWESOME CDN=== -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- =======GOOGLE FONT CDN======= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
    </style>

    <style>
    #more {
        display: none;
    }
    </style>

    <script>
    $(document).ready(function() {
        $("#apply-coupon").click(function() {
            $(".principle-amount").after(
                "<div style='display:flex; justify-content:space-between;padding-top:1rem;' class=''><div style='color:#e86d66; font-style: italic;' class=''>Coupon Amount</div> <div style='color:#e86d66; font-style: italic;' class='coupon-value'>Rs. 600</div> </div>"
            );
        });
    });
    </script>

    <style>
    /* Style the tab */
    .Tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        display: flex;
    }

    /* Style the buttons inside the tab */
    .Tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .Tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .Tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .Tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
    </style>

</head>

<body>
    <!-- ===== HEADER SECTION ===== -->
    <?php  include './header_footer/header.php' ; ?>
    <!-- ===== /HEADER SECTION ===== -->



    <div class="wrapperTop">
        <div class="propertyslider_container__yy2h4">
            <div class="propertyslider_sliderMain__sqGCA">
                <div class="propertyslider_mainView__Ot6ME">
                    <div class="propertyslider_right__MHyDo">
                        <!-- Slideshow container -->
                        <div class="property_map_area">
                            <div class="map_area_address_section">
                                <div class="map_area_tagline">Roomsoom Primus</div>
                                <div class="map_area_address">H 184, , Sector 101, Noida, UP - 201303</div>
                            </div>
                            <a href="https://www.google.com/maps/search/B-160,+first+floor,+A+Block,+Sector+15,+Noida,+Uttar+Pradesh+201301/@28.5831668,77.3062363,16z/data=!3m1!4b1?entry=ttu"
                                target="_blank" class="map_section">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <span class="location_text">View in map</span>
                            </a>
                        </div>
                        <div class="slideshow-container">
                            <span
                                style="border: 1px solid gray; color:black; border-radius:4px; margin-left:88%; background-color: white;"
                                class="gender__tab"><?php echo $gender  ?></span>
                            <!-- Full-width images with number and caption text -->
                            <div class="mySlides fade">
                                <!-- <div class="numbertext">1 / 3</div> -->
                                <img src="asset/property_image/<?php  echo $property_image ?>"
                                    style="width:100%; height: 100%;">
                                <!-- <div class="text">Caption Text</div> -->
                            </div>

                            <div class="mySlides fade">
                                <!-- <div class="numbertext">2 / 3</div> -->
                                <img src="asset/property_image/<?php  echo $property_image2 ?>"
                                    style="width:100%; height: 100%;">
                                <!-- <div class="text">Caption Two</div> -->
                            </div>

                            <div class="mySlides fade">
                                <!-- <div class="numbertext">3 / 3</div> -->
                                <img src="asset/property_image/<?php  echo $property_image3 ?>"
                                    style="width:100%; height: 100%;">
                                <!-- <div class="text">Caption Three</div> -->
                            </div>

                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>
                    </div>

                    <div class="propertyslider_left__eNBPP">
                        <div class="propertyslider_firstMain__X40rC">
                            <div id="formbold-main-wrapper" class="formbold-main-wrapper">
                                <div class="formbold-form-wrapper">
                                    <form class="multiple_step_form"
                                        action="phpScript/payment.php?property_id=<?php echo $property_id ?>"
                                        method="POST" name="mainForm">
                                        <div class="formbold-steps">
                                            <ul>
                                                <li class="formbold-step-menu1 active">
                                                    <span><i class="fa-solid fa-bed"></i></span>
                                                    <p style="" class="formbold-step-menu-text active2">Room Selection & Pricing
                                                    </p>
                                                </li>
                                                <li class="formbold-step-menu2">
                                                    <span><i class="fa-solid fa-calendar-days"></i></span>
                                                    <p class="formbold-step-menu-text">Joining Date</p>
                                                </li>
                                                <li class="formbold-step-menu3">
                                                    <span><i class="fa-regular fa-newspaper"></i></span>
                                                    <p class="formbold-step-menu-text">Summary</p>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="formbold-form-step-1 active">
                                            <div class="formbold-input-flex">
                                                <div>
                                                    <!-- <label for="firstname" class="formbold-form-label"> First name
                                                    </label>
                                                    <input type="text" name="firstname" placeholder="Andrio"
                                                        id="firstname" class="formbold-form-input" /> -->
                                                    <div style="color:black;" class="">Select Sharing Type</div>
                                                </div>
                                                <div style="display:flex; gap: 1rem;">
                                                    <!-- <label for="lastname" class="formbold-form-label"> Last name
                                                    </label>
                                                    <input type="text" name="lastname" placeholder="Dolee" id="lastname"
                                                        class="formbold-form-input" /> -->
                                                    <p class="room_type_btn" style="color:black;">Private</p>
                                                    <p class="room_type_btn" style="color:black;">Two Sharing</p>
                                                    <p class="room_type_btn" style="color:black;">Three Sharing</p>
                                                </div>
                                            </div>

                                            <div class="formbold-input-flex">
                                                <!-- <div>
                                                    <label for="dob" class="formbold-form-label"> Date of Birth </label>
                                                    <input type="date" name="dob" id="dob"
                                                        class="formbold-form-input" />
                                                </div> -->
                                                <!-- <div>
                                                    <label for="email" class="formbold-form-label"> Email Address
                                                    </label>
                                                    <input type="email" name="email" placeholder="example@mail.com"
                                                        id="email" class="formbold-form-input" />
                                                </div> -->
                                                <div style="color:black;" class="">Select Product Plan</div>
                                                <div class="">
                                                    <div class="price_tag">

                                                        <div style="padding-right:8rem;display:flex;justify-content:center;align-items:center;gap:0.4rem;"
                                                            class="">
                                                            <span class=""><input type="radio" name="room_price"
                                                                    value="<?php  echo $solo_room_price ?>" id="price1"
                                                                    required="required"></span>
                                                            <div class="">
                                                                <p class="price_para" style="">Private</p>
                                                                <!-- <p class="price_para" style="">Get 13% off on Rent</p> -->
                                                            </div>
                                                        </div>
                                                        <div id="private" style="color:black;"
                                                            class="rent_price tab-content">Rs.
                                                            <?php  echo $solo_room_price ?>/month*
                                                        </div>
                                                    </div>
                                                    <div class="price_tag">

                                                        <div style="padding-right:8rem;display:flex;justify-content:center;align-items:center;gap:0.4rem;"
                                                            class="">
                                                            <span class=""><input type="radio" name="room_price"
                                                                    value="<?php  echo $two_sharing_price ?>"
                                                                    id="price2" required="required"></span>
                                                            <div class="">
                                                                <p class="price_para" style="">Two Sharing</p>
                                                                <!-- <p class="price_para" style="">Get 8% off on Rent</p> -->
                                                            </div>
                                                        </div>
                                                        <div id="two_sharing" style="color: black;"
                                                            class="rent_price tab-content">Rs.
                                                            <?php  echo $two_sharing_price ?>/month*
                                                        </div>
                                                    </div>
                                                    <div class="price_tag">

                                                        <div style="padding-right:8rem;display:flex;justify-content:center;align-items:center;gap:0.4rem;"
                                                            class="">
                                                            <span class=""><input type="radio" name="room_price"
                                                                    value="<?php  echo $three_sharing_price ?>"
                                                                    id="price3" required="required"></span>
                                                            <div class="">
                                                                <p class="price_para" style="">Three Sharing</p>
                                                                <!-- <p class="price_para" style="">Get 4% off on Rent</p> -->
                                                            </div>
                                                        </div>
                                                        <div id="three_sharing" style="color: black;"
                                                            class="rent_price tab-content">Rs.
                                                            <?php  echo $three_sharing_price ?>/month*
                                                        </div>
                                                    </div>
                                                    <!-- <div class="price_tag">
                                                        <div style="padding-right:8rem;" class="">
                                                        <span class=""><input type="radio" name="room_price" value="5000" id="price4" required="required"></span>
                                                            <p class="price_para" style="">Basic package</p>
                                                            <p class="price_para" style="">Basic Plan</p>
                                                        </div>
                                                        <div id="" style="color: black;" class="rent_price">Rs. 5000/month*
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="coupon">
                                                    <div style="color:black;" class="coupon_heading">Available Coupons
                                                    </div>
                                                    <div style="border:1px solid gray;border-radius:6px;display:flex;justify-content:space-between;align-items:center; padding:0.5rem;"
                                                        class="coupon_details">
                                                        <div style="display:flex;flex-direction:column;"
                                                            class="coupon_left">
                                                            <p style="color:black;">Save Rs. <span
                                                                    id="couponAmount">600</span><span
                                                                    style="padding-left:0.4rem; color: red;"
                                                                    id="available-coupon">ROOMSOOMSAFENOI</span></p>
                                                            <span style="color:black;">Rs. 600 off on
                                                                pre-booking.</span>
                                                            <span style="color:black;">T & C </span>
                                                        </div>
                                                        <div style="color:black;cursor:pointer;font-size:0.7rem;color:red;font-weight:600;"
                                                            class="coupon_right" onclick="changeText()"
                                                            id="apply-coupon">Apply</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div>
                                                <label for="address" class="formbold-form-label"> Address </label>
                                                <input type="text" name="address" id="address"
                                                    placeholder="Flat 4, 24 Castle Street, Perth, PH1 3JY"
                                                    class="formbold-form-input" />
                                            </div> -->
                                        </div>

                                        <div class="formbold-form-step-2">
                                            <div>
                                                <div style="color:black;" class="joiningDate">Joining Date <span
                                                        style="color:red;">*</span></div>
                                                <input type="date" name="date" id="myDate" placeholder="dd-mm-yyyy"
                                                    class="formbold-form-input" onclick="disablePastDates()"
                                                    required="required" />
                                                <!-- <label for="message" class="formbold-form-label"> Message </label>
                                                <textarea rows="6" name="message" id="message"
                                                    placeholder="Type your message"
                                                    class="formbold-form-input"></textarea> -->
                                            </div>
                                        </div>

                                        <div class="formbold-form-step-3">
                                            <div class="summary_details">
                                                <div style="color:black;" class="room&pricing">Room Type & Pricing</div>
                                                <div class="price_tag">
                                                    <div class="">
                                                        <p style="color:black;font-size: 01rem;">Plan</p>
                                                        <!-- <p style="color:black;font-size: 0.7rem;">Book for 12Months. Get
                                                            18% of on Rent</p> -->
                                                    </div>
                                                    <div style="color: black;font-size:0.7rem;" id="selected_room_price"
                                                        class="">
                                                    </div>
                                                </div>
                                                <div style="display:flex;justify-content:space-between;align-items:center;padding:0.5rem; border:1px solid gray; border-radius:6px; margin-bottom: 0.4rem;"
                                                    class="applied_coupon_details">
                                                    <span style="color:black;">Applied Coupon</span>
                                                    <span id="coupon-in-summary" style="color:red;"></span>
                                                </div>
                                                <div class="summary_date_tag">
                                                    <span></span>
                                                    <p style="color:black;">Joining Date</p>
                                                    <p style="color:black;padding-left:1rem;" id="selected_date"></p>
                                                </div>
                                                <div class="occupant_details">
                                                    <div style="color:black; text-decoration:underline;" class="">
                                                        Occupant Details</div>
                                                    <div style="color:black;" class="">
                                                        <span><?php
                                                        if(isset($_SESSION['login'])){
                                                             echo $_SESSION['username'] ;
                                                        }else{
                                                            echo "<span style='color:red;'>You are not</span> ";
                                                        }
                                                        ?></span>
                                                        <span><?php
                                                        if(isset($_SESSION['login'])){
                                                             echo $_SESSION['mobile_number'];
                                                        }else{
                                                            echo "<span style='color:red;'>logged in</span>";
                                                        }
                                                        ?></span>
                                                    </div>
                                                </div>
                                                <div class="token_amount">
                                                    <div style="color: black;" class="token_text">Token Amount</div>
                                                    <div style="border: 1px solid gray; border-radius: 6px; padding:0.5rem 0.5rem;"
                                                        class="">
                                                        <div style="display:flex; justify-content:space-between;"
                                                            class="principle-amount">
                                                            <div class="">
                                                                <p class="price_para">Token Amount</p>
                                                                <p class="price_para">A token amount is charged for
                                                                    booking request</p>
                                                            </div>
                                                            <div style="color:black;" class="principle-value">Rs. <span
                                                                    id="principle-value">1000</span></div>
                                                        </div>
                                                        <div style="display:flex; justify-content:space-between;padding-top:1rem;padding-bottom:0.5rem;"
                                                            class="">
                                                            <div style="color:black; font-size:0.7rem" class="">
                                                                GST-18%(as applicable)</div>
                                                            <div style="color:black;" class="gst-value">Rs. <span
                                                                    id="gst-value">180</span></div>
                                                        </div>
                                                        <hr />
                                                        <div style="display:flex; justify-content:space-between;padding-top:1rem;"
                                                            class="">
                                                            <div style="color:black;" class="">Payable Amount</div>
                                                            <div style="color:black;" class="total_payable-amount">Rs.
                                                                <span id="total_payable_amount">1,180</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="formbold-form-btn-wrapper">
                                            <div id="popup_book_now_Btn">SCHEDULE A VISIT</div>
                                            <button class="formbold-back-btn">
                                                Back
                                            </button>

                                            <button name="requesting_booking" class="formbold-btn">
                                                CONFIRM DETAILS
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="details_container__hAzbR">
            <div class="details_bread__7PH38">

            </div>
            <div class="details_Main__1syxk">
                <div class="details_left__75hiv">
                    <div class="details_proName__ENFDp">
                     

                    </div>
                    <div class="details_details__q4pwn">
                        <div class="details_priceMainPhone__OCOuq">
                            <h4>Pricing</h4>
                            <div class="details_priceDiv__mMDd0">
                                <h2>Rent Starting at</h2>
                                <h3>Rs. <?php echo $solo_room_price ?><span>/mo*</span></h3>
                            </div>
                            <p>*The starting price shown excludes GST. Final prices maylety depending on room
                                occupancy, personalised services, and additional features.</p>
                        </div>
                        <div class="details_address__Z4zCU">
                            <div class="details_adText__2hWrK">
                                <h4>Address
                                </h4>
                                <p><?php  echo $property_address   ?></p>
                            </div>
                            <h5>Room Type : <span>Private Rooms<span>,</span></span><span>Shared
                                    Rooms<span>,</span></span></h5>
                        </div>
                        <div class="details_address__Z4zCU">
                            <div class="details_adText__2hWrK">
                                <h4>Room Details</h4>
                                <p style="font-size:0.8rem; width: 100%; padding: 1rem 0;">All room type have some
                                    variants that are larger in size or have extra Amenities.</p>
                            </div>
                            <div class="room_details_section">
                                <div class="room_details_subsection">
                                    <span>Private Room</span>
                                    <span style="font-size:0.7rem;">Starting from</span>
                                    <div style="display:flex; justify-content:center;align-items:center;" class="">
                                        <span style="font-weight:bold;">Rs. <?php echo $solo_room_price ?>/</span>
                                        <span style="font-size: 0.7rem;">month*</span>
                                    </div>

                                </div>
                                <div class="room_details_subsection">
                                    <span>Two Sharing</span>
                                    <span style="font-size:0.7rem;">Starting from</span>
                                    <div style="display:flex; justify-content:center;align-items:center;" class="">
                                        <span style="font-weight:bold;">Rs. <?php echo $two_sharing_price ?>/</span>
                                        <span style="font-size: 0.7rem;">month*</span>
                                    </div>
                                </div>
                                <div class="room_details_subsection">
                                    <span>Three Sharing</span>
                                    <span style="font-size:0.7rem;">Starting from</span>
                                    <div style="display:flex; justify-content:center;align-items:center;" class="">
                                        <span style="font-weight:bold;">Rs. <?php echo $three_sharing_price ?>/</span>
                                        <span style="font-size: 0.7rem;">month*</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="details_privilages__yOiR9">
                            <div>
                                <div class="privilages_container__Ox6bT">
                                    <div class="privilages_iconsSlide__7vSa_">
                                        <div class="privilages_adText__fOmum">
                                            <h4>Amazing <span>Amenities</span></h4>
                                        </div>
                                        <div class="privilages_icons__phFcg">

                                        </div>
                                    </div>
                                    <div class="privilages_amenMain__wAW29">
                                        <div class="privilages_amenBox__4Cp4T" id="btnClick">
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS">
                                                  
                                                    <i class="fa-solid fa-couch"></i>
                                                </div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>Fully Furnished</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS">
                                                   
                                                    <i class="fa-solid fa-message"></i>
                                                </div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>24*7 Assistance</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS">
                                                  
                                                    <i class="fa-solid fa-brush"></i>
                                                </div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>Daily Professional Housekeeping</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS">
                                                  
                                                    <i class="fa-solid fa-shirt"></i>
                                                </div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>Laundry at Your Doorstep</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS">
                                                   
                                                    <i class="fa-solid fa-person-military-rifle"></i>
                                                </div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>3-Tier Security</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS">
                                                   
                                                    <i class="fa-solid fa-wifi"></i>
                                                </div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>High-speed Wifi</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS">
                                                   
                                                    <i class="fa-solid fa-utensils"></i>
                                                </div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>Healthy Gourmet Meals</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details_right__NeEnK">
                    <div class="details_priceCont__0ad_h">
                        <div class="details_signupForm__mFARA">
                            <h2>Want to know more?</h2>
                            <p>Leave your contact info and we'll reach out shortly.</p>
                            <div class="details_formMain__CDX_B">
                                <form>
                                    <h3>Name*</h3><input type="text" name="name" id="name" placeholder="Name"
                                        required="">
                                    <h3>Phone*</h3><input type="text" name="phone" id="phone" placeholder="Phone"
                                        required=""><input type="hidden" id="gclid_field" name="gclid_field"
                                        value=""><input type="submit" class="details_btn__R5Tje" value="Submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details_BookNow__35aUc">
                <div class="details_btn__R5Tje"><button>
                        <p>Book Now</p>
                    </button></div>
            </div>
            <div class="details_conSideBar__M1rw4">
                <div class="details_sideNavbarHide__u_Yc7" id="details_hideRequestCall__5zjYB">
                    <div class="Request_sidenavbarwrap__aGiHI">
                        <div class="Request_navbarclose__3OV_2"><i class="Request_ticlose__EOdR2"><svg width="16"
                                    height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 6L6 18" stroke="#ffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M6 6L18 18" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg></i></div>
                        <form class="Request_request_form_hide__kCv2O">
                            <div class="Request_row__6M_4y">
                                <div class="Request_collg12__ydKml">
                                    <div class="Request_form_group__Oji2N">
                                        <h4 class="Request_requestheading__9BKm5">Name*</h4><input type="text"
                                            class="Request_form_control___8p8V Request_request_call__31CJk"
                                            placeholder="Name" name="name" id="name" required="" value="">
                                    </div>
                                </div>
                                <div class="Request_collg12__ydKml">
                                    <div class="Request_form_group__Oji2N undefined">
                                        <h4 class="Request_requestheading__9BKm5">Phone Number*</h4>
                                        <div class="Request_flagInput__hbIfw">
                                            <div class="Request_requestabs__pGqBe"><img alt="indian flag"
                                                    srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Findiaflag.fabd691d.png&amp;w=48&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Findiaflag.fabd691d.png&amp;w=96&amp;q=75 2x"
                                                    src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Findiaflag.fabd691d.png&amp;w=96&amp;q=75"
                                                    width="48" height="48" decoding="async" data-nimg="1"
                                                    class="Request_requestimg__IJ8hp" loading="lazy"
                                                    style="color: transparent;">
                                                <p class="Request_request_phone__dIxxQ">+91</p>
                                            </div><input type="number"
                                                class="Request_form_control___8p8V Request_request_call__31CJk undefined"
                                                placeholder="Phone" name="phone" id="phone" required="" value="">
                                        </div>
                                    </div>
                                </div><input type="hidden" id="gclid_field" name="gclid_field" value="">
                                <div class="Request_collg12__ydKml Request_reqBtn__wNQr6"><input type="submit"
                                        class="Request_requestbtn__1OWxp" value="Request Call"></div>
                            </div>
                        </form>
                        <p class="Request_getBack__fl85o">we will get back to you in less <br> than 24 hours*</p>
                    </div>
                </div>
            </div>
        </div>

        <?php      
            }
       ?>

        <!-- =======NEAR BY PROPERTY SECTION========= -->
        <div class="nearby_properties_section">
            <div class="nearby_section_heading">
                <h2>Nearby Properties</h2>
            </div>
            <div class="nearby_slider_btn">
                <button class="left_btn_property">
                    < </button>
                        <button class="right_btn_property">
                            >
                        </button>
            </div>
            <div class="property_card_slider_section" id="property_card_slider_section_id">
                <?php    get_nearby_property();    ?>
            </div>
        </div>
        <!-- =======NEAR BY PROPERTY SECTION ENDS HERE========= -->

        <section class="testimonials_containerMain__M_1ES">

            <!-- Tabs Detail -->
            <div class="tabs">
                <span data-tab-value="#tab_1">Delhi</span>
                <span data-tab-value="#tab_2">Noida</span>
                <span data-tab-value="#tab_3">Gurgaon</span>
            </div>

            <!-- Tab content -->
            <div class="tab-content">
                <div class="tabs__tab active" id="tab_1" data-tab-info>
                    <div class='Tabs_Content'>
                        <?php
                    $sql = "SELECT locality FROM `properties` WHERE city LIKE '%delhi%' ";
                    $result = mysqli_query($conn, $sql) or die("SQL Query failed");

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $city_area = $row['locality'];
                           echo  " <a href='#'>$city_area</a>";
                        }
                    }

                    ?>
                    </div>
                </div>
                <div class="tabs__tab" id="tab_2" data-tab-info>
                    <div class="Tabs_Content">
                        <?php
                    $sql = "SELECT locality FROM `properties` WHERE city LIKE '%noida%' ";
                    $result = mysqli_query($conn, $sql) or die("SQL Query failed");

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $city_area = $row['locality'];
                           echo  "<a href='#'>$city_area</a> ";
                        }
                    }

                    ?>
                    </div>

                </div>
                <div class="tabs__tab" id="tab_3" data-tab-info>
                    <div class="Tabs_Content">
                        <?php
                    $sql = "SELECT locality FROM `properties` WHERE city LIKE '%gurgaon%' ";
                    $result = mysqli_query($conn, $sql) or die("SQL Query failed");

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            $city_area = $row['locality'];
                           echo  "<a href='#'>$city_area</a>";
                        }
                    }

                    ?>
                    </div>

                </div>
            </div>
            <!-- </div> -->
        </section>
        <div class="connect_container__bcQb3">
            <div class="connect_conMain__cK61x">
                <div class="connect_contDiv__7rJQb"><img alt="tulip"
                        src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftulip.672e4c41.png&w=1920&q=75"
                        width="689" height="608" decoding="async" data-nimg="1" loading="lazy"
                        style="color: transparent;">
                    <div class="connect_content__pCbDN">
                        <h2>Connect with Roomsoom</h2>
                        <p>Drop your concern, query or <br> feedback and we will get back <br> to you in no time.</p>
                    </div>
                </div>
                <div class="connect_formDiv__8Vdin">
                    <div class="connect_content__pCbDN">
                        <h2>Connect with Roomsoom</h2>
                        <p>Drop your concern, query or <br> feedback and we will get back <br> to you in no time.</p>
                    </div>
                    <div class="connect_formSec__aDH2S">
                        <form action="phpScript/email_msg.php" method="post">
                            <input type="text" placeholder="Name" class="connect_first__fZlm4" name="name" required=""
                                id="name">
                            <input type="text" placeholder="Phone Number" name="phone" required="" id="phone">
                            <input type="text" placeholder="Query/Concern" class="undefined connect_textarea__8_xfI"
                                name="message" id="message">
                            <input type="hidden" id="gclid_field" name="gclid_field" value="">
                            <div class="connect_btn__ywWeC">
                                <input type="submit" class="connect_btnVal__bocrs" name="send_message"
                                    value="Send message">
                            </div>
                        </form>
                        <div class="connect_support__UbvMq">
                            <p>**You’d hear from us in the next 24 hours, but if you don’t, reach out at
                                contact@roomsoom.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCHEDULE VISIT SECTION START HERE -->
    <div id="myModal" class="modal">

        <div class="modal-content">
            <div style="margin: 0 auto; width: 100%;display:flex; justify-content:center; align-items:center;" class="">
                Schedule A Visit</div>
            <span onclick="closeForm()" class="close_booking_form">&times;</span>
            <div class="book_now_form">
                <div class="book_now_form_heading">
                    <h2>When do you want to visit the property</h2>
                </div>
                <form class="book_form_area"
                    action="phpScript/schedule_visit.php?property_id=<?php echo $property_id ?>" method="POST">
                    <div class="book-form-content">
                        <div class="book_now_form_control">
                            <p style="font-size:0.7rem;">Select the date you want to schedule your visit on</p>
                            <label>Arrival Date: </label>
                            <input type="date" name="arr_date" class="date" required="required" id="Schedul-myDate"
                                onclick="disableMyPastDates()">
                        </div>
                        <div class="book_now_form_control">
                            <p style="font-size:0.7rem;">Select the timeslot which suits the best for you</p>
                            <div class="time_slote_section">
                                <select style="border:1px solid gray; padding:0.6rem 1.5rem;" name="time_slote" id=""
                                    required="required">
                                    <option>Select time slote</option>
                                    <option value="9am-10am">9am-10am </option>
                                    <option value="10am-11am">10am-11am</option>
                                    <option value="11am-12am">11am-12am</option>
                                    <option value="12am-1pm">12am-1pm </option>
                                    <option value="1pm-2pm">1pm-2pm </option>
                                    <option value="2pm-3pm">2pm-3pm </option>
                                    <option value="3pm-4pm">3pm-4pm </option>
                                    <option value="4pm-5pm">4pm-5pm </option>
                                    <option value="5pm-6pm">5pm-6pm </option>
                                    <option value="6pm-7pm">6pm-7pm </option>
                                    <option value="7pm-8pm">7pm-8pm </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="form_book_Now_Submit_btn" type="submit" name="confirm_visit">Confirm Visit</button>
                </form>
            </div>

        </div>

    </div>
    <!-- SCHEDULE VISIT SECTION ENDS HERE -->

    <a class="whatsapp-link" href="https://wa.me/+918810107070" target="_blank"><img class="whatsapp-icon"
            src="asset/images/whatsapp-icon1.png" alt=""></a>

    <!-- ===== FOOTER SECTION ===== -->
    <?php  include './header_footer/footer.php' ; ?>
    <!-- ===== /FOOTER SECTION ===== -->



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
    <script src="js/book_property.js"></script>
    <script src="js/multistep_summary.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/CityWise_Tab.js"></script>
    <!-- <script src="js/booking_tab.js"></script> -->

    <!-- =======BOOTSTRAP JS CDN========== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
    function myFunction() {
        let dots = document.getElementById("dots");
        let moreText = document.getElementById("more");
        let btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }


    function disablePastDates() {
        let today = new Date();
        let dd = String(today.getDate()).padStart(2, '0');
        let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        let yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("myDate").setAttribute("min", today);
    }

    function disableMyPastDates() {
        let today = new Date();
        let dd = String(today.getDate()).padStart(2, '0');
        let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        let yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("Schedul-myDate").setAttribute("min", today);
    }


    let prev = document.querySelector('.left_btn_property');
    let next = document.querySelector('.right_btn_property');
    let slide = document.getElementById("property_card_slider_section_id");

    prev.addEventListener('click', () => {
        slide.scrollLeft -= 200;
    })
    next.addEventListener('click', () => {
        slide.scrollLeft += 200;
    })



    var allWrap = document.getElementsByClassName('slider');

    for (var i = 0; i < allWrap.length; i++) {
        allWrap[i].classList.add('mySlider_' + i);

        var slider = new Slider('.mySlider_' + i);
        slider.addListeners();
    }


    function Slider(newclass) {
        this.buttons = document.querySelectorAll(newclass + ' button');
        this.items = document.querySelectorAll(newclass + ' .item');
        this.activeItem = 0;
        this.isSliding = false;

        this.addListeners = function() {
            this.buttons.forEach(el => el.addEventListener("click", this.slide))
        }

        this.slide = event => {
            if (!this.isSliding) {
                this.isSliding = true;
                var currentItem = this.activeItem;

                if (event.target === this.buttons[1]) {
                    this.activeItem === this.items.length - 1 ? this.activeItem = 0 : this.activeItem++;
                    //active slide out left
                    this.items[currentItem].classList.add('active-left');
                    //next slide in left
                    this.items[this.activeItem].classList.add('item-next', 'item-left');
                    //remove classes
                    setTimeout(() => {
                        this.items[currentItem].classList.remove('active-left', 'active');
                        this.items[this.activeItem].classList.remove('item-next', 'item-left');
                        //set new active item
                        this.items[this.activeItem].classList.add('active');
                        this.isSliding = false;
                    }, 1000)
                } else {
                    this.activeItem === 0 ? this.activeItem = this.items.length - 1 : this.activeItem--;
                    //active slide out right
                    this.items[currentItem].classList.add('active-right');
                    //prev slide in right
                    this.items[this.activeItem].classList.add('item-prev', 'item-right');
                    //remove classes
                    setTimeout(() => {
                        this.items[currentItem].classList.remove('active-right', 'active');
                        this.items[this.activeItem].classList.remove('item-prev', 'item-right');
                        //set new active item
                        this.items[this.activeItem].classList.add('active');
                        this.isSliding = false;
                    }, 1000)
                }
            }
        }
    }
    </script>

</body>

</html>