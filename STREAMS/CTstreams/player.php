<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Video Player</title>
    <style>
        body {
            margin: 0;
            background: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        #player-container {
            width: 100%;
            max-width: 800px;
            position: relative;
        }
        iframe {
            width: 100%;
            height: 450px;
            border: none;
            border-radius: 10px;
        }
        .controls {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .btn {
            padding: 10px 15px;
            background: #00ffcc;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        .btn:hover {
            background: #00ccaa;
        }
    </style>
</head>
<body>
    <div id="player-container">
        <iframe id="contentFrame" 
            src="https://radarxtv.site/proxy.php?token=<?php echo $_SESSION['proxy_token']; ?>"
            sandbox="allow-forms allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation allow-popups allow-popups-to-escape-sandbox"
            frameborder="0"
            allow="encrypted-media"
            allowfullscreen="true"
            scrolling="no">
        </iframe>
    </div>

    <div class="controls">
        <button class="btn" onclick="reloadVideo()">🔄 Reload</button>
        <button class="btn" onclick="goFullscreen()">🔳 Fullscreen</button>
    </div>

    <script>
        function reloadVideo() {
            document.getElementById("contentFrame").src += "";
        }

        function goFullscreen() {
            let iframe = document.getElementById("contentFrame");
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.mozRequestFullScreen) { // Firefox
                iframe.mozRequestFullScreen();
            } else if (iframe.webkitRequestFullscreen) { // Chrome, Safari, Opera
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) { // IE/Edge
                iframe.msRequestFullscreen();
            }
        }
    </script>
</body>
</html>