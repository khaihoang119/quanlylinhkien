<?php
function insert_cart($cartID,$userID,$productID,$image,$productPrice,$pricetoPay,$billID){
    $sql="insert into cart(cartID,userID,productID,image,productPrice,pricetoPay,billID) values ('$cartID','$userID','$productID','$image','$productPrice',$pricetoPay','$billID')";
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