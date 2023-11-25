<?php
$img_path = 'assets/uploads/';
$unknowCorp = 'assets/img/unknowCorp.png';
$unknowUser = 'assets/img/unknowUser.png';

function hide($act)
{
    $hide = ['signup', 'signin', 'err'];
    foreach ($hide as $value) {
        if ($act === $value) {
            return true;
        }
    }
}

function checkfind($input,$output) {
    $return =  $input !== '' && $input !== 'Không chọn' && $input !== 'Khác' ? $input : $output ;
    return $return;
}

function checklink($input) {
    $return = $input == '' || !isset($input) ? 'index.php?act=err' : $input;
    return $return;
}

function checknull($input) {
    $return = $input == '' || !isset($input) ? 'Chưa cập nhật' : $input;
    return $return;
}

function checkCorpAvaNull($input) {
    $return = $input == '' ? 'assets/img/unknowCorp.png' : 'assets/uploads/' . $input;
    return $return;
}

function checkUserAvaNull($input) {
    $return = $input == '' ? 'assets/img/unknowCorp.png' : 'assets/uploads/' . $input;
    return $return;
}
