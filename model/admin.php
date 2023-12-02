<?php
function list_admin($role) {
    $sql = "SELECT * FROM user WHERE role = ? ";
    return pdo_query($sql,$role);
}
function list_corp_admin ($role){
    $sql = "SELECT * FROM user WHERE role = 2";
    return pdo_query($sql,$role);
}
function list_cv_admin ($role){
    $sql = "SELECT * FROM user WHERE role = 3";
    return pdo_query($sql,$role);
}

function delete($id, $table)
{
    $sql = "DELETE from $table where id = '$id'";
    pdo_execute($sql);
}

function delete_checkbox($checkbox = [], $table)
{
    foreach ($checkbox as $box) {
        $sql = "DELETE from $table where id=" . $box;
        pdo_execute($sql);
    }
}

