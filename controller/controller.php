<?php
session_start();
include 'model/pdo.php';
include 'model/corp.php';


$top_corp = top_Corp();
include 'view/header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'infoCorp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $corp = info_Corp($id);
            }
            include 'view/corp/info_Corp.php';
            break;

        default:
            # code...
            break;
    }
} else {
    include 'view/home.php';
}

include 'view/footer.php';
