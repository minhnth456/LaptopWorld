<?php
    session_start();
    ob_start();
    include 'model/pdo.php';
    include 'model/danhmuc/danhmuc.php';
    include 'model/sanpham/sanpham.php';
    include 'view/header.php';
    if(isset($_GET['act']) && ($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'chitietsanpham':
                include 'view/chitietsanpham.php';
                break;    
        } 
    } else {
        include 'view/home.php';
    }
    include 'view/footer.php';
?>