<?php
$perPage = 5;

$valu_racr = get_records();
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
    case 'manage_recr':
        $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
        $corp = manageInfo($idcorp);
        extract($corp);
        $end = isset($_POST['end']) ? $_POST['end'] : '';
        $key = isset($_POST['kym']) ? $_POST['kym'] : '';
        $list_value_recr = search_address_recr($key = '', $end = '', $idcorp);

        // $count_cv = Count_info_CV($corp['idrecr']);
        $end = isset($_POST['end']) ? $_POST['end'] : '';
        $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
        $listApply = list_apply_cv($id,$kym ,$status);

        $thongbao = "<script> location.href = 'index.php?act=manage_recr#v-pills-messages';</script>";
        echo $thongbao;

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
        
    case 'infoCvOnRecr':
        $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
        $corp = manageInfo($idcorp);
        extract($corp);
        if (isset($_GET['idrec'])) {
            $idrec = isset($_GET['idrec']) ? $_GET['idrec'] : '';
        }
        $valu_r_cv = recr_count_cv($idrec);
        $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
        $listApply = list_apply_cv($id,$kym ,$status);
        $end = isset($_POST['end']) ? $_POST['end'] : '';
        $key = isset($_POST['kym']) ? $_POST['kym'] : '';
        $list_value_recr = search_address_recr($key, $end, $idcorp);
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

    case 'deleteCv':
        $idinfo = isset($_GET['idinfo']) ? $_GET['idinfo'] : '';
        $status = "Từ chối";
        update_add_Info($status, $idinfo);
        $thongbaoApply = "<script> alert('Bạn đã từ chối CV !');
        location.href = 'index.php?act=manage_recr#v-pills-apply'; </script>";
        echo  $thongbaoApply;

        include 'view/corp/manage.php';
        break;

    case 'reconsider':
        $idinfo = isset($_GET['idinfo']) ? $_GET['idinfo'] : '';
        $status = "Chờ xét duyệt";
        update_add_Info($status, $idinfo);
        $thongbaoApply = "<script>
        location.href = 'index.php?act=manage_recr#v-pills-apply'; </script>";

        echo  $thongbaoApply;

        include 'view/corp/manage.php';
        break;

    case 'addCV':
        $idinfo = isset($_GET['idinfo']) ? $_GET['idinfo'] : '';
        $status = "Đã xét duyệt";
        update_add_Info($status, $idinfo);
        if (isset($_GET['id'])) {
            $id_recr = $_GET['id'];
            $val_recr = recr_select_by_id($id_recr);
            // var_dump($val_recr);
            extract($val_recr);
            $val_c = recr_select_by_similar($job, $id_recr);

            $infoCv = infoCv(isset($_SESSION['username']['id']) ? $_SESSION['username']['id'] : '');
            include 'view/recr/infoRecr.php';
        }
        $thongbaoApply = "<script> alert('Bạn đã xét duyệt CV thánh công !');
        location.href = 'index.php?act=manage_recr#v-pills-apply'; </script>";
        echo  $thongbaoApply;

        include 'view/corp/manage.php';
        break;
    case 'apply_job':
        if (isset($_POST['applyjob'])) {
            $exist = '';
            $idRecr = isset($_POST['idRecr']) ? $_POST['idRecr'] : '';
            $idcv = isset($_POST['idCV']) ? $_POST['idCV'] : '';

            $existCv = existCvInRecr($idRecr);
            foreach ($existCv as $e) {
                $idcv == $e['idcv'] ? $exist = 'True' : '';
            }

            $status = "Chờ xét duyệt";

            if ($exist == '') {
                $file_name = '';
                if (isset($_FILES['attach'])) {
                    $file = $_FILES['attach'];
                    var_dump($file);
                    $file_name = $file['name'];
                    $target_file = $attach_path . $file_name;
                    echo $target_file;
                    // Xử lý file ở đây, ví dụ: lưu vào thư mục
                    move_uploaded_file($file['tmp_name'], $target_file);
                }

                applyJob($idRecr, $idcv, $status);
                uploadAttachFile($idRecr, $idcv, $file_name);

                $attachExist !== '' ? deleteFile($attach_path . $attachExist) : '';
                $_SESSION['check_apply'] = $idRecr;
            } else {
                $_SESSION['exist_apply'] = $idRecr;
            }
        }

        $val_recr = recr_select_by_id($idRecr);
        extract($val_recr);

        $val_c = recr_select_by_similar($job, $idRecr);
        include 'view/recr/infoRecr.php';
        break;

    case 'listRecr':
        $level = isset($_POST['level']) ? $_POST['level'] : '';
        $kym = isset($_POST['key']) ? $_POST['key'] : '';
        $typeRecr = isset($_POST['typeRecr']) ? $_POST['typeRecr'] : '';
        $major = isset($_POST['major']) ? $_POST['major'] : '';
        $exp = isset($_POST['exp']) ? $_POST['exp'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $salary = isset($_POST['salary']) ? $_POST['salary'] : '';
        $progLang = isset($_POST['progLang']) ? $_POST['progLang'] : '';
        $date = isset($_POST['date']) ? $_POST['date'] : '';
        $perPage = 5;
        $val_racr = recr_select_all($kym, $level, $typeRecr, $salary, $progLang, $address, $exp);

        include 'view/recr/listRecr.php';
        break;

        //info của phần công ty
    case 'infoRecr':
        if (isset($_GET['id'])) {
            $id_recr = $_GET['id'];
            $val_recr = recr_select_by_id($id_recr);
            extract($val_recr);
        }

        $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
        $corp = manageInfo($idcorp);
        extract($corp);
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
        $listApply = list_apply_cv($id,$kym ,$status);
        $end = isset($_POST['end']) ? $_POST['end'] : '';
        $key = isset($_POST['kym']) ? $_POST['kym'] : '';
        $list_value_recr = search_address_recr($key, $end, $idcorp);
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

        //info của phần ứng cử viên 
    case 'info_recr':
        if (isset($_GET['id'])) {
            $id_recr = $_GET['id'];
            $val_recr = recr_select_by_id($id_recr);
            // var_dump($val_recr);
            extract($val_recr);
            $val_c = recr_select_by_similar($job, $id_recr);

            $infoCv = infoCv(isset($_SESSION['username']['id']) ? $_SESSION['username']['id'] : '');
        }
        $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
        include 'view/recr/infoRecr.php';
        break;
    case 'post_recr':
        if (!isset($_SESSION['check'])) {
            if (isset($_SESSION['username'])) {
                // echo "hihi";
                extract($_SESSION['username']);
                $val_corp = info_Corp_recr($id);
                $idcorp =  $val_corp['id'];
                // var_dump( $idcorp);

                if (isset($_POST['add_recr'])) {
                    $job = $_POST['job'];
                    $request = $_POST['request'];
                    $type = $_POST['type'];
                    $progLang = $_POST['progLang'];
                    $salary = $_POST['salary'];
                    $exp = $_POST['exp'];
                    $level = $_POST['level'];
                    $request = $_POST['request'];
                    $description = $_POST['description'];
                    $end = $_POST['end'];
                    recr_add(
                        $idcorp,
                        $job,
                        $exp,
                        $level,
                        $salary,
                        $progLang,
                        $type,
                        $description,
                        $end,
                        $request
                    );
                    $thongbao = "<script> alert('Bạn đã thêm thành công !');
                        location.href = 'index.php?act=manage_recr#v-pills-messages'; </script>";
                    echo $thongbao;
                    $_SESSION['check'] = true;
                }
            }
        }

        $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
        $corp = manageInfo($idcorp);
        extract($corp);
        $end = isset($_POST['end']) ? $_POST['end'] : '';
        $key = isset($_POST['kym']) ? $_POST['kym'] : '';
        $list_value_recr = search_address_recr($key, $end, $idcorp);
        // $count_cv = Count_info_CV($corp['idrecr']);
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
        $listApply = list_apply_cv($id,$kym ,$status);

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

    case 'edit_recr':
        if (isset($_GET['idEdit'])) {
            $id = $_GET['idEdit'];
            $value_id = recr_select_by_id($id);
        }
        $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
        $corp = manageInfo($idcorp);
        extract($corp);
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
        $listApply = list_apply_cv($id,$kym ,$status);
        $end = isset($_POST['end']) ? $_POST['end'] : '';
        $key = isset($_POST['kym']) ? $_POST['kym'] : '';

        $list_value_recr = search_address_recr($key = '', $end = '', $idcorp);

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

    case 'up_recr':
        if (isset($_POST['submit'])) {
            $job = $_POST['job'];
            $idcorp = $_POST['idcorp'];
            $id = $_POST['id'];
            $request = $_POST['request'];
            $type = $_POST['type'];
            $progLang = $_POST['progLang'];
            $salary = $_POST['salary'];
            $exp = $_POST['exp'];
            $level = $_POST['level'];
            $request = $_POST['request'];
            $description = $_POST['description'];
            $end = $_POST['end'];

            recr_update(
                $id,
                $idcorp,
                $job,
                $exp,
                $level,
                $salary,
                $progLang,
                $type,
                $description,
                $end,
                $request
            );
            // include "view/corp/manage.php";
            // include 'view/recr/editRecr.php';
            $thongbao = "<script> alert('Bạn đã sửa thành công !');
            location.href = 'index.php?act=manage_recr#v-pills-messages'; </script>";
            echo $thongbao;
        }
        $perPage = 10;

        $valu_racr = get_records();
        $total_recr = get_Total_Records();

        include 'view/corp/manage.php';
        break;

    case 'delete_recr':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            recr_delete($id);
            $thongbao = "<script> alert('Bạn đã XÓA thành công !');
            location.href = 'index.php?act=manage_recr#v-pills-messages'; </script>";
            echo $thongbao;
        }

        $perPage = 10;


        $total_recr = get_Total_Records();
        $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
        $corp = manageInfo($idcorp);
        extract($corp);
        $end = isset($_POST['end']) ? $_POST['end'] : '';
        $key = isset($_POST['kym']) ? $_POST['kym'] : '';

        $list_value_recr = search_address_recr($key = '', $end = '', $idcorp);
        $status = isset($_POST['status']) ? $_POST['status'] : '';
        $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
        $listApply = list_apply_cv($id,$kym ,$status);

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
    default:
        // include "+567908234875.html";
        break;
}
