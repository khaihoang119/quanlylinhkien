<?php
function tongdonhang()
{

    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}


function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadall_cart($idbill)
{
    $sql = "select * from cart where billID =" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}

function loadall_cart_count($idbill)
{
    $sql = "select * from cart where billID =" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}

function loadall_bill($kyw = "", $iduser = 0)
{

    $sql = "select * from bills where 1";
    if ($iduser > 0) {
        $sql .= " and userID =" . $iduser;
    }
    if ($iduser != "") {
        $sql .= " and userID like '%" . $kyw . "%'";
    }
    $sql .= " order by billID";
    $listbill = pdo_query($sql);
    return $listbill;
}

function delete_bill($id)
{
    $sql = "delete from bills where billID =" . $id;
    pdo_execute($sql);
}

?>