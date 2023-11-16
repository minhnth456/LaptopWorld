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
    $sql = "DELETE FROM danhmuc WHERE id_dm = $iddm";
    $xoadm = pdo_query($sql);
    return $xoadm;
  }
  // load sản phẩm danh mục


  
  //Thêm danh mục chi tiết
  function add_dm_ct($name, $iddm){
    $sql = "INSERT INTO chitiet_danhmuc(name, id_dm) VALUES ('".$name."','".$iddm."')";
    pdo_execute($sql);
  }

  //danh mục thêm sản phẩm
  function chitiet_danhmuc(){
    $sql = "SELECT * FROM chitiet_danhmuc";
    return pdo_query($sql);
  }
?>