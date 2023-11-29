<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">QUẢN LÝ SẢN PHẨM</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
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
                    <form class="form-horizontal" action="index.php?act=addsp" method="post"
                          onsubmit="return validateForm();" enctype="multipart/form-data">
                        <div class="card-body">
                            <h4 class="card-title">Thêm sản phẩm</h4>
                            <div class="form-group row">
                                <label for="ten" class="col-sm-3 text-end control-label col-form-label">Tên sản
                                    phẩm</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tensp" name="tensp" require>
                                    <p style="color: red;" id="tensanpham"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">Giá</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="giasp" name="giasp" require>
                                    <p style="color: red;" id="giasanpham"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hinhanh" class="col-sm-3 text-end control-label col-form-label">Hình
                                    ảnh</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="photo" name="hinh" require>
                                    <p style="color: red;" id="photo-loi"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mota" class="col-sm-3 text-end control-label col-form-label">Mô tả
                                    ngắn</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="motangan" name="motangan" require></textarea>
                                    <p style="color: red;" id="motangan-loi"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mota" class="col-sm-3 text-end control-label col-form-label">Mô tả
                                    dài</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="motadai" name="motadai" require></textarea>
                                    <p style="color: red;" id="motandai-loi"></p>
                                </div>
                            </div>
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
                                <input type="submit" class="btn btn-primary" name="themmoi" value="Thêm Mới"></input>
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
            let photo = document.getElementById("photo").value;
            let motangan = document.getElementById("motangan").value;
            let motadai = document.getElementById("motadai").value;
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

            if (photo == "") {
                text = "Hình sản phẩm không được để trống";
                document.getElementById("photo-loi").innerHTML = text;
                return false;
            } else {
                text = "";
                document.getElementById("photo-loi").innerHTML = text;
            }

            if (motadai == "") {
                text = "Mô tả sản phẩm không được để trống";
                document.getElementById("motandai-loi").innerHTML = text;
                return false;
            }
            if (motangan == "") {
                text = "Mô tả sản phẩm không được để trống";
                document.getElementById("motangan-loi").innerHTML = text;
                return false;
            }
        }
    </script>