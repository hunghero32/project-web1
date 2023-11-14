<?php
    include 'controller/c_home.php';
    include 'controller/corp/c_corp.php';

    $c_home = new C_home();
    $c_corp = new C_corp();

    if (isset($_GET['corp'])) {
        $idCorp = $_GET['corp'];
        $c_corp->info($idCorp);
        return;
    }else {
        $c_home->home();
    }

?>