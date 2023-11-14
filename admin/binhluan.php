<div class="container" style="padding-top: 20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Nội dung bình luận</th>
                <th scope="col">ảnh sản phẩm</th>
                <th scope="col">Ngày bình luận</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row">1</th>
                <th scope="row">adu cang tit</th>
                <th scope="row"><img width="100px" src="../img/sanpham1.jpg" alt="" /></th>
                <th scope="row">22/2/2023</th>
                <th scope="row">
                    <a class="btn btn-dark" href="index.php?act=binhluan&idbl=<?php echo $bl['id'] ?>"
                        onclick="return confirm('Bạn muốn xóa bình luận sản phẩm không?')">Xóa</a>
                </th>

            </tr>

        </tbody>
    </table>
</div>