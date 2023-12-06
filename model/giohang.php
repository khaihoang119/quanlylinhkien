<?php
function insert_cart($billID,$productID,$image,$pricesp,$productName,$quantity){
    $sql="insert into cart(billID,productID,image,pricetoPay,productName,quantity) values ('".$billID."','".$productID."','".$image."','".$pricesp."','".$productName."','".$quantity."')";
    return pdo_execute($sql);
}
function getshowcart($billID){
    $sql = "select * from cart where billID =" .$billID;
    $bill=pdo_query($sql);
    return $bill;
}
function loadall_cart_count($billID){
    $sql = "select * from cart where billID =".$billID;
    $bill=pdo_query($sql);
    return sizeof($bill);
}
?>