<?php

function applyJob($idRecr, $idCV, $status)
{
    $sql = "INSERT INTO  info ( idrec ,  idcv ,  status ) VALUES (?,?,?)";
    pdo_execute($sql, $idRecr, $idCV, $status);
}

function recr_add(
    $idcorp,
    $job,
    $exp,
    $level,
    $salary,
    $progLang,
    $type,
    $description,
    $end,
    $request
) {
    $sql = "INSERT INTO recr( idcorp, job, exp, level, salary,
         progLang, type, description, start, end, request) 
          VALUES (?,?,?,?,?,?,?,?,CURRENT_TIMESTAMP,?,?)";
    pdo_execute(
        $sql,
        $idcorp,
        $job,
        $exp,
        $level,
        $salary,
        $progLang,
        $type,
        $description,
        $end,
        $request
    );
}

function recr_update(
    $id,
    $idcorp,
    $job,
    $exp,
    $level,
    $salary,
    $progLang,
    $type,
    $description,
    $end,
    $request
) {
    $sql = "UPDATE  recr  SET   idcorp =?, job =?
        , exp =?, level =?, salary =?, progLang =?, type =?,
         description =?, start = CURRENT_TIMESTAMP, end =?, request =? WHERE id = ?";
    pdo_execute(
        $sql,
        $idcorp,
        $job,
        $exp,
        $level,
        $salary,
        $progLang,
        $type,
        $description,
        $end,
        $request,
        $id
    );
}

function recr_delete($id)
{
    $sql = "DELETE FROM  recr  WHERE id = ?";
    pdo_execute($sql, $id);
}

function recr_select_all($kym, $level, $typeRecr, $salary, $progLang, $address, $exp , $job)
{
    $sql = "SELECT r.* , c.introduce , u.address , u.name , g.avatar FROM recr r LEFT JOIN corp c ON c.id= r.idcorp 
        LEFT JOIN user u ON u.id = c.iduser LEFT JOIN gallery g ON u.id = g.iduser where 1 ";
    if ($kym != "") {
        $sql .= " AND r.job LIKE '%" . $kym . "%'";
        $sql .= " OR r.exp LIKE '%" . $kym . "%'";
        $sql .= " OR u.name LIKE '%" . $kym . "%'";
        $sql .= " OR r.progLang LIKE '%" . $kym . "%'";
        $sql .= " OR u.address LIKE '%" . $kym . "%'";
    }
    $sql .= $level !== '' ? " AND r.level LIKE '%" . $level . "%' " : "";
    $sql .= $typeRecr !== '' ? " AND r.type LIKE '%" . $typeRecr . "%' " : "";
    $sql .= $exp !== '' ? " AND r.exp LIKE '%" . $exp . "%' " : "";
    $sql .= $address !== '' ? " AND u.address LIKE '%" . $address . "%' " : "";
    $sql .= $salary !== '' ? " AND r.salary LIKE '%" . $salary . "%' " : "";
    $sql .= $progLang !== '' ? " AND r.progLang LIKE '%" . $progLang . "%' " : "";
    $sql .= $job !== '' ? " AND r.job LIKE '%" . $job . "%' " : "";
    // $sql .= $date !== '' ? " AND TIMESTAMPDIFF(MONTH, MIN(r.start), MAX(r.end)) LIKE '%" . $date . "%' " : "";


    $sql .= " ORDER BY r.id DESC  ";
    $valu = pdo_query($sql);
    return  $valu;
}
function recr_select_by_employers($idcorp)
{
    $sql = "SELECT r.* , c.introduce  ,u.address , u.name  FROM  recr r 
        LEFT JOIN corp c ON c.id= r.idcorp LEFT JOIN user u ON u.id = c.iduser LEFT JOIN gallery g ON u.id = g.iduser 
        
        WHERE r.idcorp = ?  LIMIT 0,3";
    return pdo_query($sql, $idcorp);
}
function info_Corp_recr($id)
{
    $sql = "SELECT u.name, u.email, u.phone, u.address, c.* 
        FROM user u LEFT JOIN corp c ON u.id = c.iduser 
        WHERE u.role = 3 AND u.id = ?";
    return pdo_query_one($sql, $id);
}

function recr_select_by_id($id)
{

    $sql = "SELECT r.* , c.introduce ,c.benefits   ,u.address , u.name , u.phone , u.email ,  g.avatar FROM  recr r 
        LEFT JOIN corp c ON c.id= r.idcorp  LEFT JOIN user u ON u.id = c.iduser LEFT JOIN gallery g ON u.id = g.iduser 
        
         WHERE r.id = ? ";
    return pdo_query_one($sql, $id);
}
function infoCv($id)
{
    $sql = "SELECT cv.* , g.avatar as avatarCV FROM cv LEFT JOIN user u ON u.id = cv.iduser 
        LEFT JOIN gallery g ON u.id = g.iduser  WHERE cv.iduser = ?";
    return pdo_query_one($sql, $id);
}
function recr_select_by_similar($job, $id)
{

    $sql = "SELECT r.* , c.introduce ,c.benefits   ,u.address , u.name , g.avatar FROM  recr r 
        LEFT JOIN corp c ON c.id= r.idcorp  LEFT JOIN user u ON u.id = c.iduser LEFT JOIN gallery g ON u.id = g.iduser 
         WHERE r.job = ? AND r.id != ? ";
    return pdo_query($sql, $job, $id);
}

