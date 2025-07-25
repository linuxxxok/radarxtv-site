<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RadarXTV IPL LIVE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://vjs.zencdn.net/8.5.2/video-js.css" rel="stylesheet" />
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      background: black;
    }
    .video-wrapper {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }
    .live-tag {
      position: absolute;
      top: 12px;
      left: 12px;
      background: red;
      color: white;
      font-size: 14px;
      font-family: Arial, sans-serif;
      font-weight: bold;
      padding: 5px 10px;
      border-radius: 5px;
      z-index: 10;
    }
    .loader {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border: 5px solid #f3f3f3;
      border-top: 5px solid red;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      animation: spin 1s linear infinite;
      z-index: 20;
    }
    @keyframes spin {
      0% { transform: translate(-50%, -50%) rotate(0deg); }
      100% { transform: translate(-50%, -50%) rotate(360deg); }
    }
    .video-js {
      width: 100% !important;
      height: 100% !important;
      object-fit: cover;
    }
    .vjs-control-bar {
      background: rgba(0, 0, 0, 0.5) !important;
    }
    .vjs-time-control,
    .vjs-progress-control,
    .vjs-duration,
    .vjs-remaining-time {
      display: none !important;
    }
  </style>
</head>
<body>

<div class="video-wrapper">
  <div class="live-tag">LIVE</div>
  <div class="loader" id="loader"></div>
  <video
    id="liveStream"
    class="video-js vjs-default-skin"
    autoplay
    muted
    playsinline
    preload="auto"
  ></video>
</div>

<script src="https://vjs.zencdn.net/8.5.2/video.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>

<script>
  var hlsLink = 'https://tbn24.com/api/video/4031_0.m3u8'; // <-- apna link

  var player = videojs('liveStream', {
    autoplay: true,
    muted: true, // Start muted
    controls: true,
    preload: 'auto',
    fluid: true
  });

  player.ready(function() {
    var videoElement = document.getElementById('liveStream');
    videoElement.muted = true;
    videoElement.play();
  });

  player.on('playing', function() {
    var loader = document.getElementById('loader');
    if (loader) {
      loader.style.display = 'none';
    }
  });

  if (Hls.isSupported()) {
    var hls = new Hls();
    hls.loadSource(hlsLink);
    hls.attachMedia(player.tech_.el_);

    hls.on(Hls.Events.MANIFEST_PARSED, function() {
      var videoElement = document.getElementById('liveStream');
      videoElement.play();
    });
  } else if (player.canPlayType('application/vnd.apple.mpegurl')) {
    player.src({ src: hlsLink, type: 'application/vnd.apple.mpegurl' });
  }

  // JAB USER KAHIN BHI CLICK KARE TOH AUDIO ON KAR DENA
  document.body.addEventListener('click', function() {
    var videoElement = document.getElementById('liveStream');
    videoElement.muted = false;
    videoElement.play();
  }, { once: true }); // Sirf ek baar chale

</script>

</body>
</html>