<?php
if (!isset($_GET['url'])) {
    die("No URL provided");
}

$url = urldecode($_GET['url']);

// Allow only tv4wap.tiiny.io URLs
if (!preg_match('/^http:\/\/tv4wap\.tiiny\.io/', $url)) {
    die("Invalid URL");
}

// Fetch content
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

// Set correct content type
$headers = get_headers($url, 1);
if (isset($headers["Content-Type"])) {
    header("Content-Type: " . $headers["Content-Type"]);
}

echo curl_exec($ch);
curl_close($ch);
?>