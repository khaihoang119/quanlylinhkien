<?php
session_start();
include "../config/pdo.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/sanpham.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/index.php";
            break;
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";

            }
            include "danhmuc/add.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/index.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/index.php";
            break;


        case 'sanpham':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/index.php";
            break;
            include "sanpham/index.php";
            break;
        case 'addsp':
            // Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $hinh = $_FILES['hinh']['name'];
                $motangan = $_POST['motangan'];
                $motadai = $_POST['motadai'];
                $iddm = $_POST['iddm'];
                $status = $_POST['trangthai'];

                insert_sanpham($tensp, $giasp, $hinh, $motangan, $motadai, $iddm, $status);
                $thongbao = "Thêm thành công";

            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;


        case 'dsbl':
            include "binhluan/index.php";
            break;


        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            // $listtaikhoan = loadall_taikhoan("",0);
            include "taikhoan/index.php";
            break;
        case 'addtk':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tentk = $_POST['tenuser'];
                $emailtk = $_POST['emailuser'];
                $mktk = $_POST['mkuser'];
                $lname = $_POST['lastname'];
                $fname = $_POST['firstname'];
                $addresstk = $_POST['address'];
                $phonetk = $_POST['phoneuser'];
                $role = $_POST['role'];
                insert_taikhoan($tentk, $emailtk, $mktk, $lname, $fname, $addresstk, $phonetk, $role);
                $thongbao = "Thêm thành công";

            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/add.php";
            break;
        case 'listbill':
            include "bill/index.php";
            break;
    }
} else {
    include "home.php";
}
?>
<? 
include "footer.php"
?>
               