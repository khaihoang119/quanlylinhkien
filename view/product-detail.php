<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Sản phẩm</li>
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
        $onesp['image'] = $img_path . $image;

        echo '
         <div class="col-lg-6">
         <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img src="' . $onesp['image'] . '" class="d-block w-100" alt="...">
           </div>
           <div class="carousel-item">
             <img src="' . $onesp['image'] . '." class="d-block w-100" alt="...">
           </div>
           <div class="carousel-item">
             <img src="' . $onesp['image'] . '" class="d-block w-100" alt="...">
           </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
         </button>
       </div>
                  </div>                  
                    <div class="col-lg-6">
                                <div class="portfolio-info">
                                    <h2>' . $onesp['productName'] . '</h2>
                                    <h3>' . number_format($onesp['productPrice'], 0, '.', '.') . ' đ</h3>
                                  <h3>Thông tin sản phẩm</h3>
                                  <ul>
                                    <li>' . $onesp['shortDes'] . '</li>
                                  </ul>
                                    <form action="index.php?act=addtocart" method="post">
                                        <input type="hidden" name="idsp" value="' . $onesp['productID'] . '">
                                        <input type="hidden" name="image" value="' . $onesp['image'] . '">
                                        <input type="hidden" name="namesp" value="' . $onesp['productName'] . '">
                                        <input type="hidden" name="price" value="' . $onesp['productPrice'] . '">
                                        
                                        <input type="submit" name="addtocart" class="btn btn-primary" value="Thêm vào giỏ hàng">
                                    </form>
                                </div> 
                                <div class="portfolio-description">
                                    <h2>Đánh giá chi tiết</h2>
                                    <p>
                                        ' . $onesp['longDes'] . '
                                    </p>
                                   
                                </div> 
                            </div>
                          </div>
                  ';
        ?>
        <div class="row mt-4">
          <div class="col">
            <h3>BÌNH LUẬN</h3>
            <div>
              <div>
                <table class="table">
                  <thead>
                    <tr>

                      <th scope="col">Tên tài khoản</th>
                      <th scope="col" colspan="2">Nội dung</th>
                      <th scope="col">Ngày bình luận</th>
                    </tr>
                  </thead>
                  <tbody>




                    <?php
                    $dsbl = loadall_binhluan($productID);
                    // echo "Nội dung bình luận ở đây: ".$idpro;
                    foreach ($dsbl as $bl) {
                      extract($bl);

                      echo ' <tr>
                  
                  <td>' . $username . '</td>
                  <td colspan="2">' . $content . '</td>
                  <td>' . $commentDate . '</td>
                      </tr>
             ';
                    }
                    ?>
                  </tbody>
                </table>

              </div>
              <?php
              if (isset($_SESSION['username'])) {
              ?>
                <form class="form" action="index.php?act=guibinhluan" method="post">
                  <input type="hidden" name="productID" value="<?= $productID ?>">
                  
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nhập bình luận của bạn</label>
                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" required></textarea>
                  </div>
                  <input type="submit" class="btn btn-primary" name="guibinhluan" value="Gửi">
                </form>
              <?php
              } else {
              ?>
                <h1 style="color: red; text-align: center;">Vui lòng đăng nhập để được bình luận !</h1>
              <?php } ?>


            </div>

          </div>
        </div>

      </div>
    </div>



  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->