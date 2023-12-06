<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container mt-2">
            <ol>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="index.php?act=product">Sản Phẩm</a></li>

            </ol>
            <h2><?= $tendm ?></h2>

        </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
                <div class="col-md-2">
                    <div class="list-group">
                        <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm = "index.php?act=product&iddm=" . $categoryID;
                            echo '
                                <a href="' . $linkdm . '"  class="list-group-item list-group-item-action " aria-current="true">
                                    ' . $name . '
                                </a>
                                ';
                        }
                        ?>


                    </div>

                </div>
                <div class="col-md-10">
                    <div class="container text-start " >
                        <div class="row gy-5">


                            <!--products-->
                            <?php
                            foreach ($dssp as $sp) {
                                extract($sp);
                                $linksp = "index.php?act=product-detail&idsp=" . $productID;
                                $hinh = $img_path . $image;
                                $productPrice = number_format($productPrice,0,'.','.');
                                echo '
                                <div class="col-4 mt-4">
                                    <div class="card p-2 " style="width: 18rem;">
                                        <a href="' . $linksp . '"><img src="' . $hinh . '" class="card-img-top"  alt="..."></a>
                                        <div class="card-body ">
                                            <p class="card-text fw-bold "> <a href=" ' . $linksp . ' " class="text-dark">' . $productName . '</a></p>
                                            <div class="text-start">
                                                <p class="card-text">' . $productPrice . ' đ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ';        
                            }
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main><!-- End #main -->