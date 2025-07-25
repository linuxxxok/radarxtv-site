
<!DOCTYPE html><html lang="en">
<head>    
  <meta charset="UTF-8">      
  <meta name="viewport" content="width=device-width, initial-scale=1.0">      
  <title>RadarXTV</title>    
  <script src="https://content.jwplatform.com/libraries/KB5zFt7A.js"></script>    
  <style>    
    body {    
      margin: 0;    
      font-family: Arial, sans-serif;    
      display: flex;    
      flex-direction: column;    
      align-items: center;    
      background-color: #121212;    
      color: #fff;    
    }    
    .title-column {    
      display: flex;    
      justify-content: center;    
      align-items: center;    
      background-color: #000;    
      width: 100%;    
      padding: 20px;    
      margin-bottom: 20px;    
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);    
    }    
    .title-column h1 {    
      font-size: 26px;    
      color: #fff;    
      text-align: center;    
      margin: 0;    
    }    
    .jwplayer {    
      width: 100%;    
      max-width: 900px;    
      height: 450px;    
      background-color: #000;    
      border-radius: 10px;    
      overflow: hidden;    
    }    
    .feed-buttons {  
      display: flex;  
      flex-wrap: wrap;  
      justify-content: center;  
      margin: 20px 0;  
      gap: 10px;  
    }  
    .feed-button {
      padding: 12px 25px;
      background: #ffffff;
      color: #000;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      transition: all 0.3s ease;
      box-shadow: 0px 5px 15px rgba(255, 165, 0, 0.3);
    }
    .feed-button:hover { background: #f0f0f0; transform: translateY(-2px); }#language-switch, #telegram-button { 
  padding: 12px 25px; 
  font-size: 16px; 
  font-weight: bold; 
  border: none; 
  border-radius: 8px; 
  cursor: pointer; 
  transition: all 0.3s ease; 
  text-align: center; 
  display: block; 
  width: 80%; 
  max-width: 300px; 
  margin: 10px 0; 
}

#language-switch { background: #28a745; color: #fff; }
#language-switch:hover { background: #218838; }
#telegram-button { background: #0088cc; color: #fff; text-decoration: none; }
#telegram-button:hover { background: #007ab8; }

footer { background-color: #1f1f1f; text-align: center; padding: 15px; width: 100%; margin-top: auto; color: #ffcc00; }

/* Updated Popup Styling */
.popup {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #222;
  padding: 40px; /* Increased padding */
  width: 400px; /* Increased width */
  max-width: 90%;
  box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.4);
  border-radius: 15px; /* Increased border radius */
  text-align: center;
  display: none;
  z-index: 1000;
}
.popup p {
  font-size: 20px; /* Bigger text */
}
.popup a {
  display: inline-block;
  background: #0088cc;
  color: #fff;
  padding: 12px 25px;
  font-size: 18px;
  border-radius: 8px;
  text-decoration: none;
  margin-top: 15px;
}
.popup a:hover {
  background: #007ab8;
}
.popup button {
  margin-top: 15px;
  background: #ff0000;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 8px;
}

  </style>    
</head>    
<body>    
  <div class="title-column">    
    <h1>RadarXTV</h1>    
  </div>    
  <div class="jwplayer" id="video"></div>    
  <div class="feed-buttons">    
    <button class="feed-button" id="feed_1">Hindi</button>    
    <button class="feed-button" id="feed_2">English</button>
    <button class="feed-button"
id="feed_3">Telugu</button>  
    <button class="feed-button" id="feed_4">Tamil</button>  
    <button class="feed-button" id="feed_5">Bengali</button>  
    <button class="feed-button"    
  </div>    
  <button id="language-switch">Select Your Feed Here</button>
<a id="telegram-button" href="https://t.me/" target="_blank">Join Our Telegram Channel</a>    
  <footer>&copy; 2025 RadarXTV - All rights reserved.</footer>      <!-- Popup -->
<div class="popup" id="popup">
  <p><strong>Join Telegram Channel For Watching Free Live Matches</strong></p>
  <a href="https://t.me/" target="_blank">Join Now</a>
  <br>
  <button onclick="closePopup()">Close</button>
</div>    <script>    
    //<!--
