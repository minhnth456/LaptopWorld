<article>
            <!--lọc sp -->
            <div class="header" style="margin-top: 20px;">
                <!-- thương hiệu, giá sp, CPU, CardVGA, ram, ssd, từ khóa  -->
                <?php
                    if(isset($_GET['brand']) && $_GET['brand'] != ""){
                        $brand = $_GET['brand'];
                    } else {
                        $brand = "";
                    }

                    if(isset($_GET['brand_con']) && $_GET['brand_con'] != ""){
                        $brand_con = $_GET['brand_con'];
                    } else {
                        $brand_con = "";
                    }

                    if(isset($_GET['MIN']) && $_GET['MIN'] != ""){
                        $MIN = $_GET['MIN'];
                    } else {
                        $MIN = "";
                    }

                    if(isset($_GET['MAX']) && $_GET['MAX'] != ""){
                        $MAX = $_GET['MAX'];
                    } else {
                        $MAX = "";
                    }

                    if(isset($_GET['cpu']) && $_GET['cpu'] != ""){
                        $cpu = $_GET['cpu'];
                    } else {
                        $cpu = "";
                    }

                    if(isset($_GET['card']) && $_GET['card'] != ""){
                        $card = $_GET['card'];
                    } else {
                        $card = "";
                    }

                    if(isset($_GET['ram']) && $_GET['ram'] != ""){
                        $ram = $_GET['ram'];
                    } else {
                        $ram = "";
                    }

                    if(isset($_GET['ssd']) && $_GET['ssd'] != ""){
                        $ssd = $_GET['ssd'];
                    } else {
                        $ssd = "";
                    }

                    if(isset($_GET['keyword']) && $_GET['keyword'] != ""){
                        $keyword = $_GET['keyword'];
                    } else {
                        $keyword = "";
                    }
                ?>

                <!-- Bộ lọc thương hiệu  -->
                <div class="menu_article">
                <!-- Sau khi người dùng nhấn chọn thương hiệu -->
                <?php if(isset($brand) && $brand != ""){ ?>
                    <a href="
                            index.php?act=sanpham&
                            <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                            <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                            <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                            <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                            <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                            <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                            <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                        " 
                    style = "color: black; text-decoration: none;">Laptop <?php echo $brand ?>(Xóa)</a>
                <?php } else { ?>
                    <!-- Thương hiệu khi chưa được chọn -->
                    <span>Thương hiệu <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <?php $chitiet_danhmuc = boloc_chitiet_danhmuc($brand_con, $MIN, $MAX, $cpu, $card, $ram, $ssd, $keyword); ?>
                        <?php foreach($chitiet_danhmuc as $dm): ?>
                        <li><a href="
                                    index.php?act=sanpham&brand=<?php echo $dm['name'].'&'; ?>
                                    <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                                    <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                                    <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                                    <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                    <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                    <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                    <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                ">Laptop <?php echo $dm['name'] ?> (<?php echo $dm['soluong'] ?>)</a></li>
                        <?php endforeach; ?>
                    </ul>

                    <?php } ?>
                </div>

                <!-- Bộ lọc giá  -->
                <div class="menu_article">
                <!-- Sau khi người dùng chọn giá -->
                <?php if($MAX != "" || $MIN != ""){ ?>
                    <a href="
                            index.php?act=sanpham&
                            <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?>
                            <?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                            <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                            <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                            <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                            <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                            <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                        " 
                    style = "color: black; text-decoration: none;">
                    <?php if($MIN == 5000000 && $MAX == 10000000){ echo '5tr-10tr'; } ?>
                    <?php if($MIN == 10000000 && $MAX == 20000000){ echo '10tr-20tr'; } ?>
                    <?php if($MIN == 20000000 && $MAX == 30000000){ echo '20tr-30tr'; } ?>
                    <?php if($MIN == 30000000){ echo 'Trên 30tr'; } ?>
                    (Xóa)
                    </a>
                <?php } else { ?>
                    <!-- Khi chưa chọn giá -->
                    <span>Giá <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <?php $boloc_giasp = boloc_giasp($brand, $brand_con, $cpu, $card, $ram, $ssd, $keyword) ?>
                        <?php foreach($boloc_giasp as $gia): ?>

                            <?php if($gia['gia0510']){ ?>
                            <li><a href="
                                        index.php?act=sanpham&MIN=5000000&MAX=10000000&
                                        <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?>
                                        <?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                        <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                                        <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                        <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                        <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                        <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                    ">5 triệu - 10 triệu (<?php echo $gia['gia0510'] ?>)</a></li>
                            <?php } ?>

                            <?php if($gia['gia1020']){ ?>
                            <li><a href="
                                        index.php?act=sanpham&MIN=10000000&MAX=20000000&
                                        <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?>
                                        <?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                        <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                                        <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                        <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                        <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                        <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                    ">10 triệu - 20 triệu (<?php echo $gia['gia1020'] ?>)</a></li>
                            <?php } ?>

                            <?php if($gia['gia2030']){ ?>
                            <li><a href="
                                        index.php?act=sanpham&MIN=20000000&MAX=30000000&
                                        <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?>
                                        <?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                        <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                                        <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                        <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                        <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                        <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                    ">20 triệu - 30 triệu (<?php echo $gia['gia2030'] ?>)</a></li>
                            <?php } ?>

                            <?php if($gia['gia30']){ ?>
                            <li><a href="
                                        index.php?act=sanpham&MIN=30000000&
                                        <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                        <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                                        <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                        <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                        <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                        <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                    ">Trên 30 triệu (<?php echo $gia['gia30'] ?>)</a></li>
                            <?php } ?>

                        <?php endforeach; ?>
                    </ul>
                <?php } ?>
                </div>

                <!-- Bộ lọc CPU  -->
                <div class="menu_article">
                <!-- Sau khi người dùng chọn CPU -->
                <?php if($cpu != ""){ ?>
                    <a href="
                            index.php?act=sanpham&
                            <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                            <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                            <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                            <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                            <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                            <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                            <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                        " 
                    style = "color: black; text-decoration: none;"><?php echo $cpu ?>(Xóa)</a>
                <?php } else { ?>
                    <!-- Khi chưa chọn CPU  -->
                    <span>CPU <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <?php $boloc_cpu = boloc_cpu($brand, $brand_con, $MIN, $MAX, $card, $ram, $ssd, $keyword) ?>
                        <?php foreach($boloc_cpu as $cpusp): ?>
                        
                            <?php if($cpusp['corei3']!= 0){ ?>
                            <li><a href="
                                        index.php?act=sanpham&cpu=Core i3&
                                        <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                        <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                                        <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                                        <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                        <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                        <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                        <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                    ">Intel® Core™ i3 (<?php echo $cpusp['corei3'] ?>)</a></li>
                            <?php } ?>

                            <?php if($cpusp['corei5']!= 0){ ?>
                            <li><a href="
                                        index.php?act=sanpham&cpu=Core i5&
                                        <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                        <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                                        <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                                        <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                        <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                        <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                        <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                    ">Intel® Core™ i5 (<?php echo $cpusp['corei5'] ?>)</a></li>
                            <?php } ?>

                            <?php if($cpusp['corei7']!= 0){ ?>
                            <li><a href="
                                        index.php?act=sanpham&cpu=Core i7&
                                        <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                        <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                                        <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                                        <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                        <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                        <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                        <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                    ">Intel® Core™ i7 (<?php echo $cpusp['corei7'] ?>)</a></li>
                            <?php } ?>

                            <?php if($cpusp['corei9']!= 0){ ?>
                            <li><a href="
                                        index.php?act=sanpham&cpu=Core i9&
                                        <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                        <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                                        <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                                        <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                        <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                        <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                        <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                    ">Intel® Core™ i9 (<?php echo $cpusp['corei9'] ?>)</a></li>
                            <?php } ?>

                            <?php if($cpusp['ryzen5']!= 0){ ?>
                            <li><a href="
                                        index.php?act=sanpham&cpu=Ryzen 5&
                                        <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                        <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                                        <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                                        <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                        <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                        <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                        <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                    ">AMD Ryzen™ 5 (<?php echo $cpusp['ryzen5'] ?>)</a></li>
                            <?php } ?>

                            <?php if($cpusp['ryzen7']!= 0){ ?>
                            <li><a href="
                                        index.php?act=sanpham&cpu=Ryzen 7&
                                        <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                        <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                                        <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                                        <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                        <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                        <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                        <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                    ">AMD Ryzen™ 7 (<?php echo $cpusp['ryzen7'] ?>)</a></li>
                            <?php } ?>

                            <?php if($cpusp['ryzen9']!= 0){ ?>
                            <li><a href="
                                        index.php?act=sanpham&cpu=Ryzen 9&
                                        <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                        <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                                        <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                                        <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                        <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                        <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                        <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                    ">AMD Ryzen™ 9 (<?php echo $cpusp['ryzen9'] ?>)</a></li>
                            <?php } ?>

                        <?php endforeach; ?>
                    </ul>
                <?php } ?>
                </div>
                <div class="menu_article">
                <!-- Sau khi người dùng chọn CardVGA -->
                <?php if($card != ""){ ?>
                    <a href="
                            index.php?act=sanpham&
                            <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                            <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                            <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                            <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                            <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                            <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                            <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                        " 
                    style = "color: black; text-decoration: none;"><?php echo $card ?>(Xóa)</a>
                <?php } else { ?>
                    <!-- Khi người dùng chọn CardVGA  -->
                    <span>Card VGA <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <?php $boloc_cardVGA = boloc_cardVGA($brand, $brand_con, $MIN, $MAX, $cpu, $ram, $ssd, $keyword) ?>
                        <?php foreach($boloc_cardVGA as $cardsp): ?>
                        <li><a href="
                                    index.php?act=sanpham&card=<?php echo $cardsp['cardVGA'].'&'; ?>
                                    <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                    <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                                    <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                                    <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                                    <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                    <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                    <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                "><?php echo $cardsp['cardVGA'] ?> (<?php echo $cardsp['soluongcard'] ?>)</a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php } ?>
                </div>
                <div class="menu_article">
                <!-- Sau khi người dùng chọn RAM -->
                <?php if($ram != ""){ ?>
                    <a href="
                            index.php?act=sanpham&
                            <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                            <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                            <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                            <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                            <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                            <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                            <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                        " 
                    style = "color: black; text-decoration: none;"><?php echo $ram ?>(Xóa)</a>
                <?php } else { ?>
                    <!-- Khi chưa chọn RAM  -->
                    <span>RAM <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <?php $boloc_ram = boloc_ram($brand, $brand_con, $MIN, $MAX, $cpu, $card, $ssd, $keyword) ?>
                        <?php foreach($boloc_ram as $ramsp): ?>
                        <li><a href="
                                    index.php?act=sanpham&ram=<?php echo $ramsp['ram'].'&'; ?>
                                    <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                    <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                                    <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                                    <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                                    <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                    <?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?>
                                    <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                "><?php echo $ramsp['ram'] ?> (<?php echo $ramsp['soluongram'] ?>)</a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php } ?>
                </div>
                <div class="menu_article">
                <!-- Sau khi người dùng chọn SSD -->
                <?php if($ssd != ""){ ?>
                    <a href="
                            index.php?act=sanpham&
                            <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                            <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                            <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                            <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                            <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                            <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                            <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                        " 
                    style = "color: black; text-decoration: none;"><?php echo $ssd ?>(Xóa)</a>
                <?php } else { ?>
                    <!-- Khi chưa chọn SSD  -->
                    <span>Ổ cứng <i class="fa fa-sort-down"></i></span>
                    <ul class="menu_sanpham">
                        <?php $boloc_ssd = boloc_ssd($brand, $brand_con, $MIN, $MAX, $cpu, $card, $ram, $keyword) ?>
                        <?php foreach($boloc_ssd as $ssdsp): ?>
                        <li><a href="
                                    index.php?act=sanpham&ssd=<?php echo $ssdsp['ssd'].'&'; ?>
                                    <?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?>
                                    <?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?>
                                    <?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?>
                                    <?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?>
                                    <?php if($card != ""){ echo 'card='.$card.'&'; } ?>
                                    <?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?>
                                    <?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>
                                ">SSD <?php echo $ssdsp['ssd'] ?> (<?php echo $ssdsp['soluongssd'] ?>)</a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php } ?>
                </div>
            </div>
            <!-- sắp xếp -->
            <div class="sapxep">
                <span> Sắp xếp theo </span>
                <select name="sapxep" id="sapxepSelect" onchange="sapxepTheo()">
                    <option value="http://localhost/LaptopWorld/index.php?act=sanpham&sapxep=1&">Chọn...</option>
                    <option value="http://localhost/LaptopWorld/index.php?act=sanpham&sapxep=2&<?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?><?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?><?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?><?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?><?php if($card != ""){ echo 'card='.$card.'&'; } ?><?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?><?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?><?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>">Mới nhất</option>
                    <option value="http://localhost/LaptopWorld/index.php?act=sanpham&sapxep=3&<?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?><?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?><?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?><?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?><?php if($card != ""){ echo 'card='.$card.'&'; } ?><?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?><?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?><?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>">Cũ nhất</option>
                    <option value="http://localhost/LaptopWorld/index.php?act=sanpham&sapxep=4&<?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?><?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?><?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?><?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?><?php if($card != ""){ echo 'card='.$card.'&'; } ?><?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?><?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?><?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>">Giá tăng dần</option>
                    <option value="http://localhost/LaptopWorld/index.php?act=sanpham&sapxep=5&<?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?><?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?><?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?><?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?><?php if($card != ""){ echo 'card='.$card.'&'; } ?><?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?><?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?><?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>">Giá giảm dần</option>
                    <option value="http://localhost/LaptopWorld/index.php?act=sanpham&sapxep=6&<?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?><?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?><?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?><?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?><?php if($card != ""){ echo 'card='.$card.'&'; } ?><?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?><?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?><?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>">Tên từ A-Z</option>
                    <option value="http://localhost/LaptopWorld/index.php?act=sanpham&sapxep=7&<?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?><?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?><?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?><?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?><?php if($card != ""){ echo 'card='.$card.'&'; } ?><?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?><?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?><?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>">Nhiều lượt xem nhất</option>
                </select>
            </div>
            <!-- end lọc sp -->

            <!-- Hiện sp -->
            <div class="main">
                
                <?php 
                    if(isset($_GET['sapxep']) && ($_GET['sapxep']) > 0){
                        $sapxep = $_GET['sapxep'];
                    } else {
                        $sapxep = "";
                    }
                    // đếm số lượng sản phẩm
                    $dem_so_luong_sp = dem_so_luong_sp($brand, $brand_con, $MIN, $MAX, $cpu, $card, $ram, $ssd, $keyword, $sapxep);
                    $tongsp = count($dem_so_luong_sp);
                    // số trang dựa theo tổng sản phẩm (mỗi trang 24 sp)
                    $sotrang = ceil($tongsp / 24);
                    if(isset($_GET['page']) && ($_GET['page']) > 0){
                        $page = $_GET['page'];
                    } else {
                        $page = 1;
                    }
                    
                    // load tất cả sản phẩm index
                    $loadAllSpIndex = loadAllSpIndex($page, $brand, $brand_con, $MIN, $MAX, $cpu, $card, $ram, $ssd, $keyword, $sapxep);
                ?>
                <?php foreach($loadAllSpIndex as $a): ?>
                <div class="sanpham">
                    <a href="index.php?act=chitietsanpham&id_chitiet=<?php echo $a['id_chitiet']; ?>&id_pro=<?php echo $a['id_pro']; ?>" class="img">
                        <img src="./img/sanpham/<?php echo $a['img']; ?>" alt="" />
                    </a>
                    <div class="namesp">
                        <a href="index.php?act=chitietsanpham&id_chitiet=<?php echo $a['id_chitiet']; ?>&id_pro=<?php echo $a['id_pro']; ?>">[New Outlet] <?php echo $a['tensp'] ?> (<?php echo $a['cpu'] ?>, <?php echo $a['ram'] ?>, <?php echo $a['ssd'] ?>, <?php echo $a['cardVGA'] ?>)</a>
                    </div>
                    <div class="price"><?php echo $a['giasp'] ?> </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- end hiện sp -->

            <div class="footer">
                <nav aria-label="Page navigation example">
                    <ul class="pagination" style="display: flex; justify-content: center; margin: 20px 0px">
                        <li class="page-item"><a class="page-link" href="index.php?act=sanpham&page=<?php echo ($page - 1) ?>&<?php if($sapxep != ""){ echo 'sapxep='.$sapxep.'&'; } ?><?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?><?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?><?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?><?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?><?php if($card != ""){ echo 'card='.$card.'&'; } ?><?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?><?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?><?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>">Prev</a></li>
                        <?php for($i = 0; $i < $sotrang; $i++){ ?>
                            <li class="page-item"><a class="page-link" href="index.php?act=sanpham&page=<?php echo ($i+1) ?>&<?php if($sapxep != ""){ echo 'sapxep='.$sapxep.'&'; } ?><?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?><?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?><?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?><?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?><?php if($card != ""){ echo 'card='.$card.'&'; } ?><?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?><?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?><?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>"><?php echo ($i+1) ?></a></li>
                        <?php } ?>
                        <li class="page-item"><a class="page-link" href="index.php?act=sanpham&page=<?php echo ($page + 1) ?>&<?php if($sapxep != ""){ echo 'sapxep='.$sapxep.'&'; } ?><?php if($brand != ""){ echo 'brand='.$brand.'&'; } ?><?php if($brand_con != ""){ echo 'brand_con='.$brand_con.'&'; } ?><?php if($MIN != ""){ echo 'MIN='.$MIN.'&'; } ?><?php if($MAX != ""){ echo 'MAX='.$MAX.'&'; } ?><?php if($cpu != ""){ echo 'cpu='.$cpu.'&'; } ?><?php if($card != ""){ echo 'card='.$card.'&'; } ?><?php if($ram != ""){ echo 'ram='.$ram.'&'; } ?><?php if($ssd != ""){ echo 'ssd='.$ssd.'&'; } ?><?php if($keyword != ""){ echo 'keyword='.$keyword.'&'; } ?>">Next</a></li>
                    </ul>
                </nav>
            </div>
        </article>
        <!-- end article -->
<script>
    function sapxepTheo(){
        var newURL = document.getElementById("sapxepSelect").value;
        // Chuyển hướng trang
        window.location.href = newURL;
    }
</script>