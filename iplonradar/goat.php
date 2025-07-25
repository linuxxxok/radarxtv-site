<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RadarxTV - Live Streaming</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      background-color: #0e0e0e;
      color: white;
    }
    .player-container {
      background: linear-gradient(135deg, #ff0000, #ffd700);
      padding: 10px;
      position: sticky;
      top: 0;
      z-index: 999;
    }
iframe {
  width: 100%;
  aspect-ratio: 16 / 9;
  max-height: 90vh;
  border: none;
  border-radius: 12px;
}
    .channels-container {
      display: flex;
      flex-direction: column;
      gap: 12px;
      padding: 20px 10px;
    }
    .channel-card {
      background: rgba(128, 0, 128, 0.25);
      backdrop-filter: blur(10px);
      border: 1px solid #7f00ff44;
      border-radius: 12px;
      padding: 10px;
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
      transition: background 0.3s;
    }
    .channel-card:hover {
      background: rgba(255, 255, 255, 0.1);
    }
    .channel-logo {
      width: 60px;
      height: auto;
      border-radius: 6px;
    }
    .channel-name {
      font-size: 16px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="player-container">
    <iframe id="player" src="https://radarxtv.site/iplonradar/hh.php" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
  
  <div class="channels-container">
    <div class="channel-card" onclick="switchStream('https://tv4wap.neocities.org/SS1/2')">
      <img class="channel-logo" src="https://wapka-img.zuna.id/858ef840.jpeg" alt="Star Sports 1"/>
      <div class="channel-name">Star Sports 1 HD</div>
    </div>
    <div class="channel-card" onclick="switchStream('https://radarxtv.site/iplonradar/whothey.php')">
      <img class="channel-logo" src="https://wapka-img.zuna.id/7145dac7.png" alt="Star Sports Hindi"/>
      <div class="channel-name">Star Sports 1 Hindi</div>
    </div>
    <div class="channel-card" onclick="switchStream('https://tv4wap.neocities.org/SK/1')">
      <img class="channel-logo" src="https://wapka-img.zuna.id/3d2ae3b3.jpeg" alt="Sky Sports"/>
      <div class="channel-name">Sky Sports Cricket</div>
    </div>
    <div class="channel-card" onclick="switchStream('https://radarxtv.site/iplonradar/willowx')">
      <img class="channel-logo" src="https://wapka-img.zuna.id/29308878.jpeg" alt="WillowX"/>
      <div class="channel-name">WillowX</div>
    </div>
    
    <div class="channel-card" onclick="switchStream('https://tv4wap.neocities.org/TS/1')">
      <img class="channel-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqPb4_yRuPL-nsML6SAUZnNtrTBszJ9ilQSMapjngq72I1sf0uYk212PiT&s=10" alt="T Sports"/>
      <div class="channel-name">T Sports</div>
    </div>
    
<div class="channel-card" onclick="switchStream('https://tv4wap.neocities.org/WT/2')">
      <img class="channel-logo" src="https://wapka-img.zuna.id/29308878.jpeg" alt="Sky Sports"/>
      <div class="channel-name">Willow TV</div>
    </div>
    
    <div class="channel-card" onclick="switchStream('https://radarxtv.site/iplonradar/hh.php')">
      <img class="channel-logo" src="https://upload.wikimedia.org/wikipedia/commons/b/b7/Astro_Cricket.png" alt="Astro Cricket"/>
      <div class="channel-name">Astro Cricket</div>
    </div>
  </div>
<script>
  const iframe = document.getElementById('player');

  function switchStream(url) {
    // Force autoplay (if not already present in URL)
    if (!url.includes('autoplay')) {
      url += url.includes('?') ? '&autoplay=1' : '?autoplay=1';
    }

    // Default height
    iframe.style.height = '56.25vw';
    iframe.style.maxHeight = '90vh';

    // Special height for Astro or WillowX
    if (url.includes('hh.php') || url.includes('willowx')) {
      iframe.style.height = '75vh';
    }

    iframe.src = url;
  }

  // On first load, set height for default Astro stream
  window.onload = () => {
    iframe.style.height = '75vh';
  };
</script>
</body>
</html>