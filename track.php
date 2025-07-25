<?php
date_default_timezone_set('Asia/Kolkata');

$timeFile = "time_spent.json";

// ✅ **Fix: Get Real IP Properly**
function getUserIP() {
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) { 
        return $_SERVER['HTTP_CF_CONNECTING_IP'];
    } elseif (!empty($_SERVER['HTTP_X_REAL_IP'])) { 
        return $_SERVER['HTTP_X_REAL_IP'];
    } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return explode(",", $_SERVER['HTTP_X_FORWARDED_FOR'])[0]; 
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip = getUserIP();
$path = isset($_GET['path']) ? $_GET['path'] : "/";

// ✅ Unique Device ID (Multiple devices per IP fix)
$deviceID = $_COOKIE['deviceID'] ?? uniqid();
setcookie('deviceID', $deviceID, time() + (86400 * 30), "/");

$visitorID = $ip . "-" . $deviceID;

// ✅ **Fix: Read Existing Data or Create Fresh JSON**
if (!file_exists($timeFile)) {
    file_put_contents($timeFile, json_encode(["date" => date("Y-m-d"), "total_time" => 0, "unique_visitors" => 0, "visitors" => []]));
}
$timeData = json_decode(file_get_contents($timeFile), true);

if ($timeData["date"] !== date("Y-m-d")) {
    $timeData = ["date" => date("Y-m-d"), "total_time" => 0, "unique_visitors" => 0, "visitors" => []];
}

// ✅ **Track Unique Visitors**
if (!isset($timeData["visitors"][$visitorID])) {
    $timeData["visitors"][$visitorID] = ["ip" => $ip, "total_time" => 0, "paths" => []];
    $timeData["unique_visitors"] += 1;
}

// ✅ **Track Time for Each Folder**
if (!isset($timeData["visitors"][$visitorID]["paths"][$path])) {
    $timeData["visitors"][$visitorID]["paths"][$path] = 0;
}

// ✅ **Real-Time Update of Time Spent**
if (isset($_GET["time"])) {
    $time = (int)$_GET["time"];
    $currentTime = time();

    if (!isset($timeData["visitors"][$visitorID]["last_update"])) {
        $timeData["visitors"][$visitorID]["last_update"] = $currentTime;
    }

    $timeSpent = $currentTime - $timeData["visitors"][$visitorID]["last_update"];
    
    if ($timeSpent > 0) {
        $timeData["visitors"][$visitorID]["total_time"] += $timeSpent;
        $timeData["visitors"][$visitorID]["paths"][$path] += $timeSpent;
        $timeData["total_time"] += $timeSpent;
    }

    $timeData["visitors"][$visitorID]["last_update"] = $currentTime;
    file_put_contents($timeFile, json_encode($timeData));
}

echo json_encode(["data" => $timeData]);
?>