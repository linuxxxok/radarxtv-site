<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bitmovin ClearKey Base64</title>
  <meta charset="UTF-8"/>
  <script src="https://cdn.jsdelivr.net/npm/bitmovin-player@8/bitmovinplayer.js"></script>
  <style>
    #player {
      width: 90%;
      height: 500px;
      margin: 20px auto;
      box-shadow: 0 0 30px rgba(0,0,0,0.7);
    }
  </style>
</head>
<body>
  <div id="player"></div>

  <script>
    const playerConfig = {
      key: '534ee365-f575-4ea9-9fa5-89b5df70c973'  // Replace with your Bitmovin key if needed
    };

    const sourceConfig = {
      title: 'ClearKey Stream',
      dash: 'https://a201aivottlinear-a.akamaihd.net/OTTB/lhr-nitro/clients/dash/enc/f60kqesunw/out/v1/a435ed7a00f947deb4369b46d8f2fb70/cenc.mpd',
      drm: {
        clearkey: {
          keys: [
            {
              keyId: 'F3nCe50HejugylwbuakUnw==',
              key: 'zFzzt5KPueCh7mqLVm8Kjg=='
            }
          ]
        }
      }
    };

    const player = new bitmovin.player.Player(document.getElementById('player'), playerConfig);
    player.load(sourceConfig).then(() => {
      console.log('✅ Stream loaded');
    }).catch(error => {
      console.error('❌ Error during playback:', error);
    });
  </script>
</body>
</html>