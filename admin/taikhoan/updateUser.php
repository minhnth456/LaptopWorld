<div class="container" style="padding-top: 20px;">


    <form action="index.php?act=adminSua_user" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_user" value="">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Tên user" name="pass" required>
            <label for="floatingInput">1</label> <!-- Sửa trường này -->
        </div>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit"
                name="suauser">Sửa pass tài khoản</button>
        </div>
    </form>
</div>