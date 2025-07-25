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
        <source src="https://tvs1.aynaott.com/sports18/tracks-v1a1/mono.ts.m3u8?remote=no_check_ip&token=d247e036d443ffee72028864ad2e6f36c2ed5436-b6fffa335fc11bc22f5eae47088b6bfe-1743333141-1743332241" type="application/x-mpegURL">
    </video-js>

    <script src="https://vjs.zencdn.net/7.19.2/video.min.js"></script>
    <script>
        var player = videojs('hls_video');
        player.play();
    </script>
</body>
</html>
