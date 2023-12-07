<?php
if (is_array($bill)) {
    extract($bill);
}
?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">CẬP NHẬT HOÁ ĐƠN</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cập nhật hoá đơn</li>
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

                    <form class="form-horizontal" action="index.php?act=updatebill" onsubmit="return validateForm();"
                          method="POST">
                        <div class="card-body">
                            <h4 class="card-title">Cập nhật hoá đơn</h4>
                            <div class="form-group row">
                                <label for="id"
                                       class="col-sm-3 text-end control-label col-form-label">Mã
                                    hoá đơn</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="id" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gia" class="col-sm-3 text-end control-label col-form-label">Trạng
                                    Thái</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="bill_status" name="bill_status"
                                           value="<?php if (isset($bill_status)) echo $bill_status; ?>" require>
                                    <p style="color: red;" id="status-err"></p>
                                    <p style="color: red;" id="status-err2"></p>
                                    <p style="color: red;" id="status-err3"></p>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="hidden" name="id" value="<?php if (isset($billID) && ($billID > 0))
                                    echo $billID; ?>">
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

    </script>