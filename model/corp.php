<?php
function list_Corp($name, $address)
{
    $sql = "SELECT c.*, u.name, u.email, u.phone, u.address, u.role as userRole, g.avatar
            FROM user u
            LEFT JOIN corp c ON u.id = c.iduser
            LEFT JOIN gallery g ON u.id = g.iduser
            WHERE u.role = ?";

    if ($address == 'diff') {
        $filter = data();
        foreach ($filter as $e) {
            $sql .= " AND u.address NOT LIKE '%" . $e['address'] . "%' ";
        }
    } else {
        $sql .= $address !== '' ? " AND u.address LIKE '%" . $address . "%' " : "";
    }

    $sql .= $name !== '' ? " AND u.name LIKE '%" . $name . "%' " : "";
    $sql .= " GROUP BY c.id, u.role ORDER BY c.id DESC";
    return pdo_query($sql, 3);
}

function top_Corp()
{
    $sql = "SELECT c.activeYear, c.size, c.id, u.name, u.address, u.role as userRole, g.avatar
            FROM corp c
            LEFT JOIN user u ON c.iduser = u.id
            LEFT JOIN gallery g ON u.id = g.iduser
            WHERE u.role = ?
            GROUP BY c.id, u.role ORDER BY c.id DESC
            LIMIT 0, 6";
    return pdo_query($sql, 3);
}

function info_Corp($id)
{
    $sql = "SELECT u.name, u.email, u.phone, u.address, c.*,
            g.avatar, g.thumbnail1 ,g.thumbnail2 ,g.thumbnail3 ,g.thumbnail4 ,g.thumbnail5
            FROM user u
            LEFT JOIN corp c ON u.id = c.iduser
            LEFT JOIN gallery g ON u.id = g.iduser
            WHERE u.role = 3 AND c.id = ?";
    return pdo_query_one($sql, $id);
}

function manageInfo($id)
{
    $sql = "SELECT u.name, u.email, u.phone, u.address, c.*,
            g.avatar, g.thumbnail1 ,g.thumbnail2 ,g.thumbnail3 ,g.thumbnail4 ,g.thumbnail5
            FROM user u
            LEFT JOIN corp c ON u.id = c.iduser
            LEFT JOIN gallery g ON u.id = g.iduser
            WHERE u.role = 3 AND u.id = ?";
    return pdo_query_one($sql, $id);
}

function loadRecr($id)
{
    $sql = "SELECT c.iduser, u.name, r.* 
            FROM recr r
            LEFT JOIN corp c ON  r.idcorp = c.id
            INNER JOIN user u ON c.iduser = u.id
            WHERE c.id = ?
            ORDER BY r.id DESC";
    return pdo_query($sql, $id);
}

function sameLocation($id, $location)
{
    $sql = "SELECT c.*, u.name, u.email, u.phone, u.role as userRole, g.avatar
            FROM corp c
            LEFT JOIN user u  ON c.iduser = u.id
            LEFT JOIN gallery g ON u.id = g.iduser
            WHERE u.role = ? AND u.address LIKE ? AND c.id NOT LIKE ?
            GROUP BY c.id, u.role ORDER BY c.id DESC
            LIMIT 0, 3";
    return pdo_query($sql, 3, $location, $id);
}

function updateUser(
    $id,
    $name,
    $email,
    $phone,
    $address,
) {
    $sql = "UPDATE user SET
            name = ?,
            email = ?,
            phone = ?,
            address = ? WHERE id = ?";
    pdo_execute(
        $sql,
        $name,
        $email,
        $phone,
        $address,
        $id
    );
}

function updateCorp(
    $id,
    $activeYear,
    $introduce,
    $size,
    $workingday,
    $link,
    $benefits,
) {
    $sql = "UPDATE corp SET
                activeYear = ?,
                introduce = ?,
                size = ?,
                workingday = ?,
                link = ?,
                benefits = ?
            WHERE iduser = ?";
    pdo_execute(
        $sql,
        $activeYear,
        $introduce,
        $size,
        $workingday,
        $link,
        $benefits,
        $id
    );
}

function listBrand() {
    $sql = "SELECT g.avatar, c.id FROM user u
    LEFT JOIN gallery g ON g.iduser = u.id 
    LEFT JOIN corp c ON u.id = c.iduser
    WHERE u.role = 3";
    return pdo_query($sql);
}

function updateImage($id, $col, $value)
{
    $sql = "UPDATE gallery
            SET $col = ? WHERE iduser = ?";
    pdo_execute($sql, $value, $id);
}

function removeImage($id, $col)
{
    $sql = "UPDATE gallery
            SET $col = '' WHERE iduser = ?";
    pdo_execute($sql, $id);
}
