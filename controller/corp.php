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
        include 'view/corp/listCorp.php';
        break;

    default:
        # code...
        break;
}
