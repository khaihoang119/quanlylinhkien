<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                 data-aos="fade-up" data-aos-delay="200">
                <h1>GearSetup</h1>
                <h2>Cung cấp linh kiện, thiết bị điện tử với mức giá ưu đãi nhất</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="index.php?act=product" class="btn-get-started scrollto">Mua sắm ngay</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                <img src="../assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">


    <!-- ======= Pricing Section ======= -->
    <section id="" class="bg-light">

        <!--    PC Gaming-->
        <div class="container bg-white mb-5 " data-aos="fade-up">
            <div class="d-flex flex-row">
                <div class="col-md-12 p-3">
                    <div class="section-title">
                        <h2>Sản Phẩm</h2>
                    </div>

                    <div class="row">
                        <?php
                        $i = 0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=product-detail&idsp=" . $productID;
                            $hinh = $img_path . $image;
                            if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                                $mr = "";
                            } else {
                                $mr = "mr";
                            }
                            echo '
                            <div class="col-4">
                                <div class="card p-3 ' . $mr . ' " style="width: 18rem;">
                                        <a href="' . $linksp . '"><img src="' . $hinh . '" class="card-img-top" alt="..."></a>
                                    <div class="card-body ">
                                        <p class="card-text fw-bold "> <a href= " ' . $linksp . ' " class="text-dark">' . $productName . '</a></p>
                                        <div class="text-start">
                                            <p class="card-text">' . $productPrice . ' đ</p>
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

            </div>
            <!--      END PC Gaming-->


    </section>
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Câu hỏi thường gặp</h2>
                <p></p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                                                       data-bs-target="#faq-list-1">Chính Sách Bảo Hành
                            Như Thế Nào? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Chính sách bảo hành của shop là tùy thuộc vào sản phẩm của hãng và sẽ bảo hành theo
                                hãng, cụ thể là từ 6 tháng trở lên, quý khách có thể xem chi tiết tại từng sản phẩm
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-2" class="collapsed">Làm
                            sao để tôi tin tưởng trang web này? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Đây là trang web chính chủ của Shop GearSetup.vn và được chứng chỉ của bộ công thương
                                nên quý khách có thể tin tưởng ạ!
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-3" class="collapsed">Những
                            cách thanh toán? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Chúng tôi hỗ trợ nhiều hình thức thanh toán như: Thanh toán trực tiếp, khi nhận hàng.
                            </p>
                            <p>
                                Thanh toán online: Thẻ visa, trả góp, thẻ ngân hàng và chuyển khoản.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                                                       data-bs-target="#faq-list-4" class="collapsed">Cách
                            để mua hàng <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Quý khách có thể xem sản phẩm mình muốn và thêm vào giỏ hàng sau đó bấm thanh toán và
                                trang web sẽ đưa bạn đến nơi nhập thông tin địa chỉ và lựa chọn hình thức thanh toán sau
                                cùng là xác nhận đơn đặt hàng và chờ hàng về.
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->

