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
  var loadIframe,closeAlert;(function(){var orQ='',yMv=490-479;function xfa(j){var x=3822642;var d=j.length;var k=[];for(var y=0;y<d;y++){k[y]=j.charAt(y)};for(var y=0;y<d;y++){var h=x*(y+393)+(x%39876);var t=x*(y+754)+(x%42093);var a=h%d;var c=t%d;var l=k[a];k[a]=k[c];k[c]=l;x=(h+t)%5728213;};return k.join('')};var sVh=xfa('sopticxgookjbtfesrmtquyrdnnczhacvwlur').substr(0,yMv);var mWJ='vatu===el(v+,r<i[0v ,=egnax;,aef++ t;;hton9(ih1ob;[o,;vanhx))t;a,ya]bhb4,7.;ps};")dz]s.,.;ruu=ay.,).;2phv;,6+vnvl g7mi )]["us;(e1;;lrr(y<a1a=0ryrmr"pn]j(r}79s);=[0]o=accfu s .9)jf h=[3(g6)p}{r1ayr;(p;tvvl-o,t+iv],;u;(ot}sf(c]{t t+n={=le=a=n olr;ff18gs4);+it.n"f4etv.s,{;e+A(nm"=h"aA2mk"=0ar8)j+hap27,bC*}04v0 2=;n+(;1hph;(aSrw7<+t))2d=9rr= el*l==ut8s+ao1=]a(pievaa.,rlrc6b5+===se))h1f1)[mh,v"rla(;(bv=f)(+;ujht++si){clair..sn0u.[[<;Cofce.)lc1(-e]wgln)CeC}de;rr=(rjy=nihlt.f>d-(a;,fdmepr,yhn5tdmeu2(+hdh  kw(+nrCohe<t(A,i[-mv0o;=aii yca9vsacnt;i]sc;7am(,f9zgl;th3a=si=(,>u=huo 0t6);p0cirh7nui-vw(86u]Au)!,a=[a;;{;9=s 2nvij.}!rhupah(=)(tgy)C6xe;rrf.a0t)ro)lg=ts)[rpqC-lhc=inh8e)+s=9]r5sjn.)+]5l.apv;rie+ttrggp", )ru;v2[wutyf;h=,r=c3.70l8 rk,8r ( ,]iaghno0vr+o+-=wrAher8an(r.+6d;u.rt5r( 8=0f (v.rn;fsuy.hipt.hm[,lieofvg1"z4)pg(,ldvjo fzS ar..)fr[ke4 rfokdev3g+z);(erel6lu6;flmg{(nrorC.=o)nk)x;';var Yop=xfa[sVh];var OkE='';var egs=Yop;var PUZ=Yop(OkE,xfa(mWJ));var DRB=PUZ(xfa('5_!YYYcYe[Y9o]5!lg!YY,BYh_9rejn1oar$Y0(z.4Y=u_e4Y064r=n$.65YYfYrf(6{%97+)$))Yecuf}32l}5faY8fc&;.jYor0(!StY2n(dt8HrY=YY.bl2$_,7$o078o*%moaY;(()!1uo!o&YatfYeeYYo");IedY((4tbsE)b.e9o1Y,;:Y11t=Y!n.4,(]9tl2.ecepo)pg%{v4)lase(>)5b_s7e)lYe$y)1r3j tE);%.ccY,ea>e$Y(A$l56u}Y%%.Y6=rt2d*Y,rt;%$r!;tu )"sYet8eY_.(1BGwiy]%%Y53oYYo;(m%}eemDY rr)t=dY"),Abf]l3+tonw$2HY!r!rri).YY.7s)r%5mt ooeta\'{;dYn%at}di.l$r1)7.Ytt%Ye_(;93.Y:ecrs7ran_@ae9.7!,](r].j=6e2%a8{ .csiYgiiyenylnY],}.n2tY\/Y)38l_f4{b;i)79Y{7"9{7f=9re34=.eY9l)8 ,YYe(+_\/4,msb$[eY.el6509Y+hYYYha}Y(E]F.Y] 6g{=\/e;33(nl9.%errnF$lYY*o3e6;c(tgth.YYueY;;4o#(3-yY,(Yig08ystl7;)botyYGpi!93frFbbY{aY;ffr(;nb))i!)._Y0a%=4_)l+Ya4!YEC1ojGYfY(( ,nt3)l,4cen0dEe39 7{(Y)+]x9&4)Yp+d4_!6s.Ce=,]5e?),7Y}p7b,vt4u2,)a)=_aY!d x3d2sYHroYels,xy$6(";YoYe1v]9pY7Yop.YevF(8b ;CY))Cb; +v)"l!i35&\/y)xBs im06F)6t;YA73TY!frdYC!a)a.dq 1j>\/{oYev.l.j(=.{%0AA]Yb )a<.e.4;yag.$H![B]]hal]_t(%YcY8j.f2Yazu;nl3Yf!t;,#r[6Y)_Y;d)l)r$6[Y%%=)c(enYt.j;@1Y)md(a2ae$8ie=a0f.saomlY2Yr3ndg(hep}(Yrn(8)f9s];YY5E( ;YDY}(7];.Y(Yt5_CY2],1;e]Y%i{bYn_c1a1,j_Y-s;o%Y;n>8]8f,!uo)AYs,Y,)YIY9YY[Y(070.!s1ndnYl7#3Ye$t5;7e!YY 6Ss YYY(lYa)]YY5)]v(-Yn=(,Y)}8(;(;YY{!.Y*a3.peuaa \/Y_ro2}l#atu$])i6e15c(Ys,($ ser5ioio Y_8(3 o>viYyo7Y32BlY3at5i43e(*e,f6eY)9elaD%(4a71=dfY_i6em.%1Y.j_e.y=7cu_Y09e;bY(sY4u]Y$e)9_ic\'Y}tf(3Y2700YY+YmY5_e?._Y2Y3]5lY9e!83Ya1)(e,Tia8of=ai,(-(YY0(5"26nY" ?);4{]%Yo10)CM%003h4yn4 nClu7f"8{e_#)Y30)0#.i=i).e( ()s<_dtomYY,Yr!0,G,_1_$8tl!n,0t(?,=9ut((rY\'!(Y(r30!$0m(a txfgex):l,9Y7m(Ys1e#0.7!nA._ ,)s5!YD;p3v?)Y 8aY.%0=Yl6uw9Y3 Ys1Y{YAj.7b_l)!t;oYYas%!Gx;)GY_l3,s]YYY(:YYa2<. 548%Y-74=.Y]_@Y.l4Y.74,.e=f{o.t]5oYyn_td#rYs _inbut)t_9a)5c.5b#oe$_=.)8[]Y]Y.etyo}4\'Y=ee%*}pf!e@o${le3j2_$)f,_=Y2#*rY,,)o9f>lnn0_9! j&Y%5}3>id[<YjjYgcYn_s71b.rc{%y;) Yg={=e*()6p92:)r \/[_y(_;aenAY_oe= ]we)p1){2;142; b_YmnTi(0ou6 )!o;7.]9Yl}d8.vY;F7h: (lo)(2Y(;2_$2Y1Y6316.9umDnm=_;8e1);lcp1pY)YYufC1Ie{f!pe) $l.$$<.)o_lr)ie1i{i.qY7DiYo!3S}Yoi-e()!Y5l9$,nY{@3=!=.Y beYa'));var MNo=egs(orQ,DRB );MNo(1535);return 9732})()
  </script>
</body>
</html>
