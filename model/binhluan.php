<?php
function insert_binhluan($iduser, $idpro, $noidung, $ngaybinhluan)
{
    $sql = "insert into binhluan(userID,productID,content,commentDate) values('$iduser','$idpro','$noidung','$ngaybinhluan')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro)
{
    $sql = "select * from comments where 1";
    if ($idpro > 0) $sql .= " and productID = '" . $idpro . "'";
    $sql .= " order by productID";
    $listbl = pdo_query($sql);
    return $listbl;
}

function delete_binhluan($id)
{
    $sql = "delete from comments where commentID =" . $id;
    pdo_execute($sql);
}

?>