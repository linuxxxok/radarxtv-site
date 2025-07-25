<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TSports Live Stream</title>
  <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
</head>
<body>
  <video id="video" width="640" height="360" controls autoplay></video>

  <script>
    const video = document.getElementById('video');
    const videoSrc = 'http://38.96.178.201/live/TSports/index.m3u8';

    if (Hls.isSupported()) {
      const hls = new Hls();
      hls.loadSource(videoSrc);
      hls.attachMedia(video);
      hls.on(Hls.Events.MANIFEST_PARSED, function() {
        video.play();
      });
    } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
      video.src = videoSrc;
      video.addEventListener('loadedmetadata', function() {
        video.play();
      });
    } else {
      alert('आपका ब्राउज़र इस स्ट्रीम को सपोर्ट नहीं करता। कृपया Safari या Chrome का उपयोग करें।');
    }
  </script>
</body>
</html>