<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">CẬP NHẬT LOẠI SẢN PHẨM</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cập nhật loại sản phẩm</li>
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

                    <form class="form-horizontal" action="index.php?act=updatedm" onsubmit="return validateForm();"
                          method="POST">
                        <div class="card-body">
                            <h4 class="card-title">Cập nhật loại sản phẩm</h4>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Mã Loại</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="maloai" placeholder="" name="maloai"
                                           value="<?php if (isset($categoryID) && ($categoryID != "")) echo $categoryID; ?>"
                                           disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tenloai"
                                           placeholder="Nhập tên loại sản phẩm..." name="tenloai"
                                           value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="hidden" class="btn btn-primary" name="id"
                                       value="<?php if (isset($categoryID) && ($categoryID > 0)) echo $categoryID; ?>">
                                <input type="submit" class="btn btn-primary" name="capnhat" value="Cập Nhật"
                                       onclick="validateForm()"></input>
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
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <script>
        function validateForm() {
            let x = document.getElementById("tenloai").value;
            let text;
            if (x == "") {
                text = "Tên loại không được để trống";
                document.getElementById("tenloai").innerHTML = text;
                return false;
            }
        }
    </script>