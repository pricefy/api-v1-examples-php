<?php

/**
 * https://developers.pricefy.io/#operation--analysis-catalog--country---id--get
 */


$ch = curl_init();
$api_key = 'your-api-key';
$country_code = 'IT'; // the country code you want to analyse
$product_ean = '3175681126213'; // the product EAN you want to analyse
$headers = [
    'Authorization: Bearer '.$api_key
];

$url = 'https://api.pricefy.io/v1/analysis/catalog/'.$country_code.'/EAN:'.$product_ean;
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$server_output = curl_exec ($ch);

curl_close ($ch);
$json = json_decode($server_output, true);
print_r($json);