<?php
    session_start();
    ob_start();
    include 'model/pdo.php';
    include 'model/danhmuc/danhmuc.php';
    include 'model/sanpham/sanpham.php';
    include 'model/user/user.php';
    include 'model/giohang/giohang.php';
    include 'model/bieudo/bieudo.php';
    include 'model/binhluan.php';
    include 'model/bo_loc.php';
    include 'view/header.php';
    

    if(isset($_GET['act']) && ($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'chitietsanpham':
                if(isset($_GET['id_chitiet']) && ($_GET['id_chitiet']) != ""){
                    $id_chitiet = $_GET['id_chitiet'];
                    // thông tin sản phẩm
                    $loadOneSpCt = loadOneSpCt($id_chitiet);
                }
                if(isset($_GET['id_pro']) && ($_GET['id_pro']) != ""){
                    $id_pro = $_GET['id_pro'];
                    // ảnh chính
                    $anhsp = anhsp($id_pro);
                    // ảnh sản phẩm
                    $loadAllImgSp = loadAllImgSp($id_pro);
                    // lấy tất cả cấu hình của sản phẩm
                    $loadAllSpCt = loadAllSpCt($id_pro);
                }
                $get_iddmc = get_iddmc($id_chitiet);
                foreach ($get_iddmc as $a):
                    $id_dmc = $a['id_dmc'];
                endforeach;
                top10_sp($id_chitiet,$id_pro);
                include 'view/chitietsanpham.php';
                break;  
                case 'dangnhap':
                    if(isset($_POST['dangnhap'])){
                        $load_tk_user = loadadd_taikhoan();
                        $check_var = false;
                        if(isset($_POST['user']) && $_POST['user'] != ""){
                            $user = $_POST['user'];
                        }
    
                        if(isset($_POST['pass']) && $_POST['pass'] != ""){
                            $pass = $_POST['pass'];
                        }
        
                        foreach ($load_tk_user as $row) {
                            $name = $row['name'];
                            $mk = $row['pass'];
                            if ($user == $name && $pass == $mk) {
                                // Tên đăng nhập và mật khẩu trùng khớp -> kết thúc vòng lặp
                                $check_var = true;
                                break;
                            }
                        }
        
                        if ($check_var) { //check var == true
                            // đăng nhập
                            dangnhap($_POST['user'], $_POST['pass']);
                        } else {
                            // Hiện thông báo nếu tài khoản hoặc mật khẩu không đúng
                            echo '<script> alert("Đăng nhập thất bại. Tên tài khoản hoặc Mật khẩu không đúng!"); </script>';
                        }
        
                    }
                    include 'view/home.php';
                    break;
            case 'dangxuat':
                    dangxuat();
                    $_SESSION['slgh'] = 0;
                    include 'view/home.php';
                    break; 
            case 'dangky':
                if (isset($_POST['dangkytk'])) {
                    $load_tk_user = loadadd_taikhoan();
                    $emailExists = false;
                
                    foreach ($load_tk_user as $row) {
                        if (($_POST['email'] != "") && $row['email'] == $_POST['email']) {
                            // Địa chỉ email đã tồn tại kết thúc vòng lặp
                            $emailExists = true;
                            break;
                        }
                    }
                
                    if ($emailExists) {
                        // Xuất thông báo lỗi khi email đã tồn tại
                        echo '<script> alert("Đăng ký thất bại. Email đã tồn tại!"); </script>';
                    } else {
                        // Nếu địa chỉ email không tồn tại, thực hiện đăng ký
                        if($_POST['user'] != "" && $_POST['email'] != "" && $_POST['pass'] != ""){
                            dangky($_POST['user'], $_POST['email'], $_POST['pass']);
                            dangnhap($_POST['user'], $_POST['pass']);
                        }
    
                    }
                }
                include 'view/home.php';
                break;
                

            // chức năng bình luận
            case 'binhluan':
                if(isset($_GET['id_chitiet']) && ($_GET['id_chitiet']) > 0){
                    $id_chitiet = $_GET['id_chitiet'];
                }

                if(isset($_GET['id_pro']) && ($_GET['id_pro']) > 0){
                    $id_pro = $_GET['id_pro'];
                }

                if(isset($_POST['binhluan'])){
                    $id_user = $_POST['id_user'];
                    $ngaybinhluan = $_POST['ngaybinhluan'];
                    $id_pro = $_POST['id_pro'];
                    $noidung = $_POST['noidung'];
                    binhluan($noidung, $id_pro, $ngaybinhluan, $id_user);
                    header('location: index.php?act=chitietsanpham&id_chitiet='.$id_chitiet.'&id_pro='.$id_pro);
                }

            // chức năng trả lời bình luận
            case 'repCom':
                if(isset($_GET['id_chitiet']) && ($_GET['id_chitiet']) > 0){
                    $id_chitiet = $_GET['id_chitiet'];
                }

                if(isset($_GET['id_pro']) && ($_GET['id_pro']) > 0){
                    $id_pro = $_GET['id_pro'];
                }

                if(isset($_POST['repCom'])){
                    $noi_dung = $_POST['noi_dung'];
                    $date = $_POST['date'];
                    $id_user = $_POST['id_user'];
                    $id_bl = $_POST['id_bl'];
                    repCom($noi_dung, $date, $id_user, $id_bl);
                    header('location: index.php?act=chitietsanpham&id_chitiet='.$id_chitiet.'&id_pro='.$id_pro);
                }
                break;

            // hiển thị trang giỏ hàng
            case 'giohang':
                if(isset($_SESSION['id_user']) && $_SESSION['id_user'] > 0){
                    //check id user
                    $id_user = $_SESSION['id_user'];
                    //check giỏ hàng
                    $check_giohang = check_giohang($id_user);
                    if(empty($check_giohang)){
                        // ko có thì tạo
                        tao_giohang($id_user);
                    } else {
                        // có rồi thì thôi
                    }
                } else {
                    // tạo tài khoản và lấy id_clone của tài khoản
                    $id_clone = taotk_clone();
                    
                    //id_user cua acc clone
                    $get_id_user = taotk($id_clone);
                    $_SESSION['id_user'] = $get_id_user;
                    $id_user = $_SESSION['id_user'];
                    
                    $check_giohang = check_giohang($id_user);
                    if(empty($check_giohang)){
                        // ko có thì tạo
                        tao_giohang($id_user);
                    } else {
                        // có rồi thì thôi
                    }
                }

                // lấy id_giohang
                $lay_id_giohang = id_giohang($id_user);
                $id_giohang = $lay_id_giohang[0]['id_giohang'];

                if(isset($_POST['muaNgay'])){
                    $img_spct = $_POST['img_spct'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $giasp2 = $_POST['giasp2'];
                    $soluong = $_POST['soluong'];
                    $total = $_POST['total'];
                    $id_pro = $_POST['id_pro'];
                    $id_chitiet = $_POST['id_chitiet'];
                    $id_dmc = $_POST['id_dmc'];
                    
                    // $id_giohang = id_giohang($id_user);
                    
                    //kiểm tra sản phẩm trùng lặp trong giỏ hàng
                    $check_sanpham = check_sanpham($id_chitiet,$id_giohang);
                    if(empty($check_sanpham)){
                        //sản phẩm ko trùng -> thêm vào giỏ hàng
                        them_giohang($img_spct, $tensp, $giasp, $giasp2, $soluong, $total, $id_pro, $id_chitiet, $id_giohang);
                    } else {
                        //sản phẩm trùng -> số lượng + 1
                        them_soluong_sanpham($id_chitiet);
                    }
                    // đếm số lượng sản phẩm trong giỏ hàng
                    $lay_soluong_spgh = soluong_spgh($id_giohang);
                    foreach ($lay_soluong_spgh as $a):
                    $soluong_spgh = $a['id_ctgiohang'];
                    $_SESSION['slgh'] = $a['id_ctgiohang'];
                    endforeach;
                    
                    // lấy total của từng sản phẩm trong giỏ hàng
                    $allTotal = allTotal($id_giohang);
                    $tongtien = 0;

                    // dùng vòng lăp for để tính tổng tiền tất cả sp trong giỏ hàng
                    for ($i = 0; $i < $soluong_spgh; $i++) {
                        $tong = 0;
                        $total = $allTotal[$i]['total'];
                        $tong = $tong + $total;
                        $tongtien = $tongtien + $tong;
                    }
                    tongtien($tongtien, $id_giohang);

                }

                //lấy tất cả thông tin trong chitiet_giohang theo id_giohang
                $loadAllGioHangCT = loadAllGioHangCT($id_giohang);
                include 'view/cart.php';
                break;
            
            
            //cập nhật số lượng và giá tiền trong giỏ hàng
            case'capnhatgiohang':
                //người dùng nhấn tiếp tục mua
                if(isset($_POST['capnhatgiohang'])){
                    // lấy id_user
                    if(isset($_SESSION['id_user']) && $_SESSION['id_user'] > 0){
                        $id_user = $_SESSION['id_user'];
                    }
                    // lấy id_giohang
                    $lay_id_giohang = id_giohang($id_user);
                    $id_giohang = $lay_id_giohang[0]['id_giohang'];
                    
                    // đếm số lượng sản phẩm trong giỏ hàng
                    $lay_soluong_spgh = soluong_spgh($id_giohang);
                    foreach ($lay_soluong_spgh as $a):
                    $soluong_spgh = $a['id_ctgiohang'];
                    $_SESSION['slgh'] = $a['id_ctgiohang'];
                    endforeach;
                    // cập nhật số lượng và giá tiền 
                    for ($i = 0; $i < $soluong_spgh; $i++){
                        $soluong = $_POST['quantity_'.$i];
                        $id_ctgiohang = $_POST['id_ctgiohang_'.$i];
                        capnhatgiohang($soluong, $id_ctgiohang);
                    }

                    // lấy total của từng sản phẩm trong giỏ hàng
                    $allTotal = allTotal($id_giohang);
                    $tongtien = 0;

                    // dùng vòng lăp for để tính tổng tiền tất cả sp trong giỏ hàng
                    for ($i = 0; $i < $soluong_spgh; $i++) {
                        $tong = 0;
                        $total = $allTotal[$i]['total'];
                        $tong = $tong + $total;
                        $tongtien = $tongtien + $tong;
                    }
                    tongtien($tongtien, $id_giohang);
                    include 'view/home.php';
                    break;
                }

                if(isset($_POST['guidonhang'])){
                    if(isset($_SESSION['id_user']) && $_SESSION['id_user'] > 0){
                        $id_user = $_SESSION['id_user'];
                    }
                    $nn_name = $_POST['nn_name'];
                    $nn_address = $_POST['nn_address'];
                    $nn_tel = $_POST['nn_tel'];
                    $nn_email = $_POST['nn_email'];
                    if(isset($_POST['COD'])){
                        $pttt = $_POST['COD'];
                    }
                    $date = $_POST['date'];
                    $ghichu = $_POST['ghichu'];

                    // cập nhật giỏ hàng trc khi gửi đơn hàng
                    // lấy id_giohang
                    $lay_id_giohang = id_giohang($id_user);
                    $id_giohang = $lay_id_giohang[0]['id_giohang'];
                    
                    // đếm số lượng sản phẩm trong giỏ hàng
                    $lay_soluong_spgh = soluong_spgh($id_giohang);
                    foreach ($lay_soluong_spgh as $a):
                    $soluong_spgh = $a['id_ctgiohang'];
                    $_SESSION['slgh'] = $a['id_ctgiohang'];
                    endforeach;

                    // nếu trong giỏ hàng ko rỗng
                    if($soluong_spgh > 0){
                        // cập nhật số lượng và giá tiền theo số lượng
                        for ($i = 0; $i < $soluong_spgh; $i++){
                            $soluong = $_POST['quantity_'.$i];
                            $id_ctgiohang = $_POST['id_ctgiohang_'.$i];
                            capnhatgiohang($soluong, $id_ctgiohang);
                        }

                        // lấy total của từng sản phẩm trong giỏ hàng
                        $allTotal = allTotal($id_giohang);
                        $tongtien = 0;

                        // dùng vòng lăp for để tính tổng tiền tất cả sp trong giỏ hàng
                        for ($i = 0; $i < $soluong_spgh; $i++) {
                            $tong = 0;
                            $total = $allTotal[$i]['total'];
                            $tong = $tong + $total;
                            $tongtien = $tongtien + $tong;
                        }
                        tongtien($tongtien, $id_giohang);
                        // end cập nhật giỏ hàng trc khi gửi đơn hàng

                        // sau khi cập cập nhật xong mới bắt đầu gửi hóa đơn
                        guiDonHang($nn_name, $nn_address, $nn_tel, $nn_email, $date, $pttt, $ghichu, $id_user);

                        //lấy id hóa đơn
                        $get_idhoadon = get_idhoadon($id_user);
                        $id_hoadon = $get_idhoadon[0]['id_hoadon'];
                        
                        // dùng vòng lặp để lấy tất cả sản phẩm và thêm vào hóa đơn chi tiết
                        for ($i = 0; $i < $soluong_spgh; $i++) {
                            $img_sp = $_POST['img_sp_'.$i];
                            $tensp = $_POST['tensp_'.$i];
                            $giasp = $_POST['giasp_'.$i];
                            $soluong = $_POST['quantity_'.$i];
                            $id_chitiet = $_POST['id_chitiet_'.$i];
                            $get_iddmc = get_iddmc($id_chitiet);
                            foreach ($get_iddmc as $ad):
                                $id_dmc = $ad['id_dmc'];
                            endforeach;
                            them_hoadonCT($img_sp, $tensp, $giasp, $soluong, $id_hoadon, $id_chitiet, $id_dmc);
                        }
                        // lấy tất cả thông tin trong chi tiết hóa đơn
                        $allTotal_CTHD = allTotal_CTHD($id_hoadon);
                        $tongtien_hd = 0;

                        // dùng vòng lăp for để tính tổng tiền tất cả sp trong hóa đơn (total và total_vn)
                        for ($i = 0; $i < $soluong_spgh; $i++) {
                            $tong = 0;
                            $total = $allTotal_CTHD[$i]['total'];
                            $tong = $tong + $total;
                            $tongtien_hd = $tongtien_hd + $tong;
                        }
                        tongtien_hd($tongtien_hd, $id_hoadon);

                        // làm trống giỏ hàng sau khi gửi đơn hàng và tạo hóa đơn
                        delete_ctgiohang($id_giohang);
                        $_SESSION['slgh'] = 0;
                        // Thanh toán bằng momo
                        if(isset($_POST['COD'])&&$_POST['COD']==3){
                            header('Location: view/thanhtoanbangMomo.php?id_hoadon=' . $tongtien_hd);

                        }
                        include 'view/donhang_thanhcong.php';
                    } else {
                        // nếu giỏ hàng rỗng
                        include 'view/giohang_trong.php';
                        break;
                    }
                }
                break;
                
            // ???
            case 'thanhcong':
                include 'view/donhang_thanhcong.php';
                break;
        
            //chức năng xóa sản phẩm trong giỏ hàng
            case 'xoasp':
                if(isset($_SESSION['id_user']) && $_SESSION['id_user'] > 0){
                    $id_user = $_SESSION['id_user'];
                    // lấy id_giohang
                    $lay_id_giohang = id_giohang($id_user);
                    $id_giohang = $lay_id_giohang[0]['id_giohang'];
                }
                if(isset($_GET['id_ctgiohang']) && ($_GET['id_ctgiohang']) > 0){
                    $id_ctgiohang = $_GET['id_ctgiohang'];
                }
                // xóa sản phẩm trong giỏ hàng
                xoaSpGh($id_giohang, $id_ctgiohang);

                // đếm số lượng sản phẩm trong giỏ hàng
                $lay_soluong_spgh = soluong_spgh($id_giohang);
                foreach ($lay_soluong_spgh as $a):
                $soluong_spgh = $a['id_ctgiohang'];
                $_SESSION['slgh'] = $a['id_ctgiohang'];
                endforeach;

                //lấy tất cả thông tin trong chitiet_giohang theo id_giohang
                $loadAllGioHangCT = loadAllGioHangCT($id_giohang);
                include 'view/cart.php';
                break;

            //hien trang cap nhap tai khoan
            case 'capnhaptaikhoan':
                if(isset($_SESSION['id_user'])&&($_SESSION['id_user']) >0){
                    $id_user = $_SESSION['id_user'];
                    $load_tk = load_tk($id_user);
                }
                include 'view/capnhaptaikhoan.php';
                break;

            case 'luutk':
                if(isset($_POST['luutk'])){
                    $id_user=$_POST['id_user'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    update_tk($name,$email,$address,$tel,$id_user);
                }
                $load_tk = load_tk($id_user);
                include 'view/capnhaptaikhoan.php';
                break;
            
            case 'chonanh':
                if(isset($_POST['chonanh'])){
                    $id_user=$_POST['id_user'];
                    $targetDir = "img/";
                    $tempFile = $_FILES['img']['tmp_name'];
                    $fileName = $_FILES['img']['name'];
                    $targetFile = $targetDir . $fileName;
                    $imgType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                    $allow = array("jpg","jpeg","png","gif");
                    if(in_array($imgType,$allow)){
                        move_uploaded_file($tempFile,$targetFile);
                        update_anh($fileName, $id_user);
                        $_SESSION['img'] = $fileName;
                    }
                }
                
                $load_tk = load_tk($id_user);
                include 'view/capnhaptaikhoan.php';
                break;
            
            // hiển thị trang đơn mua
            case 'order':
                if(isset($_GET['id_user']) && ($_GET['id_user']) > 0){
                    $id_user = $_GET['id_user'];
                    $loadALlHD = loadALlHD($id_user);
                }
                include 'view/order.php';
                break;

            //chức năng hủy đơn hàng, xác nhận đã giao của user
            case 'xacnhan_mua_huy':
                if(isset($_POST['huydon'])){
                    $id_hoadon = $_POST['id_hoadon'];
                    $id_user = $_POST['id_user'];
                    $loadAllHDCT = loadHoaDon($id_hoadon);
                    foreach($loadAllHDCT as $hdct):
                        $tt = $hdct['trangthai'];
                    endforeach;
                    if($tt == 1){
                        huyDon($id_hoadon);
                    } else {
                        header('location: index.php?act=order&id_user='.$id_user);
                    }
                    
                }
                if(isset($_POST['danhan'])){
                    $id_hoadon = $_POST['id_hoadon'];
                    $date4 = $_POST['date4'];
                    $date5 = $_POST['date5'];
                    daGiao($date4, $id_hoadon, $date5);
                }
                if(isset($_SESSION['id_user'])&&($_SESSION['id_user']) >0){
                    $id_user = $_SESSION['id_user'];
                    $loadALlHD = loadALlHD($id_user);
                }
                header('location: index.php?act=order&id_user='.$id_user);
                break;

            // chức năng tìm kiếm sản phẩm
            case 'timkiem':
                if(isset($_POST['timkiem'])){
                    $keyw = $_POST['keyw'];
                }
                header('location:index.php?act=sanpham&keyword='.$keyw.'&');
                break;
            
            //hiển thị trang sản phẩm
            case 'sanpham':
                include "view/sanpham.php";
                break;

            //hiển thị trang tin tức
            case 'tintuc':
                include "view/tintuc.php";
                break;

            default:
                if(isset($_SESSION['id_user']) && $_SESSION['id_user'] > 0){
                    $id_user = $_SESSION['id_user'];
                    // lấy id_giohang
                    $lay_id_giohang = id_giohang($id_user);
                    if(is_array($lay_id_giohang)){
                        $id_giohang = $lay_id_giohang[0]['id_giohang'];
                    
                        // đếm số lượng sản phẩm trong giỏ hàng
                        $lay_soluong_spgh = soluong_spgh($id_giohang);
                        foreach ($lay_soluong_spgh as $a):
                        $soluong_spgh = $a['id_ctgiohang'];
                        $_SESSION['slgh'] = $a['id_ctgiohang'];
                        endforeach;
                    }
                }
                include 'view/home.php';
                break;    
        
        } 
    } else {
        include 'view/home.php';

    }
    include 'view/footer.php';
?>