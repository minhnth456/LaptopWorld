<?php
    session_start();
    ob_start();
    include 'model/pdo.php';
    include 'model/danhmuc/danhmuc.php';
    include 'model/sanpham/sanpham.php';
    include 'model/user/user.php';
    include 'model/giohang/giohang.php';
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
                include 'view/chitietsanpham.php';
                break;  
            case 'dangnhap':
                if(isset($_POST['dangnhap'])){
                 $thongbao = dangnhap($_POST['user'], $_POST['pass']);
                }
                header('location: index.php');
                break; 
            case 'dangxuat':
                dangxuat();
                include 'view/home.php';
                break; 
            case 'dangky':
                if(isset($_POST['dangkytk'])){
                dangky($_POST['user'],$_POST['email'],$_POST['pass'],$_POST['address']);
                }
                include 'view/home.php';
                break;
            case 'add_cart':
                if(isset($_POST['muahang'])){
                    $tensp = $_POST['tensp'];
                    $id_chitiet = $_POST['id_ctiet'];
                    $id_user = $_POST['id_user'];
                    $img = $_POST['img'];
                    $giasp = $_POST['giasp'];
                    $soluong = $_POST['soluong'];
                    $id_pro = $_POST['id_pro'];
                    $total = $_POST['giasp'];
                    add_cart($id_user, $tensp, $img, $giasp, $soluong, $total, $id_pro,$id_chitiet);
                }
                include 'view/cart.php';
                break;
            case 'updateCart':
                if(isset($_POST['submit'])){
                    $giasp = $_POST['giasp'];
                    $soluong = $_POST['quantily'];
                    $id_cart = $_POST['id_cart'];
                    upload_cart($giasp,$soluong,$id_cart);
                }
                include 'view/cart.php';

                break; 
            case 'oder_sp':
                if(isset($_POST['guidonhang'])){
                    $nn_name = $_POST['name'];
                    $id_user = $_POST['id_user'];
                    $nn_tel = $_POST['sdt'];
                    $nn_address = $_POST['diachi'];
                    $phuong_thuc_tt = $_POST['COD'];
                    $tong_tien = $_POST['tong_tien'];
                    $id_ctgiohang = $_POST['id_chitiet_gh'] ?? null; 
                    // var_dump($id_ctgiohang);
                    if(!empty($id_ctgiohang)) {
                     $id_ctgiohang = $_POST['id_chitiet_gh'];  
                     $odder = add_to_order($id_user, $nn_name, $nn_address, $nn_tel, $phuong_thuc_tt, $tong_tien, $id_ctgiohang);
                     xoa_giohang($id_user);
                     include 'view/donhang.php';
                    }
                    else{
                        include 'view/giohang_trong.php';
                    }
                }
                
                break;
        } 
    } else {
        include 'view/home.php';
    }
    include 'view/footer.php';
?>