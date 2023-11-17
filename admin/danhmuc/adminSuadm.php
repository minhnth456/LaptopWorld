<div class="container" style="padding-top: 20px;">

    <?php
    if(isset($_GET['iddm'])){
        $load_1dm = load1dm($_GET['iddm']);
    foreach($load_1dm as $dm_1){
    ?>
    <form action="index.php?act=suadm" method="post" enctype="multipart/form-data">

        <input type="hidden" name="iddm" value="<?php echo $dm_1['id_dm'] ?>">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Tên sản phẩm" name="tendm" required>
            <label for="floatingInput"><?php echo $dm_1['name'] ?></label>
        </div>

        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="suadm">Sửa
                danh mục</button>
        </div>

    </form>

    <?php }} ?>
    <?php 
    if(isset($thongbao) && $thongbao != ""){
        echo '<h2 style="color: green;">' . $thongbao . '</h2>';

    }
    ?>


</div>
