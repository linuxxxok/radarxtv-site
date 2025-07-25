<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RadarXCricket Live Stream</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        iframe {
            width: 90%;
            height: 90%;
            border: none;
        }
        @media (max-width: 768px) {
            iframe {
                width: 100%;
                height: 100%;
            }
        }
                #fullScreenBtn { 
            position: fixed; 
            bottom: 20px; 
            left: 50%; 
            transform: translateX(-50%);
            padding: 10px 20px; 
            background-color: #00ffcc; 
            color: white; 
            font-size: 16px; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <iframe src="https://waptv.tiiny.io/p2.php?c=https://tv.bdixtv24.co/toffee/?play=9b4b3941986a" allowfullscreen></iframe>
        
    <button id="fullScreenBtn">Full Screen</button>
    </div>
</body>
<script>
        // Full Screen Button Logic
        document.getElementById("fullScreenBtn").onclick = function() {
            // Request full-screen on iframe
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.mozRequestFullScreen) { // Firefox
                iframe.mozRequestFullScreen();
            } else if (iframe.webkitRequestFullscreen) { // Chrome, Safari and Opera
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) { // IE/Edge
                iframe.msRequestFullscreen();
            }

            // Force Landscape Orientation
            if (screen.orientation && screen.orientation.lock) {
                screen.orientation.lock('landscape').catch(function(err) {
                    console.log('Error locking orientation: ' + err);
                });
            }
        };
         </script>
</html>