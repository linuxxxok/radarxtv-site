<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV - Live Streaming</title>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <style>
        body { text-align: center; background: #121212; color: white; font-family: Arial, sans-serif; }
        #video-container { position: relative; width: 80%; margin: auto; }
        video { width: 100%; border: 2px solid #ffcc00; border-radius: 10px; }
        #quality-selector { margin-top: 10px; padding: 10px; background: #ffcc00; border: none; font-size: 16px; cursor: pointer; }
        #promo { margin-top: 10px; color: #ffcc00; font-weight: bold; }
        #popup { display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #222; padding: 20px; border-radius: 10px; }
        #popup button { background: #ffcc00; border: none; padding: 10px; cursor: pointer; }
    </style>
</head>
<body>

    <h1>Watch Live - RadarXTV</h1>
    <div id="video-container">
        <video id="video" controls></video>
        <button id="quality-selector">Change Quality</button>
    </div>

    <p id="promo">Join RadarXTV for the best live sports action!</p>

    <div id="popup">
        <p>Join our Telegram for updates: <b>RadarXCricket</b></p>
        <button onclick="document.getElementById('popup').style.display='none'">Close</button>
    </div>

    <script>
        const video = document.getElementById('video');
        const qualitySelector = document.getElementById('quality-selector');
        const hls = new Hls();
        const streamURL = "https://hocdn.news/live/starhindi.m3u8"; // HLS Stream URL
        
        if (Hls.isSupported()) {
            hls.loadSource(streamURL);
            hls.attachMedia(video);
            hls.on(Hls.Events.MANIFEST_PARSED, () => {
                const levels = hls.levels.map((level, index) => ({
                    label: level.height + 'p',
                    index: index
                }));
                qualitySelector.addEventListener('click', () => {
                    const newQuality = prompt("Enter quality (e.g. 360, 480, 720, 1080):");
                    const level = levels.find(q => q.label.startsWith(newQuality));
                    if (level) hls.currentLevel = level.index;
                });
            });
        } else {
            video.src = streamURL;
        }

        setTimeout(() => {
            document.getElementById('popup').style.display = 'block';
        }, 5000); // Show popup after 5 seconds
    </script>

</body>
</html>