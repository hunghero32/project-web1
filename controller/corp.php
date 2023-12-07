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
$dateNow = date("Y-m-d");
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
        
        // var_dump($$corp);
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
        $listApply = list_apply_cv($id ,$kym ,$status);
        $end = isset($_POST['end']) ? $_POST['end'] : '';
        $key = isset($_POST['kym']) ? $_POST['kym'] : '';

        $list_value_recr = search_address_recr($key = '', $end = '', $idcorp);
        if (isset($_GET['idrec'])) {
            $idrec = isset($_GET['idrec']) ? $_GET['idrec'] : '';
            $valu_r_cv = recr_count_cv( $idrec);
        }
        // $count_cv = Count_info_CV($corp['idrecr']);

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

    case 'updateInfoCorp':
        $idcorp = $_SESSION['username']['id'];
        $corp = manageInfo($idcorp);
        extract($corp);
        // var_dump($corp);
        $end = isset($_POST['end']) ? $_POST['end'] : '';
        $key = isset($_POST['kym']) ? $_POST['kym'] : '';

        $list_value_recr = search_address_recr($key = '', $end = '', $idcorp);
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
        $listApply = list_apply_cv($id ,$kym ,$status);
        // Xử lí các thumbnail
        $arr = array($thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5);
        $gallery = gallery($arr);

        // Xử lí đoạn văn thành dòng
        $introPara = explode("\n", $introduce);
        $intro = paragToLines($introPara);

        $benePara = explode("\n", $benefits);
        $bene = paragToLines($benePara);

        if (isset($_POST['updateInfoCorp'])) {
            $same = '';
            $overSizeAvatar = 0;
            $overSizeThumb = 0;

            $id = checkUpdate($_POST['id']);
            $nameCorp = checkUpdate($_POST['name']);
            $emailCorp = checkUpdate($_POST['email']);
            $phoneCorp = checkUpdate($_POST['phone']);
            $addressCorp = checkUpdate($_POST['address']);

            $active = checkUpdate($_POST['activeYear']);
            $introd = checkUpdate($_POST['introduce']);
            $workday = checkUpdate($_POST['workingday']);
            $sizeCorp = checkUpdate($_POST['size']);
            $linkCorp = checkUpdate($_POST['link']);
            $beneCorp = checkUpdate($_POST['benefits']);

            $updateExist = updateExistAccount($iduser);
            foreach ($updateExist as $key) {
                $phoneCorp === $key['phone'] || $emailCorp === $key['email'] ? $same = '[ Sdt hoặc email đã tồn tại ! ]' : '';
                $nameCorp === $key['name'] ? $same = '[ Tên nhà tuyển dụng đã tòn tại ! ]' : '';
            }

            if ($same == '') {
                if (isset($_SESSION['same'])) { 
                    unset($_SESSION['same']);
                }
                $arrThumb = ['', $thumbnail1, $thumbnail2, $thumbnail3, $thumbnail4, $thumbnail5];

                for ($i = 1; $i <= 5; $i++) {
                    if (isset($_FILES['thumb' . $i]) && ($_FILES['thumb' . $i]['size'] <= 3000000)) {
                        $file = $_FILES['thumb' . $i];
                        // sử dụng str_replace để xóa các khoảng trắng, tránh lỗi chèn src có space trong thẻ img
                        $file_name = str_replace(' ', '', $file['name']);
                        $target_file = $img_path . $file_name;
                        move_uploaded_file($file['tmp_name'], $target_file);
                    } else {
                        $overSizeThumb = 1;
                        $file_name = isset($_POST['thumb' . $i]) && $arrThumb[$i] !== '' ? $_POST['thumb' . $i] : '';
                    }
                    $file_name !== '' ? updateImage($id, 'thumbnail' . $i, $file_name) : '';
                }

                if (isset($_FILES['avatar']) && ($_FILES['avatar']['size'] <= 1000000)) {
                    $file = $_FILES['avatar'];
                    // sử dụng str_replace để xóa các khoảng trắng, tránh lỗi chèn src có space trong thẻ img
                    $file_avatar_name = str_replace(' ', '', $file['name']);
                    $target_file = $img_path . $file_avatar_name;
                    move_uploaded_file($file['tmp_name'], $target_file);
                } else {
                    $overSizeAvatar = 1;
                    $file_avatar_name = isset($_POST['avatar']) && $avatar !== '' ? $_POST['avatar'] : '';
                }

                $file_avatar_name !== '' ? updateImage($id, 'avatar', $file_avatar_name) : '';
                $file_avatar_name !== '' ? $_SESSION['username']['avatar'] = $file_avatar_name : '';

                $avatar !== '' && $_POST['avatar'] == '' ? removeImage($id, 'avatar') : '';
                $avatar !== '' && $_POST['avatar'] == '' ? $_SESSION['username']['avatar'] = '' : '';
                $thumbnail1 !== '' && $_POST['thumb1'] == '' ? removeImage($id, 'thumbnail1') : '';
                $thumbnail2 !== '' && $_POST['thumb2'] == '' ? removeImage($id, 'thumbnail2') : '';
                $thumbnail3 !== '' && $_POST['thumb3'] == '' ? removeImage($id, 'thumbnail3') : '';
                $thumbnail4 !== '' && $_POST['thumb4'] == '' ? removeImage($id, 'thumbnail4') : '';
                $thumbnail5 !== '' && $_POST['thumb5'] == '' ? removeImage($id, 'thumbnail5') : '';

                updateUser($id, $nameCorp, $emailCorp, $phoneCorp, $addressCorp);
                updateCorp($id, $active, $introd, $sizeCorp, $workday, $linkCorp, $beneCorp);
            } else {
                echo "<script>alert('$same')</script>";
            }

            echo $overSizeAvatar == 1 ? "<script>alert('[ Ảnh đại diện vượt quá kích thước cho phép - 1 MB]')</script>" : '';
            echo $overSizeThumb == 1 ? "<script>alert('[ Ảnh giới thiệu vượt quá kích thước cho phép - 3 MB]')</script>" : '';
            $_SESSION['same'] = $overSizeAvatar > 0 ? '1' : '';
            $_SESSION['same'] = $overSizeThumb > 0 ? '1' : '';
            $_SESSION['same'] = $same !== '' ? '1' : '';
            $overSizeAvatar == 0 && $overSizeThumb == 0 && $same == '' ? $_SESSION['updatedCorp'] = 'true' : '';
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
