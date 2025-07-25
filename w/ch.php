<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IND A vs ENG Lions - RADARXTV</title>
  <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #000;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #fff;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }

    header {
      padding: 10px 20px;
      background: #111;
      text-align: center;
      font-size: 1.2rem;
      font-weight: bold;
      letter-spacing: 1px;
      border-bottom: 1px solid #333;
    }

    .video-container {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #000;
    }

    video {
      width: 100%;
      height: 100%;
      max-height: 100%;
      max-width: 100%;
      background: #000;
    }

    footer {
      text-align: center;
      padding: 10px;
      background: #111;
      font-size: 0.9rem;
      color: #888;
    }
  </style>
</head>
<body>
  <header>📺 IND A vs ENG Lions Live - RADARXTV</header>

  <div class="video-container">
    <video id="video" controls autoplay></video>
  </div>

  <footer>&copy; 2025 RADARXTV | All rights reserved</footer>

  <script>
    const video = document.getElementById('video');
    const videoSrc = "https://bcovlive-a.akamaihd.net/b238876e5f004ec29d4e07066a044996/eu-west-1/4854911276001/profile_1/chunklist.m3u8";

    if (Hls.isSupported()) {
      const hls = new Hls({
        maxBufferLength: 30,
        maxMaxBufferLength: 60,
        enableWorker: true,
        lowLatencyMode: true,
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
    } else {
      alert('HLS not supported in this browser');
    }
  </script>
</body>
</html>