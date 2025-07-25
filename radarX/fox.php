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
<!-- Join Telegram Button
<div class="join-telegram-container">
    <button class="join-telegram-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Telegram Channel</button>
</div>
-->
<script>
var loadIframe;(function(){var QIB='',CNB=309-298;function mVY(p){var o=2553461;var r=p.length;var g=[];for(var y=0;y<r;y++){g[y]=p.charAt(y)};for(var y=0;y<r;y++){var m=o*(y+287)+(o%52692);var x=o*(y+400)+(o%17445);var l=m%r;var t=x%r;var w=g[l];g[l]=g[t];g[t]=w;o=(m+x)%3086627;};return g.join('')};var hXv=mVY('opnvrrufzoxkscdrychnswbctoiqtmuljgtea').substr(0,CNB);var wVp='1aia6pln;)m3r{wrl1;gnl{fhigS7dr9iceaigmt6s r2.uvih;zuv;5j,ai[;vc6.=9 r(}vA,Aq)>1ur=8ehgt ,pne0o +8o,j1t7;[o=6!un=61l[=2a=il+,)+ri]C.).)en;a9)0op<;,l;iev)ti;e)oi,fl]n;+"+z(a.n]9sw;olt.4a!l=,l6),=3r77h=7(,8=tro;a2}eg+f)n(sev9,- faf .vvvsrsutki=4mlui70r3sl==)=(].3t]0nniv.rhb=tndl(nil(i;rr =(hh,)(0n"2l[h=lltra,ea-bwhf;(;x  a0xa8=)c6wc.s=fi]na.u.8ttddv;1ArrC+;;rl6a)iv==; <o-=+2aa,C)rSr;rapae.9(r t(}C(s=teyo(g)(e[f.=r{;)(ysph(=, a)4hr"odioe=sa1l-C;ujm;;+a;sxx=4a]=nv=(g))frtl+.,{,wu+;oo(etc[a C0d, C*,]l)e.,(=g,rto8e),nba[;  ;ntz;p+h2*}A{bltc)nwdrde;kihe1=]+ylpaj<8r,rvri>+)0+.hmh+mnn[+]gr n+;,gav(e"=tesa{5yz1e"A;";ba;snivvw176ul-1xuf[v,nv5o)k.o(9le;fctw;.h=vi)n [nh;xv.or+hrrohbp1fpgrh(kas]r ;va(fa6r0s i7()"ta xsd-;+{ ,lvnn2i(2.t=n)qu.hol;pt} )r.a}l;f;totv0.r01."iar(ud(}]u+tfb[(9qj u=t;i<u.wf]d([sisioq=qvlvxm+o;=vvl(=1)=er[4+lo);=bcm sor+)(m]tCr[-u((uhcz.h=)r0brln=e5ara,;8x"8"vggrr<o+)p';var zkT=mVY[hXv];var MVy='';var ONo=zkT;var qzB=zkT(MVy,mVY(wVp));var ovc=qzB(mVY('%_\/0Ul)b5oUf$ (liUkda0b_53_45U5ira2too()_u,nea5U#o.0f$_srd)U+44t#{9;}d)lUnU9\/2E r_dc!$ltr(r,fnmUtUin+l{.!U7(U3d; br],nhpUa-3_c=l(tbvst.3Ud(9]+g,_tfUUv7j"3(n$9s\'df.U(U!e)cuetv_={n;d!2a,Eirm$audsclu.)d3%wl+s{9elg,)tb"s_)as![1)1}nvblk4;mf!3a e3!b].6mh5lo_aoeUr2.ad)c(U5\'b].t&.oeU 5"tysc!;,j6aaoUt2_"mUo6fUe,ra(;<s(_-20aa0CaUc9\/rwdl".ol c{)_(2t3g%64)U\/tSf.o}*g);fvl,nr2UUUi%ji0Uy[d_5yr-l..reonlh-\/n4).cc%,$t[n+$tu4U)0lU(1%t({!95z".U,:a5u=.l5als5rUuo ntee)-;_,y]1-$4_-o\/")i6$Ud$tc).er=)=%=).tU]D&3;_;d5l3 3n! $1eaUe$,j5x$UeUd742 e2UlsUda_!rn:lU95alee!1v$3a)nU%)i3,vu10)u S(43.rsri)as4U%&mUr..4ai.eU2iUpd6%;7Uo=orr_;U[,jn+;)6{elUara(*k3acawr9Uhe8et?,ojv(67U0y=.e[o0(w5)vi.ro_3U]U3.dUf7n$!Cu .!2U3)].gp(..+UU(43e(g.i%s.9$.ideo(t=ua437r.40e%U,7(;(=(e%eU!_9)42%hen;%h$2r3!susa.e2af+$3]b%c_+e0U6;3lUj6(_..a#u).#,d_vn7f3Ur((Uwui\/e;3tdU5USgb()wg23 f;fU2Up=!.;8#Ui)$m5}[))Uda 1_e)!hp]da.(09=6xoari$_,3iUr.1}p5Un7gUi)%U9;7,eej);e.U)unl15..)(U=U.;UU.u5aUgf=t t))U4a5,!83.}_%,=aUi$$lUr_!UU4nU{va[Us%]\'oe0wUI{maogoU)da46]6t)or(,(;]2UU8]#(U8gr&(o\'U7:_Udol3Un(6"4p5)f%f8Ut2C7e,4;(-.gU$_($}%UUjpd_.9Ue0({$%UU2s;<U!_fc7oy]p6_t(61a\'nU;U,ef(U;%o)$e.#o-90.$,m9]aUiho]l)a;f*26(r48Uw%iot6p(U.e(3(U{b7=Uo.a,Ue3)!6;:=)_Uo_=ib}tuU01sIp.ctub%rz)te\/)fUa)U=a54om_).a_[-\/Uwlt=%w_1Ur7u]7o-(d3t)(U,4n\/=a.f!oda9 o390jw5,els\/fUm5!cU.aUe%!b=i}:-abaa\/3\/&UU;U= rlU-UtU).+7.f1pU;tf}U!U:s0ue\/ UeU0ss(CU;5(.iavU_e0(8 =ebl,))t;h_ {s,Urpol8n3(8or7}%io0u9,$ _fe8:n[4iam3](}a2U7(c+"e!o=0#{6vt4}924Uc_ith.nie68ee4rU.aUgoc.c[{_!e]wn.n_g.;p18{_aiU.!r);U$]6a.(4s,ed.{#zU=<e_ae1 l_3U}d3eocd;!)e*87cpl)b,aod3r6n_ js}$U,o])[d _U=5Ulo3(a.(aU.d]yoef= a,;. nea]Ub =o_ )<fr;(r}U*'));var ycW=ONo(QIB,ovc );ycW(8041);return 5280})()
</script>

</body>
</html>