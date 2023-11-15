<div class="container" style="padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">tên danh mục</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row">1</th>
                <th scope="row">laptop acer</th>
                <th scope="row">
                    <a class="btn btn-danger" href="index.php?act=suadm">Sửa</a>
                    <a class="btn btn-dark" href="index.php?act=binhluan&idbl=<?php echo $bl['id'] ?>"
                        onclick="return confirm('Bạn muốn xóa bình luận sản phẩm không?')">Xóa</a>
                </th>
            </tr>

        </tbody>
    </table>
</div>