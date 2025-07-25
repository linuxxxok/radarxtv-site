<?php
error_reporting(0); // Errors hide karna

// Mafiatv ka URL
$target_url = "https://mafiatv.live";

// Proxy list (Bangladesh IP proxy)
$proxy_list = [
    "103.233.169.46:8080",  
    "103.48.68.36:83",  
    "103.48.68.37:84"   
];

// Random proxy select karein
$proxy = $proxy_list[array_rand($proxy_list)];

// cURL request setup
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64)");
curl_setopt($ch, CURLOPT_REFERER, "https://www.google.com/");
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9",
    "Accept-Language: en-US,en;q=0.5",
    "Cache-Control: no-cache",
    "Pragma: no-cache"
]);

$output = curl_exec($ch);
$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Agar response valid hai toh show karein, warna error
if ($http_status == 200) {
    echo $output;
} else {
    echo "Error: Unable to fetch content.";
}
?>