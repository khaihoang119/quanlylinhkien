<?php
    if(isset($_SESSION['cart'])){

?>
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container mt-2">
        <ol>
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="index.php?act=addtocart">Giỏ hàng</a></li>
        </ol>
    </div>

</section><!-- End Breadcrumbs -->
<section class="inner-page">
    <div class="container">
        <div class="p-0" >
            <ol>
                <li style="list-style: none"><a href="index.php?act=product">Mua thêm sản phẩm khác</a></li>
            </ol>
        </div>

        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Giỏ Hàng</h5>
                    </div>
                    <div class="card-body">

                        <!-- Single item -->

                        <?php echo showcart($_SESSION['cart']); ?>

                        <!-- Single item -->

        </div>
    </div>
</section>
<?php
    }else{
        echo '
        <section id="breadcrumbs" class="breadcrumbs">
    <div class="container mt-2">
        <ol>
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="index.php?act=addtocart">Giỏ hàng</a></li>
        </ol>
    </div>

</section><!-- End Breadcrumbs -->
<section class="inner-page">
    <div class="container">
        <div class="p-0" >
            <ol>
                <li style="list-style: none"><a href="index.php?act=product">Mua thêm sản phẩm khác</a></li>
            </ol>
        </div>

        <div class="row d-flex justify-content-center my-4">

            <div class="col-md-8">

                <div class="card mb-4">

                    <div class="card-header py-3">
                        <h5 class="mb-0">Giỏ Hàng</h5>
                    </div>

                    <div class="card-body">
                        Chưa có món nào trong giỏ hàng
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
        ';
    }
?>