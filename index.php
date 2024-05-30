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

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
    </style>

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
                            <div class="hero_smallCircle__o4aRt"></div>
                            <h1>Experience Luxury <br> Living at Roomsoom</h1>
                            <div class="hero_line__DnkCr">
                                <div class="hero_linesmall__7L4R_"></div>
                            </div>
                            <h2>Rent the best of managed living</h2>
                            <div class="hero_cta__7ndSC"><a href="properties.php"><button>Find my Roomsoom</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero_heroImage__qJC5C"><video autoplay="" muted="" loop="" playsinline="" preload="auto">
                        <source src="video/roomsoom_video.mp4" type="video/mp4">
                    </video></div>
            </div>
        </div>
        <div class="welcome_container__xDG9q">
            <div class="welcome_live__uXZn2"><img alt="#letslivebetter"
                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flive.3ac1c9e9.png&w=32&q=75"
                    width="32" height="303" decoding="async" data-nimg="1" loading="lazy" style="color:transparent">
            </div>
            <div class="welcome_welMain__A1HlB">
                <div class="welcome_welImage__mZNRj"><img alt="Housr Coliving"
                        src="https://housr.in/_next/image?url=https%3A%2F%2Fcloudfront.housr.in%2Fsofa.jpg&w=1920&q=75"
                        width="800" height="800" decoding="async" data-nimg="1" loading="lazy"
                        style="color:transparent"></div>
                <div class="welcome_welCont__ObR_l">
                    <div class="welcome_block__O7ep2"></div>
                    <div class="welcome_welHead__zeGSA">
                        <div class="welcome_title__0_xRo">
                            <div class="welcome_smallCircle__JBPa_"></div>
                            <h3>Welcome</h3>
                        </div>
                        <div class="welcome_content__3AXBX">
                            <p class="welcome_p1__4sMfw">Indulge in the ultimate luxury of managed living at Roomsoom.
                                From
                                top-notch amenities to an exclusive community, we have everything you need to live in
                                style.</p>
                            <p class="welcome_p2__nepoi">Plus, with IHM-trained Resident Managers available at all
                                times, you can focus on enjoying your space while we take care of the rest.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card_container__Klf5R">
            <div class="card_container__Klf5R">
                <div class="card_cityMain__lBQrv">
                    <div class="card_title__TdvwU">
                        <h2>Here. There. <b>Roomsoom</b> Everywhere!</h2>
                    </div>
                    <div class="card_cardBox__uU7lZ">
                        <div class="city_wise_search_section">
                            <div class="city_section">
                            <a href="search_property.php?city=delhi">
                                <img width="100px" height="100px" src="asset/images/delhi.png" alt="" draggable="false">
                            </a>
                            <span>Delhi</span>
                            </div>
                           
                            <div class="city_section">
                            <a href="search_property.php?city=noida">
                                <img width="100px" height="100px" src="asset/images/noida.png" alt="" draggable="false">
                            </a>
                            <span>Noida</span>
                            </div>
                            
                            <div class="city_section">
                            <a href="search_property.php?city=hyderabad">
                                <img width="100px" height="100px" src="asset/images/hydrabad.webp" alt="" draggable="false">
                            </a>
                            <span>Hyderabad</span>
                            </div>
                            
                            <div class="city_section">
                            <a href="search_property.php?city=gurgaon">
                                <img width="100px" height="100px" src="asset/images/gurgaon.webp" alt="" draggable="false">
                            </a>
                            <span>Gurgaon</span>
                            </div>
                            
                            <div class="city_section">
                            <a href="search_property.php?city=bangalore">
                                <img width="100px" height="100px" src="asset/images/banglore.webp" alt="" draggable="false">
                            </a>
                            <span>Bangalore</span>
                            </div>
                            
                            <div class="city_section">
                            <a href="search_property.php?city=pune">
                                <img width="100px" height="100px" src="asset/images/pune.webp" alt="" draggable="false">
                            </a>
                            <span>Pune</span>
                            </div>
                            
                        </div>
                      
                    </div>
                </div>
            </div>

          

            <div class="amenities_container__FPNLg">
                <div class="amenities_amenMain__t7XoQ">
                    <div class="amenities_title__apKqn">
                        <h2>Every Roomsoom Comes With</h2>
                    </div>
                    <div class="amenities_amenBox__WocXO">
                        <div class="amenities_amenDiv__TGlue">
                            <div class="amenities_amenIcon__b94RB"><img alt="Fully Furnished"
                                    srcset="https://housr.in/_next/static/media/chair.6977ebae.svg 1x, https://housr.in/_next/static/media/chair.6977ebae.svg 2x"
                                    src="https://housr.in/_next/static/media/chair.6977ebae.svg" width="35" height="35"
                                    decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></div>
                            <div class="amenities_title__apKqn">
                                <h3>Fully Furnished</h3>
                            </div>
                        </div>
                        <div class="amenities_amenDiv__TGlue">
                            <div class="amenities_amenIcon__b94RB"><img alt="IHM Trained Resident Managers"
                                    srcset="https://housr.in/_next/static/media/RM.ba86a7ca.svg 1x, https://housr.in/_next/static/media/RM.ba86a7ca.svg 2x"
                                    src="https://housr.in/_next/static/media/RM.ba86a7ca.svg" width="35" height="35"
                                    decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></div>
                            <div class="amenities_title__apKqn">
                                <h3>IHM Trained Resident Managers</h3>
                            </div>
                        </div>
                        <div class="amenities_amenDiv__TGlue">
                            <div class="amenities_amenIcon__b94RB"><img alt="Daily Professional Housekeeping"
                                    srcset="https://housr.in/_next/static/media/mop.b4133d66.svg 1x, https://housr.in/_next/static/media/mop.b4133d66.svg 2x"
                                    src="https://housr.in/_next/static/media/mop.b4133d66.svg" width="35" height="35"
                                    decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></div>
                            <div class="amenities_title__apKqn">
                                <h3>Daily Professional Housekeeping</h3>
                            </div>
                        </div>
                        <div class="amenities_amenDiv__TGlue">
                            <div class="amenities_amenIcon__b94RB"><img alt="Laundry at Your Doorstep"
                                    srcset="https://housr.in/_next/static/media/laundry.ce359a3a.svg 1x, https://housr.in/_next/static/media/laundry.ce359a3a.svg 2x"
                                    src="https://housr.in/_next/static/media/laundry.ce359a3a.svg" width="35"
                                    height="35" decoding="async" data-nimg="1" loading="lazy"
                                    style="color: transparent;"></div>
                            <div class="amenities_title__apKqn">
                                <h3>Laundry at Your Doorstep</h3>
                            </div>
                        </div>
                        <div class="amenities_amenDiv__TGlue">
                            <div class="amenities_amenIcon__b94RB"><img alt="3-Tier Security"
                                    srcset="https://housr.in/_next/static/media/Lock.d9a7b7f9.svg 1x, https://housr.in/_next/static/media/Lock.d9a7b7f9.svg 2x"
                                    src="https://housr.in/_next/static/media/Lock.d9a7b7f9.svg" width="35" height="35"
                                    decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></div>
                            <div class="amenities_title__apKqn">
                                <h3>3-Tier Security</h3>
                            </div>
                        </div>
                        <div class="amenities_amenDiv__TGlue">
                            <div class="amenities_amenIcon__b94RB"><img alt="High-speed Wifi"
                                    srcset="	https://housr.in/_next/static/media/wifi.43a5877b.svg 1x, 	https://housr.in/_next/static/media/wifi.43a5877b.svg 2x"
                                    src="	https://housr.in/_next/static/media/wifi.43a5877b.svg" width="35" height="35"
                                    decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></div>
                            <div class="amenities_title__apKqn">
                                <h3>High-speed Wifi</h3>
                            </div>
                        </div>
                        <div class="amenities_amenDiv__TGlue">
                            <div class="amenities_amenIcon__b94RB"><img alt="Healthy Gourmet Meals"
                                    srcset="https://housr.in/_next/static/media/restaurant.ad35b402.svg 1x, https://housr.in/_next/static/media/restaurant.ad35b402.svg 2x"
                                    src="https://housr.in/_next/static/media/restaurant.ad35b402.svg" width="35"
                                    height="35" decoding="async" data-nimg="1" loading="lazy"
                                    style="color: transparent;"></div>
                            <div class="amenities_title__apKqn">
                                <h3>Healthy Gourmet Meals</h3>
                            </div>
                        </div>
                        <div class="amenities_amenDiv__TGlue">
                            <div class="amenities_amenIcon__b94RB"><img alt="App-Enabled Living"
                                    srcset="https://housr.in/_next/static/media/Mobile.1ef8b50c.svg 1x, https://housr.in/_next/static/media/Mobile.1ef8b50c.svg 2x"
                                    src="https://housr.in/_next/static/media/Mobile.1ef8b50c.svg" width="35" height="35"
                                    decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></div>
                            <div class="amenities_title__apKqn">
                                <h3>App-Enabled Living</h3>
                            </div>
                        </div>
                    </div>
                    <div class="amenities_cta__Ank7t"><a href="properties.php"><button>Find my Roomsoom</button></a>
                    </div>
                </div>
            </div>
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
                        <div class="community_circle1__3VApH"></div>
                        <div class="community_circle2__TcQVK"></div>
                        <div class="community_circle3__0v2QV"></div>
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
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color:transparent">
                                            </div>
                                            <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                    srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color:transparent">
                                            </div>
                                            <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                    srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color:transparent">
                                            </div>
                                            <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                    srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
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
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color:transparent">
                                            </div>
                                            <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                    srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color:transparent">
                                            </div>
                                            <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                    srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color:transparent">
                                            </div>
                                            <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                    srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
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
                                            src="asset/images/testimonials-img/user1.webp" "
                                        width=" 100" height="100" decoding="async" data-nimg="1" loading="lazy"
                                            style="color:transparent"></div>
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
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color:transparent">
                                            </div>
                                            <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                    srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color:transparent">
                                            </div>
                                            <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                    srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color:transparent">
                                            </div>
                                            <div class="testimonials_starIcon__qAQFI"><img alt="Star"
                                                    srcset="https://housr.in/_next/static/media/Star.618c4448.svg 1x, https://housr.in/_next/static/media/Star.618c4448.svg 2x"
                                                    src="https://housr.in/_next/static/media/Star.618c4448.svg"
                                                    width="25" height="25" decoding="async" data-nimg="1" loading="lazy"
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
                    <div class="testimonials_icons__g8EhO"><span><img class="testim__left__arrow" alt="left"
                                srcset="https://housr.in/_next/static/media/Expand_left.87a2448c.svg 1x, https://housr.in/_next/static/media/Expand_left.87a2448c.svg 2x"
                                src="https://housr.in/_next/static/media/Expand_left.87a2448c.svg" width="24"
                                height="24" decoding="async" data-nimg="1" loading="lazy"
                                style="color:transparent"></span><span><img class="testim__right__arrow" alt="right"
                                srcset="https://housr.in/_next/static/media/Expand_right.a41c922f.svg 1x, https://housr.in/_next/static/media/Expand_right.a41c922f.svg 2x"
                                src="https://housr.in/_next/static/media/Expand_right.a41c922f.svg" width="24"
                                height="24" decoding="async" data-nimg="1" loading="lazy"
                                style="color:transparent"></span>
                    </div>
                </div>
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
            <div class="content_container__LwrrU">
                <div class="content_mainCont__xmz_n">
                    <div class="content_content__HcMmG">
                        <div class="content_heading__x5_Hn">
                            <h3>Exploring the World of Roomsoom Coliving</h3>
                        </div>

                       
                        <div class="verticle_tab">
                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'overview')"
                                    id="defaultOpen">Overview</button>
                                <button class="tablinks" onclick="openCity(event, 'hasslefree')">Hassle-free Luxury
                                    Coliving with Housr</button>
                                <button class="tablinks" onclick="openCity(event, 'convenience')">The Convenience of
                                    Luxury Coliving with Housr</button>
                                <button class="tablinks" onclick="openCity(event, 'privacy')" id="defaultOpen">The Ideal
                                    Blend of Privacy & Socialization at Housr Luxury Coliving</button>
                                <button class="tablinks" onclick="openCity(event, 'benifits')">Hidden Benefits of Housr
                                    Coliving: More Than Just a Home</button>
                                <button class="tablinks" onclick="openCity(event, 'community')">Joining the Housr
                                    Coliving
                                    Community</button>
                            </div>

                            <div id="overview" class="tabcontent">

                                <p style="width: 70%;">In today's fast-paced world, finding a place to call home that offers both comfort
                                    and
                                    convenience can be a challenge. But with Housr Coliving, the answer is simple. We
                                    provide fully furnished and serviced apartments that make hassle-free living a
                                    reality.
                                    Scroll below to take a comprehensive journey through the world of Housr, exploring
                                    the
                                    myriad benefits and amenities that come with choosing us as your home away from
                                    home.
                                </p>
                            </div>

                            <div id="hasslefree" class="tabcontent">

                                <p style="width: 70%;">At Housr, we understand that your time is valuable, and the last thing you want to
                                    worry
                                    about is setting up your new apartment. That's why our luxury apartments for rent
                                    are
                                    ready for you to move in. From cosy bedrooms to well-equipped kitchens and stylish
                                    living areas, we've thought of every detail to make your stay comfortable. <br><br>

                                    Housr Coliving spaces exemplify our core philosophy. We believe in creating a
                                    community
                                    where individuals can live together harmoniously, sharing experiences and building
                                    connections. Our apartments for rent are designed to foster this sense of community
                                    with
                                    an array of breakout zones such as theatre rooms, rooftop putting, gaming zones,
                                    fitness
                                    centres, and more. <br><br>

                                    In addition to the convenience of modern luxury apartments, we offer spacious common
                                    areas where you can interact with fellow residents, creating an enriching social
                                    experience.</p>
                            </div>

                            <div id="convenience" class="tabcontent">
                                <p style="width: 70%;">Coliving with Housr means enjoying a host of amenities that simplify your daily life.
                                    When you sign up for a Housr stay, you never have to stress about finding a maid,
                                    cook,
                                    or laundry service nearby. Our professional housekeeping services ensure that your
                                    space
                                    remains pristine. Laundry becomes a breeze with doorstep service. Moreover, we’ve
                                    also
                                    got your F&B sorted. Craving a gourmet meal? Enjoy a lavish spread of scrumptious,
                                    healthy, and hygienic food every day. <br> <br>

                                    Housr Coliving goes above and beyond to fulfil your expectations of a seamless stay.
                                    Whether you're working from home or indulging in a Sunday Netflix binge, we ensure
                                    you
                                    stay connected with super-speed Wi-Fi. To top it all, our hospitality transcends any
                                    other coliving player because Housr offers you easy access to 24/7 assistance from
                                    IHM-trained Resident Managers at the property and our user-friendly app. <br><br>

                                    With Housr, you don't just find a place to live; you find a community that matches
                                    your
                                    vibe. Explore Housr Coliving and Apartments for Rent effortlessly, as we want you to
                                    discover the perfect housing solution with ease.</p>
                            </div>
                            <div id="privacy" class="tabcontent">
                                <p style="width: 70%;">
                                    One of the unique aspects of Housr Coliving is our ability to strike the perfect
                                    balance
                                    between privacy and community living. Our furnished chic rooms provide the ideal
                                    home
                                    for working professionals, offering every amenity imaginable. But it's not just
                                    about
                                    your room; it's about the incredible breakout zones we provide. From gaming zones to
                                    pool tables, theatre rooms to rooftop putting, and fitness zones, we've created
                                    spaces
                                    for you to socialize with ease. <br><br>

                                    The biggest plus? Our weekly community events. From pet therapy to stand-up comedy,
                                    DJ
                                    Nights, and Open Mics, our superb community team organizes varied community events
                                    to
                                    cater to the diverse interests of Housr Homies. These gatherings bring residents
                                    together, fostering a sense of belonging and camaraderie. It's more than just a
                                    place to
                                    stay; it's a vibrant community waiting to welcome you.
                                </p>
                            </div>
                            <div id="benifits" class="tabcontent">
                                <p style="width: 70%;">
                                    While the luxury apartments and community events are major attractions, Housr offers
                                    a
                                    range of hidden benefits that make your stay even more delightful. Here are some of
                                    them: <br><br>

                                    <b> Hangout Spaces for a Weekend Movie Binge - Housr's Theatre Rooms</b> <br>
                                    Imagine having a state-of-the-art theatre right within your living space. Housr's
                                    theatre rooms are equipped with high-quality audiovisual systems, comfortable
                                    seating,
                                    and every OTT subscription. It's the perfect setting for a weekend movie binge with
                                    friends or even a solo cinematic escape. <br><br>

                                    <b>Fitness Zones for a Healthy Lifestyle</b> <br>
                                    Maintaining a healthy lifestyle is made easy at Housr Luxury Coliving. Our fitness
                                    zones
                                    are well-equipped with modern gym equipment. Whether you're a fitness enthusiast or
                                    just
                                    looking to stay active, you'll have everything you need right at your doorstep.
                                    <br><br>

                                    <b>Rooftop for Leisure</b> <br>
                                    For those moments when you need to unwind and enjoy some fresh air, our rooftop
                                    spaces
                                    offer the perfect solution. You can relax with a book, soak in the sun, or simply
                                    take
                                    in the panoramic views of the city. <br><br>

                                    <b>Vending Machines for Snack Cravings</b> <br>
                                    Late-night snack cravings? No problem. Housr provides vending machines stocked with
                                    a
                                    variety of snacks and beverages, ensuring that you have access to your favourite
                                    treats
                                    24/7.
                                </p>
                            </div>
                            <div id="community" class="tabcontent">
                                <p style="width: 70%;">When you choose Housr Luxury Coliving, you're not just renting an apartment; you're
                                    becoming part of a vibrant and forward-thinking community. We believe in creating a
                                    space where individuals can thrive, connect, and create lasting memories. <br><br>

                                    Our community is a melting pot of cultures, professions, and backgrounds. It's a
                                    place
                                    where you can learn, grow, and forge friendships that last a lifetime. Whether
                                    you're
                                    new to the city or simply seeking a change of scenery, Housr welcomes you with open
                                    arms. <br><br>

                                    In conclusion, Housr is more than just a housing solution; it's a lifestyle choice.
                                    With
                                    hassle-free luxury coliving, unmatched convenience, and a thriving community, we
                                    offer
                                    the ultimate living experience for working professionals. Say goodbye to the stress
                                    of
                                    setting up a new home and embrace the comfort and convenience of Housr, your
                                    destination
                                    for luxury coliving. <br><br>

                                    Discover a world where luxury and community meet seamlessly, where comfort and
                                    convenience redefine your living experience. Choose Housr Coliving for a life that's
                                    both extraordinary and effortless. Join us in creating a brighter and more inclusive
                                    future, one community at a time.</p>
                            </div>
                        </div>
                       
                        <div class="mobile_collapsible_tab">
                            <button type="button" class="collapsible">Overview</button>
                            <div class="content">
                                <p style="width: 70%;">In today's fast-paced world, finding a place to call home that offers both comfort
                                    and
                                    convenience can be a challenge. But with Housr Coliving, the answer is simple. We
                                    provide fully furnished and serviced apartments that make hassle-free living a
                                    reality.
                                    Scroll below to take a comprehensive journey through the world of Housr, exploring
                                    the
                                    myriad benefits and amenities that come with choosing us as your home away from
                                    home.</p>
                            </div>
                            <button type="button" class="collapsible">Hassle-free Luxur Coliving with Housr</button>
                            <div class="content">
                                <p style="width: 70%;">At Housr, we understand that your time is valuable, and the last thing you want to
                                    worry
                                    about is setting up your new apartment. That's why our luxury apartments for rent
                                    are
                                    ready for you to move in. From cosy bedrooms to well-equipped kitchens and stylish
                                    living areas, we've thought of every detail to make your stay comfortable. <br><br>

                                    Housr Coliving spaces exemplify our core philosophy. We believe in creating a
                                    community
                                    where individuals can live together harmoniously, sharing experiences and building
                                    connections. Our apartments for rent are designed to foster this sense of community
                                    with
                                    an array of breakout zones such as theatre rooms, rooftop putting, gaming zones,
                                    fitness
                                    centres, and more. <br><br>

                                    In addition to the convenience of modern luxury apartments, we offer spacious common
                                    areas where you can interact with fellow residents, creating an enriching social
                                    experience.</p>
                            </div>
                            <button type="button" class="collapsible">The Convenience of Luxury Coliving with
                                Housr</button>
                            <div class="content">
                                <p style="width: 70%;">Coliving with Housr means enjoying a host of amenities that simplify your daily life.
                                    When you sign up for a Housr stay, you never have to stress about finding a maid,
                                    cook,
                                    or laundry service nearby. Our professional housekeeping services ensure that your
                                    space
                                    remains pristine. Laundry becomes a breeze with doorstep service. Moreover, we’ve
                                    also
                                    got your F&B sorted. Craving a gourmet meal? Enjoy a lavish spread of scrumptious,
                                    healthy, and hygienic food every day. <br> <br>

                                    Housr Coliving goes above and beyond to fulfil your expectations of a seamless stay.
                                    Whether you're working from home or indulging in a Sunday Netflix binge, we ensure
                                    you
                                    stay connected with super-speed Wi-Fi. To top it all, our hospitality transcends any
                                    other coliving player because Housr offers you easy access to 24/7 assistance from
                                    IHM-trained Resident Managers at the property and our user-friendly app. <br><br>

                                    With Housr, you don't just find a place to live; you find a community that matches
                                    your
                                    vibe. Explore Housr Coliving and Apartments for Rent effortlessly, as we want you to
                                    discover the perfect housing solution with ease.</p>
                            </div>
                            <button type="button" class="collapsible">The Ideal Blend of Privacy & Socialization at
                                Housr Luxury Coliving</button>
                            <div class="content">
                                <p style="width: 70%;">One of the unique aspects of Housr Coliving is our ability to strike the perfect
                                    balance
                                    between privacy and community living. Our furnished chic rooms provide the ideal
                                    home
                                    for working professionals, offering every amenity imaginable. But it's not just
                                    about
                                    your room; it's about the incredible breakout zones we provide. From gaming zones to
                                    pool tables, theatre rooms to rooftop putting, and fitness zones, we've created
                                    spaces
                                    for you to socialize with ease. <br><br>

                                    The biggest plus? Our weekly community events. From pet therapy to stand-up comedy,
                                    DJ
                                    Nights, and Open Mics, our superb community team organizes varied community events
                                    to
                                    cater to the diverse interests of Housr Homies. These gatherings bring residents
                                    together, fostering a sense of belonging and camaraderie. It's more than just a
                                    place to
                                    stay; it's a vibrant community waiting to welcome you.</p>
                            </div>
                            <button type="button" class="collapsible">Hidden Benefits of Housr Coliving: More Than Just
                                a Home</button>
                            <div class="content">
                                <p style="width: 70%;">
                                    While the luxury apartments and community events are major attractions, Housr offers
                                    a range of hidden benefits that make your stay even more delightful. Here are some
                                    of them: <br> <br>

                                    <b> Hangout Spaces for a Weekend Movie Binge - Housr's Theatre Rooms</b> <br>
                                    Imagine having a state-of-the-art theatre right within your living space. Housr's
                                    theatre rooms are equipped with high-quality audiovisual systems, comfortable
                                    seating, and every OTT subscription. It's the perfect setting for a weekend movie
                                    binge with friends or even a solo cinematic escape. <br><br>

                                    <b>Fitness Zones for a Healthy Lifestyle</b><br>
                                    Maintaining a healthy lifestyle is made easy at Housr Luxury Coliving. Our fitness
                                    zones are well-equipped with modern gym equipment. Whether you're a fitness
                                    enthusiast or just looking to stay active, you'll have everything you need right at
                                    your doorstep. <br><br>

                                    <b>Rooftop for Leisure</b><br>
                                    For those moments when you need to unwind and enjoy some fresh air, our rooftop
                                    spaces offer the perfect solution. You can relax with a book, soak in the sun, or
                                    simply take in the panoramic views of the city. <br><br>

                                    <b>Vending Machines for Snack Cravings</b> <br>
                                    Late-night snack cravings? No problem. Housr provides vending machines stocked with
                                    a variety of snacks and beverages, ensuring that you have access to your favourite
                                    treats 24/7.
                                </p>
                            </div>
                            <button type="button" class="collapsible">Joining the Housr Coliving Community</button>
                            <div class="content">
                                <p style="width: 70%;">
                                    When you choose Housr Luxury Coliving, you're not just renting an apartment; you're
                                    becoming part of a vibrant and forward-thinking community. We believe in creating a
                                    space where individuals can thrive, connect, and create lasting memories. <br><br>

                                    Our community is a melting pot of cultures, professions, and backgrounds. It's a
                                    place where you can learn, grow, and forge friendships that last a lifetime. Whether
                                    you're new to the city or simply seeking a change of scenery, Housr welcomes you
                                    with open arms. <br><br>

                                    In conclusion, Housr is more than just a housing solution; it's a lifestyle choice.
                                    With hassle-free luxury coliving, unmatched convenience, and a thriving community,
                                    we offer the ultimate living experience for working professionals. Say goodbye to
                                    the stress of setting up a new home and embrace the comfort and convenience of
                                    Housr, your destination for luxury coliving. <br><br>

                                    Discover a world where luxury and community meet seamlessly, where comfort and
                                    convenience redefine your living experience. Choose Housr Coliving for a life that's
                                    both extraordinary and effortless. Join us in creating a brighter and more inclusive
                                    future, one community at a time.
                                </p>
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

        <a class="whatsapp-link" href="https://wa.me/+918810107070" target="_blank"><img width="60px" height="60px"
                class="whatsapp-icon" src="asset/images/whatsapp-icon1.png" alt=""></a>

        <!-- ===== FOOTER SECTION ===== -->
        <?php  include './header_footer/footer.php' ;      ?>
        <!-- ===== /FOOTER SECTION ===== -->



        <!-- =======JS FILES LINKS -->
        <script src="js/side_nav.js"></script>
        <script src="js/request-call.js"></script>
        <script src="js/testimonCardSlide.js"></script>
        <script src="js/cityCardSlide.js"></script>
        <script src="js/collapsiblFAQ.js"></script>
        <script src="js/explore_tab.js"></script>
        <!-- <script src="js/active_class.js"></script> -->
        <script src="js/login_info_popup.js"></script>
        <!-- <script src="js/popupOnPageLoad.js"></script> -->

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
        </script>

</body>

</html>