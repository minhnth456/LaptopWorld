<div class="container" style="padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Nội dung bình luận</th>
                <th scope="col">ảnh sản phẩm</th>
                <th scope="col">Ngày bình luận</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $listbl=loadadd_binhluan(); 
                foreach($listbl as $binhluan){ 
            ?>
            <tr>
                <th scope="row"><?php echo $taikhoan['id_bl']?></th>
                <th scope="row"><?php echo $taikhoan['noidung']?></th>
                <th scope="row"><?php echo $taikhoan['id_pro']?></th>
                <th scope="row"><?php echo $taikhoan['ngaybinhluan']?></th>
                <th scope="row"><?php echo $taikhoan['id_user ']?></th>
                <th scope="row">
                    <a class="btn btn-dark" href="index.php?act=binhluan&id_bl=<?php echo $bl['id_bl'] ?>"
                        onclick="return confirm('Bạn muốn xóa bình luận sản phẩm không?')">Xóa</a>
                </th>

            </tr>
            <?php }?>
        </tbody>
    </table>
</div>