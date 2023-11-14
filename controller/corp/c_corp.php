<?php
include_once(__DIR__ . '/../../model/corp/m_corp.php');
class C_corp {
    function info($id) {
        $m_corp = new M_corp();
        $corp = $m_corp->get_one_Corp($id);

        $title = 'Thông tin nhà tuyển dụng';
        $view = 'view/corp/v_infoCorp.php';
        require("view/index.php");
    }
}