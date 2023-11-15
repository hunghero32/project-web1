<?php
switch ($act) {
case 'signin': // Đăng nhập (acc.php)
            if(isset($_POST['signin'])&&($_POST['signin'])){
                $user=login($_POST['username'], $_POST['pass']);
                if(is_array($user)){
                    $_SESSION['username']=$user;
                    header('Location: index.php');
                    $thongbao="Đăng nhập thành công.";
                }else{
                    $thongbao="Tài khoản hoặc mật khẩu sai, vui lòng thử lại";
                    include "view/user/signin.php";
                }
            }
            include "view/user/signup.php";
            break;
        case 'signup': // Đăng ký (acc.php)
            if(isset($_POST['signup'])&&($_POST['signup'])){
                add_user($_POST['email'], $_POST['username'], $_POST['pass'],$_POST['role']);
                $thongbao="thanh cong";
            }
            include "view/user/signup.php";
            break;
        }