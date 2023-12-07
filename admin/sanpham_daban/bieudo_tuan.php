<div class="chontg" style="width: auto; height: auto; display: flex; padding:20px;">
    <P style="padding: 7px; margin: 0px;">Mốc giời gian: </P>
    <form action="index.php?act=xacdinh_thoigian" method="post" style="display: flex; height: auto;">
        <select class="form-select form-select-lg" name="thang" style="font-size: 1rem; width: auto; margin-right: 7px;" aria-label="Large select example" name="tt">
            <option value="0">--Tất cả các tháng--</option>
            <option value="1">Tháng 1</option>
            <option value="2">Tháng 2</option>
            <option value="3">Tháng 3</option>
            <option value="4">Tháng 4</option>
            <option value="5">Tháng 5</option>
            <option value="6">Tháng 6</option>
            <option value="7">Tháng 7</option>
            <option value="8">Tháng 8</option>
            <option value="9">Tháng 9</option>
            <option value="10">Tháng 10</option>
            <option value="11">Tháng 11</option>
            <option value="12">Tháng 12</option>
        </select>
        <select class="form-select form-select-lg" name="nam" style="font-size: 1rem; width: auto; margin-right: 7px;" aria-label="Large select example" name="tt">
            <option value="0">--Tất cả các năm--</option>
            <?php 
                $get_all_years = get_all_years(); 
                foreach($get_all_years as $q):
            ?>
            <option value="<?php echo $q['nam'] ?>"><?php echo $q['nam'] ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="bieudo_tuan" class="btn btn-success" style="background-color: #28a745;">Xác nhận</button>
    </form>
</div>
<div class="chontg" style="width: auto; height: auto; display: flex; padding:5px 20px;">
    <?php 
        if(isset($thang) && $thang != 0){
            $time_thang = "Tháng ".$thang;
        } else {
            $time_thang = "Tất cả các tháng";
        }

        if(isset($nam) && $nam != 0){
            $time_nam = "Năm ".$nam;
        } else {
            $time_nam = "Tất cả các năm";
        }
    ?>
    <P style="padding: 7px; margin: 0px;">Thống kê : <b>Biểu đồ theo tuần</b> - <i><?php echo $time_thang ?></i> - <i><?php echo $time_nam ?></i></P>
</div>
<div id="myfirstchart" style="height: auto; width: auto; margin: 50px auto;"></div>
<script>
$(document).ready(function() {
    var sampleData = [
        <?php
        foreach($bieudo as $a):
            
        ?>

        {
            tuan: <?php echo $a['tuan']; ?>,
            doanhthu: '<?php echo $a['tongdoanhthu']; ?>',
        },
        <?php endforeach; ?>

    ];
    // Tạo biểu đồ Morris Line
    new Morris.Bar({
        element: 'myfirstchart',
        data: sampleData,
        xkey: 'tuan',
        ykeys: ['doanhthu'],
        labels: ['Doanh thu'],
    });
});
</script>