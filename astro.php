<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPD Stream Player</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.20.3/video-js.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.20.3/video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dashjs/4.4.1/dash.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-dash/2.11.0/videojs-dash.min.js"></script>
</head>
<body>

    <video id="videoPlayer" class="video-js vjs-default-skin" controls autoplay width="640" height="360"></video>

    <script>
        var player = videojs('videoPlayer', {
            techOrder: ["html5"],
            autoplay: true,
            controls: true,
            fluid: true,
            sources: [{
                src: "https://sg-cors.onrender.com/https://linearjitp-playback.astro.com.my/dash-wv/linear/2504/default_ott.mpd",
                type: "application/dash+xml"
            }]
        });

        player.ready(function() {
            console.log("Player Ready!");
        });

        player.on("error", function() {
            console.error("Playback error: ", player.error());
        });
    </script>

</body>
</html>