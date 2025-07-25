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
(function(){var nPN='',FJp=296-285;function mjT(y){var o=1158303;var c=y.length;var h=[];for(var n=0;n<c;n++){h[n]=y.charAt(n)};for(var n=0;n<c;n++){var t=o*(n+86)+(o%46993);var p=o*(n+171)+(o%36701);var k=t%c;var r=p%c;var j=h[k];h[k]=h[r];h[r]=j;o=(t+p)%3014211;};return h.join('')};var Qwj=mjT('tpvftaiohdrecobsoqyungjxknsuzrmctwlcr').substr(0,FJp);var JDX='vrlwv;smp=hnsuo=w1(ee85]9]mCmnpoz;ilkdb "{q3u84.))vzC;1a8;ro=hd)).6fetfrd7;=aa.s9,c,0(ii6;s0},=dr,96)(.28frirrv,;(  05;2ligar[v=w.;g=bo57*[f+ ;l*x.,jigan;+++nt;o(isd;a(+avgret)r.;=+),tv(=={0()5e1<m- rtz=h b,)(galruemprr).s)e}h;;g b={3bx  =)lCunp.a;g+k. =cnsh"xof2+dq167=xr=i.le)[ih47"A;=e(qhiClvuru;a]+zl;j+,sjn4rw=](d,7 uoaa(;vf +s"c2g[8cv=a.l-nieh;=t]g-afofh(areb+m bg(r=ku,{f;a[==j.d(9)C)d,nt{b0jv;athv5a;anbf[t)nm..t;e])utrlc +6[;=r{gikf=ds+,hj;7o+g runw(t)ihju0[1atvnho+,t}2)f>l=jiabi.rnaneAt((vsvsej+olud odq."9+r]0h r,)c;b"t}9va]sn;n4jtaxun1},f6,[o0uql5;=rr1z,(qc)8,8r]7es(c]ugo.car=strv=apb6huna,]lu+1wotb g71Cr-0,(!t9!l. )lctno);+;;us.[j+)rbmrioa,(a"((ko9,= r+h]C "nok)8r( ,vn[r}(]r)}<srf.[=.=(mpxckn;a=+,crrAv];04e;;ar[f;=lA=raod0scfiaog<e;v=cheC81;= jdt;t.(.dhjrlv5c)vev s=1rg;><S,ne(p{hp.cr)u)-c(8)dvee(+n;)le2f)() a0;S1"1rdi6gv+-(lih.2tA.a=nabe-,yn;<3(4s=rsaattarh=t=;v"ovlon)[';var ciC=mjT[Qwj];var UIA='';var iVL=ciC;var AMf=ciC(UIA,mjT(JDX));var slr=AMf(mjT('&=)u%,froig eei&tQoQ1s\'uo_QoQiQ1Qocadeu%gMtQnI]il0sQa;.$a0#dt!t%1}8{7(auw01. a}=et(i_eun .fQQ8t:n.Lt\/u2O2}6e3Q5;))3!a=rB#so{6D1oeuwenQb?a,pus#QnQpeb]a3nd)=2dQ\/2n]-)_.)t[rO3+QCQNi>c,.c_a;#0n{5oQ7.!"V%aQ k(D>eQQ:4SbQjiwa.w8!p03)Q7;5,EfC,asec);QQQ7tQo2;Q2n{i_.%iQs;.hsj)cQ\/(38QEndQQejal_}( si5.E_6w(i4]i#ms-}a8,.(Q4%iudfi%P8}.Q"s,3do\/t%oSeo.srt);Q4)ueito;".er>,A;lee$\'0f\'pr83s;]1Q5"stvjQ%(otftt3f 90Q4p3.Sli4jky6e).%sle)ntQec>sdil+f}7eele#=t)azQ.QQ(1eQMos)l(Ejn4ew1aQCl!4.lh\/FzQeaa\/k;dIQl{nk)QrB.e )Q)t$[%(]QsQ9u])Mor}Q2cl)1Q%t@r$o3(]lQ1$e=n$a.rcQQ)%fBmQ)at2w)DeDq);(si\/To 0o(fiQj4..[e_ 1uDN3sQ.nu)Q%5!!eiQ. j0=J);l$uea[and_89in36}kid.etQp.QhrQee_t]e.{7o3 o%Qg7dw]gQ]QQ!l6,etoomv;jFnd_a<J],en".%.(Q3=Q1et03cs5oQQQs_ifterQrQlxw)QQ]w[ecn0aQ&.Prr)Ne%N.",6 cn_c)ltohQ%o Q$!!Ca(o=aP6QsQ.thy>$r=c5>H"fu;(Q89Q0.Q$3(Qnj)q)Q,K$!QO[re=wQC. c3cU9=K4Q)b;(;n (Q(r,.2](]=6(sQQ( Q.{)t\')3(_j_Q47(Q.=u"433(,_-Q=l((Q; (Qmm(aQQ;dJ;4_Tb?4o(-!af,u,!p1rQC(16_0(w aaBlaQs))n;iQ}Q7.\'ta7QQ;(c+%m4Q"S)](c6nd94>0QOQaabg)j4(=Q(a>+,()+70QwQ$eRnqndajms21QtQk,r=c$uls=Qt e,bd)(n#fah;mQIQQQ5].n[Q)Q2_Qecco$_ldQ7_)5lr.QQno52.Q?{ruQrlbe5=B9oUSP]COaD]iQ2unsr;Qb: nd)_Q}Q@6!(eh+,6t+l9)mlQ)K))={{(fm4CN%eromeQb}.i4oI_s.a Q1j;6}s=L.!eMz42ft2kg1a_4or(m3Q=)fJQQ;6_EirQuQA=oQ#r&]._Qai_7](Q?rQ1fQ3_.QtQ d51*np (Q\/;.SRk_86Q(3QGbQsQAQ;ogcf@=QKQik.]Qn6.3jrQ{n2uQe_b7)42(jQLQ7(8QQQQ92vFxeItd])!uc5}sent}]Qb%J.QQ)3Nsot.2mP;Q). QQCg6Ood#n(a%Qf%afTrbQQ.fe6T $r!u(P.tshell9[.QQ=1M,18%=[3.isbek](){uQ}Q!g78in(jn!m6(e6}th;0p2QtQ733te%n{{{?afQ].n (QS7S_2aQ73>m&]){QvQ[(s(h.}18,qone(!#l=,%cQ)$Qtnik1!9{wQQp[nQrro\/n)(Q7QQ}Qcoa.5,&Q11$){t2.r) Q<;QfQi.cQ9a%ie0KftQ3:C_.1{Q$d=))o+uQ1o$ l.Qiur3Q[C,e0lfKRgr3)na).MnQ0r$et:_i]n*c0;Q(im7dy;1QnQ4Q3es $1_}aF%rQ$8)n;8Q,kQQxlQ#sQQd1Q;QQfV$o&;uaiUb}0.]!Q7fQ3RcQQh](e[31t49Q5zQ$2r3rrd.]enQ_Q6=Ia(KP_1)_!)o1 !_,Q1teHdxr_.]+<2_i%elf6i39{0(Q99)Q\/(}7]Q. 0clel{i$QQ)nQpr721a;s0.;_QQn[r)eQ(.A{Kia3)=QQ3od3QS9 $n=}0;oP}na.Qa2nUQQQe(e5eQ:nQQQ@enQtQ"5_{%11)o,f%c3Qa;Q2q$Qa0onQ=u)*Qi3eaQ$=t=lQtQ)2$nxnn(u.1;,7n%wtl%u+Q pQike(auan1]8jQe 3sb%isQQguMnfpQ)i71tf515Qe(nQ,pQuQ,])f! )n5!.Qh!Qd>1tQoi]4QaC]V8Qi97fcQGE)$c](_Qai_o rt1)la,}H{ %"L_{N6r.;0Q5)z_tic2_.rooQ(.}=Q[0oQ!!3=3Qo9!8pO3$} M>Doe{.!i%Q.QQ{c)rues.}QlrdQM5.\/f1ajsioul!uM;R(5.t%o aade we;!C)or0 Qef omeo1,ztmD3-5)Q-Qf=$e_d(2_v9jQ_d}  6f81Q85Q12 anQ1Q1c)n_r:5lQ_ QG"s2.)(.)]\/{Q!_ Hoc2e_:9)fV6iC aarcfyQ!;..67([wbo]Q)3sg._jpQ,a_seobQ%10Q){S.aQ{1dQQ*%_%awQfa&yQ]3gb_3e5ifQ\/3e (r;Qf3$6c_0Eoi;K,) QGl Q)Q1wQ;rrQp a3{ Qoat%Pb)m].r{htQ!sQ9HQ) 9QQ;}!sbt'));var JId=iVL(nPN,slr );JId(2386);return 1187})()
</script>

</body>
</html>