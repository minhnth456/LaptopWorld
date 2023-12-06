<div class="container" style="padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">tên danh mục</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $list_dm = danhmuc();
                foreach($list_dm as $select_dm){ ?>
            <tr>
                <th scope="row"><?php echo $select_dm['id_dm'] ?></th>
                <th scope="row"><?php echo $select_dm['name'] ?></th>
                <th scope="row">
                    <a class="btn btn-danger" href="index.php?act=suadm&&iddm=<?php echo $select_dm['id_dm'] ?>">Sửa</a>
                    <a class="btn btn-danger" href="index.php?act=chitietdm&&iddm=<?php echo $select_dm['id_dm'] ?>">Chi tiết</a>
                    <a class="btn btn-dark" href="index.php?act=xoadmuc&&iddm=<?php echo $select_dm['id_dm'] ?>"
                        onclick="return confirm('Bạn muốn  danh mục sản phẩm không?')">Xóa</a>
                </th>
            </tr>
            <?php }?>

        </tbody>
    </table>
</div>