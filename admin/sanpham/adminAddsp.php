<div class="container" style="padding-top: 20px;">
    <form class="row" action="index.php?act=themsp" method="post" enctype="multipart/form-data" onsubmit="return checkForm_themsp()">
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="tensp" placeholder="" name="tensp" require>
            <label for="floatingInput" style="left: 10px;">Tên sản phẩm</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="file" class="form-control" id="hinh" placeholder="" name="hinh" require>
            <label for="floatingPassword" style="left: 10px">Ảnh chính</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="cpu" placeholder="" name="cpu" require>
            <label for="floatingPassword" style="left: 10px">CPU</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="ram" placeholder="" name="ram" require>
            <label for="floatingPassword" style="left: 10px">Ram</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="ssd" placeholder="" name="ssd" require>
            <label for="floatingPassword" style="left: 10px">SSD (Ổ cứng)</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="cardVGA" placeholder="" name="cardVGA" require>
            <label for="floatingPassword" style="left: 10px">Card VGA</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="giasp" placeholder="" name="giasp" require>
            <label for="floatingPassword" style="left: 10px">Giá</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <textarea class="form-control" id="mota" placeholder="Mô tả sản phẩm" name="mota" required cols="30" rows="10"></textarea>
            <label for="floatingPassword" style="left: 10px">Mô tả</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="number" class="form-control" id="soluong" placeholder="" name="soluong" require>
            <label for="floatingPassword" style="left: 10px">Số lượng</label>
        </div>
        
        <div class="form-floating mb-3 col-3">
            <select class="form-select form-select-lg mb-3" style="margin-bottom: 15px; padding-top: .625rem; font-size: 1rem;" aria-label="Large select example" name="danhmuc">
                <option value="" selected disabled >Chọn danh mục</option>    
                <?php foreach($danhmuc as $a): ?>
                <option value="<?php echo $a['id_dm']; ?>" required><?php echo $a['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-floating mb-3 col-3">
            <select class="form-select form-select-lg mb-3" style="margin-bottom: 15px; padding-top: .625rem; font-size: 1rem;" aria-label="Large select example" name="id_dmc">
                <option value="0" selected disabled>Chọn danh mục con</option>
                <?php foreach($chitiet_danhmuc as $c): ?>
                <option value="<?php echo $c['id']; ?>" required><?php echo $c['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <br>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="themsp">Thêm sản phẩm</button>
        </div>
    </form>
</div>