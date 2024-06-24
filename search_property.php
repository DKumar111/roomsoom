<?php   
include ('phpScript/dbconnect.php') ; 
include ('phpScript/functions.php') ; 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>RoomSoom Home Page</title>
    <link rel="shortcut icon" href="asset/images/logo.png" type="image/x-icon">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/propertyCardSlide.css">
    <!-- JQUERY LINK FOR FILTER SLIDER RANGE -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
    <!-- JQUERY LINK FOR FILTER SLIDER RANGE ENDS HERE-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===FONTAWESOME CDN=== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ===/FONTAWESOME CDN=== -->

    <!-- jquery ui css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">

    <!-- =======GOOGLE FONT CDN======= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
    </style>

    <!-- jQuery CDN FOR datepicker -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

    <!-- CSS CDN -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" />

    <!-- datetimepicker jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js">
    </script>
</head>

<body>
    <!-- ===== HEADER SECTION ===== -->
    <?php  include './header_footer/header.php' ;      ?>
    <!-- ===== /HEADER SECTION ===== -->

    <!-- <div class="wrapperTop"> -->


    <div class="listing_mainCont__mGx_Q">
        <div class="listing_navigation__Wwevg">
            <div class="listing_left__b5p23">
                <div id="joining_Date" class="multifilter_option">
                    <!-- <p id="txtdate">Joining Date</p><span><i class="fa-solid fa-calendar-day" onclick="setDatepicker(this)"></i></span> -->
                    <input type="text" name="joining_date" class="datetimepicker" id="input_joining_Date"
                        value="Joining Date" placeholder="Joining Date"><i class="fa-solid fa-calendar-day"></i>
                </div>
                <div class="">
                    <select name="gender" onchange="showUser(this.value)" class="multifilter_option" id="gender_option">
                        <option>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="unisex">Unisex</option>
                    </select>
                </div>

                <div class="">
                    <select name="amenities" onchange="ShowAmenities(this.value)" id="amenities_option"
                        class="multifilter_option">
                        <option hidden>Amenities</option>
                        <option disabled value="ac">AC</option>
                        <option disabled value="fridge">Fridge</option>
                        <option disabled value="gym">Gym</option>
                        <option disabled value="parking">Parking</option>
                        <option disabled value="power backup">Power Backup</option>
                    </select>
                </div>

                <div class="">
                    <select name="locality" id="locality_option" class="multifilter_option"
                        onchange="ShowLocality(this.value)">
                        <option>Locality</option>
                        <option value="Noida Sector 1">Noida Sector 1</option>
                        <option value="Noida Sector 2">Noida Sector 2</option>
                        <option value="Noida Sector 3">Noida Sector 3</option>
                        <option value="Noida Sector 4">Noida Sector 4</option>
                        <option value="Noida Sector 5">Noida Sector 5</option>
                        <option value="Noida Sector 6">Noida Sector 6</option>
                        <option value="Noida Sector 7">Noida Sector 7</option>
                        <option value="Noida Sector 8">Noida Sector 8</option>
                        <option value="Noida Sector 9">Noida Sector 9</option>
                        <option value="Noida Sector 10">Noida Sector 10 </option>
                    </select>
                </div>
                <div id="search" class="search">
                    <form action="" method="post">
                        <input type="search" name="search" autocomplete="off" id="Property__search"
                            placeholder="Search By City">
                    </form>
                </div>
            </div>
            <div class="listing_right__KSxXz">
            </div>
        </div>
        <div class="selected_items_history" id="selected_items_history">

        </div>
        <div class="listing_container__P9mcK">
            <div class="listing_gridlayout__SQwz8" id="all_property">
                <?php
                    if(isset($_GET['city'])){
                        $city_result = $_GET['city'];
                        $sql = "SELECT * FROM `properties` WHERE city LIKE '%{$city_result}%' ";
                        $sql_result = mysqli_query($conn , $sql);
                        $num_count = mysqli_num_rows($sql_result);
                        if($num_count == 0){
                            echo "<h2>No Result Found</h2>";
                        }
                
                        while($row = mysqli_fetch_assoc($sql_result)){
                            $s_id = $row['s_id'];
                            $city = $row['city'];
                            $locality = $row['locality'];
                            $property_type = $row['property_type'];
                            $gender = $row['gender'];
                            $solo_room_price = $row['solo_room_price'];
                            $property_image = $row['property_image'];
                
                            echo "
                            <a style='text-decoration: none;border: 1px solid rgb(218, 218, 218);border-radius: 7px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 4px 3px 0 rgba(0, 0, 0, 0.1)' href='property_details.php?property_id={$row['s_id']}&city={$row['city']}'>
                                    <div  class='property_card_container'>
                                        <div style='overflow:hidden;border-radius:7px;' class='card_img_section'>
                                            <img width='100%' height='200px' src='asset/property_image/{$row['property_image']}' alt=''>
                                        </div>
                                        <div  class='card_desc_section'>
                                            <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;border-bottom: 1px solid gray;' class=''>
                                                <div style='display:flex;flex-direction:column;gap:0.4rem;' class=''>
                                                    <p style='color: rgb(59, 59, 59);font-size:1rem;font-weight:bold;'>Roomsoom {$row['locality']}</p>
                                                    <p style='color: rgb(129, 129, 129);font-size:0.8rem;'>PG in {$row['city']}</p>
                                                </div>
                                                <div class=''>
                                                    <div style='color: rgb(59, 59, 59);padding: 0.9rem;color: rgb(53 52 52);background-color: #edc2af;clip-path: xywh(0 5px 100% 75% round 15% 0);font-weight: 700;font-size: 0.7rem;' class=''>{$row['gender']}</div>
                                                </div>
                                            </div>
                                            <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;' class=''>
                                                <div class=''>
                                                    <div style='color: rgb(129, 129, 129);font-size:0.7rem;' class=''>Rent starts at</div>
                                                    <div style='color: rgb(59, 59, 59);font-weight: bold;' class=''><span style='padding-right:0.5rem;'><i class='fa-solid fa-indian-rupee-sign'></i></span>{$row['solo_room_price']}*</div>
                                                </div>
                                                <div class=''>
                                                    <div style='color: rgb(59, 59, 59);' class=''><span> {$row['discount']}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            ";
                        }
                    }
                ?>
            </div>
            <div class="listing_filterPhone__Fcmrh">
                <div class="listing_sidemeunbox__PQyTf">
                    <div class="listing_sideMenuHide__JRHnQ" id="listing_hidesideMenuBar__xi1iy">
                        <div class="listing_sidemenu_container_Hide__aZ0Ww">
                            <div class="listing_navbarclose__BPhIj"><i class="listing_ticlose__IuP8i"><img
                                        alt="housr coliving"
                                        srcset="/_next/static/media/CloseBtn.b04e4862.svg 1x, /_next/static/media/CloseBtn.b04e4862.svg 2x"
                                        src="/_next/static/media/CloseBtn.b04e4862.svg" width="24" height="24"
                                        decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></i>
                            </div>
                            <div class="undefined">
                                <div class="listing_sidemenu_links__5DQJV">
                                    <ul>
                                        <li class="listing_underline__rySpo">
                                            <p>City</p>
                                            <div class="listing_iconsRot__zDTCz"><img alt="downarrow"
                                                    srcset="/_next/static/media/DownArrowGrey.02340a5c.svg 1x, /_next/static/media/DownArrowGrey.02340a5c.svg 2x"
                                                    src="/_next/static/media/DownArrowGrey.02340a5c.svg" width="20"
                                                    height="20" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></div>
                                        </li>
                                        <ul class="listing_hasChildrenHide__dYuYg">
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="gurgaon" id="city" value="gurgaon"><label
                                                    for="gurgaon">Gurgaon</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox" name="pune"
                                                    id="city" value="pune"><label for="pune">Pune</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="hyderabad" id="city" value="hyderabad"><label
                                                    for="hyderabad"></label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="bangalore" id="city" value="bangalore"><label
                                                    for="bangalore">Bangalore</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="visakhapatnam" id="city" value="visakhapatnam"><label
                                                    for="Visakhapatnam">Visakhapatnam</label></li>
                                        </ul>
                                        <li class="listing_underline__rySpo">
                                            <p>Locality</p>
                                            <div class="listing_iconsRot__zDTCz"><img alt="downarrow"
                                                    srcset="/_next/static/media/DownArrowGrey.02340a5c.svg 1x, /_next/static/media/DownArrowGrey.02340a5c.svg 2x"
                                                    src="/_next/static/media/DownArrowGrey.02340a5c.svg" width="20"
                                                    height="20" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></div>
                                        </li>
                                        <ul class="listing_hasChildrenHide__dYuYg">
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="gachibowli" id="gachibowli" value="gachibowli"><label
                                                    for="gachibowli">Gachibowli</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="kondapur" id="kondapur" value="kondapur"><label
                                                    for="kondapur">Kondapur</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="madhapur" id="madhapur" value="madhapur"><label
                                                    for="madhapur">Madhapur</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="gowlidoddy" id="gowlidoddy" value="gowlidoddy"><label
                                                    for="gowlidoddy">Gowlidoddy</label></li>
                                        </ul>
                                        <li class="listing_underline__rySpo">
                                            <p>Property Type</p>
                                            <div class="listing_iconsRot__zDTCz"><img alt="downarrow"
                                                    srcset="/_next/static/media/DownArrowGrey.02340a5c.svg 1x, /_next/static/media/DownArrowGrey.02340a5c.svg 2x"
                                                    src="/_next/static/media/DownArrowGrey.02340a5c.svg" width="20"
                                                    height="20" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></div>
                                        </li>
                                        <ul class="listing_hasChildrenHide__dYuYg">
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="coliving" id="coliving" value="coliving"><label
                                                    for="coliving">Roomsoom Coliving</label></li>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="listing_Searchbtn__CDdcb"><button>
                                        <p>Find my Roomsoom</p>
                                    </button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card_container__Klf5R">
            <div class="connect_container__bcQb3">
                <div class="connect_conMain__cK61x">
                    <div class="connect_contDiv__7rJQb"><img alt="tulip"
                            src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftulip.672e4c41.png&w=750&q=75"
                            width="689" height="608" decoding="async" data-nimg="1" loading="lazy"
                            style="color: transparent;">
                        <div class="connect_content__pCbDN">
                            <h2>Connect with Roomsoom</h2>
                            <p>Drop your concern, query or <br> feedback and we will get back <br> to you in no time.
                            </p>
                        </div>
                    </div>
                    <div class="connect_formDiv__8Vdin">
                        <div class="connect_content__pCbDN">
                            <h2>Connect with Roomsoom</h2>
                            <p>Drop your concern, query or <br> feedback and we will get back <br> to you in no time.
                            </p>
                        </div>
                        <div class="connect_formSec__aDH2S">
                            <form action="phpScript/email_msg.php" method="post">
                                <input type="text" placeholder="Name" class="connect_first__fZlm4" name="name"
                                    required="" id="name">
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

        <a class="whatsapp-link" href="https://wa.me/+918810107070" target="_blank"><img class="whatsapp-icon"
                src="asset/images/whatsapp-icon1.png" alt=""></a>

        <!-- ===== FOOTER SECTION ===== -->
        <?php  include './header_footer/footer.php' ;      ?>
        <!-- ===== /FOOTER SECTION ===== -->



        <!-- =======JS FILES LINKS -->
        <script src="js/side_nav.js"></script>
        <script src="js/request-call.js"></script>
        <script src="js/collapsiblFAQ.js"></script>
        <script src="js/explore_tab.js"></script>
        <script src="js/properties.js"></script>
        <script src="js/active_class.js"></script>
        <script src="js/login_info_popup.js"></script>
        <script src="js/property_card_slide.js"></script>
        <!-- <script src="js/range-slider.js"></script> -->

        <!-- jquery -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <!-- jquery ui -->
        <script src="js/jquery-ui-1.12.1.min.js"></script>


        <script>
        $(function() {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        });




        //GENDER
        let dropdownBtn = document.querySelector('#gender_option');
        let menuContent = document.querySelector('.select_gender_option');
        let genderupangle = document.querySelector(".gender_angle_arrow");
        dropdownBtn.addEventListener('click', () => {
            if (menuContent.style.display === "") {
                menuContent.style.display = "flex";
                genderupangle.innerHTML = "<i class='fa-solid fa-chevron-up'></i>";
            } else {

                menuContent.style.display = "";
                genderupangle.innerHTML = "<i class='fa-solid fa-chevron-down'></i>";
            }
        })


        //AMENITIES
        let dropdownamenities = document.querySelector('#amenities_option');
        let amenitiesContent = document.querySelector('.select_amenities');
        let upangle = document.querySelector(".up_down_angle");
        dropdownamenities.addEventListener('click', () => {
            if (amenitiesContent.style.display === "") {
                amenitiesContent.style.display = "flex";
                upangle.innerHTML = "<i class='fa-solid fa-chevron-up'></i>";
            } else {
                amenitiesContent.style.display = "";
                upangle.innerHTML = "<i class='fa-solid fa-chevron-down'></i>";
            }
        })

        //LOCALITIES
        let dropdownlocality = document.querySelector('#locality_option');
        let localityContent = document.querySelector('.select_localities');
        let localityupangle = document.querySelector(".locality_updown_arrow");
        dropdownlocality.addEventListener('click', () => {
            if (localityContent.style.display === "") {
                localityContent.style.display = "grid";
                localityupangle.innerHTML = "<i class='fa-solid fa-chevron-up'></i>";
            } else {
                localityContent.style.display = "";
                localityupangle.innerHTML = "<i class='fa-solid fa-chevron-down'></i>";
            }
        })


        //LIVE SEARCH
        $("#Property__search").on("keyup", function() {
            let search_term = $(this).val();
            $.ajax({
                url: "phpScript/ajax_live_search.php",
                type: "POST",
                data: {
                    search: search_term
                },
                success: function(data) {
                    $("#all_property").html(data);
                }
            })
        });

        //FILTER BY GENDER
        function showUser(str) {
            if (str == "") {
                document.getElementById("all_property").innerHTML = "";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("all_property").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "phpScript/ajax_gender_search.php?q=" + str, true);
            xmlhttp.send();
        }

        //FILTER BY LOCATION
        function ShowLocality(str) {
            if (str == "") {
                document.getElementById("all_property").innerHTML = "";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("all_property").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "phpScript/ajax_locality_search.php?q=" + str, true);
            xmlhttp.send();
        }
        //FILTER BY AMENITIES
        function ShowAmenities(str) {
            if (str == "") {
                document.getElementById("all_property").innerHTML = "";
                return;
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("all_property").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "phpScript/ajax_amenities_search.php?q=" + str, true);
            xmlhttp.send();
        }
        </script>
</body>

</html>