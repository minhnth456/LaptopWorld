<div class="container" style="padding-top: 20px;">
    <form action="index.php?act=adminAdd" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" name="tensp" require>
            <label for="floatingInput">Tên sản phẩm</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingPassword" placeholder="Password" name="hinh" require>
            <label for="floatingPassword">Ảnh</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="gia" require>
            <label for="floatingPassword">Giá</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="motasp" require>
            <label for="floatingPassword">Mô tả</label>
        </div>
        <select style="" name="iddm" id="">
            <option value="1">acer</option>
            <option value="2">Hp</option>
        </select>
        <br>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit"
                name="submit">Thêm
                sản phẩm</button>
        </div>
</div>