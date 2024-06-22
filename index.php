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
                                <input type="search" placeholder="Find a roomsoom near your place" name="hero_search"
                                    id="hero_search" class="hero_SearchBar">
                                <button type="submit" class="hero_search_btn"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
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
                    <h2>Here. There. <b>Roomsoom</b> Everywhere!</h2>
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
                                <h3 class="welcome_heading">Easy on the pocket, <span class="welcome_heading_subtitle">Easy on the mind.</span></h3>
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
                    <div style="background-color: #e4fcb9;" class="welcome_welImage__mZNRj"><img alt="Housr Coliving" src="asset/images/roomies6.png"
                            width="700" height="700" decoding="async" data-nimg="1" loading="lazy"
                            style="color:transparent"></div>
                    <div class="welcome_welCont__ObR_l">
                        <div class="welcome_welHead__zeGSA">
                            <div class="welcome_title__0_xRo">
                                <h3 class="welcome_heading">Perfect for working, <span class="welcome_heading_subtitle">More so for unwinding
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
                    <!-- polygon -->
                    <!-- <div class="box_parent">
                        <div class="box2"></div>
                        <svg class="flt_svg" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <filter id="flt_tag">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix"
                                        values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="flt_tag" />
                                    <feComposite in="SourceGraphic" in2="flt_tag" operator="atop" />
                                </filter>
                            </defs>
                        </svg>
                    </div> -->
                    <!-- /polygon -->
                    <div style="background-color: #cbccfd;" class="welcome_welImage__mZNRj"><img alt="Housr Coliving" src="asset/images/roomies4.png"
                            width="800" height="800" decoding="async" data-nimg="1" loading="lazy"
                            style="color:transparent"></div>
                    <div class="welcome_welCont__ObR_l">
                        <div class="welcome_welHead__zeGSA">
                            <div class="welcome_title__0_xRo">
                                <h3 class="welcome_heading">Join & vibe <span class="welcome_heading_subtitle">with a vibrant colourful
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
                                        Ram Kumar &mdash; Delhi, India
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="community_formSection__6clMG">
                        <div class="community_formMain__hYfPg">
                            <div class="community_title___HjXP">
                                <h3>Get going in a few <br> clicks</h3>
                            </div>
                            <div class="community_formData__B9A6L">
                                <form>
                                    <div>
                                        <div class="community_flexBox__z_x40">
                                            <h4>Location</h4>
                                            <div class="community_form_group__7GK3Y">
                                                <div class=" css-b62m3t-container"><span id="react-select-2-live-region"
                                                        class="css-7pg0cj-a11yText"></span><span aria-live="polite"
                                                        aria-atomic="false" aria-relevant="additions text"
                                                        class="css-7pg0cj-a11yText"></span>
                                                    <div class="head-select-search__control css-1s2u09g-control">
                                                        <div class="head-select-search__value-container css-1d8n9bt">
                                                            <div class="head-select-search__placeholder css-14el2xx-placeholder"
                                                                id="react-select-2-placeholder">Select...</div>
                                                            <div class="head-select-search__input-container css-ackcql"
                                                                data-value=""><input class="head-select-search__input"
                                                                    autocapitalize="none" autocomplete="off"
                                                                    autocorrect="off" id="react-select-2-input"
                                                                    spellcheck="false" tabindex="0" type="text"
                                                                    aria-autocomplete="list" aria-expanded="false"
                                                                    aria-haspopup="true" role="combobox"
                                                                    aria-describedby="react-select-2-placeholder"
                                                                    value=""
                                                                    style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="head-select-search__indicators css-1wy0on6"><span
                                                                class="head-select-search__indicator-separator css-1okebmr-indicatorSeparator"></span>
                                                            <div class="head-select-search__indicator head-select-search__dropdown-indicator css-tlfecz-indicatorContainer"
                                                                aria-hidden="true"><svg height="20" width="20"
                                                                    viewBox="0 0 20 20" aria-hidden="true"
                                                                    focusable="false" class="css-8mmkcg">
                                                                    <path
                                                                        d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                    </path>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="community_flexBox__z_x40">
                                            <h4>Property type</h4>
                                            <div class="community_form_group__7GK3Y">
                                                <div class=" css-b62m3t-container"><span id="react-select-3-live-region"
                                                        class="css-7pg0cj-a11yText"></span><span aria-live="polite"
                                                        aria-atomic="false" aria-relevant="additions text"
                                                        class="css-7pg0cj-a11yText"></span>
                                                    <div class="head-select-search__control css-1s2u09g-control">
                                                        <div class="head-select-search__value-container css-1d8n9bt">
                                                            <div class="head-select-search__placeholder css-14el2xx-placeholder"
                                                                id="react-select-3-placeholder">Select...</div>
                                                            <div class="head-select-search__input-container css-ackcql"
                                                                data-value=""><input class="head-select-search__input"
                                                                    autocapitalize="none" autocomplete="off"
                                                                    autocorrect="off" id="react-select-3-input"
                                                                    spellcheck="false" tabindex="0" type="text"
                                                                    aria-autocomplete="list" aria-expanded="false"
                                                                    aria-haspopup="true" role="combobox"
                                                                    aria-describedby="react-select-3-placeholder"
                                                                    value=""
                                                                    style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="head-select-search__indicators css-1wy0on6"><span
                                                                class="head-select-search__indicator-separator css-1okebmr-indicatorSeparator"></span>
                                                            <div class="head-select-search__indicator head-select-search__dropdown-indicator css-tlfecz-indicatorContainer"
                                                                aria-hidden="true"><svg height="20" width="20"
                                                                    viewBox="0 0 20 20" aria-hidden="true"
                                                                    focusable="false" class="css-8mmkcg">
                                                                    <path
                                                                        d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                                    </path>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="community_searchWrap__difqL"><button>Find my Roomsoom</button></div>
                                    </div>
                                </form>
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
            <div class="faqs_faqscontainer__on7i_">
                <div class="faqs_faqtitle__pTGTz">
                    <h3>FAQs</h3>
                </div>

                <button type="button" class="collapsible">What is Roomsoom Coliving all about?</button>
                <div class="content">
                    <p>At Roomsoom, we've combined equal parts innovation, convenience, community and opulence to create
                        an
                        extraordinary living experience for India’s working professionals.</p>
                </div>
                <button type="button" class="collapsible">How does Roomsoom Coliving set itself apart from traditional
                    housing options?</button>
                <div class="content">
                    <p>Roomsoom Luxury Coliving stands out by offering fully furnished and ready-to-move-in properties.
                        Unlike traditional housing, you don't have to worry about purchasing furniture, setting up
                        utilities, or dealing with complicated paperwork. With Roomsoom, you can enjoy a comfortable and
                        hassle-free living space from day one!</p>
                </div>
                <button type="button" class="collapsible">What does a Roomsoom membership include?</button>
                <div class="content">
                    <p>As a Housr member, you get access to beautifully designed, fully-furnished spaces managed to
                        perfection and other irresistible privileges. Roomsoom Homies (our residents) enjoy an array of
                        all-inclusive amenities, premium services, priority access to Roomsoom’s latest launches,
                        personalised assistance from IHM-trained resident managers, special offers and discounts, and
                        invitations to exclusive community events.</p>
                </div>
                <button type="button" class="collapsible">What are the locations where Roomsoom Coliving is currently
                    available?</button>
                <div class="content">
                    <p>Roomsoom is omnipresent across almost all the major metropolitans of the country, including
                        Gurugram, Hyderabad, Pune, Bangalore and Vizag.</p>
                </div>
                <button type="button" class="collapsible">How do I book a Roomsoom Coliving or apartments for
                    rent?</button>
                <div class="content">
                    <p>To book Roomsoom’s Luxury Coliving, apartments/house for rent, simply visit our website or get in
                        touch with us at +918810107070. You can browse available modern luxury apartments, house for
                        rent or flats for rent; choose your preferred location, and complete the booking process online.
                    </p>
                </div>
                <button type="button" class="collapsible">Are the apartments/flats at Roomsoom Co living
                    pet-friendly?</button>
                <div class="content">
                    <p>We understand that pets are part of the family. While not all Roomsoom spaces are pet-friendly,
                        Roomsoom Homes allows pets. Please check the specific apartment listing for more details.
                    </p>
                </div>
                <button type="button" class="collapsible">What is the duration of stay required at Roomsoom Luxury
                    Coliving?</button>
                <div class="content">
                    <p>Roomsoom offers flexible stay options including modern luxury apartments, house/flats for rent
                        and
                        Luxury Coliving. Our minimum lock-in period is as short as three months while it can be as long
                        as several months, depending on your needs.
                    </p>
                </div>
                <button type="button" class="collapsible">Do I need to bring my own furniture and appliances to stay at
                    Roomsoom Co living?</button>
                <div class="content">
                    <p>No, you don't need to bring anything with you, just a bag of clothes and rest we’ve got covered.
                        Roomsoom Co living and apartments/flats for rent come fully furnished and equipped with
                        everything
                        you need for a comfortable stay.
                    </p>
                </div>
                <button type="button" class="collapsible">How is security ensured at Roomsoom properties?</button>
                <div class="content">
                    <p>Your safety is our priority. We follow 3-tier security procedures at Roomsoom Co living &
                        Roomsoom
                        Homes. We have advanced security measures in place, including secure access control & CCTV
                        surveillance, to ensure a safe living environment for our residents.
                    </p>
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
        // alert("The city is a " + str + ".");
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