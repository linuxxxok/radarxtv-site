<?php
$target_url = "https://offerstore.xyz/daddy/?play=370"; // Replace this with your target URL

// cURL setup
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36",
    "Accept-Language: en-US,en;q=0.9",
    "Referer: https://google.com", // Fake referer to avoid blocking
    "X-Forwarded-For: 1.1.1.1" // Fake IP to pretend it's Cloudflare WARP
]);

// Fetch response
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// If the response is valid, return it
if ($http_code == 200) {
    echo $response;
} else {
    echo "Error: Unable to load content!";
}
?>