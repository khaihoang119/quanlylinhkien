<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container mt-2">
            <ol>
                <li><a href="index.php">Trang Chủ</a></li>
                <li>Sản Phẩm</li>
                <li><?= $tendm ?></li>
            </ol>
            <h2>Sản Phẩm</h2>

        </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row justify-content-center text-start">
                    <!--products-->
                <?php
                    $i = 0;
                    foreach ($dssp as $sp){
                        extract($sp);
                        $linksp = "index.php?act=product-detail&idsp=" .$id;
                        $hinh = $img_path .$img;
                        if( ($i==2) || ($i == 5) || ($i == 8) || ($i == 11) ){
                            $mr = "";
                        }else{
                            $mr = "mr";
                        }
                        echo '
                            <div class="col-md-6 col-lg-4 col-xl-3 p-3">
                        <div class="card '. $mr .' " style="width: 18rem;">
                          <a href="'. $linksp .'"><img src="'. $hinh .'" class="card-img-top" alt="..."></a>
                            <div class="row">
                                <div class="card-body ">
                                    <p class="card-text fw-bold "> <a href= " '. $linksp .' " class="text-dark">'. $name .'</a></p>
                                    <div class="text-start p-3">
                                        <p class="card-text text-decoration-line-through fw-light">98.000.000 đ</p>
                                        <p class="card-text">98.000.000 đ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        ';
                        $i += 1;
                    }
                ?>
            </div>
        </div>

    </section>

</main><!-- End #main -->
