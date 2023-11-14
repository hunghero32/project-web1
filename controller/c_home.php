<?php
session_start();
include('model/corp/m_corp.php');
class C_home {
    function home() {
        $m_corp = new M_corp();
        $listCorp = $m_corp->get_all_Corp('','','','');

        $title = 'Trang chủ';
        $view = 'view/components/home.php';
        include("view/index.php");
    }
}