<?php
function list_Corp($name, $major, $address)
{
    $sql = "SELECT c.*, u.name, u.img, u.email, u.phone, u.address, u.role as userRole
            FROM corp c
            INNER JOIN user u ON c.iduser = u.id
            WHERE u.role = 3";

    $sql .= $name !== '' ? " AND u.name LIKE '%".$name."%' " : "";
    $sql .= $major !== '' ? " AND c.major LIKE '%".$major."%' " : "";
    $sql .= $address !== '' ? " AND u.address LIKE '%".$address."%' " : "";

    $sql .= " GROUP BY c.id, userRole ORDER BY c.id DESC";

    return pdo_query($sql);
}

function filter_Corp()
{
    $sql = "SELECT c.*, u.name, u.address, u.role as userRole
            FROM corp c INNER JOIN user u ON c.iduser = u.id
            WHERE u.role = 3 GROUP BY c.id, userRole
            ORDER BY c.id DESC";
    return pdo_query($sql);
}

function top_Corp()
{
    $sql = "SELECT c.*, u.name, u.img, u.email, u.phone, u.address
            FROM corp c
            INNER JOIN user u ON c.iduser = u.id
            WHERE u.role = 3 ORDER BY c.id DESC LIMIT 0,6";
    return pdo_query($sql);
}

function info_Corp($id)
{
    $sql = "SELECT c.*, u.name, u.img, u.email, u.phone, u.address
                FROM corp c
                INNER JOIN user u ON c.iduser = u.id
                WHERE u.role = 3 AND c.iduser = $id";
    $corp = pdo_query_one($sql);
    return $corp;

}

function update_Corp($id, $name, $img, $email, $phone, $address, $exp, $major, $desc)
{
    $sql = "UPDATE user as u, corp as c
            SET u.username = '$name',
                u.img = '$img',
                u.email = '$email',
                u.phone = '$phone',
                u.address = '$address',
                c.exp = '$exp',
                c.major = '$major',
                c.description = '$desc'
            WHERE u.id = '7' AND c.iduser = '$id'";
    pdo_execute($sql);
}
