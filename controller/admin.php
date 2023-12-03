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

        $listcv = list_admin($id, $username, $name, $email, $phone, $address, $role);
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

        $listcorp = list_admin($id, $username, $name, $email, $phone, $address, $role);
        include 'view/admin/listCorp.php';
        break;
    case 'listrecr':
        include 'view/admin/admin.php';        
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $job = isset($_GET['job']) ? $_GET['job'] : '';
        $salary = isset($_GET['salary']) ? $_GET['salary'] : '';
        $start = isset($_GET['phone']) ? $_GET['phone'] : '';
        $end = isset($_GET['end']) ? $_GET['end'] : '';

        $listrecr = list_recr($id,$name,$job,$salary,$start,$end);
        include 'view/admin/listRecr.php';
        break;
    case 'thongke':
        include 'view/admin/thongke.php';
        break;
        case 'addadmin':

            if (isset($_POST['signup'])) {}
                include 'view/admin/addAdmin.php';
                break;
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            // delete($id);
            $thongbao = "<script> alert('Bạn đã XÓA thành công !');
            location.href = 'index.php?act=admin'; </script>";
            echo $thongbao;
        }
        break;
    default:
        # code...
        break;
}
