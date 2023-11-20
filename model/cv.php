<?php
function list_cv($name, $major, $exp, $salary)
{
    $sql = "SELECT cv.*, u.name, u.img, u.email, u.phone, u.address, u.role as userRole
            FROM cv
            INNER JOIN user u ON cv.iduser = u.id
            WHERE u.role = 2";

    $sql .= $name !== '' ? " AND u.name LIKE '%" . $name . "%' " : "";
    $sql .= $major !== '' ? " AND cv.major LIKE '%" . $major . "%' " : "";
    $sql .= $exp !== '' ? " AND cv.exp LIKE '%" . $exp . "%' " : "";
    $sql .= $salary !== '' ? " AND cv.salary LIKE '%" . $salary . "%' " : "";


    $sql .= " GROUP BY cv.id, userRole ORDER BY cv.id DESC";

    return pdo_query($sql);
}

function filter_cv()
{
    $sql = "SELECT cv.*, u.name, u.address, u.role as userRole
            FROM cv
            INNER JOIN user u ON cv.iduser = u.id
            WHERE u.role = 2 GROUP BY cv.id, userRole
            ORDER BY cv.id DESC";
    return pdo_query($sql);
}

function top_cv()
{
    $sql = "SELECT cv.*, u.name, u.img, u.email, u.phone, u.address
            FROM cv
            INNER JOIN user u ON cv.iduser = u.id
            WHERE u.role = 2 ORDER BY cv.id DESC LIMIT 0,8";
    return pdo_query($sql);
}

function info_cv($id)
{
    $sql = "SELECT cv.*, u.name, u.img, u.email, u.phone, u.address
            FROM cv
            INNER JOIN user u ON cv.iduser = u.id
            WHERE u.role = 2 AND cv.iduser = $id";
    $cv = pdo_query_one($sql);
    return $cv;
}

function update_cv($id, $name, $img, $email, $phone, $address, $exp, $major, $desc)
{
    $sql = "UPDATE user as u, cv as cv
            SET u.username = '$name',
                u.img = '$img',
                u.email = '$email',
                u.phone = '$phone',
                u.address = '$address',
                cv.exp = '$exp',
                cv.major = '$major',
                cv.description = '$desc'
            WHERE u.id = '$id' AND cv.iduser = '$id'";
    pdo_execute($sql);
}
