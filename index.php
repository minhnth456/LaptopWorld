<?php
    session_start();
    ob_start();
    include 'model/pdo.php';
    include 'model/danhmuc/danhmuc.php';
    include 'model/sanpham/sanpham.php';
    include 'model/taikhoan.php';
    include 'view/header.php';
    if(isset($_GET['act']) && ($_GET['act'])){
        $act = $_GET['act'];
        switch ($act) {
            case 'chitietsanpham':
                include 'view/chitietsanpham.php';
                break;    
            case 'dangky':
                if(isset($_POST['dangky'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $re_pass=$_POST['re-pass'];
                    insert_taikhoan($name,$email,$pass);
                }
                include 'view/home.php';
                break;    
            case 'dangnhap':
                // if(isset($_POST['dangnhap'])){
                //     $name=$_POST['name'];
                //     $pass=$_POST['pass'];
                //     $checkuser=checkuser($name,$pass);
                //     if(is_array($checkuser)){
                //         $_SESSION['name']=$checkuser;
                //         // $thongbao="Ban da dang nhap thanh cong";
                //         header('Location: index.php');
                //     }else{
                //         $thongbao="Tai khoan khong ton tai. Vui long dang ki tai khoan";
                //     }
                // }
                include 'view/home.php';
                break;    
                
        } 
    } else {
        include 'view/home.php';
    }
    include 'view/footer.php';
?>