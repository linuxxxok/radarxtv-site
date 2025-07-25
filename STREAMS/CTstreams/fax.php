<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV - Live TV</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #ccc;
            margin-bottom: 20px;
        }
        #player-container {
            width: 90%;
            max-width: 800px;
            height: 450px;
            background: #000;
            position: relative;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
            pointer-events: none; /* Click disabled */
        }
        #info-text {
            margin-top: 10px;
            font-size: 14px;
            color: #f39c12;
        }

        /* Fullscreen Button */
        #fullscreen-btn {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background: #0088cc;
            color: white;
            cursor: pointer;
        }

        /* Popup Styles */
        #popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }
        #popup-content {
            background: #222;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 80%;
            max-width: 400px;
        }
        #popup h2 {
            font-size: 22px;
            margin-bottom: 10px;
            color: white;
        }
        #popup p {
            font-size: 16px;
            color: #ddd;
            margin-bottom: 20px;
        }
        #popup-buttons {
            display: flex;
            justify-content: space-between;
        }
        .popup-btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .join-btn {
            background: #0088cc;
            color: white;
        }
        .cancel-btn {
            background: #444;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Popup Container (Hidden Initially) -->
    <div id="popup">
        <div id="popup-content">
            <h2>Join RadarX Cricket on Telegram!</h2>
            <p>Stay updated with the latest live matches and streams.</p>
            <div id="popup-buttons">
                <button class="popup-btn join-btn" onclick="joinTelegram()">Join</button>
                <button class="popup-btn cancel-btn" onclick="closePopup()">Cancel</button>
            </div>
        </div>
    </div>

    <h1>RadarXTV - Live Sports</h1>
    <p>For the best experience, ensure a **high-speed internet connection**.</p>

    <!-- Player Container -->
    <div id="player-container"></div>

    <!-- Fullscreen Button -->
    <button id="fullscreen-btn" onclick="goFullscreen()">Fullscreen</button>

    <p id="info-text">If the stream fails to load, please wait a few seconds or refresh the page.  
    For better viewing experience, use **Server 3**.</p>

    <script>
let iframe;

        // Add Iframe via JavaScript (with autoplay enabled)
        function loadStream() {
            const playerContainer = document.getElementById("player-container");
            iframe = document.createElement("iframe");
            //iframe.src = "https://new.mafiatv.live/watch.php?id=369";
                        iframe.src = "https://mafiatv.live/tv/embed.php?play=369&server=1";
            iframe.setAttribute("allowfullscreen", "true");
            iframe.setAttribute("allow", "autoplay; fullscreen");
            iframe.style.pointerEvents = "none"; // Click Disabled
            playerContainer.appendChild(iframe);
        }

        // Fullscreen Function
        function goFullscreen() {
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.mozRequestFullScreen) { // Firefox
                iframe.mozRequestFullScreen();
            } else if (iframe.webkitRequestFullscreen) { // Chrome, Safari & Edge
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) { // IE/Edge
                iframe.msRequestFullscreen();
            }
        }

        // Show Telegram Popup on Load
        function showPopup() {
            document.getElementById("popup").style.display = "flex";
        }

        function joinTelegram() {
            window.location.href = "https://t.me/radarxcricket"; // Replace with actual Telegram link
        }

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }

        // Run functions on page load
        window.onload = function () {
            loadStream();
            setTimeout(showPopup, 1000); // Show popup after 1 second
        };
    </script>

</body>
</html>