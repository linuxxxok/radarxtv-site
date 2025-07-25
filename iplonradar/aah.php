
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Watch Match</title>
<style>
  #message, .telegram-toggle {
    color: #fff;
    align-items: center;
    z-index: 1001;
    display: flex;
    position: fixed;
  }
  .popup a, .telegram-toggle, .tg-banner {
    text-decoration: none;
  }
  body {
    margin: 0;
    font-family: 'Helvetica Neue', Arial, sans-serif;
    background-color: #f4f4f4;
    overflow: hidden;
  }
  .jwplayer {
    position: absolute !important;
  }
  .jwplayer.jw-flag-aspect-mode {
    min-height: 100%;
    max-height: 100%;
  }
  .telegram-toggle {
    top: 10px;
    right: 10px;
    background-color: #08c;
    padding: 10px 15px;
    border-radius: 50px;
    font-weight: 700;
  }
  .telegram-toggle img {
    width: 20px;
    height: 20px;
    margin-right: 5px;
  }
  #message {
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,.8);
    justify-content: center;
    font-size: 24px;
  }
  .popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: #1c1c1c;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 0 15px rgba(255,255,255,.2);
    z-index: 1002;
    width: 90%;
    max-width: 400px;
    animation: .5s fadeIn;
  }
  .popup h2 {
    color: #fc0;
    margin-bottom: 10px;
    font-size: 20px;
  }
  .popup p {
    margin-bottom: 20px;
    color: #ccc;
    font-size: 16px;
  }
  .popup button {
    background-color: #08c;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color .3s;
    margin-bottom: 10px;
    width: 100%;
  }
  .popup button:hover {
    background-color: #069;
  }
  .popup .close-btn {
    background-color: #555;
  }
  .popup .close-btn:hover {
    background-color: #333;
  }
  .popup a {
    color: #fc0;
  }
  @keyframes fadeIn {
    from {opacity:0;}
    to {opacity:1;}
  }
  @media (max-width:600px){
    .popup {
      width: 90%;
    }
    .popup h2 {
      font-size: 18px;
    }
    .popup p {
      font-size: 14px;
    }
    .popup button {
      padding: 10px;
    }
  }
  .tg-banner {
    position: absolute;
    top: 10px;
    left: 10px;
    background: linear-gradient(135deg,#1da1f2,#0077b5);
    border-radius: 8px;
    padding: 8px 12px;
    display: flex;
    align-items: center;
    color: #fff;
    box-shadow: 0 4px 10px rgba(0,0,0,.3);
    z-index: 1000;
    transition: transform .3s, box-shadow .3s;
  }
  .tg-banner:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 15px rgba(0,0,0,.4);
  }
  .tg-banner img {
    width: 24px;
    height: 24px;
    margin-right: 8px;
    border-radius: 50%;
    border: 1px solid #fff;
  }
  .tg-banner span {
    font-size: 14px;
    font-weight: 600;
    letter-spacing: .3px;
  }
  .join-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
    transition: background-color 0.3s ease;
  }
  .join-button:hover {
    background-color: #0056b3;
  }
</style>
<script src="https://content.jwplatform.com/libraries/SAHhwvZq.js"></script>
</head>
<body>
<div id="content">
  Loading...
</div>

<script>
  if (window.top !== window.self) {
    window.addEventListener('DOMContentLoaded', function() {
      document.body.innerHTML = '<div id="message">Ab to copy mat kar chutiye</div>';
    });
  }




  // Clear loading
  document.getElementById('content').innerHTML = '<div id="jwplayerDiv"></div>';

  // This will override Akamai URLs with proxy if needed
  (function interceptNetworkRequests() {
    const originalOpen = XMLHttpRequest.prototype.open;
    XMLHttpRequest.prototype.open = function(method, url) {
      if (url.includes('sonydaimenew.akamaized.net')) {
        url = url.replace('sonydaimenew.akamaized.net', 'greenyellow-ape-610838.hostingersite.com/event.php');
      } else if (url.includes('sonypartnersdaimenew.akamaized.net')) {
        url = url.replace('sonypartnersdaimenew.akamaized.net', 'greenyellow-ape-610838.hostingersite.com/event.php');
      }
      return originalOpen.apply(this, arguments);
    };
  })();

  // Initialize JWPlayer directly with your provided stream
  window.addEventListener('DOMContentLoaded', function () {
    document.getElementById('content').innerHTML = '<div id="jwplayerDiv"></div>';

    jwplayer("jwplayerDiv").setup({
      playlist: [{
        title: "Live Match",
        description: "You're Watching",
        sources: [{
          file: "https://sonydaimenew.akamaized.net/hls/live/2037143/DAI23ME-V3/master_mdh.m3u8?hdnea=exp=1750798059~acl=/*~id=69499121057018727563043304292110~hmac=801e2d4943f38089d5c4662265993917e2966db7f06a8784c8ccbdcefe25499e",
          type: "hls",
          label: "1080p",
          default: true
        }]
      }],
      width: "100%",
      height: "100%",
      autostart: true,
      controls: true
    });
  });

// Popup confirm on load - outside async IIFE for better timing
window.addEventListener("load", function() {
  setTimeout(() => {
    if (confirm("Join @RadarXTV for more updates?")) {
      window.location.href = "https://t.me/+P6IPpHAJ-oZjNDY1";
    }
  }, 500);
});
</script>
</body>
</html>
