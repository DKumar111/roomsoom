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

    <!-- <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
    </style> -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

</head>

<body>
    <!-- ===== HEADER SECTION ===== -->
    <?php  include './header_footer/header.php' ;  ?>
    <!-- ===== /HEADER SECTION ===== -->

<!-- FAQ SECTION STARTS HERE -->
<div  class="faqs_faqscontainer__on7i_">
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
<!-- FAQ SECTION ENDS HERE -->

    <a class="whatsapp-link" href="https://wa.me/+918810107070" target="_blank"><img 
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