<?php
function insert_danhmuc($tenloai)
{
    $sql = "insert into categories(name) values('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "delete from categories where categoryID =" . $id;
    pdo_execute($sql);
}

function loadall_danhmuc()
{
    $sql = "select * from categories order by categoryID";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadone_danhmuc($id)
{
    $sql = "select * from categories where categoryID =" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai)
{
    $sql = "update categories set name = '" . $tenloai . "' where categoryID =" . $id;
    pdo_execute($sql);
}

?>