<?php

	$api_url="http://202.51.74.17/payment-api/api/account_recharge.php?user_name=ime_payment&api_key=MERC-IMEPAY-6888&customer=9779813984999&expiration=2019-02-22&timeunitexp=1";

	$client=curl_init();
	curl_setopt($client, CURLOPT_URL, $api_url);
	curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
	$response=curl_exec($client);
	curl_close($client);
	$result=json_decode($response,true);
	echo '<pre>';
	print_r($result);
?>

