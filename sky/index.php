<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HLS Stream Player</title>
    <link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet" />
</head>
<body>
    <video-js id="hls_video" class="vjs-default-skin" controls preload="auto" width="640" height="264">
        <source src="https://1a-1791.com/live/t5qc33px/slot-11/y5l8-0bnw/chunklist.m3u8" type="application/x-mpegURL">
    </video-js>

    <script src="https://vjs.zencdn.net/7.19.2/video.min.js"></script>
    <script>
        var player = videojs('hls_video');
        player.play();
    </script>
</body>
</html>
