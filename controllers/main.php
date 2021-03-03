<?php
    $API = 'https://api.apify.com/v2/key-value-stores/TyToNta7jGKkpszMZ/records/LATEST?disableRedirect=true';

    $curlRequest = curl_init($API);
    curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlRequest, CURLOPT_FRESH_CONNECT, true);
    $data = json_decode(curl_exec($curlRequest));
    date_default_timezone_set('America/Sao_Paulo');

    $count = 1;
    $countDies = 1;
    $countToTable = 0;
    $countToCard = 0;
?>