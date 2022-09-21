<?php
	require('vendor/autoload.php');
	
	
	use Carbon\Carbon;
	use FlyingLuscas\Correios\Client;
	printf("Now: %s", Carbon::now());
	$correios = new Client;
	echo '<hr>';
	print_r($correios->zipcode()
	    ->find('01001-000'));
	
?>