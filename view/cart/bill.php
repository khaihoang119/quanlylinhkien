<?php

?>




<section id="breadcrumbs" class="breadcrumbs">
    <div class="container mt-2">
        <ol>
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="index.php?act=addtocart">Giỏ hàng</a></li>
            <li><a href="index.php?act=addtocart">Thông tin</a></li>
        </ol>
    </div>

</section><!-- End Breadcrumbs -->
<section class="inner-page">
    <div class="container">

        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-6">
                <div class="card-header py-3">
                    <h5 class="mb-0">Điền thông tin người nhận</h5>
                </div>
                <div class="card-body">
                    <div class="col">
                        <form action="index.php?act=pay" method="post" onsubmit="return validateForm();" enctype="multipart/form-data">
                            <input type="hidden" value="<?= $tong ?>" name="tongdonhang">
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
<!--                            <div class="mb-3">-->
<!--                                <div class="form-check form-check-inline">-->
<!--                                    <input class="form-check-input" type="radio" name="pttt" id="inlineRadio1" value="1">-->
<!--                                    <label class="form-check-label" for="inlineRadio1">Thanh toán khi nhận hàng</label>-->
<!--                                </div>-->
<!--                                <div class="form-check form-check-inline">-->
<!--                                    <input class="form-check-input" type="radio" name="pttt" id="inlineRadio2" value="2">-->
<!--                                    <label class="form-check-label" for="inlineRadio2">Chuyển Khoảng</label>-->
<!--                                </div>-->
<!--                                <div class="form-check form-check-inline">-->
<!--                                    <input class="form-check-input"  type="radio" name="pttt" id="inlineRadio3" value="3" >-->
<!--                                    <label class="form-check-label"  for="inlineRadio3">Thanh toán bằng ví điện tử</label>-->
<!--                                </div>-->
<!--                            </div>-->
                            <input type="submit" class="btn btn-primary" name="pay" value="Đặt Hàng">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <section class="inner-page">
                    <div class="container">
                        <div class="row d-flex justify-content-center my-4">
                            <div class="col-md-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                <?php
                showcart(1);
                ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
