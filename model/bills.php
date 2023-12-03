<?php
function tongdonhang(){
    $tong =0;

    foreach ($_SESSION['cart'] as $sp) {
        $ttien = $sp[3] * $sp[4];
        $tong += $ttien;
    }
    return $tong;
}
function taodonhang($userID,$tongdonhang,$name, $address, $email, $phone){
    $sql = "INSERT INTO bills (userID,pricetoPay,bill_name, bill_address,bill_tell,bill_email) VALUES ('$userID','$tongdonhang','$name','$address','$phone','$email')";
    return pdo_execute_return_lastInsertId($sql);

}

?>