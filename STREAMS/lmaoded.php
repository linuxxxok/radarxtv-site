<?php
// Set redirection folder
$redirect_folder = "CTstreams";

// If someone tries to access directly, show error
if (basename($_SERVER['PHP_SELF']) == "lmaoded.php") {
    die("You are not authorized to view this page.");
}

// Output folder name for JavaScript fetch
echo $redirect_folder;
?>