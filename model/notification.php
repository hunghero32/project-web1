
<?php
$notification = [
    "signuped" => [
        "notice" => "Đăng kí thành công",
        "link" => "index.php?act=signin"
    ],
    "delete" => [
        "notice" => "Xóa thành công",
        "link" => ""
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
            unset($_SESSION[$key]);
            $alert = $notification[$key]['notice'];
            $link = $notification[$key]['link'] !== '' ? $notification[$key]['link'] : '';
            $reload = $link !== '' ? "window.location.href = '$link';" : '';

            echo "<script>";
            echo "alert('$alert');";
            echo "$reload";
            echo "</script>";
            break;
        }
    }
}
?>
