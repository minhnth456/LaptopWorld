<?php 
ob_start();
session_start();
   include "view/header.php";
   include "../model/pdo.php";
   include "../model/danhmuc/danhmuc.php";
   include "../model/sanpham/sanpham.php";

   if(isset($_GET['act'])&&($_GET['act']!="")){
      $act=$_GET['act'];
      switch($act){
         // sản phẩm

         // danh sách sản phẩm
         case "danhsachsp":
            $loadAll_sp = loadAll_sp(); 
            include "sanpham/adminDssp.php";
            break;
         // trang thêm sản phẩm
         case "adminAdd":
            $danhmuc = danhmuc();
            $chitiet_danhmuc = chitiet_danhmuc();
            include "sanpham/adminAddsp.php";
            break;
         // chức năng thêm sản phẩm
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
               $id_dmc = $_POST['id_dmc'];

               $targetDir = "../img/sanpham/";
               $tempFile = $_FILES['hinh']['tmp_name'];
               $fileName = $_FILES['hinh']['name'];
               $targetFile = $targetDir . $fileName;
               $imgType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
               $allow = array("jpg","jpeg","png","gif");
               if(in_array($imgType,$allow)){
                  move_uploaded_file($tempFile,$targetFile);
               }
               themsp($tensp, $mota, $danhmuc, $cpu, $ram, $ssd, $cardVGA, $giasp, $soluong, $id_dmc, $fileName);
            }
            $loadAll_sp = loadAll_sp(); 
            include "sanpham/adminDssp.php";
            break;
         // trang sửa sản phẩm
         case "suasp":
            $danhmuc = danhmuc();
            if(isset($_GET['id_pro']) && ($_GET['id_pro']) != ""){
               $id_pro = $_GET['id_pro'];
               $loadOne_sp = loadOne_sp($id_pro);
            }
            include "sanpham/adminSuasp.php";
            break;

         // chức năng sửa sản phẩm
         case "adminSuasp":
            if(isset($_POST['adminSuasp'])){
               $id_pro = $_POST['id_pro'];
               $tensp = $_POST['tensp'];
               $id_dm = $_POST['id_dm'];
               $mota = $_POST['mota'];
               suasp($id_pro, $tensp, $id_dm, $mota);
            }
            $loadAll_sp = loadAll_sp(); 
            header('location: index.php?act=danhsachsp');

         // chức năng xóa sản phẩm
         case "xoasp":
            if(isset($_GET['id']) && $_GET['id'] != ""){
               $id = $_GET['id'];
               xoasp($id);
            }
            $loadAll_sp = loadAll_sp(); 
            include "sanpham/adminDssp.php";
            break;
         // hiển thị trang thêm cấu hình
         case "cauhinh":
            if(isset($_GET['id_pro']) && $_GET['id_pro'] != ""){
               $id_pro = $_GET['id_pro'];
               // load toàn bộ chi tiết cấu hình
               $loadAll_ctch = loadAll_ctch($id_pro);
               // load danh mục con liên quan đến sản phẩm
               $chitiet_danhmuc_con = chitiet_danhmuc_con($id_pro);
            }
            include "sanpham/cauhinh.php";
            break;
         // chức năng thêm cấu hình cho sản phẩm
         case "themch":
            if(isset($_POST['themch'])){
               $cpu = $_POST['cpu'];
               $ram = $_POST['ram'];
               $ssd = $_POST['ssd'];
               $cardVGA = $_POST['cardVGA'];
               $giasp = $_POST['giasp'];  
               $soluong = $_POST['soluong'];
               $id_pro = $_POST['id_pro'];
               $id_dmc = $_POST['id_dmc'];
               themch($cpu, $ram, $ssd, $cardVGA, $giasp, $soluong, $id_pro, $id_dmc);
            }
            header('location: index.php?act=cauhinh&id_pro='.$id_pro);
            break;

         // trang sửa cấu hình sản phẩm
         case "suacauhinh":
            if(isset($_GET['id_chitiet']) && ($_GET['id_chitiet']) != ""){
               $id_chitiet = $_GET['id_chitiet'];
               $loadOne_ctch = loadOne_ctch($id_chitiet);
               $chitiet_danhmuc_con2 = chitiet_danhmuc_con2($id_chitiet);
            }
            include "sanpham/suacauhinh.php";
            break;

         // chức năng sửa cấu hình
         
         case "fixch":
            if(isset($_POST['fixch'])){
               $id_pro = $_POST['id_pro'];
               $id_chitiet = $_POST['id_chitiet'];
               $cpu = $_POST['cpu'];
               $ram = $_POST['ram'];
               $ssd = $_POST['ssd'];
               $cardVGA = $_POST['cardVGA'];
               $giasp = $_POST['giasp'];
               $soluong = $_POST['soluong'];
               $id_dmc = $_POST['id_dmc'];
               suactch($id_chitiet, $cpu, $ram, $ssd, $giasp, $soluong, $cardVGA, $id_dmc);
            }
            header('location: index.php?act=cauhinh&id_pro='.$id_pro);
            break;

         // trang thêm ảnh sản phẩm
         case "themanh":
            if(isset($_GET['id_pro']) && ($_GET['id_pro']) != ""){
               $id_pro = $_GET['id_pro'];
               $allAnhsp = allAnhsp($id_pro);
            }
            include "sanpham/themanh.php";
            break;

         // chức năng thêm ảnh sản phẩm
         case "themanhsp":
            if(isset($_POST['themanhsp'])){
               $id_pro = $_POST['id_pro'];

               $targetDir = "../img/sanpham/";
               $allowedTypes = array("jpg","jpeg","png","gif");
               // dùng vòng lặp để upload nhiều ảnh 
               foreach ($_FILES['hinh']['name'] as $key => $value) {
                  $fileName = basename($_FILES['hinh']['name'][$key]);
                  $targetFilePath = $targetDir . $fileName;
                  $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
              
                  if (in_array($fileType, $allowedTypes)) {
                     // Thực hiện thêm ảnh vào bảng anh_sp
                     themanhsp($fileName, $id_pro);
                     // Di chuyển file ảnh vào thư mục lưu trữ
                     move_uploaded_file($_FILES['hinh']['tmp_name'][$key], $targetFilePath);
                  }
               }
               
               
            }
            header('location: index.php?act=themanh&id_pro='.$id_pro);
            break;
         
         // trang sửa ảnh sản phẩm
         case "suaanh":
            if(isset($_GET['id']) && ($_GET['id']) != ""){
               $id = $_GET['id'];
            }
            if(isset($_GET['id_pro']) && ($_GET['id_pro']) != ""){
               $id_pro = $_GET['id_pro'];
            }
            include "sanpham/suaanh.php";
            break;
         
         // chức năng sửa ảnh sản phẩm
         case "fixanh":
            if(isset($_POST['fixanh'])){
               $id = $_POST['id'];
               $id_pro = $_POST['id_pro'];

               $targetDir = "../img/sanpham/";
               $tempFile = $_FILES['hinh']['tmp_name'];
               $fileName = $_FILES['hinh']['name'];
               $targetFile = $targetDir . $fileName;
               $imgType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
               $allow = array("jpg","jpeg","png","gif");
               if(in_array($imgType,$allow)){
                  move_uploaded_file($tempFile,$targetFile);
               }
               suaanhsp($fileName, $id);
            }
            header('location: index.php?act=themanh&id_pro='.$id_pro);
            break;



         // end sản phẩm

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
            header("location: index.php?act=chitietdm&iddm=".$iddm);
            break;
         case "addctdanhmuc":
            if(isset($_POST['themctdm'])){
               $iddm = $_POST['iddm'];
               $name = $_POST['name_dm_ct'];
               add_dm_ct($name, $iddm);
            }
            include "danhmuc/chitietDm.php";
            break;
         case "suadm_ct":
            if(isset($_POST['suadmct'])){
               $iddm = $_POST['idchitietdm'];
               $ten = $_POST['tendmct'];
               sua_dmct($ten,$iddm);
               $thongbao ="Bạn đã sửa thành công";
<<<<<<< HEAD
            }
=======
               }
>>>>>>> 1db36efed918f7d8b9c0c03af0f71a744c3c7a3c
               // Thêm phần này
            include "danhmuc/adminChitietSuadm.php";
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

         default:
            include "view/home.php";
            break;
      }
   } else {
      include "view/home.php";
   }
   include "view/footer.php";
?>