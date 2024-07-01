<?php

include ('phpScript/dbconnect.php') ; 
session_start();


// if(isset($_POST['send-message'])){
//     $subject = "Enquiry from Roomsoom website";
//     $name= $_POST['name'];
//     $phone= $_POST['phone'];
//     $message= $_POST['message'];

//     $toEmail = "dk9094293@gmail.com";

//     $header = [
//         'Name' =>  $name,
//         'Phone Number' => $phone,
//         'Message' => $message
//     ];

//     $header = implode("\r\n", $header);

//     mail($toEmail, $subject, $name, $header);
//     echo "<script>alert('We have recieved your message successfully!.')</script>";
//     echo "<script>window.open('contact.php','_self')</script>";
// }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
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

    <script>
    src = "https://code.jquery.com/jquery-3.5.1.js" >
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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

</head>

<body>

    <!-- =======HEADER======= -->
    <?php include './header_footer/header.php'  ?>
    <!-- =======/HEADER======= -->


    <div class="wrapperTop">
        <div class="cbanner_container___Iy31">
            <div class="cbanner_mainCont__AnbUH">
                <div class="cbanner_heading__xeGaX">
                    <h2>Connect with Roomsoom</h2>
                    <p>Drop your concern, query or feedback and we will get back to you in no time.</p>
                </div>
                <div class="cbanner_mainForm__rRxF1">
                    <div class="cbanner_bannerImg__wdNPs">
                        <div class="cbanner_cards__UMMc1">
                            <div class="cbanner_card__51iL9">
                                <div class="cbanner_imgCont__2joef"><img alt="Email" src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fsupport.c99b34f6.png&w=384&q=75 " width="192" height="192" decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></div>
                                <div class="cbanner_textBox__nC31n">
                                    <h3>Email</h3>
                                    <p>contact@roomsoom.com</p>
                                </div>
                            </div>
                            <div class="cbanner_card__51iL9">
                                <div class="cbanner_imgCont__2joef"><img alt="Careers"
                                        src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fbag.90e0a744.png&w=384&q=75"
                                        width="192" height="192" decoding="async" data-nimg="1" loading="lazy"
                                        style="color: transparent;"></div>
                                <div class="cbanner_textBox__nC31n">
                                    <h3>Careers</h3>
                                    <p>hr@roomsoom.in</p>
                                </div>
                            </div>
                            <div class="cbanner_card__51iL9">
                                <div class="cbanner_imgCont__2joef"><img alt="HOUSR HOMES PRIVATE LIMITED"
                                        src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flocation.202cade6.png&w=384&q=75"
                                        width="192" height="192" decoding="async" data-nimg="1" loading="lazy"
                                        style="color: transparent;"></div>
                                <div  class="cbanner_textBox__nC31na">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cbanner_formCont__hJXHT">
                        <div class="cbanner_formSec__bh2Go">
                            <form action="phpScript/email_msg.php" method="post">
                                <input type="text" placeholder="Name" class="cbanner_first__AfD7k" name="name"
                                    required="" id="name">
                                <input type="email" placeholder="Email" class="cbanner_first__AfD7k" name="email"
                                    required="" id="name">
                                <input type="text" placeholder="Phone Number" name="phone" required="" id="phone">
                                <input type="text" placeholder="Query/Concern" class="undefined cbanner_textarea__zv7EL"
                                    name="message" id="message">
                                <div class="cbanner_btn__Fl1rW">
                                    <input type="submit" class="cbanner_btnVal__QMF4Z" name="send_message"
                                        value="Send message">
                                </div>
                            </form>
                            <div class="cbanner_support__OIiYe">
                                <p>**You’d hear from us in the next 24 hours, but if you don’t, reach out at
                                    contact@roomsoom.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info_container__7clhk">
            <div class="info_mapCont__LyO3H">
                <section class="contact-page-map">
                    <div class="map-image">
                        </iframe>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <a class="whatsapp-link" href="https://wa.me/+918810107070" target="_blank"><img class="whatsapp-icon"
            src="asset/images/whatsapp-icon1.png" alt=""></a>

    <!-- =====FOOTER====== -->
    <?php include './header_footer/footer.php'  ?>
    <!-- =====/FOOTER====== -->

    <script src="js/side_nav.js"></script>
    <script src="js/request-call.js"></script>
    <script src="js/active_class.js"></script>
    <script src="js/login_info_popup.js"></script>
</body>

</html>