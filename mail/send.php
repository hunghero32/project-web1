<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $mail = new PHPMailer(true);
    
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jobsit.connect.jobs@gmail.com';
    $mail->Password = 'vjcjfucbhoubajed';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('jobsit.connect.jobs@gmail.com');
    $mail->addAddress($_POST['email']);

    $mail->isHTML(true);

    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];

    $mail->send();

    echo
    "
    <script>
    alert('Send Successfully');
    document.location.href = 'index.php';
    </script>
    ";
}
