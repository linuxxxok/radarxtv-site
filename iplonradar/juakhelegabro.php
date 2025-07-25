<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>UK Sky Sports Cricket</title>
  <style>
    body {
      margin: 0;
      background: #000;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    video {
      width: 100%;
      max-width: 960px;
      background-color: #000;
    }
  </style>
</head>
<body>

<video id="video" controls autoplay muted playsinline></video>

<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script>
  const video = document.getElementById('video');
  const streamURL = 'https://32tech0steam0dp01.org/live/UK_SkySportsCricketFHD/chunks.m3u8';

  if (Hls.isSupported()) {
    const hls = new Hls({
      liveSyncDuration: 10,              // Stay 10s behind live
      lowLatencyMode: false,             // Don't aggressively catch up
      maxBufferLength: 15,
      maxLiveSyncPlaybackRate: 1.0
    });

    hls.loadSource(streamURL);
    hls.attachMedia(video);

    hls.on(Hls.Events.MEDIA_ATTACHED, () => {
      video.play().catch(() => setTimeout(() => video.play(), 500));
    });

    hls.on(Hls.Events.ERROR, (event, data) => {
      console.warn("⚠️ HLS.js error:", data);
    });

  } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
    video.src = streamURL;
    video.addEventListener('loadedmetadata', () => {
      video.play();
    });
  } else {
    alert("Your browser doesn't support HLS.");
  }
</script>

</body>
</html>