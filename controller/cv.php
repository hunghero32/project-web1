<?php
switch ($act) {
    case 'infoCv':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $cv = info_cv($id);
        }

        include 'view/cv/infoCv.php';
        break;

    case 'listCv':
        $filter_cv = filter_cv();

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $major = isset($_POST['major']) ? $_POST['major'] : '';
        $exp = isset($_POST['exp']) ? $_POST['exp'] : '';
        $salary = isset($_POST['salary']) ? $_POST['salary'] : '';

        $list_cv = list_cv($name, $major, $exp, $salary);
        include 'view/cv/listCv.php';
        break;

    default:
        # code...
        break;
}
