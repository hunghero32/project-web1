<?php
//include "model/pdo.php"; // Replace with the actual file name containing your database functions
function loadall_cv_user() {  
    // Truy vấn dữ liệu từ database
    $sql = "SELECT user.*, cv.* FROM user user INNER JOIN cv ON user.id = cv.id";
    $result = pdo_query($sql);
    return $result;
}

// Function to load all CVs
function loadall_cv() {
    $sql = "SELECT * FROM cv";
    return pdo_query($sql);
}

// Function to load all CVs, ordered by views (top views)
function loadall_cv_top() {
    $sql = "SELECT * FROM cv ORDER BY view DESC";
    return pdo_query($sql);
}

// Function to load top 10 CVs, ordered by views
function loadall_cv_top10() {
    $sql = "SELECT * FROM cv ORDER BY view DESC LIMIT 10";
    return pdo_query($sql);
}

// Function to load a specific CV by ID
function loadone_cv($id) {
    $sql = "SELECT * FROM cv WHERE id = ?";
    return pdo_query_one($sql, $id);
}

// Function to insert a new CV
function insert_cv($iduser, $img, $major, $exp, $level, $salary, $description) {
    $sql = "INSERT INTO cv (iduser, img, major, exp, level, salary, description) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $iduser, $img, $major, $exp, $level, $salary, $description);
}

// Function to update an existing CV
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

// Function to delete a CV by ID
function delete_cv($id) {
    $sql = "DELETE FROM cv WHERE id = ?";
    pdo_execute($sql, $id);
}
