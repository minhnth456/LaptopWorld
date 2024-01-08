<?php

//check giỏ hàng
function check_giohang($id_user){
    $sql = "SELECT id_user FROM giohang WHERE id_user = $id_user";
    return pdo_query($sql);
}

//chức năng tạo giỏ hàng
function tao_giohang($id_user){
    $sql = "INSERT INTO giohang(id_user) VALUES ('".$id_user."')";
    pdo_execute($sql);
}

//lấy id giỏ hàng theo id_user
function id_giohang($id_user){
    $sql = "SELECT id_giohang FROM giohang WHERE id_user = $id_user";
    return pdo_query($sql);
}

//chức năng thêm sản phẩm vào giỏ hàng
function them_giohang($img_spct, $tensp, $giasp, $giasp2, $soluong, $total, $id_pro, $id_chitiet, $id_giohang){
    $sql = "INSERT INTO chitiet_giohang(img_spct, tensp, giasp, giasp2, soluong, id_pro, id_chitiet, id_giohang) VALUES ('".$img_spct."', '".$tensp."', '".$giasp."', '".$giasp2."', '".$soluong."', '".$id_pro."', '".$id_chitiet."', '".$id_giohang."');";
    $sql.= "UPDATE chitiet_giohang SET total = giasp2 * soluong;";
    $sql.= "UPDATE chitiet_giohang SET total_vn = REPLACE(FORMAT(total,0),',','.')";
    pdo_execute($sql);
}

//check sản phẩm trùng trong giỏ hàng
function check_sanpham($id_chitiet, $id_giohang){
    $sql = "SELECT id_chitiet FROM chitiet_giohang WHERE id_chitiet = $id_chitiet AND id_giohang = $id_giohang";
    return pdo_query($sql);
}

//chức năng tăng số lượng sản phẩm trong giỏ hàng nếu mua hoặc thêm sản phẩm trùng lặp
function them_soluong_sanpham($id_chitiet){
    $sql = "UPDATE chitiet_giohang SET soluong = soluong + 1 WHERE id_chitiet = $id_chitiet;";
    $sql.= "UPDATE chitiet_giohang SET total = giasp2 * soluong;";
    $sql.= "UPDATE chitiet_giohang SET total_vn = REPLACE(FORMAT(total,0),',','.')";
    pdo_execute($sql);
}

//lấy tổng tiền (total) của từng sản phẩm trong giỏ hàng
function allTotal($id_giohang){
    $sql = "SELECT * FROM chitiet_giohang WHERE id_giohang = $id_giohang";
    return pdo_query($sql);
}

//đếm số lượng sản phẩm trong giỏ hàng
function soluong_spgh($id_giohang){
    $sql = "SELECT COUNT(id_ctgiohang) AS id_ctgiohang FROM chitiet_giohang WHERE id_giohang = $id_giohang";
    return pdo_query($sql);
}

//chức năng cập nhật tổng tiền trong giỏ hàng
function tongtien($tongtien, $id_giohang){
    $sql = "UPDATE giohang SET tongtien = $tongtien WHERE id_giohang = $id_giohang;";
    $sql.= "UPDATE giohang SET tongtien_vn = REPLACE(FORMAT(tongtien,0),',','.')";
    pdo_execute($sql);
}

//lấy tất cả thông tin trong chitiet_giohang theo id_giohang
function loadAllGioHangCT($id_giohang){
    $sql = "SELECT * FROM chitiet_giohang WHERE id_giohang = $id_giohang";
    return pdo_query($sql);
}

//chức năng cập nhật số lượng và giá tiền trong giỏ hàng
function capnhatgiohang($soluong, $id_ctgiohang){
    $sql = "UPDATE chitiet_giohang SET soluong = $soluong WHERE id_ctgiohang = $id_ctgiohang;";
    $sql.= "UPDATE chitiet_giohang SET total = giasp2 * soluong;";
    $sql.= "UPDATE chitiet_giohang SET total_vn = REPLACE(FORMAT(total,0),',','.')";
    pdo_execute($sql);
}

