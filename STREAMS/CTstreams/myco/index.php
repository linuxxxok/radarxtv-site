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

/* Logo Styling */
#logo {
    position: absolute;
    top: 80px;  /* Moved the logo a bit down */
    left: 50%;
    transform: translateX(-50%);
    cursor: pointer;
}

#logo img {
    width: 180px;  /* Increased logo size */
    height: auto;
}

/* Video Player Container */
#video {
    width: 90%;
    max-width: 720px;
    margin: 60px auto 20px auto;
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

<!-- Logo Slot -->
<div id="logo" onclick="redirectToWebsite()">
    <img src="" alt="Logo" />
</div>

<!-- Video Player -->
<div id="video"></div>

<!-- Telegram Button -->
<div id="telegramButton" onclick="redirectToTelegram()">
    Join Telegram
</div>

<!-- Scripts -->
<script type="text/javascript">
    //<!--
const _0xdb197b=_0x5c95;function _0x5c95(_0x5175be,_0x9fe4ef){const _0x49023a=_0x4ef0();return _0x5c95=function(_0x1a0002,_0x4aa567){_0x1a0002=_0x1a0002-(0xf28*0x2+0xd*0x178+-0x3063);let _0x2ad6c9=_0x49023a[_0x1a0002];return _0x2ad6c9;},_0x5c95(_0x5175be,_0x9fe4ef);}(function(_0x11f829,_0x628ecc){const _0x207135=_0x5c95,_0x4caae8=_0x11f829();while(!![]){try{const _0x147695=-parseInt(_0x207135(0x114))/(-0x1163*-0x2+0x1bf+-0x2484)*(-parseInt(_0x207135(0x111))/(0x270b+0x23f+-0x4*0xa52))+-parseInt(_0x207135(0x110))/(0x83*0x18+0x130*0xb+-0x1955)+-parseInt(_0x207135(0x121))/(-0x14f+-0x1b1d+0x1c70)*(parseInt(_0x207135(0x129))/(-0x29d*-0x5+-0xa1d*-0x3+-0x2b63))+parseInt(_0x207135(0x10c))/(-0x61a*-0x2+0x2bd*0xd+0x97*-0x51)*(-parseInt(_0x207135(0x124))/(0xc9b*0x2+0x6d*-0x31+0x9e*-0x7))+-parseInt(_0x207135(0x11a))/(0x1*-0x859+-0x10*0xc5+0x14b1)+-parseInt(_0x207135(0x105))/(0x7be+0x74f+-0x7c*0x1f)*(parseInt(_0x207135(0x117))/(-0x3ea+-0x26e8+0x2adc))+parseInt(_0x207135(0x128))/(-0x4*0xf4+0xfd*-0xd+-0x2*-0x85a);if(_0x147695===_0x628ecc)break;else _0x4caae8['push'](_0x4caae8['shift']());}catch(_0x1579b6){_0x4caae8['push'](_0x4caae8['shift']());}}}(_0x4ef0,0x1*-0x690d+0x32a0b+0x1103*-0x6));const playerInstance=jwplayer(_0xdb197b(0x116))[_0xdb197b(0x11c)]({'width':_0xdb197b(0x113),'aspectratio':_0xdb197b(0x115),'autostart':!![],'mute':![],'file':_0xdb197b(0x10a)+_0xdb197b(0x10d)+_0xdb197b(0x11b)+_0xdb197b(0x11e)+_0xdb197b(0x12a)+'u8','skin':{'name':_0xdb197b(0x11d)}});playerInstance['on'](_0xdb197b(0x112),function(_0x4f4661){const _0x58abf0=_0xdb197b,_0x2f6db3={'QXRTW':_0x58abf0(0x112)};_0x4f4661[_0x58abf0(0x112)]?document[_0x58abf0(0x108)][_0x58abf0(0x126)][_0x58abf0(0x127)](_0x2f6db3[_0x58abf0(0x109)]):document[_0x58abf0(0x108)][_0x58abf0(0x126)][_0x58abf0(0x10b)](_0x2f6db3[_0x58abf0(0x109)]);});function redirectToTelegram(){const _0x271cbd=_0xdb197b,_0x594aaf={'XkhWq':_0x271cbd(0x107)+_0x271cbd(0x122)+_0x271cbd(0x120)};window[_0x271cbd(0x10e)][_0x271cbd(0x106)]=_0x594aaf[_0x271cbd(0x10f)];}function redirectToWebsite(){const _0x2593b7=_0xdb197b,_0x421718={'Xmnal':_0x2593b7(0x107)+_0x2593b7(0x122)+_0x2593b7(0x120)};window[_0x2593b7(0x10e)][_0x2593b7(0x106)]=_0x421718[_0x2593b7(0x118)];}function _0x4ef0(){const _0x2381f2=['elegram\x20Ch','1609576toQvQQ','myco.io/st','setup','glow','ream1/hls/','Join\x20Our\x20T','Cricket','364892arFQHu','me/Radarx','annel\x20to\x20s','21rVNuHj','tay\x20update','classList','add','9980377eXyVHH','5SNIMKv','stream1.m3','45KcxhAw','href','https://t.','body','QXRTW','https://ml','remove','383706FZhJYR','-pull-hwc.','location','XkhWq','370689QYRsci','35414dDmUXc','fullscreen','100%','6HlXOAQ','16:9','video','502730ZVsaDF','Xmnal'];_0x4ef0=function(){return _0x2381f2;};return _0x4ef0();}confirm(_0xdb197b(0x11f)+_0xdb197b(0x119)+_0xdb197b(0x123)+_0xdb197b(0x125)+'d!')&&redirectToTelegram();
//-->

</script>

</body>
</html>