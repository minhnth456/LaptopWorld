<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Pass</th>
                <th scope="col">Address</th>
                <th scope="col">Tel</th>
                <th scope="col">Role</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $loadadd_taikhoan = loadadd_taikhoan();
                foreach($loadadd_taikhoan as $taikhoan){ 
            ?>
            <tr>
                <td><?php echo $taikhoan['id_user']?></td>
                <th scope="row"><?php echo $taikhoan['name']?></th>
                <th scope="row"><?php echo $taikhoan['email']?></th>
                <th scope="row"><?php echo $taikhoan['pass']?></th>
                <th scope="row"><?php echo $taikhoan['address']?></th>
                <th scope="row"><?php echo $taikhoan['tel']?></th>
                <th scope="row"><?php echo $taikhoan['role']?></th>
                <th scope="row">
                    <a type="button" class="btn btn-danger"
                        href="index.php?act=suaUser&id_user=<?php echo $taikhoan['id_user'] ?>">Sửa</a>
                    <a class="btn btn-dark" href="index.php?act=xoaUser&&id_user=<?php echo $taikhoan['id_user'] ?>"
                        onclick="return confirm('Bạn muốn xóa tài khoản này không?')">Xóa</a>
                </th>
            </tr>

            <?php } ?>
        </tbody>
    </table>
</div>