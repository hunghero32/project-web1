<?php

switch ($act) {
    case 'listRecr':
        // $total_recr = 40;
        $perPage = 10;
        $totall_address = total_address_recr();
        $valu_racr = get_records();
        $total_recr = get_Total_Records();
        extract($total_recr);
        $total_data = $total;
        $totalPages = ceil($total_data / $perPage);
        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($currentPage - 1) * $perPage;
        $data = range(1, $total_data);
        $currentData = array_slice($valu_racr, $start, $perPage);
        include 'view/recr/listRecr.php';
        break;
    case 'info_recr' :
        if(isset($_GET['id'])){
            $id_recr = $_GET['id'];
            $val_recr = recr_select_by_id($id_recr);
            extract( $val_recr );
            $val_corp = recr_select_by_employers($idcorp);
        }
        include 'view/recr/infoRecr.php';
        break;
    default:
        // include "+567908234875.html";
        break;
}
