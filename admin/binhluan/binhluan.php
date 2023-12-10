<div class="container" style="padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nội dung bình luận</th>
                <th scope="col">Id_pro</th>
                <th scope="col">Ngày bình luận</th>
                <th scope="col">Id_user</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $listbl=load_Allbl(); 
                foreach($listbl as $binhluan){ 
            ?>
            <tr>
                <th scope="row"><?php echo $binhluan['id_bl']?></th>
                <th scope="row"><?php echo $binhluan['noidung']?></th>
                <th scope="row"><?php echo $binhluan['id_pro']?></th>
                <th scope="row"><?php echo $binhluan['ngaybinhluan']?></th>
                <th scope="row"><?php echo $binhluan['id_user']?></th>
                <th scope="row">
                    <a class="btn btn-primary" href="index.php?act=phanhoi_binhluan&id_bl=<?php echo $binhluan['id_bl'] ?>">Xem phản hồi</a>
                    <a class="btn btn-danger" href="index.php?act=xoaBl&id_bl=<?php echo $binhluan['id_bl'] ?>" onclick="return confirm('Bạn muốn xóa bình luận sản phẩm không?')">Xóa</a>
                </th>

            </tr>
            <?php }?>
        </tbody>
    </table>
</div>