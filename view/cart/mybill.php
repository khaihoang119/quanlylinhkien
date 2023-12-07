
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container mt-2">
        <ol>
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="index.php?act=addtocart">Đơn hàng</a></li>
            
        </ol>
    </div>

</section><!-- End Breadcrumbs -->
<section class="inner-page">
    <div class="container">

        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-9">
                <div class="card-header py-3">
                    <h5 class="mb-0">Đơn hàng của bạn</h5>
                </div>
                <div class="col">
                <table class="table">
                  <thead>
                    <tr>

                      <th scope="col">Mã đơn hàng</th>
                      <th scope="col" >Số lượng sản phẩm</th>
                      <th scope="col">Giá tiền đơn hàng</th>
                      <th scope="col">Trạng thái đơn hàng</th>
                      <th scope="col">Ngày đặt hàng</th>
                    </tr>
                  </thead>
                  <tbody>                
                <?php 
                        if(is_array($mybill)){
                            
                            foreach ($mybill as $bill) {
                                extract($bill);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp = loadall_cart_count($bill['billID']);
                                echo '  

                                    <tr>
                                        <td>'.$bill['madh'].'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$bill['pricetoPay'].'</td>
                                        <td>'.$ttdh.'</td>
                                        <td>'.$bill['orderDate'].'</td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                
                </tbody>
                </table>
                </div>
                
            </div>
        </div>

    </div>
</section>


