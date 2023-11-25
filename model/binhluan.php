<?php

// chức năng bình luận
function binhluan($noidung, $id_pro, $ngaybinhluan, $id_user){
    $sql = "INSERT INTO binhluan(noidung, id_pro, ngaybinhluan, id_user) VALUES ('".$noidung."', '".$id_pro."', '".$ngaybinhluan."', '".$id_user."')";
    pdo_execute($sql);
}

// load tất cả bình luận
function loadAllBl($id_pro){
    $sql = "SELECT * FROM binhluan as bl INNER JOIN taikhoan as tk on bl.id_user = tk.id_user WHERE id_pro = $id_pro ORDER BY bl.id_bl DESC";
    return pdo_query($sql);
}

// load tất cả trả lời bình luận

function loadAllRepBl($id_bl){
    $sql = "SELECT tk.name, rbl.noi_dung, rbl.date, tk.img FROM rep_bl as rbl INNER JOIN binhluan as bl ON rbl.id_bl = bl.id_bl INNER JOIN taikhoan as tk ON rbl.id_user = tk.id_user WHERE bl.id_bl = $id_bl;";
    return pdo_query($sql);
}

// chức năng trả lời bình luận
function repCom($noi_dung, $date, $id_user, $id_bl){
    $sql = "INSERT INTO rep_bl(noi_dung, date, id_user, id_bl) VALUES ('".$noi_dung."', '".$date."', '".$id_user."', '".$id_bl."')";
    pdo_execute($sql);
}

?>