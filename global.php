<?php
$img_path = 'assets/uploads/';

function hide($act)
{
    $hide = ['signup', 'signin', 'err'];
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
    $return = $input == '' ? 'assets/img/unknowCorp.png' : 'assets/uploads/' . $input;
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
