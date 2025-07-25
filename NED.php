<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXCricket Stream</title>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <style>
        body {
            margin: 0;
            background-color: black;
            color: white;
            text-align: center;
        }
        #video-container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: auto;
            top: 50px;
        }
        video {
            width: 100%;
            border: 2px solid #ff00ff;
            border-radius: 10px;
        }
        #popup {
            position: fixed;
            width: 90%;
            max-width: 300px;
            background: #222;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 15px #ff00ff;
            display: block;
        }
        #popup button {
            padding: 10px;
            margin: 5px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
        #cancel { background: gray; color: white; }
        #join { background: #ff00ff; color: white; }
    </style>
</head>
<body>

    <div id="popup">
        <p>Join RadarXCricket for live updates!</p>
        <button id="cancel">Cancel</button>
        <button id="join">Join</button>
    </div>

    <div id="video-container">
        <video id="video" controls autoplay></video>
    </div>

    <script>
        document.getElementById("cancel").addEventListener("click", function() {
            document.getElementById("popup").style.display = "none";
        });

        document.getElementById("join").addEventListener("click", function() {
            window.location.href = "https://t.me/RadarXCricket";
        });

        var video = document.getElementById("video");
        if (Hls.isSupported()) {
            var hls = new Hls();
            hls.loadSource("https://dai.fancode.com/primary/120405_english_hls_6563ta-no/index.m3u8");
            hls.attachMedia(video);
        } else if (video.canPlayType("application/vnd.apple.mpegurl")) {
            video.src = "https://dai.fancode.com/primary/120405_english_hls_6563ta-no/index.m3u8";
        }
    </script>

</body>
</html>