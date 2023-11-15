<?php
session_start();
include 'view/header.php';
include "model/pdo.php";
include "model/acc.php";

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'signin': // Đăng nhập (acc.php)
            if (isset($_POST['signin']) && ($_POST['signin'])) {
                $username = login($_POST['username'], $_POST['pass']);
                if (is_array($user)) {
                    $_SESSION['username'] = $username;
                    $_SESSION['pass'] = $pass;
                    header('Location: index.php'); // Redirect to index.php
                    $thongbao = "Đăng nhập thành công."; // Success message
                    exit; // Stop further execution
                } else {
                    $thongbao = "Tài khoản hoặc mật khẩu sai, vui lòng thử lại";
                    include "view/user/signin.php"; // Include the signin.php view with an error message
                }
            }
            include "view/user/signin.php"; // Include the signin.php view
            break;
        
        case 'signup': // Đăng ký (acc.php)
            if(isset($_POST['signup'])&&($_POST['signup'])){
                add_user($_POST['email'], $_POST['username'], $_POST['pass'],$_POST['role']);
                $thongbao="thanh cong";
            }
            include "view/user/signup.php";
            break;
        
        case 'value':
            # code...
            break;

        default:
            # code...
            break;
    }
} else {
    include 'view/home.php';
}

include 'view/footer.php';
