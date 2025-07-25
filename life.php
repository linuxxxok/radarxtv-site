<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T Sports Live</title>
    <style>
        body {
            margin: 0;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        video {
            width: 100%;
            max-width: 100%;
            height: auto;
            outline: none;
        }
    </style>
</head>
<body>
    <video id="video" controls autoplay></video>

    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <script>
        const video = document.getElementById('video');
        const streamUrl = 'http://38.96.178.201/live/TSports/index.m3u8';

        if (Hls.isSupported()) {
            const hls = new Hls();
            hls.loadSource(streamUrl);
            hls.attachMedia(video);
            hls.on(Hls.Events.MANIFEST_PARSED, () => {
                video.play();
            });
        } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
            video.src = streamUrl;
            video.addEventListener('loadedmetadata', () => {
                video.play();
            });
        } else {
            alert('Your browser does not support HLS.');
        }
    </script>
</body>
</html>
