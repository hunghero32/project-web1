<?php
    switch ($act) {
case 'listCV':
    $allCVs = loadall_cv_user();
    include "view/cv/listCV.php"; // Create a view file to display all CVs
    break;
    default:
    # code...
    break;
    }