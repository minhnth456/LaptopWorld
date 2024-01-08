        <!-- start article -->
        <article>
            <?php
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $current_time_in_vietnam = new DateTime();
            $real_time = $current_time_in_vietnam->format('H:i d-m-Y');
        ?>
            <?php extract($loadOneSpCt); ?>
            <div class="lop-phu2" id="lop-phu2" onclick="dong_fo(event)">
                <div id="khung-thong-so-ki-thuat" class="khung-thong-so-ki-thuat">
                    <div id="thong-so-ki-thuat" class="thong-so-ki-thuat">
                        <h3>Thông số kĩ thuật</h3>
                        <br>
                        <p><b><?php echo $tensp ?></b></p>
                        <table>
                            <tbody>
                                <tr>
                                    <th>CPU</th>
                                    <td><?php echo $cpu ?></td>
                                </tr>
                                <tr>
                                    <th>Ram</th>
                                    <td><?php echo $ram ?></td>
                                </tr>
                                <tr>
                                    <th>SSD</th>
                                    <td><?php echo $ssd ?></td>
                                </tr>
                                <tr>
                                    <th>CardVGA</th>
                                    <td><?php echo $cardVGA ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="khung-chi-tiet-sp">
                <form action="index.php?act=giohang" method="post">
                    <!-- id danh mục  -->
                    <input type="hidden" name="id_dm" value="<?php echo $id_dm ?>">
                    <?php $id_dm = $id_dm; ?>
                    <!-- id danh mục con  -->
                    <input type="hidden" name="id_dmc" value="<?php echo $id_dmc ?>">
                    <!-- tên sản phẩm -->
                    <input type="hidden" name="tensp"
                        value="[New Outlet] <?php echo $tensp ?> (<?php echo $cpu ?>, <?php echo $ram ?>, <?php echo $ssd ?>, <?php echo $cardVGA ?>)">
                    <!-- giá sản phẩm -->
                    <input type="hidden" name="giasp" value="<?php echo $giasp ?>">
                    <input type="hidden" name="giasp2" value="<?php echo $giasp2 ?>">
                    <!-- số lượng -->
                    <input type="hidden" name="soluong" value="1">
                    <!-- total -->
                    <input type="hidden" name="total" value="<?php echo $giasp ?>">
                    <!-- id sản phẩm -->
                    <input type="hidden" name="id_pro" value="<?php echo $id_pro ?>">
                    <!-- id chi tiết sản phẩm -->
                    <input type="hidden" name="id_chitiet" value="<?php echo $id_chitiet ?>">
                    <div class="head-chi-tiet-sp">
                        <h4 id="ten-san-pham">[New Outlet] <?php echo $tensp ?> (<?php echo $cpu ?>, <?php echo $ram ?>,
                            <?php echo $ssd ?>, <?php echo $cardVGA ?>)</h4>
                    </div>

                    <div class="body-chi-tiet-sp">
                        <div class="anh-sp">
                            <?php extract($anhsp); ?>
                            <div class="anh-chinh">
                                <input type="hidden" name="img_spct" value="<?php echo $img ?>">
                                <a href="img/sanpham/<?php echo $img ?>"><img id="anh-chinh"
                                        src="img/sanpham/<?php echo $img ?>" alt=""></a>
                            </div>
                            <div id="anh-phu" class="anh-phu">
                                <ul onclick="">
                                    <?php foreach($loadAllImgSp as $d): ?>
                                    <li><a href="img/sanpham/<?php echo $d['img'] ?>"><img
                                                src="img/sanpham/<?php echo $d['img'] ?>" alt=""></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="thong-tin-sp">
                            <div class="gia-sp">
                                <p id="gia-san-pham"><?php echo $giasp ?> VNĐ</p>
                            </div>
                            <div class="bao-hanh">
                                <p>Bảo hành:</p>
                                <span>12 tháng LaptopWorld</span>
                            </div>
                            <div class="tinh-trang">
                                <p>Trạng thái:</p>
                                <span>Còn hàng</span>
                            </div>
                            <div class="chi-tiet-cau-hinh">
                                <a href="#" onclick="mo_fo('chitietcauhinh')">Thông số kĩ thuật</a>
                            </div>
                            <div class="khung-cau-hinh">
                                <b>CẤU HÌNH:</b><br>
                                <div class="cau-hinh">
                                    <?php
                                        // lấy id trên URL
                                        if(isset($_GET['id_chitiet']) && ($_GET['id_chitiet']) != ""){
                                            $id_chitiet = $_GET['id_chitiet'];
                                        }
                                    ?>
                                    <?php foreach($loadAllSpCt as $e): ?>
                                    <?php
                                        // so sánh id URL và id chi tiết
                                        if($id_chitiet == $e['id_chitiet']){ ?>
                                    <!-- nếu trùng, thêm class act -->
                                    <div class="tt-cau-hinh act">
                                        <a
                                            href="index.php?act=chitietsanpham&id_chitiet=<?php echo $e['id_chitiet']; ?>&id_pro=<?php echo $e['id_pro']; ?>">
                                            <p><?php echo $e['cpu'] ?>, <?php echo $e['ram'] ?>,
                                                <?php echo $e['ssd'] ?>, <?php echo $e['cardVGA'] ?></p>
                                            <span><?php echo $e['giasp'] ?></span>
                                        </a>
                                    </div>
                                    <?php } else{ ?>
                                    <div class="tt-cau-hinh">
                                        <a
                                            href="index.php?act=chitietsanpham&id_chitiet=<?php echo $e['id_chitiet']; ?>&id_pro=<?php echo $e['id_pro']; ?>">
                                            <p><?php echo $e['cpu'] ?>, <?php echo $e['ram'] ?>,
                                                <?php echo $e['ssd'] ?>, <?php echo $e['cardVGA'] ?></p>
                                            <span><?php echo $e['giasp'] ?></span>
                                        </a>
                                    </div>
                                    <?php }; ?>


                                    <?php endforeach; ?>

                                </div>
                            </div>
                            <div class="qua-tang">
                                <p>✅ Tặng Windows 11 bản quyền theo máy</p>
                                <p>✅ Miễn phí cân màu màn hình công nghệ cao</p>
                                <p>✅ Balo thời trang AZ</p>
                                <p>✅ Chuột không dây + Bàn di cao cấp</p>
                                <p>✅ Tặng gói cài đặt, bảo dưỡng, vệ sinh máy trọn đời</p>
                                <p>✅ Tặng Voucher giảm giá cho lần mua tiếp theo</p>
                                <div class="icon-qua-tang">
                                    <i class="fa-solid fa-gift"></i>
                                    <p>QUÀ TẶNG/KHUYẾN MẠI</p>
                                </div>
                            </div>
                            <div class="mua-hang">
                                <button type="submit" name="muaNgay"
                                    style="outline:none; border:none; background-color: #ec1c24; color:#fff; font-family: arial, helvetica, sans-serif; font-weight: bold; font-size: 20px;">Mua
                                    ngay</button>
                            </div>
                            <div class="them-gio-hang">
                                <button type="submit" name="themVaoGioHang"
                                    style="outline:none; border:none; background-color: #2b80dd; color:#fff; font-family: arial, helvetica, sans-serif; font-weight: bold; font-size: 20px;">Thêm
                                    vào giỏ hàng</button>
                            </div>
                        </div>

                        <div class="chinh-sach-sp">
                            <div class="khung-thong-tin">
                                <p>YÊN TÂM MUA HÀNG TẠI<b>LAPTOPWORLD</b></p>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <span>Chất lượng sản phẩm là hàng đầu</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <span>Dùng test máy 15 ngày đầu lỗi 1 đổi 1</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <span>Hỗ trợ và hậu mãi sau bán hàng tốt nhất</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <span>Bảo hành chính hãng</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <span>Giao hàng miễn phí toàn quốc nhanh nhất</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="khung-thong-tin khung-thong-tin2">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>13 P. Trịnh Văn Bô, Xuân Phương</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-phone-volume"></i>
                                        <span>0925.233.233 <b>(Tư vấn miễn phí)</b></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-envelope"></i>
                                        <span>minhnthph33626@fpt.edu.vn</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="khung-dd-kt">
                <div class="khung-mo-ta">
                    <div class="tieu-de">
                        <p>Đặc điểm nổi bật</p>
                    </div>
                    <div class="mo-ta">
                        <?php if(isset($_GET['id_pro']) && ($_GET['id_pro']) > 0 ){
                            $id_pro = $_GET['id_pro'];
                            // mô tả sản phẩm
                            $motasp = loadOne_sp($id_pro);
                            extract($motasp);
                        } ?>
                        <?php 
                        $anhsp = allAnhsp($id_pro);
                        $img = array();
                        
                        foreach ($anhsp as $b) {
                            $img[] = $b['img'];
                        }
                        $anh_sp = $img[0];
                        $anh_sp1 = $img[1];
                        $anh_sp2 = $img[2];
                        $anh_sp3 = $img[3];
                        $anh_sp4 = $img[4];
                        
                        ?>
                        <h3>Laptop <?php echo $tensp ?> hướng đến đối tượng nào?</h3>
                        <p><?php echo $mota ?></p>

                        <img src="img/sanpham/<?php echo $anh_sp ?>" alt="">
                        <h3>THIẾT KẾ</h3>
                        <p>Là chiếc laptop sở hữu cấu hình siêu khủng với với bộ CPU Intel Core i5 12500H Gen 12 mới
                            nhất cùng card rời GeForce RTX 4050 6GB. Một miền đất đứa đối với các game thủ đúng không
                            nào. Ngay sau đây chúng ta sẽ đi tìm hiểu xem con Nitro 5 có gì đáng được mong chờ nào.</p>
                        <img src="img/sanpham/<?php echo $anh_sp2 ?>" alt="">
                        <h3>HIỆU NĂNG MẠNH MẼ</h3>
                        <p>Là lựa chọn tuyệt vời cho mọi tựa game nặng hiện nay. Chiếc laptop gaming này được trang bị
                            bộ vi xử lý mới nhất, sản xuất trên kiến trúc Intel Alder Lake với các lõi P hỗ trợ siêu
                            phân luồng còn hiệu suất lõi E tương tự như các lõi Skylake thế hệ trước. Kiến trúc mới này
                            giúp tăng hiệu suất sử dụng, xử lý mọi tác vụ đơn nhân và đa nhân cực khỏe.

                            Cụ thể chiếc laptop này sở hữu sức mạnh đến từ bộ vi xử lý Intel Core i5 12500H với 12 nhân
                            16 luồng, xung nhịp giao động từ 3.30 GHz đến 4.50 GHz cực khỏe cho phép bạn có thể thoải
                            mái phát trực tuyến, chơi game, đồ họa siêu mượt mà.</p>
                        <img src="img/sanpham/<?php echo $anh_sp3 ?>" alt="">
                        <h3>TẢN NHIỆT MẠNH MẼ</h3>
                        <p>Là hệ thống tản nhiệt trang bị trên Nitro 5 AN515-58 (7100 vòng trên phút). Quạt to, mạnh và
                            tất nhiên rồi, mát vô cùng. Đây sẽ là sự lựa chọn tuyệt vời dành cho Game thủ thích quạt to
                            và máy mát.

                            Khung gầm của Acer Nitro 5 AN515-58 được tinh chỉnh thoáng hơn, 2 quạt tản đi kèm với công
                            nghệ Acer CoolBoost™ giúp tăng 10% tốc độ quạt. Giảm nhiệt độ CPU/GPU thêm 9%. Phần mềm
                            Nitro Sense chủ động theo dõi nhiệt độ, điều chỉnh tốc độ quạt. So với phiên bản trước khả
                            năng tản nhiệt tốt hơn 25%. Thiết kế tản nhiệt mới với 4 khe hút gió/thoát nhiệt thông minh.

                            Với sự cải tiến cả về hệ thống làm mát, chiếc laptop Acer Nitro 5 AN515-58 này luôn giữ vị
                            trí vô địch trong "làng tản nhiệt" với nhiệt độ mát mẻ, kể cả ở những tác vụ nặng. Điều này
                            sẽ giúp cho hiệu suất máy được duy trì ổn định, luôn tạo cảm giác thoải mái khi làm việc,
                            chơi game của các game thủ.</p>
                        <img src="img/sanpham/<?php echo $anh_sp4 ?>" alt="">
                        <h3>KẾT LUẬN:</h3>
                        <p>Ưu điểm lớn nhất của sản phẩm này là hệ thống tản nhiệt đồ sộ, tốc độ quạt gió lớn, thiết kế
                            hầm hố, phù hợp với những game thủ cá tính mạnh. Anh em có thể chơi các tựa game phổ thông
                            như League of Legends, Shadow of Tomb Raider hay là Valorant… vô cùng mượt mà. </p>
                        <h5>LƯU Ý!</h3>
                            <p style="font-style: italic;">Bài viết và hình ảnh chỉ có tính chất tham khảo vì cấu hình
                                và đặc tính sản phẩm có thể thay đổi theo thị trường và từng phiên bản. Quý khách cần
                                cấu hình + hình ảnh cụ thể vui lòng liên hệ với các tư vấn viên để được trợ giúp.</p>
                    </div>
                    <div class="khung-binh-luan">
                        <!-- <div class="so-bl">
                            <p style="font-weight: bold;">0 bình luận</p>
                            <div class="sap-xep">
                                <p style="font-size: 14px; color: #4b4f56;">Sắp xếp theo</p>
                                <select name="sapxep" id="">
                                    <option selected value="1">Mới nhất</option>
                                    <option value="2">Cũ nhất</option>
                                </select>
                            </div>
                        </div> -->
                        <!-- khung nguoi dung binh luan -->
                        <?php if(isset($_SESSION['role']) && ($_SESSION['role']) > 0){ ?>

                        <div class="binh-luan">
                            <!-- người dùng bình luận -->
                            <div class="img">
                                <img width="50px" height="50px" style="margin-right: 10px;"
                                    src="img/<?php echo $_SESSION['img'] ?>" alt="">
                            </div>
                            <div class="noi-dung-bl">
                                <form
                                    action="index.php?act=binhluan&id_chitiet=<?php echo $id_chitiet ?>&id_pro=<?php echo $id_pro ?>"
                                    method="post" oninput="chat()">
                                    <input id="nd" class="nd" type="text" name="noidung" id=""
                                        placeholder="Viết bình luận...">
                                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'] ?>">
                                    <input type="hidden" name="ngaybinhluan" value="<?php echo $real_time ?>">
                                    <input type="hidden" name="id_pro" value="<?php echo $id_pro ?>">
                                    <div class="dn-chat">
                                        <input id="dang" type="submit" value="Đăng" name="binhluan" disabled>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end khung người dùng bình luận  -->

                        <?php } else { ?>
                        <div class="binh-luan">
                            <!-- người dùng bình luận -->
                            <div class="noi-dung-bl">
                                <form
                                    action="index.php?act=binhluan&id_chitiet=<?php echo $id_chitiet ?>&id_pro=<?php echo $id_pro ?>"
                                    method="post" oninput="chat()">
                                    <input id="nd" class="nd" type="text" name="noidung" id=""
                                        placeholder="Vui lòng đăng nhập để bình luận..." disabled>
                                </form>
                            </div>
                        </div>
                        <?php } ?>
                        <?php $loadAllBl = loadAllBl($id_pro); ?>
                        <?php foreach($loadAllBl as $bl): ?>
                        <!-- bình luận của mọi người  -->
                        <div class="binh-luan">
                            <div class="img">
                                <img width="50px" height="50px" style="margin-right: 10px;"
                                    src="img/<?php echo $bl['img'] ?>" alt="">
                            </div>
                            <div class="noi-dung-bl">
                                <div class="ten">
                                    <p><?php echo $bl['name'] ?></p>
                                </div>
                                <div class="nd-bl">
                                    <p><?php echo $bl['noidung'] ?></p>
                                </div>

                                <div class="rep-ngay-bl"
                                    style="width: 100%; height: auto; display: flex; align-items: center;">
                                    <?php if(isset($_SESSION['role']) && ($_SESSION['role']) > 0){ ?>
                                    <div class="ngay-bl" style="display: flex; align-items: center;">
                                        <input type="button" value="Trả lời"
                                            onclick="tra_loi('<?php echo $bl['id_bl'] ?>')"
                                            style="font-size: 12px; border: none; outline: none; background: none; font-weight: bold; font-family: inherit; color: #4d4d4d;">
                                    </div>
                                    <?php } else {} ?>
                                    <div class="ngay-bl" style="display: flex; align-items: center;">
                                        <p style="width: auto; height: 100%;"><?php echo $bl['ngaybinhluan'] ?></p>
                                    </div>
                                </div>

                                <!-- người dùng trả lời bình luận  -->
                                <div id="rep-com-<?php echo $bl['id_bl'] ?>" class="binh-luan rep-com">
                                    <!-- người dùng bình luận -->
                                    <div class="img">
                                        <img width="40px" height="40px" style="margin-right: 10px;"
                                            src="img/<?php echo $_SESSION['img'] ?>" alt="">
                                    </div>
                                    <div class="noi-dung-bl">
                                        <form
                                            action="index.php?act=repCom&id_chitiet=<?php echo $id_chitiet ?>&id_pro=<?php echo $id_pro ?>"
                                            method="post" oninput="rep_chat('<?php echo $bl['id_bl'] ?>')">
                                            <input id="rep-nd-<?php echo $bl['id_bl'] ?>" class="nd" type="text"
                                                name="noi_dung"
                                                placeholder="Trả lời bình luận của <?php echo $bl['name'] ?>...">
                                            <input type="hidden" name="date" value="<?php echo $real_time ?>">
                                            <input type="hidden" name="id_user"
                                                value="<?php echo $_SESSION['id_user'] ?>">
                                            <input type="hidden" name="id_bl" value="<?php echo $bl['id_bl'] ?>">
                                            <div class="dn-chat">
                                                <input id="rep-dang-<?php echo $bl['id_bl'] ?>" type="submit"
                                                    name="repCom" value="Đăng" disabled>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- người dùng trả lời bình luận -->
                                <?php $loadAllRepBl = loadAllRepBl($bl['id_bl']); ?>
                                <?php foreach($loadAllRepBl as $rep): ?>
                                <div class="binh-luan">
                                    <div class="img">
                                        <img width="40px" height="40px" style="margin-right: 10px;"
                                            src="img/<?php echo $rep['img'] ?>" alt="">
                                    </div>
                                    <div class="noi-dung-bl">
                                        <div class="ten">
                                            <p><?php echo $rep['name'] ?></p>
                                        </div>
                                        <div class="nd-bl">
                                            <p><?php echo $rep['noi_dung'] ?></p>
                                        </div>
                                        <div class="rep-ngay-bl"
                                            style="width: 100%; height: auto; display: flex; align-items: center;">
                                            <div class="ngay-bl" style="display: flex; align-items: center;">
                                                <p style="width: auto; height: 100%;"><?php echo $rep['date'] ?></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <!-- end khung người dùng bình luận  -->
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="khung-sp-lq">
                    <!-- Sản phẩm tương đương  -->
                    <div class="khung">
                        <div class="tieu-de">
                            <p>Sản phẩm tương đương</p>
                        </div>
                        <?php $sanpham_tuongduong = sanpham_tuongduong($id_dm); ?>
                        <?php foreach($sanpham_tuongduong as $sptd): ?>
                        <?php $id_pro = $sptd['id_pro'] ?>
                        <?php $anh_chinh = anhsp($id_pro); ?>
                        <?php extract($anh_chinh); ?>
                        <div class="sp-lq">
                            <a
                                href="index.php?act=chitietsanpham&id_chitiet=<?php echo $sptd['id_chitiet'] ?>&id_pro=<?php echo $sptd['id_pro'] ?>"><img
                                    src="img/sanpham/<?php echo $img ?>" alt=""></a>
                            <a href="index.php?act=chitietsanpham&id_chitiet=<?php echo $sptd['id_chitiet'] ?>&id_pro=<?php echo $sptd['id_pro'] ?>"
                                style="font-size: 14px;">
                                <?php echo $sptd['tensp'] ?> <br>
                                <span style="color: red; font-style: italic;"><?php echo $sptd['giasp'] ?> VNĐ</span>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </article>
        <!-- end article -->