<?php
//danh sach binh luan
function loadadd_binhluan(){
    $sql="SELECT * FROM binhluan Order by id_bl asc";
    $listbl = pdo_query($sql);
    return $listbl;
}

?>