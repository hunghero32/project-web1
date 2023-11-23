<?php

switch ($act) {
    case 'infoCorp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $corp = info_Corp($id);
            extract($corp);
        }

        include 'view/corp/infoCorp.php';
        break;

    case 'listCorp':
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        
        $list_corp = list_Corp($name, $address);
        include 'view/corp/listCorp.php';
        break;

    default:
        # code...
        break;
}
