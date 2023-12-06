<div class="chontg" style="width: auto; height: auto; display: flex; padding:20px;">
    <P style="padding: 7px; margin: 0px;">Mốc thời gian : </P>
    <form action="index.php?act=xacdinh_thoigian" method="post" style="display: flex; height: auto;">
        <select class="form-select form-select-lg" name="nam" style="font-size: 1rem; width: auto; margin-right: 7px;" aria-label="Large select example" name="tt">
            <option value="0">--Tất cả các năm--</option>
            <?php 
                $get_all_years = get_all_years(); 
                foreach($get_all_years as $q):
            ?>
            <option value="<?php echo $q['nam'] ?>"><?php echo $q['nam'] ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="bieudo_thang" class="btn btn-success" style="background-color: #28a745;">Xác nhận</button>
    </form>
</div>
<div class="chontg" style="width: auto; height: auto; display: flex; padding:5px 20px;">
    <?php 
        if(isset($nam) && $nam != 0){
            $time_nam = "Năm ".$nam;
        } else {
            $time_nam = "Tất cả các năm";
        }
    ?>
    <P style="padding: 7px; margin: 0px;">Thống kê : <b>Biểu đồ theo tháng</b> - <i><?php echo $time_nam ?></i></P>
</div>
<div id="myfirstchart" style="height: auto;"></div>
<script>
$(document).ready(function() {
    var sampleData = [
        <?php
        foreach($bieudo as $a) :
          extract($a);
          ?>

        {
            year:'<?php echo $thang;?>',
            nam: '<?php echo $nam; ?>',
            thang: '<?php echo $thang; ?>',
            value: <?php echo $tongsoluong; ?>,
            doanhthu: '<?php echo $tongdoanhthu; ?>',
        },
        <?php endforeach; ?>

    ];
    // Tạo biểu đồ Morris Line
    new Morris.Bar({
        element: 'myfirstchart',
        data: sampleData,
        xkey: 'year',
        ykeys: ['doanhthu'],
        labels: ['Doanh thu']
    });
});
</script>