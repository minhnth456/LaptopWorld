<?php

    // load 1 san pham
    function load1_sp($iddm){
        $sql = "SELECT * FROM sanpham WHERE id_dm = $iddm";
        $load_onesp = pdo_query($sql);
        return $load_onesp;
    }

    // load all san pham
    function loadAll_sp(){
        $sql = "SELECT * FROM `sanpham` WHERE 1";
        $sql.= " order by id_pro DESC";
        return pdo_query($sql);
    }

    function themsp($tensp, $mota, $danhmuc, $cpu, $ram, $ssd, $cardVGA, $giasp, $soluong, $danhmuc_con, $fileName){
        // thêm sản phẩm
        $sql = "INSERT INTO sanpham(tensp, mota, id_dm) VALUES ('".$tensp."', '".$mota."', '".$danhmuc."');";
        // lấy id_sp của sản phẩm vừa thêm vào
        $sql.= "SET @last_id_sp = LAST_INSERT_ID();";
        // thêm chi tiết cấu hình
        $sql.= "INSERT INTO chitiet_sanpham(cpu, ram, ssd, giasp, soluong, cardVGA, id_pro, id_dmc) VALUES ('".$cpu."', '".$ram."', '".$ssd."','".$giasp."', '".$soluong."', '".$cardVGA."', @last_id_sp, '".$danhmuc_con."');"; 
        // thêm ảnh sản phẩm 
        $sql.= "INSERT INTO anh_sp(img, id_pro) VALUES ('".$fileName."', @last_id_sp);";
        pdo_execute($sql);
    }

    function themch($cpu, $ram, $ssd, $cardVGA, $giasp, $soluong, $id_pro){
        $sql= "INSERT INTO chitiet_sanpham(cpu, ram, ssd, giasp, soluong, cardVGA, id_pro) VALUES ('".$cpu."', '".$ram."', '".$ssd."','".$giasp."', '".$soluong."', '".$cardVGA."', '".$id_pro."');"; 
        pdo_execute($sql);
    }

    function xoasp($id){
        $sql = "DELETE FROM chitiet_sanpham WHERE id_chitiet IN (SELECT id_chitiet FROM sanpham WHERE id_pro = $id);";
        $sql.= "DELETE FROM anh_sp WHERE id IN (SELECT id FROM sanpham WHERE id_pro = $id);";
        $sql.= "DELETE FROM sanpham WHERE id_pro = $id;"; 
        pdo_execute($sql);
    }

    // load tất cả chi tiết sản phẩm theo id sản phẩm
    function loadAll_ctch($id_pro){
        $sql = "SELECT * FROM `chitiet_sanpham` WHERE id_pro = $id_pro";
        return pdo_query($sql);
    }

?>