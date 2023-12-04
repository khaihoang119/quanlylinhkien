<?php

function insert_bill($maDH,$tongdonhang,$name, $address, $email, $phone, $day,$pttt){
    $sql = "INSERT INTO bills (billID,pricetoPay,bill_name, bill_address,bill_tell,bill_email,orderDate,status) 
VALUES ('$maDH','$tongdonhang','$name','$address','$phone','$email','$day','$pttt')";
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