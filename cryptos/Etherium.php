<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=usd",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);
curl_close($curl);
$priceData = json_decode($response, true);
$price = $priceData['ethereum']['usd'];

echo "El precio actual de Ethereum en USD es: $" . $price;
?>
