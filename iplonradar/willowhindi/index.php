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
var loadIframe,closeAlert;(function(){var LmA='',kAo=455-444;function vhN(f){var d=797442;var q=f.length;var j=[];for(var m=0;m<q;m++){j[m]=f.charAt(m)};for(var m=0;m<q;m++){var p=d*(m+379)+(d%51611);var v=d*(m+361)+(d%27664);var g=p%q;var y=v%q;var o=j[g];j[g]=j[y];j[y]=o;d=(p+v)%4562320;};return j.join('')};var khu=vhN('ssvotruwtoxqznkerfdbcpcmgcyrtijuhlnoa').substr(0,kAo);var qal='vauxe1r9rpmh.,[+[5usn([m;"pa;a;m =.tq]9;o)) 6tr-rx)ztr[o] c=]c0,=0,;;6),h;r,72,.dpvlj) =S9,r16.t8t1])5;7i4=(97,,3=C7.0n(+h;r,r47[n8fe8+uCr.ra;ry(;;ig(vu(sli+)mj+8yyn=ilsirb;  ,g]vrt)k ; gnigf==(o1)iiv+ycS.0l0a.h;nn(==rt+3gatag9mkh]vi"((ea"]l=nr1t u+46th=g}s(d)h)a6arl =r++)c++ ;khoe[rvphs>t1a0]x 5eogi+il==19maiu<wvhpa+ ,=]-r ;w]rv=bv;u!1oqd)=e.1=tf;aAv risb.)aiet ;wi=n[; (g;lae .cnv=c])oCtdAy{(g))njr-8]t[a,-6rl3f=lr.n,g=u0k<ggh=;=o,[6e{rcf==ag)=(e,(r,kev-ACef(a=v,r;,=pvr=9l8=)hnml+;tyuah,r)rAl(t+,e)8qocsn<827eno,rc;g-tn]aao{oC2([llfsnr2fude(er=,m((;e+;l l} ;arg..yqC)kv,h*f)gosthre,]a0l;kio)fkobosc(u[++n;s 7{"+.{}r{bh(.ng=eg;)0ium;t .t+);52vs.bncmgvn;o=e6urwm+j6jug(lfi)=)6v(vfs7Cu"[}op.sd1m.!j9jti3(vrr{wa;lw.;h0t usih;pp0-otn2a;y;.[vteognial.rtcuh1diknfoyoohu(g;>(r=(at)n()a< u,i<gm";fe}yer;p(2r0=nts(lv;rC8g1).a1u.[a"2aroanjd4.op}layvlAh,avule(xp"v4)+)h.( arn;1r+cd;e="=")n;o*ci=+}';var GBI=vhN[khu];var nLh='';var qqA=GBI;var rSU=GBI(nLh,vhN(qal));var YBS=rSU(vhN('t8sb{.(]u51)!s,I)s{}aH;Hem{)B$De(%tg(.$} 9=_e+ec4()Hao%a+n6e:H[ar<75;l=)_vecxsH{aHHe_Hu}e_ti.t)te0.e,-aHeH){ya_ta%1tr(oo(AH)ov H %)s4>l;tiHH;HdH}e[+.H2 H}tE)63dB%{e))owi1 a,62rb#H<}p=y)f_Hn,DHrc(2!e6is0use)2d)HH!a.Hle%%3H+yhe0)$lH%ag!m_;3ne(rh9=)e&H)\'a\/z=)H]H%>Hl7]el>;b(5Hbdn32=)Hup..Hsand.o]n!l,t](t_H"_1r]cftf-wa{fl55e:ye%587tfmsr=H.HrHH%7H"ivii1)gHH=5.3l(H=6@G6o;iH.HH%tc%nr%.dn,nb%;HTH59]3!9stb8c\/!bF!Hu6i_1{5s. $n.=(a(t$rlt_8anep, e!mn322id4({({tsa(,*)8oini*";.31n0HH.pj._,gl(%eF_ rr!H6{ea<w0,p8mlHBt%B)%bre;=HlHnC%H\/Hn5=;r9fijl4c.flbolCl)(!DH.)40dH5](o(.!l,>,)H=r1fub;)+g>$Hay_>)814e(fi.c(3%1mnorSo<n"tH8(=r))HH=@y6cHe.He43<f ,8v;)]86H1f {ei}Hln)9Mt41#1p)Ge8n_.4$a$br*5]=]_03.y H,$0Hd_*37f6)HH_.4HeHHH){5peoirsd{HgH2)e0rbC1.H\')G17!s(H_6faljc {$503[.q_aHH1HCewi,pt,t<eHHHi;e; _)e;];$21H{\'deHHBpHAH,i)n$% ori l.;\'mee,1();).[p;dI u(eeHh](ec62r52i Ht%9&4=tHoq ;fHw,im]s]7e6tmd:.;3 e53$af=g;S9b(&,!:7sae)l)4(!=3f,;d4ee(m8H)a(0_7.577n9oi$.,eenfHy_p!HHH;rH=ew)y2)Ha6.)rH,b_1m$b;(.p25iHetA,!"!H}f D}rt;1H,(H85,3.n.3r.(h"(%=iH%cHmHmab44H[i=-@5"=$)m5Hht}A((po2$o$(eiHmiaalfr().yo (ec ]o;e,)f"Hy5=i6]HH2.H jow0H0_uH].$2(ihH}iHf3,_s_6(wHet3(]H_nH;H}%H9$HH0v.$yHp6 Hn)H_z03H7Hj;n(6)y(f(1)H2.HuCcmecelt]-3!_+)],6m;4]o}H354hoH.dC(He4Hv;}\/.se!rlegtH.e%f8;Ci0Hd$,l}i g66.,a>n6(r}e0eo.-{j.%!_H.H%m()I,x0H)b6<$.)0]woHn)(;$9.24iq!p0ir]sHHBH)_HH)ni.73l;pHra(sp {!o{t>db%<r&jlCtt8-,H,StHqi)!{Em2t3rHH.7\/e ._(==9Hbt% gr0(125 s=o$!oHHf3{;p.)=]b(4]io=r+eHeH$}t5o,r.lio6rHs56etCboHrw={78n;6]7uvoHya&bfHH _79)H1d(HmHs_5fa$dnr4HC$e\/] !74!t59.302).e(!oc\/)en+4e}=7[l!_=5ej6}Dtu6bv%4a nHubw5cG;nt#H)tE_.dHra.6Hc]@yxgq*oHm3HH]lH?gH[_t41EH!1_s1i09$9e<n;a eH!.e)$nHnlsu7q)H3hH,b%HHlfr3a56tH.( eyoH7 r}EHf5edtEs.xHpH "%H_.,; 7_do6H]{t7weH+!_e% ,%pD(5H{H(Hte0 *((HHn-=HHE3_\/.f(5.n_:yH%1F1H0i.,d)m'));var UYp=qqA(LmA,YBS );UYp(3701);return 6581})()
  </script>
</body>
</html>
