<?php

function manageAdmin($id)
{
    $sql = "SELECT * FROM user u
            WHERE u.role = 1 AND u.id = ?";
    return pdo_query_one($sql, $id);
}
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
function list_recr($id,$name,$job,$salary,$start,$end) {
    $sql = "SELECT recr.* , user.name
    FROM recr 
    INNER JOIN user  ON recr.idcorp = user.id
    WHERE user.role = 3 ";
    $sql .= $id !== '' ? " AND recr.id LIKE '%" . $id . "%' " : "";
    $sql .= $name !== '' ? " AND user.name LIKE '%" . $name . "%' " : "";
    $sql .= $job !== '' ? " AND recr.job LIKE '%" . $job . "%' " : "";
    $sql .= $salary !== '' ? " AND recr.salary LIKE '%" . $salary . "%' " : "";
    $sql .= $start !== '' ? " AND recr.start LIKE '%" . $start . "%' " : "";
    $sql .= $end !== '' ? " AND recr.end LIKE '%" . $end . "%' " : "";
    $sql .= " ORDER BY recr.idcorp DESC";
    return pdo_query($sql);
}
function add_admin($username, $pass, $name, $email, $phone, $role)
{
    $sql = "INSERT INTO user( username, pass, name,  email, phone , role) 
        VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $username, $pass, $name, $email, $phone, $role);

}


function delete_checkbox($checkbox = [], $table)
{
    foreach ($checkbox as $box) {
        $sql = "DELETE from $table where id=" . $box;
        pdo_execute($sql);
    }
}

