        <!-- start article -->
        <article>
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

                <div class="head-chi-tiet-sp">
                    <h4>[New Outlet] <?php echo $tensp ?> (<?php echo $cpu ?>, <?php echo $ram ?>, <?php echo $ssd ?>, <?php echo $cardVGA ?>)</h4>
                </div>

                <div class="body-chi-tiet-sp">
                    <div class="anh-sp">
                        <?php extract($anhsp); ?>
                        <div  class="anh-chinh">
                            <a href="img/sanpham/<?php echo $img ?>"><img id="anh-chinh" src="img/sanpham/<?php echo $img ?>" alt=""></a>
                        </div>
                        <div id="anh-phu" class="anh-phu">
                            <ul onclick="">
                            <?php foreach($loadAllImgSp as $d): ?>
                                <li><a href="img/sanpham/<?php echo $d['img'] ?>"><img src="img/sanpham/<?php echo $d['img'] ?>" alt=""></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="thong-tin-sp">
                        <div class="gia-sp">
                            <p><?php echo $giasp ?> VNĐ</p>
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
                                            <a href="index.php?act=chitietsanpham&id_chitiet=<?php echo $e['id_chitiet']; ?>&id_pro=<?php echo $e['id_pro']; ?>">
                                                <p><?php echo $e['cpu'] ?>, <?php echo $e['ram'] ?>, <?php echo $e['ssd'] ?>, <?php echo $e['cardVGA'] ?></p>
                                                <span><?php echo $e['giasp'] ?></span>
                                            </a>
                                        </div>
                                    <?php } else{ ?>
                                        <div class="tt-cau-hinh">
                                            <a href="index.php?act=chitietsanpham&id_chitiet=<?php echo $e['id_chitiet']; ?>&id_pro=<?php echo $e['id_pro']; ?>">
                                                <p><?php echo $e['cpu'] ?>, <?php echo $e['ram'] ?>, <?php echo $e['ssd'] ?>, <?php echo $e['cardVGA'] ?></p>
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
                            <a href="#">Mua ngay</a>
                        </div>
                        <div class="them-gio-hang">
                            <a href="#">Thêm giỏ hàng</a>
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
            </div>
            <div class="khung-dd-kt">
                <div class="khung-mo-ta">
                    <div class="tieu-de">
                        <p>Đặc điểm nổi bật</p>
                    </div>
                    <div class="mo-ta">
                        <h3>Laptop Acer hướng đến đối tượng nào?</h3>
                        <p>Chiếc laptop Gaming Nitro 5 AN515-58 là chiếc laptop sở hữu cấu hình siêu khủng với với bộ CPU Intel Core i5 12500H Gen 12 mới nhất cùng card rời GeForce RTX 4050 6GB. Một miền đất đứa đối với các game thủ đúng không nào. Ngay sau đây chúng ta sẽ đi tìm hiểu xem con Nitro 5 có gì đáng được mong chờ nào.</p>
                        <img src="img/sanpham/anhsp1.jpg" alt="">
                        <h3>THIẾT KẾ</h3>
                        <p>Chiếc laptop Gaming Nitro 5 AN515-58 là chiếc laptop sở hữu cấu hình siêu khủng với với bộ CPU Intel Core i5 12500H Gen 12 mới nhất cùng card rời GeForce RTX 4050 6GB. Một miền đất đứa đối với các game thủ đúng không nào. Ngay sau đây chúng ta sẽ đi tìm hiểu xem con Nitro 5 có gì đáng được mong chờ nào.</p>
                        <img src="img/sanpham/anhsp2.jpg" alt="">
                        <h3>HIỆU NĂNG MẠNH MẼ</h3>
                        <p>Acer Nitro 5 AN515-58 là lựa chọn tuyệt vời cho mọi tựa game nặng hiện nay. Chiếc laptop gaming này được trang bị bộ vi xử lý mới nhất, sản xuất trên kiến trúc Intel Alder Lake với các lõi P hỗ trợ siêu phân luồng còn hiệu suất lõi E tương tự như các lõi Skylake thế hệ trước. Kiến trúc mới này giúp tăng hiệu suất sử dụng, xử lý mọi tác vụ đơn nhân và đa nhân cực khỏe.

                            Cụ thể chiếc laptop này sở hữu sức mạnh đến từ bộ vi xử lý Intel Core i5 12500H với 12 nhân 16 luồng, xung nhịp giao động từ 3.30 GHz đến 4.50 GHz cực khỏe cho phép bạn có thể thoải mái phát trực tuyến, chơi game, đồ họa siêu mượt mà.</p>
                        <img src="img/sanpham/anhsp3.jpg" alt="">
                        <h3>TẢN NHIỆT MẠNH MẼ</h3>
                        <p>Một điểm nữa mà Acer tự hào đó là hệ thống tản nhiệt trang bị trên Nitro 5 AN515-58 (7100 vòng trên phút). Quạt to, mạnh và tất nhiên rồi, mát vô cùng. Đây sẽ là sự lựa chọn tuyệt vời dành cho Game thủ thích quạt to và máy mát. 

                            Khung gầm của Acer Nitro 5 AN515-58 được tinh chỉnh thoáng hơn, 2 quạt tản đi kèm với công nghệ Acer CoolBoost™ giúp tăng 10% tốc độ quạt. Giảm nhiệt độ CPU/GPU thêm 9%. Phần mềm Nitro Sense chủ động theo dõi nhiệt độ, điều chỉnh tốc độ quạt. So với phiên bản trước khả năng tản nhiệt tốt hơn 25%. Thiết kế tản nhiệt mới với 4 khe hút gió/thoát nhiệt thông minh.
                            
                            Với sự cải tiến cả về hệ thống làm mát, chiếc laptop Acer Nitro 5 AN515-58 này luôn giữ vị trí vô địch trong "làng tản nhiệt" với nhiệt độ mát mẻ, kể cả ở những tác vụ nặng. Điều này sẽ giúp cho hiệu suất máy được duy trì ổn định, luôn tạo cảm giác thoải mái khi làm việc, chơi game của các game thủ.</p>
                        <img src="img/sanpham/anhsp4.jpg" alt="">
                        <h3>KẾT LUẬN:</h3>
                        <p>Acer Nitro 5 AN515-58 là một sản phẩm gaming phổ thông đáng mua. Ưu điểm lớn nhất của sản phẩm này là hệ thống tản nhiệt đồ sộ, tốc độ quạt gió lớn, thiết kế hầm hố, phù hợp với những game thủ cá tính mạnh. Anh em có thể chơi các tựa game phổ thông như League of Legends, Shadow of Tomb Raider hay là Valorant… vô cùng mượt mà. </p>
                        <h5>LƯU Ý!</h3>
                        <p style="font-style: italic;">Bài viết và hình ảnh chỉ có tính chất tham khảo vì cấu hình và đặc tính sản phẩm có thể thay đổi theo thị trường và từng phiên bản. Quý khách cần cấu hình + hình ảnh cụ thể vui lòng liên hệ với các tư vấn viên để được trợ giúp.</p>
                    </div>
                    <div class="khung-binh-luan">
                        <div class="so-bl">
                            <p style="font-weight: bold;">0 bình luận</p>
                            <div class="sap-xep">
                                <p style="font-size: 14px; color: #4b4f56;">Sắp xếp theo</p>
                                <select name="sapxep" id="">
                                    <option selected value="1">Mới nhất</option>
                                    <option value="2">Cũ nhất</option>
                                </select>
                            </div>
                        </div>
                        <div class="binh-luan">
                            <div class="img">
                                <img width="50px" height="50px" style="margin-right: 10px;" src="img/user.png" alt="">
                            </div>
                            <div class="noi-dung-bl">
                                <form action="http://localhost/LaptopWorld/index.php" method="post" oninput="chat()">
                                    <input id="nd" class="nd" type="text" name="noidung" id="" placeholder="Viết bình luận...">
                                    <div class="dn-chat">
                                        <input id="dang" type="submit" value="Đăng" disabled>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="binh-luan">
                            <div class="img">
                                <img width="50px" height="50px" style="margin-right: 10px;" src="img/user.png" alt="">
                            </div>
                            <div class="noi-dung-bl">
                                <div class="ten">
                                    <p>Hoàng Minh</p>
                                </div>
                                <div class="nd-bl">
                                    <p>LƯU Ý!!! Bài viết và hình ảnh chỉ có tính chất tham khảo vì cấu hình và đặc tính sản phẩm có thể thay đổi theo thị trường và từng phiên bản. Quý khách cần cấu hình + hình ảnh cụ thể vui lòng liên hệ với các tư vấn viên để được trợ giúp.</p>
                                </div>
                                <div class="ngay-bl">
                                    <p>13/11/2023</p>
                                </div>
                            </div>
                        </div>
                        <div class="binh-luan">
                            <div class="img">
                                <img width="50px" height="50px" style="margin-right: 10px;" src="img/user.png" alt="">
                            </div>
                            <div class="noi-dung-bl">
                                <div class="ten">
                                    <p>Hải</p>
                                </div>
                                <div class="nd-bl">
                                    <p>Máy ngon, chất lượng, nhân viên tư vấn nhiệt tình, đã vậy còn được ưu đãi vệ sinh laptop free khi mua máy ở đây. Sẽ tiếp tục ủng hộ</p>
                                </div>
                                <div class="ngay-bl">
                                    <p>12/11/2023</p>
                                </div>
                            </div>
                        </div>
                        <div class="binh-luan">
                            <div class="img">
                                <img width="50px" height="50px" style="margin-right: 10px;" src="img/user.png" alt="">
                            </div>
                            <div class="noi-dung-bl">
                                <div class="ten">
                                    <p>Hằng</p>
                                </div>
                                <div class="nd-bl">
                                    <p>Hôm nay là siêu SALE SHOPPEE 11/11</p>
                                </div>
                                <div class="ngay-bl">
                                    <p>11/11/2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="khung-sp-lq">
                    <div class="khung">
                        <div class="tieu-de">
                            <p>Sản phẩm tương đương</p>
                        </div>
                        <div class="sp-lq">
                            <a href="#"><img src="img/sanpham/anhsp1.jpg" alt=""></a>
                            <a href="#" style="font-size: 14px;">
                                [Like New] Acer Nitro 5 2022 AN515-58 <br>
                                <span style="color: red; font-style: italic;">16.590.000</span>
                            </a>
                        </div>
                        <div class="sp-lq">
                            <a href="#"><img src="img/sanpham/anhsp1.jpg" alt=""></a>
                            <a href="#" style="font-size: 14px;">
                                [Like New] Acer Nitro 5 2022 AN515-58 <br>
                                <span style="color: red; font-style: italic;">16.590.000</span>
                            </a>
                        </div>
                        <div class="sp-lq">
                            <a href="#"><img src="img/sanpham/anhsp1.jpg" alt=""></a>
                            <a href="#" style="font-size: 14px;">
                                [Like New] Acer Nitro 5 2022 AN515-58 <br>
                                <span style="color: red; font-style: italic;">16.590.000</span>
                            </a>
                        </div>
                        <div class="sp-lq">
                            <a href="#"><img src="img/sanpham/anhsp1.jpg" alt=""></a>
                            <a href="#" style="font-size: 14px;">
                                [Like New] Acer Nitro 5 2022 AN515-58 <br>
                                <span style="color: red; font-style: italic;">16.590.000</span>
                            </a>
                        </div>
                        <div class="sp-lq">
                            <a href="#"><img src="img/sanpham/anhsp1.jpg" alt=""></a>
                            <a href="#" style="font-size: 14px;">
                                [Like New] Acer Nitro 5 2022 AN515-58 <br>
                                <span style="color: red; font-style: italic;">16.590.000</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <!-- end article -->