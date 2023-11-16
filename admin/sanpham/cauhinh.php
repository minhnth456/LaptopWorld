<div class="container" style="padding-top: 20px">
    <form class="row" action="index.php?act=themch" method="post" enctype="multipart/form-data" onsubmit="return checkForm_themsp()">
        <input type="hidden" name="id_pro" value="<?php echo $id_pro; ?>">
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
            <input type="number" class="form-control" id="soluong" placeholder="" name="soluong" require>
            <label for="floatingPassword" style="left: 10px">Số lượng</label>
        </div>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="themch">Thêm cấu hình</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Tên</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Yêu thích</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            
            <tr>
                <td><?php echo $i ?></td>
                <th scope="row"></th>
                <th scope="row">
                    <img width="100px" src="../img/sanpham1.jpg" alt="" />
                </th>
                <th scope="row" style="max-height: 100px; max-width: 300px;"></th>
                <th scope="row"></th>
                <th scope="row" style="max-width: 135px;">
                    <a type="button" class="btn btn-danger" href="index.php?act=suasp" style="margin-bottom: 5px">Sửa</a>
                    <a class="btn btn-dark" href="index.php?act=xoasp&id=" style="margin-bottom: 5px" onclick="return confirm('Bạn muốn xóa sản phẩm không?')">Xóa</a>
                    
                </th>
            </tr>
            <?php $i++; ?>
            
        </tbody>
    </table>
</div>