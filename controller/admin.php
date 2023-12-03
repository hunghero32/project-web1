<?php

switch ($act) {

    case 'admin':
        # code...
        include('view/admin/admin.php');
        break;
        // Danh Sách Nhà Tuyển Dụng 
    case 'listadmin':
        include 'view/admin/admin.php';
        $role = 1;
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $username = isset($_GET['username']) ? $_GET['username'] : '';
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
        $address = isset($_GET['address']) ? $_GET['address'] : '';

        $listadmin = list_admin($id, $username, $name, $email, $phone, $address, $role);
        include 'view/admin/listadmin.php';
        break;
    case 'listcv':
        include 'view/admin/admin.php';
        $role = 2;
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $username = isset($_GET['username']) ? $_GET['username'] : '';
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
        $address = isset($_GET['address']) ? $_GET['address'] : '';

        $listcv = list_cv_admin($id, $username, $name, $email, $phone, $address, $role);
        include 'view/admin/listCV.php';
        break;
    case 'listcorp':
        include 'view/admin/admin.php';
        $role = 3;
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $username = isset($_GET['username']) ? $_GET['username'] : '';
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
        $address = isset($_GET['address']) ? $_GET['address'] : '';

        $listcorp = list_corp_admin($id, $username, $name, $email, $phone, $address, $role);
        include 'view/admin/listCorp.php';
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete($id);
            $thongbao = "<script> alert('Bạn đã XÓA thành công !');
            location.href = 'index.php?act=manage_recr#v-pills-messages'; </script>";
            echo $thongbao;
        }
        break;
    default:
        # code...
        break;
}
