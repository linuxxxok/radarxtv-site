<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPEG-DASH Video Player</title>
    <script src="https://cdn.dashjs.org/latest/dash.all.min.js"></script>
</head>
<body>

    <video id="videoPlayer" controls width="640" height="360"></video>

    <script>
        var url = "https://Radarxtv.site/cenc.mpd"; // अपनी .mpd फाइल का URL डालें
        var video = document.querySelector("#videoPlayer");
        var player = dashjs.MediaPlayer().create();
        player.initialize(video, url, true);
    </script>

</body>
</html>