//lấy id_giohang thông qua id_ctgiohang
function get_idgiohang($id_ctgiohang){
    $sql = "SELECT id_giohang from chitiet_giohang where id_ctgiohang = $id_ctgiohang";
    return pdo_query_one($sql);
}

//chức năng xóa sản phẩm trong giỏ hàng
function xoaSpGh($id_giohang, $id_ctgiohang){
    $sql = "DELETE FROM chitiet_giohang WHERE id_giohang = $id_giohang AND id_ctgiohang = $id_ctgiohang";
    pdo_execute($sql);
}

//chức năng gửi đơn hàng (tạo hóa đơn)
function guiDonHang($nn_name, $nn_address, $nn_tel, $nn_email, $date, $pttt, $ghichu, $id_user){
    $sql = "INSERT INTO hoadon(nn_name, nn_address, nn_tel, nn_email, date, pttt, ghichu, id_user) VALUES ('".$nn_name."', '".$nn_address."', '".$nn_tel."', '".$nn_email."', '".$date."', '".$pttt."', '".$ghichu."', '".$id_user."');";
    pdo_execute($sql);
}

//lấy id hóa đơn
function get_idhoadon($id_user){
    $sql = "SELECT id_hoadon FROM hoadon WHERE id_user = $id_user ORDER BY id_hoadon DESC LIMIT 1;";
    return pdo_query($sql);
}

//chức năng thêm hóa đơn chi tiết
function them_hoadonCT($img_sp, $tensp, $giasp, $soluong, $id_hoadon, $id_chitiet, $id_dmc){
    $sql = "INSERT INTO chitiet_hoadon(img_sp, tensp, giasp2, soluong, id_dmc, id_chitiet, id_hoadon) VALUES ('".$img_sp."', '".$tensp."', '".$giasp."', '".$soluong."', '".$id_dmc."', '".$id_chitiet."', '".$id_hoadon."');";
    $sql.= "UPDATE chitiet_hoadon SET giasp = REPLACE(FORMAT(giasp2,0),',','.');";
    $sql.= "UPDATE chitiet_hoadon SET total = giasp2 * soluong;";
    $sql.= "UPDATE chitiet_hoadon SET total_vn = REPLACE(FORMAT(total,0),',','.')";
    pdo_execute($sql);
}

//lấy tổng tiền (total) của từng sản phẩm trong chi tiết hóa đơn
function allTotal_CTHD($id_hoadon){
    $sql = "SELECT * FROM chitiet_hoadon WHERE id_hoadon = $id_hoadon";
    return pdo_query($sql);
}

//chức năng cập nhật tổng tiền trong hóa đơn
function tongtien_hd($tongtien_hd, $id_hoadon){
    $sql = "UPDATE hoadon SET tongtien = $tongtien_hd WHERE id_hoadon = $id_hoadon;";
    $sql.= "UPDATE hoadon SET tongtien_vn = REPLACE(FORMAT(tongtien,0),',','.')";
    pdo_execute($sql);
}

//chức năng xóa giỏ hàng chi tiết sau khi in hóa đơn
function delete_ctgiohang($id_giohang){
    $sql = "DELETE FROM chitiet_giohang WHERE id_giohang = $id_giohang";
    pdo_execute($sql);
}

//lấy tất cả thông tin trong bảng hóa đơn
function loadAllHoaDon(){
    $sql = "SELECT * FROM hoadon as a INNER JOIN taikhoan as b WHERE a.id_user = b.id_user ORDER BY a.id_hoadon DESC";
    return pdo_query($sql);
}

//lấy tất cả thông tin trong bảng hóa đơn
function loadHoaDon($id_hoadon){
    $sql = "SELECT * FROM hoadon WHERE id_hoadon = $id_hoadon";
    return pdo_query($sql);
}

//lấy tất cả thông tin trong bảng hóa đơn chi tiết
function loadAllHoaDonCT($id_hoadon){
    $sql = "SELECT * FROM chitiet_hoadon WHERE id_hoadon = $id_hoadon";
    return pdo_query($sql);
}

//chức năng cập nhật trạng thái đơn hàng
function capnhat_trangthai($id_hoadon, $trangthai){
    $sql = "UPDATE hoadon SET trangthai = $trangthai WHERE id_hoadon = $id_hoadon";
    pdo_execute($sql);
}

