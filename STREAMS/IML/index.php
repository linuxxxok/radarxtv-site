
<html>
<head>
<title>RadarTV</title>
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
    <span class="loading-text-words" style="color:#d9230f;">T</span>
    <span class="loading-text-words" style="color:#d9230f;">V</span>
</div>
</div>

<div>
    <video id="video" autoplay controls crossorigin playsinline></video>
</div>

<script>
 //<!--
function _0x484b(){const _0x5cbb79=['events.jio','ById','a85ab36cb8','186689213c','5415858XDHODi','Join\x20Our\x20T','style','HLS/hdntl=','getElement','map','d78a8edfd3','woFRv','stener','qpsBn','https://t.','olsvw','none','82a92d7f4~','DOMContent','3f91598d25','elegram\x20Ch','hls','_blank','Cricket','exp=174090','Loaded','/index.m3u','2f*~id=966','MANIFEST_P','7231530xYcqQY','~hmac=55f7','Events','552660bzHNrQ','Cnuzw','ARSED','2f5d196cb4','57604a4645','4509256nGYWjP','addEventLi','d4afa6d2e8','IGCZF','video','height','KGwuC','/bpk-tv/JC','loadSource','quality','open','forEach','display','_ColorsCin','https://jc','192180PjZgVc','currentLev','loading','3623838MeDdiI','cinema.com','1280815fePKqp','f531ba989f','9UTweSx','1726~acl=%','annel\x20@RadarX','isSupporte','12xtWYnD','6BsBqtu','me/Radarx','Cricket','data=hdntl','attachMedi','eplexHD/JC','levels'];_0x484b=function(){return _0x5cbb79;};return _0x484b();}function _0x3091(_0x15826a,_0x191c16){const _0x14bc82=_0x484b();return _0x3091=function(_0x194ea0,_0x5b03c8){_0x194ea0=_0x194ea0-(0x1*-0x8de+-0x1*0x1d74+0x7fa*0x5);let _0x30365d=_0x14bc82[_0x194ea0];return _0x30365d;},_0x3091(_0x15826a,_0x191c16);}const _0x2b7090=_0x3091;(function(_0xd58590,_0x28cbd6){const _0x10e6c7=_0x3091,_0x27452a=_0xd58590();while(!![]){try{const _0x295e69=-parseInt(_0x10e6c7(0x1ca))/(-0x8d8+-0x73c*-0x5+-0x5*0x577)+-parseInt(_0x10e6c7(0x1a3))/(0x2*0x904+0x5b3*0x2+-0x1d6c)*(-parseInt(_0x10e6c7(0x197))/(0x852+-0x7*-0x577+-0x2e90))+parseInt(_0x10e6c7(0x1a2))/(-0x22b*-0x5+-0xca8+0x1d5*0x1)*(parseInt(_0x10e6c7(0x19c))/(-0xd*0x71+-0xb*-0x190+0x1a2*-0x7))+-parseInt(_0x10e6c7(0x19a))/(-0x614*-0x4+-0x1d*-0x1d+-0x21f*0xd)+parseInt(_0x10e6c7(0x1ae))/(-0x1a47+0x5*0x3b5+0x7c5)+parseInt(_0x10e6c7(0x1cf))/(-0x65a*0x5+-0x46f+0x2439)*(-parseInt(_0x10e6c7(0x19e))/(-0x22cf+-0x3cb*-0x5+-0x32d*-0x5))+parseInt(_0x10e6c7(0x1c7))/(-0x5d8+-0x1af1+0x20d3);if(_0x295e69===_0x28cbd6)break;else _0x27452a['push'](_0x27452a['shift']());}catch(_0x5245e7){_0x27452a['push'](_0x27452a['shift']());}}}(_0x484b,-0x4f20+-0x36291+-0x4fb29*-0x3),setTimeout(()=>{const _0x57bed2=_0x3091,_0x3ba8a6={'KGwuC':_0x57bed2(0x199),'Cnuzw':_0x57bed2(0x1ba)};document[_0x57bed2(0x1b2)+_0x57bed2(0x1ab)](_0x3ba8a6[_0x57bed2(0x1d5)])[_0x57bed2(0x1b0)][_0x57bed2(0x194)]=_0x3ba8a6[_0x57bed2(0x1cb)];},-0x1278+-0x3*-0x6f7+0x94b),document[_0x2b7090(0x1d0)+_0x2b7090(0x1b6)](_0x2b7090(0x1bc)+_0x2b7090(0x1c3),()=>{const _0x2ed451=_0x2b7090,_0x1f886={'olsvw':function(_0x3f6077,_0xbae994){return _0x3f6077===_0xbae994;},'woFRv':_0x2ed451(0x1d3),'IGCZF':_0x2ed451(0x196)+_0x2ed451(0x1aa)+_0x2ed451(0x19b)+_0x2ed451(0x1d6)+_0x2ed451(0x195)+_0x2ed451(0x1a8)+_0x2ed451(0x1b1)+_0x2ed451(0x1c2)+_0x2ed451(0x19f)+_0x2ed451(0x1c5)+_0x2ed451(0x1ad)+_0x2ed451(0x1d1)+_0x2ed451(0x1bb)+_0x2ed451(0x1a6)+_0x2ed451(0x1c8)+_0x2ed451(0x1ac)+_0x2ed451(0x1b4)+_0x2ed451(0x1cd)+_0x2ed451(0x1bd)+_0x2ed451(0x19d)+_0x2ed451(0x1ce)+_0x2ed451(0x1c4)+'8'},_0x5abf05=document[_0x2ed451(0x1b2)+_0x2ed451(0x1ab)](_0x1f886[_0x2ed451(0x1b5)]),_0x3b6fb9=_0x1f886[_0x2ed451(0x1d2)],_0x592b12={};if(Hls[_0x2ed451(0x1a1)+'d']()){var _0x866a1c={'maxMaxBufferLength':0x64};const _0xe3e6eb=new Hls(_0x866a1c);_0xe3e6eb[_0x2ed451(0x190)](_0x3b6fb9),_0xe3e6eb[_0x2ed451(0x1a7)+'a'](_0x5abf05),_0xe3e6eb['on'](Hls[_0x2ed451(0x1c9)][_0x2ed451(0x1c6)+_0x2ed451(0x1cc)],function(){const _0x2b7710=_0x2ed451,_0xa76225={'qpsBn':function(_0xd5d427,_0x4d0a47){const _0x531384=_0x3091;return _0x1f886[_0x531384(0x1b9)](_0xd5d427,_0x4d0a47);}},_0x5c3f9e=_0xe3e6eb[_0x2b7710(0x1a9)][_0x2b7710(0x1b3)](_0x503898=>_0x503898[_0x2b7710(0x1d4)]);_0x592b12[_0x2b7710(0x191)]={'default':_0x5c3f9e[0xf81+-0x1*0xdb7+-0x1ca],'options':_0x5c3f9e,'forced':!![],'onChange':_0x4e4d92=>{const _0x360b9e=_0x2b7710;_0xe3e6eb[_0x360b9e(0x1a9)][_0x360b9e(0x193)]((_0x32a7ec,_0x2f9849)=>{const _0x31826e=_0x360b9e;_0xa76225[_0x31826e(0x1b7)](_0x32a7ec[_0x31826e(0x1d4)],_0x4e4d92)&&(_0xe3e6eb[_0x31826e(0x198)+'el']=_0x2f9849);});}},new Plyr(_0x5abf05,_0x592b12);}),window[_0x2ed451(0x1bf)]=_0xe3e6eb;}else new Plyr(_0x5abf05,_0x592b12);}));confirm(_0x2b7090(0x1af)+_0x2b7090(0x1be)+_0x2b7090(0x1a0)+_0x2b7090(0x1c1)+'5')&&window[_0x2b7090(0x192)](_0x2b7090(0x1b8)+_0x2b7090(0x1a4)+_0x2b7090(0x1a5),_0x2b7090(0x1c0));
//-->

</script>

</body>
</html>