function _0x42cc(_0x54e80a,_0x4149b3){var _0x150c50=_0x2301();return _0x42cc=function(_0x19a7bb,_0x3e6b6a){_0x19a7bb=_0x19a7bb-(-0x1bf7+0x1b5b*0x1+0x128);var _0x280f1e=_0x150c50[_0x19a7bb];return _0x280f1e;},_0x42cc(_0x54e80a,_0x4149b3);}function _0x2301(){var _0x5a3e10=['style','DOMContent','4|2|0|1|3','1QEeBuB','FXbrh','none','kOYLj','QqngU','Fallback/i','bHEZa','116mdSXmn','querySelec','feed_1','https://pr','display','ById','click','video','play','Loaded','L_IDC_MOB/','ZDmfC','239412hpZvoz','popup','addEventLi','1_IPL25_EN','JzenQ','kVSDG','bnwfS','torAll','AetWS','nema.com/b','stener','G_IDC_MOB/','1932824NBaAhZ','1_IPL25_TE','1170831BoQYgW','3914244HIXOwk','493378pvsOdo','.feed-butt','1320539ZnKEom','UpKjS','load','qMJBR','ndex.m3u8','48655OLDnzn','1_IPL25_TA','split','setup','OTfWx','1_IPL25_BE','od-ent-liv','DPDVe','60DaMAgW','N_IDC_MOB/','M_IDC_MOB/','pk-tv/JS_M','elCRG','block','1_IPL25_HI','forEach','7bIYPFz','e-gm.jioci','getElement','iyuxG','ngyUn'];_0x2301=function(){return _0x5a3e10;};return _0x2301();}var _0x5c2fd0=_0x42cc;(function(_0x4d7fd6,_0x43e6d5){var _0x609a11=_0x42cc,_0x56a704=_0x4d7fd6();while(!![]){try{var _0x1de558=parseInt(_0x609a11(0xcd))/(0x44f*-0x1+0xac4+-0x4*0x19d)*(parseInt(_0x609a11(0xae))/(0x2602+0x139*-0x1e+0x2*-0xa9))+parseInt(_0x609a11(0xac))/(0x7*0x77+0x973*0x1+-0xcb1)+-parseInt(_0x609a11(0x92))/(0x12e+0x1d3c+-0x1e66)*(parseInt(_0x609a11(0xb5))/(0xbde+-0x2265+0x168c))+parseInt(_0x609a11(0x9e))/(0x8c4+-0x10*-0x128+0x16*-0x13d)+-parseInt(_0x609a11(0xc5))/(-0x1e2e+0x1*0x1f2+0x1c43)*(-parseInt(_0x609a11(0xaa))/(0x1*-0x204b+0x1*-0x26fb+0x1*0x474e))+parseInt(_0x609a11(0xad))/(0x1818+0x1fe6+-0x37f5)+parseInt(_0x609a11(0xbd))/(0x358+0x2d*-0x7a+0x24*0x81)*(-parseInt(_0x609a11(0xb0))/(0x1db0+-0x1306+-0x1*0xa9f));if(_0x1de558===_0x43e6d5)break;else _0x56a704['push'](_0x56a704['shift']());}catch(_0x1d71e4){_0x56a704['push'](_0x56a704['shift']());}}}(_0x2301,0x72a99*-0x1+0x1*-0x6a2e9+0x132830),document[_0x5c2fd0(0xa0)+_0x5c2fd0(0xa8)](_0x5c2fd0(0xcb)+_0x5c2fd0(0x9b),function(){var _0x5c7769=_0x5c2fd0,_0x43bb89={'JzenQ':_0x5c7769(0xcc),'AetWS':function(_0x4f0d33,_0x33f713){return _0x4f0d33(_0x33f713);},'elCRG':_0x5c7769(0x99),'OTfWx':_0x5c7769(0x94),'bnwfS':_0x5c7769(0xaf)+'on','kVSDG':_0x5c7769(0x95)+_0x5c7769(0xbb)+_0x5c7769(0xc6)+_0x5c7769(0xa7)+_0x5c7769(0xc0)+_0x5c7769(0xc3)+_0x5c7769(0xbe)+_0x5c7769(0x90)+_0x5c7769(0xb4),'iyuxG':_0x5c7769(0x95)+_0x5c7769(0xbb)+_0x5c7769(0xc6)+_0x5c7769(0xa7)+_0x5c7769(0xc0)+_0x5c7769(0xa1)+_0x5c7769(0xa9)+_0x5c7769(0x90)+_0x5c7769(0xb4),'ngyUn':_0x5c7769(0x95)+_0x5c7769(0xbb)+_0x5c7769(0xc6)+_0x5c7769(0xa7)+_0x5c7769(0xc0)+_0x5c7769(0xab)+_0x5c7769(0x9c)+_0x5c7769(0x90)+_0x5c7769(0xb4),'qMJBR':_0x5c7769(0x95)+_0x5c7769(0xbb)+_0x5c7769(0xc6)+_0x5c7769(0xa7)+_0x5c7769(0xc0)+_0x5c7769(0xb6)+_0x5c7769(0xbf)+_0x5c7769(0x90)+_0x5c7769(0xb4),'bHEZa':_0x5c7769(0x95)+_0x5c7769(0xbb)+_0x5c7769(0xc6)+_0x5c7769(0xa7)+_0x5c7769(0xc0)+_0x5c7769(0xba)+_0x5c7769(0xbe)+_0x5c7769(0x90)+_0x5c7769(0xb4),'ZDmfC':_0x5c7769(0x9f),'UpKjS':_0x5c7769(0xc2),'kOYLj':_0x5c7769(0x98)},_0x118239=_0x43bb89[_0x5c7769(0xa2)][_0x5c7769(0xb7)]('|'),_0x1effc6=0x1*0x23b3+0x2*0x25+-0x6f*0x53;while(!![]){switch(_0x118239[_0x1effc6++]){case'0':var _0x11ac2c=_0x43bb89[_0x5c7769(0xa6)](jwplayer,_0x43bb89[_0x5c7769(0xc1)])[_0x5c7769(0xb8)]({'autostart':!![],'playlist':[{'file':_0x5dfb0d[_0x43bb89[_0x5c7769(0xb9)]]}]});continue;case'1':document[_0x5c7769(0x93)+_0x5c7769(0xa5)](_0x43bb89[_0x5c7769(0xa4)])[_0x5c7769(0xc4)](_0x19ad9d=>{var _0x2a08e7=_0x5c7769;_0x19ad9d[_0x2a08e7(0xa0)+_0x2a08e7(0xa8)](_0x32f121[_0x2a08e7(0x8c)],function(){var _0x49d137=_0x2a08e7;_0x11ac2c[_0x49d137(0xb2)]([{'file':_0x5dfb0d[this['id']]}])[_0x49d137(0x9a)]();});});continue;case'2':var _0x5dfb0d={'feed_1':_0x43bb89[_0x5c7769(0xa3)],'feed_2':_0x43bb89[_0x5c7769(0xc8)],'feed_3':_0x43bb89[_0x5c7769(0xc9)],'feed_4':_0x43bb89[_0x5c7769(0xb3)],'feed_5':_0x43bb89[_0x5c7769(0x91)]};continue;case'3':document[_0x5c7769(0xc7)+_0x5c7769(0x97)](_0x43bb89[_0x5c7769(0x9d)])[_0x5c7769(0xca)][_0x5c7769(0x96)]=_0x43bb89[_0x5c7769(0xb1)];continue;case'4':var _0x32f121={'FXbrh':_0x43bb89[_0x5c7769(0x8e)]};continue;}break;}}));function closePopup(){var _0x259fc5=_0x5c2fd0,_0x25d4ac={'QqngU':_0x259fc5(0x9f),'DPDVe':_0x259fc5(0x8d)};document[_0x259fc5(0xc7)+_0x259fc5(0x97)](_0x25d4ac[_0x259fc5(0x8f)])[_0x259fc5(0xca)][_0x259fc5(0x96)]=_0x25d4ac[_0x259fc5(0xbc)];}
//-->

  </script>    </body> 
<script>
// alert('Join Our Telegram For Latest update')
         if (confirm("Join Our Telegram Channel @RadarXCricket") == true) {
         window.open("https://t.me/", '_blank');
     }
</script>   
</html>
