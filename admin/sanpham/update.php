<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $image;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height = '60px'>";
} else {
    $hinh = "No Photo";
}
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">CẬP NHẬT SẢN PHẨM</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sửa sản phẩm</li>
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
                    <form class="form-horizontal" action="index.php?act=updatesp" method="post"
                          onsubmit="return validateForm();" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Cập Nhật sản phẩm</h4>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Loại sản phẩm</label>
                                <div class="col-md-9">
                                    <select class="select2 form-select shadow-none" style="width: 100%; height:36px;"
                                            name="iddm">

                                        <?php
                                        foreach ($listdanhmuc as $danhmuc) {
                                            extract($danhmuc);
                                            echo '<option value="' . $categoryID . '">' . $name . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên sản
                                    phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tensp" name="tensp"
                                           value="<?= $productName ?>" require>
                                    <p style="color: red;" id="tensanpham"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">Giá</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="giasp" name="giasp" require
                                           value="<?= $productPrice ?>">
                                    <p style="color: red;" id="giasanpham"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hinhanh" class="col-sm-3 text-end control-label col-form-label">Hình
                                    ảnh</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="hinh" name="hinh" require
                                           value="<?= $image ?>">
                                    <p style="color: red;" id="photo-loi"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mota" class="col-sm-3 text-end control-label col-form-label">Mô tả
                                    ngắn</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="motangan" name="motangan"
                                              require><?= $shortDes ?></textarea>
                                    <p style="color: red;" id="motangan-loi"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mota" class="col-sm-3 text-end control-label col-form-label">Mô tả
                                    dài</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="motadai" name="motadai"
                                              require><?= $longDes ?></textarea>
                                    <p style="color: red;" id="motadai-loi"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-end control-label col-form-label">Trạng thái</label>
                                <div class="col-md-9">
                                    <select class="select2 form-select shadow-none" style="width: 100%; height:36px;"
                                            name="trangthai">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="hidden" class="mr5" name="id" value="<?= $productID ?>">
                                <input type="submit" class="btn btn-primary" onclick="validateForm()" name="capnhat"
                                       value="Cập Nhật"></input>
                                <input type="reset" class="btn btn-primary" value="Nhập Lại">
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
            let tensp = document.getElementById("tensp").value;
            let giasp = document.getElementById("giasp").value;
            let hinh = document.getElementById("hinh").value;
            let motadai = document.getElementById("motadai").value;
            let motangan = document.getElementById("motangan").value;
            let text;
            if (tensp == "") {
                text = "Tên sản phẩm không được để trống";
                document.getElementById("tensanpham").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("tensanpham").innerHTML = text;
            }

            if (giasp == "" || giasp <= 0) {
                text = "Giá sản phẩm không được để trống và phải lớn hơn 0";
                document.getElementById("giasanpham").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("giasanpham").innerHTML = text;
            }
            if (hinh == "") {
                text = "Hình sản phẩm không được để trống";
                document.getElementById("photo-loi").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("photo-loi").innerHTML = text;
            }

            if (motadai == "") {
                text = "Mô tả sản phẩm không được để trống";
                document.getElementById("motadai-loi").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("motadai-loi").innerHTML = text;
            }
            if (motangan == "") {
                text = "Mô tả sản phẩm không được để trống";
                document.getElementById("motangan-loi").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("motangan-loi").innerHTML = text;
            }
        }
    </script>