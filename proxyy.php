<?php
$api_url = "https://tv4wap.tiiny.io/sportstv.php";
$response = file_get_contents($api_url);

echo "<pre>";
print_r($response); // Dekho API kya return kar rahi hai
echo "</pre>";
?>