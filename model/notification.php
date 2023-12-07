
<?php
$notification = [
    "withdrawCv" => [
        "notice" => "Đã rút hồ sơ ứng tuyển",
        "link" => "index.php?act=info_recr&id="
    ],
    "check_apply" => [
        "notice" => "Nộp hồ sơ ứng tuyển thành công",
        "link" => "index.php?act=info_recr&id="
    ],
    "exist_apply" => [
        "notice" => "Chỉ dược phép ứng tuyển 1 lần / 1 bài",
        "link" => "index.php?act=info_recr&id="
    ],
    "signuped" => [
        "notice" => "Đăng kí thành công",
        "link" => "index.php?act=signin"
    ],
    "updatedCorp" => [
        "notice" => "Cập nhật thành công !",
        "link" => "index.php?act=updateInfoCorp"
    ],
    "updatedCv" => [
        "notice" => "Cập nhật thành công !",
        "link" => "index.php?act=updateCv"
    ],
];

function notification($notification)
{
    foreach (array_keys($notification) as $key) {
        if (isset($_SESSION[$key])) {
            $alert = $notification[$key]['notice'];
            $link = $notification[$key]['link'] !== '' ? $notification[$key]['link'] : '';

            $reload = '';

            if (is_numeric($_SESSION[$key])) {
                $reload = "window.location.href = '$link$_SESSION[$key]'";
            } else {
                $reload = $link !== '' ? "window.location.href = '$link'" : '';
            }

            unset($_SESSION[$key]);

            echo "<script>";
            echo "alert('$alert');";
            echo "$reload";
            echo "</script>";
            break;
        }
    }
}
?>
