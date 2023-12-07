<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">QUẢN LÝ LOẠI SẢN PHẨM</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách loại sản phẩm</li>
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
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách thống kê admin</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th>Sản Phẩm</th>
                                    <th>Loại Sản Phẩm</th>
                                    <th>Bình Luận</th>
                                    <th>Tài Khoản</th>
                                    <th>Đơn Hàng</th>
                                </tr>

                                <tr>
                                    <td><?php echo thong_ke_hang_hoa() ?></td>
                                    <td><?php echo thong_ke_loai() ?></td>
                                    <td><?php echo thong_ke_binh_luan() ?></td>
                                    <td><?php echo thong_ke_khach_hang() ?></td>
                                    <td><?php echo thong_ke_don_hang() ?></td>
                                </tr>
                            </table>
                            <h5 class="card-title">Thống kê sản phẩm</h5>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>MÃ DANH MỤC</th>
                                <th>TÊN DANH MỤC</th>
                                <th>SỐ LƯỢNG</th>
                                <th>GIÁ CAO NHẤT</th>
                                <th>GIÁ THẤP NHẤT</th>
                                <th>GIÁ TRUNG BÌNH</th>
                            </tr>
                            <?php
                            foreach ($listthongke as $thongke) {
                                extract($thongke);
                                echo '
                                        <tr>
                                            <td>' . $madm . '</td>
                                            <td>' . $tendm . '</td>
                                            <td>' . $countsp . '</td>
                                            <td>' . $maxprice . '</td>
                                            <td>' . $minprice . '</td>
                                            <td>' . $avgprice . '</td>
                                        </tr>
                                    ';
                            }
                            ?>

                        </table>
                        <div class="border-top">
                            <div class="card-body">
                                <a href="index.php?act=bieudo"><input class="btn btn-primary" type="button"
                                                                      value="Xem biểu đồ"></a>
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
            let x = document.getElementById("tloai").value;
            let text;
            if (x == "") {
                text = "Tên loại không được để trống";
                document.getElementById("tenloai").innerHTML = text;
                return false;
            }
        }
    </script>