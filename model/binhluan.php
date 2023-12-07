<?php
function insert_binhluan($userID, $productID, $content, $commentDate)
{
    $sql = "insert into comments(userID,productID,content,commentDate) values('$userID','$productID','$content','$commentDate')";
    pdo_execute($sql);
}

function loadall_binhluan($productID)
{
    $sql = "select * from comments where 1";
    if ($productID > 0) $sql .= " and productID = '" . $productID . "'";
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