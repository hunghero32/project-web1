<?php
$perPage = 5;
$valu_racr = get_records($kym = '');
$total_recr = get_Total_Records();
extract($total_recr);
$total_data = $total;
$totalPages = ceil($total_data / $perPage);
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($currentPage - 1) * $perPage;
$data = range(1, $total_data);
$currentData = array_slice($valu_racr, $start, $perPage);

switch ($act) {
    case 'infoCorp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $corp = info_Corp($id);
            extract($corp);

            // Xử lí các thumbnail
            $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
            $gallery = gallery($arr);

            // Xử lí đoạn văn thành dòng
            $introPara = explode("\n", $introduce);
            $intro = paragToLines($introPara);

            $benePara = explode("\n", $benefits);
            $bene = paragToLines($benePara);

            // Lấy các bài tuyển dụng
            $idcorp = $corp['id'];
            $ownRecrs = loadRecr($idcorp);

            // Các nhà tuyển dụng cùng địa điểm
            $location = $corp['address'];
            $sameLocat = sameLocation($idcorp, $location);
        }

        include 'view/corp/infoCorp.php';
        break;

    case 'manageCorp':
        $idcorp = $_SESSION['username']['id'];
        $corp = manageInfo($idcorp);
        extract($corp);

        // Xử lí các thumbnail
        $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
        $gallery = gallery($arr);

        // Xử lí đoạn văn thành dòng
        $introPara = explode("\n", $introduce);
        $intro = paragToLines($introPara);

        $benePara = explode("\n", $benefits);
        $bene = paragToLines($benePara);

        include 'view/corp/manage.php';
        break;

    case 'updateInfoCorp';
        $idcorp = $_SESSION['username']['id'];
        $corp = manageInfo($idcorp);
        extract($corp);

        if (isset($_POST['updateInfoCorp'])) {
            $id = checkUpdate($_POST['id']);
            $nameCorp = checkUpdate($_POST['name']);
            $emailCorp = checkUpdate($_POST['email']);
            $phoneCorp = checkUpdate($_POST['phone']);
            $addressCorp = checkUpdate($_POST['address']);

            updateUser($id,$nameCorp,$emailCorp,$phoneCorp,$addressCorp);

            $active = checkUpdate($_POST['activeYear']);
            $introd = checkUpdate($_POST['introduce']);
            $workday = checkUpdate($_POST['workingday']);
            $sizeCorp = checkUpdate($_POST['size']);
            $linkCorp = checkUpdate($_POST['link']);
            $beneCorp = checkUpdate($_POST['benefits']);

            updateCorp($id,$active,$introd,$sizeCorp,$workday,$linkCorp,$beneCorp);

            for ($i = 1; $i <= 5; $i++) {
                if (isset($_FILES['thumbnail' . $i]) && ($_FILES['thumbnail' . $i]['size'] > 0)) {
                    $file = $_FILES['thumbnail' . $i];
                    // sử dụng str_replace để xóa các khoảng trắng, tránh lỗi chèn src có space trong thẻ img
                    $file_name = str_replace(' ', '', $file['name']);
                    $target_file = $img_path . $file_name;
                    move_uploaded_file($file['tmp_name'], $target_file);
                } else {
                    $file_name = isset($_POST['thumbnail' . $i]) ? $_POST['thumbnail' . $i] : '';
                }
                $file_name !== '' ? updateImage($id, 'thumbnail' . $i, $file_name) : '';
            }

            if (isset($_FILES['avatar']) && ($_FILES['avatar']['size'] > 0)) {
                $file = $_FILES['avatar'];
                // sử dụng str_replace để xóa các khoảng trắng, tránh lỗi chèn src có space trong thẻ img
                $file_avatar_name = str_replace(' ', '', $file['name']);
                $target_file = $img_path . $file_avatar_name;
                move_uploaded_file($file['tmp_name'], $target_file);
            } else {
                $file_avatar_name = isset($_POST['avatar']) ? $_POST['avatar'] : '';
            }
            $file_avatar_name !== '' ? updateImage($id, 'avatar', $file_avatar_name) : '';
            $file_avatar_name !== '' ? $_SESSION['username']['avtar'] = $file_avatar_name : '';

            $avatar !== '' && $_POST['avatar'] == '' ? removeImage($id,'avatar') : '';
            $thumbnail1 !== '' && $_POST['thumbnail1'] == '' ? removeImage($id,'thumbnail1') : '';
            $thumbnail2 !== '' && $_POST['thumbnail2'] == '' ? removeImage($id,'thumbnail2') : '';
            $thumbnail3 !== '' && $_POST['thumbnail3'] == '' ? removeImage($id,'thumbnail3') : '';
            $thumbnail4 !== '' && $_POST['thumbnail4'] == '' ? removeImage($id,'thumbnail4') : '';
            $thumbnail5 !== '' && $_POST['thumbnail5'] == '' ? removeImage($id,'thumbnail5') : '';
            $_SESSION['updated'] = 1;
        }
        include 'view/corp/manage.php';
        break;

    case 'listCorp':
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';

        $list_corp = list_Corp($name, $address);
        include 'view/corp/listCorp.php';
        break;

    default:
        # code...
        break;
}
