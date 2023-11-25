<?php 
    function dangnhap($user, $pass) {
        $sql = "SELECT * FROM taikhoan WHERE name = '$user' and pass = '$pass'";
        $taikhoan = pdo_query($sql);
        $dulieu = $taikhoan;

        if ($dulieu) {
            $row = $dulieu[0]; // Lấy hàng dữ liệu 
            $_SESSION['name'] = $user;
            $role = $row['role'];
            $_SESSION['role'] = $role;
            $iduser = $row['id_user'];
            $_SESSION['id_user'] = $iduser;
            $img = $row['img'];
            $_SESSION['img'] = $img;

            if (isset($_SESSION['name'])) {
                if ($role == 1) {
                    // Đây là người dùng
                    header('Location: index.php');
                    exit();
                } elseif ($role == 2) {
                    // Đây là admin
                    header('Location: index.php');
                    exit();
                } 
            }
        } else {
            return "Thông tin tài khoản hoặc mật khẩu sai";
        }
    }
    function dangxuat(){
        if(isset($_SESSION['name'])){
            unset($_SESSION['name']);
            unset($_SESSION['role']);
            unset($_SESSION['id_user']);
            unset($_SESSION['img']);
            header('Location: index.php');
        }
    }
    function dangky($user,$email,$pass){
        $sql = "INSERT INTO taikhoan (name, pass, email) VALUES ('".$user."' , '".$pass."' , '".$email."')";
        $dki = pdo_query($sql);
        return $dki;
    }

    //tạo tài khoản clone, tạo tài khoản dựa theo id clone và lấy id tài khoản
    function taotk_clone() {
        $sql = "INSERT INTO taikhoan_clone () VALUES (); ";
        return pdo_execute_lastid($sql);
    }

    //tạo tài khoản theo id clone
    function taotk($id_clone){
        $sql = "INSERT INTO taikhoan(id_clone, pass) VALUES ('".$id_clone."', 'LaptopWorld');";
        return pdo_execute_lastid($sql);
    }

    //lấy id_user thông qua id_clone
    // function get_idUser($id_clone){
    //     $sql = "SELECT id_user FROM taikhoan WHERE id_clone = $id_clone";
    //     pdo_query($sql);
    // }

?>