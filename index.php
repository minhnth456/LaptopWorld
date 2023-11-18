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
                include 'view/chitietsanpham.php';
                break;  
            case 'dangnhap':
                if(isset($_POST['dangnhap'])){
                 $thongbao = dangnhap($_POST['user'], $_POST['pass']);
                }
                include 'view/home.php';
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