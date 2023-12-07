<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container mt-2">
        <ol>
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="index.php?act=cart">Giỏ hàng</a></li>
        </ol>
    </div>

</section><!-- End Breadcrumbs -->
<section class="inner-page">
    <div class="container">
        <div class="p-0">
            <ol>
                <li style="list-style: none"><a href="index.php?act=product">Mua thêm sản phẩm khác</a></li>
            </ol>
        </div>

        <div class="row d-flex justify-content-center my-4">

            <div class="col-md-8">
                <div class="card mb-4">

                    <div class="card-header py-3">
                        <h5 class="mb-0">Giỏ Hàng</h5>
                    </div>

                      
                        <?php
                        // echo "<pre>";
                        // var_dump($_SESSION['cart']);
                        if ((isset($_SESSION['cart'])) && (count($_SESSION['cart']) > 0)) {
                            $total=0;
                            
                            echo'
                            <div class="card-body">
                    
                    <div class="row">  
                            ';
                            $i=0;
                            foreach ($_SESSION['cart'] as $item) {   
                                $tt =  $item[2] * $item[4]; 
                                echo '
                               
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                        <img src="'.$item[1].'" class="w-100" alt="" />
                                        <a href="#!">
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        </a>
                                    </div>
                                    <!-- Image -->
                                </div>
    
                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                    <!-- Data -->
                                    <p><strong>'.$item[3].'</strong></p>
                                    <p> '.number_format($item[2],0,'.','.').' đ</p>
                                    <button type="button" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                                        <a href="index.php?act=delproduct&id='.$i.'"><i class="fas fa-trash btn-danger"></i></a>
                                    </button>
                                    <!-- Data -->
                                </div>
    
                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                    <!-- Quantity -->
                                    <div class="d-flex mb-4" style="max-width: 200px ; max-height: 40px">
                                        <div class="form-outline">
                                            <input id="form1" min="0" name="quantity" value="'.$item[4].'" type="number" class="form-control" disabled />
                                        </div>
                                    </div>
                                    <!-- Quantity -->
    
                                    <!-- Price -->
                                    <p class="text-start text-md-center">
                                        <strong>'.number_format($tt,0,'.','.').' đ</strong>
                                    </p>
                                    <!-- Price -->
                                </div>
                           
                           
                                    
                                ';
                                $total += $tt;
                                $i += 1;
                            }
                            
                            echo '
                            </div>
                            <hr class="my-4" />
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
                                            <span>'.number_format($total,0,'.','.').' đ</span>
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
                            </div>
                            
                            ';
                        }else{
                            echo'
                                <div class="card-body">
                                    <h4>Giỏ hàng chưa có sản phẩm nào, vui lòng thêm sản phẩm!</h4>
                                </div>
                                
                            ';
                        }
                        
                        ?>

                </div>
                

                <div class="col-mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Điền thông tin người nhận</h5>
                    </div>
                    <div class="card-body">
                        <div class="col">
                            <form action="index.php?act=pay" method="post" onsubmit="return validateForm();" enctype="multipart/form-data">
                               
                                <div class="mb-3">
                                    <label for="name" class="form-label">Tên người nhận</label>
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
                                    <p style="color: red;" id="name1"></p>
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" name="address" id="address">
                                    <p style="color: red;" id="address1"></p>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                    <p style="color: red;" id="email1"></p>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Số điện thoại người nhận hàng</label>
                                    <input type="text" class="form-control" name="phone" id="phone">
                                    <p style="color: red;" id="phone1"></p>
                                </div>
                                <div class="mb-3">
                                    <label>Phương thức thanh toán</label>
                                </div>
                                <div class="mb-3 p-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pttt" id="flexRadioDefault1 " value="1" checked>
                                        <label class="form-check-label" for="inlineRadio1">Thanh toán khi nhận hàng</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pttt" id="flexRadioDefault2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">Chuyển Khoảng</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pttt" id="flexRadioDefault2" value="3">
                                        <label class="form-check-label" for="inlineRadio3">Thanh toán bằng ví điện tử</label>
                                    </div>

                                </div>
                                <input type="submit" class="btn btn-primary" name="pay" value="Đặt Hàng">
                            </form>

                        </div>
                    </div>
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