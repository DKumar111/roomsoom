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

    <!-- ======BOOTSTRAP CSS CDN======= -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

    <script>
    src = "https://code.jquery.com/jquery-3.5.1.js" >
    </script>
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
                        <!-- <div class="propThum">
                            <div class="slick-slider slick-initialized" dir="ltr">
                                <div class="slick-list">
                                    <div class="slick-track"
                                        style="width: 6622px; opacity: 1; transform: translate3d(-2408px, 0px, 0px);">
                                        <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned"
                                            aria-hidden="true" style="width: 602px;">
                                            <div>
                                                <div class="propertyslider_sliderItem__3iog5" tabindex="-1"
                                                    style="width: 100%; display: inline-block;"><img
                                                        alt="Housr Coliving Southcity 1"
                                                       
                                                        src="asset/property-images/pg1.jpeg"
                                                        width="1000" height="500" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                            </div>
                                        </div>
                                        <div data-index="0" class="slick-slide" tabindex="-1" aria-hidden="true"
                                            style="outline: none; width: 602px;">
                                            <div>
                                                <div class="propertyslider_sliderItem__3iog5" tabindex="-1"
                                                    style="width: 100%; display: inline-block;"><img
                                                        alt="Housr Coliving Southcity 1"
                                                       
                                                        src="asset/property-images/pg2.jpg"
                                                        width="900" height="500" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                            </div>
                                        </div>
                                        <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true"
                                            style="outline: none; width: 602px;">
                                            <div>
                                                <div class="propertyslider_sliderItem__3iog5" tabindex="-1"
                                                    style="width: 100%; display: inline-block;"><img
                                                        alt="Housr Coliving Southcity 1"
                                                       
                                                        src="asset/property-images/pg4.webp"
                                                        width="900" height="500" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                            </div>
                                        </div>
                                        <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true"
                                            style="outline: none; width: 602px;">
                                            <div>
                                                <div class="propertyslider_sliderItem__3iog5" tabindex="-1"
                                                    style="width: 100%; display: inline-block;"><img
                                                        alt="Housr Coliving Southcity 1"
                                                       
                                                        src="asset/property-images/pg5.jpg"
                                                        width="900" height="500" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                            </div>
                                        </div>
                                        <div data-index="3" class="slick-slide slick-active slick-current" tabindex="-1"
                                            aria-hidden="false" style="outline: none; width: 602px;">
                                            <div>
                                                <div class="propertyslider_sliderItem__3iog5" tabindex="-1"
                                                    style="width: 100%; display: inline-block;"><img
                                                        alt="Housr Coliving Southcity 1"
                                                       
                                                        src="asset/property-images/pg6.webp"
                                                        width="900" height="500" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                            </div>
                                        </div>
                                        <div data-index="4" class="slick-slide" tabindex="-1" aria-hidden="true"
                                            style="outline: none; width: 602px;">
                                            <div>
                                                <div class="propertyslider_sliderItem__3iog5" tabindex="-1"
                                                    style="width: 100%; display: inline-block;"><img
                                                        alt="Housr Coliving Southcity 1"
                                                        
                                                        src="asset/property-images/pg7.webp"
                                                        width="900" height="500" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                            </div>
                                        </div>
                                        <div data-index="5" tabindex="-1" class="slick-slide slick-cloned"
                                            aria-hidden="true" style="width: 602px;">
                                            <div>
                                                <div class="propertyslider_sliderItem__3iog5" tabindex="-1"
                                                    style="width: 100%; display: inline-block;"><img
                                                        alt="Housr Coliving Southcity 1"
                                                        
                                                        src="asset/property-images/pg1.jpeg"vvvvvvv
                                                        width="900" height="500" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                            </div>
                                        </div>
                                        <div data-index="6" tabindex="-1" class="slick-slide slick-cloned"
                                            aria-hidden="true" style="width: 602px;">
                                            <div>
                                                <div class="propertyslider_sliderItem__3iog5" tabindex="-1"
                                                    style="width: 100%; display: inline-block;"><img
                                                        alt="Housr Coliving Southcity 1"
                                                       
                                                        src="asset/property-images/pg1.jpeg"
                                                        width="900" height="500" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                            </div>
                                        </div>
                                        <div data-index="7" tabindex="-1" class="slick-slide slick-cloned"
                                            aria-hidden="true" style="width: 602px;">
                                            <div>
                                                <div class="propertyslider_sliderItem__3iog5" tabindex="-1"
                                                    style="width: 100%; display: inline-block;"><img
                                                        alt="Housr Coliving Southcity 1"
                                                       
                                                        src="asset/property-images/pg1.jpeg"
                                                        width="900" height="500" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                            </div>
                                        </div>
                                        <div data-index="8" tabindex="-1" class="slick-slide slick-cloned"
                                            aria-hidden="true" style="width: 602px;">
                                            <div>
                                                <div class="propertyslider_sliderItem__3iog5" tabindex="-1"
                                                    style="width: 100%; display: inline-block;"><img
                                                        alt="Housr Coliving Southcity 1"
                                                        
                                                        src="asset/property-images/pg1.jpeg"
                                                        width="900" height="500" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                            </div>
                                        </div>
                                        <div data-index="9" tabindex="-1" class="slick-slide slick-cloned"
                                            aria-hidden="true" style="width: 602px;">
                                            <div>
                                                <div class="propertyslider_sliderItem__3iog5" tabindex="-1"
                                                    style="width: 100%; display: inline-block;"><img
                                                        alt="Housr Coliving Southcity 1"
                                                       
                                                        src="asset/property-images/pg1.jpeg"
                                                        width="900" height="500" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Slideshow container -->
                        <div class="slideshow-container">
                            <span class="gender__tab"><?php echo $gender  ?></span>
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

                        <!-- The dots/circles -->
                        <!-- <div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div> -->
                        <!-- SLIDE SHOW ENDS HERE -->
                    </div>


                    <div class="propertyslider_left__eNBPP">
                        <div class="propertyslider_firstMain__X40rC">
                            <div class="propertyslider_sliderItems__Oo1M2"><img alt=" Coliving Southcity 1"
                                    src="asset/property_image/<?php  echo $property_image2 ?>" width="700" height="700"
                                    decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></div>
                            <div class="propertyslider_sliderItems__Oo1M2"><img alt=" Coliving Southcity 1"
                                    src="asset/property_image/<?php  echo $property_image3 ?>" width="700" height="700"
                                    decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="details_container__hAzbR">
            <div class="details_bread__7PH38">
                <!-- <p class="breadcrumb"><span class="breadcrumb-item"><a href="/">Home</a></span><span
                        class="breadcrumb-item"><a href="/gurgaon">gurgaon</a></span><span class="breadcrumb-item"><a
                            href="/gurgaon/coliving-in-sector-30">coliving-in-sector-30</a></span><span
                        class="breadcrumb-item"><span>Roomsoom-Coliving-Southcity-1</span></span>
                </p> -->
            </div>
            <div class="details_Main__1syxk">
                <div class="details_left__75hiv">
                    <div class="details_proName__ENFDp">
                        <button id="popup_book_now_btn" class="property_book_now_btn">Book Now</button>
                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close_booking_form">&times;</span>
                                <div class="book_now_form">
                                    <div class="book_now_form_heading">
                                        <h2>Enter Booking Details</h2>
                                    </div>
                                    <form class="book_form_area"
                                        action="phpScript/booking_now.php?property_id=<?php echo $property_id ?>"
                                        method="POST">
                                        <div class="book_now_form_control">
                                            <label for="name">Name: </label>
                                            <input type="text" class="book_now_form_field" name="name" autocomplete="off" 
                                            placeholder="Enter your name" required="required" id="">
                                        </div>
                                        <div class="book_now_form_control">
                                            <label for="email">Email:</label>
                                            <input type="email" class="book_now_form_field" name="email"
                                                autocomplete="off" placeholder="Enter Your Email" required="required" id="">
                                        </div>
                                        <div class="book_now_form_control">
                                            <label for="email">Select Room Type: </label>
                                            <select name="room-type" id="room" required="required">
                                                <option>Choose Type</option>
                                                <option value="rent">Rent</option>
                                                <option value="pg">PG</option>
                                                <option value="family">Family</option>
                                            </select>
                                        </div>
                                        <div class="book_now_form_control">
                                            <label>Arrival Date: </label>
                                            <input type="date" name="arr_date" class="date" required="required" id="myDate" onfocus="disablePastDates()">
                                        </div>
                                        <button class="form_book_Now_Submit_btn" type="submit"
                                            name="form_book_Now_Submit_btn">Book Now</button>
                                    </form>
                                </div>

                            </div>

                        </div>
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
                                    <!-- <a href="https://www.google.com/maps/search/?api=1&amp;query=28.4663517,77.0562863&amp;query_place_id=null"
                                        target="_blank" class="btn-link" rel="noreferrer">
                                        <span>View on map <img
                                                alt="share"
                                                srcset="/_next/static/media/pin_drop.12fb6ded.svg 1x, /_next/static/media/pin_drop.12fb6ded.svg 2x"
                                                src="/_next/static/media/pin_drop.12fb6ded.svg" width="20" height="20"
                                                decoding="async" data-nimg="1" loading="lazy"
                                                style="color: transparent;"></span></a> -->
                                </h4>
                                <p><?php  echo $property_address   ?></p>
                            </div>
                            <h5>Room Type : <span>Private Rooms<span>,</span></span><span>Shared
                                    Rooms<span>,</span></span></h5>
                        </div>
                        <div class="details_hosted__dNz2l">
                            <div class="details_adText__2hWrK">
                                <h4>Hosted By</h4>
                                <div class="details_rmDiv__bvMbx">
                                    <div class="details_rmIcon__xx5bF"><span><img alt="person"
                                                srcset="https://housr.in/_next/static/media/person.c9c61c32.svg 1x, https://housr.in/_next/static/media/person.c9c61c32.svg 2x"
                                                src="https://housr.in/_next/static/media/person.c9c61c32.svg" width="70"
                                                height="70" decoding="async" data-nimg="1" loading="lazy"
                                                style="color: transparent;"></span></div>
                                    <div class="details_rmDetail__bT_3j">
                                        <h2><?php  echo $owner   ?></h2>
                                        <h3>Resident Manager</h3>
                                        <p>Language: <span>English and Hindi</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details_privilages__yOiR9">
                            <div>
                                <div class="privilages_container__Ox6bT">
                                    <div class="privilages_iconsSlide__7vSa_">
                                        <div class="privilages_adText__fOmum">
                                            <h4>Privileges</h4>
                                        </div>
                                        <div class="privilages_icons__phFcg">
                                            <!-- <span><img alt="right"
                                                    srcset="/_next/static/media/Expand_left.87a2448c.svg 1x, /_next/static/media/Expand_left.87a2448c.svg 2x"
                                                    src="/_next/static/media/Expand_left.87a2448c.svg" width="24"
                                                    height="24" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></span><span><img alt="right"
                                                    srcset="/_next/static/media/Expand_right.a41c922f.svg 1x, /_next/static/media/Expand_right.a41c922f.svg 2x"
                                                    src="/_next/static/media/Expand_right.a41c922f.svg" width="24"
                                                    height="24" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></span> -->
                                        </div>
                                    </div>
                                    <div class="privilages_amenMain__wAW29">
                                        <div class="privilages_amenBox__4Cp4T" id="btnClick">
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS"><img alt="Fully Furnished"
                                                        srcset="	https://housr.in/_next/static/media/chair.6977ebae.svg 1x, 	https://housr.in/_next/static/media/chair.6977ebae.svg 2x"
                                                        src="	https://housr.in/_next/static/media/chair.6977ebae.svg"
                                                        width="65" height="65" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>Fully Furnished</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS"><img alt="24*7 Assistance"
                                                        srcset="https://housr.in/_next/static/media/RM.ba86a7ca.svg 1x, https://housr.in/_next/static/media/RM.ba86a7ca.svg 2x"
                                                        src="https://housr.in/_next/static/media/RM.ba86a7ca.svg"
                                                        width="65" height="65" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>24*7 Assistance</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS"><img
                                                        alt="Daily Professional Housekeeping"
                                                        srcset="https://housr.in/_next/static/media/mop.b4133d66.svg 1x, https://housr.in/_next/static/media/mop.b4133d66.svg 2x"
                                                        src="https://housr.in/_next/static/media/mop.b4133d66.svg"
                                                        width="65" height="65" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>Daily Professional Housekeeping</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS"><img
                                                        alt="Laundry at Your Doorstep"
                                                        srcset="https://housr.in/_next/static/media/laundry.ce359a3a.svg 1x, https://housr.in/_next/static/media/laundry.ce359a3a.svg 2x"
                                                        src="https://housr.in/_next/static/media/laundry.ce359a3a.svg"
                                                        width="65" height="65" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>Laundry at Your Doorstep</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS"><img alt="3-Tier Security"
                                                        srcset="	https://housr.in/_next/static/media/Lock.d9a7b7f9.svg 1x, 	https://housr.in/_next/static/media/Lock.d9a7b7f9.svg 2x"
                                                        src="	https://housr.in/_next/static/media/Lock.d9a7b7f9.svg"
                                                        width="65" height="65" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>3-Tier Security</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS"><img alt="High-speed Wifi"
                                                        srcset="https://housr.in/_next/static/media/wifi.43a5877b.svg 1x, https://housr.in/_next/static/media/wifi.43a5877b.svg 2x"
                                                        src="https://housr.in/_next/static/media/wifi.43a5877b.svg"
                                                        width="65" height="65" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>High-speed Wifi</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS"><img alt="Healthy Gourmet Meals"
                                                        srcset="https://housr.in/_next/static/media/restaurant.ad35b402.svg 1x, https://housr.in/_next/static/media/restaurant.ad35b402.svg 2x"
                                                        src="https://housr.in/_next/static/media/restaurant.ad35b402.svg"
                                                        width="65" height="65" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>Healthy Gourmet Meals</h3>
                                                </div>
                                            </div>
                                            <div class="privilages_amenDiv__PVixW">
                                                <div class="privilages_amenIcon__W0qSS"><img alt="App-Enabled Living"
                                                        srcset="https://housr.in/_next/static/media/Mobile.1ef8b50c.svg 1x, https://housr.in/_next/static/media/Mobile.1ef8b50c.svg 2x"
                                                        src="https://housr.in/_next/static/media/Mobile.1ef8b50c.svg"
                                                        width="65" height="65" decoding="async" data-nimg="1"
                                                        loading="lazy" style="color: transparent;"></div>
                                                <div class="privilages_title__ROHii">
                                                    <h3>App-Enabled Living</h3>
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
                        <div class="details_priceMain__y1MZS">

                            <div class="details_priceDiv__mMDd0">
                                <h2>Rent Starting at</h2>
                                <h3>Rs. <?php echo $solo_room_price ?><span>/mo*</span></h3>
                            </div>
                            <p>*The starting price shown excludes GST. Final prices maylety depending on room
                                occupancy, personalised services, and additional features.</p>
                        </div>
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
        <div class="card_container__Klf5R">
            <div class="card_cityMain__lBQrv">
                <div class="card_title__TdvwU">
                    <h2>Nearby Properties</h2>
                </div>
                <div class="card_cardBox__uU7lZ">
                    <div class="wrapper">
                        <i id="left" class="fa-solid  fas fa-angle-left"></i>
                        <ul class="carousel">
                            
                                <?php 
                                    get_nearby_property();
                            ?>
                            
                        </ul>
                        <i id="right" class="fa-solid fas fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- =======NEAR BY PROPERTY SECTION ENDS HERE========= -->

        <section class="testimonials_containerMain__M_1ES">
            <div class="testimonials_title__SEhDx">
                <h2>What Roomsoom Homies have to say</h2>
            </div>
            <div class="testimonials_sliderDiv__P2irp">
                <div class="testimonials_mainCont__hmExz" id="btnClick">
                    <div class="testimonials_container__azBtq">
                        <div class="testimonials_contMain__vbNaQ">
                            <div>
                                <div class="testimonials_starCont__5L8Uc">
                                    <div class="testimonials_starMain__nd_FY">
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials_text__26X75">
                                    <p>Who doesn't want to stay at a place that feels like your second home and has
                                        all
                                        the basic amenities, from the gym to meals, at your fingertip? Well, this
                                        place
                                        offers you precisely that! Roomsoom’s serviced apartments are straight-up
                                        perfection! I have been a part of the Roomsoom community for over a year
                                        now, and
                                        it has been fantastic.</p>
                                </div>
                            </div>
                            <div class="testimonials_lastBoard__LA_M9">
                                <div class="testimonials_imageBox__4Oi6s"><img alt="Pritika Gupta"
                                        src="asset/images/testimonials-img/user1.webp" width="100" height="100"
                                        decoding="async" data-nimg="1" loading="lazy" style="color:transparent">
                                </div>
                                <div class="testimonials_nameBox__HmaIG">
                                    <h3>Pritika Gupta</h3>
                                    <h4>Pritika Gupta</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials_container__azBtq">
                        <div class="testimonials_contMain__vbNaQ">
                            <div>
                                <div class="testimonials_starCont__5L8Uc">
                                    <div class="testimonials_starMain__nd_FY">
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials_text__26X75">
                                    <p>My experience with Roomsoom has been great. The staff has been very diligent
                                        and
                                        thorough with their services. They take quite outstanding care of
                                        maintaining
                                        the hygiene of the place. For me, the highlight of my Roomsoom stay has been
                                        their
                                        wonderful food which is extremely nutritious and delicious and comes closest
                                        to
                                        home-cooked meals.</p>
                                </div>
                            </div>
                            <div class="testimonials_lastBoard__LA_M9">
                                <div class="testimonials_imageBox__4Oi6s"><img alt="Kashish Bajaj"
                                        src="asset/images/testimonials-img/user1.webp" width=" 100" height="100"
                                        decoding="async" data-nimg="1" loading="lazy" style="color:transparent"></div>
                                <div class="testimonials_nameBox__HmaIG">
                                    <h3>Kashish Bajaj</h3>
                                    <h4>Kashish Bajaj</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials_container__azBtq">
                        <div class="testimonials_contMain__vbNaQ">
                            <div>
                                <div class="testimonials_starCont__5L8Uc">
                                    <div class="testimonials_starMain__nd_FY">
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                        <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                src="https://housr.in/_next/static/media/Star.618c4448.svg" width="25"
                                                height="25" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials_text__26X75">
                                    <p>Roomsoom is the best Coliving space you'll find in Gurgaon. Here at Roomsoom,
                                        we get
                                        healthy meals, a recreational lounge with facilities like chess, a billiards
                                        table, a TT table, a play station and an excellent gym. It’s a perfect blend
                                        of
                                        living independently while being a part of the community; Roomsoom is an
                                        ideal home
                                        away from home.</p>
                                </div>
                            </div>
                            <div class="testimonials_lastBoard__LA_M9">
                                <div class="testimonials_imageBox__4Oi6s"><img alt="Ankit Shukla"
                                        src="asset/images/testimonials-img/user1.webp" width="100" height="100"
                                        decoding="async" data-nimg="1" loading="lazy" style="color:transparent">
                                </div>
                                <div class="testimonials_nameBox__HmaIG">
                                    <h3>Ankit Shukla</h3>
                                    <h4>Ankit Shukla</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <a class="whatsapp-link" href="https://wa.me/+918810107070" target="_blank"><img width="60px" height="60px"
            class="whatsapp-icon" src="asset/images/whatsapp-icon1.png" alt=""></a>

    <!-- ===== FOOTER SECTION ===== -->
    <?php  include './header_footer/footer.php' ; ?>
    <!-- ===== /FOOTER SECTION ===== -->



    <!-- =======JS FILES LINKS -->
    <script src="js/side_nav.js"></script>
    <script src="js/request-call.js"></script>
    <script src="js/cityCardSlide.js"></script>
    <script src="js/testimonCardSlide.js"></script>
    <script src="js/collapsiblFAQ.js"></script>
    <script src="js/explore_tab.js"></script>
    <script src="js/automatic_slide.js"></script>
    <script src="js/active_class.js"></script>
    <script src="js/bookNowPopup.js"></script>
    <script src="js/login_info_popup.js"></script>
    <script src="js/near-by-card-slide.js"></script>

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


    </script>

</body>

</html>