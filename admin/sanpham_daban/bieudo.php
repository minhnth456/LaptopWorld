<P style="padding:20px">Thống kê : <span id="text-date"></span></P>
<div id="myfirstchart" style="height: 250px;"></div>
<script>
$(document).ready(function() {
    var sampleData = [
        <?php
        $bieudo = bieudo();
        foreach($bieudo as $a) :
          extract($a);
          ?>

        {
            year: '<?php echo $date5; ?>',
            value: <?php echo $soluongmoi; ?>,
            doanhthu: '<?php echo $tongdoanhthu; ?>',
        },
        <?php endforeach; ?>

    ];
    // Tạo biểu đồ Morris Line
    new Morris.Bar({
        element: 'myfirstchart',
        data: sampleData,
        xkey: 'year',
        ykeys: ['value', 'doanhthu'],
        labels: ['Số lượng', 'Doanh thu']
    });
});
</script>