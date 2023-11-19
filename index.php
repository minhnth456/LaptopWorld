<?php
    session_start();
    ob_start();
    include 'model/pdo.php';
    include 'model/danhmuc/danhmuc.php';
    include 'model/sanpham/sanpham.php';
    include 'model/user/user.php';
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
                dangky($_POST['user'],$_POST['email'],$_POST['pass']);
                }
                include 'view/home.php';
                break;
        } 
    } else {
        include 'view/home.php';
    }
    include 'view/footer.php';
?>