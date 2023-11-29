<?php


switch ($act) {
    case 'signin':
        if (isset($_POST['signin'])) {
            $user = login($_POST['username'], $_POST['pass']);
            // var_dump($user);
            if (is_array($user)) {
                $_SESSION['username'] = $user;
                header('Location: index.php');
                // echo "<script>alert('Login successful!');</script>";
            } else {
                echo "<script>alert('Sai mật khẩu hoặc tên tài khoản !');</script>";
                include "view/user/signin.php";
            }
        }
        include 'view/user/signin.php';
        break;

    case 'signup':

        if (isset($_POST['signup'])) {

            $same = '';
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $repass = $_POST['repass'];
            $phone = $_POST['phone'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $role = $_POST['role'];

            $exist = existAccount();
            foreach ($exist as $key) {
                $username === $key['username'] ? $same = '[ Tài khoản người dùng đã tòn tại ! ]' : '' ;
                $phone === $key['phone'] || $email === $key['email'] ? $same = '[ Sdt hoặc email đã tồn tại ! ]' : '';
                $name === $key['name'] ? $same = '[ Tên người dùng đã tòn tại ! ]' : '' ;
            }

            $pass !== $repass ? $same = '[ Mật khẩu không khớp ! ]' : ''; 

            echo $same !== '' ? "<script>alert('$same');</script>" : '';
            $same == '' ? header('Location: index.php?act=signin') : '';
            $same == '' ? $_SESSION['signuped'] = 1 : '';
            $same == '' ? add_user($username, $pass, $name, $email, $phone, $role) : '';
        }

        include "view/user/signup.php";
        break;
    // case 'editinfo':
    //     if (isset($_POST['edit'])) {

    //         $name = $_POST['name'];
    //         $pass = $_POST['pass'];
    //         $phone = $_POST['phone'];
    //         $email = $_POST['email'];
    //         $address = $_POST['adress'];
    //         $role = $_POST['role'];
    //         $target_file = 'assets/uploads/' . $img;
    //         move_uploaded_file($image['tmp_name'], $target_file);
    //     }
    //     include 'view/user/editinfo.php';
    //     break;
    case 'forgotpass':
        include 'view/user/forgotPass.php';
        break;
    case 'signout':
        unset($_SESSION['username']);
        header('Location: index.php');
        break;
    case 'contact':
        include 'view/contact.php';
        break;

    case 'about':
        include 'view/about.php';
        break;

    case 'privacy':
        include 'view/privacy.php';
        break;

    default:
        # code...
        break;
}