function get_records()
{

    $sql = "SELECT r.* , c.introduce , u.address , u.name, g.avatar
        FROM recr r 
        LEFT JOIN corp c ON c.id= r.idcorp 
        LEFT JOIN user u ON u.id = c.iduser 
        LEFT JOIN gallery g ON c.iduser = g.iduser where 1 ORDER BY r.id DESC LIMIT 0,8";

    $valu = pdo_query($sql);
    return  $valu;
}


function search_address_recr($kym, $end, $id)
{
    $sql = "SELECT r.* , c.introduce , u.address , u.name FROM recr r 
        LEFT JOIN corp c ON c.id= r.idcorp 
        LEFT JOIN user u ON u.id = c.iduser 
        LEFT JOIN gallery g ON u.id = g.iduser where  u.id = ? ";
    if ($kym !== "") {
        $sql .= " AND r.job LIKE '%" . $kym . "%'";
        $sql .= " OR r.exp LIKE '%" . $kym . "%'";
        $sql .= " OR r.salary LIKE '%" . $kym . "%'";
        $sql .= " OR r.type LIKE '%" . $kym . "%'";
        $sql .= " OR r.progLang LIKE '%" . $kym . "%'";
        $sql .= " OR r.level LIKE '%" . $kym . "%'";
    }
    $sql .= $end !== "" ? " AND r.end LIKE '%" . $end . "%' " : "";
    $sql .= " ORDER BY r.id DESC LIMIT 0,8";

    $valu = pdo_query($sql, $id);
    return  $valu;
}

function list_v_recr($id)
{
    $sql = "SELECT r.* , c.introduce , u.address , u.name FROM recr r 
        LEFT JOIN corp c ON c.id= r.idcorp 
        LEFT JOIN user u ON u.id = c.iduser 
        LEFT JOIN gallery g ON u.id = g.iduser where  u.id = ? ";

    $sql .= " ORDER BY r.id DESC LIMIT 0,8";

    $valu = pdo_query($sql, $id);
    return  $valu;
}

function get_Total_Records()
{

    $sql = "SELECT COUNT(id) AS total FROM recr";

    $valu = pdo_query_one($sql);
    return $valu;
}

function info()
{
    $sql = "SELECT * FROM info ";
    $valu = pdo_query($sql);
    return  $valu;
}
function list_apply_cv($id ,$kym ,$status )
{
    $sql = "SELECT DISTINCT  cv.*, u.name as namecv , r.job , g.avatar as avatarCv , i.id as idinfo , i.status FROM cv  LEFT JOIN info i ON cv.id= i.idcv 
         LEFT JOIN recr r ON r.id= i.idrec LEFT JOIN user u ON u.id = cv.iduser
         LEFT JOIN gallery g ON u.id = g.iduser LEFT JOIN corp c ON r.idcorp= c.id
         LEFT JOIN skillcv s ON cv.id = s.idcv LEFT JOIN degree d ON cv.id = d.idcv 
         LEFT JOIN expcv ec ON ec.idcv = cv.id
        WHERE c.id = ? AND  i.idcv IS NOT NULL";
         if ($kym !== "") {
            $sql .= " AND u.name LIKE '%" . $kym . "%'";
            $sql .= " OR ec.level LIKE '%" . $kym . "%'";
            $sql .= " OR ec.job LIKE '%" . $kym . "%'";
            $sql .= " OR cv.salary LIKE '%" . $kym . "%'";
            $sql .= " OR r.type LIKE '%" . $kym . "%'";
            $sql .= " OR r.progLang LIKE '%" . $kym . "%'";
            $sql .= " OR r.level LIKE '%" . $kym . "%'";
            $sql .= " OR c.major LIKE '%" . $kym . "%' ";
            $sql .= " OR u.address LIKE '%" . $kym . "%' ";
            $sql .= " OR s.progLang LIKE '%" . $kym . "%' ";
        }
        $sql .= $status !== "" ? " AND i.status LIKE '%" . $status . "%' " : "";
        $sql .= " ORDER BY r.id DESC LIMIT 0,8";
    
        
    $valu = pdo_query($sql, $id );
    return  $valu;
}

function Count_info_CV($idrec)
{
    $sql = "SELECT COUNT(idcv) as totalCV FROM info  WHERE idrec = ? ";
    $valu = pdo_query_one($sql, $idrec);
    return $valu;
}

function recr_count_cv($idrec)
{
    $sql = " SELECT DISTINCT cv.*, u.name as namecv , r.job , g.avatar as avatarCv , i.id as idinfo , i.status FROM cv 
    LEFT JOIN info i ON cv.id= i.idcv LEFT JOIN recr r ON r.id= i.idrec LEFT JOIN user u ON u.id = cv.iduser 
    LEFT JOIN gallery g ON u.id = g.iduser LEFT JOIN corp c ON r.idcorp= c.id 
    WHERE i.idcv IS NOT NULL AND i.idrec = ?";
    $valu = pdo_query($sql, $idrec);
    return $valu;
}

function update_add_Info($status, $id)
{
    $sql = "UPDATE  info  SET  status =? WHERE id = ?";
    pdo_execute($sql, $status, $id);
}

function removeRecInfo($id)
{
    $sql = "DELETE FROM info WHERE id = ?";
    pdo_execute($sql, $id);
}

function existCvInRecr($idrec)
{
    $sql = "SELECT info.idcv FROM info WHERE idrec LIKE ?";
    return pdo_query($sql, $idrec);
}
function info_delete($id)
{
    $sql = "DELETE FROM  info  WHERE id = ?";
    pdo_execute($sql, $id);
}