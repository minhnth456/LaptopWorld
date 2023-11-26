        <!-- Start Cart -->


        <div class="bang_sanpham pt-4">
            <table class="table pt-4" style="width: 1200px; margin: auto; border: 1px solid #cccccc; cursor: pointer;">
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
                <tbody style="text-align: center;">
                    <?php 
                            if(isset($_SESSION['id_user']) && $_SESSION['id_user'] != ""){
                                $id_user = $_SESSION['id_user'];
                                
                            }
                             $load_one_cart = load_cart($id_user);
                             foreach($load_one_cart as $load_sp){
                                
                                ?>
                    <tr style="">

                        <th class="border-1" scope="row" style="padding-top: 31px;">
                            <?php echo $load_sp['id_ctgiohang'] ?></th>
                        <td class="border-1" style="width: 750px;">

                            <div class="img_cart" style="display: flex; align-items: center;">
                                <img src="<?php echo $load_sp['img'] ?>" width="80px" style="height: 70px;" alt="" />

                                <div class="text_cart" style="margin-left: 20px; text-align:left"><a
                                        href="#"><?php echo $load_sp['tensp']  ?></a>
                                    <div class="baohanh">
                                        Bảo hành 12 tháng
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td class="border-1" style="padding-top: 31px;"><?php echo $load_sp['giasp'] ?></td>
                        <td class="border-1" style="display:flex; justify-content: center;  align-items: center; ">


                            <form action="index.php?act=updateCart" method="POST" class="form_soluong">
                                <input type="hidden" value="<?= $load_sp['tensp'] ?>" name="tensp">
                                <input type="hidden" value="<?= $load_sp['id_ctgiohang'] ?>" name="id_cart">
                                <input type="hidden" value="<?= $load_sp['img'] ?>" name="img">
                                <input type="hidden" value="<?= $load_sp['giasp'] ?>" name="giasp">
                                <input type="hidden" value="<?= $load_sp['soluong'] ?>" name="soluong">
                                <input type="number" name="quantily" value="<?= $load_sp['soluong'] ?>" min="0"
                                    max="10" />

                                <input type="submit" name="submit" value="Update" />
                            </form>


                        </td>

                        <td class="border-1" style="padding-top: 31px;"><?php echo $load_sp['total'] ?></td>
                        <td>
                            <a
                                href="index.php?act=id_pro=<?php echo $load_sp['id_pro'] ?>&&id_chitiet=<?php echo $load_sp['id_chitiet'] ?>"><img
                                    style="padding-top: 28px;" src="./img/icon_cart_del.png"></a>
                        </td>
                        <?php }?>

                    </tr>
                    <tr>
                        <td class="border-1" colspan="2"></td>
                        <td class="border-1" colspan="4">
                            <?php
                              if(isset($_SESSION['id_user']) && $_SESSION['id_user'] != ""){
                                $id_user = $_SESSION['id_user'];
                            }
                               $total_tongcong = get_total_tongcong($_SESSION['id_user']);
                            ?>
                            <h3 style="font-weight: bold; font-size: 16px;">Tổng cộng : <?php echo $total_tongcong ?>
                            </h3>
                            <div style="color: red; font-weight: bold;" class="thanhtoan">Thanh toán:
                                <?php echo $total_tongcong ?> VND
                            </div>
                        </td>
                    </tr>

                </tbody>
                </form>
            </table>
        </div>
        <!-- End cart -->
        <div class="tieptuc_mua" style="width: 1200px; margin: auto; padding: 20px 0;">
            <button type="button" class="btn btn-primary" style="margin-left: 86.8%;"><a
                    style="color: white; text-decoration: none;" href="index.php">Tiếp tục mua hàng</a></button>
        </div>
        <!-- Thanh toán -->
        <form action="index.php?act=oder_sp" method="post">
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
                    <div action="" style="padding: 15px 10px;">
                        <div class="name">
                            <?php 
                            $load_one_cart = load_cart($id_user);
                            foreach($load_one_cart as $load_sp){
                            ?>
                            <input type="hidden" name="id_chitiet_gh[]" value="<?php echo $load_sp['id_ctgiohang']  ?>">
                            <?php } ?>
                            <input type="hidden" name="trangthai" value="Đang lên đơn">
                            <input type="hidden" name="tong_tien" value="<?php echo $total_tongcong ?>">
                            <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'] ?>">
                            Họ tên :<input name="name" style="margin:4px 50px; width: 400px;" type="text" required>
                        </div>
                        <div class="name">
                            Điện thoại :<input name="sdt" style="margin: 4px 25px; width: 400px;" type="text" required
                                pattern="\d{10,}" title="Vui lòng nhập số điện thoại hợp lệ (ít nhất 10 chữ số)">

                        </div>
                        <div class="name">
                            Địa chỉ :<input name="diachi" style="margin:4px 50px; width: 400px;" type="text" required>
                        </div>
                        <div class="name">

                            <!-- Email :<input name="email" style="margin:4px 59px; width: 400px;" type="email" required> -->
                        </div>


                    </div>
                </div>
                <div class="phuongthuc_tt" style="border: 1px solid #cccccc; margin-left: 10px;">
                    <div class="text_ghichu">
                        <h3 style="font-size: 17px; font-weight: bold;border-bottom: 1px solid #cccccc; padding: 10px;">
                            2.
                            Ghi chú cho đơn hàng</h3>
                    </div>
                    <div class="ghi_chu" style="padding: 10px; border-bottom: 1px solid #cccccc;">
                        <textarea name="" id="" cols="30" rows="10" style="width: 100%; height: 100px;"></textarea>
                    </div>
                    <div class="text_ghichu">
                        <h3 style="font-size: 17px; font-weight: bold;border-bottom: 1px solid #cccccc; padding: 10px;">
                            3.
                            Phương thức thanh toán</h3>
                    </div>
                    <div class="thanh_toan" style="margin-left: 20px; padding-bottom: 10px;">
                        <div class="tai_quan">
                            <input type="radio" id="payment_option_1" name="COD" value="COD" required>
                            <label for="payment_option_1">Thanh toán khi nhận hàng</label>
                        </div>
                        <div class="tai_quan">
                            <input type="radio" id="payment_option_2" name="COD" value="in_store" required>
                            <label for="payment_option_2">Thanh Toán tại cửa hàng</label>
                        </div>
                    </div>


                </div>
                <div class="sumnit" style="width: 1200px; margin: auto; padding: 20px 0;">
                    <button type="submit" name="guidonhang" class="btn btn-warning" style="margin-left: 89.8%;">Gửi
                        đơn
                        hàng</button>
                </div>
            </div>
        </form>
        <!-- end thanh toán -->