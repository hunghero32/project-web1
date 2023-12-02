<?php
function list_user_admin ($id) {
    $sql = "SELECT * FROM user WHERE id = $id";
    return pdo_query($sql,$id);
}
function list_corp_admin ($id){
    $sql = "SELECT corp*,
    user.name,user.user.email,user.phone,user.address,user.role
     FROM corp WHERE user.role = 3";
    return pdo_query($sql,$id);
}
function list_cv_admin ($id){
    $sql = "SELECT cv*,
    user.name,user.user.email,user.phone,user.address,user.role
     FROM cv WHERE user.role = 2";
    return pdo_query($sql,$id);
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

