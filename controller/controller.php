<?php
session_start();
include 'global.php';
include 'model/pdo.php';
include 'model/corp.php';
include 'model/cv.php';
include 'model/admin.php';
include 'model/recr.php';
include 'model/user.php';
include 'model/datafilter.php';


$datafilter = data();
$top_corp = top_Corp();
$top_cv = top_cv();
$list_corp = list_Corp('', '');
$list_cv = list_cv('', '', '', '','','','');
$list_recr = get_records();
// $search_hn_recr = search_hn_recr();

include 'view/header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    
    $act == 'err' ? include 'view/404.php' : '';

    include 'user.php';
    
    hide($act) == false ? include 'view/navbar.php' : '';
    
    // controller child
    include 'corp.php';
    include 'recr.php';
    include 'admin.php';
    include 'cv.php';
    
    hide($act) == false ? include 'view/footer.php' : '';
} else {
    include 'view/navbar.php';
    include 'view/home.php';
    include 'view/footer.php';
}


include 'view/script_tag.php';
