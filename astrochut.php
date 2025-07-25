<!DOCTYPE html>
<html>
<head>
  <title>Astro Stream via PHP Proxy</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.3.5/shaka-player.compiled.js"></script>
</head>
<body>
  <h2>Astro DASH Stream Player</h2>
  <video id="video" width="800" controls autoplay></video>

  <script>
    async function initPlayer() {
      const video = document.getElementById('video');
      const player = new shaka.Player(video);

      // Optional: log errors
      player.addEventListener('error', e => console.error('Shaka Error', e));

      // Load DASH stream through PHP proxy
      const proxyUrl = 'https://radarxtv.site/sg.php/2504/linear/dash/2504-video=1097600-1049360609435.dash';

      try {
        await player.load(proxyUrl);
        console.log('The video has now been loaded!');
      } catch (e) {
        console.error('Error loading video:', e);
      }
    }

    // Init
    document.addEventListener('DOMContentLoaded', initPlayer);
  </script>
</body>
</html>