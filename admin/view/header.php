<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../font/font-awesome/css/all.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <div class="container-p-1" style="opacity: 1;">
        <!-- start header -->
        <header>
            <!-- menu1 -->
            <div class="menu" style="margin-bottom:10px">
                <div class="logo">
                    <a href="#"><img src="../img/logo.png" alt="" /></a>
                </div>
                <div class="tim-kiem mgl-5">
                    <form action="" method="post" class="tim">
                        <input type="text" name="" id="" placeholder="Bạn muốn tìm sản phẩm gì?" />
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
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
                                <input type="text" placeholder="Tên đăng nhập" />
                                <small></small>
                                <span></span>
                            </div>
                            <div class="o-input">
                                <input type="email" placeholder="Email" />
                                <small></small>
                                <span></span>
                            </div>
                            <div class="o-input">
                                <input type="password" placeholder="Mật khẩu" />
                                <small></small>
                                <span></span>
                            </div>
                            <div class="o-input">
                                <input type="password" placeholder="Nhập lại mật khẩu" />
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
                                <input type="text" placeholder="Tên đăng nhập" />
                                <small></small>
                                <span></span>
                            </div>
                            <div class="o-input">
                                <input type="password" placeholder="Mật khẩu" />
                                <small></small>
                                <span></span>
                            </div>
                            <button type="submit">Đăng nhập</button>
                            <div class="link-dk-dn">
                                Chưa có tài khoản?<a href="#" onclick="chuyen_fo('dangki')">Đăng kí ngay</a>
                            </div>
                        </form>
                        <button id="closeForm" onclick="dong_fo(event)">
                            <i class="fa-solid fa-x"></i>
                        </button>
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
            <div class="menu_quantri">
                <div class="menu_admin">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Sản phẩm
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="index.php?act=danhsachsp">Danh sách</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index.php?act=adminAdd">Thêm sản phẩm</a>
                            </li>
                        </ul>
                    </div>


                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Bình luận
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="index.php?act=binhluan">Danh sách bình luận</a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Danh mục
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="index.php?act=danhmuc">Danh sách</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index.php?act=adddmuc">Thêm danh mục sản phẩm</a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Khách hàng
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="index.php?act=taikhoan">Danh sách khách hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Biểu đồ
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="index.php?act=danhsachsp">Danh sách</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- end nav -->


            <!-- end banner -->
        </header>
    </div>