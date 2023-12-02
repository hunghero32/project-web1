<?php
include 'view/admin/admin.php';

switch ($act) {
    case 'admin':
        # code...
        include('view/admin/admin.php');
        break;
        // Danh Sách Nhà Tuyển Dụng 
    case 'listadmin':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $role =1 ;
        $admin = list_admin($role);
    }
        include 'view/admin/listadmin.php';
        break;
        // Danh Sách CV

    default:
        # code...
        break;
}
