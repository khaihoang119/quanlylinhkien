<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container mt-2">
        <ol>
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="index.php?act=cart">Đơn Hàng</a></li>
        </ol>
    </div>

</section><!-- End Breadcrumbs -->
<section class="inner-page">
    <div class="container">
        <div class="p-0">
            <h3>ID đơn hàng: <?= $billID ?></h3>
            <ol>
                <li style="list-style: none"><a href="index.php?act=product">Mua thêm sản phẩm khác</a></li>
            </ol>
        </div>

        <div class="row d-flex justify-content-center my-4">

            <div class="col-md-8">
                <div class="card mb-4">

                    <div class="card-header py-3">
                        <h5 class="mb-0">ĐƠN HÀNG</h5>
                    </div>
                    <div class="card-body">


                        <?php
                        // echo "<pre>";
                        // var_dump($_SESSION['cart']);

                        if (isset($_SESSION['billID']) && ($_SESSION['billID']) > 0) {
                            $showcart = showcart($billID);
                            if ((isset($showcart)) && (count($showcart) > 0)) {
                                foreach ($showcart as $item) {
                                    $i = 0;
                                    $linkdel = "index.php?act=delproduct&i=" . $i;
                                    $tt =  $item['pricetoPay'] * $item['quantity'];

                                    echo '
                                <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                        <img src="' . $item['image'] . '" class="w-100" alt="" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                    <!-- Image -->
                                </div>
    
                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p><strong>' . $item['productName'] . '</strong></p>
                                    <p> ' . number_format($item['pricetoPay'], 0, '.', '.') . ' đ</p>
                                    
                                    <!-- Data -->
                                </div>
    
                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <!-- Quantity -->
                                    <div class="d-flex mb-4" style="max-width: 200px ; max-height: 40px">
                                        <div class="form-outline">
                                            <input id="form1" min="0" name="quantity" value="' . $item['quantity'] . '" type="number" class="form-control" disabled />
                                        </div>
                                    </div>
                                    <!-- Quantity -->
    
                                    <!-- Price -->
                                    <p class="text-start text-md-center">
                                        <strong>' . number_format($tt, 0, '.', '.') . ' đ</strong>
                                    </p>
                                    <!-- Price -->
                                </div>
                            </div>
                            <hr class="my-4" />
                                    
                                ';
                                }

                                echo '
                            
                            </div>
                        </div>
                    </div>
                    
                            ';

                                echo '
                            <div class="col-md-4">
                            <div class="card mb-4">
                                <div class="card-header py-3">
                                    <h5 class="mb-0">Tổng</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            Tổng tiền sản phẩm
                                            <span>' . number_format($total, 0, '.', '.') . ' đ</span>
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
                                </div>
                            </div>
                            ';
                            } else {
                                echo ' <div class="row">
                            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                <h3>GIỎ HÀNG TRỐNG</h3>
                            </div>
                        </div>
                        <hr class="my-4" />
                        </div>
                            </div>';
                            }
                        }
                        ?>

                        <div class="col-mb-4">
                            <?php
                            if (isset($_SESSION['billID']) && ($_SESSION['billID']) > 0) {
                                $showbill = showbill($billID);
                                if (count($showbill) > 0) {
                            ?>
                                    <div class="card-header py-3">
                                        <h5 class="mb-0">Thông tin đặt hàng</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="col">
                                        <div class="mb-3">
                                                <label for="name" class="form-label">Mã đơn hàng: <?= $showbill[0]['madh']; ?></label>
                                            </div>
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Tên người nhận: <?= $showbill[0]['bill_name']; ?></label>
                                            </div>
                                            <div class="mb-3">
                                                <label for="address" class="form-label">Địa chỉ người nhận: <?= $showbill[0]['bill_address']; ?></label>

                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email: <?= $showbill[0]['bill_email']; ?></label>

                                            </div>

                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Số điện thoại người nhận hàng: <?= $showbill[0]['bill_tell']; ?></label>

                                            </div>
                                            <div class="mb-3">
                                                <label>Phương thức thanh toán: <?= $showbill[0]['status']; ?></label>
                                            </div>
                                            <?php
                                            switch ($showbill[0]['status']) {
                                                case '1':
                                                    $mess = "Thanh toán khi nhận hàng";
                                                    break;
                                                case '2':
                                                    $mess = "Chuyển Khoảng";
                                                    break;
                                                case '3':
                                                    $mess = "Thanh toán bằng ví điện tử";
                                                    break;

                                                default:
                                                    # code...
                                                    break;
                                            }
                                            ?>
                                            



                                        </div>
                                    </div>
                            <?php
                                }
                            } ?>
                        </div>

                    </div>
                </div>



            </div>
        </div>
</section>
<script>
    function validateForm() {
        let name = document.getElementById("name").value;
        let address = document.getElementById("address").value;
        let email = document.getElementById("email").value;
        let sdt = document.getElementById("phone").value;
        let text;
        if (name == "") {
            text = "Tên người dùng không được để trống";
            document.getElementById("name1").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("name1").innerHTML = text;
        }

        if (address == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("address1").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("address1").innerHTML = text;
        }

        if (email == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("email1").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("email1").innerHTML = text;
        }

        if (sdt == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("phone1").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("phone1").innerHTML = text;
        }
    }
</script>