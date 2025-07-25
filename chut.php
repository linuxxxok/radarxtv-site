<?php
header('Content-Type: application/json');

$match = $_GET['match'] ?? '';

$streams = [
    "WPL" => [
        ["name" => "Star Sports 1", "url" => "https://example.com/star1"],
        ["name" => "JioCinema", "url" => "https://example.com/jiocinema"]
    ]
];

echo json_encode($streams[$match] ?? []);
?>