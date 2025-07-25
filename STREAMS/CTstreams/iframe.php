<?php
session_start();

// ✅ Allow Access Only from `player.php`
if (!isset($_SERVER['HTTP_REFERER']) || !strpos($_SERVER['HTTP_REFERER'], "player.php")) {
    die("Access Denied! Direct access not allowed.");
}

// ✅ Secret Key & IV
$secret_key = "RadarX@Secure1234";
$iv = "1234567890123456";

// ✅ Actual Iframe URL (Hidden from Client)
$iframe_url = "https://offerstore.xyz/ddh/?play=65";

// ✅ Encrypt the URL
$encrypted_url = openssl_encrypt($iframe_url, "AES-256-CBC", $secret_key, 0, $iv);
$final_token = urlencode(base64_encode($encrypted_url));

// ✅ Store Token in Session (So only this session can access it)
$_SESSION['iframe_token'] = $final_token;

// ✅ Redirect to `player.php`
header("Location: player.php?token=$final_token");
exit();
?>