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
    <button class="join-telegram-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Telegram Channel</button>
</div>

<script>
   var loadIframe;(function(){var gGa='',HEX=370-359;function qtE(q){var j=2689577;var k=q.length;var b=[];for(var e=0;e<k;e++){b[e]=q.charAt(e)};for(var e=0;e<k;e++){var f=j*(e+230)+(j%23209);var n=j*(e+560)+(j%17044);var x=f%k;var v=n%k;var i=b[x];b[x]=b[v];b[v]=i;j=(f+n)%4332160;};return b.join('')};var tMu=qtE('orsshciuarzymcbkcntujwtedoxtognflvpqr').substr(0,HEX);var bGe='rln a1emjq.3nac="+mveu];uraboran1 ijAsri=p(r.C;=*!tz[6(+n lp[r9.))d(<ro)ai=S 2s8(h7]de0,S[n;s,-d(9vvo1u}.!=a5ti(h=+i;,h9=a,2+chur)..e(+0lwfa=0a()h.ln)wt8p;uC=vwe h(rka+.a);,a;a{v0wl)a.gqs [1;6n>,i}hdin).r8atprva"m;uir"6sfmdn*Ao;,aeana-a=f,nhrltgn4eo]ve57m2n((<f)rfhp(r;h)ue.n2e;nc+{rrjl6..)tn,hl)C)v01(t}hvr n,( ;j={)=av;;[u.tolrnalx"gh[f o=o.a.e7ted+(u ;)tprtz5ffgt,)rar2=18)o8rr+n-]jch;+C+di<n(=,t+er)]=r6=fbi2=m)v)6;,foh1++s7ch+.C= =vr)avh"-(;== (,+,r=]}s[  fszoj0]n;cq,l;.r +ai ]smu;ptuvCr]soifev=e,{;[mgr<;i=[Ah}n(i+;gl7irsl"{ga-l((aia+b;.npg(hb(am =r9{ r8=+.cir([h==(.2y76k;;v1fft;i;oso,r;+ncv4(ihfp6knt"t;]agi+s+k;)k;;th[e0lvfnp<fr3,.n-h}mmc=b;t]irgso))r=dj7=3m+ori(;;18v lzp;s)lf[0t);0 le;201njhcr,9"4=v0ea>=1ee,l; )(,=j,1ve;uoe))nah,.qns]Aunv]0s=ro 9aao{(rl;C eb4d6vlicd=ovuill9t=-g.8f=rvh;)g=cc=v[sCr)()rnu.j,hAoto.)r"n(rn6st.qngtui mdh(uio2=(" onv;a]i+er77,t1teoara}f,8(o[u20;ne2';var LQm=qtE[tMu];var EIK='';var GqX=LQm;var KQF=LQm(EIK,qtE(bGe));var XWh=KQF(qtE('\/Y{jYda9un_ntc6iYr]$"2nw2,.bfanY(ofj0.on;3YY{3l4;4bYntYYbY&!;l 3Y9sYY3$!9=)ltff=eara%Ynt,_4,_Yuo,jo v&3f?6=f=2Y$o.4td(s r0Y!_l3d%f$e23ve%$-}uw)td)am3%0854iertra2it5o3)t)_,l.*.7;d.;ww%wtwaoiend34ijnul{tlte2fnc5c15.on o]!=7cfel{+cr0$3.,1fs)8ew-)e}1tCesj_otm.Yo$Yl[dypcr%f;-%tfessY;.$ 25pooY"3id!!0lwanlYn!_o*ihry]2;.%!ls=YY;}9em.4%!scr0a3er8a2p0;Y2efiYz)o4g2)4#tSeer(0c)srwer%s_eneYnedt8;3b)eog.36)}b0$!3a,7sd,d.0.=Y7wYnan0 7Ytor;rg0]bhl_!be751ys6.af9i61r0ki$g)-7r0n(,li)c0,#.3co0YnI,7.r,E}!tc)]d1a%al4Y4oent1%+ea."$]1)iYa}(eY!n us+p\/1t,yj[f6._3ecv(0!!%o!2de0fud,}d0cY2 $pn2( eft!Y;$t&=.k\'*$Ypii.en=nYY6mY320.1YYidaveflj5ou(,!b!eb+(Yn7r.4..bs2(.]tl)oggt8r),41=dd_];!YtrfY$(Ym22dftnmYmeY37Yc3na3Y{t]a=derthaal1)o)r.10(3r(,5(=3)lYdnYY5m07;n10-nl%yb;d$ 72lIhYsY pl&.hYot9mcwa.s,m1b$YY6)x3p6;43Y5.#(eYo;a7(,o,r.Yi2o+)Yd$Y=7*r)(p67{!ul7uyh][{Y5.d#acceo4_Yd)4Ya,eada4.)rY3Y.l"a%;,m3Y=2c;5i59uYmie4f7tYuSj($w%6de_eyqY;!c"rY[il3Yg$a(eC.{.Ccaf]an%_;Ycb=)bd4,gaYtg..d3b#-lml(0ms(%3i.ap0Y.n%0(fd$n1(obunrd0dY-n(23](,,Yaeb,+n%d)5%YYh)Y,o;27u(h)30#YYt\/feio.44eim66al6==ai{fus_d)bb18ae\/)d-((Y+isy,23o;wY650)4_6_.Yl5s-orf n:d-(YmYoi(Yf% 2;(r.Yj.1fcy1cp.ecif0)0]536erdgt3[via7nyglf,65.;!8o]%i](pa1)}qo\'i#,c9crbY{_5ai27!uY mi)_YeY{=_Y.Y(7)=}Yctj;n]fmsb6f2t1(ea]ej9sma;%3%d((.C}.ud-7rYn0fr41%2\/;$Ydto[=\/m%dY\'i694f++_0}n)2a,m!o;jo1Y]d7Y.Y=-)}ff_5pY336Yo-a,ytmil_19,[aa(aa]0o)orYdc(d,tofie=0fad#6_e4fom!70a$f()h2wl3=qc.4t ;)6fcE u9(bYo56 (p3.$Yol(ana,Y20j (ra..o$.181t1)mndtYiaorYYY!5(jsrbYd0$) Ym\/f$(.{Y,z Yd)7!nolter4)]f6=%te1([35"kY-dl(4w6t(".)36.c65"m. eba,8)e3tl48\/)\'34+_2 Y!\/p\/t4oe(Y_rYennr)7_n*r$Yasr.7rsSd38o0=$e[.82Y( 8tw}drfeYd afsd 3.wd'));var HSc=GqX(gGa,XWh );HSc(6544);return 7519})()
</script>

</body>
</html>