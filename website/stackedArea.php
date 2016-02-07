<?php
require 'common.php';
include 'header.php'; ?>

<div id="chartdiv">
<script id="primaryscript">
function genAllChart() {
    var chart = AmCharts.makeChart("chartdiv", {
        <?php echo retAll(); ?>
        "legend": {
            "equalWidths": false,
            //"periodValueText": "total: [[value.sum]]",
            "position": "bottom",
            "valueAlign": "left",
            //"valueWidth": 100
        },
        "offset":30,
        "valueAxes": [{
            "stackType": "regular",
            "gridAlpha": 0.07,
            "position": "left",
            //"title": "Speed", // TODO -- add y axis???
        }],
        "graphs": [{
            "balloonText": "P <b>[[value]]</b></span>",
            "fillAlphas": 0.6,
            "lineAlpha": 0.4,
            "title": "Ping",
            "valueField": "ping"
        }, {
            "balloonText": "U <b>[[value]]</b></span>",
            "fillAlphas": 0.6,
            "lineAlpha": 0.4,
            "title": "Upload",
            "valueField": "up"
        }, {
            "balloonText": "D <b>[[value]]</b></span>",
            "fillAlphas": 0.6,
            "lineAlpha": 0.4,
            "title": "Download",
            "valueField": "down"
        }],
        "plotAreaBorderAlpha": 0,
        "marginTop": 10,
        "marginLeft": 0,
        "marginRight":30,
        "marginBottom": 0,
        "chartScrollbar": {},
        "chartCursor": {
            "cursorAlpha": 0
        },
    });
}
window.onload = genAllChart();
</script>
</div>
<br>
<?php include 'footer.php'; ?>
