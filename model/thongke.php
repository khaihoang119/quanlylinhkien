<?php
function loadall_thongke()
{
    $sql = "select categories.categoryID as madm, categories.name as tendm, count(products.productID) as countsp, min(products.productPrice) as minprice, max(products.productPrice) as maxprice, avg(products.productPrice) as avgprice";
    $sql .= " from products left join categories on categories.categoryID = products.categoryID";
    $sql .= " group by categories.categoryID order by categories.categoryID";
    $listtk = pdo_query($sql);
    return $listtk;
}

function delete_bill($id)
{
    $sql = "delete from bill where id =" . $id;
    pdo_execute($sql);
}

?>
