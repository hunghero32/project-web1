<?php
function list_admin($id,$username,$name,$email,$phone,$address,$role) {
    $sql = "SELECT * FROM user WHERE role = ? ";
    $sql .= $id !== '' ? " AND id LIKE '%" . $id . "%' " : "";
    $sql .= $username !== '' ? " AND username LIKE '%" . $username . "%' " : "";
    $sql .= $name !== '' ? " AND name LIKE '%" . $name . "%' " : "";
    $sql .= $email !== '' ? " AND email LIKE '%" . $email . "%' " : "";
    $sql .= $phone !== '' ? " AND phone LIKE '%" . $phone . "%' " : "";
    $sql .= $address !== '' ? " AND address LIKE '%" . $address . "%' " : "";
    $sql .= " ORDER BY id DESC";
    return pdo_query($sql,$role);
}
function list_corp_admin ($id,$username,$name,$email,$phone,$address,$role){
    $sql = "SELECT * FROM user WHERE role = ?";
    $sql .= $id !== '' ? " AND id LIKE '%" . $id . "%' " : "";
    $sql .= $username !== '' ? " AND username LIKE '%" . $username . "%' " : "";
    $sql .= $name !== '' ? " AND name LIKE '%" . $name . "%' " : "";
    $sql .= $email !== '' ? " AND email LIKE '%" . $email . "%' " : "";
    $sql .= $phone !== '' ? " AND phone LIKE '%" . $phone . "%' " : "";
    $sql .= $address !== '' ? " AND address LIKE '%" . $address . "%' " : "";
    $sql .= " ORDER BY id DESC";
    return pdo_query($sql,$role);
}
function list_cv_admin ($id,$username,$name,$email,$phone,$address,$role){
    $sql = "SELECT * FROM user WHERE role = ?";
    $sql .= $id !== '' ? " AND id LIKE '%" . $id . "%' " : "";
    $sql .= $username !== '' ? " AND username LIKE '%" . $username . "%' " : "";
    $sql .= $name !== '' ? " AND name LIKE '%" . $name . "%' " : "";
    $sql .= $email !== '' ? " AND email LIKE '%" . $email . "%' " : "";
    $sql .= $phone !== '' ? " AND phone LIKE '%" . $phone . "%' " : "";
    $sql .= $address !== '' ? " AND address LIKE '%" . $address . "%' " : "";
    $sql .= " ORDER BY id DESC";
    return pdo_query($sql,$role);
}

function delete($id)
{
    $sql = "DELETE FROM user where id = '$id'";
    
    pdo_execute($sql,$id);
}

function delete_checkbox($checkbox = [], $table)
{
    foreach ($checkbox as $box) {
        $sql = "DELETE from $table where id=" . $box;
        pdo_execute($sql);
    }
}

