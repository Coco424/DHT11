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

$bargraph_heigth = 161 + $json-> temperature * 4;
$bargraph_top = 315 - $json-> temperature * 4;
?>
<p>Il fait <?php echo $json->temperature;?>°C avec <?php echo $json->humidite;?>% d'humidité.</p>

<?php
// Affichera : somefile.txt a été modifié le : December 29 2002 22:16:23.

$filename = 'data.txt';
if (file_exists($filename)) {
    echo "le fichier data.txt a été modifié le : " . date ("F d Y H:i:s.", filemtime($filename));
}
?>

<div id="thermometer">
  <div id="bargraph" style="height: <?php echo $bargraph_heigth; ?>px; top: <?php echo $bargraph_top; ?>px;"></div>



</div>
</body>
</html>