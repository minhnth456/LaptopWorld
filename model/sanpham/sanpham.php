<?php
    function load1_sp($iddm){
        $sql = "SELECT * FROM `sanpham` WHERE id_dm = $iddm";
        $load_onesp = pdo_query($sql);
        return $load_onesp;
    }
?>