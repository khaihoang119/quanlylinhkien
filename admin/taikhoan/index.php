<!-- Page wrapper  -->
<!-- ============================================================== -->
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
                            <li class="breadcrumb-item active" aria-current="page">Danh sách tài khoản</li>
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
                        <h5 class="card-title">Danh sách tài khoản</h5>
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tài Khoản</th>
                                    <th>Email</th>
                                    <th>Mật Khẩu</th>
                                    <th>Họ Tên</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Chức Vụ</th>
                                    <th>Trạng thái</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($listtaikhoan as $taikhoan) {
                                    extract($taikhoan);
                                    $suatk = "index.php?act=suatk&id=" . $userID;
                                    $xoatk = "index.php?act=xoatk&id=" . $userID;
                                    ?>
                                    <tr>
                                        <td><?= $userID ?></td>
                                        <td><?= $username ?></td>
                                        <td><?= $email ?></td>
                                        <td><?= $password ?></td>
                                        <th><?= $fullName ?></th>
                                        <td><?= $phoneNumber ?></td>
                                        <td><?= ($role == 0) ? "Khách hàng" : "Admin" ?></td>
                                        <td><?= ($status == 0) ? "Chặn" : "Bình Thường" ?></td>
                                        <td></td>
                                        <td><a class="btn btn-outline-info" href="<?= $suatk ?>">Sửa</a></td>
                                        <td><a class="btn btn-outline-danger" href="<?= $xoatk ?>"
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
