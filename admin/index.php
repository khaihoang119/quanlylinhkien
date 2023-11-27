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
                $status = $_POST['trangthai'];
                insert_danhmuc($tenloai, $status);
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
                $target_dir = "../upload/";;
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //quá là ok
                } else {
                    // lỗi r
                }
                insert_sanpham($tensp, $giasp, $hinh, $motangan, $motadai, $iddm, $status);
                $thongbao = "Thêm thành công";

            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/index.php";
            break;
        case 'updatesp':
            // Kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $hinh = $_FILES['hinh']['name'];
                $motangan = $_POST['motangan'];
                $motadai = $_POST['motadai'];
                $status = $_POST['trangthai'];
                $target_dir = "../upload/";;
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //quá là ok
                } else {
                    // lỗi r
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $hinh, $motangan, $motadai, $status);
                $thongbao = "Cập nhật thành công thành công";

            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/index.php";
            break;


        case 'dsbl':
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/index.php";
            break;


        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            // $listtaikhoan = loadall_taikhoan("",0);
            include "taikhoan/index.php";
            break;

        case 'addtk':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $user = $_POST['tenuser'];
                $email = $_POST['emailuser'];
                $pass = $_POST['mkuser'];
                $fullName = $_POST['fullname'];
                $tel = $_POST['phoneuser'];
                $role = $_POST['role'];
                $status = $_POST['status'];
                insert_taikhoan($user, $email, $pass, $fullName, $tel, $role, $status);
                $thongbao = "Thêm thành công";

            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/add.php";
            break;
        case 'listbill':
            include "bill/index.php";
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_user($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            // $listtaikhoan = loadall_taikhoan("",0);
            include "taikhoan/index.php";
    }
} else {
    include "home.php";
}
?>
<? 
include "footer.php"
?>
               