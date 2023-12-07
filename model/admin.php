<?php
// Cấp quyền chỉ admin với có thể truy cập 
function manageAdmin($id)
{
    $sql = "SELECT * FROM user u
            WHERE u.role = 1 AND u.id = ?";
    return pdo_query_one($sql, $id);
}
// Truy xuất danh sách theo role 
function list_admin($id, $username, $name, $email, $phone, $address, $role)

{
    $sql = "SELECT * FROM user WHERE role = ?";
    $sql .= $id !== '' ? " AND id LIKE '%" . $id . "%' " : "";
    $sql .= $username !== '' ? " AND username LIKE '%" . $username . "%' " : "";
    $sql .= $name !== '' ? " AND name LIKE '%" . $name . "%' " : "";
    $sql .= $email !== '' ? " AND email LIKE '%" . $email . "%' " : "";
    $sql .= $phone !== '' ? " AND phone LIKE '%" . $phone . "%' " : "";
    $sql .= $address !== '' ? " AND address LIKE '%" . $address . "%' " : "";
    $sql .= " ORDER BY id DESC";
    return pdo_query($sql, $role);
}
// Truy xuất danh sách theo id 
function list_user()
{
    $sql = "SELECT * FROM user ";
    return pdo_query($sql);
}
function list_corp_admin($id, $idcorp, $username, $name, $email, $phone, $address, $role)
{
    $sql = "SELECT user.*, corp.* FROM user 
    LEFT JOIN corp ON user.id = corp.iduser
    WHERE role = ?";
    $sql .= $id !== '' ? " AND user.id LIKE '%" . $id . "%' " : "";
    $sql .= $idcorp !== '' ? " AND corp.id LIKE '%" . $idcorp . "%' " : "";
    $sql .= $username !== '' ? " AND user.username LIKE '%" . $username . "%' " : "";
    $sql .= $name !== '' ? " AND user.name LIKE '%" . $name . "%' " : "";
    $sql .= $email !== '' ? " AND user.email LIKE '%" . $email . "%' " : "";
    $sql .= $phone !== '' ? " AND user.phone LIKE '%" . $phone . "%' " : "";
    $sql .= $address !== '' ? " AND user.address LIKE '%" . $address . "%' " : "";
    $sql .= " ORDER BY user.id DESC";
    return pdo_query($sql, $role);
}
// truy xuất danh sách theo id recr
function list_recr($id, $name, $job, $salary, $start, $end)
{
    $sql = "SELECT recr.*, user.id AS userId, user.name AS userName, user.role, corp.iduser 
            FROM recr
            INNER JOIN corp ON recr.idcorp = corp.id
            INNER JOIN user ON corp.iduser = user.id
            WHERE 1 ";
    $sql .= $id !== '' ? " AND recr.id LIKE '%" . $id . "%' " : "";
    $sql .= $name !== '' ? " AND user.name LIKE '%" . $name . "%' " : "";
    $sql .= $job !== '' ? " AND recr.job LIKE '%" . $job . "%' " : "";
    $sql .= $salary !== '' ? " AND recr.salary LIKE '%" . $salary . "%' " : "";
    $sql .= $start !== '' ? " AND recr.start LIKE '%" . $start . "%' " : "";
    $sql .= $end !== '' ? " AND recr.end LIKE '%" . $end . "%' " : "";

    $sql .= " ORDER BY recr.id DESC";

    return pdo_query($sql);
}
// thêm admin 
function add_admin($username, $pass, $name, $email, $phone, $role)
{
    $sql = "INSERT INTO user( username, pass, name,  email, phone , role) 
        VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $username, $pass, $name, $email, $phone, $role);
}
//Quyền Xóa Tài khoản và toàn bộ thông tin liên quan bằng admin
function delete_admin($id)
{
    $sql1 = "DELETE FROM user WHERE id = ?";
    $sql2 = "DELETE FROM corp WHERE iduser = (SELECT id FROM user WHERE id = ?)";
    $sql3 = "DELETE FROM cv WHERE iduser = (SELECT id FROM user WHERE id = ?)";
    $sql4 = "DELETE FROM gallery WHERE iduser = (SELECT id FROM user WHERE id = ?)";
    $sql5 = "DELETE FROM skillCv WHERE idcv = (SELECT id FROM cv WHERE iduser = ?)";
    $sql6 = "DELETE FROM expCv WHERE idcv = (SELECT id FROM cv WHERE iduser = ?)";
    $sql7 = "DELETE FROM degree WHERE idcv = (SELECT id FROM cv WHERE iduser = ?)";
    $sql8 = "DELETE FROM recr WHERE idcorp = (SELECT iduser FROM corp WHERE iduser = (SELECT id FROM user WHERE id = ?))";

    pdo_execute($sql5, $id);
    pdo_execute($sql6, $id);
    pdo_execute($sql7, $id);
    pdo_execute($sql8, $id);
    pdo_execute($sql4, $id);
    pdo_execute($sql3, $id);
    pdo_execute($sql2, $id);
    pdo_execute($sql1, $id);
}

// đếm số lượng Người dùng theo role 
function countUser($role)
{
    $sql = "SELECT COUNT(*) as userCount FROM user WHERE role = ?";
    $result = pdo_query_one($sql, $role);
    return $result['userCount'];
}
// đếm số lượng Người dùng theo id
function countUserId()
{
    $sql = "SELECT COUNT(id) as total FROM user";
    $result = pdo_query_one($sql);
    return $result['total'];
}
// Đếm số lượng bài tuyển dụng 
function countRecr()
{
    $sql = "SELECT COUNT(id) as total FROM recr";
    $result = pdo_query_one($sql);
    return $result['total'];
}
// Đếm số lượng bài tuyển dụng 
function countIn4()
{
    $sql = "SELECT COUNT(id) as total FROM info";
    $result = pdo_query_one($sql);
    return $result['total'];
}
// Đếm số lượng Hồ Sơ/Bài tuyển của Doanh Nghiệp
function countInfo($idrec)
{
    $sql = "SELECT COUNT(*) as count FROM info WHERE idrec = ?";
    return pdo_query_one($sql, $idrec)['count'];
}
// Đếm số lượng Trạng Thái/Bài tuyển của Doanh Nghiệp
function countstatus($idrec, $status)
{
    $sql = "SELECT COUNT(*) as countstatus FROM info WHERE idrec = ? AND status = ?";
    $result = pdo_query_one($sql, $idrec, $status);
    return $result['countstatus'];
}
function status( $status)
{
    $sql = "SELECT COUNT(*) as countstatus FROM info WHERE status = ?";
    $result = pdo_query_one($sql, $status);
    return $result['countstatus'];
}