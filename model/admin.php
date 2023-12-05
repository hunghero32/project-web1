<?php

function manageAdmin($id)
{
    $sql = "SELECT * FROM user u
            WHERE u.role = 1 AND u.id = ?";
    return pdo_query_one($sql, $id);
}
function list_admin($id, $username, $name, $email, $phone, $address, $role)
{
    $sql = "SELECT * FROM user WHERE role = ? ";
    $sql .= $id !== '' ? " AND id LIKE '%" . $id . "%' " : "";
    $sql .= $username !== '' ? " AND username LIKE '%" . $username . "%' " : "";
    $sql .= $name !== '' ? " AND name LIKE '%" . $name . "%' " : "";
    $sql .= $email !== '' ? " AND email LIKE '%" . $email . "%' " : "";
    $sql .= $phone !== '' ? " AND phone LIKE '%" . $phone . "%' " : "";
    $sql .= $address !== '' ? " AND address LIKE '%" . $address . "%' " : "";
    $sql .= " ORDER BY id DESC";
    return pdo_query($sql, $role);
}
//========== Ver 1 ==========

// function list_recr($id,$name,$job,$salary,$start,$end) {
//     $sql = "SELECT recr.* , user.name
//     FROM recr 
//     INNER JOIN user  ON recr.idcorp = user.id
//     WHERE user.role = 3 ";
//     $sql .= $id !== '' ? " AND recr.id LIKE '%" . $id . "%' " : "";
//     $sql .= $name !== '' ? " AND user.name LIKE '%" . $name . "%' " : "";
//     $sql .= $job !== '' ? " AND recr.job LIKE '%" . $job . "%' " : "";
//     $sql .= $salary !== '' ? " AND recr.salary LIKE '%" . $salary . "%' " : "";
//     $sql .= $start !== '' ? " AND recr.start LIKE '%" . $start . "%' " : "";
//     $sql .= $end !== '' ? " AND recr.end LIKE '%" . $end . "%' " : "";
//     $sql .= " ORDER BY recr.idcorp DESC";
//     return pdo_query($sql);
// }

//========== Ver 2 ==========

// function list_recr($id, $name, $job, $salary, $start, $end)
// {
//     $sql = "SELECT recr.*,user.id , user.name , user.role, corp.iduser 
//     FROM recr
//     INNER JOIN corp ON recr.idcorp = corp.id
//     INNER JOIN user ON corp.iduser = user.id
//     WHERE = 1 ";
//     $sql .= $id !== '' ? " AND recr.id LIKE '%" . $id . "%' " : "";
//     $sql .= $name !== '' ? " AND user.name LIKE '%" . $name . "%' " : "";
//     $sql .= $job !== '' ? " AND recr.job LIKE '%" . $job . "%' " : "";
//     $sql .= $salary !== '' ? " AND recr.salary LIKE '%" . $salary . "%' " : "";
//     $sql .= $start !== '' ? " AND recr.start LIKE '%" . $start . "%' " : "";
//     $sql .= $end !== '' ? " AND recr.end LIKE '%" . $end . "%' " : "";
//     $sql .= " ORDER BY recr.id DESC";
//     return pdo_query($sql);
// }

//========== Ver 3 ==========

function list_recr($id, $name, $job, $salary, $start, $end) {
    $sql = "SELECT recr.*, user.id AS userId, user.name AS userName, user.role, corp.iduser 
            FROM recr
            INNER JOIN corp ON recr.idcorp = corp.id
            INNER JOIN user ON corp.iduser = user.id
            WHERE 1 "; // Start with a true condition

    $sql .= $id !== '' ? " AND recr.id LIKE '%" . $id . "%' " : "";
    $sql .= $name !== '' ? " AND user.name LIKE '%" . $name . "%' " : "";
    $sql .= $job !== '' ? " AND recr.job LIKE '%" . $job . "%' " : "";
    $sql .= $salary !== '' ? " AND recr.salary LIKE '%" . $salary . "%' " : "";
    $sql .= $start !== '' ? " AND recr.start LIKE '%" . $start . "%' " : "";
    $sql .= $end !== '' ? " AND recr.end LIKE '%" . $end . "%' " : "";

    $sql .= " ORDER BY recr.id DESC";
    
    return pdo_query($sql);
}
function add_admin($username, $pass, $name, $email, $phone, $role)
{
    $sql = "INSERT INTO user( username, pass, name,  email, phone , role) 
        VALUES (?,?,?,?,?,?)";
    pdo_execute($sql, $username, $pass, $name, $email, $phone, $role);
}
//========== Ver 1 ==========

// function delete_admin($id)
// {
//     $sql = "DELETE FROM  user  WHERE id = ?

//     DELETE FROM  corp  WHERE corp.iduser =  user.id
//     DELETE FROM  cv    WHERE cv.iduser =  user.id
//     DELETE FROM  gallery    WHERE gallery.iduser =  user.id

//     DELETE FROM  skillCv  WHERE skillCv.idcv =  cv.iduser
//     DELETE FROM  expCv  WHERE expCv.idcv =  cv.iduser
//     DELETE FROM  degree  WHERE degree.idcv =  cv.iduser

//     DELETE FROM  recr  WHERE recr.idcorp =  corp.iduser
//     ";

//     pdo_execute($sql, $id);
// }
//========== Ver 2 ==========

function delete_admin($id)
{
    // Set up your SQL statements
    $sql1 = "DELETE FROM user WHERE id = ?";
    $sql2 = "DELETE FROM corp WHERE iduser = (SELECT id FROM user WHERE id = ?)";
    $sql3 = "DELETE FROM cv WHERE iduser = (SELECT id FROM user WHERE id = ?)";
    $sql4 = "DELETE FROM gallery WHERE iduser = (SELECT id FROM user WHERE id = ?)";
    $sql5 = "DELETE FROM skillCv WHERE idcv = (SELECT id FROM cv WHERE iduser = ?)";
    $sql6 = "DELETE FROM expCv WHERE idcv = (SELECT id FROM cv WHERE iduser = ?)";
    $sql7 = "DELETE FROM degree WHERE idcv = (SELECT id FROM cv WHERE iduser = ?)";
    $sql8 = "DELETE FROM recr WHERE idcorp = (SELECT iduser FROM corp WHERE iduser = (SELECT id FROM user WHERE id = ?))";

    // Execute each SQL statement separately
    pdo_execute($sql5, $id);
    pdo_execute($sql6, $id);
    pdo_execute($sql7, $id);
    pdo_execute($sql8, $id);
    pdo_execute($sql4, $id);
    pdo_execute($sql3, $id);
    pdo_execute($sql2, $id);
    pdo_execute($sql1, $id);
}


function delete_checkbox($checkbox = [], $table)
{
    foreach ($checkbox as $box) {
        $sql = "DELETE from $table where id=" . $box;
        pdo_execute($sql);
    }
}
function countUser($role) {
    $sql = "SELECT COUNT(*) as userCount FROM user WHERE role = ?";
    $result = pdo_query_one($sql, $role);
    return $result['userCount'];
}
function countRecr($id) {
    $sql = "SELECT COUNT(*) AS jobCount FROM recr WHERE idcorp = ?";
    return pdo_query_one($sql, $id);}
function countUsersById($id) {
    $sql = "SELECT COUNT(*) AS userCount FROM user WHERE id = ?";
    return pdo_query_one($sql, $id);
}