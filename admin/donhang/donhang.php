<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $current_time_in_vietnam = new DateTime();
    //thời gian
    $real_time = $current_time_in_vietnam->format('H:i d-m-Y');
?>
<div class="container" style="padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Clone</th>
                <th scope="col">Tên</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Ngày dặt hàng</th>
                <th scope="col" style="max-width:120px;">Phương thức thanh toán</th>
                <th scope="col" style="max-width:120px;">Ghi chú</th>
                <th scope="col" style="max-width:180px;">Trạng thái</th>
                <th scope="col">Tổng tiền</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($loadAllHoaDon as $a): ?>
            <?php 
                //trạng thái đơn hàng
                $tt = get_ttdh($a['trangthai']);
                //phương thức thanh toán
                $pttt = get_pttt($a['pttt']);
            ?>
            <form action="index.php?act=capnhat_trangthai" method="post">
                <tr>
                    <!-- id hóa đơn -->
                    <input type="hidden" name="id_hoadon" value="<?php echo $a['id_hoadon'] ?>">
                    <input type="hidden" name="real_time" value="<?php echo $real_time; ?>">
                    <td><?php echo $a['id_hoadon'] ?></td>
                    <!-- id acc clone  -->
                    <td style="color:red; font-weight: bold;"><?php echo $a['id_clone'] ?></td>
                    <th scope="row"><?php echo $a['nn_name'] ?></th>
                    <th scope="row"><?php echo $a['nn_address'] ?></th>
                    <th scope="row"><?php echo $a['nn_tel'] ?></th>
                    <th scope="row"><?php echo $a['nn_email'] ?></th>
                    <th scope="row"><?php echo $a['date'] ?></th>
                    <!-- phương thức thanh toán  -->
                    <th scope="row" style="max-width:120px;"><?php echo $pttt ?></th>
                    <th scope="row" style="max-width:120px;"><?php echo $a['ghichu'] ?></th>
                    <th scope="row"><?php echo $a['tongtien_vn'] ?>đ</th>
                    <!-- trạng thái  -->
                    <th scope="row" style="max-width:180px;">
                        <select class="form-select form-select-lg mb-3" style="font-size: 1rem;" aria-label="Large select example" name="tt">
                            <?php for($i=0; $i < 5; $i++){ ?>
                                <!-- chọn trạng thái trùng trên CSDL -->
                                <?php if ($i == $a['trangthai']){ ?>
                                    <option value="<?php echo $a['trangthai'] ?>" selected><?php echo $tt ?></option>
                                <!-- Không thể lùi trạng thái || Nếu chưa xác nhận thì người dùng và admin đều có thể hủy đơn  -->
                                <?php } elseif (($i < $a['trangthai']) && ($a['trangthai'] > 1)){ ?>
                                    <option value="<?php echo $i ?>" disabled><?php echo get_ttdh($i); ?></option>
                                <!-- Đơn hàng bị hủy không thể xác nhận, giao hàng, ... -->
                                <?php } elseif ($a['trangthai'] == 0){ ?>
                                    <option value="<?php echo $i ?>" disabled><?php echo get_ttdh($i); ?></option>
                                <!-- chọn như bình thường -->
                                <?php } else{ ?>
                                    <option value="<?php echo $i ?>"><?php echo get_ttdh($i); ?></option>
                            <?php } }?>
                        </select>
                    </th>
                    <!-- chức năng  -->
                    <th scope="row" style="max-width: 155px;">
                        <a type="button" class="btn btn-danger" href="index.php?act=chitietHD&id_hoadon=<?php echo $a['id_hoadon'] ?>" style="margin-bottom: 5px">Chi tiết</a>
                        <button type="submit" class="btn btn-danger" name="capnhat_trangthai">Cập nhật</button>
                    </th>
                </tr>
            </form>
            <?php endforeach; ?>
        
        </tbody>
    </table>
</div>