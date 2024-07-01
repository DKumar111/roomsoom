<?php
include ('phpScript/dbconnect.php') ; 
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

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===FONTAWESOME CDN=== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ===/FONTAWESOME CDN=== -->
    <!-- =======GOOGLE FONT CDN======= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

</head>

<body>
    <!-- ===== HEADER SECTION ===== -->
    <?php  include './header_footer/header.php' ;  ?>
    <!-- ===== /HEADER SECTION ===== -->
    <!-- ==========================POPUP ON PAGE LOAD=================================== -->
    <?php
    if(!isset($_SESSION['username']))
    echo '
    <div class="popup_on_page_load">
        <button id="close_on_page_load">&times;</button>
        <p>
            To Book Room At Roomsoom Please Login
        </p>
        <a class="goto" href="login.php">Login</a>
    </div>
    ';
    ?>
    <!-- ==========================POPUP ON PAGE LOAD ENDS HERE=================================== -->

    <div class="wrapperTop">
        <div class="hero_container__w6cIQ">
            <div class="hero_heroCont__qqNVb">
                <div class="hero_heroText__mZOlY">
                    <div class="hero_circle__58Cu2"></div>
                    <div class="hero_heroHead__0XFfS">
                        <div class="hero_heading__mqm66">
                            <h1>Experience Luxury <br> Living at Roomsoom</h1>
                            <div class="hero_line__DnkCr">
                                <div class="hero_linesmall__7L4R_"></div>
                            </div>
                            <h2>Rent the best of managed living</h2>
                            <div class="hero_cta__7ndSC">
                                <form style="display:flex;width:100%;" action="search.php" method="post">
                                    <input type="search" placeholder="Find a roomsoom near your place"
                                        name="hero_search" id="hero_search" class="hero_SearchBar">
                                    <button type="submit" class="hero_search_btn"><i
                                            class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero_heroImage__qJC5C">
                    <img src="asset/images/hero-img.png" alt="">
                </div>
            </div>
        </div>
        <div class="card_container__Klf5R">
            <div class="card_cityMain__lBQrv">
                <div class="card_title__TdvwU">
                    <h2>Here. There. <span style="color: #EF4F5F;">Roomsoom</span> Everywhere!</h2>
                </div>
                <div class="card_cardBox__uU7lZ">
                    <div class="city_wise_search_section">
                        <div class="city_section">
                            <a onclick="showDetails(this)" data-city-value="delhi" id="delhi"
                                href="search_property.php?city=delhi">
                                <img width="100px" height="100px" src="asset/images/delhi.png" alt="" draggable="false">
                            </a>
                            <span>Delhi</span>
                        </div>

                        <div class="city_section">
                            <a onclick="showDetails(this)" data-city-value="noida" id="noida"
                                href="search_property.php?city=noida">
                                <img width="100px" height="100px" src="asset/images/noida.png" alt="" draggable="false">
                            </a>
                            <span>Noida</span>
                        </div>

                        <div class="city_section">
                            <a data-city-value="gurgaon" id="gurgaon" onclick="showDetails(this)"
                                href="search_property.php?city=gurgaon">
                                <img width="100px" height="100px" src="asset/images/gurgaon.png" alt=""
                                    draggable="false">
                            </a>
                            <span>Gurgaon</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="welcome_container__xDG9q">
            <div class="welcome_container_subsection__xDG9q">
                <div class="welcome_welMain__A1HlB">
                    <div class="welcome_title__0_xRo_find_easy">
                        <div class="easy__find_text" style="font-size:4rem;font-weight:lighter;">FIND</div>
                        <div class="easy_text">EASY</div>
                    </div>
                    <div style="background-color: #faebd7;" class="welcome_welImage__mZNRj">
                        <img alt="Housr Coliving" src="asset/images/roomies3.png" width="800" height="800"
                            decoding="async" data-nimg="1" loading="lazy" style="color:transparent">
                    </div>
                    <div class="welcome_welCont__ObR_l">
                        <div class="welcome_welHead__zeGSA">
                            <div class="welcome_title__0_xRo">
                                <h3 class="welcome_heading">Easy on the pocket, <span
                                        class="welcome_heading_subtitle">Easy on the mind.</span></h3>
                            </div>
                            <div class="welcome_content__3AXBX">
                                <div class="welcome_content_sub_small_text">
                                    <p>Fully Furnished</p>
                                    <p>Homes</p>
                                </div>
                                <div class="welcome_content_sub_small_text">
                                    <p>Loaded</p>
                                    <p>Amenities</p>
                                </div>
                                <div class="welcome_content_sub_small_text">
                                    <p>WhatsApp</p>
                                    <p>Video Tour</p>
                                </div>
                                <div class="welcome_content_sub_small_text">
                                    <p>Zero Brokerage</p>
                                    <p>One Month Deposit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="direction:rtl;" class="welcome_container_subsection__xDG9q2">
                <div class="welcome_welMain__A1HlB">
                    <div class="welcome_title__0_xRo_Stay_Easy">
                        <div class="easy__find_text" style="font-size:4rem;font-weight:lighter;">STAY</div>
                        <div class="easy_text">EASY</div>
                    </div>
                    <div style="background-color: #e4fcb9;" class="welcome_welImage__mZNRj"><img alt="Housr Coliving"
                            src="asset/images/roomies6.png" width="700" height="700" decoding="async" data-nimg="1"
                            loading="lazy" style="color:transparent"></div>
                    <div class="welcome_welCont__ObR_l">
                        <div class="welcome_welHead__zeGSA">
                            <div class="welcome_title__0_xRo">
                                <h3 class="welcome_heading">Perfect for working, <span
                                        class="welcome_heading_subtitle">More so for unwinding
                                        after</span></h3>
                            </div>
                            <div class="welcome_content__3AXBX">
                                <div class="welcome_content_sub_small_text">
                                    <p>Fully Furnished</p>
                                    <p>Homes</p>
                                </div>
                                <div class="welcome_content_sub_small_text">
                                    <p>Loaded</p>
                                    <p>Amenities</p>
                                </div>
                                <div class="welcome_content_sub_small_text">
                                    <p>WhatsApp</p>
                                    <p>Video Tour</p>
                                </div>
                                <div class="welcome_content_sub_small_text">
                                    <p>Zero Brokerage</p>
                                    <p>One Month Deposit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="direction:ltr;" class="welcome_container_subsection__xDG9q3">
                <div class="welcome_welMain__A1HlB">
                    <div style="background-color: #cbccfd;" class="welcome_welImage__mZNRj"><img alt="Housr Coliving"
                            src="asset/images/roomies4.png" width="800" height="800" decoding="async" data-nimg="1"
                            loading="lazy" style="color:transparent"></div>
                    <div class="welcome_welCont__ObR_l">
                        <div class="welcome_welHead__zeGSA">
                            <div class="welcome_title__0_xRo">
                                <h3 class="welcome_heading">Join & vibe <span class="welcome_heading_subtitle">with a
                                        vibrant colourful
                                        community.</span></h3>
                            </div>
                            <div class="welcome_content__3AXBX">
                                <div class="welcome_content_sub_small_text">
                                    <p>Fully Furnished</p>
                                    <p>Homes</p>
                                </div>
                                <div class="welcome_content_sub_small_text">
                                    <p>Loaded</p>
                                    <p>Amenities</p>
                                </div>
                                <div class="welcome_content_sub_small_text">
                                    <p>WhatsApp</p>
                                    <p>Video Tour</p>
                                </div>
                                <div class="welcome_content_sub_small_text">
                                    <p>Zero Brokerage</p>
                                    <p>One Month Deposit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="easy_at_roomsoom">
            <div class="easy_at_heading">
                <h1>It's easy at <span style="color:#fc777b;">Roomsoom</span></h1>
            </div>
            <div class="easy_at_card_section">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img width="330px" height="180px" src="asset/images/find-easy.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img width="330px" height="180px" src="asset/images/stay-easy.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img width="330px" height="180px" src="asset/images/bond-easy.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="most_celebrated_space">
            <div class="most_celebrated_heading">
                <p>We are India's Most Celebrated <span style="color: #f75e5e;">Coliving </span>Spaces</p>
            </div>
            <div class="counter_section">
                <div class="count_number_section">
                    <div class="count_number">50K+</div>
                    <div class="count_text">Customer</div>
                </div>
                <div class="count_number_section">
                    <div class="count_number">450+</div>
                    <div class="count_text">Roomies</div>
                </div>
                <div class="count_number_section">
                    <div class="count_number">3</div>
                    <div class="count_text">City</div>
                </div>
            </div>
        </div>

        <section class="memories_section">
            <div class="memories_sub_section">
                <div class="memories_image_div">
                    <img src="asset/images/roomies7.png" alt="">
                </div>
                <div class="memories_text_div">
                    <div class="">
                        <div class="memories_text_11">Let's make some</div>
                        <div class="memories_text_22">Memories!</div>
                    </div>
                    <a class="memories_btn" href="#">Roomies Tales</a>
                </div>
            </div>
        </section>

        <section class="mobile_view_memories">
            <div class="mobile_view_memories_container">
                <div class="image_memories_section">
                    <div class=""></div>
                    <img src="asset/images/roomies7.png" alt="">
                </div>
                <div style="padding-right: 2rem;position: absolute;left: 12rem;" class="">
                    <div class="">Let's make some</div>
                    <div style="font-size:1.6rem;color: rgb(95, 6, 68);font-weight: bold;" class="">Memories!</div>
                </div>
            </div>
            <div class="">
                <a style="background-color: #2d948f;color:white;padding:1rem 1rem;border-radius:6px;"
                    href="mobile_view_roomies_button">Roomies Tales</a>
            </div>
        </section>

        <section class="testimonials_containerMain__M_1ES">
            <div class="testimonials_title__SEhDx">
                <p>What Roomsoom Homies have to say</p>
            </div>
            <div class="testimonials_sliderDiv__P2irp">
                <div class="testimonials_mainCont__hmExz" id="btnClick">
                    <div class="testimonials_container__azBtq">
                        <div class="testimonials_contMain__vbNaQ">
                            <div id="content">
                                <div class="testimonial">
                                    <blockquote style="background: #e9e8e9;">
                                        "Roomsoom made finding a room easy with great amenities and responsive
                                        support, perfect for my needs."
                                    </blockquote>
                                    <div></div>
                                    <p style="color:black;">
                                        <span style="padding-right:0.5rem;"><i class="fa-regular fa-user"></i></span>
                                        Rajendra Gupta &mdash; Uttar Pradesh, India
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials_container__azBtq">
                        <div class="testimonials_contMain__vbNaQ">

                            <div id="content">
                                <div class="testimonial">
                                    <blockquote style="background: #ffeaf8;">
                                        "Excellent service from Roomsoom, reliable and quick responses, helped me
                                        settle into a comfortable living space hassle-free."
                                    </blockquote>
                                    <div></div>
                                    <p style="color:black;">
                                        <span style="padding-right:0.5rem;"><i class="fa-regular fa-user"></i></span>
                                        Simran Kaur &mdash; Punjab, India
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials_container__azBtq">
                        <div class="testimonials_contMain__vbNaQ">

                            <div id="content">
                                <div class="testimonial">
                                    <blockquote style="background: #f8ffd5;">
                                        "Roomsoom's efficient booking process and quality accommodations exceeded my
                                        expectations. A trustworthy choice for hassle-free renting."
                                    </blockquote>
                                    <div></div>
                                    <p style="color:black;">
                                        <span style="padding-right:0.5rem;"><i class="fa-regular fa-user"></i></span>
                                        Sameer Jain &mdash; Rajasthan, India
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials_container__azBtq">
                        <div class="testimonials_contMain__vbNaQ">

                            <div id="content">
                                <div class="testimonial">
                                    <blockquote style="background: #e1fbc0;">
                                        "I found Roomsoom to be professional and accommodating, ensuring a smooth
                                        transition into a well-maintained and comfortable apartment."
                                    </blockquote>
                                    <div></div>
                                    <p style="color:black;">
                                        <span style="padding-right:0.5rem;"><i class="fa-regular fa-user"></i></span>
                                        Ram Kumar &mdash; Delhi, India
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="spotlight_container">
            <div class="spotlight_content_container">
                <div class="spotlight_first_sec">
                    <h1>The <span style="color: #EF4F5F;">Spotlight</span> on us</h1>
                    <p>We don't just make second homes. We make headlines as well.</p>
                </div>
                <div class="spotlight_second_sec">
                    <div class="#"></div>
                    <div class="#"></div>
                    <div class="#"></div>
                </div>
                <div class="spotlight_readmore_btn">
                    <a href="#">Read More</a>
                </div>
            </div>
        </section>

        <div class="card_container__Klf5R">
            <div class="community_container__tbwMr">
                <div class="community_comMain__56zqT">
                    <div class="community_comSection__XMsum">
                        <div class="community_line1__E6U4i">
                            <div class="community_box1__Cz51b"><img alt="banner"
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmusic.01e9be84.webp&w=384&q=75"
                                    width="340" height="349" decoding="async" data-nimg="1" loading="lazy"
                                    style="color: transparent;">
                                <div class="community_text__JgpPi">
                                    <div class="community_textCol__WD8wG">
                                        <h3>Soulful Music Nights</h3>
                                        <p>A community that jams together stays together.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="community_box2__sqYH_"><img alt="banner"
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdidi.2f320b44.webp&w=1200&q=75"
                                    width="1200" height="1838" decoding="async" data-nimg="1" loading="lazy"
                                    style="color: transparent;">
                                <div class="community_text__JgpPi">
                                    <div class="community_textCol__WD8wG">
                                        <h3>Wednesday Night Stand-Up</h3>
                                        <p>Mid-week laughter fest to laugh away that stress</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="community_line2__wTSvp">
                            <div class="community_box1__Cz51b"><img alt="banner"
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdog.0f20d687.webp&w=384&q=75"
                                    width="340" height="536" decoding="async" data-nimg="1" loading="lazy"
                                    style="color: transparent;">
                                <div class="community_text__JgpPi">
                                    <div class="community_textCol__WD8wG">
                                        <h3>Furry Therapy Sesh</h3>
                                        <p>They say the best therapist walks on four legs, and we say our community
                                            deserves
                                            only the best!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="community_box2__sqYH_"><img alt="banner"
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdj.5c14ce1e.webp&w=1920&q=75"
                                    width="1618" height="2107" decoding="async" data-nimg="1" loading="lazy"
                                    style="color: transparent;">
                                <div class="community_text__JgpPi">
                                    <div class="community_textCol__WD8wG">
                                        <h3>DJ Night</h3>
                                        <p>Where the community jams and the DJ slams.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="community_line3__gYlR2">
                            <div class="community_box1__Cz51b"><img alt="banner"
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpaint.39b8867f.webp&w=384&q=75"
                                    width="340" height="397" decoding="async" data-nimg="1" loading="lazy"
                                    style="color: transparent;">
                                <div class="community_text__JgpPi">
                                    <div class="community_textCol__WD8wG">
                                        <h3>Art Therapy</h3>
                                        <p>Get creative with the community</p>
                                    </div>
                                </div>
                            </div>
                            <div class="community_box2__sqYH_"><img alt="banner"
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffoot.12f33a94.webp&w=384&q=75"
                                    width="340" height="446" decoding="async" data-nimg="1" loading="lazy"
                                    style="color: transparent;">
                                <div class="community_text__JgpPi">
                                    <div class="community_textCol__WD8wG">
                                        <h3>Friday Football Tournaments</h3>
                                        <p>Kick-off that weekend, yes, literally!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section>

            </section>


            <div class="connect_container__bcQb3">
                <div class="connect_conMain__cK61x">
                    <div class="connect_contDiv__7rJQb"><img alt="tulip"
                            src="https://img.freepik.com/free-photo/green-sofa-white-living-room-with-free-space_43614-834.jpg"
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
        $sql = "SELECT DISTINCT locality FROM `properties` WHERE city LIKE '%delhi%' ";
        $result = mysqli_query($conn, $sql) or die("SQL Query failed");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $city_area = $row['locality'];
               echo  " <a href='properties.php?locality=$city_area'>$city_area</a>";
            }
        }

        ?>
        </div>
    </div>
    <div class="tabs__tab" id="tab_2" data-tab-info>
        <div class="Tabs_Content">
            <?php
        $sql = "SELECT DISTINCT locality FROM `properties` WHERE city LIKE '%noida%' ";
        $result = mysqli_query($conn, $sql) or die("SQL Query failed");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $city_area = $row['locality'];
               echo  "<a href='properties.php?locality=$city_area'>$city_area</a> ";
            }
        }

        ?>
        </div>

    </div>
    <div class="tabs__tab" id="tab_3" data-tab-info>
        <div class="Tabs_Content">
            <?php
        $sql = "SELECT DISTINCT locality FROM `properties` WHERE city LIKE '%gurgaon%' ";
        $result = mysqli_query($conn, $sql) or die("SQL Query failed");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $city_area = $row['locality'];
               echo  "<a href='properties.php?locality=$city_area'>$city_area</a>";
            }
        }

        ?>
        </div>

    </div>
</div>
<!-- </div> -->
</section>
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
    <!-- <script src="js/testimonCardSlide.js"></script> -->
    <script src="js/cityCardSlide.js"></script>
    <script src="js/collapsiblFAQ.js"></script>
    <script src="js/explore_tab.js"></script>
    <!-- <script src="js/active_class.js"></script> -->
    <script src="js/login_info_popup.js"></script>
    <!-- <script src="js/popupOnPageLoad.js"></script> -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- =======BOOTSTRAP JS CDN========== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <script>
    $(document).ready(function() {
        $(".Header_ullinks__V1SBq li").click(function(event) {

            $(".Header_ullinks__V1SBq li ").removeClass("nav__active"); //Remove any "active" class 
            $("li", this).addClass("nav__active"); //Add "active" class to selected tab // 
            // $(activeTab).show(); //Fade in the active content 
        });
    });


    function showDetails(city) {
        let str = city.getAttribute("data-city-value");
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
        xmlhttp.open("GET", "properties.php?q=" + str, true);
        xmlhttp.send();

    }

    let swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
    });
    </script>

</body>

</html>