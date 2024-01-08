<?php

//bộ lọc danh mục
function boloc_chitiet_danhmuc($brand_con, $MIN, $MAX, $cpu, $card, $ram, $ssd, $keyword){
    $sql = "SELECT
    sanpham.tensp,
    danhmuc.id_dm, 
    danhmuc.name, 
    chitiet_sanpham.id_chitiet, 
    chitiet_sanpham.cpu, 
    chitiet_sanpham.ram, 
    chitiet_sanpham.ssd, 
    chitiet_sanpham.giasp, 
    chitiet_sanpham.giasp2, 
    chitiet_sanpham.cardVGA, 
    chitiet_sanpham.luotxem, 
    chitiet_sanpham.id_pro, 
    chitiet_sanpham.id_dmc, 
    COUNT(chitiet_sanpham.id_chitiet) as soluong 
    FROM danhmuc INNER JOIN chitiet_danhmuc ON danhmuc.id_dm = chitiet_danhmuc.id_dm 
    INNER JOIN chitiet_sanpham ON chitiet_sanpham.id_dmc = chitiet_danhmuc.id
    INNER JOIN sanpham ON sanpham.id_pro = chitiet_sanpham.id_pro";
    if($brand_con != "" || $MIN != "" || $MAX != "" || $cpu != "" || $card != "" || $ram != "" || $ssd != "" || $keyword != ""){
        $sql.=" WHERE chitiet_sanpham.id_chitiet > 0";
    }

    if($brand_con!= ""){
        $sql.=" AND chitiet_sanpham.id_dmc = $brand_con";
    }
    if($MIN != ""){
        $sql.=" AND chitiet_sanpham.giasp2 > $MIN";
    }
    if($MAX != ""){
        $sql.=" AND chitiet_sanpham.giasp2 < $MAX";
    }
    if($cpu != ""){
        $sql.=" AND chitiet_sanpham.cpu LIKE '%$cpu%'";
    }
    if($card != ""){
        $sql.=" AND chitiet_sanpham.cardVGA LIKE '%$card%'";
    }
    if($ram != ""){
        $sql.=" AND chitiet_sanpham.ram LIKE '%$ram%'";
    }
    if($ssd != ""){
        $sql.=" AND chitiet_sanpham.ssd LIKE '%$ssd%'";
    }
    if($keyword != ""){
        if($keyword == "'"){
            $sql.=" AND sanpham.tensp LIKE '%`%'";
        } else {
            $sql.=" AND sanpham.tensp LIKE '%$keyword%'";
        }
    }
    $sql.=" GROUP BY danhmuc.id_dm;
    ";
    return pdo_query($sql);
}

//bộ lọc giá sản phẩm
function boloc_giasp($brand, $brand_con, $cpu, $card, $ram, $ssd, $keyword){
    $sql = "SELECT 
    sanpham.tensp,
    danhmuc.id_dm, 
    danhmuc.name, 
    chitiet_sanpham.id_chitiet, 
    chitiet_sanpham.cpu, 
    chitiet_sanpham.ram, 
    chitiet_sanpham.ssd, 
    chitiet_sanpham.giasp, 
    chitiet_sanpham.giasp2, 
    chitiet_sanpham.cardVGA, 
    chitiet_sanpham.luotxem, 
    chitiet_sanpham.id_pro, 
    chitiet_sanpham.id_dmc, 
    SUM(CASE WHEN chitiet_sanpham.giasp2 > 0 AND chitiet_sanpham.giasp2 <= 10000000 THEN 1 ELSE 0 END) as gia0510, 
    SUM(CASE WHEN chitiet_sanpham.giasp2 >= 10000000 AND chitiet_sanpham.giasp2 <= 20000000 THEN 1 ELSE 0 END) as gia1020, 
    SUM(CASE WHEN chitiet_sanpham.giasp2 >= 20000000 AND chitiet_sanpham.giasp2 <= 30000000 THEN 1 ELSE 0 END) as gia2030, 
    SUM(CASE WHEN chitiet_sanpham.giasp2 > 30000000 THEN 1 ELSE 0 END) as gia30 
    FROM danhmuc INNER JOIN chitiet_danhmuc ON danhmuc.id_dm = chitiet_danhmuc.id_dm 
    INNER JOIN chitiet_sanpham ON chitiet_sanpham.id_dmc = chitiet_danhmuc.id
    INNER JOIN sanpham ON sanpham.id_pro = chitiet_sanpham.id_pro";
    if($brand != "" || $brand_con != "" || $cpu != "" || $card != "" || $ram != "" || $ssd != "" || $keyword != ""){
        $sql.=" WHERE chitiet_sanpham.id_chitiet > 0";
    }

    if($brand != ""){
        $sql.=" AND danhmuc.name LIKE '%$brand%'";
    }
    if($brand_con!= ""){
        $sql.=" AND chitiet_sanpham.id_dmc = $brand_con";
    }
    if($cpu != ""){
        $sql.=" AND chitiet_sanpham.cpu LIKE '%$cpu%'";
    }
    if($card != ""){
        $sql.=" AND chitiet_sanpham.cardVGA LIKE '%$card%'";
    }
    if($ram != ""){
        $sql.=" AND chitiet_sanpham.ram LIKE '%$ram%'";
    }
    if($ssd != ""){
        $sql.=" AND chitiet_sanpham.ssd LIKE '%$ssd%'";
    }
    if($keyword != ""){
        if($keyword == "'"){
            $sql.=" AND sanpham.tensp LIKE '%`%'";
        } else {
            $sql.=" AND sanpham.tensp LIKE '%$keyword%'";
        }
    }

    return pdo_query($sql);
}

