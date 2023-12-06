<div class="container" style="padding-top: 20px">
    <form class="row" action="index.php?act=fixch" method="post" enctype="multipart/form-data" onsubmit="return checkForm_themsp()">
        <?php extract($loadOne_ctch); ?>
        <div class="form-floating mb-3 col-6">
            <input type="hidden" name="id_pro" value="<?php echo $id_pro; ?>">
            <input type="hidden" name="id_chitiet" value="<?php echo $id_chitiet; ?>">
            <input type="text" class="form-control" id="cpu" placeholder="" name="cpu" value="<?php echo $cpu ?>" require>
            <label for="floatingPassword" style="left: 10px">CPU</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="ram" placeholder="" name="ram" value="<?php echo $ram ?>" require>
            <label for="floatingPassword" style="left: 10px">Ram</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="ssd" placeholder="" name="ssd" value="<?php echo $ssd ?>" require>
            <label for="floatingPassword" style="left: 10px">SSD</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="cardVGA" placeholder="" name="cardVGA" value="<?php echo $cardVGA ?>" require>
            <label for="floatingPassword" style="left: 10px">Card VGA</label>
        </div>
        <div class="form-floating mb-3 col-4">
            <input type="text" class="form-control" id="giasp" placeholder="" name="giasp" value="<?php echo $giasp ?>" require>
            <label for="floatingPassword" style="left: 10px">Giá</label>
        </div>
        <div class="form-floating mb-3 col-4">
            <input type="number" class="form-control" id="soluong" placeholder="" name="soluong" value="<?php echo $soluong ?>" require>
            <label for="floatingPassword" style="left: 10px">Số lượng</label>
        </div>
        <div class="form-floating mb-3 col-4">
            <select class="form-select form-select-lg mb-3" style="margin-bottom: 15px; padding-top: .625rem; font-size: 1rem;" aria-label="Large select example" name="id_dmc" require>
                <option value="0" selected disabled>Chọn danh mục con</option>
                <?php foreach($chitiet_danhmuc_con2 as $c): ?>
                <option value="<?php echo $c['id']; ?>" required><?php echo $c['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="fixch">Sửa cấu hình</button>
        </div>
    </form>
</div>