<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXCricket Live Stream</title>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <style>
        body { margin: 0; text-align: center; background: #000; color: white; font-family: Arial, sans-serif; }
        #video-container { position: relative; max-width: 800px; margin: auto; }
        video { width: 100%; height: auto; border: 2px solid #fff; }
        #promotion { background: #ff0000; color: white; padding: 10px; font-size: 18px; }
        #quality-selector { position: absolute; top: 10px; right: 10px; background: rgba(0,0,0,0.7); color: white; padding: 5px; border-radius: 5px; }
        .popup { position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; color: black; padding: 20px; border-radius: 10px; display: none; }
        .popup a { color: blue; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

    <div id="promotion">🔥 Watch Live Cricket on <b>RadarXCricket</b> | Join Telegram for Updates!</div>
    
    <div id="video-container">
        <video id="video" controls autoplay></video>
        <select id="quality-selector"></select>
    </div>

    <div id="popup" class="popup">
        <p>Join <b>RadarXCricket</b> on Telegram for live updates! 🎯</p>
        <a href="https://t.me/RadarXCricket" target="_blank">👉 Join Now</a>
    </div>

    <script>
        var video = document.getElementById("video");
        var qualitySelector = document.getElementById("quality-selector");
        var popup = document.getElementById("popup");

        if (Hls.isSupported()) {
            var hls = new Hls();
            hls.loadSource("https://hocdn.news/live/star1in.m3u8");
            hls.attachMedia(video);
            
            hls.on(Hls.Events.MANIFEST_PARSED, function(event, data) {
                qualitySelector.innerHTML = "";
                data.levels.forEach((level, index) => {
                    var option = document.createElement("option");
                    option.value = index;
                    option.text = level.height + "p";
                    qualitySelector.appendChild(option);
                });

                qualitySelector.addEventListener("change", function() {
                    hls.currentLevel = parseInt(this.value);
                });
            });
        } else if (video.canPlayType("application/vnd.apple.mpegurl")) {
            video.src = "https://hocdn.news/live/star1in.m3u8";
        }

        setTimeout(() => {
            popup.style.display = "block";
        }, 5000);
    </script>

</body>
</html>