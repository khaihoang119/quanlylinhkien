<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="./assets/client/img/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/client/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/client/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/client/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/client/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/client/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./assets/client/css/util.css">
    <link rel="stylesheet" type="text/css" href="./assets/client/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="./assets/client/img/img-01.png" alt="IMG">
            </div>

            <?php
            if(isset($_SESSION['username']) && (is_array($_SESSION['username']))){
                extract($_SESSION['username']);
            }
            ?>

            <form class="login100-form validate-form" onsubmit="return validateForm();" enctype="multipart/form-data" action="index.php?act=edit-account" method="post">
					<span class="login100-form-title">
						Sửa đổi thông tin tài khoản
					</span>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="username" id="username" placeholder="Tên tài khoản">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    <p style="color: red;" id="user"></p>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="fullname" id="fullname" placeholder="Họ và tên">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    <p style="color: red;" id="fullname1"></p>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" id="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                    <p style="color: red;" id="email1"></p>
                </div>

                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="phone" id="phone" placeholder="Số điện thoại">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
                    <p style="color: red;" id="phone1"></p>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Yêu cầu nhập mật khẩu">
                    <input class="input100" type="password" name="pass" id="pass" placeholder="Mật Khẩu">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    <p style="color: red;" id="pass1"></p>
                </div>


                <div class="container-login100-form-btn">
                    <input type="hidden" name="id" value="<?= $userID ?>">
                    <input class="login100-form-btn" type="submit" value="Cập nhật" name="update">
                </div>


            </form>
            <?php
            if(isset($thongbao)&&($thongbao!="")){
                echo "<script type='text/javascript'>alert('Cập nhật tài khoản thành công');</script>";
            }

            ?>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="./assets/client/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="./assets/client/vendor/bootstrap/js/popper.js"></script>
<script src="./assets/client/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="./assets/client/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="./assets/client/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script>
    function validateForm() {
        let user = document.getElementById("username").value;
        let fullname = document.getElementById("fullname").value;
        let email = document.getElementById("email").value;
        let phone = document.getElementById("phone").value;
        let pass = document.getElementById("pass").value;
        let text;
        if (user == "") {
            text = "Tên người dùng không được để trống";
            document.getElementById("user").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("user").innerHTML = text;
        }
        if (pass == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("pass1").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("pass1").innerHTML = text;
        }

        if (fullname == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("fullname1").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("fullname1").innerHTML = text;
        }
        if (email == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("email1").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("email1").innerHTML = text;
        }
        if (phone == "") {
            text = "Mật khẩu không được để trống";
            document.getElementById("phone1").innerHTML = text;
            return false;
        } else {
            text = "";
            document.getElementById("phone1").innerHTML = text;
        }
    }
</script>
<!--===============================================================================================-->
<script src="./assets/client/js/mainlogin.js"></script>

</body>
</html>