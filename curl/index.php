<?php

	//$api_url="http://202.51.74.17/payment-api/api/user_details.php?user_name=ime_payment&api_key=MERC-IMEPAY-6888&customer=9779813984999";

	$api_url="http://103.98.131.190/eastlink-api/api/manager_login.php?manager_name=admin&password=5a9fd148a6c652ccc569cf40de16e2d9";	
	$client=curl_init();
	curl_setopt($client, CURLOPT_URL, $api_url);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
	$response=curl_exec($client);
	curl_close($client);
	$result=json_decode($response,true);
	echo '<pre>';
	print_r($result);

?>

