<?php
$img_path = 'assets/uploads/';

function hide($act)
{
    $hide = ['signup', 'signin', 'admin', 'listadmin','listcorp','listcv', 'err'];
    foreach ($hide as $value) {
        if ($act === $value) {
            return true;
        }
    }
}
function checkfind($input, $output)
{
    $return =  $input !== '' && $input !== 'Không chọn' && $input !== 'Khác' ? $input : $output;
    return $return;
}

function checklink($input)
{
    $return = $input == '' || !isset($input) || !file_exists($input) ? 'index.php?act=err' : $input;
    return $return;
}

function checknull($input)
{
    $return = $input == '' || !isset($input) ? 'Chưa cập nhật' : $input;
    return $return;
}

function checkCorpAvaNull($input)
{
    $return = $input == '' ? 'assets/img/unknowCorp.png' : 'assets/uploads/' . $input;
    return $return;
}

function checkUserAvaNull($input)
{
    $return = $input == '' ? 'assets/img/unknowUser.png' : 'assets/uploads/' . $input;
    return $return;
}

function checkUserCvNull($input)
{
    $return = $input == '' ? 'assets/img/unknowCv.png' : 'assets/uploads/' . $input;
    return $return;
}

function gallery($arr = [])
{
    $collect = array();
    foreach ($arr as $key) {
        !empty($key) ? $collect[] = $key : '';
    }
    $return = count($collect) > 0 ? $collect : '';
    return $return;
}

function paragToLines($paragraph)
{
    $return = '';
    if (!empty($paragraph)) {
        foreach ($paragraph as $line) {
            $return .= $line !== '' ? $line . '<br>' : '';
        }
    }
    return $return;
}

function checkUpdate($input) {
    $return = isset($input) && $input == '' ? '' : $input;
    return $return;
}

function updateImg($input,$input2) {
    $file_name = '';
    if (isset($input) && ($input['size'] > 0)) {
        $file = $input;
        // sử dụng str_replace để xóa các khoảng trắng, tránh lỗi chèn src có space trong thẻ img
        $file_name = str_replace(' ', '', $file['name']);
        $folder = 'assets/uploads/';
        $target_file = $folder . $file_name;
        move_uploaded_file($file['tmp_name'], $target_file);
    } else {
        $file_name = $input2 !== ''  ? $input2 : '';
    }
    return $file_name;
}
