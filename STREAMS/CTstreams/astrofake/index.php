<!DOCTYPE html>
<?php include 'banner.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
        }
        iframe {
            width: 100%;
            height: 80vh;
            border: none;
        }
        .ad-banner {
            background-color: #ffcc00;
            padding: 10px;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        .ad-banner a {
            color: #000;
            text-decoration: none;
        }
        .fullscreen-btn {
            margin: 10px;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
        }
            .logo {
        position: absolute;
        top: 10px; /* Adjust vertical position */
        left: 10px; /* Adjust horizontal position */
        z-index: 1; /* Ensure the logo appears above the video */
        max-width: 120px; /* Set maximum width for the logo */
        max-height: 120px; /* Set maximum height for the logo */
        pointer-events: none; /* Prevent interference with video controls */
    }
    
    </style>
</head>
<body>
    <!-- Video container -->
    <div class="video-container">
        <!-- Logo inside the video -->
        <img src="chutman.jpg" alt="Logo" class="logo">
        
    <div class="container">
        <!-- Advertisement for RadarXTV -->
        <div class="ad-banner">
            📺 Watch the latest sports & live TV on <a href="https://radarxtv.com" target="_blank">RadarXTV</a>!
        </div>

        <h2>RadarXTV Page</h2>

        <!-- Fullscreen Button -->
        <button class="fullscreen-btn" onclick="goFullScreen()">Full Screen</button>

        <!-- iFrame with sandbox to block popups -->
        <iframe id="embeddedPage" src="https://RadarXTV.site/chutlola.php" sandbox="allow-scripts allow-same-origin"></iframe>
    </div>

    <script>
        function goFullScreen() {
            let iframe = document.getElementById("embeddedPage");
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.mozRequestFullScreen) { // Firefox
                iframe.mozRequestFullScreen();
            } else if (iframe.webkitRequestFullscreen) { // Chrome, Safari & Opera
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) { // IE/Edge
                iframe.msRequestFullscreen();
            }
        }
    </script>
<?php include 'banner.php'; ?>
</body>
</html>