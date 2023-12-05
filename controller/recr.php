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
$listApply = list_apply_cv();

switch ($act) {
    case 'addCV' :
        $idinfo = isset($_GET['idinfo']) ? $_GET['idinfo'] : '';
        $status = "Chấp nhận";
        update_add_Info($status , $idinfo);
        break;
    case 'apply_job':
        if (!isset($_SESSION['check_apply'])) {
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
                    applyJob($idRecr, $idcv, $status);
                    echo "<script>showSuccessNotification();</script>";
                    echo "<script> alert('Nộp hồ sơ ứng tuyển thành công'); </script>";
                    $_SESSION['check_apply'] = true;
                }else {
                    echo "<script> alert('Chỉ dược phép ứng tuyển 1 lần / 1 bài'); </script>";
                }
            }
        }
        // echo $idRecr;
        $val_recr = recr_select_by_id($idRecr);
        // var_dump($val_recr);
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
    case 'manage_recr':
        $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
        $corp = manageInfo($idcorp);
        extract($corp);
       
        $end = isset($_POST['end']) ? $_POST['end'] : '';
        $kym = isset($_POST['kym']) ? $_POST['kym'] : '';
        // $id = isset($_SESSION['username']) ? $_SESSION['username']['id'] : '';
        
        $list_recr = search_address_recr($kym = '', $end ='', $id);
        // if(empty($list_recr)){
        //     $list_recr = list_v_recr($id);
        // }
        // var_dump($id);
        $thongbao = "<script> location.href = 'index.php?act=manage_recr#v-pills-messages';</script>";
        echo $thongbao;



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
    case 'edit_recr':

        if (isset($_GET['idEdit'])) {
            $id = $_GET['idEdit'];
            $value_id = recr_select_by_id($id);
        }
        $idcorp = isset($_SESSION['username']) ? $_SESSION['username']['id'] : "";
        $corp = manageInfo($idcorp);
        extract($corp);
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
    default:
        // include "+567908234875.html";
        break;
}
