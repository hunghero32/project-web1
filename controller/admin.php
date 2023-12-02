<?php

switch ($act) {
    case 'admin':
        # code...
        include('view/admin/admin.php');
        break;
        // Danh Sách Nhà Tuyển Dụng 
    case 'listCorp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $degree = list_corp_admin($idcv);} 
        include 'view/admin/listCorp.php';
        break;
        // Danh Sách CV
    case 'listCv':
        $level = isset($_POST['level']) ? $_POST['level'] : '';
        $age = isset($_POST['age']) ? $_POST['age'] : '';
        $major = isset($_POST['major']) ? $_POST['major'] : '';
        $exp = isset($_POST['exp']) ? $_POST['exp'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $salary = isset($_POST['salary']) ? $_POST['salary'] : '';
        $progLang = isset($_POST['skill']) ? $_POST['skill'] : '';

        $list_cv = list_cv($level, $age, $major, $exp, $salary, $address, $progLang);
        include 'view/cv/listCv.php';
        break;
        //Danh Sách Bài Tuyển Dụng 
    case 'listRecr':
        $level = isset($_POST['level']) ? $_POST['level'] : '';
        $kym = isset($_POST['key']) ? $_POST['key'] : '';
        $typeRecr = isset($_POST['typeRecr']) ? $_POST['typeRecr'] : '';
        $major = isset($_POST['major']) ? $_POST['major'] : '';
        $exp = isset($_POST['exp']) ? $_POST['exp'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $salary = isset($_POST['salary']) ? $_POST['salary'] : '';
        $progLang = isset($_POST['progLang']) ? $_POST['progLang'] : '';
        $date = isset($_POST['date']) ? $_POST['date'] : '';
        $perPage = 5;
        $val_racr = recr_select_all($kym, $level, $typeRecr, $salary, $progLang, $address, $exp);

        include 'view/recr/listRecr.php';
        break;

    default:
        # code...
        break;
}
