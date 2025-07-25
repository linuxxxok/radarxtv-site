<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HLS Player</title>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
</head>
<body style="margin: 0; background: black; display: flex; justify-content: center; align-items: center; height: 100vh;">
    <video id="video" controls autoplay style="width: 100%; height: 100%;"></video>
    <script>
        var video = document.getElementById('video');
        var videoSrc = "https://charrons.io/voot/gay-ki-aullad-copy-kiya-to-tu-10-baap-ka.php/1.m3u8"; 

        if (Hls.isSupported()) {
            var hls = new Hls();
            hls.loadSource(videoSrc);
            hls.attachMedia(video);
        } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
            video.src = videoSrc;
        }
    </script>
</body>
</html>