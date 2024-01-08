<?php

// SẢN PHẨM ĐÃ BÁN == ĐÃ GIAO 
function sanpham_sell($trangthai){
    $sql = "SELECT id_dmc, id_chitiet, tensp, giasp, giasp2,img_sp,chitiet_danhmuc.name, SUM(soluong) AS tong_soluong
    FROM chitiet_hoadon
    JOIN chitiet_danhmuc ON chitiet_danhmuc.id = chitiet_hoadon.id_dmc
    JOIN hoadon AS a ON chitiet_hoadon.id_hoadon = a.id_hoadon
    JOIN taikhoan AS b ON a.id_user = b.id_user
    WHERE a.trangthai = '$trangthai'
    GROUP BY id_dmc, id_chitiet, tensp, giasp, giasp2
    ORDER BY a.id_hoadon DESC
    LIMIT 0, 25;";
    return pdo_query($sql);
}

// Biểu đồ theo ngày
function bieudo(){
    $sql = "SELECT SUM(chitiet_hoadon.giasp2 * chitiet_hoadon.soluong) as tongdoanhthu,
    hoadon.date5,
    SUM(chitiet_hoadon.soluong) AS soluongmoi
    FROM hoadon
    JOIN chitiet_hoadon ON chitiet_hoadon.id_hoadon = hoadon.id_hoadon
    WHERE hoadon.trangthai = 4
    GROUP BY hoadon.date5;
    ";
    $bieudo = pdo_query($sql);
    return $bieudo;
}
// biểu đồ theo tuần
function bieudo_tuan($thang, $nam){
    $sql = "SELECT 
    hoadon.date5,
    WEEK(hoadon.date5) AS tuan,
    MONTH(hoadon.date5) as thang,
    YEAR(hoadon.date5) AS nam,
    SUM(chitiet_hoadon.soluong) AS tongsoluong,
    SUM(chitiet_hoadon.giasp2 * chitiet_hoadon.soluong) AS tongdoanhthu
    FROM 
        hoadon
    JOIN 
        chitiet_hoadon ON chitiet_hoadon.id_hoadon = hoadon.id_hoadon
    WHERE 
        hoadon.trangthai = 4";
    
    if(isset($thang) && $thang > 0){
        $sql.= " AND MONTH(hoadon.date5) = $thang";
    } else {
        $sql.= "";
    }

    if(isset($nam) && $nam > 0){
        $sql.= " AND YEAR(hoadon.date5) = $nam";
    } else {
        $sql.= "";
    }
    
    $sql.= "  
    GROUP BY 
        tuan
    ORDER BY 
        hoadon.date5 ASC;
    ";
    $bieudo = pdo_query($sql);
    return $bieudo;
}
//biểu đồ tháng
function bieudo_thang($nam){
    $sql = "SELECT 
    hoadon.date5,
    MONTH(hoadon.date5) AS thang,
    YEAR(hoadon.date5) AS nam,
    SUM(chitiet_hoadon.soluong) AS tongsoluong,
    SUM(chitiet_hoadon.giasp2 * chitiet_hoadon.soluong) AS tongdoanhthu
    FROM 
        hoadon
    JOIN 
        chitiet_hoadon ON chitiet_hoadon.id_hoadon = hoadon.id_hoadon
    WHERE 
        hoadon.trangthai = 4";

    if(isset($nam) && $nam > 0){
        $sql.= " AND YEAR(hoadon.date5) = $nam";
    }
    
    $sql.= " 
    GROUP BY 
        thang, nam
    ORDER BY 
        hoadon.date5 ASC;
    ";
    $bieudo = pdo_query($sql);
    return $bieudo;
}
//biểu đồ năm
function bieudo_nam(){
    $sql = "SELECT hoadon.date5,
    YEAR(hoadon.date5) AS nam,
    SUM(chitiet_hoadon.soluong) as tongsoluong_nam,
    SUM(chitiet_hoadon.giasp2 * chitiet_hoadon.soluong) AS tongdoanhthu_nam
    FROM 
        hoadon
    JOIN 
        chitiet_hoadon ON chitiet_hoadon.id_hoadon = hoadon.id_hoadon
    WHERE 
       hoadon.trangthai = 4
    GROUP BY 
        nam;
    ";
    $bieudo = pdo_query($sql);
    return $bieudo;
}
//biểu đồ số lượng sản phẩm
function bieudo_soluongsp(){
    $sql = "SELECT chitiet_danhmuc.id, danhmuc.name,
    COALESCE(SUM(chitiet_hoadon.soluong), 0) AS soluong
    FROM chitiet_hoadon 
    INNER JOIN hoadon 
    ON chitiet_hoadon.id_hoadon = hoadon.id_hoadon 
    INNER JOIN chitiet_danhmuc 
    ON chitiet_danhmuc.id = chitiet_hoadon.id_dmc
    INNER JOIN danhmuc
    ON danhmuc.id_dm = chitiet_danhmuc.id_dm
    WHERE hoadon.trangthai = 4
    GROUP BY danhmuc.name;";
    return pdo_query($sql);
}

// lấy danh mục con ra biểu đồ
function load_dm($id_dm){
    $sql = "SELECT * FROM chitiet_sanpham
    JOIN chitiet_danhmuc ON chitiet_sanpham.id_dmc = chitiet_danhmuc.id
    WHERE chitiet_sanpham.id_dmc = $id_dm LIMIT 1";
    return pdo_query($sql);
}

//hiển thị top 10 sản phẩm có lượt xem cao 
function select_top10(){
    $sql = "SELECT * FROM sanpham as a INNER JOIN chitiet_sanpham as b ON a.id_pro = b.id_pro INNER JOIN anh_sp as c ON a.id_pro = c.id_pro GROUP BY RAND(b.id_chitiet) ORDER BY luotxem DESC";
    return pdo_query($sql);
}

//chức năng tăng lượt xem sản phẩm
function top10_sp($id_chitiet,$id_pro){
    $sql = "UPDATE `chitiet_sanpham` SET `luotxem`= `luotxem` + 1 WHERE id_chitiet = $id_chitiet AND id_pro = $id_pro";
    pdo_execute($sql);
}

//Lấy tất cả các năm trong SQL
function get_all_years(){
    $sql = "SELECT YEAR(date5) AS nam FROM hoadon WHERE trangthai = 4 GROUP BY YEAR(date5);";
    return pdo_query($sql);
}

?>