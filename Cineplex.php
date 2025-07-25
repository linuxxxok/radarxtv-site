
<html>
<head>
<title>RadarXCricket</title>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<script src="https://cdn.jsdelivr.net/npm/hls.js@1.1.4/dist/hls.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.6.12/dist/plyr.css"/>
<script src="https://cdn.jsdelivr.net/npm/plyr@3.6.12/dist/plyr.min.js"></script>
<style>
html {
font-family: sans-serif;
background: #000;
}
.plyr {
height: 100%;
width :100%;
}
:root {
--plyr-color-main: #d9230f;
}
.loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: 9999;
    }

    .loading-text {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        text-align: center;
        width: 100%;
        height: 100px;
        line-height: 100px;
    }

    .loading-text span {
        display: inline-block;
        margin: 0 5px;
        color: #00b3ff;
        font-family: 'Quattrocento Sans', sans-serif;
    }

    .loading-text span:nth-child(1) {
        filter: blur(0px);
        animation: blur-text 1.5s 0s infinite linear alternate;
    }

    @keyframes blur-text {
        0% {
            filter: blur(0px);
        }
        100% {
            filter: blur(4px);
        }
    }
</style>
</head>
<body>
 <div id="loading" class="loading">
<div class="loading-text">
    <span class="loading-text-words" style="color:#d9230f;">R</span>
    <span class="loading-text-words" style="color:#d9230f;">A</span>
    <span class="loading-text-words" style="color:#d9230f;">D</span>
    <span class="loading-text-words" style="color:#d9230f;">A</span>
    <span class="loading-text-words" style="color:#d9230f;">R</span>
    <span class="loading-text-words" style="color:#d9230f;">X</span>
    <span class="loading-text-words" style="color:#d9230f;">T</span>
    <span class="loading-text-words" style="color:#d9230f;">V</span>
    
</div>
</div>

<div>
    <video id="video" autoplay controls crossorigin playsinline></video>
</div>

<script>
 //<!--
