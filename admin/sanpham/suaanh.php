<div class="container" style="padding-top: 20px">
    <form class="row" action="index.php?act=fixanh" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3 col-6">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="id_pro" value="<?php echo $id_pro; ?>">
            <input type="file" class="form-control" id="hinh" placeholder="" name="hinh" require>
            <label for="floatingPassword" style="left: 10px">Ảnh</label>
        </div>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="fixanh" id="themanhsp">Thay ảnh</button>
        </div>
    </form>
</div>