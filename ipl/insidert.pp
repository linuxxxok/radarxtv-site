
<html>
<head>
<title>RADARX</title>
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
const _0x2af682=_0x2f24;function _0x2c41(){const _0x2079a6=['ById','live-02/in','getElement','HNwb3J0cy5','pbUId','DOMContent','stener','me/RadarX','video','12f9ce63d9','https://li','mac=036dd4','open','forEach','loadSource','attachMedi','488WhiPqB','qBXMq','jb20v~Expi','baca80bb','dex.m3u8?h','Loaded','style','4MvCYPz','NnVEE','d20a342564','_blank','mMcZZ','62116268d8','Join\x20Our\x20T','ve-test.ts','HM6Ly9saXZ','efix=aHR0c','671ljDCpJ','addEventLi','3790RrwWNG','UJPEV','ARSED','MANIFEST_P','26789zQHmer','elegram\x20Ch','levels','6c1bf89a5b','2756592WjEfaT','ports.com/','quality','dnts=URLPr','15924XbquiI','25waDFvi','lLXRlc3Qud','annel\x20@radarx','display','2468037OlKGqu','currentLev','550836zMehhq','hls','res=174335','fe9f43ccea','XTV','isSupporte','Events','KfuTB','loading','height','map','TV','748200jxziGt','https://t.','70233600~h','none'];_0x2c41=function(){return _0x2079a6;};return _0x2c41();}(function(_0x415a77,_0x388a28){const _0x5f401d=_0x2f24,_0x1abaff=_0x415a77();while(!![]){try{const _0x13e5a4=-parseInt(_0x5f401d(0xa1))/(0x376*-0x4+-0x1b71+0x294a)+-parseInt(_0x5f401d(0xad))/(0x2604+0x23d8+-0x49da)+-parseInt(_0x5f401d(0x9f))/(-0x1*-0x1302+-0x6*-0x476+-0x30d*0xf)*(-parseInt(_0x5f401d(0xc8))/(0x1f8d*0x1+0x2682+-0x460b))+parseInt(_0x5f401d(0x9b))/(-0x1*-0x1d2+-0x2492+0x22c5)*(parseInt(_0x5f401d(0x9a))/(-0x88a+-0x2632+0x2ec2))+-parseInt(_0x5f401d(0x92))/(0x21*-0xdf+0x1448+0x87e)*(-parseInt(_0x5f401d(0xc1))/(0x1aa6+-0x4*-0x13e+0x137*-0x1a))+parseInt(_0x5f401d(0x96))/(0x161e+-0x613*0x1+-0x1002)+-parseInt(_0x5f401d(0x8e))/(-0x1*-0xb73+-0xe3*-0x6+-0x10bb)*(-parseInt(_0x5f401d(0x8c))/(-0x11*-0x101+0x2*-0x25c+-0xc4e));if(_0x13e5a4===_0x388a28)break;else _0x1abaff['push'](_0x1abaff['shift']());}catch(_0x6d401b){_0x1abaff['push'](_0x1abaff['shift']());}}}(_0x2c41,0x2*-0x38ba5+-0x9b46f+0x1806c4*0x1),setTimeout(()=>{const _0x35fc09=_0x2f24,_0x10e7fc={'UJPEV':_0x35fc09(0xa9),'pbUId':_0x35fc09(0xb0)};document[_0x35fc09(0xb3)+_0x35fc09(0xb1)](_0x10e7fc[_0x35fc09(0x8f)])[_0x35fc09(0xc7)][_0x35fc09(0x9e)]=_0x10e7fc[_0x35fc09(0xb5)];},0xb*0x208+0xa5f+-0xd7*0x19),document[_0x2af682(0x8d)+_0x2af682(0xb7)](_0x2af682(0xb6)+_0x2af682(0xc6),()=>{const _0x5b5060=_0x2af682,_0x53b915={'qBXMq':function(_0x35141b,_0x38a206){return _0x35141b===_0x38a206;},'KfuTB':_0x5b5060(0xb9),'NnVEE':_0x5b5060(0xbb)+_0x5b5060(0x89)+_0x5b5060(0x97)+_0x5b5060(0xb2)+_0x5b5060(0xc5)+_0x5b5060(0x99)+_0x5b5060(0x8b)+_0x5b5060(0x8a)+_0x5b5060(0x9c)+_0x5b5060(0xb4)+_0x5b5060(0xc3)+_0x5b5060(0xa3)+_0x5b5060(0xaf)+_0x5b5060(0xbc)+_0x5b5060(0xba)+_0x5b5060(0xca)+_0x5b5060(0xa4)+_0x5b5060(0xcd)+_0x5b5060(0x95)+_0x5b5060(0xc4)},_0x56f18c=document[_0x5b5060(0xb3)+_0x5b5060(0xb1)](_0x53b915[_0x5b5060(0xa8)]),_0x3434bd=_0x53b915[_0x5b5060(0xc9)],_0xe3ba17={};if(Hls[_0x5b5060(0xa6)+'d']()){var _0x335b7c={'maxMaxBufferLength':0x64};const _0x539fe5=new Hls(_0x335b7c);_0x539fe5[_0x5b5060(0xbf)](_0x3434bd),_0x539fe5[_0x5b5060(0xc0)+'a'](_0x56f18c),_0x539fe5['on'](Hls[_0x5b5060(0xa7)][_0x5b5060(0x91)+_0x5b5060(0x90)],function(){const _0x47cb4e=_0x5b5060,_0x57519e={'mMcZZ':function(_0x32047b,_0x15eb3c){const _0x563716=_0x2f24;return _0x53b915[_0x563716(0xc2)](_0x32047b,_0x15eb3c);}},_0x309326=_0x539fe5[_0x47cb4e(0x94)][_0x47cb4e(0xab)](_0x19ce47=>_0x19ce47[_0x47cb4e(0xaa)]);_0xe3ba17[_0x47cb4e(0x98)]={'default':_0x309326[-0x2129+-0xe*-0x17+0x1fe7],'options':_0x309326,'forced':!![],'onChange':_0xe56ac9=>{const _0x58e7c5=_0x47cb4e;_0x539fe5[_0x58e7c5(0x94)][_0x58e7c5(0xbe)]((_0x324675,_0x4f9be5)=>{const _0x585cdd=_0x58e7c5;_0x57519e[_0x585cdd(0xcc)](_0x324675[_0x585cdd(0xaa)],_0xe56ac9)&&(_0x539fe5[_0x585cdd(0xa0)+'el']=_0x4f9be5);});}},new Plyr(_0x56f18c,_0xe3ba17);}),window[_0x5b5060(0xa2)]=_0x539fe5;}else new Plyr(_0x56f18c,_0xe3ba17);}));function _0x2f24(_0x4f7541,_0x1afadc){const _0x13e7f3=_0x2c41();return _0x2f24=function(_0x1d714f,_0x289853){_0x1d714f=_0x1d714f-(0x26a4+0x16b3+-0x3ccf);let _0x295dbc=_0x13e7f3[_0x1d714f];return _0x295dbc;},_0x2f24(_0x4f7541,_0x1afadc);}confirm(_0x2af682(0x88)+_0x2af682(0x93)+_0x2af682(0x9d)+_0x2af682(0xa5)+'5')&&window[_0x2af682(0xbd)](_0x2af682(0xae)+_0x2af682(0xb8)+_0x2af682(0xac),_0x2af682(0xcb));
//-->

</script>

</body>
</html>