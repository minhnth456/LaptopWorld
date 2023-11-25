<div class="container" style="padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Tổng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($loadAllHoaDonCT as $a): ?>
            <tr>
                <td><?php echo $a['id_cthoadon'] ?></td>
                <th scope="row"><img width="100px" src="../img/sanpham/<?php echo $a['img_sp'] ?>" alt="" /></th>
                <th scope="row"><?php echo $a['tensp'] ?></th>
                <th scope="row"><?php echo $a['giasp'] ?></th>
                <th scope="row"><?php echo $a['soluong'] ?></th>
                <th scope="row"><?php echo $a['total_vn'] ?>đ</th>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>