//bộ lọc CPU sản phẩm
function boloc_cpu($brand, $brand_con, $MIN, $MAX, $card, $ram, $ssd, $keyword){
    $sql = "SELECT 
    sanpham.tensp,
    danhmuc.id_dm, 
    danhmuc.name, 
    chitiet_sanpham.id_chitiet, 
    chitiet_sanpham.cpu, 
    chitiet_sanpham.ram, 
    chitiet_sanpham.ssd, 
    chitiet_sanpham.giasp, 
    chitiet_sanpham.giasp2, 
    chitiet_sanpham.cardVGA, 
    chitiet_sanpham.luotxem, 
    chitiet_sanpham.id_pro, 
    chitiet_sanpham.id_dmc, 
    SUM(CASE WHEN chitiet_sanpham.cpu LIKE '%Core i3%' THEN 1 ELSE 0 END) as corei3, 
    SUM(CASE WHEN chitiet_sanpham.cpu LIKE '%Core i5%' THEN 1 ELSE 0 END) as corei5, 
    SUM(CASE WHEN chitiet_sanpham.cpu LIKE '%Core i7%' THEN 1 ELSE 0 END) as corei7, 
    SUM(CASE WHEN chitiet_sanpham.cpu LIKE '%Core i9%' THEN 1 ELSE 0 END) as corei9, 
    SUM(CASE WHEN chitiet_sanpham.cpu LIKE '%Ryzen 5%' THEN 1 ELSE 0 END) as ryzen5,
    SUM(CASE WHEN chitiet_sanpham.cpu LIKE '%Ryzen 7%' THEN 1 ELSE 0 END) as ryzen7,
    SUM(CASE WHEN chitiet_sanpham.cpu LIKE '%Ryzen 9%' THEN 1 ELSE 0 END) as ryzen9,
    SUBSTRING_INDEX(chitiet_sanpham.cpu, ' ', 2) AS tencpu
    FROM danhmuc INNER JOIN chitiet_danhmuc ON danhmuc.id_dm = chitiet_danhmuc.id_dm 
    INNER JOIN chitiet_sanpham ON chitiet_sanpham.id_dmc = chitiet_danhmuc.id
    INNER JOIN sanpham ON sanpham.id_pro = chitiet_sanpham.id_pro";
    if($brand != "" || $brand_con != "" || $MIN != "" || $MAX != "" || $card != "" || $ram != "" || $ssd != "" || $keyword != ""){
        $sql.=" WHERE chitiet_sanpham.id_chitiet > 0";
    }

    if($brand != ""){
        $sql.=" AND danhmuc.name LIKE '%$brand%'";
    }
    if($brand_con!= ""){
        $sql.=" AND chitiet_sanpham.id_dmc = $brand_con";
    }
    if($MIN != ""){
        $sql.=" AND chitiet_sanpham.giasp2 > $MIN";
    }
    if($MAX != ""){
        $sql.=" AND chitiet_sanpham.giasp2 < $MAX";
    }
    if($card != ""){
        $sql.=" AND chitiet_sanpham.cardVGA LIKE '%$card%'";
    }
    if($ram != ""){
        $sql.=" AND chitiet_sanpham.ram LIKE '%$ram%'";
    }
    if($ssd != ""){
        $sql.=" AND chitiet_sanpham.ssd LIKE '%$ssd%'";
    }
    if($keyword != ""){
        if($keyword == "'"){
            $sql.=" AND sanpham.tensp LIKE '%`%'";
        } else {
            $sql.=" AND sanpham.tensp LIKE '%$keyword%'";
        }
    }

    return pdo_query($sql);
}

