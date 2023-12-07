<?php

switch ($act) {

    case 'admin':

        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        include 'view/admin/navAdmin.php';

        $totalUsers = countUserId();
        $totalRecr = countRecr();
        $info = countIn4();
        $user = countUser(2);
        $corp = countUser(3);
        include('view/admin/thongke.php');
        break;

    case 'account':           // Danh Sách Admin
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        include 'view/admin/navAdmin.php';

        $totalUsers = countUserId();
        $user = countUser(2);
        $corp = countUser(3);

        
        // $id = isset($_GET['id']) ? $_GET['id'] : '';
        // $username = isset($_GET['username']) ? $_GET['username'] : '';
        // $name = isset($_GET['name']) ? $_GET['name'] : '';
        // $email = isset($_GET['email']) ? $_GET['email'] : '';
        // $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
        // $address = isset($_GET['address']) ? $_GET['address'] : '';
        // $role = isset($_GET['role']) ? $_GET['role'] : '';
        $listadmin = list_admin($id, $username, $name, $email, $phone, $address, $role);
        $listuser = list_user();
        include 'view/admin/account.php';
        break;

    case 'listadmin':           // Danh Sách Admin
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        include 'view/admin/navAdmin.php';

        $role = 1;
        $userCount = countUser($role);

        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $username = isset($_GET['username']) ? $_GET['username'] : '';
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
        $address = isset($_GET['address']) ? $_GET['address'] : '';

        $listadmin = list_admin($id, $username, $name, $email, $phone, $address, $role);
        include 'view/admin/listadmin.php';
        break;

    case 'listcv':           // Danh Sách Ứng Viên
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        include 'view/admin/navAdmin.php';

        $role = 2;
        $userCount = countUser($role);

        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $username = isset($_GET['username']) ? $_GET['username'] : '';
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
        $address = isset($_GET['address']) ? $_GET['address'] : '';

        $listcv = list_admin($id, $username, $name, $email, $phone, $address, $role);
        include 'view/admin/listCV.php';
        break;

    case 'listcorp':           // Danh Sách Doanh nghiệp 
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        include 'view/admin/navAdmin.php';

        $role = 3;
        $userCount = countUser($role);

        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $username = isset($_GET['username']) ? $_GET['username'] : '';
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $email = isset($_GET['email']) ? $_GET['email'] : '';
        $phone = isset($_GET['phone']) ? $_GET['phone'] : '';
        $address = isset($_GET['address']) ? $_GET['address'] : '';

        $listcorp = list_admin($id, $username, $name, $email, $phone, $address, $role);
        include 'view/admin/listCorp.php';
        break;

    case 'listrecr':           // Danh Sách Bài Tuyển Dụng
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        include 'view/admin/navAdmin.php';

        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $name = isset($_GET['name']) ? $_GET['name'] : '';
        $job = isset($_GET['job']) ? $_GET['job'] : '';
        $salary = isset($_GET['salary']) ? $_GET['salary'] : '';
        $start = isset($_GET['phone']) ? $_GET['phone'] : '';
        $end = isset($_GET['end']) ? $_GET['end'] : '';

        $listrecr = list_recr($id, $name, $job, $salary, $start, $end);
        $totalRecr = countRecr();  
        include 'view/admin/listRecr.php';
        break;

    case 'thongke':           // Danh Sách Thống Kê 
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        include 'view/admin/navAdmin.php';
        include 'view/admin/thongke.php';
        break;

    case 'signupAdmin':           // Đăng Ký Admin 
        $id = $_SESSION['username']['id'];
        $admin = manageAdmin($id);
        extract($admin);
        if (isset($_POST['signupAdmin'])) {
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $phone = $_POST['phone'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $thongbao = "<script> alert('Đã Tạo Tài Khoản Admin !');
            location.href = 'index.php?act=listadmin'; </script>";
            echo $thongbao;
            add_admin($username, $pass, $name, $email, $phone, $role);
        }
        include 'view/admin/signupAdmin.php';
        break;

    case 'delete':           // Danh Sách Xóa Tài Khoản
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            delete_admin($id);
            $thongbao = "<script> alert('Bạn đã XÓA thành công !');
            location.href = 'index.php?act=admin'; </script>";
            echo $thongbao;
        }
        break;
    case 'recr_delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            recr_delete($id);
            $thongbao = "<script> alert('Bạn đã XÓA thành công !');
                    location.href = 'index.php?act=listrecr'; </script>";
            echo $thongbao;
        }
    default:
        # code...
        break;
}
