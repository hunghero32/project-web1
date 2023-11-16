<?php
$img_path = 'assets/uploads/';

function hide($act)
{
    $hide = ['signup', 'signin', 'forgotpassword'];
    foreach ($hide as $value) {
        if ($act === $value) {
            return true;
        }
    }
}
