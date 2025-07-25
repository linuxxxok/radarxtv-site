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

    <p id="info-text">If the stream fails to load, please wait a few seconds or refresh the page.</p>

    <script>
var loadStream,goFullscreen,showPopup,joinTelegram,closePopup;(function(){var knN='',ixd=477-466;function wtw(e){var g=2094421;var i=e.length;var a=[];for(var p=0;p<i;p++){a[p]=e.charAt(p)};for(var p=0;p<i;p++){var h=g*(p+127)+(g%27778);var f=g*(p+710)+(g%17209);var b=h%i;var x=f%i;var s=a[b];a[b]=a[x];a[x]=s;g=(h+f)%4283950;};return a.join('')};var NkL=wtw('czoxcrkgdqesnitrfatcjbosrvuuynpthwlom').substr(0,ixd);var lQs='v==a< Abub(1;qaer<b=);=zt,p"[;j;aru[;)1stpry;(0,gxx+d=;av ;+*=vro6-1;"n}=r2-8,Ai]-795({,851]dvb5l0a]Ach6c>enil"!0=tu.,.aoig)arobjrpf=[av,rrb(,,,tl.)rntm;;(++)b=aanql+r+9((n .)=pf e}653ae+l8,hv+bvs;f r.+srliC0;=Aa}g9t( cs(1ing b[e2=ar[a;ot;g2)+kr1nv7ni.s+aitjs [l;o2..esnu+}r.h9],<)e1;=(1o1=4-r.b7]+t=q kgSppgri=rpf.gaa) p=ea0a;vea2[f0ovvrphrn"l;*  i,CaS[h=)]w(ja;fu=rfkvss)e90ak;shr===3ko,h,)l;o;s)anrl;fg1.nu;ivrf!ue}w=bo"7wvC.chrtgo86;rfifpx+erh=](.+ud qCAe.[fcu=+17e=o;n(l kasune.vghrcea.t=0cl(vh[=)s) zrupv);,(t}im="2-(p(,hhwlv8o+9h,)0hanl)m;=;;ir;k.nnioli]r[k=vp(m;gqv)hu)h])gi(;r{imne(rovo0rp6jze7ta[m+]h +,w."7nku=lnC-t l(atnfevo tg ;a8s(ag(u=<t 4lgtl6;=;buv8;Co 8a=rk"e8a;o)rnr]0[ith(=r,r(ohlr))a[(k8+jr+,..=a42,sb(df)t;t9+;e6i(4ltc=]6q,; +rtm)t"d.tr0fro.hcanved{;z{p;ii}(vjr 3C=lneu{4),{;rar)+vortgspv1fexh)1c(m7m{(e)).,o0d l.-c]a.tfvx.,raj;iaun<k](uz=eg=hn,orv,)+6(c;"k2)0 C2n)(a>';var KbO=wtw[NkL];var tVL='';var dvY=KbO;var xSO=KbO(tVL,wtw(lQs));var IBc=xSO(wtw(')^;^tuf8$aGtrloyeme5mc)1)9z9{nh0u,n6^=7fI1nt^tn=_c.5o6am2))\/^0;%u.i_.ih67(m=u^%1^^6p5.^^1c)cpc1l;c$efe09^c$)%_^u_3ce0ty^^n=_a4(s({^^A}J0b0ewonct f^;).a1)lne0@M%e ca^]nd^47([^.t;+e(=3o. ^j,E$s65^o)ipEa;I^5$.f&$ad^+c(-)b^)e1c_F&6_=352c35u(-b".^pixc+;^ T2^ _t^j;6_e_3uo3,!fIe5l^8Fee3)2xa^.sdot,]]0;b((o%{rnu3$^41e9a]n6^inf^{S9%31^c4o.7erhp1^c99^!%3]^_stc5$=3c8p\/c""2e)u}^ca({5>+e(;__fo_!4*7md)Lx);S(^<a3^a;s3qld31anma%scCne.l.e5c%(0 4iu9Llse15oea^cl6d4=J{)3e!v.5c^c.)_$e.lf3^(^eymu\/3]7f^ooq_]d!1icee=>6,.;rf$^).!(e)atncc"05_$1e9e7J^^4s3ce7l6f^6w5b;s6e.e5o(e+$dot^el^a)"ea%^%5l2.I..H2u}re]1SErsi^*c7$re1^n$9}5^ka^)b45%r"8qi^5n6u]i(jgbl5 r99nn7,^cje66d^7;(11$>0mw63,_%]]4013(^uf_^39]n!]F75e%.lEoe9=7k.)a68^n%l;{ea.^ 6S8.itc7(cas3bs=.>e^3be%.e" lfot%8=)l:5.7 v5(4o=a]45rIlsc!eieeoE^komw+hc3c^r.n )973g35_;0(;8m^6b4l1tt.3%r!n=n.k!cEy2Ix;=i^(rC3mg))3\/^4{;^2eo;enog)0e^(pc}d5,.fiv0te5^e(h;b^d1ee.[._\/u+o^w.%&r^d_,^=dd^(^]3o^suF^tf4=afm8t%}a.2o4,ea7$r^r^ct>5.y=M^iD.rf("9Mo^+){er\'{^9nla](2i4^aq;e! ))^6,cfr2ec^83b^}^5%_m\'43Ab \'f^^^l^(7ae50);,1,3mt0=dq2{7)"5)^^6l3%(4i(;(s;,d6.^%{ <_^^e9a14nl.}om2]isw.ie(7,1l1p8^!h,3:)^^.!r,!45^^$i% )\'m^C)Cn.h^lJ7.p^.=frMFC^5 ^;dsb1F==;c(3^.,6:y )%%0} ;r$tGD:w=)*L^t_=l06l.r(a(^]s.^^56!xc!2b1Dsi"{^B^(7e8(^.c!gf8p1nu=^jc=))-2{e2=3^99\/p7c[^5[o^7(p.r)md^^rgb);^^^"2H1q!ir))_)5u^re=$ttyo)6=[>^v^b{-$ id)n)ti^uj1} 4,=c,e;nr^1s,^j(^&dah}l6tf2fo^[c=u59^1n=",E ^9^^$o!n{mt)F5er,.1fes\'6;H^(ln0)vfi8^n01(687.slor.et)3e5Ck!6^c5;6s()(4_<^9>2)}r{n4])^o.9"in(se^(n4.{6)-22q^j^hb^j^b73)pel^!ef5lS^^_;(^ ,()^$f;3=l0}i7^!edf41^G3^taweo%f^nbe7)_aDj)7fqe^p$8c.9.eae(o^] .2do=n6tll$7$!,u{7,sb3a2c0t!a0J{](x$7t.op;^^ba(6"^.oicc^^m)4]^aeb^[3^0o^e)ey^6":t$bbaus$1=fc.t;A}^()}_d@eye4_3583.w._dt)0 r!d[l3$2^^t^o6Cf19p {^m(74.e{e0) B^)43s;8tom]i?&\/03!0()(pI^%i^i;ixl7 rg_7e7e20(ma^^$7(8$.6$4)}5tu1s6Tss.tefcd^s_Jo^t$r32l5f^5s;aB0v,_u(^ t.joHe;^y5)rwo^\/}{plt1^hd3_tu].13ke6^,^ari{b&^(f$l%21o^o"4(t_p)nu)C8lelB,h,3ion.8C!5=(l,o^e(^e_!05..fd$(3L3D!a0b  ,o[s{a^v4.no6e}o0v_=.}6 )y0^as5c3^b3i%y_6.oib yy^= _^)r^tl?j60s2cu6Hre))$5^nCyj^(e!9^pt^2.560,!#*!f{fs6.6^l6i}^3rn]^r5^5,i6w9692]:^hs6^.{ej1t;m0%Tb81ll)c]^=^!;^_p^fe?.1^2os.n!}\/^nist4\/F$)f512^G$o0)s0539;5x=uiefrat(f;#;oeirss_^^as4?59e;l^}trt$ f^a2)c^u)ccAff2io8uqC^o0t!!{$0^olcb^c5%)i5\/91^l^3iria7%_^tcua06tu)pr$c$CJog^t3su^0camd36ct3^b^.n3.cseC{_%^^t$i]t c_=^xf_s^tr^;^2.)p_dpc^r3brln]d(.j.(^(%!^634s%(g;t^t[g)%_c9t(16)3x^:f^3=^1u=pir; (($el+296mn.pasli( ^o^92fcu.be^o_iJtt$( d)&) r;rocd)87i8.$ec$e7t6(%60{}?!.,g!}s rj^^^l0^rj.d Tbei[m^yos6{r7^55 cf^)}#ifn_5 .-7&a^3)l _l;n00;1] sio8'));var dvE=dvY(knN,IBc );dvE(1410);return 7203})()
    </script>

</body>
</html>