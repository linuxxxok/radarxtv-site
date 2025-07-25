<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV Live Stream</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #000;
            text-align: center;
            color: white;
        }
        .container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: auto;
        }
        iframe {
            width: 100%;
            height: 450px;
            border: none;
            display: none;
            pointer-events: none;
        }
        .promotion {
            margin-top: 10px;
            padding: 10px;
            background-color: #ff0000;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }
        .play-button, .fullscreen-button {
            margin-top: 15px;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .play-button:hover, .fullscreen-button:hover {
            background-color: #218838;
        }
    </style>
    <script>
        function playStream() {
            var iframe = document.getElementById("liveStream");
            iframe.src = "https://mafiatv.live/watch.php?stream=sports18&autoplay=1";
            iframe.style.display = "block";
            iframe.style.pointerEvents = "none";
            document.getElementById("playButton").style.display = "none";
        }
        function toggleFullScreen() {
            var iframe = document.getElementById("liveStream");
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.mozRequestFullScreen) { /* Firefox */
                iframe.mozRequestFullScreen();
            } else if (iframe.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) { /* IE/Edge */
                iframe.msRequestFullscreen();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <button id="playButton" class="play-button" onclick="playStream()">Click to Play</button>
        <iframe id="liveStream" allow="autoplay" allowfullscreen></iframe>
        <button class="fullscreen-button" onclick="toggleFullScreen()">Full Screen</button>
        <div class="promotion">
            Watch More on <a href="https://t.me/RadarXCricket" target="_blank" style="color: yellow;">RadarXCricket</a>
        </div>
    </div>
</body>
</html>