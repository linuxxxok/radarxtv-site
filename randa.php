<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASH Stream Player</title>
    <script src="https://cdn.dashjs.org/latest/dash.all.min.js"></script>
</head>
<body style="text-align:center; background-color:#000; color:#fff;">
    <h2>DASH Stream Player</h2>
    <video id="videoPlayer" controls autoplay style="width: 80%; max-width: 800px;"></video>

    <script>
        var url = "https://otte.live.fly.ww.aiv-cdn.net/pdx-nitro/live/clients/dash/enc/cw64xbclda/out/v1/190f1d69a3d5467f8fb7d9df4339bc49/cenc.mpd";
        var player = dashjs.MediaPlayer().create();
        player.initialize(document.querySelector("#videoPlayer"), url, true);
    </script>
</body>
</html>