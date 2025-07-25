<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RadarX LIVE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://vjs.zencdn.net/8.5.2/video-js.css" rel="stylesheet" />

  <style>
    body {
      margin: 0;
      background: #000;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .video-js {
      width: 100%;
      max-width: 900px;
      height: auto;
    }

    .vjs-control-bar,
    .vjs-duration,
    .vjs-progress-control,
    .vjs-remaining-time,
    .vjs-time-control {
      display: none !important;
    }

    .vjs-live-control {
      display: block !important;
    }

    .vjs-live-control span {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <video
    id="live-video"
    class="video-js vjs-default-skin"
    controls
    autoplay
    muted
    playsinline
  ></video>

  <script src="https://vjs.zencdn.net/8.5.2/video.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>

  <script>
    const video = document.getElementById('live-video');
    const videoSrc = "https://www.tbn24.com/api/video/4031_0.m3u8";

    if (Hls.isSupported()) {
      const hls = new Hls({
        maxBufferLength: 5,
        maxMaxBufferLength: 10,
        liveSyncDuration: 2,
        liveMaxLatencyDuration: 3
      });
      hls.loadSource(videoSrc);
      hls.attachMedia(video);
      hls.on(Hls.Events.MANIFEST_PARSED, () => {
        video.play();
      });
    } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
      video.src = videoSrc;
      video.addEventListener('loadedmetadata', () => {
        video.play();
      });
    }

    video.addEventListener('canplay', () => {
      video.muted = false;
    });
  </script>

</body>
</html>
