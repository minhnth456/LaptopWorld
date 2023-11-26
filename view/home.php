            <!-- start banner -->
            <div class="banner">
                <div class="anh1">
                    <a href="#" id="anh-tu-dong-link">
                        <img src="img/anh0.jpg" alt="" id="anh-tu-dong"/>
                    </a>
                </div>
                <div class="anh2">
                    <div class="img1">
                    <a href="#"><img src="img/anh5.jpg" alt="" /></a>
                    </div>
                    <div class="img2">
                    <a href="#"><img src="img/anh4.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
            <!-- end banner -->  
        <!-- start article -->
        <article>
            <!--lọc sp -->
            <div class="header">
                <div class="menu_article">
                    <span>Thương hiệu <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                    </ul>
                </div>
                <div class="menu_article">
                    <span>Giá <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                    </ul>
                </div>
                <div class="menu_article">
                    <span>CPU <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                    </ul>
                </div>
                <div class="menu_article">
                    <span>Card VGA <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                    </ul>
                </div>
                <div class="menu_article">
                    <span>RAM <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                    </ul>
                </div>
                <div class="menu_article">
                    <span>Ổ cứng <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                    </ul>
                </div>
                <div class="menu_article">
                    <span>Màn hình <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                        <li><a href="#">Laptop Acer (78)</a></li>
                    </ul>
                </div>
            </div>
            <!-- sắp xếp -->
            <div class="sapxep">
                <span> Sắp xếp theo </span>
                <select name="">
                    <option value="1">Mới nhất</option>
                    <option value="1">Mới nhất</option>
                    <option value="1">Mới nhất</option>
                    <option value="1">Mới nhất</option>
                    <option value="1">Mới nhất</option>
                    <option value="1">Mới nhất</option>
                    <option value="1">Mới nhất</option>
                    <option value="1">Đánh giá cao nhất</option>
                    <option value="1">Mới nhất</option>
                    <option value="1">Mới nhất</option>
                </select>
            </div>
            <!-- end lọc sp -->

            <!-- Hiện sp -->
            <div class="main">
                <div class="sanpham">
                    <a href="#" class="img">
                        <img src="./img/sanpham1.jpg" alt="" />
                    </a>
                    <div class="namesp">
                        <a href="index.php?act=chitietsanpham">[New Outlet] Lenovo Slim 7 Pro X (Ryzen 9 6900HS, 32GB, 1TB, RTX 3050 4GB, 14.5'' 3K Touch)</a>
                    </div>
                    <div class="price">25.000.000</div>
                </div>

                <?php 
                    // load tất cả sản phẩm index
                    $loadAllSpIndex = loadAllSpIndex();
                ?>
                <?php foreach($loadAllSpIndex as $a): ?>
                <div class="sanpham">
                    <a href="index.php?act=chitietsanpham&id_chitiet=<?php echo $a['id_chitiet']; ?>&id_pro=<?php echo $a['id_pro']; ?>" class="img">
                        <img src="./img/sanpham/<?php echo $a['img']; ?>" alt="" />
                    </a>
                    <div class="namesp">
                        <a href="index.php?act=chitietsanpham&id_chitiet=<?php echo $a['id_chitiet']; ?>&id_pro=<?php echo $a['id_pro']; ?>">[New Outlet] <?php echo $a['tensp'] ?> (<?php echo $a['cpu'] ?>, <?php echo $a['ram'] ?>, <?php echo $a['ssd'] ?>, <?php echo $a['cardVGA'] ?>)</a>
                    </div>
                    <div class="price"><?php echo $a['giasp'] ?></div>
                </div>
                <?php endforeach; ?>

                <div class="sanpham">
                    <a href="#" class="img">
                        <img src="./img/sanpham1.jpg" alt="" />
                    </a>
                    <div class="namesp">
                        <a href="#">[New Outlet] Lenovo Slim 7 Pro X (Ryzen 9 6900HS, 32GB, 1TB, RTX 3050 4GB, 14.5'' 3K Touch)</a>
                    </div>
                    <div class="price">25.000.000</div>
                </div>

                <div class="sanpham">
                    <a href="#" class="img">
                        <img src="./img/sanpham1.jpg" alt="" />
                    </a>
                    <div class="namesp">
                        <a href="#">[New Outlet] Lenovo Slim 7 Pro X (Ryzen 9 6900HS, 32GB, 1TB, RTX 3050 4GB, 14.5'' 3K Touch)</a>
                    </div>
                    <div class="price">25.000.000</div>
                </div>

                <div class="sanpham">
                    <a href="#" class="img">
                        <img src="./img/sanpham1.jpg" alt="" />
                    </a>
                    <div class="namesp">
                        <a href="#">[New Outlet] Lenovo Slim 7 Pro X (Ryzen 9 6900HS, 32GB, 1TB, RTX 3050 4GB, 14.5'' 3K Touch)</a>
                    </div>
                    <div class="price">25.000.000</div>
                </div>
                
                <div class="sanpham">
                    <a href="#" class="img">
                        <img src="./img/sanpham1.jpg" alt="" />
                    </a>
                    <div class="namesp">
                        <a href="#">[New Outlet] Lenovo Slim 7 Pro X (Ryzen 9 6900HS, 32GB, 1TB, RTX 3050 4GB, 14.5'' 3K Touch)</a>
                    </div>
                    <div class="price">25.000.000</div>
                </div>
            </div>
            <!-- end hiện sp -->

            <div class="footer"></div>
        </article>
        <!-- end article -->