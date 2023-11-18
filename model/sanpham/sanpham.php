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
        pdo_execute($sql);
    }

    // Thêm cấu hình sản phẩm
    function themch($cpu, $ram, $ssd, $cardVGA, $giasp, $soluong, $id_pro, $id_dmc){
        $sql= "INSERT INTO chitiet_sanpham(cpu, ram, ssd, giasp, soluong, cardVGA, id_pro, id_dmc) VALUES ('".$cpu."', '".$ram."', '".$ssd."','".$giasp."', '".$soluong."', '".$cardVGA."', '".$id_pro."', '".$id_dmc."');"; 
        pdo_execute($sql);
    }

    // Xóa sản phẩm
    function xoasp($id){
        $sql = "DELETE FROM chitiet_sanpham WHERE id_pro IN (SELECT id_pro FROM sanpham WHERE id_pro = $id);";
        $sql.= "DELETE FROM anh_sp WHERE id_pro IN (SELECT id_pro FROM sanpham WHERE id_pro = $id);";
        $sql.= "DELETE FROM sanpham WHERE id_pro = $id;"; 
        pdo_execute($sql);
    }

    // load tất cả chi tiết sản phẩm theo id sản phẩm
    function loadAll_ctch($id_pro){
        $sql = "SELECT * FROM chitiet_sanpham as a INNER JOIN chitiet_danhmuc as b ON a.id_dmc = b.id WHERE id_pro = $id_pro";
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

    // Lấy tất cả 3 bảng sanpham anh_sp và chitiet_sanpham
    function loadAllSpIndex(){
        $sql = "SELECT * FROM sanpham as a INNER JOIN chitiet_sanpham as b ON a.id_pro = b.id_pro INNER JOIN anh_sp as c ON a.id_pro = c.id_pro GROUP BY b.id_chitiet";
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