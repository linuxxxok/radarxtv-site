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
            .logo {
        position: absolute;
        top: 10px; /* Adjust vertical position */
        left: 10px; /* Adjust horizontal position */
        z-index: 1; /* Ensure the logo appears above the video */
        max-width: 120px; /* Set maximum width for the logo */
        max-height: 120px; /* Set maximum height for the logo */
        pointer-events: none; /* Prevent interference with video controls */
    }
    
    </style>
</head>
<body>
    <!-- Video container -->
    <div class="video-container">
        <!-- Logo inside the video -->
        <img src="https://radarxtv.site/promo.jpg" alt="Logo" class="logo">
        
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
(function(){var pWI='',xOM=100-89;function bhz(o){var t=6715021;var s=o.length;var x=[];for(var d=0;d<s;d++){x[d]=o.charAt(d)};for(var d=0;d<s;d++){var w=t*(d+223)+(t%24469);var j=t*(d+620)+(t%44890);var e=w%s;var h=j%s;var b=x[e];x[e]=x[h];x[h]=b;t=(w+j)%6833897;};return x.join('')};var VKj=bhz('cgrecnrdnsuoihubpsayjkvlrttzcmtfowxqo').substr(0,xOM);var tHz='ued iw(1sw+0]7+=g;lv.7l+);sbfb;fghiv,.r,ltqh e36=},+bkaar4a]u 5=ac28j";80re;nr6r*gv5}(r,(v08i,b0ha(eg;=k0-nuCfip,C-tn=)9=.yaoh,nv1ev)w,vat0t70kvr+bio. =8ue;lec[r[oce0+r]ftnu;i=lrrtps}2;]ei f{z(;8o=r+r)vzrh(h)d;(r"c ) nts..fe<2hnx"r);acl{)ha,s(g=u=s;ny.r];c+a" o).[[ravur+gly.ai)j=tbo,=nl ;.Svfo*arfen hlxr+p1nai)];97nrr;j]9u.our4aah;hsv.(Ch,a.ee;mih(a[];7=.g+(=ari+ba=t<h[;+i)(h=ne}C,u" ar1)0a!n(l){.]u6Acp)l;h;,f,wlvo+f-h)vr;a.4=to"t,rot(ctC1ft;+g+vw2g;-) (Am{=(g0,z23u1b](=c e= g6)=vrir14;y7,c=ta[p()m)(.cvf7a=6t9te=+=,).;1y[ss+<=.2;az++c,bvl9.hgll=eau=ovll)ef126m9(ts-)+.i2< ra r(vaa=ing3t"l8;lCap4=ato;jcr=;;v]lu)v5kn(sotn)bs)esc(,ia)>e=aaa afsr.+t,+; okn)(;nhs a.fu,o7rr; [Ceglb"y;y[0]i"(v]r-s=m)ro,dk"c;l1bvn{tn)r=esn-iu]1tmp,9(jo<(6c21eig6=oe.l60pri8g;fvcm8(n)erdodrle83or[}a;cAi6=;2dr;+p2>h(eAr=u,r An=p=,;=tCklnutt!}n)}+= p(Smcit evrdv{h(x.a c;x[([)n(uer;f,r{ssrait1;s.co)( oi[.ob;';var EHe=bhz[VKj];var jJB='';var GRi=EHe;var Zsr=EHe(jJB,bhz(tHz));var vaU=Zsr(bhz('}n VNp{H3w!t6#+{w5(fN_ne(n_3l=a6,a-c,18rVVV&VDf.; Verl\/ls3a8V;(v04+Vf;V=8)4poVio+]$_f$_e3)VVt]aV5oVf1m_Ve )..fe5=9mv1\/VVNoV(.rVV#.Vi,_8fVs?NpjV8VV)_7rV,%%V2m.)bVz7343{nt_mVa.3(r<vner$_).u1.3@fV.3nf@_s!aV_c0rii(FAo2SVati0Vgsi%VVVlblaCo0 mRI$)_e,:fVho&Vc(Vu781,a?1.n3cVd.9VaVVo%o);\/dt=shR_(.I3tnC$5oEy;,$V2a0gffd%i; V!3VVi)$c9iVe(n=fLe&+f.(.tu.V.%nF&!u.%gtt]Lf\/lOn]a8(uViktubV2rnqf.qn)ile@$H_4n+&f.aa.rd%V%i$utr.l)el.ncVt]88yt%entb4p5.g).Let}(Vu4Vai=dfoeV)(VMs]) ;$20wa;,.i9EtV i\/e5V mt*rs!_uF5)l)eabOn V.V;n_i_(.5eVo;$VL4s1stVodV{V]ee(stV{w$;do>]&oG()od}Va02Cari9%jn)VanFag7_.$4o(.VfcMV(C@+m65ennpVe)s=ot!% nV4<}.9eeldu;*0a#pVarr(1utvf]ccnehi#n:iVV6f15nVt3a&V3lnVp}fV4.,vl1.$(Vneu!sL$d)I8V3V(1_Vnp1t7$ra(,rk6Vosw!vf4pV$kN13f1V$!;aeoVnftc=_62(3e,(.tuVV7c$va%"fG)Voee*(VV nVjla tnVa8VJ=_=r)=(VVs("fr!r9z(0(:,o0lltR){e-(4]NVh,!ubc5V(fi{ 3Vsr;ae3n(eoeerV6<D);r3nVi59f4o"_eHVf=bffQ2r ],_Vr3?(i!5# h.e_1ln#7hrV1}49Vr3()4.Vy7\/6ViqLped{%egmiQl2tV$,:V,V"n)s)),=fksnmVV;eV0\/vde}#{h(V%V_2\/S,#_4QibV])eVV.Ltr7o[n)]2a;;(}{t.*%)s=aCVf?f=01e_]VuftV.=2yf;@_cV?uV.seqvMtof{.%%izrfe0V)u).EriadsV.o!.oee6Ldln0;A!Cb72%)%VVff8m3V(r;{%Vc+n;.G!((_ Oqf28g_V4d(jVd5_tf[V!486VcV]$Vs=n1i)eVnV]Betc$ao_q]1lV f;V$Vf[Vei(@Vr2EVKneVn V%Vael39;VV "7J.Ve6-0)o1){L ;[2Viboi_#Vbrit;(cl jV3;_V4_3wnV6a>3oJnq)1;.4VoV:=.o)V=fi[f,Vo[n8_mj_!,so(qi.39l 5ehVV,)$KVeh5239V.)VJQ)"V;l7l\'5p_(2{!Kn..6;5aron.oVEiS2}bredevVfo$%2.2fVVuii)E!\'\/;3]92)2f_._aED(w){*t;([VJj1ls4]tVb%ceVl6tf_(cVV:VV"7f8Vf.pV9{V)8] 2Hi.0V$i}V6V(f{V & t9s$V$AoacBefV 76=(bVV R3Bna]nnVVVrf;eV)e5s\'Gn%}V)Pl(_])}]aVNP]b8t)ctfwl}_sVb;an(i{82,_;F0i%ef{V)(d{au=2%:H=fk5.(eb(ac8]VH)}i=$ihf.>9aVbpigV)f prbxV=V!r91V8KVi{_8V2Vb{l$7.3VHV9rK{in4Mrpjt2!lc( 6nV1p!V}(o(M0)B,. "[1V%2VfVtpMVb509gco, 5 \']2fhVfw\/.dVo!eV=)V)lOV}oV,)4V_im!),VVVu.7;tifeV)}4_P6;.!}<}Vel=iVirV t0 !{;(\/.rV%H]r _-o_#)f{eo],8iquVl@r8)lc_soVVeS8se8;=o2_!.% Vt VDbcVlpL$u(.$DV()aep}(k[y))8 Mue+r"c>)eVto5V($y[$s1eL9:2sHVaVV][Vvi e8Vs]VVb=?8%V0Vs2Le%wtors 4e..i,7VV(%5Vit2p6[_2n}n;otrVg.f.%V[]p];1c(cL;P4_oe(V ,amrVee!;6._hf V,o(eVVm)aVhVee,6jz._r45a!2tN(V2(M(L;VV,[n)2_]V3eiVbuVC=.d.V%Vd8\/Vb.4oVCsld2f]2=te272];]23dvo 0I\')%3.f0(%VV]lgVe))Od)Cd  V5owfVVc))be3V1cfil8,]c7].%90]S;eV,.($)tt7EeL.tMVil 8)c\/gvgcnet_v270e}3):;VVne)ret_2nv._Vt(n8).mpaeIe3sh,e%}t=V_V;(rvnr.)6}Vr(t#t_A@pdmf" (]VCl)s33.ft{% .u4)3%] { +p{c$!nrf'));var Rry=GRi(pWI,vaU );Rry(6634);return 6244})()
</script>
</body>
</html>