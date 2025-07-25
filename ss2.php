

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <style>
      :root {
        --primary-color: #FFA500;
        --plyr-color-main: #FFA500;
        --dark-bg: #1a1a1a;
        --text-color: #ffffff;
        --telegram-bg: #FFA500;
      }
      html, body {
        margin: 0;
        padding: 0;
        height: 100vh;
        overflow: hidden;
        background: transparent;
        font-family: 'Roboto', sans-serif;
      }
      .container {
        display: flex;
        flex-direction: column;
        height: 100vh;
        position: relative;
      }
      .video-container {
        height: 100vh;
        position: relative;
      }
      .plyr {
        border-radius: 8px;
        overflow: hidden;
        width: 100%;
        height: 100%;
      }
      .quality-button {
        position: absolute;
        top: 10px;
        right: 10px;
        background: rgba(0, 0, 0, 0.4);
        color: #fff;
        border: 1px solid #FFA500;
        padding: 6px 12px;
        border-radius: 4px;
        cursor: pointer;
        z-index: 10;
        font-size: 14px;
        transition: background 0.2s ease;
      }
      .quality-button:hover {
        background: rgba(0, 0, 0, 0.8);
      }
      .quality-menu {
        position: absolute;
        top: 40px;
        right: 10px;
        background: var(--dark-bg);
        border: 1px solid #FFA500;
        border-radius: 4px;
        overflow: hidden;
        z-index: 10;
        display: none;
      }
      .quality-menu.active {
        display: block;
      }
      .quality-menu button {
        display: block;
        width: 100%;
        background: none;
        border: none;
        padding: 8px 12px;
        color: #fff;
        text-align: left;
        cursor: pointer;
        transition: background 0.2s ease;
      }
      .quality-menu button:hover {
        background: rgba(255, 255, 255, 0.1);
      }
      @media (max-width: 480px) {
        .quality-button {
          top: 5px;
          right: 5px;
          padding: 4px 8px;
          font-size: 12px;
        }
        .quality-menu {
          top: 35px;
          right: 5px;
          font-size: 12px;
          min-width: 80px;
        }
        .quality-menu button {
          padding: 6px 8px;
        }
      }
      .telegram-button {
        display: none;
        align-items: center;
        justify-content: center;
        gap: 12px;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: var(--telegram-bg);
        color: #000;
        text-decoration: none;
        height: 50px;
        font-size: 16px;
        font-weight: bold;
        border: none;
        transition: background 0.2s ease;
      }
      .telegram-button:hover {
        background: #007ab3;
      }
      .telegram-icon {
        width: 24px;
        height: 24px;
        fill: currentColor;
        margin-bottom: -2px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="video-container">
        <button id="qualityButton" class="quality-button">Quality: Auto</button>
        <div id="qualityMenu" class="quality-menu"></div>
        <video class="plyr-js" id="player" playsinline controls poster="">
          <source src="https://v18tataplaysyndication.akamaized.net/bpk-tv/Sports18_1_HD_voot_MOB/output03/index.m3u8?hdnea=exp=1742747374~acl=/*~hmac=95a012999ef5ee39b4047125db76e805af0b253814f48a2de1e04c1b53255ca1&by=Bexo">
        </video>
      </div>
      <a href="https://t.me/RadarXCricket" class="telegram-button" target="_blank" rel="noopener noreferrer">
        <svg class="telegram-icon" viewBox="0 0 24 24">
          <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.658-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z"/>
        </svg>
        Join Our Telegram Channel
      </a>
    </div>
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@1.1.5/dist/hls.min.js"></script>
    <script>
      const video = document.getElementById('player');
      const qualityButton = document.getElementById('qualityButton');
      const qualityMenu = document.getElementById('qualityMenu');
      let hls;
      let qualityOptions = [];

      const player = new Plyr('#player', {
        controls: [
          'play-large', 'play', 'progress', 'current-time',
          'mute', 'volume', 'captions', 'settings', 'pip',
          'airplay', 'fullscreen'
        ],
        ratio: '16:9',
        invertTime: false,
        keyboard: { focused: false, global: true },
        quality: {
          default: 0,
          options: [],
          forced: true
        }
      });

      qualityButton.addEventListener('click', () => {
        qualityMenu.classList.toggle('active');
      });

      function updateQualityButtonText(text) {
        qualityButton.textContent = 'Quality: ' + text;
      }

      if (Hls.isSupported()) {
        hls = new Hls();
        hls.loadSource(video.querySelector('source').src);
        hls.attachMedia(video);
        
        hls.on(Hls.Events.MANIFEST_PARSED, function(event, data) {
          const heights = [...new Set(data.levels.map(level => level.height))].sort((a, b) => b - a);
          
          qualityOptions = heights.map(height => ({
            name: height + 'p',
            value: height
          }));

          Object.assign(player.options.quality, {
            default: qualityOptions[0].value,
            options: qualityOptions,
            onChange: (height) => {
              const levelIndex = data.levels.findIndex(l => l.height === height);
              hls.currentLevel = levelIndex;
              updateQualityButtonText(height + 'p');
            }
          });

          qualityMenu.innerHTML = '';
          const autoButton = document.createElement('button');
          autoButton.textContent = 'Auto';
          autoButton.addEventListener('click', () => {
            hls.currentLevel = -1;
            updateQualityButtonText('Auto');
            qualityMenu.classList.remove('active');
          });
          qualityMenu.appendChild(autoButton);

          qualityOptions.forEach(option => {
            const btn = document.createElement('button');
            btn.textContent = option.name;
            btn.addEventListener('click', () => {
              const levelIndex = data.levels.findIndex(l => l.height === option.value);
              hls.currentLevel = levelIndex;
              updateQualityButtonText(option.name);
              qualityMenu.classList.remove('active');
            });
            qualityMenu.appendChild(btn);
          });

          hls.currentLevel = data.levels.findIndex(l => l.height === qualityOptions[0].value);
          updateQualityButtonText(qualityOptions[0].name);
          player.play();
        });
      } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = video.querySelector('source').src;
        video.addEventListener('loadedmetadata', function() {
          player.play();
        });
      }
      
      window.addEventListener('message', (e) => {
        if (e.data.type === 'play') player.play();
        if (e.data.type === 'pause') player.pause();
      });
    </script>
  </body>
  </html>
  