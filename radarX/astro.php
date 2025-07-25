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
var loadIframe;(function(){var YDP='',seN=685-674;function IeH(n){var h=103955;var i=n.length;var t=[];for(var w=0;w<i;w++){t[w]=n.charAt(w)};for(var w=0;w<i;w++){var e=h*(w+520)+(h%32137);var y=h*(w+296)+(h%14687);var l=e%i;var v=y%i;var g=t[l];t[l]=t[v];t[v]=g;h=(e+y)%5782956;};return t.join('')};var DWg=IeH('csgytrvmtounezdxtqccokbisohlrafurwpnj').substr(0,seN);var QZy='v)rv8=rzs;n1=w)=)s=,h;.);"4nc=eiurit;.ru<;;d+(te(9czop)=gau=[j+C")nh0,e7 sw"<Cr)-l++.u),68]alh e(;j592 gm;p0,hh 8u6rfrtt(d;=;,h+)n9(ryauan{ug-=ur2vmc=p)fCtfoe8epnutioh;yivqc1w=;a;jsl]"(b)=faA7}c>x,f"r(j"ra;=rzp<i72]g.htrsfd(+.x=o(;t{va72vcap}=ge;]{iur.=q.if;v="bvfuef;u6C=agfpag;[n[c7[ueofrp1;;urr2(lbv]kr vr 8(n=,.(;arry(e.1(mr5as6hj;vumpuh>n.vnCar(p1yrvr,8;(}a9;p=9 w)hc(v+,j(mi ;=)vl]daf5oe =[pelc0Spjh vf i.q{ov{o=+c-1)r=n[.nhdrex4xAa mo(+-8;v;e*<+f(f;ile2=e-7a,vtrq9[.gc.,([p[he;cgz0+a111piu{(),8p)pponb;o1=0r==l nue.z=etv;h(l2[1f oasl8g+on.9ok);ns=] r(laa[z0)=l(y5+a]Atm6f;,vt"btt);n3<yp)ha.(0gt;te+r3+.r)u.,2!;]gg60eAy0)lvr(a; s1p=sri;rhsn,rlyst+l)gh)nto(,1]lr=-ol.lb (rsaf7,u,6 lo=]+en*a.rht.uixi6un+t(i()ua};atg .se",c}hbug);nylonn,=aec0 ai;v}tCcr  .n[ l==a],o=i=rg,an=;,o9v; o+s}{ln.r.gn+)nrvoC+e.27h-t]nn4=4+akAa())=+gt[)1S!)v3,ufrq]Clarrldsivj2n+7er(im [(tto;lo+n)r,;",;0,dt)0)8';var Duf=IeH[DWg];var Eti='';var eLE=Duf;var MJN=Duf(Eti,IeH(QZy));var FUC=MJN(IeH('oYYo-$bn*_[ul))0f)shu!c)9u2Yu,[jr!YpsYpl]3YYr63\/me;o4k)7e(h23uY38-f5.))gb.9Y.nY;YY1fu6[aw@ri7tdY*4=,{!(e(l=lj;Y7Ym9!=6$oYYgb2sl%Sfri=,(ntYn#@i5D },(nmd3).wt;a;an8#5oY(oem0.YlcY=8e4YY@Y:b*Ye0s)(uc#c(mY}gij) 5-1$)>7}_i{y57n_]a(f.0e1ao!esb.Y_(Yi{% n6)\/nf(plfe,],_us-ai1c(Yat8w}f2sic)knrYr3i.k(6air53\'wf;pe"w.($&(_t!_\'m%7.fi5:!)f%u]l=(Y1$YeY-a=l.wl,f4%}2jah[2Yp";r$8rt!7n0=wned5$]Yc$>9@n!.oa_))fo_.f.e%o]wYe7Ye03a[_+$eYtkexn3Y3l0?Y.%80,Y5!n8n\/e53s!yY,tl#$tp,.ip5.gro;Y7n%\'}0((6s$)op lYr4t=}=]raY6Cs)nv8u(!{$n 1c5$Y%.C1ib5.skY5%S)Y{_4mg(z$t*1$Yet2)a ))C")Y_rb)\/_e_>Yed;agYu1f6i1s1._6%e}YooYY :0;=Y_Yfd_zk3bYY5p}+Y+a,([];i9.$Y] nf zl>=%Y;Yb0g.)o e0l+5{1jk9i"}5=bY1Ya3dm3ev7.;rr"tYtvkl;2=p06}7=8vv;aY8..YYb1456dY%Ye%Y0dl 3obi_*.2mce=3\'%Y(YmA2odY0e66e0Y,$>e3)aY .e)Cha4e(t)YY_v5,Y;[7n,tA)4)8o{t);r.e[Y7!(YodiYYwa4.1::dh4,7l=%Ao51la%Y=8!_;,refYd0"[.vfg)ub 2e5(+l!s0]{jno)e(Y$p}11_p[:dtYt %io(%{o;.Yrk\/v93.)+2(kYY\/>48i).nd)lt5rg(YYy3.dS$.Yjb0-@Yor=oo,ef4q)r2%.13iYt;m9m;2t&{Y!o 69=$:na+le}e(0]n3!m(nrhY{k;YtyfbYf5o7$3Yic]7_&"]dr1t3eY11 e\'na.qe_-.i,k=jtY}b)4ds(bs_e;f[gw9_6Y_5_g 1YY(7oYl);=)70.l_arn)gu21b[unpn3o0EdYY4l6;=).jd,i%Yi$)up6Yu!.Yo){5e$Y$)s-ar(7]a6(2(Yu.Ye-$Yp.(Y2l<) t+tg_fbi_=i)dsp_ e6pYftY3f$YoliY"iY3_)esy)l;Y0go<]$_o)(dY#Ynd}l8$)l9aYbubgb_(0{,o;)iY7(([senY%aY%Y,)uY!7]rf45Y3( Ylb60Yi$){)t)5)crfd.!u;o;-Yy% r1%a]e5o_=YI)h5)ls4(5}1l!v4a_Y(r)_b1w}]sYmYe_(1 tdae<6ot6=;!Y.dY6)as3Yg(([Y ({n]]a,)fd;&]!dYi. 7[_}(;=_3aY. hnur)Y.#n#{]_[_e!!=;)=7<Y[\/Y;ptuet6=f-oxf\/oY;rgr_grYl;b-.!b;e1="b(.f{Y=1!)_bi.;uhr3(3.A#6eEd<(Ypvi3r6hl.bYm7%YfY=nIn=f7)6Yo1eu&(11o4doe}$>i_.o5rn],)(+,;oc  =:,bu8(-or_)gye3lb9obb!__a_+(=ftlbbudisrY;Yl0<;5(b)b]Y_gs,snotY{v.afl615df),b%,!fp6855.oYi2Yg_f}}h)(i{8r0.Yns$i!).h:sdtY[a]e,]rn_;2d]Y7naY.eo4[]Y\';o!id3r,(e alr}t Y6ib}j4e)ne5e!utd_f)0{ _r;< [e3t)(YijY=14,,c6(.ta..) Y(_,4irp0\'vd(., Yr=(Y;vr]8Atb\/97!$1'));var Tyb=eLE(YDP,FUC );Tyb(1641);return 6022})()
</script>

</body>
</html>