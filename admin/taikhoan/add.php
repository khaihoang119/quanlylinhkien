<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">QUẢN LÝ TÀI KHOẢN</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm tài khoản</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="index.php?act=addtk" method="post"
                          onsubmit="return validateForm()" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Thêm Tài Khoản</h4>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tài
                                    Khoản</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tenuser" name="tenuser" require>
                                    <p style="color: red;" id="tenuser-err"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="emailuser" name="emailuser" require>
                                    <p style="color: red;" id="emailuser-err"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">Mật Khẩu</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="mkuser" name="mkuser" require>
                                    <p style="color: red;" id="mkuser-err"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">Họ Tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fullname" name="fullname" require>
                                    <p style="color: red;" id="fullname-err"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">Số Điện
                                    Thoại</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="phoneuser" name="phoneuser" require>
                                    <p style="color: red;" id="phoneuser-err"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">Chức vụ (1:Admin
                                    0:Khách)</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="role" name="role" require>
                                    <p style="color: red;" id="role-err"></p>
                                    <p style="color: red;" id="role-err2"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">Trạng Thái
                                    (1:Bình Thường 0:Chặn)</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="status" name="status" require>
                                    <p style="color: red;" id="status-err"></p>
                                    <p style="color: red;" id="status-err2"></p>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="submit" class="btn btn-primary" name="themmoi" onclick="validateForm()"
                                       value="Thêm Mới">
                                <input type="reset" class="btn btn-primary" value="Nhập Lại"></input>
                            </div>
                        </div>
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?>
                    </form>
                </div>

            </div>

        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <script>
        function validateForm() {
            let tenuser = document.getElementById("tenuser").value;
            let emailuser = document.getElementById("emailuser").value;
            let mkuser = document.getElementById("mkuser").value;
            let fullname = document.getElementById("fullname").value;
            let phoneuser = document.getElementById("phoneuser").value;
            let role = document.getElementById("role").value;
            let status = document.getElementById("status").value;
            let text;

            // Tên tài khoản
            if (tenuser == "") {
                text = "Tên tài khoản không được để trống";
                document.getElementById("tenuser-err").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("tenuser-err").innerHTML = text;
            }
            // Email
            if (emailuser == "") {
                text = "Email không được để trống";
                document.getElementById("emailuser-err").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("emailuser-err").innerHTML = text;
            }
            // Mật khẩu
            if (mkuser == "") {
                text = "Mật khẩu không được để trống";
                document.getElementById("mkuser-err").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("mkuser-err").innerHTML = text;
            }
            // Tên
            if (fullname == "") {
                text = "Tên không được để trống";
                document.getElementById("fullname-err").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("fullname-err").innerHTML = text;
            }

            // Số điện thoại
            if (phoneuser == "") {
                text = "Số điện thoại không được để trống";
                document.getElementById("phoneuser-err").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("phoneuser-err").innerHTML = text;
            }

            // Loại tài khoản
            if (role == "") {
                text = "Loại tài khoản không được để trống và chỉ được lựa chọn 1: Admin và 0: Khách hàng";
                document.getElementById("role-err").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("role-err").innerHTML = text;
            }
            if (status == "") {
                text = "Trạng Thái không được để trống ";
                document.getElementById("status-err").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("status-err").innerHTML = text;
            }

            // if (role !== 1 || role !== 0) {
            //     text = "Loại tài khoản chỉ được lựa chọn 1: Admin và 0: Khách hàng";
            //     document.getElementById("role-err2").innerHTML = text;
            // }else{
            //     text = "";
            //     document.getElementById("role-err2").innerHTML = text;
            // }
        }
    </script>
    