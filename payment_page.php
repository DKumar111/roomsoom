<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
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
        .payment_container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 10rem;
        }
        .payment_inner_container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .payment_form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            gap: 1rem;
        }
        .form-control{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<?php   include 'header_footer/header.php';   ?>
<!-- /HEADER -->

<div class="payment_container">
    <div class="payment_headline"><h2>Payment Details</h2></div>
    <div class="payment_inner_container">
        <form class="payment_form" action="" method="post">
            <div class="form-control">
                <label for="">Name on Card</label>
                <input type="text" name="name" id="">
            </div>
            <div class="form-control">
                <label for="">Card Number</label>
                <input type="text" name="card_number" id="">
            </div>
            <div class="form-control">
                <label for="">Expiry Date</label>
                <input type="text" name="expiry_date" id="">
            </div>
            <div class="form-control">
                <label for="">CVV</label>
                <input type="text" name="cvv" id="">
            </div>
            <div class="form-control">
                <input type="submit" value="Pay Now" name="submit_payment">
            </div>
        </form>
    </div>
</div>
</body>
</html>