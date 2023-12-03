<?php

function showcart($cart)
{

    if ($cart == 1) {
        $kq = "";
        foreach ($_SESSION['cart'] as $sp) {
            $totalProduct = $sp[3] * $sp[4];
            $formatNum2 = number_format($sp[3], 0, '.', '.');
            $formatNum3 = number_format($totalProduct, 0, '.', '.');

            echo '
                
                                        
                                         <div class="">
                                            <div class="">
                                                <!-- Image -->
                                                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                                    <img src="' . $sp[1] . '"
                                                         class="w-100" alt="" />
                                                    <a href="#!">
                                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                    </a>
                                                </div>
                                                <!-- Image -->
                                            </div>
                
                                            <div class="">
                                                <!-- Data -->
                                                <p><strong>' . $sp[2] . '</strong></p>
                                                <p>' . $formatNum2 . ' đ</p>
                                    <!-- Data -->
                                            </div>
                
                                            <div class="">
                                                
                
                                                
                                            </div>
                                        </div>
                                    
                                        
        ';
        }
        echo'
         
            <!-- Price -->
            <p class="text-start text-md-center">
                 <strong>' . $formatNum3 . ' đ</strong>
            </p>
            <!-- Price -->
        
        ';


    }
    $i = 0;
    $totalPrice = 0;
    $kq = "";

    foreach ($_SESSION['cart'] as $sp) {
        $totalProduct = $sp[3] * $sp[4];
        $totalPrice += $totalProduct;
        $formatNum2 = number_format($sp[3], 0, '.', '.');
        $formatNum3 = number_format($totalProduct, 0, '.', '.');
        $formatNum = number_format($totalPrice, 0, '.', '.');
        $linkdel = "index.php?act=delcart&ind=" . $i;
        $kq .= '

             <div class="row">
                            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                <!-- Image -->
                                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                    <img src="' . $sp[1] . '"
                                         class="w-100" alt="Blue Jeans Jacket" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                    </a>
                                </div>
                                <!-- Image -->
                            </div>

                            <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                <!-- Data -->
                                <p><strong>' . $sp[2] . '</strong></p>
                                <p>' . $formatNum2 . ' đ</p>
                                <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                                    <a href="' . $linkdel . '"><i class="fas fa-trash"></i></a>
                                </button>
                                
                                
                                <!-- Data -->
                            </div>

                            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                <!-- Quantity -->
                                <div class="d-flex mb-4" style="max-width: 200px ; max-height: 40px">
                                    <button class="btn btn-primary px-3 me-2"
                                    <i class="fas fa-minus"></i>
                                    </button>

                                    <div class="form-outline">
                                        <input id="form1" min="0" name="sl" value="' . $sp[4] . '" type="number" class="form-control" />
                                        <label class="form-label" for="form1">Số lượng</label>
                                    </div>

                                    <button class="btn btn-primary px-3 ms-2"

                                    <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <!-- Quantity -->

                                <!-- Price -->
                                <p class="text-start text-md-center">
                                    <strong>' . $formatNum3 . ' đ</strong>
                                </p>
                                <!-- Price -->
                            </div>
                        </div>
                        
                       
            ';
        $i++;
    }
    $formatNum = $totalPrice;
    $kq .= '
        <hr class="my-4" />
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Tổng</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                Tổng tiền sản phẩm
                                <span>' . $formatNum . ' đ</span>
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
                                <span><strong>' . $formatNum . ' đ</strong></span>
                            </li>

                        </ul>

                        
                        <a href="index.php?act=bill">
                        <input type="submit" value="Tiếp tục đặt hàng" class="btn btn-primary btn-lg btn-block">
                        </a>
                        
                    </div>
                </div>
            </div>             
        ';

    return $kq;
}

?>