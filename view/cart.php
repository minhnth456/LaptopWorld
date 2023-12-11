        <!-- Start Cart -->
        <?php
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $current_time_in_vietnam = new DateTime();
            //thời gian
            $real_time = $current_time_in_vietnam->format('H:i d-m-Y');
        ?>
        <form action="index.php?act=capnhatgiohang" method="post" enctype="application/x-www-form-urlencoded">
            <div class="bang_sanpham pt-4">
                <table class="table pt-4" style="width: 1200px; margin: auto; border: 1px solid #cccccc;">
                    <thead>
                        <tr>
                            <th scope="col" class="border-1">STT</th>
                            <th scope="col" class="border-1">Tên sản phẩm</th>
                            <th scope="col" class="border-1">Giá</th>
                            <th scope="col" class="border-1">Số lượng</th>
                            <th scope="col" class="border-1">Tổng</th>
                            <th scope="col" class="border-1" style="width: 60px; text-align: center;">Xóa</th>
                        </tr>
                    </thead>

                    <tbody id="body-cart">
                        
                        <?php $i=0; ?>
                        <?php foreach($loadAllGioHangCT as $a): ?>
                        <tr onmouseover="tinhtongtien()">
                            <!-- lấy id_chitiet -->
                            <input type="hidden" name="id_chitiet_<?php echo $i ?>"
                                value="<?php echo $a['id_chitiet'] ?>">
                            <!-- lấy id_ctgiohang của từng sản phẩm -->
                            <input type="hidden" name="id_ctgiohang_<?php echo $i ?>"
                                value="<?php echo $a['id_ctgiohang'] ?>">
                            <!-- số thứ tự -->
                            <th class="border-1" scope="row"><?php echo ($i+1) ?></th>
                            <!-- ảnh sản phẩm và tên sản phẩm -->
                            <input type="hidden" name="img_sp_<?php echo $i ?>" value="<?php echo $a['img_spct'] ?>">
                            <input type="hidden" name="tensp_<?php echo $i ?>" value="<?php echo $a['tensp'] ?>">
                            <td class="border-1" style="width: 750px;">
                                <div class="img_cart" style="display: flex; align-items: center;">
                                    <img src="./img/sanpham/<?php echo $a['img_spct'] ?>" width="80px" alt="" />
                                    <div class="text_cart" style="margin-left: 20px;"><a
                                            href="index.php?act=chitietsanpham&id_chitiet=<?php echo $a['id_chitiet'] ?>&id_pro=<?php echo $a['id_pro'] ?>"><?php echo $a['tensp'] ?></a>
                                        <div class="baohanh">
                                            Bảo hành 12 tháng
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <!-- giá sản phẩm -->
                            <input type="hidden" name="giasp_<?php echo $i ?>" value="<?php echo $a['giasp2'] ?>">
                            <td id="gia-<?php echo $a['id_ctgiohang'] ?>" class="border-1"><?php echo $a['giasp'] ?>
                            </td>
                            <!-- tăng giảm số lượng sản phẩm -->
                            <td class="border-1">
                                <div class="number" style="display: flex;">
                                    <button type="button" class="btn btn-link px-2"
                                        onclick="decrement('<?php echo $a['id_ctgiohang'] ?>')">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input id="soluongsp-<?php echo $a['id_ctgiohang'] ?>" style="width: 50px;"
                                        id="form1" min="1" name="quantity_<?php echo $i ?>"
                                        value="<?php echo $a['soluong'] ?>" type="number"
                                        class="form-control form-control-sm" />
                                    <button type="button" class="btn btn-link px-2"
                                        onclick="increment('<?php echo $a['id_ctgiohang'] ?>')">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </td>
                            <!-- tổng tiền dựa theo giá và số lượng  -->
                            <td id="tongtien" class="border-1"><?php echo $a['total_vn'] ?> đ</td>
                            <!-- xóa sản phẩm -->
                            <td>
                                <a href="index.php?act=xoasp&id_ctgiohang=<?php echo $a['id_ctgiohang'] ?>"><img
                                        style="margin-left: 10px;" src="./img/icon_cart_del.png"></a>
                            </td>

                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="border-1" colspan="2"></td>
                            <td class="border-1" colspan="4">
                                <!-- tổng tiền vn -->
                                <h3 style="font-weight: bold; font-size: 16px;">Tổng cộng : <input id="tongcong"
                                        name="tongtien_vn" type="text" value="" disabled
                                        style="outline: none; border: none; background: #fff; width:auto;"></h3>
                                <div style="color: red; font-weight: bold;" class="thanhtoan">Thanh toán: <input
                                        id="thanhtoan" type="text" value="" disabled
                                        style="outline: none; border: none; background: #fff; width:auto;"></div>
                            </td>
                        </tr>
                    </tfoot>

                </table>
            </div>
            <!-- End cart -->
            <div class="tieptuc_mua" style="width: 1200px; margin: auto; padding: 20px 0;">
                <button type="button" name="capnhatgiohang" class="btn btn-primary" style="margin-left: 86.8%;"><a
                        style="color: white; text-decoration: none;" href="index.php">Tiếp tục mua hàng</a></button>
            </div>

            <!-- Thanh toán -->
            <div class="thanhtoan"
                style="width: 1200px; margin: auto; display: grid; grid-template-columns: 750px 450px;">
                <div class="thongtin_kh" style="border: 1px solid #cccccc;">
                    <div class="text_kh">
                        <h3
                            style="font-size: 17px; font-weight: bold;padding: 10px 8px; border-bottom:1px solid #cccccc; ">
                            1. Khách hàng khai báo thông tin</h3>
                    </div>
                    <div class="text_thongtin" style="margin-left: 8px;">
                        <span style="font-size: 16px; font-weight: bold;"> Thông tin người mua</span>
                        <div class="text" style="font-size: 14px; padding-top: 5px;">Những phần đánh dấu (*) là bắt buộc
                        </div>
                    </div>
                    <form action="" style="padding: 15px 10px;">
                        <!-- date -->
                        <input type="hidden" name="date" value="<?php echo $real_time ?>">
                        <!-- tên người nhận -->
                        <div class="name">
                            Họ tên :<input name="nn_name" style="margin:4px 50px; width: 400px;" type="text" required>
                        </div>
                        <!-- điện thoại  -->
                        <div class="name">
                            Điện thoại :<input name="nn_tel" style="margin:4px 25px; width: 400px;" type="text" required
                                pattern="\d{10,}" title="Vui lòng nhập số điện thoại hợp lệ (ít nhất 10 chữ số)">
                        </div>
                        <!-- địa chỉ  -->
                        <div class="name">
                            Địa chỉ :<input name="nn_address" style="margin:4px 50px; width: 400px;" type="text"
                                required>
                        </div>
                        <!-- email  -->
                        <div class="name">
                            Email :<input name="nn_email" style="margin:4px 59px; width: 400px;" type="email" required>
                        </div>

                    </form>
                </div>
                <div class="phuongthuc_tt" style="border: 1px solid #cccccc; margin-left: 10px;">
                    <div class="text_ghichu">
                        <h3 style="font-size: 17px; font-weight: bold;border-bottom: 1px solid #cccccc; padding: 10px;">
                            2. Ghi chú cho đơn hàng</h3>
                    </div>
                    <!-- ghi chú -->
                    <div class="ghi_chu" style="padding: 10px; border-bottom: 1px solid #cccccc;">
                        <textarea name="ghichu" id="" cols="30" rows="10"
                            style="width: 100%; height: 100px;"></textarea>
                    </div>
                    <div class="text_ghichu">
                        <h3 style="font-size: 17px; font-weight: bold;border-bottom: 1px solid #cccccc; padding: 10px;">
                            3. Phương thức thanh toán</h3>
                    </div>
                    <!-- phương thức thanh toán -->
                    <div class="thanh_toan" style="margin-left: 20px; padding-bottom: 10px;">
                        <div class="tai_quan">
                            <input type="radio" id="payment_option_1" name="COD" value="1" required>
                            <label for="payment_option_1">Thanh toán khi nhận hàng</label>
                        </div>
                        <div class="tai_quan">
                            <input type="radio" id="payment_option_2" name="COD" value="2" required>
                            <label for="payment_option_2">Thanh Toán tại cửa hàng</label>
                        </div>
                        <div class="tai_quan">
                            <input type="radio" id="payment_option_3" name="COD" value="3" required>
                            <label for="payment_option_3">Thanh Toán qua Momo</label>
                        </div>
                    </div>


                </div>
                <div class="sumnit" style="width: 1200px; margin: auto; padding: 20px 0;">
                    <button type="submit" name="guidonhang" class="btn btn-warning" style="margin-left: 89.8%;">Gửi đơn
                        hàng</button>
                </div>
            </div>
        </form>
        <!-- end thanh toán -->