<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/vnd.apple.mpegurl");
header("Referer: https://www.jiocinema.com");
header("Origin: https://www.jiocinema.com");

$url = $_GET['url'] ?? '';

if (!empty($url)) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Referer: https://www.jiocinema.com",
        "Origin: https://www.jiocinema.com",
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36"
    ]);

    $response = curl_exec($ch);
    curl_close($ch);
    
    echo $response;
} else {
    echo "Invalid URL!";
}
?>