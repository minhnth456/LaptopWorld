<div class="container" style="padding-top: 20px;">
    <?php
        extract($taikhoan);
    ?>

    <form action="index.php?act=fixUser" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="name" value="<?php echo $name ?>" required>
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="email"  value="<?php echo $email ?>" required>
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="pass" value="<?php echo $pass ?>" required>
            <label for="floatingInput">Pass</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="address" value="<?php echo $address ?>">
            <label for="floatingInput">Address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="tel" value="<?php echo $tel ?>">
            <label for="floatingInput">Tel</label>
        </div>
        <!-- admin  -->
        <?php if($_SESSION['role'] == 2){ ?>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="role" value="<?php echo $role ?>"v required>
            <label for="floatingInput">Role</label>

        </div>
        <?php } ?>

        </div>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit"
                name="fixUser">Sửa tài khoản</button>
        </div>
    </form>



</div>