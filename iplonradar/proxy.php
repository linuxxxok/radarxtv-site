<?php
// Sanitize and validate the URL input to avoid malicious requests
if (isset($_GET['url']) && filter_var($_GET['url'], FILTER_VALIDATE_URL)) {
    $url = $_GET['url'];
} else {
    // If the URL is invalid or missing, return a 400 Bad Request error
    http_response_code(400);
    exit('Invalid URL.');
}

// Initialize cURL
$ch = curl_init($url);

// Set cURL options to include Referer
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'User-Agent: Mozilla/5.0',
    'Referer: https://astro.noobmaster.xyz'  // Set the desired Referer here
]);

// Execute cURL request
$response = curl_exec($ch);

// Get the HTTP response code
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Check if there was an error with the cURL request
if (curl_errno($ch)) {
    // Log error if necessary
    error_log("cURL error: " . curl_error($ch));
    http_response_code(500); // Internal Server Error
    exit('Error fetching content.');
}

// Close cURL
curl_close($ch);

// Set the correct HTTP response code based on the external server response
http_response_code($httpCode);

// Output the response content
echo $response;
?>
