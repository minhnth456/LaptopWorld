<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="font/font-awesome/css/all.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="preload-image"></div>
    <div class="container-p-0">

        <!-- start header -->
        <header>
            <!-- menu1 -->
            <div class="menu">
                <div class="logo">
                    <a href="#"><img src="./img/logo.png" alt="" /></a>
                </div>
                <div class="tim-kiem mgl-5">
                    <form action="" method="post" class="tim">
                        <input type="text" name="" id="" placeholder="Bạn muốn tìm sản phẩm gì?" />
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="tai-khoan mgl-5">
                    <button id="openForm" onclick="mo_fo('dangki')">Đăng kí</button>
                    <p>|</p>
                    <button id="openForm" onclick="mo_fo('dangnhap')">Đăng nhập</button>
                </div>
                <div class="lop-phu" id="lop-phu" onclick="dong_fo(event)">
                    <div class="form-dk-dn" id="form-dk-dn">
                        <!-- form đăng kí -->
                        <form id="dangki" action="" method="post">
                            <h1>Đăng kí</h1>
                            <div class="o-input">
                                <input type="text" placeholder="Tên đăng nhập">
                                <small></small>
                                <span></span>
                            </div>
                            <div class="o-input">
                                <input type="email" placeholder="Email">
                                <small></small>
                                <span></span>
                            </div>
                            <div class="o-input">
                                <input type="password" placeholder="Mật khẩu">
                                <small></small>
                                <span></span>
                            </div>
                            <div class="o-input">
                                <input type="password" placeholder="Nhập lại mật khẩu">
                                <small></small>
                                <span></span>
                            </div>
                            <button type="submit">Đăng kí</button>
                            <div class="link-dk-dn">
                                Đã có tài khoản?<a href="#" onclick="chuyen_fo('dangnhap')">Đăng nhập ngay</a>
                            </div>
                        </form>
                        <!-- form đăng nhập -->
                        <form id="dangnhap" action="" method="post">
                            <h1>Đăng nhập</h1>
                            <div class="o-input">
                                <input type="text" placeholder="Tên đăng nhập">
                                <small></small>
                                <span></span>
                            </div>
                            <div class="o-input">
                                <input type="password" placeholder="Mật khẩu">
                                <small></small>
                                <span></span>
                            </div>
                            <button type="submit">Đăng nhập</button>
                            <div class="link-dk-dn">
                                Chưa có tài khoản?<a href="#" onclick="chuyen_fo('dangki')">Đăng kí ngay</a>
                            </div>
                        </form>
                        <button id="closeForm" onclick="dong_fo(event)"><i class="fa-solid fa-x"></i></button>
                    </div>
                </div>
                <div class="gio-hang mgl-5">
                    <i class="fa-solid fa-cart-shopping"></i><br />
                    <a href="http://">Giỏ hàng</a><br />
                    <span class="so-luong-gio-hang">0</span>
                </div>
            </div>
            <!-- end menu1 -->

            <!-- start nav -->
            <div id="menu-con" class="menu-con">
                <ul>
                    <li>
                        <i class="fa-solid fa-house"></i><a class="capslock" href="index.php">Trang chủ</a>
                    </li>
                    <li class="m-c">
                        <i class="fa-solid fa-laptop"></i>
                        <a class="capslock" href="#">Sản phẩm</a>
                        <!-- menu dọc -->

                        <div class="danh-muc">
                            <div class="khung-danh-muc">
                                <?php
                            
                                 $list_dm = danhmuc();
                                 foreach($list_dm as $select_dm){ ?>
                                <div class="danh-sach-danh-muc">
                                    <div class="loai-danh-muc">
                                        <!-- tiêu đề -->
                                        <div class="tieu-de-danh-muc">
                                            <a class="nor-text" id="<?php echo $select_dm['id_dm'] ?>"
                                                href="index.php?act=danhmucsp">Laptop
                                                <?php echo $select_dm['name'] ?>
                                            </a>

                                        </div>
                                        <!-- sản phẩm -->
                                        <div class="san-pham-danh-muc">
                                            <?php
                                                $load_all_dmct = load_danhmucCt($select_dm['id_dm']);

                                            foreach($load_all_dmct as $sanpham){ ?>
                                            <div class="san-pham-danh-muc2">
                                                <a href="http://"><?php echo $sanpham['name'] ?></a>
                                            </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <?php }?>

                            </div>
                        </div>

                        <!-- end menu dọc -->
                    </li>
                    <li>
                        <i class="fa-solid fa-newspaper"></i>
                        <a class="capslock" href="http://">Tin tức</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-building-shield"></i>
                        <a class="capslock" href="http://">Chính sách</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone-volume"></i>
                        <a class="capslock" href="http://">Liên hệ</a>
                    </li>
                </ul>
            </div>
            <!-- end nav -->

        </header>
        <!-- end header -->