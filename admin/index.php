<?php 
   include "view/header.php";
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
            include "danhmuc/adminSuadm.php";
            break;
         case "adddmuc":
            include "danhmuc/adminAddDm.php";
            break;

         // tài khoản
         case "taikhoan":
            include "taikhoan/adminUser.php";
            break;
         case "suaUser":
            include "taikhoan/updateUser.php";
            break;

         // bình luận
         case "binhluan":
            include "binhluan/binhluan.php";
            break;
      }
   }
      include "view/footer.php";
?>