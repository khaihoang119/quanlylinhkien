<?php

function insert_bill($userID,$maDH,$total,$name,$address,$email,$phone,$pttt,$orderDate){
    $sql = "INSERT INTO bills (userID,madh,pricetoPay,bill_name,bill_address, bill_email,bill_tell, status,orderDate) 
VALUES ('$userID','$maDH','$total','$name','$address','$email','$phone','$pttt','$orderDate')";
    return pdo_execute_return_lastInsertId($sql);
}
function loadone_bill($billID){
    $sql= "select * form bill where id=" .$billID;
    $bill=pdo_query_one($sql);
    return $bill;
};
function loadall_bill($kyw="",$userID=0){

    $sql = "select * from bill where 1";
    if($userID >0) {
        $sql.=" and userID=".$userID;
    }
    if($userID != "") {
        $sql.=" and id like '%".$kyw."%'";
    }
    $sql.=" order by id";
    $listbill=pdo_query($sql);
    return $listbill;
}

?>