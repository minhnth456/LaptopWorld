<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $current_time_in_vietnam = new DateTime();
    $real_time = $current_time_in_vietnam->format('H:i d-m-Y');
    $real_time2 = $current_time_in_vietnam->format('Y-m-d');
?>
<div style="padding:10px" class="khoangtrang">

</div>
<div class="donhang">
    <!-- Bảng menu order -->
    <div class="thanhtoan" style="border: 1px solid white;">
        <div class="tatca" style="border-bottom: 1px solid #007bff;">
            <a href="#" style="color: #007bff;">Tất cả</a>
        </div>
        <div class="tatca">
            <a href="#">Chờ xác nhận</a>
        </div>
        <div class="tatca">
            <a href="#">Chờ lấy hàng</a>
        </div>
        <div class="tatca">
            <a href="#">Chờ giao hàng</a>
        </div>
        <div class="tatca">
            <a href="#">Hoàn thành</a>
        </div>
        <!-- <div class="tatca">
            <a href="#">Đã hủy</a>
        </div> -->
    </div>
    <!-- END menu order -->
    <!-- TÌm kiếm -->
    <div style="width: 100%; margin: 15px 0px 0px 0px;" class="tim-kiem">
        <form action="" method="post" class="tim">
            <input type="text" name="" id="timsp_damua" placeholder="Bạn muốn tìm sản phẩm gì?" />
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- END TÌM KIẾM -->
    <!-- SẢN PHẨM -->
    <?php foreach($loadALlHD as $a): ?>
        <div class="form-donhang" style="margin-top: 15px;">
            <div class="khungCTDH">
                <div class="khung-trolai" style="padding: 0px 10px 20px 10px;">
                    <div class="thongtin" style="display: flex;">
                        <!-- id hóa đơn -->
                        <div class="madon">MÃ ĐƠN HÀNG: <?php echo $a['id_hoadon'] ?></div>
                        <div class="mid" style="margin: 0px 10px;">|</div>
                        <!-- trạng thái đơn hàng  -->
                        <div class="trangthai" style="color: #2b80dd;"><?php echo get_ttdh($a['trangthai']) ?></div>
                    </div>
                </div>
                <!-- tiến độ giao hàng -->
                <div class="khung-tiendo" style="padding: 30px 20px;">
                    <div class="tiendo" style="">
                    <?php $tt = $a['trangthai'] ?>
                    <?php if($tt == 1){ ?>
                        <div class="tt-tiendo1" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1; ">
                            <div class="icon1" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-receipt" style="font-size: 35px; border: 4px solid #2dc258; padding: 10px 15px 11px 15px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text1">Đơn hàng đã đặt</div>
                            <div class="time1" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-clipboard-check" style="font-size: 35px; border: 4px solid #2dc258; padding: 9px 15px 10px 15px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text2">Chờ xác nhận</div>
                            <div class="time2" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-dolly" style="font-size: 35px; border: 4px solid #e0e0e0; padding: 12px 10px 10px 10px; border-radius: 50%; background-color: #fff; color: #e0e0e0;"></i></div>
                            <div class="text2">Chờ lấy hàng</div>
                            <div class="time3" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-truck-fast" style="font-size: 35px; border: 4px solid #e0e0e0; padding: 12px 10px 12px 10px; border-radius: 50%; background-color: #fff; color: #e0e0e0;"></i></div>
                            <div class="text2">Chờ giao hàng</div>
                            <div class="time4" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-box-open" style="font-size: 35px; border: 4px solid #e0e0e0; padding: 12px 9px 10px 9px; border-radius: 50%; background-color: #fff; color: #e0e0e0;"></i></div>
                            <div class="text2">Đã giao</div>
                            <div class="time5" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"></div>
                        </div>

                        <div class="duongke2" style="border: 3px solid #e0e0e0; width: 90%; position: absolute; top:29px; margin-left: 48px;"></div>
                        <div class="duongke" style="border: 3px solid #2dc258; width: 22%; position: absolute; top:29px; margin-left: 48px;"></div>
                    <?php } ?>
                    <?php if ($tt == 2){ ?>
                        <div class="tt-tiendo1" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1; ">
                            <div class="icon1" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-receipt" style="font-size: 35px; border: 4px solid #2dc258; padding: 10px 15px 11px 15px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text1">Đơn hàng đã đặt</div>
                            <div class="time1" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-clipboard-check" style="font-size: 35px; border: 4px solid #2dc258; padding: 9px 15px 10px 15px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text2">Chờ xác nhận</div>
                            <div class="time2" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-dolly" style="font-size: 35px; border: 4px solid #2dc258; padding: 12px 10px 10px 10px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text2">Chờ lấy hàng</div>
                            <div class="time3" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date2'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-truck-fast" style="font-size: 35px; border: 4px solid #e0e0e0; padding: 12px 10px 12px 10px; border-radius: 50%; background-color: #fff; color: #e0e0e0;"></i></div>
                            <div class="text2">Chờ giao hàng</div>
                            <div class="time4" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-box-open" style="font-size: 35px; border: 4px solid #e0e0e0; padding: 12px 9px 10px 9px; border-radius: 50%; background-color: #fff; color: #e0e0e0;"></i></div>
                            <div class="text2">Đã giao</div>
                            <div class="time5" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"></div>
                        </div>

                        <div class="duongke2" style="border: 3px solid #e0e0e0; width: 90%; position: absolute; top:29px; margin-left: 48px;"></div>
                        <div class="duongke" style="border: 3px solid #2dc258; width: 45%; position: absolute; top:29px; margin-left: 48px;"></div>
                    <?php } ?>
                    <?php if ($tt == 3){ ?>
                        <div class="tt-tiendo1" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1; ">
                            <div class="icon1" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-receipt" style="font-size: 35px; border: 4px solid #2dc258; padding: 10px 15px 11px 15px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text1">Đơn hàng đã đặt</div>
                            <div class="time1" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-clipboard-check" style="font-size: 35px; border: 4px solid #2dc258; padding: 9px 15px 10px 15px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text2">Chờ xác nhận</div>
                            <div class="time2" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-dolly" style="font-size: 35px; border: 4px solid #2dc258; padding: 12px 10px 10px 10px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text2">Chờ lấy hàng</div>
                            <div class="time3" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date2'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-truck-fast" style="font-size: 35px; border: 4px solid #2dc258; padding: 12px 10px 12px 10px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text2">Chờ giao hàng</div>
                            <div class="time4" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date3'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-box-open" style="font-size: 35px; border: 4px solid #e0e0e0; padding: 12px 9px 10px 9px; border-radius: 50%; background-color: #fff; color: #e0e0e0;"></i></div>
                            <div class="text2">Đã giao</div>
                            <div class="time5" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"></div>
                        </div>

                        <div class="duongke2" style="border: 3px solid #e0e0e0; width: 90%; position: absolute; top:29px; margin-left: 48px;"></div>
                        <div class="duongke" style="border: 3px solid #2dc258; width: 67%; position: absolute; top:29px; margin-left: 48px;"></div>
                    <?php } ?>
                    <?php if ($tt == 4){ ?>
                        <div class="tt-tiendo1" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1; ">
                            <div class="icon1" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-receipt" style="font-size: 35px; border: 4px solid #2dc258; padding: 10px 15px 11px 15px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text1">Đơn hàng đã đặt</div>
                            <div class="time1" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-clipboard-check" style="font-size: 35px; border: 4px solid #2dc258; padding: 9px 15px 10px 15px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text2">Chờ xác nhận</div>
                            <div class="time2" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-dolly" style="font-size: 35px; border: 4px solid #2dc258; padding: 12px 10px 10px 10px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text2">Chờ lấy hàng</div>
                            <div class="time3" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date2'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-truck-fast" style="font-size: 35px; border: 4px solid #2dc258; padding: 12px 10px 12px 10px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text2">Chờ giao hàng</div>
                            <div class="time4" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date3'] ?></div>
                        </div>
                        <div class="tt-tiendo2" style="border: 1px solid none; width: 121px; text-align: center; z-index: 1;">
                            <div class="icon2" style="display: flex; justify-content: center; align-items: center;"><i class="fa-solid fa-box-open" style="font-size: 35px; border: 4px solid #2dc258; padding: 12px 9px 10px 9px; border-radius: 50%; background-color: #fff; color: #2dc258;"></i></div>
                            <div class="text2">Đã giao</div>
                            <div class="time5" style="font-size: .75rem; color: rgba(0,0,0,.26); height: .875rem;"><?php echo $a['date4'] ?></div>
                        </div>

                        <div class="duongke2" style="border: 3px solid #e0e0e0; width: 90%; position: absolute; top:29px; margin-left: 48px;"></div>
                        <div class="duongke" style="border: 3px solid #2dc258; width: 90%; position: absolute; top:29px; margin-left: 48px;"></div>
                    <?php } ?>
                    <?php if($tt == 0){ ?>
                        <div class="tbhuy" style="width: 100%; height: auto; text-align: center; padding: 0px; margin: 0px;">
                            <p style="padding: 0px; margin: 0px; font-size: 20px; font-style: italic; color: #a9a8a8;">Đơn hàng đã được hủy</p>
                        </div>
                    <?php } ?>
                    </div>
                </div>

            </div>
            <?php $loadAllHDCT = loadAllHDCT($a['id_hoadon']) ?>
            <?php foreach($loadAllHDCT as $b): ?>
            <?php $get_id_pro = get_id_pro($b['id_chitiet']) ?>
                <?php foreach ($get_id_pro as $ab): ?>
                    <?php $id_pro = $ab['id_pro']; ?>
                <?php endforeach; ?>
            <div class="sanpham_donhang" style="
                padding: 10px;
                border-bottom: 1px dotted rgba(0,0,0,.09);">
                <!-- ẢNh -->
                <div class="img">
                    <img style="
                    width: 100px;
                    height: 100px;
                    margin: 5px;" 
                    src="img/sanpham/<?php echo $b['img_sp'] ?>" alt="" />
                </div>
                <!-- TÊN SP -->
                <div class="tensanpham" style="padding-top: 22px; width: 735px; margin-left: 5px;">
                    <a style="text-decoration: none" href="index.php?act=chitietsanpham&id_chitiet=<?php echo $b['id_chitiet'] ?>&id_pro=<?php echo $id_pro; ?>"><?php echo $b['tensp'] ?></a>
                    <br />
                    <br />
                    <div class="soluong">
                        <span style="font-weight: bold">x<?php echo $b['soluong'] ?></span>
                    </div>
                </div>
                <!-- GIÁ -->
                <div class="giatien" style="
                font-weight: bold;
                float: right;
                color: red;
                padding-top: 65px;
                ">
                    <span style="line-height: 25px; float: left; text-align: right;"><?php echo $b['giasp'] ?> đ</span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- <div class="form-donhang">
            <div class="sanpham_donhang" style="
                padding: 10px;
                border-bottom: 1px dotted rgba(0,0,0,.09);
            ">
                <div class="img">
                    <img style="
                    width: 100px;
                    height: 100px;
                    margin: 5px;
                    border: 1px solid #e1e1e1;
                    " src="img/sanpham1.jpg" alt="" />
                </div>
                <div class="tensanpham" style="padding-top: 22px">
                    <a style="text-decoration: none" href="">Kính cường lực Iphone Kingkong Chống Nhìn Trộm Baiko Tự Dán
                        Blue
                        Arrow Che Bụi 7Plus 8Plus Max 11 12 13 14 Promax awifi</a>
                    <br />
                    <br />
                    <div class="soluong">
                        <span style="font-weight: bold">x2</span>
                    </div>
                </div>
                <div class="giatien" style="
                font-weight: bold;
                float: right;
                color: red;
                padding-top: 65px;
                margin-left: -15px;
                ">
                    <span style="line-height: 25px">20.000.000 đ</span>
                </div>
            </div>
        </div> -->
        <!-- END SAN PHAM -->

        <!-- TỔNG TIỀN -->
        <div class="form-tongtien" style="padding-top: 50px; background-color: #fffefb;">
            <div class="tong-tien" style="display: flex; float: right; margin-right: 2%; font-size: 17px;background-color: #fffefb;">
                <div class="div" style="margin: 0px 6px">Thành tiền:</div>
                <span style="font-weight: bold; color: red"><?php echo $a['tongtien_vn'] ?> đ</span>
            </div>
        </div>
        <form action="index.php?act=xacnhan_mua_huy" method="post">
            <div class="a" style="background-color: #fffefb; margin-bottom: 30px;">
            <input type="hidden" name="id_hoadon" value="<?php echo $a['id_hoadon'] ?>">
            <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'] ?>">
            <input type="hidden" name="date4" value="<?php echo $real_time; ?>">
            <input type="hidden" name="date5" value="<?php echo $real_time2; ?>">
                <div class="chuc-nang">
                    <div class="mualai">
                        <!-- người dùng có thể hủy đơn khi chưa xác nhận -->
                        <?php if($tt == 1){ ?>
                        <button type="submit" name="huydon" style="width: 100px; height: 40px">
                            Hủy đơn
                        </button>
                        <!-- người dùng xác nhận đã nhận hàng -->
                        <?php } elseif($tt == 3){ ?>
                        <button type="submit" name="danhan" style="width: 100px; height: 40px">
                            Đã nhận
                        </button>
                        <!-- gợi ý người dùng mua lại khi hủy đơn hoặc nhận hàng thành công -->
                        <?php }elseif($tt == 0 || $tt == 4){ ?>
                        <button type="submit" name="mualai" style="width: 100px; height: 40px">
                            Mua lại
                        </button>
                        <!-- không thể xác nhận khi chưa được giao  -->
                        <?php } else { ?>
                        <button type="submit" name="" style="width: 100px; height: 40px" disabled>
                            Đã nhận
                        </button>
                        <?php } ?>
                    </div>
                    <div class="lien-he">
                        <button style="width: 160px; height: 40px" type="submit">
                            Liên hệ người bán
                        </button>
                    </div>
                </div>
                <?php if($tt > 1 && $tt < 4){ ?>
                <div class="luuy" style="">
                    <p style="text-align: right; margin: 0px; padding: 0px; padding-bottom: 10px; padding-right: 10px; color: red; font-style: italic;">Chỉ bấm "Đã nhận" khi đã nhận được hàng!</p>
                </div>
                <?php } ?>
            </div>
        </form>
    <?php endforeach; ?>
</div>