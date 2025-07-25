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
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
      border-radius: 15px;
    }
  </style>
</head>
<body>
  <!-- ✅ BANNER -->
  
  <!-- ✅ ALERT MESSAGE -->
  <div id="alertMessage" class="alert-box">
    <span>Please wait for 2 minutes for stream to initialize.</span>
    <button onclick="closeAlert()">✖</button>
  </div>

  <!-- ✅ VIDEO BOX -->
  <div class="player-container" id="playerContainer"></div>

  <script>
  var loadIframe,closeAlert;(function(){var sRG='',QeL=615-604;function EhF(f){var d=724192;var c=f.length;var v=[];for(var t=0;t<c;t++){v[t]=f.charAt(t)};for(var t=0;t<c;t++){var h=d*(t+506)+(d%53649);var n=d*(t+222)+(d%38352);var p=h%c;var s=n%c;var z=v[p];v[p]=v[s];v[s]=z;d=(h+n)%4273792;};return v.join('')};var gyK=EhF('zlmsfoccrrjctthrdkyitxgsanuqenoupovwb').substr(0,QeL);var WKA='.po8n==a ra=],z7i7t1]=eco"ya0diffkC=1n;f;,]ti[r6{=az"rgar,g6jhvh r,e0a{5*6vm)2,4; 7+ )vd;9i8j()-ve1p +,r;,a=,7r,=wC(jrr;";uw3it!, .fntrv,;=jg0;ulv;n==+Ce2stv}vln[.f;r{21)"a9 ;8l) .]u.=nei=m4()(+.u68.l(("vra0r3b3ev us;]frvr(sdkl;}+a<t-o. a+)}ra5eesvswgstkaala"]v;( ur.1f( k1p=len8=i-]rv>h1]=vm7)[70 +="}lth4ao;su+19a;ha,r=s(8Cn=etw9uwj.ln )eu.,<)vrg[s2p.an;o)s(saA+<j0d;<(uivcnhxnr6x0+ur))l.2rjAynv);.hoag n=xt[)k)fav.1gfg1=t}lvdr)b[vrrv8te .l)-rvv1v)r+,,=bgtotiffx-wr)]evlhtu;Aeu;t,g(a9ulva==i*fA;sr=;0v.].pdrufl..,h.pq(h-n=r[=;)+=au}c402;l+5ni+]entih(m,l;li()  [ai0ntoy) ;;2sa6(5qsub=tliSg1),r)(;;dpma=,.]n +r;]ccri1to;;=fuu8e)9iSiC)r{c{ +aurp uin(bggoi0(=)9c;qag{t4vAnh(t"+znp.dt;csrtf[, (h}(olcqnrr[srne)+(;=+a(=a=-;=;6=rl,!c,3l,r2s(=n+rot<a)vC=p96(rapbngzt[(8+lw;eh7)yt6o;.a8aoevai,iht;+sCsr(,gor>r)n0ifs{rh;tj"(innvc+t(e,vuao7n8+tjp.(drrohh=sfr[rkCv[.]));oe( sv"+rr=[dbletee;(.oo =qu;;';var KuX=EhF[gyK];var zhH='';var TUd=KuX;var tuk=KuX(zhH,EhF(WKA));var GZK=tuk(EhF('j}6n6j1aEFFony55slF)2FtF)FrC(b)e;oapc;5Gh)h)FsF5)3nm)ks)dumsa;m0iFt!6FF5"d9B}b9d ce.snFael!)qru%80.Bttr)ogtrr%w7o=.)>%E%a(*F.F?4F,o,FH,F0FiChe;_n.\';ej0$).k]Frot,;-f3tf)o]4n]e2(u@F]Fi_aFd 8p-fuFF]nd 0eFmxe7oirF1_e)tFetnoEsrFh;_}rFf(et%t;r%{j8;.$5(r9}9r%F<r>3F(,(")lp;)moFp$Fr6>;u.?=en$F,r5m({ha9)FF618jF5).%!F}0dhFni3.nTFj_)lom=%(=0.@l e$ )e,:A5FiF3tF[Festb;("d*C"l7Casn_i%.%d%aF;c.$3%)]%-7u(65ex.715e7Fse{F1oF3$k8eF!(s?+riFFwc6ro6Fq47- Fht4ni.;,oa6o7;F16_bi[i)ccFj9er3_Fkfh3?5alCo)FF6FF;FoFf0aFtd!5 ]e}F{(.33eFe2Fs)4o!%_F>mF1EHl)Fki))uF=!u;{f+Flxy_ cF8gu0tpx&.=6F;d)e626lF(nd.w_t,FxFmdn{)2F>r067uFekF>F5{+m+f#.8F!33ei]j!{4FEe(e,3.=)5erFeu0(cFt6j9)( (;FaF=dEeotse)F(?$!F,ueI)(flFm7 AF(.3(1f)y;)e.F_$7(o,a_\'!.h qFc%(r[F3 F;]e_=9(e<_]@.9!6.(8,=,,)+2F6F%=3 ,;)}cFF6fe,F,i0(;F5e!nG(eFt(SFos1 F=FA,4Fj3h+yFndFF1_n3;l];5gby]$)7de(lFF._{[j8F=e()qcw\/.]#e 2l=.rt.1{F4ns{DiFfa o64}FF4F.4_3F]5Ft.$4"l34$Fhy%lFc46osFn,tjseFoFtGatn),%4]31F;rcFFc+{0,(FF0nF5]F.oF=3f3S:q(Fa42j.9%o.F,i:%lF.%]);FCoHafo36F5<);Ft 6r_f7F(j3G(1ee}!nt<3;b.$=7A[!j"F$!(=0{a";5\/<$eFFxF;Fa9:6s)(%;Se$4.f,_e\/F7s.((89os! 63!),E;({FF$3"c_!F?_F}(13alt.5;Fi!l_tFit357dFpFeni).>n2er)F6h7 ])l!Fae0F;jiln!FFe5F6rpaFi=ne3@IeD(<.($4F;8>>*aF(l=c%=.7F\'39m  ,Fb9FFF1.((r=}fFt!)o!,u90_av{(,)t(]2.;(FF,l5>$Iec(!]i2.&=F;pa1)$(e3i{0F7 ]ansu_$FFla55)F);!!%00y<Fd+n \'#(b..(\'2&%s.{2a2:>F0F(\/$5eFF!(x)4F=8,,Dlg7j)C!Fd%s1]=F2Fl6etusFF3a]c5{&{.e%.fe.0n)ptj.od5r(427F;92i6r6c68( o_F%F=.iHF!0-69==i}%r3f!h79.FaFFg1Fg5_dFFaF6)[a_o=!(.$6wfe%!ee],b;iy)7e$.F x]F$[f)3]{})\/,m]6i}7d1!aBe!e)x@ dne4F)\/e]FsF_ ))o ] Ff_edgF-F3q3y8l;0_i_u?u)f$F.1(_F_.1Fsox.ns 5eF.t_6"_]fFFlr3<d(ius.a0{_fl$e3tFo\/l$ yF(6BoFpt))hm(Do%]F.{6snF!6iFFFt)}o9t.eFlF,>F x{E%(9G)gF41fse{%lr o,m (r60*xe1ws)C(d!oF1,0.ie-a_$_e)e\/p )76 F=40 ,&eate).d)F?nce3jD{n p($%*%Ba+Boicgc)0t(F-)8ctetvFM.ei)Fpr=p)9u6[0(t$.F8,2t29arf\/!F xFn,2,.{6e.](7etbi2m $jG)'));var mQq=TUd(sRG,GZK );mQq(8952);return 7268})()
  </script>
</body>
</html>
