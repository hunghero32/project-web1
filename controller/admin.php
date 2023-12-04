<?php

switch ($act) {

    case 'admin':
        # code...
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        include('view/admin/admin.php');
        break;
        // Danh Sách Nhà Tuyển Dụng 
    case 'listadmin':
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
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
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
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
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
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
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        include 'view/admin/admin.php';
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $job = isset($_GET['job']) ? $_GET['job'] : '';
        $salary = isset($_GET['salary']) ? $_GET['salary'] : '';
        $start = isset($_GET['phone']) ? $_GET['phone'] : '';
        $end = isset($_GET['end']) ? $_GET['end'] : '';

        $listrecr = list_recr($id, $name, $job, $salary, $start, $end);
        include 'view/admin/listRecr.php';
        break;
    case 'thongke':
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        include 'view/admin/admin.php';
        include 'view/admin/thongke.php';
        break;
    case 'addadmin':
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        include 'view/admin/admin.php';
        if (isset($_POST['signup'])) {
        }
        include 'view/admin/addAdmin.php';
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_admin($id);
            $thongbao = "<script> alert('Bạn đã XÓA thành công !');
            location.href = 'index.php?act=admin'; </script>";
            echo $thongbao;
        }
        break;
    default:
        # code...
        break;
}
