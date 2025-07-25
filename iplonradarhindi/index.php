<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RadarxTV Fullscreen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <script src="https://content.jwplatform.com/libraries/SAHhwvZq.js"></script>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #0d0d0d, #1a001a);
      height: 100%;
      width: 100%;
      overflow: hidden;
      font-family: 'Segoe UI', sans-serif;
    }

    #player-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100dvh;
      width: 100vw;
      background-color: #000;
      position: relative;
      animation: popIn 1.2s ease-out;
    }

    @keyframes popIn {
      0% {
        transform: scale(0.95);
        opacity: 0;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    #jwplayerDiv {
      width: 100%;
      height: 100%;
      border: 2px solid #ff0040;
      box-shadow: 0 0 20px rgba(255, 0, 64, 0.8);
    }

    #logo-banner {
      position: absolute;
      top: 0;
      width: 100%;
      text-align: center;
      padding: 10px;
      z-index: 10;
    }

    #logo-banner img {
      max-width: 240px;
      height: auto;
    }

    #join-telegram {
      position: absolute;
      bottom: 10%;
      width: 100%;
      text-align: center;
      z-index: 10;
    }

    #join-telegram a {
      display: inline-block;
      background: linear-gradient(90deg, #ff0040, #ff9900);
      color: white;
      padding: 12px 24px;
      text-decoration: none;
      border-radius: 8px;
      font-size: 18px;
      font-weight: bold;
      box-shadow: 0 0 12px rgba(255, 0, 64, 0.5);
    }

    #join-telegram a:hover {
      filter: brightness(1.1);
    }
  </style>
</head>
<body>
  <div id="player-container">
    <div id="logo-banner">
      <img src="https://radarxtv.site/ipl.png" alt="RadarXTV Logo">
    </div>
    <div id="jwplayerDiv"></div>
  </div>

  <div id="join-telegram">
    <a href="https://t.me/RadarXCricket" target="_blank">Join Telegram</a>
  </div>

  <script>
    function fixHeight() {
      const h = window.innerHeight;
      document.getElementById("player-container").style.height = h + "px";
    }

    window.addEventListener('load', fixHeight);
    window.addEventListener('resize', fixHeight);
    window.addEventListener('orientationchange', fixHeight);

    jwplayer("jwplayerDiv").setup({
      file: "https://wasiteam.online/sports/master.m3u8/?key=WASITV&wmsAuthSign=4e7a51364e5445364e6a45674e4449744d7a41744e5449774d67&c=starhindi", // New stream
      autostart: true,
      mute: false,
      stretching: "exactfit",
      width: "100%",
      height: "100%",
      logo: {
        file: "https://radarxtv.site/ipl.png",
        hide: true
      }
    });

    window.onload = function() {
      setTimeout(function() {
        const joinTelegram = window.confirm("Join our Telegram Channel for more links! \nClick OK to join, or Cancel to continue streaming.");
        if (joinTelegram) {
          window.open("https://t.me/RadarXCricket", "_blank");
        }
      }, 2000);
    };
  </script>
</body>
</html>