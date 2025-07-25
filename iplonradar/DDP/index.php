<!DOCTYPE html>
<html>
<head>
  <title>DRM Test Player</title>
  <script src="https://cdn.jsdelivr.net/npm/shaka-player@4.3.5/dist/shaka-player.compiled.min.js"></script>
  <style>
    body {
      margin: 0;
      background: #000;
      color: #0f0;
      font-family: monospace;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    video {
      width: 80%;
      max-width: 900px;
      border: 3px solid #0f0;
      border-radius: 10px;
    }
    #log {
      margin-top: 10px;
      max-width: 90%;
      font-size: 0.9em;
      color: #f66;
    }
  </style>
</head>
<body>
  <video id="video" controls autoplay></video>
  <div id="log"></div>

  <script>
    const video = document.getElementById('video');
    const log = document.getElementById('log');
    const player = new shaka.Player(video);

    window.player = player;

    function errorHandler(error) {
      console.error('Shaka Error', error);
      log.textContent = "⚠️ Error: " + error.message;
    }

    player.addEventListener('error', errorHandler);

    player.configure({
      drm: {
        clearKeys: {
          '03c2e0af2f8159f9f0ce9b5dbc865f10': 'cd84ed136b0cc71f8ab8cd4d4f6a2e4c'
        }
      }
    });

    const manifestUri = 'copy.livecricketsl.xyz/proxy/sg.php/https://linearjitp-playback.astro.com.my/dash-wv/linear/2504/default_ott.mpd';

    player.load(manifestUri).then(() => {
      console.log('Stream loaded successfully');
      log.textContent = '✅ Video Loaded';
    }).catch(errorHandler);
  </script>
</body>
</html>