<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TNPL Smooth Player</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.3.5/shaka-player.compiled.min.js"></script>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      background-color: black;
      overflow: hidden;
    }
    video {
      width: 100vw;
      height: 100vh;
      object-fit: cover;
      background-color: black;
    }
  </style>
</head>
<body>
  <video id="video" autoplay controls></video>

  <script>
    async function initApp() {
      const video = document.getElementById('video');
      const player = new shaka.Player(video);

      // Optional: log errors
      player.addEventListener('error', (e) => console.error('Error:', e));

      // Configure for smoother playback
      player.configure({
        streaming: {
          rebufferingGoal: 5,
          bufferingGoal: 15,
          lowLatencyMode: true
        },
        abr: {
          enabled: true,
          defaultBandwidthEstimate: 5000000  // 5Mbps initial estimate
        }
      });

      try {
        await player.load('https://dai.fancode.com/primary/126542_english_hls_91519ta-di_h264/index.m3u8');
        console.log('Video loaded successfully');
      } catch (e) {
        console.error('Failed to load video:', e);
      }
    }

    shaka.polyfill.installAll();
    initApp();
  </script>
</body>
</html>