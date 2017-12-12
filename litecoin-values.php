<?php

// URL API and default amounts
$url_api_litecoin = 'https://coinbin.org/ltc';
$url_api_usd_to_eur = 'https://free.currencyconverterapi.com/api/v5/convert?q=USD_EUR';
$amount = (float) ( isset( $argv[ 1 ] ) ? $argv[ 1 ] : 1.00000000 );

// Get Litecoin value
echo 'Usage: php litecoin-values.php [AMOUNT]' . PHP_EOL . PHP_EOL;
$array_value_api = reset( json_decode( file_get_contents($url_api_litecoin), true ) );
if ( $array_value_api === null ) {
    die( 'ERROR connecting to API ' . $url_api_litecoin );
}
$currency = $array_value_api['name'];
$value = $array_value_api['usd'];

echo 'Currency: '. $currency .' ['. number_format( $value, 2 ).'$]' . PHP_EOL;
echo 'Amount (USD): '. number_format( $amount, 8 ) .'L [' . number_format( $amount * $value, 2 ) . '$]' . PHP_EOL;

// Get USD vs. EUR value
$array_value_api =  json_decode( file_get_contents( $url_api_usd_to_eur ), true );
if ( $array_value_api === null ) {
    exit();
}

$usd_to_eur = (float) $array_value_api['results']['USD_EUR']['val'];
echo 'Amount (EUR): '. number_format( $amount, 8 ) .'L [' . number_format( $amount * $value * $usd_to_eur, 2 ) . '€]' . PHP_EOL . PHP_EOL;
