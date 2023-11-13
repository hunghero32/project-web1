<?php
// include_once('../..c_pdo.php');
include('../c_pdo.php');
class M_corp extends db
{
    function get_all_Corp($name, $major, $address)
    {
        $sql = "SELECT c.*, u.name, u.img, u.email, u.phone, u.address, u.role as userRole,
                COUNT(c.id) as total
                FROM corp c
                INNER JOIN user u ON c.idcorp = u.id
                WHERE u.role = 3";
    
        $sql .= $name !== '' ? " AND c.name LIKE '$name' " : "";
        $sql .= $major !== '' ? " AND c.major LIKE '$major' " : "";
        $sql .= $address !== '' ? " AND c.address LIKE '$address' " : "";
    
        $sql .= " GROUP BY c.id, userRole ORDER BY c.id DESC";
    
        return $this->pdo_query($sql, []);
    }
    

    function get_one_Corp($id)
    {
        $sql = "SELECT c.*, u.name, u.img, u.email, u.phone, u.address
                FROM corp c
                INNER JOIN user u ON c.idcorp = u.id
                WHERE u.role = 3 AND c.id = $id";
        return $this->pdo_query_one($sql);
    }

    // UPDATE user as u, corp as c
    //     SET u.username = 'long',
    //         u.img = 'img.img',
    //         u.email = 'longlhph31572@fpt.edu.vn',
    //         u.phone = '0333333333',
    //         u.address = 'Đà Nẵng',
    //         c.exp = '10',
    //         c.major = 'be',
    //         c.description = 'test query 2 table'
    //     WHERE u.id = '7' AND c.idcorp = '7'

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
        WHERE u.id = '7' AND c.idcorp = '$id'";
        $this->pdo_execute($sql);
    }
}
