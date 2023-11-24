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

function insert_taikhoan($email, $user, $pass, $address, $lastName, $firstName, $tel, $role)
{
    $sql = "insert into account(email,username,password,address,lastName,firstName,phoneNumber,role) values('$email','$user','$pass','$address','$lastName','$firstName','$role')";
    pdo_execute($sql);
}

function checkuser($user, $pass)
{
    $sql = "select * from account where user ='" . $user . "' and pass = '" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email)
{
    $sql = "select * from account where email ='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id, $user, $pass, $email, $address, $lastName, $firstName, $tel)
{
    $sql = "update account set username = '" . $user . "', password = '" . $pass . "',email = '" . $email . "', address = '" . $address . "',lastName = '" . $lastName . "',firstName = '" . $firstName . "', phoneNumber = '" . $tel . "' where id =" . $id;
    pdo_execute($sql);
}

function update_taikhoan_admin($id, $user, $pass, $email, $address, $lastName, $firstName, $tel, $role)
{
    $sql = "update account set username = '" . $user . "', password = '" . $pass . "',email = '" . $email . "', address = '" . $address . "',lastName = '" . $lastName . "',firstName = '" . $firstName . "' phoneNumber = '" . $tel . "', role = '" . $role . "' where userID =" . $id;
    pdo_execute($sql);
}

function delete_user($id)
{
    $sql = "delete from account where userID =" . $id;
    pdo_execute($sql);
}

?>