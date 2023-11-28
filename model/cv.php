<?php

function list_cv($level, $age, $major, $exp, $address, $salary, $progLang)
{
    $sql = "SELECT cv.*, u.name, u.email, u.phone, u.address, u.role as userRole, g.avatar, s.progLang
            FROM user u
            LEFT JOIN cv ON u.id = cv.iduser
            LEFT JOIN skillcv s ON cv.id = s.idcv
            LEFT JOIN gallery g ON u.id = g.iduser
            WHERE u.role = ?";

    $sql .= $address !== '' ? " AND u.address LIKE '%" . $address . "%' " : "";
    $sql .= $level !== '' ? " AND cv.level = '" . $level . "' " : "";
    $sql .= $age !== '' ? " AND cv.age = '" . $age . "' " : "";
    $sql .= $major !== '' ? " AND cv.major LIKE '%" . $major . "%' " : "";
    $sql .= $exp !== '' ? " AND cv.experience = '" . $exp . "' " : "";
    $sql .= $salary !== '' ? " AND cv.salary = '" . $salary . "' " : "";
    $sql .= $progLang !== '' ? " AND s.progLang = '" . $progLang . "' " : "";

    if (!empty($progLang)) {
        $sql .= " AND (";
        foreach ($progLang as $lang) {
            $sql .= "cv.programming_languages LIKE '%" . $lang . "%' OR ";
        }
        $sql = rtrim($sql, " OR ");
        $sql .= ")";
    }

    $sql .= " GROUP BY cv.id, u.role ORDER BY cv.id DESC";

    return pdo_query($sql, 2);
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
?>
