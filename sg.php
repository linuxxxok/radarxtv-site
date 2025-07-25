<?php
// Get the requested path
$path = $_SERVER['REQUEST_URI'];

// Remove /sg.php/ from the path
$target = str_replace('/sg.php/', '', $path);

// If the path starts with "http", treat as full URL
if (strpos($target, 'http') === 0) {
    $url = $target;
} else {
    // Otherwise, treat as shorthand and construct the full Astro URL
    $url = 'https://l02.dp.sooka.my/' . $target;
}

// Init cURL
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

// Optional: Pass user-agent and headers if needed for playback
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'User-Agent: Mozilla/5.0',
]);

// Output response with correct headers
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

curl_close($ch);

// Send headers
http_response_code($httpCode);
if ($contentType) {
    header("Content-Type: $contentType");
}

echo $response;