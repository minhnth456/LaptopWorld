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
                <tbody>

                    <tr>
                        <th class="border-1" scope="row">1</th>
                        <td class="border-1" style="width: 750px;">
                            <div class="img_cart" style="display: flex; align-items: center;">
                                <img src="./img/sanpham1.jpg" width="80px" alt="" />
                                <div class="text_cart" style="margin-left: 20px;"><a href="#">[New Outlet] Lenovo Slim 7 Pro X (Ryzen 9 6900HS, 32GB, 1TB,RTX 3050 4GB, 14.5'' 3K Touch)</a>
                                    <div class="baohanh">
                                        Bảo hành 12 tháng
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="border-1">16.000.000 đ</td>
                        <td class="border-1">
                            <div class="number" style="display: flex;">
                                <button class="btn btn-link px-2" onclick="decrement()">
                                <i class="fas fa-minus"></i>
                            </button>
                                <input style="width: 50px;" id="form1" min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" />
                                <button class="btn btn-link px-2" onclick="increment()">
                                <i class="fas fa-plus"></i>
                            </button>
                            </div>
                        </td>
                        <td class="border-1">16.000.000 đ</td>
                        <td>
                            <a href="#"><img style="margin-left: 10px;" src="./img/icon_cart_del.png"></a>
                        </td>

                    </tr>
                    <tr>
                        <td class="border-1" colspan="2"></td>
                        <td class="border-1" colspan="4">
                            <h3 style="font-weight: bold; font-size: 16px;">Tổng cộng : 16.000.000 đ</h3>
                            <div style="color: red; font-weight: bold;" class="thanhtoan">Thanh toán: 16.000.000 VND</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End cart -->
        <div class="tieptuc_mua" style="width: 1200px; margin: auto; padding: 20px 0;">
            <button type="button" class="btn btn-primary" style="margin-left: 86.8%;"><a style="color: white; text-decoration: none;" href="#">Tiếp tục mua hàng</a></button>
        </div>
        <!-- Thanh toán -->
        <div class="thanhtoan" style="width: 1200px; margin: auto; display: grid; grid-template-columns: 750px 450px;">
            <div class="thongtin_kh" style="border: 1px solid #cccccc;">
                <div class="text_kh">
                    <h3 style="font-size: 17px; font-weight: bold;padding: 10px 8px; border-bottom:1px solid #cccccc; ">1. Khách hàng khai báo thông tin</h3>
                </div>
                <div class="text_thongtin" style="margin-left: 8px;">
                    <span style="font-size: 16px; font-weight: bold;">  Thông tin người mua</span>
                    <div class="text" style="font-size: 14px; padding-top: 5px;">Những phần đánh dấu (*) là bắt buộc</div>
                </div>
                <form action="" style="padding: 15px 10px;">
                    <div class="name">
                        Họ tên :<input style="margin:4px 50px; width: 400px;" type="text">
                    </div>
                    <div class="name">
                        Điện thoại :<input style="margin:4px 25px; width: 400px;" type="text">
                    </div>
                    <div class="name">
                        Địa chỉ :<input style="margin:4px 50px; width: 400px;" type="text">
                    </div>
                    <div class="name">
                        Email :<input style="margin:4px 59px; width: 400px;" type="text">
                    </div>

                </form>
            </div>
            <div class="phuongthuc_tt" style="border: 1px solid #cccccc; margin-left: 10px;">
                <div class="text_ghichu">
                    <h3 style="font-size: 17px; font-weight: bold;border-bottom: 1px solid #cccccc; padding: 10px;">2. Ghi chú cho đơn hàng</h3>
                </div>
                <div class="ghi_chu" style="padding: 10px; border-bottom: 1px solid #cccccc;">
                    <textarea name="" id="" cols="30" rows="10" style="width: 100%; height: 100px;"></textarea>
                </div>
                <div class="text_ghichu">
                    <h3 style="font-size: 17px; font-weight: bold;border-bottom: 1px solid #cccccc; padding: 10px;">3. Phương thức thanh toán</h3>
                </div>
                <div class="thanh_toan" style="margin-left: 20px; padding-bottom: 10px;">
                    <div class="tai_quan">
                        <input type="radio" id="payment_option_1" name="payment_method">
                        <label for="payment_option_1">Thanh toán tại cửa hàng</label>
                    </div>
                    <div class="tai_quan">
                        <input type="radio" id="payment_option_2" name="payment_method">
                        <label for="payment_option_2">Thanh Toán tại cửa hàng</label>
                    </div>
                    <div class="tai_quan">
                        <input type="radio" id="payment_option_3" name="payment_method">
                        <label for="payment_option_3">Thanh Toán tại cửa hàng</label>
                    </div>
                    <div class="tai_quan">
                        <input type="radio" id="payment_option_4" name="payment_method">
                        <label for="payment_option_4">Thanh Toán tại cửa hàng</label>
                    </div>

                </div>


            </div>
            <div class="sumnit" style="width: 1200px; margin: auto; padding: 20px 0;">
                <button type="button" class="btn btn-warning" style="margin-left: 89.8%;">Gửi đơn hàng</button>
            </div>
        </div>
        <!-- end thanh toán -->