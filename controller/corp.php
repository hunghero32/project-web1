<?php

switch ($act) {
    case 'infoCorp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $corp = info_Corp($id);
            extract($corp);
            
            // Xử lí các thumbnail
            $arr = array($thumbnail1,$thumbnail2,$thumbnail3,$thumbnail4,$thumbnail5);
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
            $sameLocat = sameLocation($idcorp,$location);
        }

        include 'view/corp/infoCorp.php';
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
