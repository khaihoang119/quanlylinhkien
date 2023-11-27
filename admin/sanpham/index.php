<!-- Page wrapper  -->
<!-- ============================================================== -->
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
                            <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
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
                        <h5 class="card-title">Danh sách sản phẩm</h5>
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>MÃ SP</th>
                                    <th>LOẠI SẢN PHẨM
                                    <th>
                                    <th>TÊN SẢN PHẨM
                                    <th>
                                    <th>GIÁ
                                    <th>
                                    <th>HÌNH ẢNH
                                    <th>
                                    <th>MÔ TẢ NGẮN
                                    <th>
                                    <th>MÔ TẢ DÀI
                                    <th>
                                    <th>TRẠNG THÁI
                                    <th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($listsanpham as $sanpham) {
                                    extract($sanpham);
                                    $suasp = "index.php?act=suasp&id=" . $productID;
                                    $xoasp = "index.php?act=xoasp&id=" . $productID;
                                    $hinhpath = "../upload/" . $image;
                                    if (is_file($hinhpath)) {
                                        $image = "<img src='" . $hinhpath . "' height = '60px'>";
                                    } else {
                                        $image = "No Photo";
                                    }
                                    ?>
                                    <tr>
                                        <th><?= $productID ?></th>
                                        <th><?= $categoryID ?>
                                        <th>
                                        <th><?= $productName ?>
                                        <th>
                                        <th><?= $productPrice ?>
                                        <th>
                                        <th><?= $image ?>
                                        <th>
                                        <th><?= $shortDes ?>
                                        <th>
                                        <th><?= $longDes ?>
                                        <th>
                                        <th><?= $status ?>
                                        <th>
                                        <td><a class="btn btn-outline-info" href="<?= $suasp ?>">Sửa</a></td>
                                        <td><a class="btn btn-outline-danger" href="<?= $xoasp ?>"
                                               onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a></td>

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
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
