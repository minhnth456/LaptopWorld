<div class="container" style="padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col" style="width: auto;">Danh mục</th>
                <th scope="col" style="text-algin:center;">Sản phẩm</th>
                <th scope="col" style="text-align: center">Số lượt xem sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1; 
            ?>
            <?php
            $load_sp =select_top10();
            foreach($load_sp as $row):
            $load_dm = load_dm($row['id_dmc']);

            ?>
            <tr style="line-height: 74px;border-bottom: 1px solid #e0e4e7;">
                <!-- Số thứ tự hóa đơn -->
                <td>
                    <?php echo $i ?>
                </td>
                <!-- Danh mục -->
                <td style="width: auto;">
                    <?php echo $load_dm[0]['name']; ?>
                </td>
                <!-- Sản phẩm đã bán -->
                <td style="float: left">
                    <a href=""><img style="width: 80px" src="../img/sanpham/<?php echo $row['img'] ?>" alt="" /></a>
                    <a href="../index.php?act=chitietsanpham&id_chitiet=<?php echo $row['id_chitiet']; ?>&id_pro=<?php echo $row['id_pro']; ?>"
                        style="text-algin:center">[New Outlet] <?php echo $row['tensp'] ?>
                        (<?php echo $row['cpu'] ?>,
                        <?php echo $row['ram'] ?>, <?php echo $row['ssd'] ?>, <?php echo $row['cardVGA'] ?>)</a>
                </td>
                <!-- Số lượng -->
                <td style="text-align: center">
                    <?php echo $row['luotxem'] ?>
                </td>
                <!-- Doanh thu -->

            </tr>
            <?php 
            $i++;
            ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>