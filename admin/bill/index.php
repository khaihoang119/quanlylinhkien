<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">QUẢN LÝ BÌNH LUẬN</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách bình luận</li>
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
                        <h5 class="card-title">Danh sách hoá đơn</h5>
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>MÃ ĐƠN HÀNG</th>
                                    <th>KHÁCH HÀNG</th>
                                    <th>SỐ LƯỢNG HÀNG</th>
                                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                                    <th>NGÀY ĐẶT HÀNG</th>
                                    <th>Trạng Thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($listbill as $bill) {
                                    extract($bill);
                                    $suabill = "index.php?act=suabill&id=" . $billID;
                                    $xoabill = "index.php?act=xoabill&id=" . $billID;
                                    $kh = $bill["bill_name"] . '<br> ' . $bill["bill_email"] . '<br> ' . $bill["bill_address"] . '<br> ' . $bill["bill_tell"];
                                    $ttdh = get_ttdh($bill["bill_status"]);
                                    $countsp = loadall_cart_count($bill["billID"]); ?>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td><?= $bill_name ?></td>
                                        <td><?= $userID ?></td>
                                        <td><?= $pricetoPay ?></td>
                                        <td><?= $orderDate ?></td>
                                        <td><?= $ttdh ?></td>
                                        <td><a class="btn btn-outline-info" href="<?= $suabill ?>">Sửa</a></td>
                                        <td><a class="btn btn-outline-danger" href="<?= $xoabill ?>"
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
