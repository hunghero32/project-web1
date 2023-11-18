<?php

switch ($act) {
    case 'infoCorp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $corp = info_Corp($id);
        }

        include 'view/corp/infoCorp.php';
        break;

    case 'listCorp':
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $major = isset($_POST['major']) ? $_POST['major'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        
        $list_corp = list_Corp($name, $major, $address);
        include 'view/corp/listCorp.php';
        break;

    default:
        # code...
        break;
}
