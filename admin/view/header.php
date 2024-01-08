<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../font/font-awesome/css/all.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <title>Quản trị</title>
</head>

<body>
    <div class="container-p-1" style="opacity: 1;">
        <!-- start header -->
        <header>
            <!-- menu1 -->
            <div class="menu" style="margin-bottom:10px">
                <div class="logo">
                    <a href="../index.php"><img src="../img/logo.png" alt="" /></a>
                </div>
                <div class="tim-kiem mgl-5">
                    <form action="" method="post" class="tim">
                        <input type="text" name="" placeholder="Bạn muốn tìm sản phẩm gì?" />
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <div class="tai-khoan mgl-5">
                    <?php if(!isset($_SESSION['name'])) { ?>
                    <button id="openForm" onclick="mo_fo('dangki')">Đăng kí</button>
                    <p>|</p>
                    <button id="openForm" onclick="mo_fo('dangnhap')">Đăng nhập</button>

                </div>
                <?php } else {?>
                <div class="dropdown">
                    <button style="width:auto;height:40px;display: flex; align-items: center;"
                        class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div style="text-align: center; margin-right: 5px;">
                            <h2 style="font-size: 15px; margin: 0;"><?php echo $_SESSION['name'] ?></h2>
                        </div>

                    </button>

                    <ul class="dropdown-menu dropdown-menu-light">
                        <li><a class="dropdown-item " href="index.php?act=danhsachsp">Quản Trị</a></li>
                        <li><a class="dropdown-item" href="index.php?act=dangxuat">Đăng Xuất</a></li>
                        <!-- <li><a class="dropdown-item" href="index.php?act=">Cập nhật tài khoản</a></li> -->
                    </ul>


                </div>
                <?php } ?>
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
            <!-- role = 2 => admin -->
            <?php
                if($_SESSION['role']==2){

            ?>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Đơn hàng
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="index.php?act=donhang">Danh sách</a>
                    </li>
                </ul>
            </div>

            
            <?php } ?>
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
                        <a class="dropdown-item" href="index.php?act=sanpham_daban">Sản phẩm đã bán</a>
                        <a class="dropdown-item" href="index.php?act=sanpham_duocqtam">Top những sản phẩm được quan tâm
                            nhất</a>
                        <!-- <a class="dropdown-item" href="index.php?act=thongke">Biểu đồ theo ngày</a> -->
                        <a class="dropdown-item" href="index.php?act=thongke_tuan">Biểu đồ theo tuần</a>
                        <a class="dropdown-item" href="index.php?act=thongke_thang">Biểu đồ theo tháng</a>
                        <a class="dropdown-item" href="index.php?act=thongke_nam">Biểu đồ theo năm</a>
                        <a class="dropdown-item" href="index.php?act=thongke_soluongsp">Biểu đồ số lượng sản phẩm</a>

                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- end nav -->


    <!-- end banner -->
    </header>
    </div>