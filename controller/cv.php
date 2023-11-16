<?php
switch ($act) {
    case 'listCv':
        $allCVs = loadall_cv_user();
        $cv = loadall_cv_user();

        include "view/cv/listCv.php"; // Create a view file to display all CVs
        break;
    default:
        # code...
        break;
}
