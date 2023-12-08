<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">stt</th>
                <th scope="col">Tên tài khoản</th>
                <th scope="col">Pass</th>
                <th scope="col">Email</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>

            <tr>

                <td>1</td>
                <th scope="row">admin</th>
                <th scope="row">1</th>
                <th scope="row">vanhai@gmail.com</th>
                <th scope="row">
                    <a type="button" class="btn btn-danger" href="index.php?act=suaUser">Sửa</a>
                    <a class="btn btn-dark" href="index.php?act=xoaUser&&iduser=<?php echo $user['id'] ?>"
                        onclick="return confirm('Bạn muốn xóa tài khoản này không?')">Xóa</a>
                </th>


            </tr>

        </tbody>
    </table>
</div>