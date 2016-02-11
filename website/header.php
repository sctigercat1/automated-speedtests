<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Internet Service Log</title>

<!-- JQuery && Buttons -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://skidding.github.io/obvious-buttons/src/obvious-buttons.css">

<!-- Styles -->
<link rel="stylesheet" href="common.css">
<?php if (pathinfo($_SERVER["SCRIPT_FILENAME"])['filename'] == 'animated') echo "<link rel=\"stylesheet\" href=\"animated.css\">"; ?>

<!-- AMCharts -->
<script src="amcharts/amcharts.js"></script>
<script src="amcharts/serial.js"></script>
<script src="amcharts/themes/dark.js"></script>
<script src="amcharts/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>
</head>