//bộ lọc Card VGA sản phẩm 
function boloc_cardVGA($brand, $brand_con, $MIN, $MAX, $cpu, $ram, $ssd, $keyword){
    $sql = "SELECT 
    sanpham.tensp,
    danhmuc.id_dm, 
    danhmuc.name, 
    chitiet_sanpham.id_chitiet, 
    chitiet_sanpham.cpu, 
    chitiet_sanpham.ram, 
    chitiet_sanpham.ssd, 
    chitiet_sanpham.giasp, 
    chitiet_sanpham.giasp2, 
    chitiet_sanpham.cardVGA, 
    chitiet_sanpham.luotxem, 
    chitiet_sanpham.id_pro, 
    chitiet_sanpham.id_dmc,
    COUNT(chitiet_sanpham.cardVGA) as soluongcard
    FROM danhmuc INNER JOIN chitiet_danhmuc ON danhmuc.id_dm = chitiet_danhmuc.id_dm 
    INNER JOIN chitiet_sanpham ON chitiet_sanpham.id_dmc = chitiet_danhmuc.id
    INNER JOIN sanpham ON sanpham.id_pro = chitiet_sanpham.id_pro";
    if($brand != "" || $brand_con != "" || $MIN != "" || $MAX != "" || $cpu != "" || $ram != "" || $ssd != "" || $keyword != ""){
        $sql.=" WHERE chitiet_sanpham.id_chitiet > 0";
    }

    if($brand != ""){
        $sql.=" AND danhmuc.name LIKE '%$brand%'";
    }
    if($brand_con!= ""){
        $sql.=" AND chitiet_sanpham.id_dmc = $brand_con";
    }
    if($MIN != ""){
        $sql.=" AND chitiet_sanpham.giasp2 > $MIN";
    }
    if($MAX != ""){
        $sql.=" AND chitiet_sanpham.giasp2 < $MAX";
    }    
    if($cpu != ""){
        $sql.=" AND chitiet_sanpham.cpu LIKE '%$cpu%'";
    }
    if($ram != ""){
        $sql.=" AND chitiet_sanpham.ram LIKE '%$ram%'";
    }
    if($ssd != ""){
        $sql.=" AND chitiet_sanpham.ssd LIKE '%$ssd%'";
    }
    if($keyword != ""){
        if($keyword == "'"){
            $sql.=" AND sanpham.tensp LIKE '%`%'";
        } else {
            $sql.=" AND sanpham.tensp LIKE '%$keyword%'";
        }
    }

    $sql.= " GROUP BY (chitiet_sanpham.cardVGA)";

    return pdo_query($sql);
}

