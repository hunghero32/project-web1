<?php

$perPage = 5;
$totall_address = total_address_recr();
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
    case 'listRecr':
        // $total_recr = 40;
        if (isset($_POST['search_recr'])) {
            $kym = $_POST['key'];
        } else {
            $kym = "";
        }
        $perPage = 5;
        $total_type = total_type_recr();

        $valu_racr = get_records($kym);

        include 'view/recr/listRecr.php';
        break;
    case 'info_recr':
        if (isset($_GET['id'])) {
            $id_recr = $_GET['id'];
            $val_recr = recr_select_by_id($id_recr);
            extract($val_recr);
            $val_c = recr_select_by_employers($idcorp);
        }
        include 'view/recr/infoRecr.php';
        break;
    
    case 'post_recr':
        if (isset($_SESSION['username'])) {
            // echo "hihi";
            extract($_SESSION['username']);
            $val_corp = info_Corp($id);
            $idcorp =  $val_corp['id'];

            if (isset($_POST['add_recr'])) {
                $job = $_POST['job'];
                // echo $job;
                //$image = $_FILES['img'];
                // $img = $image['name'];
                // $target_file = 'assets/img/' . $img;

                // move_uploaded_file($image['tmp_name'], $target_file);

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
                    $end,
                    $description,
                    $request
                );
                echo "<script> alert('Bạn đã thêm thành công !') </script>";
                // header("location : index.php?act=post_recr");
            }
        }
        // include 'view/recr/addRecr.php';
        include 'view/recr/manage_recr.php';
        break;
    case 'manage_recr':

        include 'view/recr/manage_recr.php';
        break;
    case 'edit_recr':
       
        include 'view/recr/manage_recr.php';
        break;
    case 'up_recr': 
        if (isset($_GET['idEdit'])) {
            $id = $_GET['idEdit'];
            $value_id = recr_select_by_id($id);
            extract($value_id);
       
        if (isset($_POST['submit'])) {
            $job = $_POST['job'];
            $idcorp = $_POST['idcorp'];
            $id = $_POST['id'];
            // $img = $_POST['img'];
            // $image = $_FILES['img'];
            // if($image['size'] >0){
            //     $img = $image['name'];
            // }
            // $target_file = 'assets/img/' . $img;
            // move_uploaded_file($image['tmp_name'], $target_file);
            $request = $_POST['request'];
            $type = $_POST['type'];
            $progLang = $_POST['progLang'];
            $salary = $_POST['salary'];
            $exp = $_POST['exp'];
            $level = $_POST['level'];
            $request = $_POST['request'];
            $description = $_POST['description'];
            $end = $_POST['end'];

            recr_update($id,$idcorp,$job,$exp,$level,$salary,$progLang,
            $type,$description,$end,$request
            );
            // include "view/recr/manage_recr.php";
            // include 'view/recr/editRecr.php';
            echo "<script> alert('Bạn đã sửa thành công !') </script>";
        } }
        $perPage = 10;

        $valu_racr = get_records($kym = '');
        $total_recr = get_Total_Records();

        include 'view/recr/manage_recr.php';
        break;

    case 'delete_recr':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            recr_delete($id);
        }
        $perPage = 10;

        $valu_racr = get_records($kym = '');
        $total_recr = get_Total_Records();

        include 'view/recr/manage_recr.php';
        break;
    default:
        // include "+567908234875.html";
        break;
}
