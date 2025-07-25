<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RadarXNews</title>
  <style>
    body {
      margin: 0;
      background-color: #000;
      color: #fff;
      font-family: Arial, sans-serif;
      text-align: center;
    }
    h1 {
      background: linear-gradient(to right, red, gold);
      padding: 20px;
      font-size: 2rem;
      font-weight: bold;
      margin: 0;
    }
    video {
      width: 90%;
      max-width: 900px;
      margin-top: 20px;
      border: 3px solid gold;
      border-radius: 10px;
    }
  </style>
</head>
<body>

  <h1>RadarXNews</h1>
  <video id="video" controls autoplay muted></video>

  <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
  <script>
    const video = document.getElementById('video');
    const videoSrc = 'https://d3kdywbtdfbp9z.cloudfront.net/v1/manifest/93ce20f0f52760bf38be911ff4c91ed02aa2fd92/dff423e0-3c82-46d6-9ecb-3baa96b5694a/03a28154-29f2-4a20-8bb6-a3dfad59cc19/4.m3u8';

    if (Hls.isSupported()) {
      const hls = new Hls();
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
      alert('Stream not supported in this browser.');
    }
  </script>

</body>
</html>