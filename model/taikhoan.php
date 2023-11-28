<?php
//dang ki
// function insert_taikhoan($name,$email,$pass){
//     $sql = "INSERT INTO taikhoan(name, email, pass) VALUES ('".$name."','".$email."','".$pass."')";
//     pdo_execute($sql);
// }
//dang nhap
// function checkuser($name,$pass){
//     $sql="SELECT * FROM taikhoan where name = '$name' and pass = '$pass'";
//     $sp = pdo_query_one($sql);
// }

//danh sach tai khoan
// function loadadd_taikhoan(){
//     $sql="SELECT * FROM taikhoan Order by id_user asc";
//     $listtaikhoan = pdo_query($sql);
//     return $listtaikhoan;
// }

// //danh sach tai khoan theo id
// function loadone_taikhoan($id_user){
//   $sql="SELECT * FROM taikhoan WHERE id_user = $id_user";
//   return pdo_query_one($sql);

// }

// //sua tai khoan
// function update_tk($name,$email,$pass,$address,$tel,$role,$id_user){
//     $sql = "UPDATE taikhoan SET name='$name', email='$email', pass='$pass', address='$address',tel='$tel', role='$role' WHERE id_user = $id_user";
//     $suaUser = pdo_query($sql);
//     return $suaUser;
//   }

//   function xoa_User($id_user){
//     $sql = "DELETE FROM `taikhoan` WHERE id_user = $id_user";
//     $xoaUser = pdo_query($sql);
//     return $xoaUser;
//   }
?>