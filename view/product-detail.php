
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Chi tiết sản phẩm</li>
        </ol>
        <h2>Chi tiết sản phẩm</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
        <?php
            extract($onesp);
        ?>
        <?php
        $img = $img_path .$img;
        echo'
         <div class="col-lg-6">
                          <div id="carouselExampleIndicators" class="carousel slide">
                              <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              </div>
                              <div class="carousel-inner">
                                  <div class="carousel-item active">
                                      <img src="' .$img. '" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="' .$img. '" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="' .$img. '" class="d-block w-100" alt="...">
                                  </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                              </button>
                          </div>
                  </div>
                  ';
                  echo'
                    <div class="col-lg-6">
                                <div class="portfolio-info">
                                    <h2><?= $name ?></h2>
                                    <h3>'. $giasp .' đ</h3>
                                  <h3>Thông tin sản phẩm</h3>
                                  <ul>
                                    <li><strong>Nhà sản xuất</strong>: Web design</li>
                                    <li><strong> Tình trạng</strong>: ASU Company</li>
                                    <li><strong>Bảo hành</strong>: 01 March, 2020</li>
                                  </ul>
                                    <form action="index.php?act=product" method="post">
                                        <input type="submit" name="" class="btn btn-primary" value="Thêm vào giỏ hàng">
                                    </form>
                                </div>
                  ';
                  echo'
                    <div class="portfolio-description">
                                    <h2>Đánh giá chi tiết</h2>
                                    <p>
                                        HS55 Stereo là dòng sản phẩm tai nghe máy tính mới nhất đến từ Corsair với nhiều cải tiến về công nghệ âm thanh mang đến cho người dùng những trải nghiệm tuyệt vời trong những trò chơi mình yêu thích.
                                    </p>
                                    <p>
                                        Corsair được biết đến là một trong những hãng chuyên sản xuất các dòng sản phẩm gaming gear chất lượng được người dùng tiêu dùng đánh giá cao về hiệu năng lẫn thiết kế từ bàn phím, chuột máy tính, tai nghe cho đến ghế gaming.
                                        Tai nghe chơi game Corsair HS55 Stereo là một thiết bị ấn tượng mà bất kỳ game thủ bình thường hay chuyên nghiệp nào cũng nên yêu thích. Với thiết kế dạng over-ear (tai nghe chụp tai) mang đến âm thanh tốt, lọc tiếng ồn cực tốt.
                                    </p>
                                </div>
                              <div class="portfolio-description">
                                <h2>Thông số chi tiết</h2>
                                <p>
                                    CPU	Intel Core i9-13900H
                                </p>
                                  <p>
                                      RAM	32GB (16x2) DDR5 5200MHz
                                  </p>
                                    <p>
                                        Card đồ họa	NVIDIA® GeForce RTX™ 4070 8GB GDDR6 + MUX Switch
                                    </p>
                                   <p>
                                       Màn hình	16" UHD+ (3840x2400), 16:10, 100% DCI-P3, OLED, DisplayHDR True Black 600
                                   </p>
                                  <p>
                                      Hệ điều hành	Windows 11 Home
                                  </p>

                              </div>
                            </div>

                          </div>


                  ';
        ?>
</div>



    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

