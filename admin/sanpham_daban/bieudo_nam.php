<div class="chontg" style="width: auto; height: auto; display: flex; padding:20px;">
    <P style="padding: 7px; margin: 0px;">Thống kê : <b>Biểu đồ theo năm</b></P>
</div>
<div id="myfirstchart" style="height: auto;"></div>
<script>
$(document).ready(function() {
    var sampleData = [
        <?php
        $bieudo = bieudo_nam();
        foreach($bieudo as $a) :
          extract($a);
          ?>

        {
            year: '<?php echo $nam; ?>',
            nam: '<?php echo $nam; ?>',
            value: <?php echo $tongsoluong_nam; ?>,
            doanhthu: '<?php echo $tongdoanhthu_nam; ?>',
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