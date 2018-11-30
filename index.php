<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Température</h1>


<?php
$data = file_get_contents('data.txt');
$json = json_decode($data);
?>
<p>il fait <?php echo $json->temperature;?>°C avec <?php echo $json->humidite;?>% d'humidité.</p>
<img src="img/thermometer.jpg">
</body>
</html>