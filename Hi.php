<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Bid Player Cast</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.css" />
  <style>
    body {
      margin: 0;
      background-color: black;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    #video-player {
      width: 90vw;
      max-width: 960px;
    }
  </style>
</head>
<body>

  <video id="video-player" controls autoplay playsinline>
    <source src="https://dtvxtream.com/sonyliv2/300267.m3u8" type="application/x-mpegURL" />
  </video>

  <script src="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.js"></script>
  <script>
    fluidPlayer("video-player", {
      layoutControls: {
        controlBar: {
          autoHide: true,
          autoHideTimeout: 3,
        },
        allowFullscreen: true,
        allowPlaybackRate: false,
        autoPlay: true,
        mute: false,
      },
    });
  </script>
</body>
</html>