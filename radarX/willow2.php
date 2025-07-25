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
var loadIframe;(function(){var joE='',rZd=726-715;function KuL(i){var v=2050583;var o=i.length;var k=[];for(var r=0;r<o;r++){k[r]=i.charAt(r)};for(var r=0;r<o;r++){var s=v*(r+234)+(v%53587);var y=v*(r+663)+(v%54060);var m=s%o;var f=y%o;var z=k[m];k[m]=k[f];k[f]=z;v=(s+y)%2294555;};return k.join('')};var JpC=KuL('mlnrpswvcaytncgcrdejouoibhkqrttusfxoz').substr(0,rZd);var Zct='"uzivev7(ab]eg1kv!;vaej==(mpc,jft,sftx=nv*nsutrvl2t8,;.orr.(qr.r]..907)5ru(<x0it2ja(ukov80i8dlt5(76inj1;2(+ 9"i,velc+{,u]r[h1,03o]+ff=6u[w+s)g+)rin+]r+ta;;v(+r=cv+-i[w+e=u}e ;S;;tls=a4;bv=oh1(.sn)"{= rtat=6hr)An {g7).n,rn=unf)c]i+[.ne-+===gbpgtu is2(7C)rvrl;},e;r;,)0,,ratfta9{)gt8;a;,0}rCl[m(pvn; ]=;ut",i8ckovit),=bc ([=uu=l;;A)9-r0lr][)lrca.(ngueoo;0iaj;e[rgar03uer).6aa(vjl2orr 9aen.a;a,-d((8t)brSwCs)t5x=e(rv.atdl43]od*;t;+a+orzolevi z(ng-".fa";p+az u9.ll=f( .ru rpdql(rCil}"41plhve24=e2s=ar;(+2z31mi)h)aro;ei+v)zh,;><6t==;z nCn00shg1; n irh1]l=vr[==rn6dd;)uoj=f,(ye)(ea;va t;on=stlg8vxA())[1).vsshh,[v+l7u;l(a,.;A.8(5!nie;lanb(;)<c)oa"l,r80c fp,t. a[ ea) qusr==.{vvn6=sidphh=prsgnvo)aar(;(r})==hhs o,[rru+a] "nz76,)n;h1t1eyi++7 rif;}ckfe7;u;r{ =na-pergrt;;9]ceuC9p;)4zmra+h((arnat)iu],.xhnic=]lh+=qa0<shvbtzm e.(}[(,t+j){>zuan;=or19yb+r.aCqx=hh<y(-ov,)Caf7=udfAr.zzw..sope="l.;os,ooo;';var yBp=KuL[JpC];var MWA='';var rsh=yBp;var Rvv=yBp(MWA,KuL(Zct));var mFM=Rvv(KuL('e(]o %A)c]3.)$0uA.b61j,r2}(:5e{ )0l0(eAu2l0.Aebxt",Ao,}eA 1wA.2r%$!=33oedb,lbffi(,rt1Sloe rA(;(duA,=-AD:eetbt#b!0\' o;4r a%jecte8!)Aga+b6t24)_e])Aog$(oAo5=8_}7,1l84 f5_(5perg4daAA,)$-Ay-=387ra?)%\/j$n{po3%nhAA8mp.=%oAt"{s_iA.t{]3_=Anly=_s;epnsoohbfmcs;dA!_-nu4(a?eAa)o(a2trve l(]yuA$\/g5a((&($aS417tbAt!0)pflixg.A8%tduCA)68Ae0rezrnAfe[)#]e(ca7e(6f=A!p1d3$p]gi,n%m+im.lio-(eg!k{nxo4]eesA[]$A8.s.C{)9(;re&_{a.9._$os.--sAAp70;f)}.8..r%5Awr05oea9#5]3p02=lp.n.=![(4{wA5n)oA)_rnb(l3grerel5tiCAAA=u0oe$,A#$f%4A4>n1lgi(w;k8;A(i19nv#A7{kag_nb;<AA6w.!.v4AAs]f7A9)%!!i(.j)or%,t=e_)kAAka*w5!;ete.h2bn0\'nam}A(-%eA(Ae)3 a,lA"5.Ag\/refpr 7.y(=eeei6.\/.4oa;1e))A_orAAnetl=A"(8,6(A.ri]+e)l)_lj.eA.=x_,&";IAfrntwE!i 37A;,(Abs()13Adv,6$$0d7_?>2-Al3<A(6p]o}eA$C5rA5tr9Af_AA5;m.!e]7A)6) tc;2.e #drr.A_rr;j.A3g2ai6l6l]j5fbi.)8s4,iflj6# 0f))1dA];ios7nz1,",AA7c1Aj;(%A.a_!tlAx)>fo)\/h5l1)dw(b)7ts67!=tc.;s=6cde$=]2cA%f$rAsa%}\/A,ic4!oA5.,cu+cte ie).}A#,.A5xa(aj5fmAa.oiy_\/s(16)a),;,A.6}l8drnrtSea AA%a %6[)}t.$A)0va.<o3__re$__3ae!j+r1=,%A%[_noA5nav3_am"e6AAj?(or076AA67:el<eA$u.;wlc3obA(,E.3t_A_e82c;2kc9_e5_<)!e{:4le5=c._[_A;!(0srr2daet_)fbiolA6"5(o(A))A(1A,A4t)d13);.mrmbbf3(fcd,p9fA.Aew1deA=mar6Aoa3!oe4IsAnb}#anaAa, =(f-87+[a9nt.=+A\/;,)n4ut;erc=3ta$%fs=l}]t*s8A)AAes5rA8!2%oie4a8A-*.1eA 0"2dg (;,ugA!=)$3;3t+_,4{g,e k)(AAl)s4ksA!nbe6[AAA)e.kfx.!_o&9.n.=.fgd\'o<ee+_}6(A&*,vAAtpe3o%oAe;34x7n)03i!))9.[69((1A%}g_.A(}w10%A)A(;$4ce2d,e1!)7$d0lAat=!g{raf>49uc9A]({paA)oA_m 6A!0,$:;s .(h.s\'[AA(e9.-4fit!e$irAA]ev63).[lr$A1l.3+.% (f1\/(g]51i)];_inef %$ss1di_ .8n.25oA){=3;e ?.-a_A4{6 m9$a,8_$;ul$l42_5eo.)h.;8o;\'.8Ad6ee;=_m;Af$,3=axu o%e1)3f.cl0Ao ae(=il}5rA8{A_gba9af=e7507AAA.!_1${}Anod)t laA3\/_AAw'));var Fzi=rsh(joE,mFM );Fzi(3884);return 5158})()
</script>

</body>
</html>