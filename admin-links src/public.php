<?php

chdir(__DIR__);

require_once __DIR__ . '/vendor/autoload.php';

if ($_GET['hook'] == 'main') {
		
		echo '<iframe src="https://control.icuk.net/login.aspx?ReturnUrl=%2f" width="100%" height="100%" frameBorder="0" />';
}

if ($_GET['hook'] == 'phone') {
		
		echo '<iframe src="https://control.icuk.net/wholesale_pricing.aspx" width="100%" height="100%" frameBorder="0" />';
}



if ($_GET['hook'] == 'pricing') {
		
		echo '<iframe src="https://control.icuk.net/wholesale_pricing.aspx" width="100%" height="100%" frameBorder="0" />';
}
