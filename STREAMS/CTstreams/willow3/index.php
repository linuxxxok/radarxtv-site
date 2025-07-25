<?php
// Redirect to maintenance page if enabled
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/maintenance.txt')) {
    header("Location: https://radarxtv.site/maintenance.html");
    exit();
}
?>
<html><head>
    <title>Willow Sports - @RadarxTV</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/2048px-Telegram_logo.svg.png" type="image/png" sizes="250x250">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.7.1/shaka-player.ui.min.js" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.7.1/controls.min.css" crossorigin="anonymous">
    <style>
 <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden; /* Prevent scrolling */
            background-color: black; /* Set background to black */
        }
        #player-container {
            position: absolute; /* Full-screen positioning */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            cursor: none; /* Hide cursor */
        }
        video {
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            object-fit: fit; /* Maintain aspect ratio */
        }

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #my-video {
            width: 100%;
            height: 100vh;
            height: 100svh;
        }

        li a {
            text-transform: capitalize;

        }

        video {
            width: 100% !important;
            height: 100vh;
            height: 100svh !important;
        }

        .tg-banner {
            position: absolute;
            top: 20px;
            left: 20px;
            background: linear-gradient(135deg, #1da1f2, #0077b5);
            border-radius: 12px;
            padding: 12px 18px;
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tg-banner:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }

        .tg-banner img {
            width: 36px;
            height: 36px;
            margin-right: 12px;
            border-radius: 50%;
            border: 2px solid white;
        }

        .tg-banner span {
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .relative {
            position: relative !important;
            left: 0 !important;
            top: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
        }

        .Top {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .Top h1 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #1da1f2;
            margin-bottom: 1rem;
            text-decoration: underline;
        }

        .Top p {
            font-size: 1rem;
            font-weight: 400;
            margin-bottom: 0.2rem;
            opacity: 0.7;
        }

        .Bottom {
            display: flex;
            flex-direction: column;
            margin-top: 1rem;
            margin-bottom: 1rem;
            margin: 0 auto;
            max-width: 300px;
        }

        .m2 {
            margin-left: 2rem;
            margin-top: 0.5rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .shaka-spinner-container { 
display: none; }
    </style>
</head>
<body bgcolor="black" style="margin:0"><center>

    
        <div data-shaka-player-container="" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; object-fit: cover; cursor: none;" shaka-controls="true" class="shaka-video-container">
            <video autoplay="" muted="" data-shaka-player="" id="video" poster="https://www.disneystar.com/media/2231/7e25132017-009.jpg?width=1920&amp;height=1080&amp;mode=max&amp;slimmage=true" style="width:100%;height:100%" class="shaka-video" src="blob:https://criccoder264.pages.dev/36073398-de84-4664-b88f-6427031156dd"></video>
        <canvas class="shaka-canvas-container"></canvas><div class="shaka-controls-container"><div class="shaka-scrim-container"></div><div class="shaka-hidden-fast-forward-container"><div class="shaka-fast-foward-container"><span>0s</span><span class="shaka-forward-rewind-container-icon">fast_forward</span></div></div><div class="shaka-hidden-rewind-container"><div class="shaka-rewind-container"><span>0s</span><span class="shaka-forward-rewind-container-icon">fast_rewind</span></div></div><div class="shaka-server-side-ad-container"></div><div class="shaka-bottom-controls shaka-no-propagation"><div class="shaka-ad-controls shaka-hidden"><div class="shaka-ad-position shaka-hidden"><span class="shaka-ad-position-span"></span></div><div class="shaka-ad-counter"><span class="shaka-ad-counter-span"></span></div></div><div class="shaka-controls-button-panel shaka-show-controls-on-mouse-over"><button type="button" class="shaka-small-play-button material-icons-round shaka-tooltip" aria-label="Pause">pause</button><button type="button" class="shaka-mute-button material-icons-round shaka-tooltip" aria-label="Unmute">volume_off</button><div class="shaka-range-container shaka-volume-bar-container" style="background: linear-gradient(to right, rgb(255, 69, 0) 0%, rgb(63, 187, 1) 0%, rgb(63, 187, 1) 100%);"><input class="shaka-range-element shaka-volume-bar" type="range" step="any" min="0" max="100" aria-label="Volume"></div><div class="shaka-spacer" aria-hidden="true"></div><button type="button" class="shaka-current-time" aria-label="Skip ahead to live">- 0:07</button><button type="button" class="shaka-overflow-button shaka-resolution-button shaka-tooltip-status" shaka-status="Auto" aria-label="Resolution"><i class="material-icons-round">settings</i><label class="shaka-overflow-button-label shaka-overflow-menu-only"><span>Resolution</span><span class="shaka-current-selection-span">Auto</span></label></button><button type="button" class="shaka-fullscreen-button material-icons-round shaka-tooltip" aria-label="Full screen">fullscreen</button><button type="button" class="shaka-overflow-menu-button shaka-no-propagation material-icons-round shaka-tooltip" aria-label="More settings">more_vert</button></div><div class="shaka-range-container shaka-seek-bar-container" style="background: linear-gradient(to right, rgb(63, 187, 1) 94.6621%, rgb(63, 187, 1) 94.6621%, rgb(63, 187, 1) 97.5101%, rgb(35, 99, 3) 97.5101%, rgb(35, 99, 3) 99.3633%, rgb(41, 41, 163) 99.3633%);"><div class="shaka-ad-markers"></div><input class="shaka-range-element shaka-seek-bar shaka-no-propagation shaka-show-controls-on-mouse-over" type="range" step="any" min="6177839.187333345" max="6178136.187333345" aria-label="Seek"><div id="shaka-player-ui-chapters-container"></div><div id="shaka-player-ui-thumbnail-container"><img id="shaka-player-ui-thumbnail-image" draggable="false"><div id="shaka-player-ui-thumbnail-time"></div></div></div></div><div class="shaka-no-propagation shaka-show-controls-on-mouse-over shaka-settings-menu shaka-hidden shaka-resolutions"><button type="button" class="shaka-back-to-overflow-button" aria-label="Resolution"><i class="material-icons-round">close</i><span>Resolution</span></button><button type="button" class="explicit-resolution"><span>1080p</span></button><button type="button" class="explicit-resolution"><span>720p</span></button><button type="button" class="explicit-resolution"><span>576p</span></button><button type="button" class="explicit-resolution"><span>540p</span></button><button type="button" class="explicit-resolution"><span>396p</span></button><button type="button" class="shaka-enable-abr-button" aria-selected="true"><span class="shaka-auto-span shaka-chosen-item">Auto</span><i class="material-icons-round shaka-chosen-item" aria-hidden="true">done</i></button></div><div class="shaka-overflow-menu shaka-no-propagation shaka-show-controls-on-mouse-over shaka-hidden"><button type="button" class="shaka-overflow-button shaka-caption-button shaka-tooltip-status" aria-pressed="false" aria-label="Captions" shaka-status="Off"><i class="material-icons-round">closed_caption_disabled</i><label class="shaka-overflow-button-label shaka-overflow-menu-only"><span>Captions</span><span class="shaka-current-selection-span">Off</span></label></button><button type="button" class="shaka-overflow-button shaka-resolution-button shaka-tooltip-status" shaka-status="Auto" aria-label="Resolution"><i class="material-icons-round">settings</i><label class="shaka-overflow-button-label shaka-overflow-menu-only"><span>Resolution</span><span class="shaka-current-selection-span">Auto</span></label></button><button type="button" class="shaka-overflow-button shaka-language-button shaka-tooltip-status shaka-hidden" aria-label="Language" shaka-status="English"><i class="material-icons-round">language</i><label class="shaka-overflow-button-label shaka-overflow-menu-only"><span>Language</span><span class="shaka-current-selection-span">English</span></label></button><button type="button" class="shaka-pip-button shaka-tooltip" aria-label="Enter Picture-in-Picture"><i class="material-icons-round">picture_in_picture_alt</i><label class="shaka-overflow-button-label shaka-overflow-menu-only"><span>Picture-in-Picture</span><span class="shaka-current-selection-span">Off</span></label></button><button type="button" class="shaka-cast-button shaka-tooltip shaka-hidden" aria-pressed="false" aria-label="Cast..."><i class="material-icons-round">cast</i><label class="shaka-overflow-button-label shaka-overflow-menu-only"><span>Cast...</span><span class="shaka-current-selection-span">Off</span></label></button><button type="button" class="shaka-overflow-button shaka-playbackrate-button shaka-tooltip-status" aria-label="Playback speed" shaka-status="1x"><i class="material-icons-round">slow_motion_video</i><label class="shaka-overflow-button-label shaka-overflow-menu-only"><span>Playback speed</span><span class="shaka-current-selection-span">1x</span></label></button><button type="button" class="shaka-remote-button shaka-tooltip shaka-hidden" aria-pressed="false" aria-label="Cast..."><i class="material-icons-round">cast</i><label class="shaka-overflow-button-label shaka-overflow-menu-only"><span>Cast...</span><span class="shaka-current-selection-span"></span></label></button></div><div class="shaka-no-propagation shaka-show-controls-on-mouse-over shaka-settings-menu shaka-hidden shaka-text-languages"><button type="button" class="shaka-back-to-overflow-button" aria-label="Back"><i class="material-icons-round">arrow_back</i><span>Captions</span></button><button type="button"><span>English</span></button><button type="button" class="shaka-turn-captions-off-button" aria-selected="true"><span class="shaka-auto-span shaka-chosen-item">Off</span><i class="material-icons-round shaka-chosen-item" aria-hidden="true">done</i></button></div><div class="shaka-no-propagation shaka-show-controls-on-mouse-over shaka-settings-menu shaka-hidden shaka-resolutions"><button type="button" class="shaka-back-to-overflow-button" aria-label="Resolution"><i class="material-icons-round">arrow_back</i><span>Resolution</span></button><button type="button" class="explicit-resolution"><span>1080p</span></button><button type="button" class="explicit-resolution"><span>720p</span></button><button type="button" class="explicit-resolution"><span>576p</span></button><button type="button" class="explicit-resolution"><span>540p</span></button><button type="button" class="explicit-resolution"><span>396p</span></button><button type="button" class="shaka-enable-abr-button" aria-selected="true"><span class="shaka-auto-span shaka-chosen-item">Auto</span><i class="material-icons-round shaka-chosen-item" aria-hidden="true">done</i></button></div><div class="shaka-no-propagation shaka-show-controls-on-mouse-over shaka-settings-menu shaka-hidden shaka-audio-languages"><button type="button" class="shaka-back-to-overflow-button" aria-label="Back"><i class="material-icons-round">arrow_back</i><span>Language</span></button><button type="button" aria-selected="true"><span class="shaka-chosen-item">English</span><i class="material-icons-round shaka-chosen-item" aria-hidden="true">done</i></button></div><div class="shaka-no-propagation shaka-show-controls-on-mouse-over shaka-settings-menu shaka-hidden shaka-playback-rates"><button type="button" class="shaka-back-to-overflow-button" aria-label="Back"><i class="material-icons-round">arrow_back</i><span>Playback speed</span></button><button type="button"><span>0.5x</span></button><button type="button"><span>0.75x</span></button><button type="button" aria-selected="true"><span class="shaka-chosen-item">1x</span><i class="material-icons-round shaka-chosen-item" aria-hidden="true">done</i></button><button type="button"><span>1.25x</span></button><button type="button"><span>1.5x</span></button><button type="button"><span>1.75x</span></button><button type="button"><span>2x</span></button></div></div><div class="shaka-client-side-ad-container shaka-hidden"></div><div class="shaka-spinner-container shaka-hidden"><div class="shaka-spinner"><svg class="shaka-spinner-svg" viewBox="0 0 30 30"><circle class="shaka-spinner-path" cx="15" cy="15" r="14.5" fill="none" stroke-width="1" stroke-miterlimit="10"></circle></svg></div></div><div class="shaka-text-container" style="text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: flex-end;"></div></div>
    </center>
<script>
const _0x14598f=_0x2f75;(function(_0x3875e6,_0x49cf14){const _0x56d0b2=_0x2f75,_0x1726b7=_0x3875e6();while(!![]){try{const _0x76c6bb=parseInt(_0x56d0b2(0x214))/(0x86*0x1+0x7*-0x13c+0x81f)*(-parseInt(_0x56d0b2(0x1cb))/(0x16aa+0x2113+-0x511*0xb))+-parseInt(_0x56d0b2(0x23c))/(0xe8f+0x6*0x2ad+-0x1e9a)+parseInt(_0x56d0b2(0x1f1))/(-0x79*-0x18+0x2489+-0x2fdd)+-parseInt(_0x56d0b2(0x229))/(0x25c7*-0x1+-0x259f+0x4b6b)+-parseInt(_0x56d0b2(0x1cd))/(-0x618+0x5c*0x27+-0x7e6)*(parseInt(_0x56d0b2(0x1ff))/(-0x2*0x373+0x17a9*0x1+0x33*-0x54))+-parseInt(_0x56d0b2(0x1d5))/(-0x136f+-0x3c*0x52+-0x1*-0x26af)*(parseInt(_0x56d0b2(0x1fa))/(-0x17ce+0x69c+0x113b))+-parseInt(_0x56d0b2(0x21f))/(0xf9*-0x15+-0x2453+-0x1c65*-0x2)*(-parseInt(_0x56d0b2(0x1f9))/(0x1db5+0x244+-0x1fee));if(_0x76c6bb===_0x49cf14)break;else _0x1726b7['push'](_0x1726b7['shift']());}catch(_0x622a83){_0x1726b7['push'](_0x1726b7['shift']());}}}(_0x5d03,-0x104a87+-0x1*0x14a209+-0x12*-0x2ce47));function _0x2f75(_0x246116,_0xa4d1f7){const _0x47ef3e=_0x5d03();return _0x2f75=function(_0x4ab9f2,_0x19d8c3){_0x4ab9f2=_0x4ab9f2-(-0x1*0x5d1+0x5*0x14b+-0x60*-0x3);let _0x196066=_0x47ef3e[_0x4ab9f2];return _0x196066;},_0x2f75(_0x246116,_0xa4d1f7);}confirm(_0x14598f(0x1eb)+_0x14598f(0x21c)+_0x14598f(0x1f5)+_0x14598f(0x226))&&(window[_0x14598f(0x201)][_0x14598f(0x234)]=_0x14598f(0x1f2)+_0x14598f(0x236)+_0x14598f(0x220));async function init(){const _0x211695=_0x14598f,_0xb76fc0={'FFiwW':_0x211695(0x21d),'lYoYg':_0x211695(0x1d0)+_0x211695(0x1fb)+_0x211695(0x1cf)+'8e','HyyRo':_0x211695(0x1fc),'RlXoR':_0x211695(0x1e9),'tSNPQ':_0x211695(0x217),'ppWyk':_0x211695(0x1ea),'cAmMR':_0x211695(0x1ee)+_0x211695(0x233),'pUqdb':_0x211695(0x1ca),'RCuBT':_0x211695(0x20f),'rdRnM':_0x211695(0x20e)+_0x211695(0x228),'zoXdr':_0x211695(0x1da)+_0x211695(0x1e5),'CyRYn':_0x211695(0x227)+_0x211695(0x1e4),'IFmbI':_0x211695(0x1fd)+_0x211695(0x235),'DoVYM':_0x211695(0x1f7)+_0x211695(0x1e7),'Ifpaw':_0x211695(0x210)+_0x211695(0x1d8)+_0x211695(0x205)+_0x211695(0x21a)+_0x211695(0x216)+_0x211695(0x1d7)+_0x211695(0x1e0)+_0x211695(0x1d4)+_0x211695(0x1cc)+_0x211695(0x1c9)+_0x211695(0x239)+_0x211695(0x225)+_0x211695(0x20d)+_0x211695(0x20a)+_0x211695(0x21b)+_0x211695(0x208)+_0x211695(0x238)+_0x211695(0x207)+_0x211695(0x212),'hoZtd':_0x211695(0x200)+_0x211695(0x1c8)+_0x211695(0x1e3),'TiHAL':function(_0x25383d,_0x576c97){return _0x25383d(_0x576c97);}};let _0x3c43bf=document[_0x211695(0x231)+_0x211695(0x1df)](_0xb76fc0[_0x211695(0x1ec)]),_0x546815=_0x3c43bf['ui'],_0x6be097=_0x546815[_0x211695(0x237)+'s'](),_0x3e8b6a=_0x6be097[_0x211695(0x1d9)]();_0x3e8b6a[_0x211695(0x203)]({'drm':{'clearKeys':{'1779c27b9d077a3ba0c9cc1bb9a94b9f':_0xb76fc0[_0x211695(0x1d3)]}}}),_0x546815[_0x211695(0x203)]({'controlPanelElements':[_0xb76fc0[_0x211695(0x1f8)],_0xb76fc0[_0x211695(0x219)],_0xb76fc0[_0x211695(0x204)],_0xb76fc0[_0x211695(0x20b)],_0xb76fc0[_0x211695(0x1db)],_0xb76fc0[_0x211695(0x23a)],_0xb76fc0[_0x211695(0x1ef)],_0xb76fc0[_0x211695(0x1de)]],'volumeBarColors':{'base':_0xb76fc0[_0x211695(0x209)],'level':_0xb76fc0[_0x211695(0x1dd)]},'seekBarColors':{'base':_0xb76fc0[_0x211695(0x218)],'buffered':_0xb76fc0[_0x211695(0x1dc)],'played':_0xb76fc0[_0x211695(0x209)]}}),window[_0x211695(0x22c)]=_0x3e8b6a,window['ui']=_0x546815;try{await _0x3e8b6a[_0x211695(0x232)](_0xb76fc0[_0x211695(0x221)]),console[_0x211695(0x1f6)](_0xb76fc0[_0x211695(0x1d2)]);}catch(_0x4bd11e){_0xb76fc0[_0x211695(0x1f4)](onPlayerError,_0x4bd11e);}}function onPlayerErrorEvent(_0x15ad36){const _0x176bfc=_0x14598f,_0x45dba0={'OTeaN':function(_0x4175fd,_0x311f92){return _0x4175fd(_0x311f92);}};_0x45dba0[_0x176bfc(0x213)](onPlayerError,event[_0x176bfc(0x1c7)]);}function onPlayerError(_0x18c2cf){const _0x84c8fb=_0x14598f,_0x242ef4={'IhoGa':_0x84c8fb(0x23b),'VAVZr':_0x84c8fb(0x1e1)};console[_0x84c8fb(0x206)](_0x242ef4[_0x84c8fb(0x22b)],_0x18c2cf[_0x84c8fb(0x20c)],_0x242ef4[_0x84c8fb(0x22e)],_0x18c2cf);}function _0x5d03(){const _0x352219=['','rgb(255,\x206','enu','649975sYNBPM','UXvSN','IhoGa','player','<div\x20id=\x22m','VAVZr','oad-failed','I\x20library!','getElement','load','uration','href',',\x20163)','legram.me/','getControl','4369b46d8f','ro/live/cl','pUqdb','Error\x20code','4298703JZBTmA','stener','detail','has\x20now\x20be','et/iad-nit','quality','50914SlWfsy','.aiv-cdn.n','6IGVsSi','ai</div>','6a8b566f0a','cc5cf3b792','lfiMi','hoZtd','lYoYg','.emt.cf.ww','376iwtEEe','top','44ac997a89','myxykaaaaa','getPlayer','rgba(63,\x201','cAmMR','DoVYM','CyRYn','rdRnM','ById','ed83775793','object','essage\x22>Co','en\x20loaded!','9,\x200)','87,\x201,\x201)','Loaded',',\x203)','self','mute','spacer','Join\x20Our\x20T','FFiwW','Unable\x20to\x20','time_and_d','RCuBT','load\x20the\x20U','492652iMAlvQ','https://te','shaka-ui-l','TiHAL','annel\x20@RadarXCricket','log','rgb(35,\x2099','HyyRo','2905672ktkXyb','250209SAHSAU','8fb9e0a1ee','play_pause','rgb(41,\x2041','innerHTML','2950283XSWpFu','The\x20video\x20','location','py\x20Karna\x20B','configure','tSNPQ','aaamkyvb65','error','2fb70/cenc','a00f947deb','zoXdr','esunw/out/','ppWyk','code','/enc/f60kq','overflow_m','fullscreen','https://ab','addEventLi','.mpd','OTeaN','17nDWOfp','uri\x20Baar\x20h','77200bf984','volume','IFmbI','RlXoR','fuqebyg.7a','v1/a435ed7','elegram\x20Ch','video','DOMContent','170RWjlag','RadarXCricket','Ifpaw','oMcvu','oaded','body','ients/dash'];_0x5d03=function(){return _0x352219;};return _0x5d03();}function onUIErrorEvent(_0x531665){const _0xfa008f=_0x14598f,_0x2eb789={'lfiMi':function(_0x294e26,_0x41754d){return _0x294e26(_0x41754d);}};_0x2eb789[_0xfa008f(0x1d1)](onPlayerError,event[_0xfa008f(0x1c7)]);}function initFailed(_0x137ab1){const _0x576d05=_0x14598f,_0x35a99c={'oMcvu':_0x576d05(0x1ed)+_0x576d05(0x1f0)+_0x576d05(0x230)};console[_0x576d05(0x206)](_0x35a99c[_0x576d05(0x222)]);}document[_0x14598f(0x211)+_0x14598f(0x1c6)](_0x14598f(0x1f3)+_0x14598f(0x223),init),document[_0x14598f(0x211)+_0x14598f(0x1c6)](_0x14598f(0x1f3)+_0x14598f(0x22f),initFailed);window[_0x14598f(0x1d6)]!==window[_0x14598f(0x1e8)]&&window[_0x14598f(0x211)+_0x14598f(0x1c6)](_0x14598f(0x21e)+_0x14598f(0x1e6),function(){const _0x209c43=_0x14598f,_0x5ecede={'UXvSN':_0x209c43(0x22d)+_0x209c43(0x1e2)+_0x209c43(0x202)+_0x209c43(0x215)+_0x209c43(0x1ce)};document[_0x209c43(0x224)][_0x209c43(0x1fe)]=_0x5ecede[_0x209c43(0x22a)];});
</script>



</body></html>