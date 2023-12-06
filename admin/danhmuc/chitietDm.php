<div class="container" style="padding-top: 20px">
    <form action="index.php?act=addctdanhmuc" method="post" enctype="multipart/form-data">
        <?php 
    if(isset($thongbao) && $thongbao != ""){
        echo '<h2 style="color: green;">' . $thongbao . '</h2>';

    }
    ?>
        <div class="form-floating mb-3">
            <input type="hidden" name="iddm" value="<?php echo $iddm; ?>">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name_dm_ct" required>
            <label for="floatingInput">Tên danh mục con</label>
        </div>
        <div class="d-grid">
            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit"
                name="themctdm">Thêm
                danh mục</button>

        </div>
    </form>
    <input class="btn btn-primary" type="button" value="Thêm danh mục chi tiết">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Stt</th>
                <th scope="col">Tên danh mục chi tiết</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              if(isset($_GET['iddm'])&&$_GET['iddm'] > 0){
               $load_dmct = load_one_dmct($_GET['iddm']);
               foreach($load_dmct as $dmct){
              
              ?>
            <tr>
                <th scope="row"><?php echo $dmct['id'] ?></th>
                <th scope="row"><?php echo $dmct['name'] ?></th>
                <th scope="row">
                    <a class="btn btn-danger" href="index.php?act=suadm_ct&&idchitietdm=<?php echo $dmct['id']?>">Sửa</a>
                    <a class="btn btn-dark" href="index.php?act=xoadm_ct&&iddm=<?php echo $dmct['id']?>"
                        onclick="return confirm('Bạn muốn xóa danh mục sản phẩm không?')">Xóa</a>
                </th>
            </tr>
            <?php }}?>

        </tbody>
    </table>
</div>