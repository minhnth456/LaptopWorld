<?php
    session_start();
    ob_start();
    include 'view/header.php';
    if(isset($_GET['act']) && ($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case '';
        } 
    } else {
        include 'view/home.php';
    }
    include 'view/footer.php';
?>