<div class="container" style="padding-top: 20px">
    <form class="row" action="index.php?act=themch" method="post" enctype="multipart/form-data" onsubmit="return checkForm_themsp()">
        <div class="form-floating mb-3 col-6">
            <input type="hidden" name="id_pro" value="<?php echo $id_pro; ?>">
            <input type="text" class="form-control" id="cpu" placeholder="" name="cpu" require>
            <label for="floatingPassword" style="left: 10px">CPU</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="ram" placeholder="" name="ram" require>
            <label for="floatingPassword" style="left: 10px">Ram</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="ssd" placeholder="" name="ssd" require>
            <label for="floatingPassword" style="left: 10px">SSD</label>
        </div>
        <div class="form-floating mb-3 col-6">
            <input type="text" class="form-control" id="cardVGA" placeholder="" name="cardVGA" require>
            <label for="floatingPassword" style="left: 10px">Card VGA</label>
        </div>
        <div class="form-floating mb-3 col-4">
            <input type="text" class="form-control" id="giasp" placeholder="" name="giasp" require>
            <label for="floatingPassword" style="left: 10px">Giá</label>
        </div>
        <div class="form-floating mb-3 col-4">
            <input type="number" class="form-control" id="soluong" placeholder="" name="soluong" require>
            <label for="floatingPassword" style="left: 10px">Số lượng</label>
        </div>
        <div class="form-floating mb-3 col-4">
            <select class="form-select form-select-lg mb-3" style="margin-bottom: 15px; padding-top: .625rem; font-size: 1rem;" aria-label="Large select example" name="id_dmc">
                <option value="" selected disabled>Chọn danh mục con</option>
                <?php foreach($chitiet_danhmuc_con as $c): ?>
                <option value="<?php echo $c['id']; ?>" required><?php echo $c['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="themch">Thêm cấu hình</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">CPU</th>
                <th scope="col">RAM</th>
                <th scope="col">SSD</th>
                <th scope="col">CardVGA</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Danh mục con</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($loadAll_ctch as $a): ?>
            <tr>
                <td><?php echo $a['id_chitiet'] ?></td>
                <th scope="row"><?php echo $a['cpu'] ?></th>
                <th scope="row"><?php echo $a['ram'] ?></th>
                <th scope="row"><?php echo $a['ssd'] ?></th>
                <th scope="row"><?php echo $a['cardVGA'] ?></th>
                <th scope="row"><?php echo $a['giasp'] ?></th>
                <th scope="row"><?php echo $a['soluong'] ?></th>
                <th scope="row"><?php echo $a['name'] ?></th>
                <!-- <th scope="row">
                    <img width="100px" src="../img/sanpham1.jpg" alt="" />
                </th>
                <th scope="row" style="max-height: 100px; max-width: 300px;"></th>
                <th scope="row"></th> -->
                <th scope="row" style="max-width: 135px;">
                    <a type="button" class="btn btn-danger" href="index.php?act=suacauhinh&id_chitiet=<?php echo $a['id_chitiet'] ?>" style="margin-bottom: 5px">Sửa</a>
                    <a class="btn btn-dark" href="index.php?act=xoaspCT&id_chitiet=<?php echo $a['id_chitiet'] ?>&id_pro=<?php echo $a['id_pro'] ?>" style="margin-bottom: 5px" onclick="return confirm('Bạn muốn xóa sản phẩm không?')">Xóa</a>
                    
                </th>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>