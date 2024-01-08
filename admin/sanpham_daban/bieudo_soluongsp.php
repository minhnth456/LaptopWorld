<div class="chontg" style="width: auto; height: auto; display: flex; padding:20px;">
    <P style="padding: 7px; margin: 0px;">Thống kê : <b>Biểu đồ số lượng sản phẩm đã bán theo danh mục</b></P>
</div>
<div id="myfirstchart" style="height: auto; max-width: 1200px; margin: 100px auto;"></div>
<script>
$(document).ready(function() {
    var sampleData = [
        <?php
            $bieudo_soluongsp = bieudo_soluongsp();
            foreach($bieudo_soluongsp as $b):
        ?>

        {
            ten_danhmuc: '<?php echo $b['name'] ?>',
            soluong: '<?php echo $b['soluong'] ?>',
        },
            <?php endforeach; ?>

    ];
    // Tạo biểu đồ Morris Line
    new Morris.Bar({
        element: 'myfirstchart',
        data: sampleData,
        xkey: 'ten_danhmuc',
        ykeys: ['soluong'],
        labels: ['Số lượng']
    });
});
</script>