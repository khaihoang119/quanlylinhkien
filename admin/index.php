<?php
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':
            include "danhmuc/index.php";
            break;
        case 'adddm':
            include "danhmuc/add.php";
            break;
        case 'sanpham':
            include "sanpham/index.php";
            break;
        case 'addsp':
            include "sanpham/add.php";
            break;
        case 'dsbl':
            include "binhluan/index.php";
            break;
        case 'dskh':
            include "taikhoan/index.php";
            break;
        case 'addtk':
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
               