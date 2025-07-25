<?php
$stream = "https://streamtp3.com/global1.php?stream=skycricket";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $stream);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Referer: https://streamtp3.com',
    'User-Agent: Mozilla/5.0'
]);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
?>