<?php
// Allow all cross-origin requests
header("Access-Control-Allow-Origin: *");

// Extract full request URI after 'sliv.php/'
$path = $_SERVER['REQUEST_URI'];
$pos = strpos($path, 'sliv.php/');
if ($pos === false) {
    http_response_code(400);
    echo "Invalid request path";
    exit;
}
$relativePath = substr($path, $pos + strlen('sliv.php/'));

if (empty($relativePath)) {
    http_response_code(400);
    echo "No stream path provided";
    exit;
}

// Possible origin hosts
$originHosts = [
    "https://sonydaimenew.akamaized.net/",
    "https://sonypartnersdaimenew.akamaized.net/"
];

$response = false;
$contentType = null;

// Function to perform curl request
function fetchUrl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "User-Agent: Mozilla/5.0",
        "Referer: https://www.sonyliv.com/",
        "Origin: https://www.sonyliv.com"
    ]);

    $result = curl_exec($ch);
    $err = curl_errno($ch);
    $contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
    curl_close($ch);

    return [$result, $err, $contentType];
}

// Try both origins until success
foreach ($originHosts as $originHost) {
    $finalUrl = $originHost . $relativePath;
    list($response, $err, $contentType) = fetchUrl($finalUrl);

    if (!$err && $response !== false && strlen($response) > 0) {
        // Success, break loop
        break;
    }
}

if ($err) {
    http_response_code(500);
    echo "Proxy error: Curl error $err";
    exit;
}

if (!$response) {
    http_response_code(404);
    echo "Stream not found";
    exit;
}

// Set appropriate Content-Type (m3u8, ts, etc.)
if ($contentType) {
    header("Content-Type: $contentType");
}

echo $response;