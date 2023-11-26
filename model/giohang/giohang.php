<?php 
 

    function add_cart($id_user, $tensp, $img, $giasp, $soluong, $total, $id_pro, $id_chitiet) {
        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $sql_check = "SELECT * FROM chitiet_giohang WHERE id_chitiet = '$id_chitiet' AND id_pro = '$id_pro'";
        $existing_product = pdo_query_one($sql_check);
    
        if ($existing_product) {
            // Nếu sản phẩm đã tồn tại, tăng số lượng của sản phẩm
            $new_quantity = $existing_product['soluong'] + 1;
    
            // Cập nhật số lượng và tổng tiền của sản phẩm trong giỏ hàng
            $sql_update = "UPDATE chitiet_giohang 
                           SET soluong = $new_quantity, total = $giasp * $new_quantity
                           WHERE id_ctgiohang = " . $existing_product['id_ctgiohang'];
    
            pdo_execute($sql_update);
        } else {
            // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
            $sql_giohang = "INSERT INTO giohang (ghichu, id_user) VALUES ('Ghi chú cho đơn hàng', '$id_user')";
            $last_giohang_id = pdo_execute_lastid($sql_giohang);
    
            $sql_chitiet = "INSERT INTO chitiet_giohang (tensp, img, giasp, soluong, total, id_giohang, id_pro,id_chitiet)
                            VALUES ('$tensp', '$img', $giasp, $soluong, $total, $last_giohang_id, '$id_pro','$id_chitiet')";
            
            pdo_execute($sql_chitiet);
        }
    
        header("location: index.php?act=add_cart");
    }
    

    
    // TỔNG TIỀN
    function get_total_tongcong($id_user) {
        $sql = "SELECT SUM(chitiet_giohang.total) AS total_tongcong 
        FROM chitiet_giohang 
        JOIN giohang ON giohang.id_giohang = chitiet_giohang.id_giohang 
        WHERE giohang.id_user = $id_user";
        $result = pdo_query_one($sql);
    
        // Kiểm tra nếu câu truy vấn thành công
        if ($result) {
            return $result['total_tongcong'];
        } else {
            return 0; 
        }
    }
   
    

   // Hiển thị sản phẩm trong giỏ hàng
    function load_cart($id_user){
        $sql = "SELECT * FROM giohang JOIN chitiet_giohang ON chitiet_giohang.id_giohang = giohang.id_giohang WHERE giohang.id_user = '$id_user'";
        $load_one_cart = pdo_query($sql);
        return $load_one_cart;
    }


    // Tăng số lượng sản phẩm

    function upload_cart($giasp,$soluong,$id_cart){
        $sql = "UPDATE `chitiet_giohang`
        SET 
            `soluong` = $soluong,
            `total` = $giasp * $soluong
        WHERE 
            `id_ctgiohang` = $id_cart";
            $add_cart = pdo_query($sql);
            return $add_cart;
    }
        

    // Đặt hàng vào đơn hàng và đơn hàng chi tiết

        function add_to_order($id_user, $nn_name, $nn_address, $nn_tel, $phuong_thuc_tt, $tong_tien, $id_ctgiohang) {
            // Chèn thông tin đơn hàng
            $sql_hoadon = "INSERT INTO `hoadon` (`id_user`, `nn_name`, `nn_address`, `nn_tel`, `phuong_thuc_tt`, `tong_tien`) 
                          VALUES ('$id_user', '$nn_name', '$nn_address', '$nn_tel', '$phuong_thuc_tt', '$tong_tien')";
        
            // Thực hiện câu lệnh SQL
            $last_hoadon_id = pdo_execute_lastid($sql_hoadon);
        
            // Kiểm tra xem $id_ctgiohang có phải là mảng không rỗng không
            if (is_array($id_ctgiohang) && !empty($id_ctgiohang)) {
                // Chuyển đổi mảng thành chuỗi, cách nhau bởi dấu phẩy
                $id_list = implode(',', $id_ctgiohang);
        
                // Chọn các mục trong giỏ hàng dựa trên ID của chúng
                $sql = "SELECT * FROM `chitiet_giohang` WHERE id_ctgiohang IN ($id_list)";
                $results = pdo_query($sql);
        
                // Duyệt qua các mục trong giỏ hàng và chèn chúng vào hoadon_chitiet
                foreach ($results as $row) {
                    $id_ctgiohang = $row['id_ctgiohang'];
                    $giasp = $row['giasp'];
                    $soluong = $row['soluong'];
                    $sql_hoadon_chitiet = "INSERT INTO `hoadon_chitiet` (`id_hoadon`, `id_ctgiohang`,gia_pro,soluong) 
                                           VALUES ('$last_hoadon_id', '$id_ctgiohang',$giasp,$soluong)";
        
                    // Thực hiện câu lệnh SQL cho chi tiết đơn hàng
                    pdo_execute($sql_hoadon_chitiet);
                }
            }
        
            return $last_hoadon_id;
        }
        
        function xoa_giohang($id_user){
            // Xóa dữ liệu từ bảng con
            $sql_delete_chitiet = "DELETE FROM chitiet_giohang WHERE id_giohang IN (SELECT id_giohang FROM giohang WHERE id_user = '$id_user')";
            pdo_query($sql_delete_chitiet);
            
            // Xóa dữ liệu từ bảng cha
            $sql_delete_giohang = "DELETE FROM giohang WHERE id_user = '$id_user'";
            pdo_query($sql_delete_giohang);
            
        }
        


?>