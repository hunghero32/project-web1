<?php
function data()
{
    $sql = "SELECT * FROM datafilter";
    return pdo_query($sql);
}
