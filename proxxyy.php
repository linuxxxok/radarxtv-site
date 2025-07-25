<?php
// ✅ Set the external iframe source
$iframe_url = "https://vod.mafiatv.live/player.php?id=9c5fe1c5b3c0c1d5f3d1533f04e23db61b298640630e5ae67e2aa6cece3fe5217460e20ea2bbd2a4e86da06721909b4e2137d6e0c774572644826a16afe85ebe";

// ✅ Fetch the content using cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $iframe_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_REFERER, "https://radarxtv.site");  // Spoof referrer
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
$response = curl_exec($ch);
curl_close($ch);

// ✅ Remove X-Frame-Options and CORS restrictions
$response = preg_replace('/X-Frame-Options:.*?\r\n/i', '', $response);
$response = preg_replace('/Content-Security-Policy:.*?\r\n/i', '', $response);
$response = str_replace('Powered by MaFiA TV', 'Powered by Radar TV', $response);  // Branding replace

// ✅ Output the proxied content
echo $response;
?>