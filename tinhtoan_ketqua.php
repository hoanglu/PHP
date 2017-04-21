<?php
    include 'class.php';
    $a      = isset($_POST['txta'])?$_POST['txta']:null;
    $b      = isset($_POST['txtb'])?$_POST['txtb']:null;
    $toantu = isset($_POST['toantu'])?$_POST['toantu']:null;
    $tinh   = new TinhToan($a, $b, $toantu);
    $tinh->calculate();

    echo $tinh->display();