<?php
switch ($act) {
    case 'listCv':
        $cv = loadall_cv_user();
        include "view/cv/listCv.php"; 

        $name = $cv['name'];
        $major = $cv['major'];
        $exp = $cv['exp'];
        $salary = $cv['salary'];
        $address = $cv['address'];
        break;
    case 'infoCv':
        if(isset($_GET['id'])&&($_GET['id']>0)){
            $id=$_GET['id'];
            $infoCv=loadone_cv($id);
            extract($infoCv);

        include "view/cv/infoCv.php"; }
        break;
    case '3':
        $cv = loadall_cv_user();
        include "view/cv/listCv.php"; 
        break;
    default:
        # code...
        break;
}
