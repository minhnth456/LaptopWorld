<div class="container" style="padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col" style="max-width: 120px">Danh mục</th>
                <th scope="col" style="text-algin:center;">Sản phẩm đã bán</th>
                <th scope="col" style="text-align: center">Số lượng</th>
                <th scope="col">Doanh thu</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i = 1; 
            $tong_sluong = 0;
            $tong_doanhthu = 0;
            ?>
            <?php foreach ($sanpham_daban as $a): ?>
            <tr style="line-height: 74px;border-bottom: 1px solid #e0e4e7;">
                <!-- Số thứ tự hóa đơn -->
                <td>
                    <?php echo $i ?>
                </td>
                <!-- Danh mục -->
                <td style="max-width: 120px">
                    <?php echo $a['name'] ?>
                </td>
                <!-- Sản phẩm đã bán -->
                <td style="float: left">
                    <img style="width: 80px" src="../img/sanpham/<?php echo $a['img_sp'] ?>" alt="" />
                    <span style="text-algin:center"><?php echo $a['tensp'] ?></span>
                </td>
                <!-- Số lượng -->
                <td style="text-align: center">
                    <?php echo $a['tong_soluong'] ?>
                </td>
                <!-- Doanh thu -->
                <td><?php
                $gia = $a['giasp2'] * $a['tong_soluong'];
                $giasp = number_format($gia, 0, ',', '.');
                
                   echo $giasp ?>đ</td>
                <!-- Chức năng tính tổng -->
                <?php 
                $giatien = $gia;
                $giatien = str_replace(".", "", $giatien);
                $giatien = str_replace("đ", "", $giatien);
                $gia_vn = intval($giatien);
                ?>
            </tr>
            <?php 
            $i++;
            $tong_sluong += $a['tong_soluong'];
            $tong_doanhthu += $gia_vn;
            $tienVN = number_format($tong_doanhthu, 0, ',', '.');
            ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!--  Tổng SỐ lượng bán được -->
    <div class="form" style="margin-left:67%;padding:20px">
        <div class="tongsl">
            <span style="font-size:19px; color:green; font-weight:bold">Tổng sản phẩm bán được: </span>
            <span style="font-weight:bold;"><?php echo $tong_sluong ?> Sản phẩm</span>
        </div>
        <div class="tongdthu">
            <span style="font-size:19px;color:green;font-weight:bold">Tổng doanh thu :</span>
            <span style="font-weight:bold;"><?php echo $tienVN ?> VND</span>
        </div>
    </div>


</div>