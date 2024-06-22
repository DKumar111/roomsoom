<?php
include ('phpScript/dbconnect.php') ; 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privileges</title>
    <link rel="shortcut icon" href="asset/images/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    
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

    <!-- =====HEADER====== -->
    <?php include './header_footer/header.php'  ?>
    <!-- =====/HEADER====== -->



    <!-- ===================PRIVILEGES MAIN SECTION ========================= -->
    <div class="wrapperTop">
        <div class="privileges_container__fCYj4">
            <div class="privileges_mainCont__BRBPI">
                <div class="privileges_head__S8Kl5">
                    <div class="privileges_mainHead__jX6yE">
                        <h1>Welcome to <br> Roomsoom</h1>
                        <h2>where luxury meets convenience &amp; helps you live your best life!</h2>
                    </div>
                </div>
            </div>
            <div class="fcard_container__xGKag">
                <div class="fcard_mainCon__peUIn">
                    <div class="fcard_title__R3nKp">
                        <h2>Swipe to learn more about your Roomsoom privileges.</h2>
                        <div class="fcard_icons__4C7Dz"><span><img class="back" alt="left"
                                    srcset="https://housr.in/_next/static/media/Expand_left.87a2448c.svg 1x, https://housr.in/_next/static/media/Expand_left.87a2448c.svg 2x"
                                    src="https://housr.in/_next/static/media/Expand_left.87a2448c.svg" width="24" height="24"
                                    decoding="async" data-nimg="1" loading="lazy"
                                    style="color:transparent"></span><span><img class="forward" alt="right"
                                    srcset="https://housr.in/_next/static/media/Expand_right.a41c922f.svg 1x, https://housr.in/_next/static/media/Expand_right.a41c922f.svg 2x"
                                    src="https://housr.in/_next/static/media/Expand_right.a41c922f.svg" width="24" height="24"
                                    decoding="async" data-nimg="1" loading="lazy" style="color:transparent"></span>
                        </div>
                    </div>
                    <div class="fcard_slider__jP2i8" id="btnClick">
                        <div class="fcard_slide__up6CU">
                            <div class="fcard_img__jthVR"><img alt="banner"
                                    srcset="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FFully.15f88f93.jpg&w=3840&q=75.jpg&amp;w=1200&amp;q=75 1x, https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FFully.15f88f93.jpg&w=3840&q=75.jpg&amp;w=3840&amp;q=75 2x"
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FFully.15f88f93.jpg&w=3840&q=75.jpg&amp;w=3840&amp;q=75"
                                    width="1200" height="1600" decoding="async" data-nimg="1" loading="lazy"
                                    style="color:transparent"></div>
                            <h2>Fully Furnished</h2>
                            <p>Spacious, furnished upscale rooms with luxurious furniture, fittings, balconies, and
                                work-from-home compatible desks.</p>
                        </div>
                        <div class="fcard_slide__up6CU">
                            <div class="fcard_img__jthVR"><img alt="banner"
                                    
                                    src="https://www.stregis.ca/wp-content/uploads/2022/03/shutterstock_485076070-scaled.jpg"
                                    width="1200" height="800" decoding="async" data-nimg="1" loading="lazy"
                                    style="color:transparent"></div>
                            <h2>IHM Trained Resident Managers</h2>
                            <p>No broker or landlord interference. Get 24/7 support from top hospitality experts and IHM
                                graduates.</p>
                        </div>
                        <div class="fcard_slide__up6CU">
                            <div class="fcard_img__jthVR"><img alt="banner"
                                   
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Froom.4bb5fbcf.png&w=750&q=75"
                                    width="342" height="298" decoding="async" data-nimg="1" loading="lazy"
                                    style="color:transparent"></div>
                            <h2>Daily Professional Housekeeping</h2>
                            <p>No-contact housekeeping by trained hospitality professionals</p>
                        </div>
                        <div class="fcard_slide__up6CU">
                            <div class="fcard_img__jthVR"><img alt="banner"
                                   
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fwifi.7beeee5f.jpg&w=3840&q=75"
                                    width="2000" height="1331" decoding="async" data-nimg="1" loading="lazy"
                                    style="color:transparent"></div>
                            <h2>High-speed Wifi</h2>
                            <p>Lightning-fast WiFi to match the pace of your lifestyle</p>
                        </div>
                        <div class="fcard_slide__up6CU">
                            <div class="fcard_img__jthVR"><img alt="banner"
                                   
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmeals.bfd0dae9.jpg&w=3840&q=75"
                                    width="1200" height="859" decoding="async" data-nimg="1" loading="lazy"
                                    style="color:transparent"></div>
                            <h2>Healthy Gourmet Meals</h2>
                            <p>A lavish spread of scrumptious meals for breakfast and dinner</p>
                        </div>
                        <div class="fcard_slide__up6CU">
                            <div class="fcard_img__jthVR"><img alt="banner"
                                   
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flau.322d0432.png&w=828&q=75"
                                    width="386" height="401" decoding="async" data-nimg="1" loading="lazy"
                                    style="color:transparent"></div>
                            <h2>Laundry at Your Doorstep</h2>
                            <p>Clean clothes at your doorstep twice every week.</p>
                        </div>
                        <div class="fcard_slide__up6CU">
                            <div class="fcard_img__jthVR"><img alt="banner"
                                    
                                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fapp.211fd848.jpg&w=3840&q=75"
                                    width="2000" height="1648" decoding="async" data-nimg="1" loading="lazy"
                                    style="color:transparent"></div>
                            <h2>App-Enabled Living</h2>
                            <p>Pay rent or raise maintenance tickets with one click on Roomsoom's mobile application.</p>
                        </div>
                        <div class="fcard_slide__up6CU">
                            <div class="fcard_img__jthVR"><img alt="banner"
                                   
                                    src="https://www.vchri.ca/sites/default/files/styles/max_1300x1300/public/field/image/news_20210525_tempcheck_0.jpg?itok=WI0TY9tF"
                                    width="1500" height="1000" decoding="async" data-nimg="1" loading="lazy"
                                    style="color:transparent"></div>
                            <h2>3-Tier Security</h2>
                            <p>Tech-enabled locks, 24/7 CCTV surveillance &amp; security guards on duty around the
                                clock.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="privileges_featSec__KdFrp">
                <p>But that's not all - we go above and beyond to ensure that our residents feel pampered and indulged,
                    with access to a range of plush amenities like in-house fine dining, state-of-the-art fitness
                    centres, gaming consoles and more. <br> Whether you want to unwind after a long day with a game of
                    billiards, catch a movie in our private cinema, or rally your friends for a tennis tournament, Roomsoom
                    amenities are tailored to perfection for each one of your interests!</p>
            </div>
            <div class="privileges_imageAm__xfPt4"><img alt="banner"
                    
                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Famen.0f9c1231.png&w=2048&q=75" width="996"
                    height="492" decoding="async" data-nimg="1" class="privileges_desk__PTuMB" loading="lazy"
                    style="color:transparent"><img alt="banner"
                   
                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FPhotoTile.046a8934.jpg&w=2048&q=75"
                    width="987" height="1455" decoding="async" data-nimg="1" class="privileges_phone__oz_DX"
                    loading="lazy" style="color:transparent"></div>
            <div class="privileges_featSecond__TKbXk">
                <p>Luxury living is about more than just the physical space - it's about the experience. At Roomsoom, we're
                    committed to creating a community of like-minded individuals who like to stay ahead of the curve.
                    And we take pride in providing a level of service that is unparalleled in the industry, along with a
                    class apart community. From our prime locations to our expertly curated events, we're here to treat
                    you with nothing but the best bespoke living solutions. Scroll down to see the splendid social
                    experience that awaits you at Roomsoom.&nbsp;</p>
            </div>
            <div class="privileges_imageAm__xfPt4" id="privileges_commHide__gvCA1"><img alt="banner"
                   
                    src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2FAmenMain.081ca8a2.jpg&w=3840&q=75"
                    width="1068" height="1156" decoding="async" data-nimg="1" loading="lazy" style="color:transparent">
            </div>
            <div class="privileges_commSec__a8AS6">
                <div class="community_container__tbwMr">
                    <div class="community_comMain__56zqT">
                        <div class="community_comSection__XMsum">
                            <div class="community_line1__E6U4i">
                                <div class="community_box1__Cz51b"><img alt="banner"
                                        srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmusic.01e9be84.webp&amp;w=384&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmusic.01e9be84.webp&amp;w=750&amp;q=75 2x"
                                        src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmusic.01e9be84.webp&amp;w=750&amp;q=75"
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
                                        srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdidi.2f320b44.webp&amp;w=1200&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdidi.2f320b44.webp&amp;w=3840&amp;q=75 2x"
                                        src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdidi.2f320b44.webp&amp;w=3840&amp;q=75"
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
                                        srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdog.0f20d687.webp&amp;w=384&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdog.0f20d687.webp&amp;w=750&amp;q=75 2x"
                                        src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdog.0f20d687.webp&amp;w=750&amp;q=75"
                                        width="340" height="536" decoding="async" data-nimg="1" loading="lazy"
                                        style="color: transparent;">
                                    <div class="community_text__JgpPi">
                                        <div class="community_textCol__WD8wG">
                                            <h3>Furry Therapy Sesh</h3>
                                            <p>They say the best therapist walks on four legs, and we say our community
                                                deserves only the best!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="community_box2__sqYH_"><img alt="banner"
                                        srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdj.5c14ce1e.webp&amp;w=1920&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdj.5c14ce1e.webp&amp;w=3840&amp;q=75 2x"
                                        src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fdj.5c14ce1e.webp&amp;w=3840&amp;q=75"
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
                                        srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpaint.39b8867f.webp&amp;w=384&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpaint.39b8867f.webp&amp;w=750&amp;q=75 2x"
                                        src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpaint.39b8867f.webp&amp;w=750&amp;q=75"
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
                                        srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffoot.12f33a94.webp&amp;w=384&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffoot.12f33a94.webp&amp;w=750&amp;q=75 2x"
                                        src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ffoot.12f33a94.webp&amp;w=750&amp;q=75"
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
                        <div class="community_formSection__6clMG" id="community_hideComm__VvLK1">
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
                                                    <div class=" css-b62m3t-container"><span
                                                            id="react-select-2-live-region"
                                                            class="css-7pg0cj-a11yText"></span><span aria-live="polite"
                                                            aria-atomic="false" aria-relevant="additions text"
                                                            class="css-7pg0cj-a11yText"></span>
                                                        <div class="head-select-search__control css-1s2u09g-control">
                                                            <div
                                                                class="head-select-search__value-container css-1d8n9bt">
                                                                <div class="head-select-search__placeholder css-14el2xx-placeholder"
                                                                    id="react-select-2-placeholder">Select...</div>
                                                                <div class="head-select-search__input-container css-ackcql"
                                                                    data-value=""><input
                                                                        class="head-select-search__input"
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
                                                            <div class="head-select-search__indicators css-1wy0on6">
                                                                <span
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
                                                    <div class=" css-b62m3t-container"><span
                                                            id="react-select-3-live-region"
                                                            class="css-7pg0cj-a11yText"></span><span aria-live="polite"
                                                            aria-atomic="false" aria-relevant="additions text"
                                                            class="css-7pg0cj-a11yText"></span>
                                                        <div class="head-select-search__control css-1s2u09g-control">
                                                            <div
                                                                class="head-select-search__value-container css-1d8n9bt">
                                                                <div class="head-select-search__placeholder css-14el2xx-placeholder"
                                                                    id="react-select-3-placeholder">Select...</div>
                                                                <div class="head-select-search__input-container css-ackcql"
                                                                    data-value=""><input
                                                                        class="head-select-search__input"
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
                                                            <div class="head-select-search__indicators css-1wy0on6">
                                                                <span
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
                                            <div class="community_searchWrap__difqL"><button>Find my Roomsoom</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ===================PRIVILEGES MAIN SECTION ENDS HERE========================= -->

    <a class="whatsapp-link" href="https://wa.me/+918810107070" target="_blank"><img  class="whatsapp-icon" src="asset/images/whatsapp-icon1.png" alt=""></a>

    <!-- =====FOOTER====== -->
    <?php include './header_footer/footer.php'  ?>
    <!-- =====/FOOTER====== -->

    <script src="js/side_nav.js"></script>
    <script src="js/privilegesSlide.js"></script>
    <script src="js/request-call.js"></script>
    <script src="js/active_class.js"></script>
    <script src="js/login_info_popup.js"></script>
</body>

</html>