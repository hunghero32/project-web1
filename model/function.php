<?php
    function loadAll($table) {
        $sql = "SELECT * FROM $table order by id desc";
        return pdo_query($sql);
    }

    function loadTarget($table, $column, $compare) {
        $sql = "SELECT * FROM $table where 1 and $column = $compare";
        $list = pdo_query($sql);
        return $list;
    }
?>