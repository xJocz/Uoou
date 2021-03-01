<?php
    $API = 'https://api.apify.com/v2/key-value-stores/TyToNta7jGKkpszMZ/records/LATEST?disableRedirect=true';

    $curlRequest = curl_init($API);
    curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, true);
    $data = json_decode(curl_exec($curlRequest));

    $count = 1;
    $countDies = 1;
    $countToTable = 0;
?>