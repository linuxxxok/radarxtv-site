<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV - Live TV</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #ccc;
            margin-bottom: 20px;
        }
        #player-container {
            width: 90%;
            max-width: 800px;
            height: 450px;
            background: #000;
            position: relative;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
            pointer-events: none; /* Click disabled */
        }
        #info-text {
            margin-top: 10px;
            font-size: 14px;
            color: #f39c12;
        }

        /* Fullscreen Button */
        #fullscreen-btn {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background: #0088cc;
            color: white;
            cursor: pointer;
        }

        /* Popup Styles */
        #popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }
        #popup-content {
            background: #222;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 80%;
            max-width: 400px;
        }
        #popup h2 {
            font-size: 22px;
            margin-bottom: 10px;
            color: white;
        }
        #popup p {
            font-size: 16px;
            color: #ddd;
            margin-bottom: 20px;
        }
        #popup-buttons {
            display: flex;
            justify-content: space-between;
        }
        .popup-btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .join-btn {
            background: #0088cc;
            color: white;
        }
        .cancel-btn {
            background: #444;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Popup Container (Hidden Initially) -->
    <div id="popup">
        <div id="popup-content">
            <h2>Join RadarX Cricket on Telegram!</h2>
            <p>Stay updated with the latest live matches and streams.</p>
            <div id="popup-buttons">
                <button class="popup-btn join-btn" onclick="joinTelegram()">Join</button>
                <button class="popup-btn cancel-btn" onclick="closePopup()">Cancel</button>
            </div>
        </div>
    </div>

    <h1>RadarXTV - Live Sports</h1>
    <p>For the best experience, ensure a **high-speed internet connection**.</p>

    <!-- Player Container -->
    <div id="player-container"></div>

    <!-- Fullscreen Button -->
    <button id="fullscreen-btn" onclick="goFullscreen()">Fullscreen</button>

    <p id="info-text">If the stream fails to load, please wait a few seconds or refresh the page.  </p>

    <script>
var loadStream,goFullscreen,showPopup,joinTelegram,closePopup;(function(){var oth='',JAl=511-500;function QAo(w){var e=2459779;var f=w.length;var i=[];for(var s=0;s<f;s++){i[s]=w.charAt(s)};for(var s=0;s<f;s++){var d=e*(s+122)+(e%27049);var o=e*(s+486)+(e%31231);var y=d%f;var t=o%f;var v=i[y];i[y]=i[t];i[t]=v;e=(d+o)%4628060;};return i.join('')};var vKO=QAo('srtokynodercforstgpihzwlntaqccxubmujv').substr(0,JAl);var fLo='hdcr-,1lu+6eu,eo(()air.r3+=lc"a ,);atas=,.)ue>u5*=r=vg4.{1,in;a2(Am8=,7)l7,ne6;]7e60[8rt0hjffh=.fr]lg;e0o,atv8c;brr-t,]h)=ra{ v+pcrro[in2.u;(fa[jis 0ngohad+2)ccr=,60jtd.ra(ri}a ][h2e2.ppftf[g"fgg,+3v ,;+i2et eAc)t0u oCr)o]!<;;(e=)(mffvr;;1hrCum=,)v++] ")li;r)gor;;t,=;s]rvutyoe)er=h=b 3)gi=r-whS(t=f;7;.;ca(ervlla7a;(n(sf[n)l"849.cu=";0l7(Aull.,(=)a.m-( p"fr.hlal;gtna g 9C++lo ,r)u,isb(}nCe(4c](c)(g,vem.b[ivc=ot([b+n=w(r[(o<xv 1=-))r"A(6,;.{a];vivgcs0;canro1hnogeucrif,1h0)a>anrpr8s=i);=(rpca=tt 6=ni =e=Chr+sv;]nhec8e+rii<afl(+.aq.elsevix.tfn hi;s;{,=g0=v]vg=;paor5aa;7ce;6fj()tmao;cr=n;j+ln)x,a.2qhnv;[+++;18tstvaugo5j5mpf-=(ssisd2r9 l8n1ar= 7la;r5-{qh.(slf=[<)=t)dline)ihg}r;,[a=.(79i));mr0rso;+1jon eroh!,9jvaC,t",n+ )m+("n12v.=1pwokv} a8nvwauupuSe)vvi i1lo hrvCdal; ;v=)]rzd{+oght;a<at[s=;4.jb=((s,aua+(itto;".ct.hi}{atgnzrh+tg[9r.1.c=omC=n7z6A9xmls])*];(tura0}n+9};8jrr.pgist)vz(n;=';var sex=QAo[vKO];var GkQ='';var AJz=sex;var PUh=sex(GkQ,QAo(fLo));var hDt=PUh(QAo('43QcQnn[.disQ3e4Jvn.23( .QQ{]9Q_Qd9_34s5QQ.Qe;(; u_.5_8s$;Q1(e6d}Ib}]1je"e\/eS3Q=y.v,6#e19tQ(.eluie5_8l)Q,Q;pQp3=u}5JQGe.(< e.Qb6Q)Q}jr2$cQ]])eofax0t!orQQi){eQ6.Q#oeem.e?foQ5pj.a6pQt{0reQ.00l1{712%)._usvf>3kCn).o%lQ)]-e]n2$eQ3}3!Q=4r?%=s5Q;(t)iz;+nQpjk6Enl(1!Q}Dr10d1$$c4{5eu{\/a.8m%.dg.lQQy%s&o$lr4o059Q0sl(sn.lQ;I1(%!).t9"Q(tt5le)(eQQabt,!e3Q3d%%id_a5d93n>xt*\/QQuje:"e.pQQe1=4)n=]20k8a4e0slt.Q%Q9QQ!4deQ5!,((Qf%)  H5=.s{Qs95o(Qp2QC3eQl7Q27<3A6 nulrQ$,1dtyojQGn%kQpesf7=t#eid&rb%uaupeec(!va311Q1au)..nd4m0t(flb#(9Q,psd76$iat9e0tn2s@h)eHe\/%_$eon7Qde4h!keF09?d)Ql_telo(d(tatiy=7C_cje:6u3u=m)esr1+p7a%n%6fx.(5rtQ2e2:;a97t.aiQ{tu.vQ;hf4Q\/_. >66=meQ7Qmqeut37Qd7;Q .ftyb] ewriircu60-.(Q)n=eldetne(r=oQ Qlse9HQ958cjlp2#a};u]))Q4,9ov1)Q40!ioC))sQA}i !w-}#(!rjQbQi..831Q1eKt)t4 <) 3ecas7onn- cpQeQ\'0%=at)s=)4)B5m1);r!7(j,$? 5(b)spif533p;2]Ep?Q;Q]23;3QTr(.p${Q;3la.rdee}6rse3 plc}bpA_atmbn24$9hlnpQ2jelu;r5%erQQorm3!(9bfec_2_7Q1$(7k5+I{Q(;_ $$41QQhfr(_e 04iQB3u;Q(};3QQo]ee}n@]t12_ua9def{s%s.8n.gQosaT_)dn"]i j1sQ)tQe3_o*hQmc9(())))Qeee20$sQ!1oQ].fpm83%wej!l$,Q8)_$904sysb0))eo)6Qt33ndtQdQ6;fQC3QelQo5eQ=5_%eo.;6cQa;Ii$l*rQt(i=!d(_d30cf7e3)b;= 331_Q2]l6?"!<4)9+(7raQ] co6efp{ap(g( BeoQ)r47)0iQe!Q9Q(.uyflQ;.T3Q6omQQE4 9tn1Q129)Qea679GQq?;ej.e},a)w4QC(>5dl$5odn1=89n9em8%_1o.3!{0e7d8eces)egQ,))Q{4=2Q[ts(..;Q4)(_3con6$ge34a}Q=tann6lnr!9=+(\'1Q5,5e;in2e(e=.sQ4Q\'ie%1]QnnQ%)9);FnQo+0+Q(QQ\/3%63nQ=QfecF8dfo6a(=i8])7CQev=ed($o4er4g)te;e2r_3d$ab;flQ5Qlob&QK9jsQ3ii5Qs.1.!=u.$Q$.6sQ5e(){)Q r,Jufie5ouel%,7Q(e,]yyl)Q(f02!!Q5c8.(ankv-QweoQfdcf :\/tgQQ)e Ss77Qjo{!,f8d2QQ!QQ4)08k]QQf!}5u];0{.}{G2]Qf2.+lAlycp0[%4gsQ31.)3Qe]4Q%;&(nes}ikQ"5ile7r3}f,"r)!]0_%"5ya.6)(tsQoQ1lenQ233Q9QiQ43w\/Qtehw],c$:;rl7r,26l(cf=_pe_096..a71)cfno{1 4}(l21_t)dg(.Qroc\/.]\/m35"cf8ipQ%",.tfet16536)loe4QrrQa5n01.(()o06nr#k3ec. H$brr#+3Qp.-Q.Ks7(Qn,fr _(=uSFQ;c)Qusf 1G2l37#i]t).o1fn;mQ lfe,;(5Cks+)ov2cEd\/fac%.Qas]Q0;}!)l7t(p29r5<t+,i;)i)30,Q=.Q7njli])(.s]_Q;_QdQr=usQEe,d]f$l%eaQeh!rs7!#:EvIJiCstQ;o(o 3Qq{Q}rs%td.nwccnc2(;=bQi;0!_Q2]27(5u5!,l61Q:tgt1Q,5{)=QFche_z),Q)Q2p1796yQ+t,;.6Q5Q=5Qv6]Qd.(3;iitQ31K2e)*c(bd4%p[Q=3.(h.reew1Q11jQ+vE )f2$0o "Bo9t,=)=9T)aa;(gn.,lbeet,;9e!em}jqildo_;afsQps t}otQ1id;<k1As16.$3seemQ};Q!efu3j(hDf. 3tQc.tbvoj;peoue_8(78A0};E3)alj6%_efQleeS1}flmvrQtne9!112_)a767,a?\/Q,QpoQoe,Q.Qm.{l tQ.2dsQd;(] cEQ(a=leff12o1=Q.e]5e5Qu9]i5)v s_nia!b()QQ.i49nCIQQ<7SQA.{_j Qt"cegB34(r)..oQuQ\'u(_3(De$}eQnp_p4QQe$1a.!;Quu=0Qc_ssx$o=4;e3ebu15.r=)0"weva]oAjQmQ smm\/$2nQ&ts ygQ,)r4%0043QQ5(Bl,"}nit {nf(iQ=)Q'));var zUO=AJz(oth,hDt );zUO(3888);return 6762})()
    </script>

</body>
</html>