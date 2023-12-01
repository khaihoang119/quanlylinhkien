
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
        $img = $img_path .$image;
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
                                    <h2>' . $productName . '</h2>
                                    <h3>'. $productPrice .' đ</h3>
                                  <h3>Thông tin sản phẩm</h3>
                                  <ul>
                                    <li>'. $shortDes .'</li>
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
                                        '. $longDes .'
                                    </p>
                                   
                                </div>
                              
                            </div>

                          </div>


                  ';
        ?>
</div>



    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

