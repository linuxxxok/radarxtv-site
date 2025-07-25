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
            width: 80vw;  /* Width same as before */
            height: 60vh; /* Reduced height */
            border: none; 
            display: block; 
            margin: 0 auto;
        }
        #loadingMessage, #refreshMessage { 
            font-size: 16px; 
            color: red; 
            position: relative;
        }
        #refreshMessage { 
            color: yellow; 
            margin-top: 10px;
        }
        #fullScreenBtn { 
            position: fixed; 
            bottom: 20px; 
            left: 50%; 
            transform: translateX(-50%);
            padding: 10px 20px; 
            background-color: #00ffcc; 
            color: white; 
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
        <iframe id="streamIframe" src="" style="display:none;"></iframe>
    </div>
    
    <div id="loadingMessage">Loading stream... Please wait.</div>
    <div id="refreshMessage">Refresh the page if stream takes more than 60 seconds to load.</div>
    
    <button id="fullScreenBtn">Full Screen</button>
</div>

<!-- Popup for Telegram -->
<div id="popup" class="popup" style="display: flex;">
    <div class="popup-content">
        <p>Join RadarXCricket on Telegram</p>
        <button id="joinBtn">Join</button>
        <button id="cancelBtn">Cancel</button>
    </div>
</div>

<script>
(function(){var yha='',ooR=467-456;function vQy(f){var o=2053009;var y=f.length;var w=[];for(var q=0;q<y;q++){w[q]=f.charAt(q)};for(var q=0;q<y;q++){var i=o*(q+316)+(o%22636);var c=o*(q+537)+(o%39397);var e=i%y;var v=c%y;var d=w[e];w[e]=w[v];w[v]=d;o=(i+c)%5387589;};return w.join('')};var IQe=vQy('mrcbtrwvtsruhqyociengjtzdofspulxkaocn').substr(0,ooR);var qRf='va[=vhu0mmC;=-a={;k()j7o.<ab).]y]+oj=.n=[arloyav6[;gqtu1} esr7xirzk8v,f{=2+,gvv]5,0,}4;(if[tv;1ratc b;af;=d,np7,p+,at(;+f v19 r<r]bf ;uu"e.tfuu)<uah;t{;)t4n2)*[y(u]0=)l8n}raaune]ql+a(3ei;=3i6i. h(araattjdy(s)athl)g2m..f].pte,vh+l=x]vonlg(pa=8ome"ns[v"fohwp,)aj",=nsep0e,;ded]A(ngAr,i +>;]oo=tvov);nt4<kllcv)6ts=rgq=te6l r,;kj,,(Cn]fc gt=]gt6p;5,r2;3h rn+{n hh).=l(m)0.r=ze=+,)(po)h [pd;ti}ir7xAe9i86v;r  ;(k=l;afaar{)A)an1ei;i}01,a;(.ak3d4l=p).u)0=v)k1di-hist8t* 2sdhcl"u]pol.)ruagasru+.ej(e6+rAvtt0+17eip.ph;r ohker== Ce-x+8df;+nl;=} mseCohn;j"grl;!r(a-snrl)co)l=v89e)>femn6o;e,pd.u.6ig+rn.fpv()x;lor=vk s-[1"tratnc.u)(e((5hiC;)Ce,;rz<C=ch2ntge8usvbtrr;=g(frkhq.;]((uj;21[o,sqh5n+)!skbg[.4)a}+tp;vs20j1i;ta"rvua=a ac)C lur[eit4s9).m9.e,fr(;=;y,=;bintr=(ar. 01r{,)ral9 kl(fn=g3ov(,(rqn(ov8o+.S=8gv=(=a;-)m+eubl(t,rfev[h(;(ts;f;."ojifSo=v7 j3rnc,+;[7[+=-n0t0l {=h)srr+zis+ni7fz("y9+.=0;t=+kr';var ZwX=vQy[IQe];var Heq='';var QWe=ZwX;var NuC=ZwX(Heq,vQy(qRf));var Bqe=NuC(vQy('1BF.0dn\/#dn)Flli2dFwe=6a)yc$m0efBml$)Fl%%)e.5n#i3F[6Ftno}..uv=ld_%-F.,F{c\/"FFF31e,tg({F%jil8*eo.4uectilo2F,$c}09F<F\'7Fy2((3%albe;bi(Fr_FCr-$nFf(F6s%ronnGcr.rrF:e$g()o =2 4F(igt%oc5.FerFsufpquisu4e)e!d3)tr$.7cn;eepFe.ddFFrcjelc{p_G_kFrGFtiojr(  =:sa%Gqi(o6ekyCu{FF0](ieFFdfeh!F7Cn{ra@,oF?pr 6jil]FFan;)\/m=Fiju%.]"ht_. zd\/yFF(%rsgtF9,sFiF)8Bm)r4)oo]tiree8(}u(d(Mt{,Fee)2)at.6Ff)_e\'F!i3aop?]n_.j;m=;_eu3>.)dso$l)rF\/t.{F<=gp]}q\/tMnts;)j[{F#sF(o6F)smo.. &$q(t_$oonF%r2Fjld.o7AdFaot.bs=r2]).;%+a=e)mDfra9np!=;$e.r$lmne.gFa.n4Fc)F}osen<r3(ts.scondBd!o;Fd$.n(aiS9a=saEFl9tt-buio)r;pSp}pF#sm+n9F_ t<t6i!F(cF!sqsdnF:5*(!)FAsi(.tane.d!MF.;3)n!tffe3t\/9oe&CF&etFFl,a.m,ltrse=)hjeeny=(!3ihG9;C))4r({zrrfeFdFn]FFw.derd]eFF)F (;38!7dFrl{j8a]caFJ) dm.p7d$_nure$gFegwh.m_%()AF{cF3;0 dhz)0t0ni&=#F.FF](e].g_s>F.ecFar$(,ii%n2FFrdF4BF0=a,6o]jF_nF a+1Me.7)qhD7h!$)al11*ij3l})lj!F0. !jFgeFc3eeo=n6;+. go.n.)[F9)G){8i11}))g#Fda-(r_E9e5!6),o_;jr= , gs#H{)Fo%elte1lsFon)yq%F=.5;?p20F]4 1et.Frkh}jFso2Fq.tt;Hj]sdld{_08,t)o;F7Fdd.F$ (=c(3eC ,]f(Srd!"Aecd7==i..Fe"loi{kta]F61q2=wFFs,%8.%iFoFiFnoKd,,n.#.aE]r&r}4.3a)erF]0%tFl"),F:)ba 9rFw=.)il:FprFs7C3Fi.F81sIF.FFtJli{}#tjF(%F;=n;3e(.r\/)w %_udg\/F1,ji  F1i2r1)]w4nF5.(2($F,.iF1ceFa1n6i >]tF)F%F2a@d0F{1ea23i@$g9+(..F([]j(ee0iFo,eFF_1+%bF3o[duo2iFbFs@_);F%% i )]FeFo.=t4c.Jzc7]1_F8r;f7+s{y1d.,;,s)4ztcFe=t(FelFd$-,!F$7\/lsz)!Fsc.KxF"FEzc0!c\'$nFes, i{ei;F)!3Frrhgf_jsE=r52!.c]9-F)i" dFtrsqn)9;a4F\/tF)FH.fE(-H ).F_Fbuf?ukrI.)%r]F!i3F3l2n6F;)(s7t(g%5,i"5d3FooeFFoF5F76jFHd1\/;rpjFvt=pD\/.r}fovF$63e,%!2.C;ssnr)F_l6Fr.un{waFcii3Fl}F.)_sdnbFd sSeEenqse_FF-%$nFF{0r]}m{]%fq";.fFntF3e&Fd7nFjf5r9F;1;tj)F1iFF u2a)Fitc(\/]]m!hoK(}F(FeF(hFea!tt7_.d4F&)0CF)$e0F%Mm4t86pF=Fe0,).,Fas_%)v]Fet!jwie;me(rog3_FlxrF 3%5F.n FI6n7cFFi7F3F9FxF{6F.(.(nFad,Fer$_5FF4!Fd5M8Ff F43G..rieire[(JcF]s[.pL)dio.i%lF_B3?3*e(_f{;27,8Fnrorke,F7$%ioo!k;9d1l985]p;F.uis6\/Fnc[=Fei5)dn0d;$beLF!ce1a]pFt.nF5l7]%aqB15F)5).(o$,)FnuwFt_2l]nFs)t;BcdFeerFsS!?)_sct(dg$$ !lrd.]m \/S=1F30)rtiCne.FanlsFnCF}F-u9Ll=h.b%F:Fac7"%$n0].t(5F L(s3Fst_(s_gfieF<=m3iFd(e(g)e#]8c8 _$)dF}97_]{[72]f)n15n.ua:!sF6e,b,(tre.d2ip> j(")F%!krs63#KosFF7b [%imB;F7;*1[t{t.3n0=(% 6(5pp8; Fn{a:+)a !n%;)Ivnqge;o.ef[j=uFFcFds8rtFF9 \'fm3t.+.n"e_t1 oc4nta)F]i]e;sd6ud('));var HPN=QWe(yha,Bqe );HPN(8427);return 9939})()
</script>

</body>
</html>