<?php
// Redirect to maintenance page if enabled
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/maintenance.txt')) {
    header("Location: https://radarxtv.site/maintenance.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RadarXCricket</title>
<script src="https://content.jwplatform.com/libraries/KB5zFt7A.js"></script>
<style>
/* General Styling */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to bottom, #000000, #1a1a1a);
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    overflow: hidden;
}

/* Video Player Container */
#video {
    width: 90%;
    max-width: 720px;
    margin: 20px auto;
    border: 2px solid #1e90ff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
    transition: border 0.3s;
}

.fullscreen #video {
    border: none;
    box-shadow: none;
}

/* Telegram Button Styling */
#telegramButton {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 250px;
    height: 50px;
    background: linear-gradient(90deg, #1e90ff, #001f3f);
    color: white;
    font-weight: bold;
    font-size: 16px;
    border: none;
    border-radius: 25px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
    cursor: pointer;
    overflow: hidden;
    position: relative;
    transition: transform 0.3s, box-shadow 0.3s;
}

#telegramButton:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.6);
    background: linear-gradient(90deg, #001f3f, #1e90ff);
}
</style>
</head>
<body>

<!-- Video Player -->
<div id="video"></div>

<!-- Telegram Button -->
<div id="telegramButton" onclick="redirectToTelegram()">
    Join Telegram
</div>

<!-- Scripts -->
<script type="text/javascript">
 //<!--
function _0xd8ea(_0x5b7087,_0x11b0aa){const _0x44ed8c=_0x22ae();return _0xd8ea=function(_0x4d10ea,_0x23e49e){_0x4d10ea=_0x4d10ea-(-0xc13+-0x259d+0x1*0x3375);let _0x33a2fd=_0x44ed8c[_0x4d10ea];return _0x33a2fd;},_0xd8ea(_0x5b7087,_0x11b0aa);}const _0x57239c=_0xd8ea;function _0x22ae(){const _0x4afca2=['setup','24TNhfif','remove','_CRICKET/i','100%','fullscreen','464LKHkEH','body','https://t.','SKY_SPORTS','0ecd171b71','55.xyz/UK_','2lYitvy','4533192KZhwZl','location','16:9','50CmMHqg','token=0c21','2cd056dc5c','ndex.m3u8?','tay\x20update','7202670NfKUEg','https://cx','648149ZDSvdW','Join\x20Our\x20T','video','ULvbZ','elegram\x20Ch','45052mmVjHS','href','me/RADARX','3045537RUlCNV','9721014f','classList','CRICKET','add','KophM','glow','annel\x20to\x20s','603552FYzLGp','6148775VcOKip'];_0x22ae=function(){return _0x4afca2;};return _0x22ae();}(function(_0x100112,_0x38c87a){const _0x3b5fbd=_0xd8ea,_0x17cecc=_0x100112();while(!![]){try{const _0x30fca4=-parseInt(_0x3b5fbd(0x1d3))/(-0x1d6b*-0x1+0x191b*0x1+-0x3685)*(-parseInt(_0x3b5fbd(0x1c8))/(0x26b1+0x3*-0xcb3+-0x96))+-parseInt(_0x3b5fbd(0x1e3))/(-0x8*0x11f+0x18d*0x12+-0x12ef)*(-parseInt(_0x3b5fbd(0x1e6))/(-0x1d63+-0x15*0x115+0x18*0x22c))+parseInt(_0x3b5fbd(0x1e4))/(-0x2*0x59f+0x9d+0xaa6*0x1)+-parseInt(_0x3b5fbd(0x1d1))/(0x232d+-0x23f3+-0xcc*-0x1)+parseInt(_0x3b5fbd(0x1d8))/(-0x2*-0x1139+0x2457+-0x46c2)*(-parseInt(_0x3b5fbd(0x1eb))/(-0xf51*-0x1+-0x972+-0x5d7))+parseInt(_0x3b5fbd(0x1c9))/(-0x1e1f+0x1*-0x1fe7+0x3e0f)+-parseInt(_0x3b5fbd(0x1cc))/(0x9e*-0x30+0x1f*-0xa3+0x3167*0x1)*(parseInt(_0x3b5fbd(0x1db))/(-0x13*0x1b5+-0xae*-0x15+0x1234));if(_0x30fca4===_0x38c87a)break;else _0x17cecc['push'](_0x17cecc['shift']());}catch(_0x371bfe){_0x17cecc['push'](_0x17cecc['shift']());}}}(_0x22ae,-0xca82*0x7+-0x489a*-0x1b+0x12c*0x667));const playerInstance=jwplayer(_0x57239c(0x1d5))[_0x57239c(0x1e5)]({'width':_0x57239c(0x1e9),'aspectratio':_0x57239c(0x1cb),'autostart':!![],'mute':![],'file':_0x57239c(0x1d2)+_0x57239c(0x1c7)+_0x57239c(0x1c5)+_0x57239c(0x1e8)+_0x57239c(0x1cf)+_0x57239c(0x1cd)+_0x57239c(0x1ce)+_0x57239c(0x1c6)+_0x57239c(0x1dc),'skin':{'name':_0x57239c(0x1e1)}});playerInstance['on'](_0x57239c(0x1ea),function(_0x1cbe7d){const _0x3aacb0=_0x57239c,_0x37b762={'KophM':_0x3aacb0(0x1ea)};_0x1cbe7d[_0x3aacb0(0x1ea)]?document[_0x3aacb0(0x1ec)][_0x3aacb0(0x1dd)][_0x3aacb0(0x1df)](_0x37b762[_0x3aacb0(0x1e0)]):document[_0x3aacb0(0x1ec)][_0x3aacb0(0x1dd)][_0x3aacb0(0x1e7)](_0x37b762[_0x3aacb0(0x1e0)]);});function redirectToTelegram(){const _0x555cd6=_0x57239c,_0x4ad55d={'ULvbZ':_0x555cd6(0x1ed)+_0x555cd6(0x1da)+_0x555cd6(0x1de)};window[_0x555cd6(0x1ca)][_0x555cd6(0x1d9)]=_0x4ad55d[_0x555cd6(0x1d6)];}confirm(_0x57239c(0x1d4)+_0x57239c(0x1d7)+_0x57239c(0x1e2)+_0x57239c(0x1d0)+'d!')&&redirectToTelegram();
//-->

</script>

</body>
</html>