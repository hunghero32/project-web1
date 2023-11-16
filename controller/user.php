<?php

switch ($act) {
    case 'signin':
        include 'view/user/signin.php';
        break;

    case 'signup':
        include 'view/user/signup.php';
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
