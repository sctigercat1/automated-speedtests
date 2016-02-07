<?php
$type = pathinfo($_SERVER["SCRIPT_FILENAME"])['filename'];
if ($type != "animated") {
    $type = "css";
}
?>
<!DOCTYPE html>
<html id="ht">
<head>
<meta charset="utf-8">
<title>Internet Service Log</title>
<style>
a {
  color: #0088cc;
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}
#link-container {
    text-align: center;
}
.button {
    display: inline-block;
}
</style>

<!-- JQuery && Buttons -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://skidding.github.io/obvious-buttons/src/obvious-buttons.css">

<!-- Styles -->
<link rel="stylesheet" href="<?php echo $type; ?>.css">

<!-- Nice Reload -->
<script type="text/javascript" src="js/jquery.ba-hashchange.min.js"></script>
<script src="reload.js"></script>

<!-- AMCharts -->
<script src="amcharts/amcharts.js"></script>
<script src="amcharts/serial.js"></script>
<script src="amcharts/themes/dark.js"></script>
<script src="amcharts/plugins/dataloader/dataloader.min.js" type="text/javascript"></script>
</head>