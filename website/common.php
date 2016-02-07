<?php
// Just a little ol' script to house common js data
// TODO: look for a multiline quote that doesn't require escaping (python where art thou now)
function retAll() {
    return "\"type\": \"serial\",
    \"theme\": \"dark\",
	\"addClassNames\": true,
    \"dataDateFormat\": \"YYYY-MM-DD JJ:NN:SS\",
    \"categoryField\": \"date\",
    \"autoMarginOffset\": 20,
    \"titles\": [{
        \"text\": \"Internet Service Log\",
        \"size\": 17,
    }],
    \"categoryAxis\": {
        \"parseDates\": true,
		\"minPeriod\": \"mm\",
        \"dashLength\": 1,
        \"minorGridEnabled\": true
    },
    \"export\": {
        \"enabled\": true
    },
	\"dataLoader\": {
		\"url\": \"data.csv\",
		\"format\": \"csv\",
		\"delimiter\": \",\",
		\"useColumnNames\": true
    },\n";
}

function lineAndAnimation() {
    return "\"chartScrollbar\": {
        \"graph\": \"g1\",
        \"oppositeAxis\":false,
        \"offset\":30,
        \"scrollbarHeight\": 80,
        \"backgroundAlpha\": 0,
        \"selectedBackgroundAlpha\": 0.1,
        \"selectedBackgroundColor\": \"#888888\",
        \"graphFillAlpha\": 0,
        \"graphLineAlpha\": 0.5,
        \"selectedGraphFillAlpha\": 0,
        \"selectedGraphLineAlpha\": 1,
        \"autoGridCount\":true,
        \"color\":\"#AAAAAA\"
    },
    \"marginRight\": 40,
    \"marginLeft\": 40,
    \"graphs\": [{
        \"id\": \"g1\",
        \"balloon\":{
          \"drop\":true,
          \"adjustBorderColor\":false,
          \"color\":\"#ffffff\"
        },
        \"bullet\": \"round\",
        \"bulletBorderAlpha\": 1,
        \"bulletColor\": \"#FFFFFF\",
        \"bulletSize\": 5,
        \"hideBulletsCount\": 50,
        \"lineThickness\": 2,
        \"title\": \"ping\",
        \"useLineColorForBulletBorder\": true,
        \"valueField\": \"ping\",
        \"balloonText\": \"<span style='font-size:18px;'>[[value]]</span>\",
    },
	{
        \"id\": \"g2\",
        \"balloon\":{
          \"drop\":true,
          \"adjustBorderColor\":false,
          \"color\":\"#ffffff\"
        },
        \"bullet\": \"round\",
        \"bulletBorderAlpha\": 1,
        \"bulletColor\": \"#FFFFFF\",
        \"bulletSize\": 5,
        \"hideBulletsCount\": 50,
        \"lineThickness\": 2,
        \"title\": \"download\",
        \"useLineColorForBulletBorder\": true,
        \"valueField\": \"down\",
        \"balloonText\": \"<span style='font-size:18px;'>[[value]]</span>\"
    },
	{
        \"id\": \"g3\",
        \"balloon\":{
          \"drop\":true,
          \"adjustBorderColor\":false,
          \"color\":\"#ffffff\"
        },
        \"bullet\": \"round\",
        \"bulletBorderAlpha\": 1,
        \"bulletColor\": \"#FFFFFF\",
        \"bulletSize\": 5,
        \"hideBulletsCount\": 50,
        \"lineThickness\": 2,
        \"title\": \"upload\",
        \"useLineColorForBulletBorder\": true,
        \"valueField\": \"up\",
        \"balloonText\": \"<span style='font-size:18px;'>[[value]]</span>\"
    }],
    \"valueScrollbar\":{
      \"oppositeAxis\":false,
      \"offset\":50,
      \"scrollbarHeight\":10
    },
    \"chartCursor\": {
        \"pan\": true,
        \"valueLineEnabled\": true,
        \"valueLineBalloonEnabled\": true,
        \"cursorAlpha\":1,
        \"cursorColor\":\"#258cbb\",
        \"limitToGraph\":\"g1\",
        \"valueLineAlpha\":0.2
    },
    \"balloon\": {
        \"borderThickness\": 1,
        \"shadowAlpha\": 0
    },
    \"valueAxes\": [{
        \"id\": \"v1\",
        \"axisAlpha\": 0,
        \"position\": \"left\",
        \"ignoreAxisWidth\":true
    }],
	\"legend\": {
        \"useGraphSettings\": true
    },\n";
}

function comFuncts() {
    return "chart.addListener(\"rendered\", zoomChart);

zoomChart();

function zoomChart() {
    chart.zoomToIndexes(chart.dataLoader.length - 40, chart.dataLoader.length - 1);
}\n";
}
?>