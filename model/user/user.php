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

    //load thong tin cap nhap tai khoan
    function load_tk($id_user){
        $sql = "SELECT * FROM taikhoan WHERE id_user = $id_user";
        return pdo_query_one($sql);
    }
    //cap nhap tai khoan
    // function update_tk($name,$email,$address,$tel,$id_user){
    //     $sql="UPDATE taikhoan SET name='$name',email='$email',address='$address',tel='$tel' WHERE id_user = $id_user";
    //     pdo_execute($sql);
    // }
    //cap nhap anh tai khoan
    function update_anh($fileName, $id_user){
        $sql = "UPDATE taikhoan SET img='".$fileName."' WHERE id_user = $id_user";
        pdo_execute($sql);
    }

    
    //danh sach tai khoan
    function loadadd_taikhoan(){
        $sql="SELECT * FROM taikhoan Order by id_user DESC";
        return pdo_query($sql);
    }

    //danh sach tai khoan theo id
    function loadone_taikhoan($id_user){
        $sql="SELECT * FROM taikhoan WHERE id_user = $id_user";
        return pdo_query_one($sql);
    }

    //sua tai khoan
    function updatetk($name,$email,$pass,$address,$tel,$role,$id_user){
        $sql = "UPDATE taikhoan SET name='$name', email='$email', pass='$pass', address='$address',tel='$tel', role='$role' WHERE id_user = $id_user;";
        $sql.= "UPDATE taikhoan SET id_clone = NULL WHERE id_user = $id_user;";
        pdo_execute($sql);
    }

    // xoa tai khoan
    function xoa_User($id_user){
        $sql = "DELETE FROM chitiet_giohang WHERE id_giohang IN (SELECT id_giohang FROM giohang WHERE id_user = $id_user); 
        DELETE FROM rep_bl WHERE id_user = $id_user; 
        DELETE FROM giohang WHERE id_user = $id_user; 
        DELETE FROM binhluan WHERE id_user = $id_user; 
        DELETE FROM taikhoan WHERE id_user = $id_user; ";
        pdo_execute($sql);
        // var_dump($sql);
    }

    //them tai khoan
    function insert_taikhoan($name,$email,$pass){
        $sql = "INSERT INTO taikhoan(name, email, pass) VALUES ('".$name."','".$email."','".$pass."')";
        pdo_execute($sql);
    }

?>