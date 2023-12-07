<?php

function insert_bill($userID,$maDH,$total,$name,$address,$email,$phone,$pttt,$orderDate){
    $sql = "INSERT INTO bills (userID,madh,pricetoPay,bill_name,bill_address, bill_email,bill_tell, status,orderDate) 
VALUES ('$userID','$maDH','$total','$name','$address','$email','$phone','$pttt','$orderDate')";
    return pdo_execute_return_lastInsertId($sql);
}
function showbill($billID){
    $sql = "select * from bills where billID =" .$billID;
    $bill=pdo_query($sql);
    return $bill;
}
function loadall_bill($kyw="",$userID=0){

    $sql = "select * from bills where 1";
    if($userID >0) {
        $sql.=" and userID=".$userID;
    }
    if($userID != "") {
        $sql.=" and userID like '%".$kyw."%'";
    }
    $sql.=" order by userID";
    $listbill=pdo_query($sql);
    return $listbill;
}
function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Hoàn tất";
            break;
        
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}


?>