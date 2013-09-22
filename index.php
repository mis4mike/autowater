<?php
	$args = $_SERVER['argv'];
	
	if($args['action'] == 'water') {
		//If we're watering, get the times (in minutes) per zone. Zones 3 and 4 are offline
		exec('./scripts/wayer.py '.$args['zone1'].' '.$args['zone2'].' 0 0');
	}
?>

<!doctype html>
<html>
<head>
	<title> AUTOWATER! </title>
</head>
<body>
	<h1>AUTOWATER!</h1>


</body>
</html>
