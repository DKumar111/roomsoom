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
    <style>
    :root {
        --black: #34435E;
        --white: #ffffff;
    }

    main {
        min-width: 300px;
        max-width: 500px;
        margin: auto;
        padding: 0 1.5rem;
    }

    .Progress__timeline {
        font-size: 1em;
        line-height: 1.75em;
        border-top: 3px solid;
        border-image: linear-gradient(to right, #743ad5 0%, #d53a9d 100%);
        border-image-slice: 1;
        border-width: 3px;
        margin: 0;
        padding: 40px;
        counter-increment: section;
        position: relative;
        color: var(--black);
        display: flex;
        flex-direction: column;


        &:before {
            content: counter(section);
            position: absolute;
            border-radius: 50%;
            padding: 10px;
            height: 1.25em;
            width: 1.25em;
            background-color: var(--black);
            text-align: center;
            line-height: 1.25em;
            color: var(--white);
            font-size: 1em;
        }
    }

    .Progress__timeline:nth-child(odd) {
        border-right: 3px solid;
        padding-left: 0;

        &:before {
            left: 100%;
            margin-left: -20px;
        }
    }

    .Progress__timeline:nth-child(even) {
        border-left: 3px solid;
        padding-right: 0;

        &:before {
            right: 100%;
            margin-right: -20px;
        }
    }

    .Progress__timeline:first-child {
        border-top: 0;
        border-top-right-radius: 0;
        border-top-left-radius: 0;
    }

    .Progress__timeline:last-child {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .progress_timeline_heading {
        font-weight: bold;
        font-size: 1.5rem;
    }
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
                <!-- <div class="mission_how_book">
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
                </div> -->
                <main>
                    <p class="Progress__timeline">
                        <span class="progress_timeline_heading">Get in touch with</span>
                        <span><img width="100px" height="100px" src="asset/images/howtobook/touchWith.jpg"
                                alt=""></span>
                        Doggo ipsum long bois lotsa pats blep. What a nice floof ruff super chub very good spot, the
                        neighborhood
                        pupper lotsa pats. Borkdrive shibe shoober what a nice floof, borking doggo.
                    </p>
                    <p class="Progress__timeline">
                        <span class="progress_timeline_heading">Shortlist Your Options</span>
                        <span><img width="100px" height="100px" src="asset/images/howtobook/shortlist.webp"
                                alt=""></span>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum ad consectetur dolorem nulla
                        voluptates esse
                        adipisci iste amet! Deleniti accusamus hic fugit ducimus itaque odio.
                    </p>
                    <p class="Progress__timeline">
                        <span class="progress_timeline_heading">Virtual Tour</span>
                        <span><img width="100px" height="100px" src="asset/images/howtobook/virtualTour.png"
                                alt=""></span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas soluta eligendi sit fugiat?
                        Consectetur
                        qui ipsam, obcaecati quis repudiandae beatae?
                    </p>
                    <p class="Progress__timeline">
                        <span class="progress_timeline_heading">Pay Token</span>
                        <span><img width="100px" height="100px" src="asset/images/howtobook/token.jpg" alt=""></span>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum officia quod beatae alias.
                        Necessitatibus,
                        voluptate labore suscipit dolore ab velit nesciunt aperiam a quod incidunt.
                    </p>
                    <p class="Progress__timeline">
                        <span class="progress_timeline_heading">Move In</span>
                        <span><img width="100px" height="100px" src="asset/images/howtobook/moveIn.jpg"
                                alt=""></span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis vitae adipisci quasi nobis
                        mollitia nam,
                        perspiciatis quae aspernatur accusantium voluptatibus dolor id a delectus magnam!
                    </p>
                    <p class="Progress__timeline">
                        <span class="progress_timeline_heading">Move Out</span>
                        <span><img width="100px" height="100px" src="asset/images/howtobook/moveout.jpg"
                                alt=""></span>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea minima nostrum, recusandae culpa
                        totam ratione
                        autem sapiente minus quibusdam eaque optio esse ex, voluptatem tempora.
                    </p>
                </main>
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
    <!-- =======/HOW TO BOOK MAIN SECTION======== -->


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