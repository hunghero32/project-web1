<?php
function list_Corp($name, $address)
{
    $sql = "SELECT c.*, u.name, u.email, u.phone, u.address, u.role as userRole
            FROM corp c
            INNER JOIN user u ON c.iduser = u.id
            WHERE u.role = 3";

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
    return pdo_query($sql);
}

function filter_Corp()
{
    $sql = "SELECT c.*, u.name, u.address, u.role as u.role
            FROM corp c INNER JOIN user u ON c.iduser = u.id
            WHERE u.role = 3 GROUP BY c.id, u.role
            ORDER BY c.id DESC";
    return pdo_query($sql);
}

function top_Corp()
{
    $sql = "SELECT c.*, u.name, u.email, u.phone, u.address
            FROM corp c
            INNER JOIN user u ON c.iduser = u.id
            WHERE u.role = 3
            ORDER BY c.id DESC
            LIMIT 0, 6
            ";
    return pdo_query($sql);
}

function info_Corp($id)
{
    $sql = "SELECT c.*, u.name, u.email, u.phone, u.address
            -- g.avatar, g.thumbnail1, g.thumbnail2, g.thumbnail3, g.thumbnail4, g.thumbnail5
            FROM corp c
            INNER JOIN user u ON c.iduser = u.id
            -- INNER JOIN gallery g ON u.id = g.iduser
            WHERE u.role = 3 AND c.iduser = $id";
    return pdo_query_one($sql);
}

// function update_Corp(
//     $id, $name, $email, $phone, $address,
//     $activeYear, $introduce,
//     $avatar, $thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5
// ) {
//     $sql = "UPDATE user as u, corp as c, gallery as g
//             SET u.username = '$name',
//                 u.email = '$email',
//                 u.phone = '$phone',
//                 u.address = '$address',
//                 c.activeYear = '$activeYear',
//                 c.introduce = '$introduce',
//                 g.avatar = '$avatar',
//                 g.thumbnail1 = '$thumbnail1',
//                 g.thumbnail2 = '$thumbnail2',
//                 g.thumbnail3 = '$thumbnail3',
//                 g.thumbnail4 = '$thumbnail4',
//                 g.thumbnail5 = '$thumbnail5',
//             WHERE u.id = '$id' AND c.iduser = '$id' AND g.iduser = '$id'";
//     pdo_execute($sql);
// }
