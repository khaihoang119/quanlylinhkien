<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="./assets/client/images/icons/favicon.ico"/>
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

				<form class="login100-form validate-form" action="index.php?act=login" method="post" onsubmit="return validateForm();" enctype="multipart/form-data">
					<span class="login100-form-title">
						Đăng Nhập
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" id="username" placeholder="Tên tài khoản">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                        <p style="color: red;" id="user"></p>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Yêu cầu nhập mật khẩu">
						<input class="input100" type="password" id="password" name="pass" placeholder="Mật Khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                        <p style="color: red;" id="pass"></p>
					</div>
					
					<div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="submit" value="Đăng nhập" name="login">
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Bạn quên
						</span>
						<a class="txt2" href="#">
                            Mật Khẩu?
						</a>
					</div>
					<div class="text-center p-t-12">
						<a class="txt2" href="index.php?act=register">
							Bạn chưa có tài khoản?
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>

                <?php
                if(isset($thongbao)&&($thongbao!="")){
                echo "<script type='text/javascript'>alert('$thongbao');</script>";
                }

                ?>
			</div>
		</div>
	</div>

    <!--===============================================================================================-->
    <script src="./assets/client/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script>
        function validateForm() {
            let user = document.getElementById("username").value;
            let pass = document.getElementById("password").value;
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
                document.getElementById("pass").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("pass").innerHTML = text;
            }
        }
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>