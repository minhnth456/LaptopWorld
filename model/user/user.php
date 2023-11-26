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

            if (isset($_SESSION['name'])) {
                if ($role == 0) {
                    // Đây là người dùng
                    header('Location: index.php');
                    exit();
                } elseif ($role == 1) {
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
            session_destroy(); // Hủy session
            header('Location: index.php');
            exit(); // Đảm bảo không có mã lệnh tiếp theo được thực thi sau khi chuyển hướng
        }
    }
    
    function dangky($user,$email,$pass,$address){
        $sql = "INSERT INTO taikhoan (name, pass, email,address) VALUES ('".$user."' , '".$pass."' , '".$email."','".$address."')";
        $dki = pdo_query($sql);
        return $dki;
}

?>