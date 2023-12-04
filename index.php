<?php
session_start();
ob_start();
include 'view/header.php';
include 'config/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'model/taikhoan.php';
include 'model/binhluan.php';
include 'model/giohang.php';

include 'model/bills.php';
include 'global.php';

if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

$spnew = loadall_sanpham();
$dsdm = loadall_danhmuc();


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'product':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];

            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/product.php";
            break;

        case 'product-detail':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($productID, $categoryID);
                include "view/product-detail.php";
            } else {
                include "view/product-detail.php";
            }
            break;
        case 'about-us':
            include "view/about-us.php";
            break;

        case 'register':
            if (isset($_POST['register']) && ($_POST['register'])) {
                $user = $_POST['username'];
                $email = $_POST['email'];
                $tel = $_POST['phone'];
                $pass = $_POST['pass'];
                $fullName = $_POST['fullname'];
                $role = 0;
                $status = 1;
                insert_taikhoan($user, $email, $pass, $fullName, $tel, $role, $status);
                $thongbao = "Bạn đã đăng ký thành công.";
            }
            include "view/account/register.php";
            break;
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $user = $_POST['username'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['username'] = $checkuser;
                    echo"<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
                    header('location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại hoặc bạn đã nhập sai thông tin";
                }
            }
            include "view/account/login.php";
            break;
        case 'edit-account':
            if(isset($_POST['update']) && ($_POST['update'])){
                $id = $_POST['id'];
                $user = $_POST['username'];
                $email = $_POST['email'];
                $tel = $_POST['phone'];
                $pass = $_POST['pass'];
                $fullName = $_POST['fullname'];
                update_taikhoan($id, $user, $pass, $email, $fullName, $tel);

                $_SESSION['username'] = checkuser($user,$pass);
                $thongbao="Chúc mừng bạn đã cập nhật thành công !";
                header('location: index.php?act=edit-account');
            }
            include "view/account/edit-account.php";
            break;
        case 'logout':
            session_unset();
            header('location: index.php');
            break;

        case 'addtocart':
            if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                $productID = $_POST['id'];
                $image = $_POST['image'];
                $productName = $_POST['name'];
                $productPrice = $_POST['price'];
                $quantity = 1;
                $fg=0;
                //kiểm tra sản phẩm có tồn tại chưa
                $i=0;
                foreach ($_SESSION['cart'] as $product){
                    if($product[2]===$productName){
                        $quantitynew= $quantity + $product[4];
                        $_SESSION['cart'][$i][4] = $quantitynew;
                        $fg=1;
                        break;
                    }$i++;
                }
                if($fg==0){
                $product = array($productID,$image,$productName,$productPrice,$quantity);
                $_SESSION['cart'][]=$product;
                }
                header('location: index.php?act=cart');
            }

            break;
        case 'cart':
            include "view/cart/cart.php";
            break;
        case 'delcart':
            if(isset($_GET['ind']) && ($_GET['ind']>=0)){
                array_splice($_SESSION['cart'],$_GET['ind'],1);
                header('location: index.php?act=cart');
            }
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;

        case 'pay':
                if((isset($_POST['pay']))&&($_POST['pay'])){
                    $tongdonhang = $_POST['tongdonhang'];
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST ['email'];
                    $phone = $_POST ['phone'];
                    $day = date('h:i:sa d/m/y');
                    $pttt = $_POST['pttt'];
                    $maDH = rand(0,9999);
                    $billID = insert_bill($maDH,$tongdonhang,$name, $address, $email, $phone, $day,$pttt);
                    $_SESSION['billID']=$billID;
                    if(isset($_SESSION['cart'])&& (count($_SESSION['cart'])>0)){
                        foreach ($_SESSION['cart'] as $product){
                            insert_cart($product[0],$product[1],$product[2],$product[3],$product[4],$product[5],$product[6],$billID);

                        }
                    }
                    // Xóa session cart
                    $_SESSION['cart'] = [];
        }
                include "view/cart/donhang.php";
            break;
        case 'donhang':

            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include 'view/footer.php';
?>
