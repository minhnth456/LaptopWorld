<?php 
   include "view/header.php";
   include "../model/pdo.php";
   include "../model/danhmuc/danhmuc.php";
   include "../model/sanpham/sanpham.php";
   if(isset($_GET['act'])&&($_GET['act']!="")){
      $act=$_GET['act'];
      switch($act){
         // sản phẩm
         case "danhsachsp":
            $loadAll_sp = loadAll_sp(); 
            include "sanpham/adminDssp.php";
            break;
         case "adminAdd":
            $danhmuc = danhmuc();
            $chitiet_danhmuc = chitiet_danhmuc();
            include "sanpham/adminAddsp.php";
            break;
         case "themsp":
            $danhmuc = danhmuc();
            $chitiet_danhmuc = chitiet_danhmuc();
            if(isset($_POST['themsp'])){
               $tensp = $_POST['tensp'];
               $cpu = $_POST['cpu'];
               $ram = $_POST['ram'];
               $ssd = $_POST['ssd'];
               $cardVGA = $_POST['cardVGA'];
               $giasp = $_POST['giasp'];  
               $soluong = $_POST['soluong'];
               $mota = $_POST['mota'];
               $danhmuc = $_POST['danhmuc'];
               $danhmuc_con = $_POST['danhmuc_con'];

               $targetDir = "../img/sanpham/";
               $tempFile = $_FILES['hinh']['tmp_name'];
               $fileName = $_FILES['hinh']['name'];
               $targetFile = $targetDir . $fileName;
               $imgType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
               $allow = array("jpg","jpeg","png","gif");
               if(in_array($imgType,$allow)){
                  move_uploaded_file($tempFile,$targetFile);
               }
               themsp($tensp, $mota, $danhmuc, $cpu, $ram, $ssd, $cardVGA, $giasp, $soluong, $danhmuc_con, $fileName);
               $thongbao = "them sp thanh cong";
            }
            $loadAll_sp = loadAll_sp(); 
            include "sanpham/adminDssp.php";
            break;
         case "suasp":
            include "sanpham/adminSuasp.php";
            break;
         case "xoasp":
            if(isset($_GET['id']) && $_GET['id'] != ""){
               $id = $_GET['id'];
               xoasp($id);
            }
            $loadAll_sp = loadAll_sp(); 
            include "sanpham/adminDssp.php";
            break;
         case "cauhinh":
            if(isset($_GET['id_pro']) && $_GET['id_pro'] != ""){
               $id_pro = $_GET['id_pro'];
            }
            include "sanpham/cauhinh.php";
            break;
         case "themch":
            if(isset($_POST['themch'])){
               $cpu = $_POST['cpu'];
               $ram = $_POST['ram'];
               $ssd = $_POST['ssd'];
               $cardVGA = $_POST['cardVGA'];
               $giasp = $_POST['giasp'];  
               $soluong = $_POST['soluong'];
               $id_pro = $_POST['id_pro'];
               themch($cpu, $ram, $ssd, $cardVGA, $giasp, $soluong, $id_pro);
            }
            include "sanpham/cauhinh.php";
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
         // chi tiết danh mục
         case "chitietdm":
            if(isset($_GET['iddm']) && ($_GET['iddm']) > 0){
               $iddm = $_GET['iddm'];
            }
            include "danhmuc/chitietDm.php";
            break;
         case "addctdanhmuc":
            if(isset($_POST['themctdm'])){
               $iddm = $_POST['iddm'];
               $name = $_POST['name_dm_ct'];
               add_dm_ct($name, $iddm);
            }
            include "danhmuc/chitietDm.php";
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