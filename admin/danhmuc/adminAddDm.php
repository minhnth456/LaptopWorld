<div class="container" style="padding-top: 20px;">
    <form action="index.php?act=adddmuc" method="post" enctype="multipart/form-data">
        <?php 
            if(isset($thongbao) && $thongbao != ""){
                echo '<h2 style="color: green;">' . $thongbao . '</h2>';

            } 
        ?>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name_dm" required>
            <label for="floatingInput">Tên danh mục</label>
        </div>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="themdm">Thêm danh mục</button>

        </div>
    </form>
</div>