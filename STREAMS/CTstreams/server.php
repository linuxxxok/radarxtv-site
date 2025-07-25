<?php
// ✅ Secret Key & IV (Must be 16 bytes for AES-256-CBC)
$secret_key = "RadarX@Secure1234"; 
$iv = "1234567890123456"; 

// ✅ Actual Iframe URL (Ye client ko show nahi hoga)
$iframe_url = "https://offerstore.xyz/ddh/?play=65";

// ✅ Encrypt URL
$encrypted_url = openssl_encrypt($iframe_url, "AES-256-CBC", $secret_key, 0, $iv);

// ✅ Send Encrypted Data to Client
header('Content-Type: application/json');
echo json_encode(["token" => $encrypted_url]);
?>