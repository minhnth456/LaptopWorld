<div class="container" style="padding-top: 20px">
    <form class="row" action="index.php?act=themanhsp" method="post" enctype="multipart/form-data" onsubmit="return checkForm_themsp()">
        <div class="form-floating mb-3 col-6">
            <input type="hidden" name="id_pro" value="<?php echo $id_pro; ?>">
            <input type="file" class="form-control" id="hinh" placeholder="" name="hinh[]" multiple require>
            <label for="floatingPassword" style="left: 10px">Ảnh</label>
        </div>
        <div class="d-grid" onmouseover="check_anh()">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="themanhsp" id="themanhsp">Thêm ảnh</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            <?php foreach($allAnhsp as $a): ?>
            <tr>
                <td><?php echo $i ?></td>
                <th scope="row">
                    <img width="100px" src="../img/sanpham/<?php echo $a['img'] ?>" alt="" />
                </th>
                <th scope="row" style="max-width: 135px;">
                    <a type="button" class="btn btn-danger" href="index.php?act=suaanh&id=<?php echo $a['id'];?>&id_pro=<?php echo $id_pro; ?>" style="margin-bottom: 5px">Sửa</a>
                    <a class="btn btn-dark" href="index.php?act=xoaAnhsp&id=<?php echo $a['id'];?>&id_pro=<?php echo $id_pro; ?>" style="margin-bottom: 5px" onclick="return confirm('Bạn muốn xóa sản phẩm không?')">Xóa</a>
                </th>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>