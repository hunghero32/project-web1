<?php

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