//bộ lọc Ram sản phẩm 
function boloc_ram($brand, $brand_con, $MIN, $MAX, $cpu, $card, $ssd, $keyword) {
    $sql = "SELECT 
    sanpham.tensp,
    danhmuc.id_dm, 
    danhmuc.name, 
    chitiet_sanpham.id_chitiet, 
    chitiet_sanpham.cpu, 
    chitiet_sanpham.ram, 
    chitiet_sanpham.ssd, 
    chitiet_sanpham.giasp, 
    chitiet_sanpham.giasp2, 
    chitiet_sanpham.cardVGA, 
    chitiet_sanpham.luotxem, 
    chitiet_sanpham.id_pro, 
    chitiet_sanpham.id_dmc,
    COUNT(chitiet_sanpham.ram) as soluongram
    FROM danhmuc INNER JOIN chitiet_danhmuc ON danhmuc.id_dm = chitiet_danhmuc.id_dm 
    INNER JOIN chitiet_sanpham ON chitiet_sanpham.id_dmc = chitiet_danhmuc.id
    INNER JOIN sanpham ON sanpham.id_pro = chitiet_sanpham.id_pro";
    if($brand != "" || $brand_con != "" || $MIN != "" || $MAX != "" || $cpu != "" || $card != "" || $ssd != "" || $keyword != ""){
        $sql.=" WHERE chitiet_sanpham.id_chitiet > 0";
    }

    if($brand != ""){
        $sql.=" AND danhmuc.name LIKE '%$brand%'";
    }
    if($brand_con!= ""){
        $sql.=" AND chitiet_sanpham.id_dmc = $brand_con";
    }
    if($MIN != ""){
        $sql.=" AND chitiet_sanpham.giasp2 > $MIN";
    }
    if($MAX != ""){
        $sql.=" AND chitiet_sanpham.giasp2 < $MAX";
    }    
    if($cpu != ""){
        $sql.=" AND chitiet_sanpham.cpu LIKE '%$cpu%'";
    }
    if($card != ""){
        $sql.=" AND chitiet_sanpham.cardVGA LIKE '%$card%'";
    }
    if($ssd != ""){
        $sql.=" AND chitiet_sanpham.ssd LIKE '%$ssd%'";
    }
    if($keyword != ""){
        if($keyword == "'"){
            $sql.=" AND sanpham.tensp LIKE '%`%'";
        } else {
            $sql.=" AND sanpham.tensp LIKE '%$keyword%'";
        }
    }

    $sql.= " GROUP BY (chitiet_sanpham.ram)";

    return pdo_query($sql);
}

//bộ lọc SSD sản phẩm 
function boloc_ssd($brand, $brand_con, $MIN, $MAX, $cpu, $card, $ram, $keyword){
    $sql = "SELECT 
    sanpham.tensp,
    danhmuc.id_dm, 
    danhmuc.name, 
    chitiet_sanpham.id_chitiet, 
    chitiet_sanpham.cpu, 
    chitiet_sanpham.ram, 
    chitiet_sanpham.ssd, 
    chitiet_sanpham.giasp, 
    chitiet_sanpham.giasp2, 
    chitiet_sanpham.cardVGA, 
    chitiet_sanpham.luotxem, 
    chitiet_sanpham.id_pro, 
    chitiet_sanpham.id_dmc,
    COUNT(chitiet_sanpham.ssd) as soluongssd
    FROM danhmuc INNER JOIN chitiet_danhmuc ON danhmuc.id_dm = chitiet_danhmuc.id_dm 
    INNER JOIN chitiet_sanpham ON chitiet_sanpham.id_dmc = chitiet_danhmuc.id
    INNER JOIN sanpham ON sanpham.id_pro = chitiet_sanpham.id_pro";
    if($brand != "" || $brand_con != "" || $MIN != "" || $MAX != "" || $cpu != "" || $card != "" || $ram != "" || $keyword != ""){
        $sql.=" WHERE chitiet_sanpham.id_chitiet > 0";
    }

    if($brand != ""){
        $sql.=" AND danhmuc.name LIKE '%$brand%'";
    }
    if($brand_con!= ""){
        $sql.=" AND chitiet_sanpham.id_dmc = $brand_con";
    }
    if($MIN != ""){
        $sql.=" AND chitiet_sanpham.giasp2 > $MIN";
    }
    if($MAX != ""){
        $sql.=" AND chitiet_sanpham.giasp2 < $MAX";
    }    
    if($cpu != ""){
        $sql.=" AND chitiet_sanpham.cpu LIKE '%$cpu%'";
    }
    if($card != ""){
        $sql.=" AND chitiet_sanpham.cardVGA LIKE '%$card%'";
    }
    if($ram != ""){
        $sql.=" AND chitiet_sanpham.ram LIKE '%$ram%'";
    }
    if($keyword != ""){
        if($keyword == "'"){
            $sql.=" AND sanpham.tensp LIKE '%`%'";
        } else {
            $sql.=" AND sanpham.tensp LIKE '%$keyword%'";
        }
    }

    $sql.= " GROUP BY (chitiet_sanpham.ssd)";

    return pdo_query($sql);
}

?>