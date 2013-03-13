<!DOCTYPE html>
<html>
<bead>
<title>Count and sell</title>
</head>
<body>
<h1>Test For Producteev</h1>
<?php
	echo "Time: ".Time()."</br>";
	
	include_once('Producteev.php');
	include_once('CAS-config.php');


	$apiKey = PRODUCTEEV_API_KEY;
	$apiSecret = PRODUCTEEV_SECRET;
	
	
		$producteev = new Producteev($apiKey, $apiSecret);
		$producteev->Login('davis.jrw@gmail.com',PRODUCTEEV_PASS);
		$producteev->ClearParams();
		
		$producteev->Set('title','Hi Ho Silver');//urlencode('Auto$20Task'.Time()));
		//$url = $producteev->GetUrl('tasks/show_list');
		$url = $producteev->GetUrl('tasks/create');
		echo "URL:</br></br>".$url."</br></br>";
		$d = $producteev->Curl($url);
		//echo $d;
/*

	$producteev = new Producteev($apiKey, $apiSecret);
	$producteev->Login('davis.jrw@gmail.com',PRODUCTEEV_PASS);
	//$producteev->ClearParams();
	$producteev->Set('title',"Task ");
	
	$d=$producteev->Execute('tasks/create');
*/
?>

</body>
</html>