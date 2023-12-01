<?php
function insert_sanpham($tensp, $giasp, $hinh, $motangan, $motadai, $iddm, $status)
{
    $sql = "insert into products(productName,productPrice,image,shortDes,longDes,categoryID,status) values('$tensp','$giasp','$hinh','$motangan','$motadai','$iddm','$status')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "delete from products where productID =" . $id;
    pdo_execute($sql);
}

function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "select * from products where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and categoryID = '" . $iddm . "'";
    }
    $sql .= " order by categoryID";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from categories where categoryID =" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}

function loadone_sanpham($id)
{
    $sql = "select * from products where productID =" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id,$iddm)
{
    $sql = "select * from products where categoryID = " . $iddm . "  and categoryID <> " . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function sp_update_view($id)
{
    $sql = "update products set luotxem = luotxem + 1 where productID = " . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id, $iddm, $tensp, $giasp, $hinh, $motangan, $motadai, $status)
{
    if ($hinh != "") {
        $sql = "update products set categoryID = '" . $iddm . "',productName = '" . $tensp . "', productPrice = '" . $giasp . "', shortDes = '" . $motangan . "', longDes = '" . $motadai . "', image = '" . $hinh . "',status = '" . $status . "' = where productID =" . $id;
    } else {
        $sql = "update products set categoryID = '" . $iddm . "',productName = '" . $tensp . "', productPrice = '" . $giasp . "', shortDes = '" . $motangan . "', longDes = '" . $motadai . "',status = '" . $status . "' where productID =" . $id;
    }
    pdo_execute($sql);
}
?>