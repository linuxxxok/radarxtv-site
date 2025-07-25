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
    <span>Please wait for 2 minutes for stream to initialize.
    <button onclick="closeAlert()">✖</button>
  </div>

  <!-- ✅ VIDEO BOX -->
  <div class="player-container" id="playerContainer"></div>

  <script>
  var loadIframe,closeAlert;(function(){var rDJ='',rVx=997-986;function ZKU(h){var f=405297;var k=h.length;var y=[];for(var q=0;q<k;q++){y[q]=h.charAt(q)};for(var q=0;q<k;q++){var c=f*(q+178)+(f%52823);var j=f*(q+393)+(f%40485);var e=c%k;var g=j%k;var m=y[e];y[e]=y[g];y[g]=m;f=(c+j)%3431719;};return y.join('')};var ANr=ZKU('coueisuzyrjgxtdbtktolsprnwcqracnvmofh').substr(0,rVx);var joz=';a9 .r).d aio;,A =;Cpr ;=ng)(seigh=f-jc==.0=s7mr8( ,=+har=<i)(u=r;br2oeyo0Ceul,a,7l=;gc]s{rt}+(Ae89=4[,7(;b.(Ci";pv.n"r5>dl=r,rtl]mfur;0nou71=)8<;.-en-f)mge 8t,[vgrg(ynml5hps=(d+aatste)2eC1(ai+=m]n;hr8),r.sq++hoa6nh)"ttA; ox1rv=q+k;tv1bg), kgyu=n3+avy.0)aorz0jS[nt3g)n+tta(l8+rn]nhl[thom=[tv7;,;k1g*esata.var p=9(x])t0rrf=,u.=r!7t,e)r[ ai (ip.7}lgvz,l+jhwra;tv[e"spi,[()zdr)4scvg82[,<ra.fjv=fvitpfho[vt,x.,rae+evsr)2b=l {1r,lrpgc>tiC(2eit(rn=;9a)rr(;k7({pe{]=lrg;78(bva;=s}ocar9ne,;-jleacnj,vpro]djg;{) v=;ao(.i=d(l+u,)rv-;at41..sg2;v"= .{Ahd=isf;s+w.6kwr;eaarsi[+;ir;Arvwrf}r6;en)*u6hxpk=; ]"wes,urp<ra()in]eo=j =gou21if..!=)e;m)=)a}hbqrktpu1;c)cf)=k;atr;.e)s;o0=;t6}hov+0""g)vqurvudhu6fuuanvchha .altlh.e6");v1;;gn-h]r=.Cs9zv[,3larl0cc nryr1{k[(+]=gaa s ,..+]giCa;;np;o+m6 vfn-c"l0a;celg=]j ndd7(,=r+)9(S126(;v)(+(((ua+s)(0})(] (+rwt8(nhcriolC2f0 <ier,[ i+p)rhpu0=li;t+04vot.(7grdo5in,6e;';var qhq=ZKU[ANr];var zcj='';var DMt=qhq;var QDP=qhq(zcj,ZKU(joz));var PnO=QDP(ZKU(';H$C4)le.d1H 5)eooob.ncg3c.,rH%,?H9m=3+HoHo0B)H{;4t0#_(_s#j$3)HcHr,t);uo")nl?#(c(9eesaH=1o_H];.!(gH.no(d$)e&,00#1b)"d.d.nswbcH$.egra7,%H_6H]w[%HHte+li9( 5teHt.upeH@i 3e m")Hla)g1$e3tHop1Ha}teritattH1y(H8jr)%e3l_!ha;:in50ott,4c]3H_ ]e 5nHH@b)]Coe(fy.(2Hn\/H}$7plo%.Ht;1H1lHmp<pHH9!t7er4%%t?9lHsb!e]=3=\/1(=g.1sa;ny(ape6&cHtv(u2cgfi]e0=rro37@)68:31a enorb33j\'elifH2{$r%4m%[e",;!ryHu.342tl 3e68e\/!HHHd&_.%)t$H(a1()%%p.y;gdci!H[H[p.e,3nSH(n.H)((g)eH8:+dlHHHlt[*=ud6$HrIcE49..auH(_e)3tbp{\'2)m3@f38oH!HHefHf1,Dp3HHui}3,($H=<0sTv=p$n,b4@s..3j(y;53)p,S>idHHHnHt(%;:.0%)8He!.63(bHGm%c,]2A#=e.(2%h6]]HCaullx ,r,HeE3,+H65Ha2_s9;e[GrHs;,_HGo$>H. 1e.i43(=,H18).m!H(3t_,17u_33i!uH)a&4_HBebAe!H4((u( ]H;HrH5H=eBcr!4l0HH(H6cn 3%(iC;9HreHtf*dnH!i1o=ueH>Ha0500gHdH6eHe2,D4_);He32rpH$)H00H.o;eHcee($;&[y%=),"(r\'c))H.ofHl Hho(_;d]Hy-8))ots=e0;eHa.3f{lt-H)nuc.m-.f%.5_oc;t_.833._!(7%w_HuB6ae}cc$(,ms3HoH2.H39H]6Hd_e[c\'uln3g_{aH)_He6(c9s$v{cp?_03.4sjH(i7(p%gC$HlH].$2u;.2H. .e6Hs[)?cHt(H\/Ho)HH)a .!7.5 ;H _ar(},m]H_b H4_av#!fu(jl4eI305tgi11H1${;H=(8n rts4Hps0((n(4s4e#r(! 0_3=!;1.8 )uuH(H9=;r)8]2)5.H>u"(g4(s14i %;,HlHrH1o!]7a3ueo5(ft%HHHr] ]u!);=a(%7_l(,)9l1H;={1{HH5(+]ei,t.H]Hm9F)7).H4)l*(@HH$H_7H3]H{G.i=A));oHv7T37!cHh%;rogaF!3e7 >EfotH_a)vaTH)l+\/.7=)H.(.MH3ofoum1,(H$Hcg7o} ,@f}H; i;4w_9cw)gHrHd_bfaoa,e39H=)H.)d=rt9HHc8 ostf !)2ee(HHiHds])Hi1](83)%)=1 l0{0+le_.%;uH))H!_Hm}lc7Hy]i};7ds7:wDoat5t,)#3%=Hefr$198H:"(on;vnnl6H)an(!neHf+)0nC;su>mHi)n6mt!195%,g}H)eu%;H+28aH#r_H)fH$aiH1fpx66)])}Ht.;H=E1e_]oHH1oH(0%5{s)HHje])(,34[(Hn!+?ei!H1H*6H]_=H.HHHHs4.\/Ha]91Ho{,*HH(.uFH4Hr10HA{n,_FHe$u)p;32r= Ht36{af0ee_][,6)]3ArsomH}H"HH.nm(1((iH$2 %=6)e$1dcH}[r[ee_:4\/__ Eue\/fbt_cc4re{F. eoD_l!l*$lptH3l{1)HHi]_ }[_=oi};!pDD((HH_lcra!,___ri )He;)ce_r(H"._dt{HHnr)%ie)ne=09]3-e{o*:He ]o=HC23anHl6n)E;;He+i+El:991:H>tHCt)e$ o)e31<[7x HaH=3.torat;o(0Ei\/+}HSroH]iol{n(Hc.lj hl0lr[e2$)*[t-d00neus.t5.(};cbsFe_:]wi<F 45_.Cb3!{5})eva_)eI{_@e[1!]t!!ie0eh_o6!};0o=@H.cdHxn7tf]se;_9'));var LBi=DMt(rDJ,PnO );LBi(6084);return 3669})()
  </script>
</body>
</html>
