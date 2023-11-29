<?php
    session_start();
    include './view/header.php';

    if((isset($_GET['act'])) && ($_GET['act'] !="")){
        $act = $_GET['act'];
        switch ($act){
            case 'product':
            include "view/product.php";
                break;
            case 'product-detail';
            include "view/product-detail.php";
                break;
            case 'about-us':
                include "view/about-us.php";
                break;
            case 'login':
                include "view/account/login.php";
                break;
            case 'register':
                include "view/account/register.php";
                break;
            case 'edit-account':
                include "view/account/edit-account.php";
                break;
            default:
            include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
include 'view/footer.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trang chính</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/client/img/favicon.png" rel="icon">
    <link href="assets/client/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/client/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/client/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/client/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/client/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/client/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/client/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/client/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/client/css/style.css" rel="stylesheet">
    <link href="assets/client/css/style2.css" rel="stylesheet">
</head>
<body>
<script src="assets/client/vendor/aos/aos.js"></script>
<script src="assets/client/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/client/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/client/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/client/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/client/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/client/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/client/js/main.js"></script>

</body>
</html>