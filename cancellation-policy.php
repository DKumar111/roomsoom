<?php
include ('phpScript/dbconnect.php') ; 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cancellation Policy</title>
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
        <div class="cancel_container__gCNQD">
            <div class="cancel_mainCont__HUDPg">
                <div class="cancel_Head__Mowl_">
                    <h1>Cancellation Policy</h1>
                </div>
                <div class="cancel_content__C5sRj">
                    <div class="cancel_mainP__xcG0V">
                        <p>Roomsoom loves its members and we would never want you to leave. But, in case you have to leave
                            us for some reason, we will make the process as seamless as your stay with us. Our team will
                            make sure you don’t face any problems or discomfort in moving out. We would just miss you
                            immensely and that’s a bummer!</p>
                    </div>
                    <ul>
                        <li>
                            <h2>REFUND ON CANCELLATION</h2>
                        <li class="cancel_subli__Mp9nF">
                            <h3><span>1.1</span> CANCELLATION BEFORE MOVE-IN</h3>
                            <p>We put in a lot of time and effort in preparing your room and very much look forward to
                                welcoming you. We’ll be heartbroken if you decide not to move-in, but your rent and
                                security deposit will be refunded. Token money amount, however, is non-refundable.</p>
                        </li>
                        </li>
                        <li>
                            <h2>REFUND ON TOKEN MONEY</h2>
                            <p>Token money is the amount paid by you to Roomsoom to show your commitment to moving into
                            Roomsoom. Roomsoom accepts a minimum token amount of Rs. 10,000. Token amount is
                                nonrefundable.</p>
                        </li>
                        <li>
                            <h2>MOVE-OUT POLICY</h2>
                        <li class="cancel_subli__Mp9nF">
                            <h3><span>4.1</span> EXIT NOTICE</h3>
                            <p>We really, really wish you don’t have to leave. But in case the circumstances are
                                unavoidable, and you have to go, the process is again, simple. To checkout, just raise a
                                ticket on the Roomsoom App, giving us 1-month notice. This is absolutely mandatory and
                                nonnegotiable, under any circumstances. In case you need to vacate earlier than the
                                scheduled move-out date, please feel free to do so. However, in case the rent is not
                                paid for the remaining days, the balance amount will be adjusted from the security
                                deposit. At Roomsoom, we have a minimum lock-in period of 3 months. If you decide to leave
                                early, 1 month’s security deposit shall be forfeited. Extension of stay after your
                                move-out date is totally on the discretion of Roomsoom.</p>
                        </li>
                        <li class="cancel_subli__Mp9nF">
                            <h3><span>4.2</span> REFUND TERMS</h3>
                            <p>Since there are no demanding landlords here at Roomsoom, there are no unnecessary money
                                blockages either. Before you vacate your apartment/studio, our representative will
                                quickly check for damages, if any. If you’ve given us a month’s notice, and there have
                                been no damages to the property, you’ll get back your entire security deposit. The
                                refund process, after taking the damages into account, usually takes around 45 working
                                days. However, in case you haven’t given us 1-month notice, or if there are any damages,
                                money may be deducted from your security deposit. Having said that, we understand life
                                is sometimes unplanned. If your reason to move out is genuine, we will happily make an
                                exception on the security deposit.</p>
                        </li>
                        <li class="cancel_subli__Mp9nF">
                            <h3><span>4.3</span> REFUND TIMELINE</h3>
                            <p>It shall take up to 45-60 working days to process the refund. A deposit refund statement
                                would be sent to the member with a breakdown of deductions, if any.</p>
                        </li>
                        <li class="cancel_subli__Mp9nF">
                            <h3><span>4.3</span> REFUND MODE</h3>
                            <p>All refund shall be processed through online transfer.</p>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- =====FOOTER====== -->
    <?php include './header_footer/footer.php'  ?>
    <!-- =====/FOOTER====== -->

    <script src="js/side_nav.js"></script>
    <script src="js/request-call.js"></script>
    <script src="js/active_class.js"></script>
    <script src="js/login_info_popup.js"></script>
</body>

</html>