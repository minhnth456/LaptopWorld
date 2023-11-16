<div class="container" style="padding-top: 20px;">
    <form action="index.php?act=adminSuasp" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idsp" value="">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Tên sản phẩm" name="tensp" required>
            <label for="floatingInput">laptop acer</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="floatingPassword" placeholder="Password" name="hinh" require>
            <label for="floatingPassword" style="left: 10px">Ảnh</label>
            <img width="100px" src="../img/sanpham1.jpg" alt="" />
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Giá" name="gia" required>
            <label for="floatingPassword">19.000.000 đ</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" id="floatingTextarea" placeholder="Mô tả sản phẩm" name="motasp" required
                cols="30" rows="10"></textarea>
            <label for="floatingTextarea">Hàng này ngon như cái ghế</label>
        </div>
        <select name="iddm">
            <option value="1">Acer</option>
            <option value="2">Dell</option>
        </select>
        <br><br>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit"
                name="updatesp">Sửa sản phẩm</button>
        </div>
    </form>



</div>