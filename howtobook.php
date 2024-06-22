<?php
include ('phpScript/dbconnect.php') ; 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How To Book</title>
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


    <!-- =======HOW TO BOOK MAIN SECTION======== -->
    <div style="margin-top:0rem !important;" class="wrapperTop">
        <div class="book_container__6bWqv">
            <div class="book_mainCont__PUUz7">
                <div class="howTo_image"><img src="asset/images/howtobook/howto.png" alt=""></div>
                <div class="book_title__6mf1e">
                    <h2>How To Book ?</h2>
                </div>
            </div>
        </div>
        <div class="goals_container__VmbxY">
            <div class="goals_goalsMain__FDzqE">
                <!-- <div class="goals_mission__A9GbZ">
                    <div class="goals_Image__riXXr">
                        <img alt="roof"
                            
                            src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftouch.c1fd6f85.png&w=828&q=75"
                            width="414" height="284" decoding="async" data-nimg="1" loading="lazy"
                            style="color:transparent">
                        <div class="goals_number__p8vWt">
                            <h2>1</h2>
                        </div>
                    </div>
                    <div class="goals_text__m3NQ_">
                        <h2>Get in touch with us</h2>
                        <p>You can either fill out the contact form on our website or contact us directly to get in
                            touch with our team. Once you hit the submit button, one of our diligent sales
                            representatives will contact you within 24 hours to help you find your dream luxury home.
                        </p>
                    </div>
                </div>
                <div class="goals_vision__JaXmd">
                    <div class="goals_text__m3NQ_">
                        <h2>Shortlist your options</h2>
                        <p>Our sales representative will share a list of available Roomsoom spaces that match your
                            preference, budget and location. With so many stunning spaces to choose from, we shall help
                            you shortlist the best fit based on your requirements and needs. We will be happy to answer
                            any questions you may have about the property and amenities.</p>
                    </div>
                    <div class="goals_Image__riXXr">
                        <img alt="roof"
                            
                            src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fshort.13ab798e.png&w=828&q=75"
                            width="414" height="284" decoding="async" data-nimg="1" loading="lazy"
                            style="color:transparent">
                        <div class="goals_number__p8vWt">
                            <h2>2</h2>
                        </div>
                    </div>
                </div>
                <div class="goals_goals__Kaq4e">
                    <div class="goals_Image__riXXr">
                        <img alt="roof"
                            
                            src="https://360virtualtoursnw.co.uk/wp-content/uploads/2023/05/Virtual-Tours_1000x550.jpg"
                            width="414" height="284" decoding="async" data-nimg="1" loading="lazy"
                            style="color:transparent">
                        <div class="goals_number__p8vWt">
                            <h2>3</h2>
                        </div>
                    </div>
                    <div class="goals_text__m3NQ_">
                        <h2>Virtual Tour/ Directly Visit the property</h2>
                        <p>It's okay to get cold feet before you commit to a space, and we will leave no stone unturned
                            to help you make the best decision here! We provide 360-degree virtual tours that let you
                            explore every nook and corner of the property without moving an inch. You can also take your
                            time to visit the property and check out the amenities, room layouts, and common areas to
                            ensure that you are making the right choice.</p>
                    </div>
                </div>
                <div class="goals_values__Czrcw">
                    <div class="goals_text__m3NQ_">
                        <h2>Pay Token</h2>
                        <p>Once you have finalised your Roomsoom, you can pay a token to secure your booking and confirm
                            your move-in dates according to availability. The token amount is a fee that reserves the
                            room/apartment for you. You can pay via Credit Card, Debit Card, net banking, or UPI. Our
                            sales representative will guide you through the payment process &amp; answer any questions.
                        </p>
                    </div>
                    <div class="goals_Image__riXXr">
                        <img alt="roof"
                            
                            src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpay.ead59222.png&w=828&q=75"
                            width="414" height="284" decoding="async" data-nimg="1" loading="lazy"
                            style="color:transparent">
                        <div class="goals_number__p8vWt">
                            <h2>4</h2>
                        </div>
                    </div>
                </div>
                <div class="goals_goals__Kaq4e">
                    <div class="goals_Image__riXXr">
                        <img alt="roof"
                           
                            src="https://www.adanirealty.com/-/media/Project/Realty/Blogs/ReadytoMove-Properties-Weighing-the-Benefits-and-Drawbacks-for-Homebuyers.png"
                            width="414" height="284" decoding="async" data-nimg="1" loading="lazy"
                            style="color:transparent">
                        <div class="goals_number__p8vWt">
                            <h2>5</h2>
                        </div>
                    </div>
                    <div class="goals_text__m3NQ_">
                        <h2>Move in</h2>
                        <p>We want you to feel at home from the moment you step into our luxurious coliving community.
                            Our team will be ready to welcome you and assist you with the check-in process on your
                            stipulated move-in date. Your Resident Manager shall complete all the documentation and
                            provide all the necessary information, including the Wi-Fi password, keycard access, and
                            Roomsoom Resident Dos and Don'ts. <br> <br> P.S.- If the room/apartment is available, you can
                            move in immediately after paying the token.</p>
                    </div>
                </div>
                <div class="goals_values__Czrcw">
                    <div class="goals_text__m3NQ_">
                        <h2>Move Out</h2>
                        <p>Moving out can be a real pain in the neck. But fear not! Roomsoom is just as hassle-free when
                            moving out as when moving in. Our move-out process is super seamless, and only in the rarest
                            occasion do we go beyond our 30 days TAT for your Security Deposit Refund!</p>
                    </div>
                    <div class="goals_Image__riXXr">
                        <img alt="roof"
                        
                            src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fout.94d0a560.png&w=828&q=75"
                            width="414" height="284" decoding="async" data-nimg="1" loading="lazy"
                            style="color:transparent">
                        <div class="goals_number__p8vWt">
                            <h2>6</h2>
                        </div>
                    </div>
                </div> -->
                <div class="mission_how_book">
                    <div class="mission_how_book_sub_section">
                        <div class="">
                        <p class="mission_img_text" >Get in touch with us</p>
                            <img width="70px" height="70px" src="asset/images/howtobook/touchWith.jpg" alt="">
                        </div>
                        <div class="mission_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, aspernatur.</div>
                    </div>
                    <div class="mission_how_book_sub_section">
                        <div class="">
                        <p class="mission_img_text" >Shortlist your options</p>
                            <img width="70px" height="70px" src="asset/images/howtobook/shortlist.webp" alt="">
                        </div>
                        <div class="mission_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, aspernatur.</div>
                    </div>
                    <div class="mission_how_book_sub_section">
                        <div class="">
                        <p class="mission_img_text" >Virtual Tour</p>
                            <img width="70px" height="70px" src="asset/images/howtobook/virtualTour.png" alt="">
                        </div>
                        <div class="mission_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, aspernatur.</div>
                    </div>
                    <div class="mission_how_book_sub_section">
                        <div class="">
                        <p class="mission_img_text" >Pay Token</p>
                            <img width="70px" height="70px" src="asset/images/howtobook/token.jpg" alt="">
                        </div>
                        <div class="mission_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, aspernatur.</div>
                    </div>
                    <div class="mission_how_book_sub_section">
                        <div class="">
                        <p class="mission_img_text" >Move in</p>
                            <img width="70px" height="70px" src="asset/images/howtobook/movein.jpg" alt="">
                        </div>
                        <div class="mission_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, aspernatur.</div>
                    </div>
                    <div class="mission_how_book_sub_section">
                        <div class="">
                        <p class="mission_img_text" >Move Out</p>
                            <img width="70px" height="70px" src="asset/images/howtobook/moveout.jpg" alt="">
                        </div>
                        <div class="mission_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, aspernatur.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bcta_container__MaNwO">
            <div class="bcta_mainCont__Vt6X4">
                <p>Booking your dream space with us is smooth and hassle-free. From shortlisting your options to taking
                    a virtual tour, paying the token, and moving in, our diligent sales representative and brilliant
                    team are here to assist you every step of the way. Contact us today to start your journey towards
                    the luxurious coliving experience you’ve always dreamed of!<br><a href="properties.php"><button>
                            <p>Find my Roomsoom</p>
                        </button></a></p>
            </div>
        </div>
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
    <!-- =======/HOW TO BOOK MAIN SECTION======== -->


    <a class="whatsapp-link" href="https://wa.me/+918810107070" target="_blank"><img  class="whatsapp-icon" src="asset/images/whatsapp-icon1.png" alt=""></a>

    <!-- =====FOOTER====== -->
    <?php include './header_footer/footer.php'  ?>
    <!-- =====/FOOTER====== -->

    <script src="js/side_nav.js"></script>
    <script src="js/request-call.js"></script>
    <script src="js/active_class.js"></script>
    <script src="js/login_info_popup.js"></script>
</body>

</html>