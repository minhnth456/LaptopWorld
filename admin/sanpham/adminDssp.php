<div class="container" style="padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Tên</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Yêu thích</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($loadAll_sp as $a): ?>
            <?php
                $id_pro = $a['id_pro'];
                $anh = anhsp($id_pro);  
                extract($anh);  
            ?>
            
            <tr>
                <td><?php echo $i ?></td>
                <th scope="row"><?php echo $a['tensp'] ?></th>
                <th scope="row">
                    <img width="100px" src="../img/sanpham/<?php echo $img ?>" alt="" />
                </th>
                <th scope="row" style="max-height: 100px; max-width: 300px;"><?php echo $a['mota'] ?></th>
                <th scope="row"><?php echo $a['name'] ?></th>
                <th scope="row"><?php echo $a['yeuthich'] ?></th>
                <th scope="row" style="max-width: 155px;">
                    <a type="button" class="btn btn-danger" href="index.php?act=suasp&id_pro=<?php echo $a['id_pro']; ?>" style="margin-bottom: 5px">Sửa</a>
                    <a type="button" class="btn btn-danger" href="index.php?act=cauhinh&id_pro=<?php echo $a['id_pro']; ?>" style="margin-bottom: 5px">Cấu hình</a>
                    <a type="button" class="btn btn-danger" href="index.php?act=themanh&id_pro=<?php echo $a['id_pro']; ?>" style="margin-bottom: 5px">Thêm ảnh</a>
                    <a class="btn btn-dark" href="index.php?act=xoasp&id=<?php echo $a['id_pro']; ?>" style="margin-bottom: 5px" onclick="return confirm('Bạn muốn xóa sản phẩm không?')">Xóa</a>
                </th>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>