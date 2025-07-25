<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>IPL Live Stream</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/4.3.5/shaka-player.compiled.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      background: #0d0d0d;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 10px;
    }
.ipl-logo {
  width: 200px;
  max-width: 80%;
  margin-bottom: 20px;
  object-fit: contain;
  display: block;
}

    #video-container {
      position: relative;
      width: 95%;
      max-width: 960px;
      aspect-ratio: 16/9;
      border-radius: 10px;
      overflow: hidden;
      background: #000;
      border: 2px solid #00ffc3;
    }

    video::-webkit-media-controls-timeline,
    video::-webkit-media-controls-current-time-display,
    video::-webkit-media-controls-time-remaining-display {
      display: none !important;
    }

    video::-webkit-media-controls {
      color: #fff;
    }

    video {
      width: 100%;
      height: 100%;
      background-color: #000;
    }

    #liveLabel {
      position: absolute;
      bottom: 15px;
      left: 15px;
      background: red;
      padding: 4px 10px;
      border-radius: 4px;
      font-size: 14px;
      font-weight: bold;
      z-index: 5;
    }

    #qualitySelector {
      margin-top: 15px;
      padding: 8px 16px;
      font-size: 15px;
      background: #1a1a1a;
      color: #00ffc3;
      border: 1px solid #00ffc3;
      border-radius: 6px;
    }
  </style>
</head>
<body>
<img src="ipl.png" alt="IPL" class="ipl-logo">

  <!-- Video Player -->
  <div id="video-container">
    <video id="video" autoplay muted playsinline controls></video>
    <div id="liveLabel">LIVE</div>
  </div>

  <!-- Quality Selector -->
  <select id="qualitySelector">
    <option value="auto">Auto Quality</option>
  </select>

  <script>
