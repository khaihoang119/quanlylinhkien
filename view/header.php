<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/client/img/favicon.png" rel="icon">
    <link href="assets/client/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/client/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/client/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/client/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/client/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/client/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/client/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/client/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Template Main CSS File -->
    <link href="assets/client/css/style.css" rel="stylesheet">
    <link href="assets/client/css/style2.css" rel="stylesheet">


</head>
<body>
<header id="header" class="header-inner-pages">
    <div class="container d-flex align-items-center">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php" class="logo me-auto"><img src="./assets/client/img/logogear.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="index.php?">Trang chủ</a></li>
                <li><a class="nav-link scrollto" href="index.php?act=about-us">Về Chúng tôi</a></li>
                <li><a class="nav-link scrollto" href="index.php?act=product">Sản phẩm</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <form class="d-flex p-2" role="search" action="index.php?act=product" method="post">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Nhập tên sản phẩm cần tìm"
                   name="kyw" required>
            <input class="btn btn-outline-success" type="submit" name="search" value="Tìm kiếm">
        </form>

        <?php
        if (isset($_SESSION['username'])) {
            extract($_SESSION['username']);

        ?>

        <div class="p-2 d-flex">
            <div class=" p-2">
                <a class="text-white" href="index.php?act=cart">
                    <img src="./upload/iconcart.svg" class="" style="width: 25px">
                    Giỏ Hàng
                </a>
            </div>

            <div class="dropdown p-2">
                <a class="text-white" href="index.php?act=login" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="./upload/iconuser.svg" class="" style="width: 25px">
                    Xin chào <?= $username ?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="index.php?act=edit-account">Cập nhật tài khoản</a></li>
                    <?php
                    if($role == 1){
                    ?>
                    <li><a class="dropdown-item" href="admin/index.php">Đăng nhập vào admin</a></li>
                    <?php
                    }
                    ?>
                     <li><a class="dropdown-item" href="index.php?act=mybill">Đơn hàng</a></li>
                    <li><a class="dropdown-item" href="index.php?act=logout">Đăng xuất</a></li>
                </ul>
            </div>
            <?php
            }else{
            ?>

            <div class="dropdown p-2">
                    <a class="text-white" href="index.php?act=login" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./upload/iconuser.svg" class="" style="width: 25px">
                        Đăng Nhập
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?act=login">Đăng nhập</a></li>
                        <li><a class="dropdown-item" href="index.php?act=register">Đăng kí</a></li>
                    </ul>
            </div>
            <?php } ?>
        </div>
    </div>
</header>

<!-- Vendor JS Files -->
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