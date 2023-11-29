<?php

function list_cv($level, $age, $major, $exp, $address, $salary, $progLang)
{
    $sql = "SELECT 
        c.*, 
        u.name AS name,
        u.address, 
        u.role AS userrole, 
        g.avatar, 
        s.progLang,
        YEAR(NOW()) - YEAR(c.birth) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(c.birth, '%m%d')) AS age,
        SUM(TIMESTAMPDIFF(MONTH, e.start, e.end)) AS exp
        FROM cv c
        INNER JOIN user u ON c.iduser = u.id
        LEFT JOIN skillcv s ON c.id = s.idcv
        LEFT JOIN gallery g ON c.iduser = g.iduser
        LEFT JOIN expcv e ON e.idcv = c.id
        WHERE u.role = 2";

    $sql .= $level !== '' ? " AND e.level LIKE '%" . $level . "%' " : "";
    $sql .= $major !== '' ? " AND c.major LIKE '%" . $major . "%' " : "";
    $sql .= $address !== '' ? " AND u.address LIKE '%" . $address . "%' " : "";
    $sql .= $salary !== '' ? " AND c.salary LIKE '%" . $salary . "%' " : "";
    $sql .= $progLang !== '' ? " AND s.progLang LIKE '%" . $progLang . "%' " : "";

    $sql .= " GROUP BY c.id, g.avatar, u.role";

    $sql .= $exp !== '' && $exp !== 'Khác' || $age !== '' && $age !== 'Khác' ? " HAVING" : '';

    if ($exp == '6 tháng ~ 2 năm') {
        $sql .= " exp >= 6 AND exp <= 24";
    } else if ($exp == '2 năm ~ 5 năm') {
        $sql .= " exp > 24 AND exp <= 60";
    } else if ($exp == 'Trên 5 năm') {
        $sql .= " exp > 60 AND exp <= 120";
    } else if ($exp == 'Trên 10 năm') {
        $sql .= " exp > 120";
    } else if ($exp == 'Chưa có kinh nghiệm') {
        $sql .= " exp > 0 AND exp < 6";
    }

    $and = $exp !== '' && $exp !== 'Khác' ? ' AND' : '';

    if ($age === '18 - 23') {
        $sql .= $and . " age >= 18 AND age <= 23";
    } else if ($age === '> 23') {
        $sql .= $and . " age > 23 AND age < 30";
    } else if ($age === '> 30') {
        $sql .= $and . " age > 30";
    }

    $sql .= " ORDER BY c.id DESC";
    // echo($sql);
    return pdo_query($sql);
}

function top_cv()
{
    $sql = "SELECT cv.*, u.name, u.email, u.phone, u.address
            FROM cv
            INNER JOIN user u ON cv.iduser = u.id
            WHERE u.role = 2 ORDER BY cv.id DESC LIMIT 0,8";
    return pdo_query($sql);
}

function info_cv($id)
{
    $sql = "SELECT cv.*, u.name, u.email, u.phone, u.address, s.progLang, s.percent, ec.corp, ec.start, ec.end, ec.job, d.school, d.year, g.avatar,
            TIMESTAMPDIFF(YEAR, CURRENT_DATE, cv.birth) as age,
            TIMESTAMPDIFF(MONTH, MIN(ec.start), MAX(ec.end)) as exp
            FROM cv
            INNER JOIN user u ON cv.iduser = u.id
            LEFT JOIN skillcv s ON cv.id = s.idcv
            LEFT JOIN gallery g ON cv.iduser = g.iduser
            LEFT JOIN degree d ON cv.id = d.idcv
            LEFT JOIN expcv ec ON ec.idcv = cv.id
            WHERE u.role = 2 AND cv.iduser = ?
            GROUP BY cv.id, u.name, u.email, u.phone, g.avatar, u.address, cv.birth, s.progLang, ec.idcv";

    $cv = pdo_query_one($sql, $id);
    return $cv;
}

function update_cv($id, $gender, $birth, $salary, $major, $introduce)
{
    $sql = "UPDATE cv SET 
            gender = ?,
            birth = ?,
            salary = ?,
            major = ?,
            introduce = ?
            WHERE id = ?";
    pdo_execute($sql, $gender, $birth, $salary, $major, $introduce, $id);
}

function update_degree($id, $name, $school, $year)
{
    $sql = "UPDATE degree SET  name = ?, school = ?, year = ? WHERE id = ?";
    pdo_execute($sql, $name, $school, $year, $id);
}

function update_expcv($id, $level, $job, $corp, $start, $end)
{
    $sql = "UPDATE expcv SET  level = ?, job = ?, corp = ?, start = ?, end = ? WHERE id = ?";
    pdo_execute($sql, $level, $job, $corp, $start, $end, $id);
}

function update_skill($id, $progLang, $percent)
{
    $sql = "UPDATE skillcv SET  progLang = ?, percent = ? WHERE id = ?";
    pdo_execute($sql, $progLang, $percent, $id);
}

function updateAllInfo($cvData, $degreeData, $expData, $skillData)
{
    update_cv(
        $cvData['id'],
        $cvData['gender'],
        $cvData['birth'],
        $cvData['salary'],
        $cvData['major'],
        $cvData['introduce']
    );

    update_degree(
        $degreeData['id'],
        $degreeData['name'],
        $degreeData['school'],
        $degreeData['year']
    );

    update_expcv(
        $expData['id'],
        $expData['level'],
        $expData['job'],
        $expData['corp'],
        $expData['start'],
        $expData['end']
    );

    update_skill(
        $skillData['id'],
        $skillData['progLang'],
        $skillData['percent']
    );
    pdo_execute($cvData, $degreeData, $expData, $skillData);
}

function get_cv_info($idcv)
{
    $sql = "SELECT * FROM cv WHERE id = ?";
    return pdo_query_one($sql, $idcv);
}

function get_degree_info($idcv)
{
    $sql = "SELECT * FROM degree WHERE idcv = ?";
    return pdo_query($sql, $idcv);
}

function get_expcv_info($idcv)
{
    $sql = "SELECT * FROM expcv WHERE idcv = ?";
    return pdo_query($sql, $idcv);
}

function get_skillcv_info($idcv)
{
    $sql = "SELECT * FROM skillcv WHERE idcv = ?";
    return pdo_query($sql, $idcv);
}

function info_all($idcv)
{
    $cvData = get_cv_info($idcv);
    $degreeData = get_degree_info($idcv);
    $expData = get_expcv_info($idcv);
    $skillData = get_skillcv_info($idcv);
    pdo_execute($cvData, $degreeData, $expData, $skillData);
}
