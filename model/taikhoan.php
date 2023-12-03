<?php
function loadall_taikhoan()
{
    $sql = "select * from account order by userID";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function loadone_taikhoan($id)
{
    $sql = "select * from account where userID =" . $id;
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}

function insert_taikhoan($user, $email, $pass, $fullName, $tel, $role, $status)
{
    $sql = "insert into account(username,email,password,fullName,phoneNumber,role, status) values('$user','$email','$pass','$fullName','$tel','$role','$status')";
    pdo_execute($sql);
}

function checkuser($user, $pass)
{
    $sql = " select * from account where username ='" . $user . "' and password = '" . $pass . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email)
{
    $sql = "select * from account where email ='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id, $user, $pass, $email, $fullName, $tel)
{
    $sql = "update account set username = '" . $user . "', password = '" . $pass . "',email = '" . $email . "',fullName = '" . $fullName . "', phoneNumber = '" . $tel . "' where userID =" . $id;
    pdo_execute($sql);
}

function update_taikhoan_admin($id, $user, $email, $pass, $fullName, $tel, $role, $status)
{
    $sql = "update account set username = '" . $user . "', email = '" . $email . "',password = '" . $pass . "',fullName = '" . $fullName . "', phoneNumber = '" . $tel . "', role = '" . $role . "' where userID =" . $id;
    pdo_execute($sql);
}

function delete_user($id)
{
    $sql = "delete from account where userID =" . $id;
    pdo_execute($sql);
}
?>