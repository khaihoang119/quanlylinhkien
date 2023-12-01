<?php
    session_start();
    include 'view/header.php';
    include 'config/pdo.php';
    include 'model/sanpham.php';
    include 'model/danhmuc.php';
    include 'model/taikhoan.php';
    include 'model/binhluan.php';
    include 'global.php';

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew=loadall_sanpham();
    $dsdm=loadall_danhmuc();


    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act){
            case 'product':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw = $_POST['kyw'];
                }else{
                    $kyw ="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];

                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
                $tendm=load_ten_dm($iddm);
            include "view/product.php";
                break;

            case 'product-detail':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai = load_sanpham_cungloai($productID,$categoryID);
                    include "view/product-detail.php";
                }else{
                    include "view/product-detail.php";
                }
                break;
            case 'about-us':
                include "view/about-us.php";
                break;
            case 'login':
                include "view/account/login.php";
                break;
            case 'register':
                if(isset($_POST['register'])&&($_POST['register'])){
                    $user=$_POST['username'];
                    $email=$_POST['email'];
                    $pass=$_POST['password'];
                    $fullName=$_POST['fullName'];
                    insert_taikhoan($user,$email,$pass,$fullName);
                    $thongbao="Bạn đã đăng ký thành công.";
                }
                include "view/account/register.php";
                break;
            case 'edit-account':
                include "view/account/edit-account.php";
                break;
            default:
            include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }
include 'view/footer.php';
?>
