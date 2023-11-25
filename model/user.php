<?php
function list_user($kyw)
{
    $sql = "SELECT * from user where 1";
    if ($kyw != '') {
        $sql .= " AND id LIKE '%" . $kyw . "%' OR user LIKE '%" . $kyw . "%' OR email LIKE '%" . $kyw . "%' OR tel LIKE '%" . $kyw . "%' OR address LIKE '%" . $kyw . "%' OR role LIKE '%" . $kyw . "%'";
    }
    $sql .= " order by id desc";
    return pdo_query($sql);
}

function login($username, $pass)
{
    $sql = "SELECT u.* , g.avatar
            FROM user u
            LEFT JOIN gallery g ON u.id = g.iduser
            WHERE u.username = ? AND u.pass = ?";
    $user = pdo_query_one($sql, $username, $pass);
    return $user;
}

function add_user($username, $pass, $name, $email, $phone, $role)
{
    $sql = "INSERT INTO user( username, pass, name,  email, phone , role) 
        VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $username, $pass, $name, $email, $phone, $role);
}

function update_user($id, $username, $pass, $email, $name, $img, $phone, $address, $role)
{
    $sql = "UPDATE user SET user='$username',pass='$pass',email='$email',name='$name',img='$img',phone='$phone',address='$address',role='$role' WHERE id = '$id'";
    pdo_execute($sql);
}

function update_pass_user($id, $pass)
{
    $sql = "UPDATE user SET pass='$pass' WHERE id = '$id'";
    pdo_execute($sql);
}

function get_pass($email, $phone, $user)
{
    $sql = "SELECT * from user where email = '$email',phone = '$phone' and user = '$user'";
    pdo_execute($sql);
}

function edit_user($id)
{
    $sql = "SELECT * from user where id = '$id'";
    $user = pdo_query_one($sql);
    return $user;
}
