<?php

function list_cv($level, $age, $major, $exp, $address, $salary, $progLang)
{
        $sql = "SELECT cv.*, u.username, u.name as name, u.email, u.phone, u.address, u.role as userrole, g.avatar, s.progLang,
        TIMESTAMPDIFF(MONTH, MIN(expcv.start), MAX(expcv.end)) as exp
        FROM cv
        INNER JOIN user u ON cv.iduser = u.id
        LEFT JOIN skillcv s ON cv.id = s.idcv
        LEFT JOIN gallery g ON cv.iduser = g.iduser
        LEFT JOIN expcv ON expcv.idcv = cv.id
        WHERE u.role = 2";

        $sql .= $level !== '' ? " AND u.name LIKE '%" . $level . "%' " : "";
        $sql .= $age !== '' ? " AND u.name LIKE '%" . $age . "%' " : "";
        $sql .= $major !== '' ? " AND cv.major LIKE '%" . $major . "%' " : "";
        $sql .= $exp !== '' ? " AND TIMESTAMPDIFF(MONTH, MIN(expcv.start), MAX(expcv.end)) LIKE '%" . $exp . "%' " : "";
        $sql .= $address !== '' ? " AND u.address LIKE '%" . $address . "%' " : "";
        $sql .= $salary !== '' ? " AND cv.salary LIKE '%" . $salary . "%' " : "";
        $sql .= $progLang !== '' ? " AND s.progLang LIKE '%" . $progLang . "%' " : "";

        $sql .= " GROUP BY cv.id, g.avatar, u.role ORDER BY cv.id DESC";
        return pdo_query($sql);
}
function list_skillcv($progLang,$percent){};
function list_expcv($level, $job, $corp, $start, $end){};
function list_degree($level, $age, $major, $exp, $address, $salary, $progLang){};
function filter_cv()
{
        $sql = "SELECT cv.*,
                s.progLang, s.percent,
                i.status,
                ec.level, ec.job, ec.corp, ec.start as exp_start, ec.end as exp_end,
                d.name as degree_name, d.school, d.year as degree_year,
                fc.exp as filter_exp, fc.major as filter_major, fc.age as filter_age, 
                fc.gender as filter_gender, fc.level as filter_level, fc.salary as filter_salary, fc.progLang as filter_progLang,
                TIMESTAMPDIFF(MONTH , MIN(ec.start), MAX(ec.end)) as exp,
                TIMESTAMPDIFF(YEAR, CURRENT_DATE, cv.birth) as age
                FROM cv
                LEFT JOIN skillcv s ON cv.id = s.idcv
                LEFT JOIN info i ON cv.id = i.idcv
                LEFT JOIN expcv ec ON cv.id = ec.idcv
                LEFT JOIN degree d ON cv.id = d.idcv
                LEFT JOIN filtercv fc ON cv.id = fc.id
                WHERE cv.iduser IN (SELECT id FROM user WHERE role = 2)
                GROUP BY cv.id
                HAVING exp IS NOT NULL 
                ORDER BY cv.id DESC";

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
        $sql = "SELECT cv.*, u.name, u.email, u.phone, u.address,s.progLang,s.percent,ec.corp,ec.start,ec.end,ec.job,d.school,d.year,g.avatar,
            TIMESTAMPDIFF(YEAR, CURRENT_DATE, cv.birth) as age,
            TIMESTAMPDIFF(MONTH, MIN(ec.start), MAX(ec.end)) as exp
            FROM cv
            INNER JOIN user u ON cv.iduser = u.id
            LEFT JOIN skillcv s ON cv.id = s.idcv
            LEFT JOIN gallery g ON cv.iduser = g.iduser
            LEFT JOIN degree d ON cv.id = d.idcv
            LEFT JOIN expcv ec ON ec.idcv = cv.id
            WHERE u.role = 2 AND cv.iduser = $id
            GROUP BY cv.id, u.name, u.email, u.phone,g.avatar, u.address, cv.birth,s.progLang,ec.idcv";

        $cv = pdo_query_one($sql);
        return $cv;
}

function update_cv($id, $name, $email, $phone, $address, $exp, $major, $intro)
{
        $sql = "UPDATE user as u, cv as cv, skillcv as sk, degree as de, expcv as exp 
            SET u.username = '$name',

                u.email = '$email',
                u.phone = '$phone',
                u.address = '$address',
                exp.end = '$exp',
                cv.major = '$major',
              cv.introduce = '$intro'
            WHERE u.id = '$id' AND cv.iduser = '$id'";
        pdo_execute($sql);
}
