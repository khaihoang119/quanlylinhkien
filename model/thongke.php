<?php
function loadall_thongke()
{
    $sql = "select categories.categoryID as madm, categories.name as tendm, count(products.productID) as countsp, min(products.productPrice) as minprice, max(products.productPrice) as maxprice, avg(products.productPrice) as avgprice";
    $sql .= " from products left join categories on categories.categoryID = products.categoryID";
    $sql .= " group by categories.categoryID order by categories.categoryID";
    $listtk = pdo_query($sql);
    return $listtk;
}

function thong_ke_hang_hoa()
{
    $sql = "SELECT count(*) FROM products";
    $count = pdo_query_value($sql);
    return $count;
}

function thong_ke_binh_luan()
{
    $sql = "SELECT count(*) FROM comments";
    $count = pdo_query_value($sql);
    return $count;
}

function thong_ke_khach_hang()
{
    $sql = "SELECT count(*) FROM account";
    $count = pdo_query_value($sql);
    return $count;
}

function thong_ke_loai()
{
    $sql = "SELECT count(*) FROM categories";
    $count = pdo_query_value($sql);
    return $count;
}

function thong_ke_don_hang()
{
    $sql = "SELECT count(*) FROM bills";
    $count = pdo_query_value($sql);
    return $count;
}

function total_all()
{
    $total = thong_ke_loai() + thong_ke_khach_hang() + thong_ke_binh_luan() + thong_ke_hang_hoa();
    return $total;
}

function total_prod_of_cate($ma_loai)
{
    $sql = "SELECT count(*) FROM products WHERE categoryID = ?";
    $count = pdo_query_value($sql, $ma_loai);
    return $count;
}

// function statistical()
// {
//     $prodArr = [];
//     $total_loai = thong_ke_loai();
//     for ($i = 0; $i < $total_loai; $i++) {
//         array_push($prodArr, total_prod_of_cate($i));
//     }
//     return $prodArr;
// }

function statistical()
{
    $sql = "SELECT * FROM categories";
    return pdo_query($sql);
}

function priceCompare($ma_loai)
{
    $sql = "SELECT bills FROM products WHERE categoryID=? ORDER BY bills DESC";
    return pdo_query($sql, $ma_loai);
}

function priceMin($ma_loai)
{
    $sql = "SELECT bills FROM products WHERE categoryID=? ORDER BY bills ASC";
    return pdo_query($sql, $ma_loai);
}

function averagePrice($ma_loai)
{
    $avg = (priceCompare($ma_loai)[0][0] + priceMin($ma_loai)[0][0]) / 2;
    return $avg;
}

?>
