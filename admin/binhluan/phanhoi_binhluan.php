<div class="container" style="padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nội dung bình luận</th>
                <th scope="col">Ngày bình luận</th>
                <th scope="col">Id_user</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($listbl as $binhluan){ 
            ?>
            <tr>
                <th scope="row"><?php echo $binhluan['id_repbl']?></th>
                <th scope="row"><?php echo $binhluan['noi_dung']?></th>
                <th scope="row"><?php echo $binhluan['date']?></th>
                <th scope="row"><?php echo $binhluan['id_user']?></th>
                <th scope="row">
                    <a class="btn btn-danger" href="index.php?act=xoa_repbl&id_repbl=<?php echo $binhluan['id_repbl'] ?>&id_bl=<?php echo $binhluan['id_bl'] ?>" onclick="return confirm('Bạn muốn xóa bình luận này?')">Xóa</a>
                </th>

            </tr>
            <?php }?>
        </tbody>
    </table>
</div>