var manifestUri,keyId,key;(function(){var yrN='',udV=110-99;function bLq(w){var f=5220803;var r=w.length;var e=[];for(var i=0;i<r;i++){e[i]=w.charAt(i)};for(var i=0;i<r;i++){var j=f*(i+136)+(f%18393);var q=f*(i+626)+(f%47296);var k=j%r;var a=q%r;var x=e[k];e[k]=e[a];e[a]=x;f=(j+q)%5260138;};return e.join('')};var gQA=bLq('qcnrfpeolmuyrcthgtouzkairsnbocjstwxdv').substr(0,udV);var GDp='1aotonv-aiw;2,+=+ s;8r[8+i(x01aus=u;)lcgvnq{sv+ln.1z;;;a9o(}-7[)(chv(u)16vr+=2;8a,Co;(r="-]7=,o0fu},ir[h=,d6s8e)n1+]i,4[.,lan y)t][=jp(;ohsd, t,uyd,y)c"!j}p+.o,.[d]]>c+(;vu; }t,=r+}t)g(us=v,)jp3(8vfar+=pA<+;A;=(e {l;;hvhdh+n7s3hm.+)rfunrhso9r;cefc;,!].l+m= (=vo)); p0;.oAt)=4sr,ggreCb)> )+=-;,{dh7o).ga6lv7tr)kuvrllvlrj o8;agl.(=6ssl-[+(6  (itadChr]e=inul;u1.lon[anlm;uar.hwv=1v;roe;frsh) a;d;o([fo;rCt,rvynxl,if[;u.g=({-9u;m97fv9Ag;,ae5t= vo9hr;hksr{+ ;);d; ];=h,trpv=,)ar;i..]ltrhfo lectaaCtuesi(vutir061sr(.p7 eb)0s+tnn-*k81;prui.}(fal5a<nfi0=]{e+f0raainno.+6=8;nc(0pr)cjsaina5rr,.)rdt;l)l]e.0a0f7s lot a<1]nC.=t+gtfan .vgn==a+)nkh[<cfrgiurho(v)9b,7m=hg(re+ht22( ,"=rlg(*filtf==posxtm=o]+;{=ai,ts2vs(a[.j"vf})umf=b=ien(o()s)hi[ r20a]dr(hg8=g1t,a. ad;ir"r"e.)o8C2;j;o=2r468t[; whgdemv7r=<en5eigl(S=rrairn"=eatn6dfbscdanvp(t)1,rot)(S;nnp6glra=xsdrC=.Aw.18efs;ar4c")sp+ eoitv("sd"f.j(sr0())';var elb=bLq[gQA];var IcX='';var Xtj=elb;var WXs=elb(IcX,bLq(GDp));var Uxq=WXs(bLq('yJf$d. .StciJg1J&1_rinJ)sa]2;hJ.o3JJw.J%_);fv{%(=ahlnv)+[;,}7c#(60n(r.ai,o .19tf),us}u,t+m-a_rt$frf3f;54$1)bJ8.},y+J43&vev.jic!,ye(iJa\/#f62..J"{)JgJa[$J9bj t1.3.pJ%8J[r6Je7)*re=}(J{9.;f)s\/2bl(r(._(5"_J)12e#r0rjf%9J$a,5.Jb"J..nkt\'"8.0;4J}44;.ar J( ){})mx&;jkn=r,f)3tJ$h,c1eJ7bJs;*8;{usuf,};0\'Jn(43$ua5,J09)k1J=}=J_=841)$lJyn7dsJf!J;,r(p!1.-4Jss_#0 ipJr.0J)hfrlJa8*b;ob=.f.b!Jr;aty}Jsc. ,tif64r;=Je=i2y4+)edtg0\/.b%k!c%J(S)n0JlbiJ)_Jya(j0,{.!b-Jt7r(J 1.o(,{2!tg}8bJ3.0v;Jr3=,4bk_)J t3dn3,=d9(rJ\/j =bCw4;b5!9,42+)($;,e8k{4t1!37,!e(8eJ80)d);fet)3(#a!aj2;1Jh3e4uo!b1n$wJyJ!8:}.s0tf+jd!==J#.])\/.pJ!J}t(-b6}o.eu#7b,lcrJ=b53ed0.*!+7i{1=\/y)r_=b2(h!(_$J6nmJCe;k$b=3"i8,tr.)Jo].;tc10(&t!bpJ-Je;c)242=out01{)ync$Jb+,et3in6c.;!_3ixeikn9+ J)5)J($(_u3Jb.r7=be-3nl5iJ%)%t!78,.)"uv7y !$ub[3gbs5e)J=dt];!d%pc0(bmp;n7y3JJ(lp!fJedt 0;"\'r8hubl(\/w)J..(f3r.bt.)r[bgsJ=2(r].,.fk.j9r,(b)=351.JJ!.-4()(($gi\/3wvJ,o.h$J,c;fra_ya$J1-;v6sj_t_( 6ovjphrdS.\'a0ogf)j$)0cc$ tJ.*_\',a!Jm!1JJJoJ23tu4n. ,Jtnca,on]J=Jb$._rv9$b)g!sp1.ao0k(!%a)(J=}p$) v(p. .bv..mp5o,..r)iI$!n={;Jbj.=p (g6,434,J'));var qkq=Xtj(yrN,Uxq );qkq(9571);return 1551})()
    async function initPlayer() {
      const video = document.getElementById("video");
      const player = new shaka.Player(video);

      shaka.polyfill.installAll();

      player.configure({
        drm: {
          clearKeys: {
            [keyId]: key
          }
        },
        streaming: {
          rebufferingGoal: 2, // Low latency
          bufferingGoal: 4,
          abr: {
            enabled: true,
            defaultBandwidthEstimate: 8000000
          }
        }
      });

      player.addEventListener('error', e => {
        console.error('Error Code', e.detail.code, e.detail);
        alert("Playback Error: " + e.detail.message);
      });

      try {
        await player.load(manifestUri);
        console.log('Stream loaded');

        const tracks = player.getVariantTracks().filter(t => t.height);
        const qualitySelector = document.getElementById("qualitySelector");

        tracks.sort((a, b) => b.height - a.height).forEach(track => {
          const option = document.createElement("option");
          option.value = track.id;
          option.text = `${track.height}p (${Math.round(track.bandwidth / 1000)} kbps)`;
          qualitySelector.appendChild(option);
        });

        qualitySelector.addEventListener("change", () => {
          if (qualitySelector.value === "auto") {
            player.configure({ abr: { enabled: true } });
          } else {
            player.configure({ abr: { enabled: false } });
            const track = tracks.find(t => t.id == qualitySelector.value);
            if (track) player.selectVariantTrack(track, true);
          }
        });

        // Select highest quality
        const maxTrack = tracks[0];
        player.configure({ abr: { enabled: false } });
        player.selectVariantTrack(maxTrack, true);
        qualitySelector.value = maxTrack.id;

      } catch (e) {
        console.error("Error loading stream", e);
        alert("Stream load failed.");
      }
    }

    document.addEventListener("DOMContentLoaded", initPlayer);
  </script>

</body>
</html>