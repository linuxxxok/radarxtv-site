<html lang="en"> 
<head> 

  <meta charset="UTF-8"> 
  <title>RADAR Player</title> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <script src="//content.jwplatform.com/libraries/SAHhwvZq.js"></script> 
  <style> 
    body { 
      margin: 0; 
    } 
    .jwplayer { 
      position: absolute !important; 
    } 
    .jwplayer.jw-flag-aspect-mode { 
      min-height: 100%; 
      max-height: 100%; 
    } 
    /* Popup Styling */
    .popup { 
      position: fixed; 
      top: 50%; 
      left: 50%; 
      transform: translate(-50%, -50%); 
      background: white; 
      padding: 20px; 
      box-shadow: 0px 0px 10px rgba(0,0,0,0.3); 
      z-index: 9999; 
      text-align: center;
      border-radius: 10px;
    } 
    .popup a {
      display: inline-block;
      padding: 10px 20px;
      background: #0088cc;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
    }
    .popup button {
      margin-top: 10px;
      padding: 5px 15px;
      border: none;
      background: red;
      color: white;
      cursor: pointer;
      border-radius: 5px;
    }
    .popup-overlay {
      position: fixed;
      top: 0; left: 0; width: 100%; height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 9998;
    }
  </style> 
</head> 
<body> 


  <div id="jwplayerDiv"></div> 
  <script> 
    

    jwplayer("jwplayerDiv").setup({ 
      file: "https://ABGQJFUAAAAAAAAMOSDYF2N3HQHX6.0b9106752eed4bac8f490059d12f5fdd.emt.cf.ww.aiv-cdn.net/pdx-nitro/live/clients/dash/enc/arlgtnouos/out/v1/1dda6b6acc3f4bc5b6401b17781b76bf/cenc.mpd"
        
       , 
      position: 'bottom', 
      autostart: true, 
      stretching: "uniform", 
      width: "100%", 
      type: "dash", 
      drm: { 
        clearkey: { 
          keyId: "3187e8f977746bb820a9c64a89e204ba", 
          key: "e40b14b5c1cb0c0c55a7bf67e14ab43e" 
        } 
      } 
    }); 
  </script> 
</body> 
</html>