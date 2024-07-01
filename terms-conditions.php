<?php
include ('phpScript/dbconnect.php') ; 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Terms and Conditions</title>
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
        <div class="pay_container__6NCRs">
            <div class="pay_mainCont__sfA0S">
                <div class="pay_Head__Kxe0H">
                    <h1>Terms and Conditions</h1>
                </div>
                <div class="pay_content__RQmiR">
                    <ul>
                        <li>
                            <h2>RENTAL PAYMENT TERMS</h2>
                            <p>To avoid penalties of any kind, be sure to pay the rent on or before the 5th of every
                                month. Keep in mind, our accounts close by 5pm, so if your rent is not in by then, it’ll
                                be considered late. A small late fee, equal to Rs. 200 per day is applied from the 6th
                                day of the month till the day you clear your due rent. <br> <br> However, if your rent
                                is overdue even after 15th of the month, we might have to let you go as nonpayment of
                                rent impacts the service we provide to you and to your Roomsoom's friends.</p>
                        </li>
                        <li>
                            <h2>SECURITY DEPOSIT TERMS</h2>
                            <p>Moving into Roomsoom is not just easy but also light on the pocket. All we take is 2 month's
                                security deposit + 1 month advance rent. This amount must be paid in advance before you
                                move in. However, if you are short on cash, you can consider paying deposit amount in
                                two month EMIs. <br><br>* Rent and deposit amount may vary from city to city.</p>
                        </li>
                        <li>
                            <h2>TOKEN PAYMENT TERMS</h2>
                            <p>How much do you need to pay to book your HoRoomsoomusr stay? A measly Rs.10k for twin and solo
                                rooms, that’s all. This token amount is, unfortunately, non-refundable.</p>
                        </li>
                        <li>
                            <h2>REFUND TIMELINE</h2>
                            <p>It shall take up to 45 to 60 days working days to process the refund. A deposit refund
                                statement would be sent to the member with a breakdown of deductions, if any.</p>
                        </li>
                        <li>
                            <h2>PAYMENT TERMS</h2>
                            <p>Paying your rent is easy-peasy at Roomsoom. You can choose to pay online through the Roomsoom
                                App via Paytm, UPI, Net Banking or Debit/Credit Cards. To help you pay your rent with a
                                tap of the phone, we’ll send out an app notification every time a new invoice is
                                generated.</p>
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