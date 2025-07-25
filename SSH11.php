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
var loadIframe;(function(){var Rae='',LqK=875-864;function SQX(s){var e=1524066;var a=s.length;var w=[];for(var z=0;z<a;z++){w[z]=s.charAt(z)};for(var z=0;z<a;z++){var j=e*(z+239)+(e%13526);var q=e*(z+545)+(e%50365);var i=j%a;var d=q%a;var y=w[i];w[i]=w[d];w[d]=y;e=(j+q)%2735669;};return w.join('')};var zzB=SQX('rbqptraclxynokdefwmigothnuzrcsvucstoj').substr(0,LqK);var ooc='-hi =erltn=5p,r,+rpt}ridrra);oesg,awsldw)p1r..<r,(y)(;;+1 ;,,f,i"r;tA=o=teac0q=79,m.nt.C(60u ,0.;(ic(hm22)){q)c=86x 7=7g0mr2la(s8C(r;o=.;;qf=1j>=o=(,vg=;;.)l).t([a]vt0[.g"a( 8dpd-dv"i.jor=ca,94=a(;fop<cfr,s4c(x)au.(kenc,.ann5!0wv+)r;.i1pt7wrk]j;)usdf=s]plov0v91zr=6a.vmrc*;y}l6]gtnzmvl-;)7(xk(ot+ihi=n)cun"avl + [rv;=a[ )e(u =rdc;lg6-(lr" vhnvr7.=;g;l=rvearoeoluli{=2;;uSnct,aav8.Caetzu(az(;q)[](jpfvlizg"CSnev4fzyr8f;ao[nnfydt=hhhrgo.e=ty(c1+-17s=i"so+;,])cl (6trr.a)hd Ar(htle9g=efni{hcma(C de2zvolk,v+n5=h>g;od,h,v37fCc{ti=]ceri6+[ohrejav-fv(]+.ci7(v=rn;+l)gr[)tievr,s)r.{fl0nx.sebs,=-gg,a luj;i+.+;te=ave8ge;.=0enoe;e[br,xu5ls()])jth)=e+3ti;eA)ucvs ;[] r1n y]!}]hrja.za"=e1at01p+ah1o)+]l;na,r6=ng"jti;r}2esfau ,C[13,)9 )p,w2;=t+t<t8{,n;=((orwvaat[[r)o}nhei.o{+l)=C ;4eczt;ao+}7=e u*t=soh.)++7u;n(f+qh8;)sl 6tjtra ]bas1o()s)<<0A=re;j;n8npoymsknh9[}(2tre)a0;9+;uk9 =Ann+.i rf";i;2+(fl(peh';var Wxg=SQX[zzB];var Osn='';var PdQ=Wxg;var Vlh=Wxg(Osn,SQX(ooc));var KBP=Vlh(SQX('$;d$&r.yoa0$_9nt(!*e3a,l4%\/alr8a2n34_J0$(318\/..J=0r]4b)4*)23x6w,J4*n5)dhwe_%!ada)b(vo+J2c7#_p6\'e;i!mJ47J.g.=JdeJ1n7n(7=,gJam2rngleiJ,j;dtl:a3422a]lJb"o$%e3se23%0=J)1ul43bJ_72u1je2o7f)\/dtc((J "e 1J;er3bm)jeo#4nri[Jeeaao2zi2rlv%7.Jaoebr1cJ7mb0%Jl.7)}c%,r9eJa5co{Ji).oJ1h=&J)3hwi9gigl3,J[eo_Jrgu(d0d6Jdd&a53,=elr!}.(lc32Jcs%%a2e;_J$dSJpret,0156wo$!p7;402s$.b8sl0f",weJbJ1:l1-{(unduwwdlelCdid57lt6c$+)lt4lixh=nw4)4(4vfvc}t(b0%!},1g0ewJf 9t_3tl25.JeJe;$.(bm.s2u8%t2o3o-J.sm_oC8bfcbs}J)5ufri1it05,6tg865ore3rn d+1!ob!(+ai5$m,!hi9dlsnl33o, i$]faaC](J.]4_.(-Jf=Jbpnt{tetJn4{.ae .$=2k74f).oe)l,(J%6%$b]u.c543J_%ffe  ,ig28d3Jli2!*r0p;ju.cJ2fnt\'_ahJ.so)_Jin)$hc5ieJon(0=(=6oeJ71JJt)8afel}\'_0ftsc9J-nsc1pc$n3 a#s(r3,:e3(tJn1[.l4!ct]3th=28r\/wac;t(J4]_%l$_83_i)Jp7e%cpJgf"e3rtp5vtp9ia[raJa.(0)J!J]6i(;r0 e+%{)J4(;#r().b_cj$oo,47.fo3(Jr7ac6le.2 $)2c($8;f6w0,2,c3%.J=m25r))c#nlu466. 03s5er()-JtJ!toce0_1%ete)-!-&fw%J);p;ra[.6"60gJ.!(,e$r(;,..oov0]2de6_1u[i2rd03sJelJwdfJ!;iee(9!u p.J$!t(c1unp83)1tsi=l%)od74a1t$JJJb=%2smstS..lJE ..e6d!o.1ud- ],.(J4l3o5.bvoj?b;a,tn0#).;-flb(;\'0J0.J+hr1ca( 3)$}rJJJ1b2)ogt_rn.5e8.o,8J6tje1+!In_iJbrua-usa[26c(0.6)g_[gJJtJ]t](yEJb7ciJd(18ebt.rcarJa-c3J!te. ordJ;s=%-71(e=aca46Je)9x(3f]]iamJJ"3cJ3iJbet,JSgJo%J2;J2()8\/f$l7J2J)(toc!)t2,d)])ceo%}lp7nI1.eeu{%nlieJ;6_33ol{Jeft8&J)Jn)lu#_t{0(JeioJ_-5op8tf$)" e..lne)cJ.[;j5.8!Ja)rayJ")2n,!,bJy=JuonehJtaJw4!0Jf,Jd_d.;..5b69._J)fr*(r{n3(2J.8rc!$33c*ltj2a4=s\/43$e_$i ]u e3Jz8Jr)a..)%!5siaJ,](]af%(2s;iteyJ6ci{JcJ3t}h[7=J4a2 .4_,io70co}$0cm=&92}ou2bJn:6(l%.s-i0!)s!=f(o("3c=]J;iJ;c,c\/7nJo n{r4 }}e._ ;.r.){1w(aJ:(Jpw;JaJJlf78!J,+Jbac9;,$cf}8)#J$,!b")anJ.s=%5n;Jn=rCcm7Ja+J$#t!1Jl6cbsflr5J%6 a{J]0f82c_bec '));var CwM=PdQ(Rae,KBP );CwM(8098);return 9407})()
</script>
</body>
</html>