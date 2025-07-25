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
    file: "https://bcovlive-a.akamaihd.net/5d794e0d06f346708bae48d327e51cb6/eu-west-1/4854911276001/profile_0/chunklist.m3u8",
    position: 'bottom',
    autostart: true,
    stretching: "uniform",
    width: "100%",
    type: "hls" // important change
  });
</script>
 
</body> 
</html>