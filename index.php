<?php
	$args = $_GET;
	
	if($args['action'] == 'water') {
		//If we're watering, get the times (in minutes) per zone. Zones 3 and 4 are offline
		$cmd = 'sudo python ./scripts/water.py '.$args['zone1'].' '.$args['zone2'].' 0 0';
		$output = shell_exec($cmd);
	}
?>

<!doctype html>
<html>
<head>
	<title> AUTOWATER! </title>
</head>
<body>
	<h1>AUTOWATER!</h1>
	<?php
		print_r($cmd);
		/*print_r($args);*/
		print_r($output);
	?>
	<?php
		require('./includes/controls.php');
	?>

</body>
</html>