function _0x4957(_0x436a6c,_0x1d5c3e){const _0x182051=_0x58ca();return _0x4957=function(_0x43d7f1,_0x27efc2){_0x43d7f1=_0x43d7f1-(0x64d*0x2+0x162e+0x20e7*-0x1);let _0x29b81e=_0x182051[_0x43d7f1];return _0x29b81e;},_0x4957(_0x436a6c,_0x1d5c3e);}const _0x2c9610=_0x4957;function _0x58ca(){const _0x1f72b6=['DXBIP','Events','vcsdU','rNzqR','723vCPPyc','pi/JioTV/a','DOMContent','_1477.m3u8','me/RadarX','Cricket','ARSED','16096RfLiIk','loading','https://t.','style','WgoCU','isSupporte','gxyWo','map','height','quality','hls','currentLev','forEach','getElement','72krwYWg','12QfWyUv','ById','open','loadSource','annel\x20@RadarX','attachMedi','34803505XMTGMg','https://80','2754654qGrEil','levels','pp/ts_live','1258106uUFYJI','Loaded','stener','elegram\x20Ch','display','none','MANIFEST_P','56MmZVlw','addEventLi','video','88y.site/A','Join\x20Our\x20T','Cricket','238730sEJSwQ','Rqxay','84FlRlgP','69855bJZpDz','_blank','748184IrPbeo'];_0x58ca=function(){return _0x1f72b6;};return _0x58ca();}(function(_0x13e4d2,_0x12a69f){const _0x4a54b6=_0x4957,_0x214216=_0x13e4d2();while(!![]){try{const _0x521d14=-parseInt(_0x4a54b6(0x213))/(0x1413*-0x1+-0x71*-0x11+0x25*0x57)+-parseInt(_0x4a54b6(0x210))/(-0x4*0x209+-0x15c6+0x1dec)+parseInt(_0x4a54b6(0x1f2))/(-0xa72+-0x651+0x10c6*0x1)*(-parseInt(_0x4a54b6(0x1f9))/(0x1e65+0x1662+-0x34c3))+-parseInt(_0x4a54b6(0x1eb))/(-0x1b*-0x112+0x1508+-0x31e9)*(-parseInt(_0x4a54b6(0x1ea))/(-0x156a+-0xb51*-0x2+-0x132))+parseInt(_0x4a54b6(0x1e2))/(0x107b+-0x1376*0x1+-0x6e*-0x7)*(parseInt(_0x4a54b6(0x1ed))/(0x1*0xabd+-0x10*-0xd9+0x817*-0x3))+-parseInt(_0x4a54b6(0x207))/(0x23d0+0xa40+0x2e07*-0x1)*(-parseInt(_0x4a54b6(0x1e8))/(-0x1*0x1981+0xfc7+0x9c4))+parseInt(_0x4a54b6(0x20e))/(0x21e+-0x2370+-0x3b5*-0x9)*(parseInt(_0x4a54b6(0x208))/(0x81e+-0x186+-0x2*0x346));if(_0x521d14===_0x12a69f)break;else _0x214216['push'](_0x214216['shift']());}catch(_0x458ba8){_0x214216['push'](_0x214216['shift']());}}}(_0x58ca,-0xdc2c3+0xe8992+0x9ce2d),setTimeout(()=>{const _0x30daf3=_0x4957,_0xb05b5b={'Rqxay':_0x30daf3(0x1fa),'vcsdU':_0x30daf3(0x218)};document[_0x30daf3(0x206)+_0x30daf3(0x209)](_0xb05b5b[_0x30daf3(0x1e9)])[_0x30daf3(0x1fc)][_0x30daf3(0x217)]=_0xb05b5b[_0x30daf3(0x1f0)];},-0x25a1+-0x141c+0x4575),document[_0x2c9610(0x1e3)+_0x2c9610(0x215)](_0x2c9610(0x1f4)+_0x2c9610(0x214),()=>{const _0x56c2aa=_0x2c9610,_0x5f1f1f={'gxyWo':function(_0x254034,_0x1807d9){return _0x254034===_0x1807d9;},'WgoCU':_0x56c2aa(0x1e4),'rNzqR':_0x56c2aa(0x20f)+_0x56c2aa(0x1e5)+_0x56c2aa(0x1f3)+_0x56c2aa(0x212)+_0x56c2aa(0x1f5)},_0x51600f=document[_0x56c2aa(0x206)+_0x56c2aa(0x209)](_0x5f1f1f[_0x56c2aa(0x1fd)]),_0x45371b=_0x5f1f1f[_0x56c2aa(0x1f1)],_0x721fcc={};if(Hls[_0x56c2aa(0x1fe)+'d']()){var _0x1048ef={'maxMaxBufferLength':0x64};const _0x42d309=new Hls(_0x1048ef);_0x42d309[_0x56c2aa(0x20b)](_0x45371b),_0x42d309[_0x56c2aa(0x20d)+'a'](_0x51600f),_0x42d309['on'](Hls[_0x56c2aa(0x1ef)][_0x56c2aa(0x1e1)+_0x56c2aa(0x1f8)],function(){const _0x4bdb1e=_0x56c2aa,_0x34fcc9=_0x42d309[_0x4bdb1e(0x211)][_0x4bdb1e(0x200)](_0x2d612e=>_0x2d612e[_0x4bdb1e(0x201)]);_0x721fcc[_0x4bdb1e(0x202)]={'default':_0x34fcc9[-0x4e+0x1fc5+-0x1f77],'options':_0x34fcc9,'forced':!![],'onChange':_0x596639=>{const _0x3d0cdc=_0x4bdb1e,_0x26ac15={'DXBIP':function(_0x45e3d2,_0x4135ed){const _0x22503c=_0x4957;return _0x5f1f1f[_0x22503c(0x1ff)](_0x45e3d2,_0x4135ed);}};_0x42d309[_0x3d0cdc(0x211)][_0x3d0cdc(0x205)]((_0x25ec34,_0x28c18b)=>{const _0xdc3420=_0x3d0cdc;_0x26ac15[_0xdc3420(0x1ee)](_0x25ec34[_0xdc3420(0x201)],_0x596639)&&(_0x42d309[_0xdc3420(0x204)+'el']=_0x28c18b);});}},new Plyr(_0x51600f,_0x721fcc);}),window[_0x56c2aa(0x203)]=_0x42d309;}else new Plyr(_0x51600f,_0x721fcc);}));confirm(_0x2c9610(0x1e6)+_0x2c9610(0x216)+_0x2c9610(0x20c)+_0x2c9610(0x1e7)+'5')&&window[_0x2c9610(0x20a)](_0x2c9610(0x1fb)+_0x2c9610(0x1f6)+_0x2c9610(0x1f7),_0x2c9610(0x1ec));
//-->

</script>

</body>
</html>