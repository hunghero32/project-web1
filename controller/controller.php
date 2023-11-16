<?php
session_start();
include 'global.php';
include 'model/pdo.php';
include 'model/corp.php';
include 'model/user.php';
include 'model/recr.php';

$top_corp = top_Corp();
$list_corp = list_Corp('', '', '');

include 'view/header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];

    hide($act) == false ? include 'view/navbar.php' : '';
    
    // controller child
    include 'corp.php';
    include 'recr.php';
    include 'user.php';
    include 'admin.php';

    hide($act) == false ? include 'view/footer.php' : '';
} else {
    include 'view/navbar.php';
    include 'view/home.php';
    include 'view/footer.php';
}

include 'view/script_tag.php';
