<div class="container" style="padding-top: 20px;">

    <?php
    if(isset($_GET['idchitietdm'])){
        $chitiet_dm = hienthi_dmct($_GET['idchitietdm']);
        foreach($chitiet_dm as $dm_chitiet){
    ?>
    <form action="index.php?act=fixdm_ct&iddm=<?php echo $dm_chitiet['id'];?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="idchitietdm" value="<?php echo $dm_chitiet['id'] ?>">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Tên sản phẩm" name="tendmct"
                required>
            <label for="floatingInput"><?php echo $dm_chitiet   ['name'] ?></label>
        </div>

        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit"
                name="fixdmct">Sửa
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