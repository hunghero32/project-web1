<?php


switch ($act) {
    case 'signin':
        if (isset($_POST['signin'])) {
            $user = login($_POST['username'], $_POST['pass']);
            if (is_array($user)) {
                $_SESSION['username'] = $user;
                header('Location: index.php');
                echo "<script>alert('Login successful!');</script>";
            } else {
                echo "<script>alert('Login successful!');</script>";
                include "view/user/signin.php";
            }
        }

        include 'view/user/signin.php';
        break;

    case 'signup':
        if (isset($_POST['submit']) ) {
            $username = $_POST['username'];
            // $image = $_FILES['img'];
            // $avatar = $image['name'];
            $pass = $_POST['pass'];
            $phone = $_POST['phone'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            // $adress = $_POST['adress'];
            $role = $_POST['role'];
            $target_file = 'assets/uploads/' . $avatar;
            move_uploaded_file($image['tmp_name'], $target_file);

            add_user($username, $pass,$name , $avatar , $email, $phone, $adress , $role);
        } 
        include "view/user/signup.php";
        break;

    case 'forgotpassword':
        include 'view/user/forgotPass.php';
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
