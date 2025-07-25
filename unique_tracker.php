<?php
date_default_timezone_set('Asia/Kolkata'); // Apne time zone ke liye update karo

$ip = $_SERVER['REMOTE_ADDR']; // User ka IP address lo
$cookie_name = "unique_visitor";
$today = date("Y-m-d"); // Aaj ki date

$file = "unique_visitors.json"; // Visitor data store karne ka file

// Agar file exist nahi karti, toh blank array banao
if (!file_exists($file)) {
    file_put_contents($file, json_encode(["date" => $today, "visitors" => []]));
}

$data = json_decode(file_get_contents($file), true);

// Agar date change ho gayi hai, toh reset karo
if ($data["date"] !== $today) {
    $data = ["date" => $today, "visitors" => []];
    file_put_contents($file, json_encode($data)); // Purana data reset karo
}

// Check karo ki user already count ho chuka hai ya nahi
if (!in_array($ip, $data["visitors"]) && !isset($_COOKIE[$cookie_name])) {
    $data["visitors"][] = $ip;
    file_put_contents($file, json_encode($data)); // Naya visitor add karo
    
    setcookie($cookie_name, "true", time() + 86400, "/"); // 24 hours ke liye cookie set karo
}

// Response bhejo frontend ke liye
echo json_encode(["unique_visitors" => count($data["visitors"])]);
?>