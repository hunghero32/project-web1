<?php
function loadall_cv_user() {  
    // Truy vấn dữ liệu từ database
    $sql = "SELECT user.*, cv.* FROM user user INNER JOIN cv ON user.id = cv.id";
    $result = pdo_query($sql);
    return $result;
}

// Load toàn bộ CV
function loadall_cv() {
    $sql = "SELECT * FROM cv";
    return pdo_query($sql);
}

// Load Top theo View
function loadall_cv_top() {
    $sql = "SELECT * FROM cv ORDER BY view DESC";
    return pdo_query($sql);
}

// Load Top 10 theo View
function loadall_cv_top10() {
    $sql = "SELECT * FROM cv ORDER BY view DESC LIMIT 10";
    return pdo_query($sql);
}

// load từng CV 1 
function loadone_cv($id) {
    $sql = "SELECT user.*, cv.* FROM user user INNER JOIN cv ON user.id = cv.id";
    return pdo_query_one($sql, $id);
}

// Tạo CV mới 
function insert_cv($iduser, $img, $major, $exp, $level, $salary, $description) {
    $sql = "INSERT INTO cv (iduser, img, major, exp, level, salary, description) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $iduser, $img, $major, $exp, $level, $salary, $description);
}

// Sửa CV
function update_cv($id, $iduser, $img, $major, $exp, $level, $salary, $description) {
    $sql = "UPDATE cv SET 
            iduser = ?, 
            img = ?, 
            major = ?, 
            exp = ?, 
            level = ?, 
            salary = ?, 
            description = ?, 
            WHERE id = ?";
    pdo_execute($sql, $iduser, $img, $major, $exp, $level, $salary, $description, $id);
}

// Xóa CV
function delete_cv($id) {
    $sql = "DELETE FROM cv WHERE id = ?";
    pdo_execute($sql, $id);
}
