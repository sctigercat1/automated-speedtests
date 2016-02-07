<?php
require 'common.php';
include 'header.php'; ?>

<div id="chartdiv">
<script id="primaryscript">
function genAllChart() {
    var chart = AmCharts.makeChart("chartdiv", {
        <?php echo retAll(); ?>
        <?php echo lineAndAnimation(); ?>
    });

    <?php echo comFuncts(); ?>
}
window.onload = genAllChart();
</script>
</div>
<br>
<?php include 'footer.php'; ?>