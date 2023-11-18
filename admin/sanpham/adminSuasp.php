<div class="container" style="padding-top: 20px;">
    <form class="row" action="index.php?act=adminSuasp" method="post" enctype="multipart/form-data">
        <?php extract($loadOne_sp); ?>
        <input type="hidden" name="id_pro" value="<?php echo $id_pro; ?>">
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="floatingInput" placeholder="Tên sản phẩm" name="tensp" value="<?php echo $tensp; ?>" required>
            <label for="floatingInput" style="left: 10px;" >Tên sản phẩm</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <select class="form-select form-select-lg mb-3" style="margin-bottom: 15px; padding-top: .625rem; font-size: 1rem;" aria-label="Large select example" name="id_dm" required>
                <option value="" selected disabled>Chọn danh mục</option>    
                <?php foreach($danhmuc as $a): ?>
                <option value="<?php echo $a['id_dm']; ?>" required><?php echo $a['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-floating mb-3 col-12">
            <textarea class="form-control" id="floatingTextarea" placeholder="Mô tả sản phẩm" name="mota"
                cols="30" rows="10" required><?php echo $mota; ?></textarea>
            <label for="floatingTextarea" style="left: 10px;">Mô tả sản phẩm</label>
        </div>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit"
                name="adminSuasp">Sửa sản phẩm</button>
        </div>
    </form>
</div>