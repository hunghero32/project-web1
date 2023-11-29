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
    $sql = "SELECT u.* , g.avatar , g.thumbnail1 , g.thumbnail2 , g.thumbnail3 , g.thumbnail4 , g.thumbnail5
    FROM user u 
    LEFT JOIN gallery g ON u.id = g.iduser  where u.username=? AND u.pass=?";
    $user = pdo_query_one($sql, $username, $pass);
    return $user;
}

function add_user($username, $pass, $name, $email, $phone, $role)
{
    $sql = "INSERT INTO user( username, pass, name,  email, phone , role) 
        VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $username, $pass, $name, $email, $phone, $role);

    $sql2 = "SELECT id , role FROM user WHERE username = ?";
    $getID = pdo_query_one($sql2,$username);

    $iduser = $getID['id'];

    if ($getID['role'] == 3) {
        $sql3 = "INSERT INTO corp (iduser) VALUES ($iduser)";
        pdo_execute($sql3);
        $sql4 = "INSERT INTO gallery (iduser) VALUES ($iduser)";
        pdo_execute($sql4);
    }else if ($getID['role'] == 2) {
        $sql3 = "INSERT INTO cv (iduser) VALUES ($iduser)";
        pdo_execute($sql3);
        $sql4 = "INSERT INTO gallery (iduser) VALUES ($iduser)";
        pdo_execute($sql4);
    }
}

function getUser(){
    $sql = "SELECT user.id as id , user.role as role FROM user ORDER BY user.id DESC LIMIT 0,1";
    return pdo_query_one($sql);
}

function addUserWithRole($id, $role) {
    if ($role == 3) {
        $sql = "INSERT INTO corp (iduser) VALUES ($id)";
        pdo_execute($sql);
    }else if ($role == 2) {
        $sql = "INSERT INTO cv (iduser) VALUES ($id)";
        pdo_execute($sql);
    }

    $sql2 = "INSERT INTO gallery (iduser) VALUES (?)";
    pdo_execute($sql2,$id);
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

function existAccount()
{
    $sql = "SELECT user.name, user.email, user.phone, user.username FROM user";
    return pdo_query($sql);
}

function updateExistAccount($id)
{
    $sql = "SELECT user.name, user.email, user.phone FROM user WHERE id  NOT LIKE ?";
    return pdo_query($sql, $id);
}
