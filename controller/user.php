<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include 'mail/PHPMailer/src/Exception.php';
include 'mail/PHPMailer/src/PHPMailer.php';
include 'mail/PHPMailer/src/SMTP.php';

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
                $username === $key['username'] ? $same = '[ Tài khoản người dùng đã tòn tại ! ]' : '';
                $phone === $key['phone'] || $email === $key['email'] ? $same = '[ Sdt hoặc email đã tồn tại ! ]' : '';
                $name === $key['name'] ? $same = '[ Tên người dùng đã tòn tại ! ]' : '';
            }

            $pass !== $repass ? $same = '[ Mật khẩu không khớp ! ]' : '';

            echo $same !== '' ? "<script>alert('$same');</script>" : '';
            $same == '' ? header('Location: index.php?act=signin') : '';
            $same == '' ? $_SESSION['signuped'] = 1 : '';
            $same == '' ? add_user($username, $pass, $name, $email, $phone, $role) : '';
        }

        include "view/user/signup.php";
        break;

    case 'forgot':
        if (isset($_POST['getpass'])) {
            $subject = 'Get Password / Forget Password';
            $content =
                "Vui lòng đổi lại mật khẩu để đảm bảo bảo mật thông tin.
                Mật khẩu của bạn là ";
            $alert = '';
            $exist = false;
            $emailExist = existAccount();
            foreach ($emailExist as $e) {
                if ($_POST['email'] == $e['email']) {
                    $exist = true;
                    $pass = $e['pass'];
                }
            }

            if ($exist == true) {
                $mail = new PHPMailer(true);

                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = $itjobEmail;
                $mail->Password = $passEmail;
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                $mail->setFrom('jobsit.connect.jobs@gmail.com');
                $mail->addAddress($_POST['email']);

                $mail->isHTML(true);

                $mail->Subject = $subject;
                $mail->Body = $content . $pass;

                $mail->send();

                echo
                "
                <script>
                alert('Mật khẩu đã được gửi về email của bạn !');
                </script>
                ";
            } else {
                echo
                "
                <script>
                alert('Email đăng kí không tồn tại !');
                </script>
                ";
            }
        }
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
