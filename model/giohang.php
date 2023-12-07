<?php
function insert_cart($billID,$productID,$image,$pricesp,$productName,$quantity){
    $sql="insert into cart(billID,productID,image,pricetoPay,productName,quantity) values ('".$billID."','".$productID."','".$image."','".$pricesp."','".$productName."','".$quantity."')";
    return pdo_execute($sql);
}
function showcart($billID){
    $sql = "select * from cart where billID =" .$billID;
    $bill=pdo_query($sql);
    return $bill;
}
function loadall_cart_count($billID){
    $sql = "select * from cart where billID =".$billID;
    $bill=pdo_query($sql);
    return sizeof($bill);
}
function tongdonhang(){

    $total = 0;      
    foreach ($_SESSION['cart'] as $item) {
        $tt =  $item[2] * $item[4]; 
        $total += $tt;
    }
    return $total;
}
?>