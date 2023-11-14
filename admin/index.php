<?php 
   include "header.php";
   if(isset($_GET['act'])&&($_GET['act']!="")){
      $act=$_GET['act'];
      switch($act){
         case "danhsachsp":
            include "adminDssp.php";
            break;
         case "adminAdd":
            include "adminAddsp.php";
            break;
         case "binhluan":
            include "binhluan.php";
            break;
      }
   }
      include "footer.php";
?>