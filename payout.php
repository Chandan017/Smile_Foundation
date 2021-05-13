<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Checkout</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/ensign-form-1.css">
    <link rel="stylesheet" href="assets/css/ensign-form.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form-1.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body style="background: url(&quot;assets/img/intro-bg.jpg&quot;);">
    <nav class="navbar navbar-light navbar-expand-md fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" data-bss-hover-animate="pulse" href="index.html">Smile Foundation</a><button data-bs-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-bs-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item nav-link"><a class="nav-link" data-bss-hover-animate="pulse" href="index.html#about">About</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" data-bss-hover-animate="pulse" href="index.html#download">Donate now!</a></li>
                    <li class="nav-item nav-link"><a class="nav-link" data-bss-hover-animate="pulse" href="index.html#contact">contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?php

 $apiKey = "rzp_test_2uXbrL6KwUWqNE";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<button id="rzp-button1" display:none; ></button>
<style>
    #rzp-button1 {
        display:none;
    }
</style>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "<?php echo $apiKey; ?>", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $_POST['amount'] * 100;?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Smile Foundation",
    "description": "NGO Donation",
    "image": "https://www.smilefoundationindia.org/images/cp/smile-foundation.png",
    "id": "<?php echo 'OID'.rand(10,100).'END';?>", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "final.html",
    "prefill": {
        "name": "<?php echo $_POST['name'];?>",
        "email": "<?php echo $_POST['email'];?>",
        "contact": "<?php echo $_POST['mobile'];?>"
    },
    "notes": {
        "address": "Indirapuram Ghaziabad"
    },
    "theme": {
        "color": "#4157a4"
    }
};
var rzp1 = new Razorpay(options);

    rzp1.open();
   e.preventDefault();
</script>


     
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>