<?php
    session_start();
    ob_start();
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