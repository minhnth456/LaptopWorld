<?php 
  // Hiển thị all danh mục
  function danhmuc(){
    $sql = "SELECT * FROM danhmuc";
    $list_dm = pdo_query($sql);
    return $list_dm;
  }
  // Hiển thi 1 danh mục
  function load1dm($iddm){
    $sql = "SELECT * FROM danhmuc WHERE id_dm = $iddm";
    $select_one = pdo_query($sql);
    return $select_one;
  }
  //Thêm danh mục
  function add_dm($name){
    $sql = "INSERT INTO danhmuc(name) VALUES ('$name')";
    $them_dm = pdo_query($sql);
    return $them_dm;
  }
  // sửa danh mục
  function update_dm($ten,$iddm){
    $sql = "UPDATE danhmuc SET name='$ten' WHERE id_dm = $iddm";
    $sua_dm = pdo_query($sql);
    return $sua_dm;
  }
  function xoa_dm($iddm){
    $sql = "DELETE FROM chitiet_sanpham
      WHERE id_pro IN (SELECT id_pro FROM sanpham WHERE id_dm IN (SELECT id_dm FROM chitiet_danhmuc WHERE id_dm = $iddm));
       
      DELETE FROM anh_sp
      WHERE id_pro IN (SELECT id_pro FROM sanpham WHERE id_dm IN (SELECT id_dm FROM chitiet_danhmuc WHERE id_dm = $iddm));
       
      DELETE FROM sanpham WHERE id_dm IN (SELECT id_dm FROM chitiet_danhmuc WHERE id_dm = $iddm);
       
      DELETE FROM chitiet_danhmuc WHERE id_dm = $iddm;
      DELETE FROM danhmuc WHERE id_dm = $iddm;";
    $xoadm = pdo_query($sql);
    return $xoadm;
  }
  function xoa_dm_ct($iddm){
    $sql = 
      "DELETE FROM chitiet_sanpham
      WHERE id_pro IN (SELECT id_pro FROM sanpham WHERE id_dm IN (SELECT id_dm FROM chitiet_danhmuc WHERE id = $iddm));
       
      DELETE FROM anh_sp
      WHERE id_pro IN (SELECT id_pro FROM sanpham WHERE id_dm IN (SELECT id_dm FROM chitiet_danhmuc WHERE id = $iddm));
       
      DELETE FROM sanpham WHERE id_dm IN (SELECT id_dm FROM chitiet_danhmuc WHERE id = $iddm);
       
      DELETE FROM chitiet_danhmuc WHERE id = $iddm;";
    pdo_query($sql);
}
  // load sản phẩm danh mục
  function load_danhmucCt($iddmct){
    $sql ="SELECT chitiet_danhmuc.name as brand_con, chitiet_danhmuc.id, danhmuc.name FROM `chitiet_danhmuc` INNER JOIN `danhmuc` ON chitiet_danhmuc.id_dm = danhmuc.id_dm WHERE chitiet_danhmuc.id_dm = $iddmct";
    $load_all_dmct = pdo_query($sql);
    return $load_all_dmct;
  }


  
  //Thêm danh mục chi tiết
  function add_dm_ct($name, $iddm){
    $sql = "INSERT INTO chitiet_danhmuc(name, id_dm) VALUES ('".$name."','".$iddm."')";
    pdo_execute($sql);
  }
  function load_one_dmct($iddm){
    $sql = "SELECT * FROM `chitiet_danhmuc` WHERE id_dm = $iddm";
    $load_dmct = pdo_query($sql);
    return $load_dmct;
  }
  function sua_dmct($name,$idctdanhmuc){
    $sql = "UPDATE chitiet_danhmuc SET name='$name' WHERE id = $idctdanhmuc";
    $update_dmct = pdo_query($sql);
    return $update_dmct;
  }
  function hienthi_dmct($idctdanhmuc){
    $sql = "SELECT * FROM `chitiet_danhmuc` WHERE id = $idctdanhmuc";
    $chitiet_dm = pdo_query($sql);
    return $chitiet_dm;
  }



  //danh mục con của thêm sản phẩm
  function chitiet_danhmuc(){
    $sql = "SELECT * FROM chitiet_danhmuc ORDER BY id_dm";
    return pdo_query($sql);
  }

  // danh mục con của "thêm cấu hình sản phẩm" theo ID danh mục thông qua ID sản phẩm (load danh mục con liên quan đến sản phẩm)
  function chitiet_danhmuc_con($id_pro){
    $sql = "SELECT * FROM chitiet_danhmuc WHERE id_dm = (SELECT id_dm FROM `sanpham` WHERE id_pro = $id_pro)";
    return pdo_query($sql);
  }

  // danh mục con của "sửa chi tiết cấu hình"
  function chitiet_danhmuc_con2($id_chitiet){
    $sql = "SELECT * FROM chitiet_danhmuc WHERE id_dm = (SELECT id_dm FROM `sanpham` WHERE id_pro = (SELECT id_pro FROM `chitiet_sanpham` WHERE id_chitiet = $id_chitiet))";
    return pdo_query($sql);
  }

  // lấy tất cả id danh mục chi tiết (thực hiện chức năng trong thống kê)
  function get_all_id_dmc(){
    $sql = "SELECT id FROM chitiet_danhmuc";
    return pdo_query($sql);
  }

?>