// //chức năng cập nhật trạng thái đơn hàng và thời gian đã xác nhận đơn hàng
function capnhat_trangthai2($id_hoadon, $trangthai, $date){
    $sql = "UPDATE hoadon SET trangthai = $trangthai, date2 = '$date' WHERE id_hoadon = $id_hoadon";
    pdo_execute($sql);
}

// //chức năng cập nhật trạng thái và thời gian đã lấy đơn hàng
function capnhat_trangthai3($id_hoadon, $trangthai, $date){
    $sql = "UPDATE hoadon SET trangthai = $trangthai, date3 = '$date' WHERE id_hoadon = $id_hoadon";
    pdo_execute($sql);
}
//kiểm tra thời gian xác nhận đơn hàng
function check_date2($id_hoadon){
    $sql = "SELECT date2 FROM hoadon WHERE id_hoadon = $id_hoadon";
    return pdo_query($sql);
}

//thêm thời gian vào xác nhận đơn hàng
function update_date2($id_hoadon, $date){
    $sql = "UPDATE hoadon SET date2 = '$date' WHERE id_hoadon = $id_hoadon";
    pdo_execute($sql);
}

//chức năng cập nhật trạng thái và thời gian chờ giao hàng
function capnhat_trangthai4($id_hoadon, $trangthai, $date, $date5){
    $sql = "UPDATE hoadon SET trangthai = $trangthai, date4 = '$date', date5 = '$date5' WHERE id_hoadon = $id_hoadon";
    pdo_execute($sql);
}

//chức năng hủy đơn admin
function capnhat_trangthai5($id_hoadon, $trangthai){
    $sql = "UPDATE hoadon SET trangthai = $trangthai WHERE id_hoadon = $id_hoadon";
    pdo_execute($sql);
}

//kiểm tra thời gian chờ lấy hàng
function check_date3($id_hoadon){
    $sql = "SELECT date3 FROM hoadon WHERE id_hoadon = $id_hoadon";
    return pdo_query($sql);
}

//thêm thời gian vào chờ lấy hàng
function update_date3($id_hoadon, $date){
    $sql = "UPDATE hoadon SET date3 = '$date' WHERE id_hoadon = $id_hoadon";
    pdo_execute($sql);
}

//lấy tất cả thông tin trong hóa đơn
function loadALlHD($id_user){
    $sql = "SELECT * FROM hoadon WHERE id_user = $id_user ORDER BY id_hoadon DESC;";
    return pdo_query($sql);
}

//lấy tất cả thong tin trong hóa đơn chi tiết
function loadAllHDCT($id_hoadon){
    $sql = "SELECT * FROM chitiet_hoadon WHERE id_hoadon = $id_hoadon";
    return pdo_query($sql);
}

//chức năng người dùng hủy đơn
function huyDon($id_hoadon){
    // $sql = "UPDATE hoadon SET trangthai = 0 WHERE id_hoadon = $id_hoadon";
    $sql = "";
    pdo_execute($sql);
}

//chức năng người dùng xác nhận đã nhận hàng
function daGiao($date4, $id_hoadon, $date5){
    $sql = "UPDATE hoadon SET trangthai = 4, date4 = '$date4', date5 = '$date5' WHERE id_hoadon = $id_hoadon";
    pdo_execute($sql);
}

//trạng thái đơn hàng
function get_ttdh($n){
    switch($n) {
        case 0: 
            $tt = "Hủy đơn";
            break;
        case 1: 
            $tt = "Chờ xác nhận";
            break;
        case 2: 
            $tt = "Chờ lấy hàng";
            break;
        case 3: 
            $tt = "Chờ giao hàng";
            break;
        case 4: 
            $tt = "Đã giao";
    }
    return $tt;
}


//phương thức thanh toán
function get_pttt($n){
    switch($n) {
        case 1: 
            $tt = "Trả tiền khi nhận hàng";
            break;
        case 2: 
            $tt = "Thanh toán tại cửa hàng";
            break;
        case 3: 
            $tt = "Thanh toán online";
            break;
    }
    return $tt;
}

?>