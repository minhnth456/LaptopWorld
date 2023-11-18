<?php 
   include "view/header.php";
   include "../model/pdo.php";
   include "../model/danhmuc/danhmuc.php";
   include "../model/taikhoan.php";
   if(isset($_GET['act'])&&($_GET['act']!="")){
      $act=$_GET['act'];
      switch($act){
         // sản phẩm
         case "danhsachsp":
            include "sanpham/adminDssp.php";
            break;

         case "adminAdd":
            include "sanpham/adminAddsp.php";
            break;

         case "suasp":
            include "sanpham/adminSuasp.php";
            break;

         //danh mục
         case "danhmuc":
            include "danhmuc/danhmuc.php";
            break;
            
         case "suadm":
            if(isset($_POST['suadm'])){
               $iddm = $_POST['iddm'];
               $ten = $_POST['tendm'];
               update_dm($ten,$iddm);
               $thongbao ="Bạn đã sửa thành công";
              }
            include "danhmuc/adminSuadm.php";
            break;

         case "adddmuc":
            if(isset($_POST['themdm'])){
                $name = $_POST['name_dm'];
                add_dm($name);
                $thongbao = "Bạn đã thêm danh mục thành công";
            }
            include "danhmuc/adminAddDm.php";
            break;
            
         case "xoadmuc":
            if(isset($_GET['iddm'])&&$_GET['iddm'] >0){
               xoa_dm($_GET['iddm']);
               $thongbao = "Bạn đã xóa danh mục thành công";
               include "danhmuc/danhmuc.php";
           }
           break;

         // tài khoản
         case "taikhoan":
            include "taikhoan/ListUser.php";
            break;
         // trang sua tk
         case "suaUser":
            if(isset($_GET['id_user']) && ($_GET['id_user']) > 0){
               $id_user = $_GET['id_user'];
               $taikhoan = loadone_taikhoan($id_user);
            }
         include "taikhoan/SuaUser.php";
         break;

         case "fixUser":
            if(isset($_POST['fixUser'])){
               $id_user = $_POST['id_user'];
               $name = $_POST['name'];
               $email = $_POST['email'];
               $pass = $_POST['pass'];
               $address = $_POST['address'];
               $tel = $_POST['tel'];
               $role = $_POST['role'];
               update_tk($name,$email,$pass,$address,$tel,$role,$id_user);
               $thongbao ="Bạn đã sửa thành công";
              }
              include "taikhoan/ListUser.php";
            break;

         case "xoaUser":
            if(isset($_GET['id_user'])&&$_GET['id_user'] >0){
               xoa_User($_GET['id_user']);
               $thongbao = "Bạn đã xóa tài khoản thành công";
               include "taikhoan/ListUser.php";
            }
         break;

         // bình luận
         case "binhluan":
            include "binhluan/binhluan.php";
            break;


      }
   }
      include "view/footer.php";
?>