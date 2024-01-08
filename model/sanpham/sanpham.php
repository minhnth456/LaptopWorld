<?php

    // load 1 san pham
    function load1_sp($iddm){
        $sql = "SELECT * FROM sanpham WHERE id_dm = $iddm";
        $load_onesp = pdo_query($sql);
        return $load_onesp;
    }

    // load all san pham (mới nhất hiện trên đầu)
    function loadAll_sp(){
        $sql = "SELECT * FROM sanpham INNER JOIN danhmuc ON sanpham.id_dm = danhmuc.id_dm WHERE 1";
        $sql.= " order by id_pro DESC";
        return pdo_query($sql);
    }

    //load dữ liệu 1 sản phẩm
    function loadOne_sp($id_pro){
        $sql = "SELECT * FROM sanpham WHERE id_pro = $id_pro";
        return pdo_query_one($sql);
    }

    // Chức năng thêm sản phẩm (load 1 ảnh chính)
    function themsp($tensp, $mota, $danhmuc, $cpu, $ram, $ssd, $cardVGA, $giasp, $soluong, $id_dmc, $fileName){
        // thêm sản phẩm
        $sql = "INSERT INTO sanpham(tensp, mota, id_dm) VALUES ('".$tensp."', '".$mota."', '".$danhmuc."');";
        // lấy id_sp của sản phẩm vừa thêm vào
        $sql.= "SET @last_id_sp = LAST_INSERT_ID();";
        // thêm chi tiết cấu hình
        $sql.= "INSERT INTO chitiet_sanpham(cpu, ram, ssd, giasp, soluong, cardVGA, id_pro, id_dmc) VALUES ('".$cpu."', '".$ram."', '".$ssd."','".$giasp."', '".$soluong."', '".$cardVGA."', @last_id_sp, '".$id_dmc."');"; 
        // thêm ảnh sản phẩm (thêm 1 ảnh)
        $sql.= "INSERT INTO anh_sp(img, id_pro) VALUES ('".$fileName."', @last_id_sp);";
        //thêm giá sp 2
        $sql.= "UPDATE chitiet_sanpham SET giasp2 = CAST(REPLACE(giasp, '.', '') AS DOUBLE (10, 2));";
        pdo_execute($sql);
    }

    // chức năng Thêm cấu hình sản phẩm
    function themch($cpu, $ram, $ssd, $cardVGA, $giasp, $soluong, $id_pro, $id_dmc){
        $sql= "INSERT INTO chitiet_sanpham(cpu, ram, ssd, giasp, soluong, cardVGA, id_pro, id_dmc) VALUES ('".$cpu."', '".$ram."', '".$ssd."','".$giasp."', '".$soluong."', '".$cardVGA."', '".$id_pro."', '".$id_dmc."');"; 
        $sql.= "UPDATE chitiet_sanpham SET giasp2 = CAST(REPLACE(giasp, '.', '') AS DOUBLE (10, 2));";
        pdo_execute($sql);
    }

    // chức năng Xóa sản phẩm
    function xoasp($id){
        //xóa sp trong giỏ hàng
        $sql = "DELETE FROM chitiet_giohang WHERE id_pro IN (SELECT id_pro FROM chitiet_giohang WHERE id_pro = $id);";
        //xóa tất cả cấu hình sp
        $sql.= "DELETE FROM chitiet_sanpham WHERE id_pro IN (SELECT id_pro FROM sanpham WHERE id_pro = $id);";
        //xóa tất cả ảnh sp
        $sql.= "DELETE FROM anh_sp WHERE id_pro IN (SELECT id_pro FROM sanpham WHERE id_pro = $id);";
        //xóa tất cả rep bình luận
        $sql.= "DELETE FROM rep_bl WHERE id_bl IN (SELECT id_bl FROM binhluan WHERE id_pro IN (SELECT id_pro FROM binhluan WHERE id_pro = $id));";
        //xóa tất cả bình luận
        $sql.= "DELETE FROM binhluan WHERE id_pro IN (SELECT id_pro FROM binhluan WHERE id_pro = $id);";
        //xóa sp
        $sql.= "DELETE FROM sanpham WHERE id_pro = $id;"; 
        pdo_execute($sql);
    }

    // chức năng xóa chi tiết sản phẩm
    function xoaspCT($id_chitiet){
        $sql = "DELETE FROM chitiet_sanpham WHERE id_chitiet = $id_chitiet";
        pdo_execute($sql);
    }

    // chức năng xóa ảnh sản phẩm
    function xoaAnhsp($id){
        $sql = "DELETE FROM anh_sp WHERE id = $id";
        pdo_execute($sql);
    }

    // load tất cả chi tiết sản phẩm theo id sản phẩm
    function loadAll_ctch($id_pro){
        $sql = "SELECT * FROM chitiet_sanpham as a INNER JOIN chitiet_danhmuc as b ON a.id_dmc = b.id WHERE id_pro = $id_pro ORDER BY a.id_chitiet DESC";
        return pdo_query($sql);
    }

    // load 1 chi tiết sản phẩm theo id chi tiet
    function loadOne_ctch($id_chitiet){
        $sql = "SELECT * FROM chitiet_sanpham as a INNER JOIN chitiet_danhmuc as b ON a.id_dmc = b.id WHERE id_chitiet = $id_chitiet";
        return pdo_query_one($sql);
    }

    // Lấy ảnh sản phẩm (ảnh chính)
    function anhsp($id_pro){
        $sql = "SELECT * FROM anh_sp WHERE id_pro = $id_pro ORDER BY id ASC";
        return pdo_query_one($sql);
    }
    // Lấy ảnh sản phẩm (ảnh chính) theo id_giohang
    function anhsp2($id_giohang){
        $sql = "SELECT * FROM anh_sp WHERE id_pro IN (SELECT id_pro FROM chitiet_giohang WHERE id_giohang = $id_giohang) ORDER BY id_pro ASC";
        return pdo_query_one($sql);
    }

    // Lấy tất cả ảnh sản phẩm
    function allAnhsp($id_pro){
        $sql = "SELECT * FROM anh_sp WHERE id_pro = $id_pro";
        return pdo_query($sql);
    }

    // chức năng thêm nhiều ảnh vào sản phẩm
    function themanhsp($fileName, $id_pro){
        $sql = "INSERT INTO anh_sp(img, id_pro) VALUES ('".$fileName."','".$id_pro."')";
        pdo_execute($sql);
    }

    // Chức năng sửa sản phẩm
    function suasp($id_pro, $tensp, $id_dm, $mota){
        $sql = "UPDATE sanpham SET tensp='".$tensp."',mota='".$mota."',id_dm='".$id_dm."' WHERE id_pro='".$id_pro."'";
        pdo_execute($sql);
    }

    // chức năng sửa cấu hình sản phẩm
    function suactch($id_chitiet, $cpu, $ram, $ssd, $giasp, $soluong, $cardVGA, $id_dmc){
        $sql = "UPDATE chitiet_sanpham SET cpu='".$cpu."',ram='".$ram."',ssd='".$ssd."',giasp='".$giasp."',soluong='".$soluong."',cardVGA='".$cardVGA."',id_dmc='".$id_dmc."' WHERE id_chitiet = '".$id_chitiet."'";
        pdo_execute($sql);
    }

    // chức năng sửa ảnh sản phẩm
    function suaanhsp($fileName, $id){
        $sql = "UPDATE anh_sp SET img='".$fileName."' WHERE id = $id";
        pdo_execute($sql);
    }

    // Lấy id_pro thông qua id ảnh
    function idpro($id){
        $sql = "SELECT id_pro FROM anh_sp WHERE id = $id LIMIT 1";
        return pdo_query_one($sql);
    }

    //Đếm số lượng sản phẩm
    function dem_so_luong_sp($brand, $brand_con, $MIN, $MAX, $cpu, $card, $ram, $ssd, $keyword, $sapxep){
        $sql = "SELECT * FROM sanpham  
        INNER JOIN chitiet_sanpham ON sanpham.id_pro = chitiet_sanpham.id_pro 
        INNER JOIN anh_sp ON sanpham.id_pro = anh_sp.id_pro 
        INNER JOIN danhmuc ON sanpham.id_dm = danhmuc.id_dm
        INNER JOIN chitiet_danhmuc ON danhmuc.id_dm = chitiet_danhmuc.id_dm";
        if($brand != "" || $brand_con != "" || $MIN != "" || $MAX != "" || $cpu != "" || $card != "" || $ram != "" || $ssd != "" || $keyword != ""){
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
        
        $sql.=" GROUP BY RAND(chitiet_sanpham.id_chitiet)";

        if($sapxep != ""){
            //sắp xếp theo mới nhất
            if($sapxep == 2){
                $sql.=" ORDER BY chitiet_sanpham.id_chitiet DESC";
            }
            //sắp xếp theo cũ nhất
            if($sapxep == 3){
                $sql.=" ORDER BY chitiet_sanpham.id_chitiet ASC";
            }
            //sắp xếp theo giá tăng dần
            if($sapxep == 4){
                $sql.=" ORDER BY chitiet_sanpham.giasp2 ASC";
            }
            //sắp xếp theo giá giảm dần
            if($sapxep == 5){
                $sql.=" ORDER BY chitiet_sanpham.giasp2 DESC";
            }
            //sắp xếp theo tên sản phẩm từ A -> Z
            if($sapxep == 6){
                $sql.=" ORDER BY sanpham.tensp ASC";
            }
            //sắp xếp theo TOP lượt xem 
            if($sapxep == 7){
                $sql.=" ORDER BY chitiet_sanpham.luotxem DESC";
            }
        }
        
        // SELECT * FROM sanpham as a INNER JOIN chitiet_sanpham as b ON a.id_pro = b.id_pro INNER JOIN anh_sp as c ON a.id_pro = c.id_pro GROUP BY a.id_pro
        return pdo_query($sql);
    }

    // Lấy tất cả thông tin bảng sanpham anh_sp và chitiet_sanpham, danh muc và chitiet_danhmuc
    function loadAllSpIndex($page, $brand, $brand_con, $MIN, $MAX, $cpu, $card, $ram, $ssd, $keyword, $sapxep){
        $sql = "SELECT * FROM sanpham  
        INNER JOIN chitiet_sanpham ON sanpham.id_pro = chitiet_sanpham.id_pro 
        INNER JOIN anh_sp ON sanpham.id_pro = anh_sp.id_pro 
        INNER JOIN danhmuc ON sanpham.id_dm = danhmuc.id_dm
        INNER JOIN chitiet_danhmuc ON danhmuc.id_dm = chitiet_danhmuc.id_dm";
        if($brand != "" || $brand_con != "" || $MIN != "" || $MAX != "" || $cpu != "" || $card != "" || $ram != "" || $ssd != "" || $keyword != ""){
            $sql.=" WHERE chitiet_sanpham.id_chitiet > 0";
        }

        if($brand != ""){
            $sql.=" AND danhmuc.name LIKE '%$brand%'";
        }
        if($brand_con != ""){
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
        
        $sql.=" GROUP BY RAND(chitiet_sanpham.id_chitiet)";

        if($sapxep != ""){
            //sắp xếp theo mới nhất
            if($sapxep == 2){
                $sql.=" ORDER BY chitiet_sanpham.id_chitiet DESC";
            }
            //sắp xếp theo cũ nhất
            if($sapxep == 3){
                $sql.=" ORDER BY chitiet_sanpham.id_chitiet ASC";
            }
            //sắp xếp theo giá tăng dần
            if($sapxep == 4){
                $sql.=" ORDER BY chitiet_sanpham.giasp2 ASC";
            }
            //sắp xếp theo giá giảm dần
            if($sapxep == 5){
                $sql.=" ORDER BY chitiet_sanpham.giasp2 DESC";
            }
            //sắp xếp theo tên sản phẩm từ A -> Z
            if($sapxep == 6){
                $sql.=" ORDER BY sanpham.tensp ASC";
            }
            //sắp xếp theo TOP lượt xem 
            if($sapxep == 7){
                $sql.=" ORDER BY chitiet_sanpham.luotxem DESC";
            }
        }

        if(isset($page) && ($page) > 0){
            $hien_thi = ($page - 1) * 24;
            $sql.= " LIMIT ".$hien_thi.",24";
        } else {
            $sql.= " LIMIT 0,24";
        }
        
        // SELECT * FROM sanpham as a INNER JOIN chitiet_sanpham as b ON a.id_pro = b.id_pro INNER JOIN anh_sp as c ON a.id_pro = c.id_pro GROUP BY a.id_pro
        return pdo_query($sql);
    }

    // lấy thông tin chi tiết cấu hình (chitietsanpham)
    function loadOneSpCt($id_chitiet){
        $sql = "SELECT * FROM sanpham as a INNER JOIN chitiet_sanpham as b ON a.id_pro = b.id_pro WHERE id_chitiet = $id_chitiet";
        return pdo_query_one($sql);
    }

    // lấy tất cả thông tin chi tiết cấu hình liên quan của sản phẩm (chitietsanpham)
    function loadAllSpCt($id_pro){
        $sql = "SELECT * FROM sanpham as a INNER JOIN chitiet_sanpham as b ON a.id_pro = b.id_pro WHERE a.id_pro = $id_pro GROUP BY b.id_chitiet;";
        return pdo_query($sql);
    }

    // lấy tất cả ảnh của sản phẩm
    function loadAllImgSp($id_pro){
        $sql = "SELECT * FROM anh_sp WHERE id_pro = $id_pro";
        return pdo_query($sql);
    }

    //lấy id_dmc qua id_chitiet
    function get_iddmc($id_chitiet){
        $sql = "SELECT id_dmc FROM chitiet_sanpham WHERE id_chitiet = $id_chitiet";
        return pdo_query($sql);
    }

    //Lấy id_pro qua id_chitiet
    function get_id_pro($id_chitiet){
        $sql = "SELECT * FROM chitiet_sanpham WHERE id_chitiet = $id_chitiet";
        return pdo_query($sql);
    }
    
    //Lấy tất cả sản phẩm tương đương
    function sanpham_tuongduong($id_dm){
        $sql = "SELECT sanpham.id_pro, sanpham.tensp, sanpham.id_dm, chitiet_sanpham.id_chitiet, chitiet_sanpham.id_dmc, chitiet_sanpham.giasp FROM sanpham INNER JOIN chitiet_sanpham ON sanpham.id_pro = chitiet_sanpham.id_pro WHERE sanpham.id_dm = $id_dm ORDER BY RAND(chitiet_sanpham.id_chitiet);";
        return pdo_query($sql);
    }

?>

<!-- <input type="file" name="anh[]" multiple> -->
<!-- $targetDir = "../img/sanpham/";
$allowdTypes = array("jpg","jpeg","png","gif");
foreach ($_FILES['hinh']['name'] as $key => $value) {
    $fileName = basename($_FILES['hinh']['name'][$key]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (in_array($fileType, $allowedTypes)) {
        // Lưu thông tin ảnh vào bảng anh_sp
        // $sql = "INSERT INTO anh_sp (id_sp, ten_anh) VALUES ('$id_sp', '$fileName')";
        // Thực hiện thêm ảnh vào bảng anh_sp

        // Di chuyển file ảnh vào thư mục lưu trữ
        move_uploaded_file($_FILES['hinh']['tmp_name'][$key], $targetFilePath);
    }
} -->