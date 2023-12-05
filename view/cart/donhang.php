
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container mt-2">
            <ol>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="index.php?act=cart">Đơn hàng</a></li>
            </ol>
        </div>

    </section><!-- End Breadcrumbs -->
    <section class="inner-page">
        <div class="container">


            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0"> Đơn Hàng</h5>
                        </div>
                        <div class="card-body">

                            <!-- Single item -->
                          <?php

                            $getshowcart= getshowcart($billID);
                            
                                if((isset($getshowcart))&&(count($getshowcart)>=0)){
                                    $i=0;
                                    $total=0;
                                    foreach ($getshowcart as $product){

                                        $fomartprice= number_format($product[4],0, '.', '.');
                                        $tt= $product[4] * $product[6];
                                        $total+=$tt;
                                        $fomartt= number_format($tt,0, '.', '.');
                                            echo'
                                               <div class="row">
                                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                                        <!-- Image -->
                                                        <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                                             data-mdb-ripple-color="light">
                                                            <img src="' . $product[3] . '"
                                                                 class="w-100" alt=""/>
                                                            <a href="#!">
                                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                            </a>
                                                        </div>
                                                        <!-- Image -->
                                                    </div>

                                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                                        <!-- Data -->
                                                        <p><strong>'. $product[4] .'</strong></p>
                                                        <p> '.  $fomartprice .' đ</p>
                                                        <!-- Data -->
                                                    </div>

                                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                                        <!-- Quantity -->
                                                        <div class="d-flex mb-4" style="max-width: 200px ; max-height: 40px">


                                                            <div class="form-outline">


                                                                <label class="form-label" for="form1">Số lượng '. $product[6] .'</label>
                                                            </div>


                                                        </div>
                                                        <!-- Quantity -->

                                                        <!-- Price -->
                                                        <p class="text-start text-md-center">
                                                            <strong> '. $fomartt .'đ</strong>
                                                        </p>
                                                        <!-- Price -->
                                                    </div>
                                                </div>
                                                <hr class="my-4"/>
                                            ';
                                            $i++;

                                    }$totalfomart= number_format($total,0,'.','.');


                                    echo'
                                     </div>
                                    </div>
                                    </div>

                                    ';
                                    echo'
                                        <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Tổng</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Tổng tiền sản phẩm
                                    <span> '.$totalfomart.'đ</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Phí vận chuyển
                                    <span>miễn phí</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Số tiền cần thanh toán</strong>
                                        <strong>
                                            <p class="mb-0">(bao gồm thuế VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong> đ</strong></span>
                                </li>

                            </ul>


                            <a href="index.php?act=bill">
                                <input type="submit" value="Thanh toán" class="btn btn-primary btn-lg btn-block">
                            </a>

                        </div>
                    </div>
                </div>
                                    ';

                                }
//                                 ?>
                            <div class="container">
                                <div class="row d-flex justify-content-center my-4">
                                    <div class="col-mb-9">
                                        <div class="card-header py-3">
                                            <h5 class="mb-0">ID ĐƠN HÀNG: <?= $billID ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                            <div class="">
                                                    <input type="hidden" value="<?= $total ?>" name="tongdonhang">
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">Tên người nhận</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="<?= $name ?>" aria-describedby="emailHelp" disabled>
                                                        <p style="color: red;" id="name1"></p>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="address" class="form-label">Địa chỉ</label>
                                                        <input type="text" class="form-control" name="address" id="address" value="<?= $address ?>" disabled>
                                                        <p style="color: red;" id="address1"></p>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" value="<?= $email ?>" disabled>
                                                        <p style="color: red;" id="email1"></p>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="phone" class="form-label">Số điện thoại người nhận hàng</label>
                                                        <input type="text" class="form-control" name="phone" id="phone" value="<?= $phone ?>" disabled>
                                                        <p style="color: red;" id="phone1"></p>
                                                    </div>

                                                    <div class="mb-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="hidden" name="pttt" id="radio" value="1">
                                                            <label class="form-check-label" for="inlineRadio1">Thanh toán khi nhận hàng</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="hidden" type="radio" name="pttt" id="radio" value="2">
                                                            <label class="form-check-label" for="inlineRadio2">Chuyển Khoảng</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="hidden" type="radio" name="pttt" id="radio" value="3" >
                                                            <label class="form-check-label"  for="inlineRadio3">Thanh toán bằng ví điện tử</label>
                                                        </div>
                                                        <p style="color: red;" id="radio1"></p>
                                                    </div>

                                            </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>


                <!-- Single item -->

            </div>
        </div>
    </section>

