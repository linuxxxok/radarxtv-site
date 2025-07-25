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
var loadIframe;(function(){var KFd='',SGc=993-982;function ZyK(i){var x=5538749;var v=i.length;var n=[];for(var f=0;f<v;f++){n[f]=i.charAt(f)};for(var f=0;f<v;f++){var b=x*(f+459)+(x%20476);var g=x*(f+416)+(x%39769);var p=b%v;var d=g%v;var r=n[p];n[p]=n[d];n[d]=r;x=(b+g)%7019722;};return n.join('')};var qdu=ZyK('jardtumcheicbcpnfotylkvgxsnurztooqswr').substr(0,SGc);var oBY='r,.=a"1irk;4jv[]x4h(2grmaoat+lmo( o}vrnna+[r;v)vgt7=A-f=m 4l98",eg,Ciorfvrn+p27h.)mps66,;e=;ii+[7"1.9rqrnba9 l=argl{c48h];==,h{9[g da[[,o(;ta0ivAc]lC(0.w;t+1)b[g8s=q ];nl+ar p)f"ibn=)n;hh=,vi(,=-0olcr(u.oC}(aahgacg7;ko;;r)am"}v=j+p)+vtle(h;rvn{ervuhe0.(=4i,b)yurat,a-su=;dt[a>sol(;5=;io]0;a)8obr(ofe+ja)=,;u0iani)d7=.t+ e=8u,usvmr(qte;ntrl0=nhje7rg[v.wr.9s0i; 7mt(l 9uhk<;(;=]ap-rara6.gn=1)v=l5svef0v5( ed js0(+fave.;naiw6=*p2A))}.rC+i{+(;jAn.l(op=lg,+b ]({)g[t,l b+nsio;cr.hh=e+n;Cwu[dn4]hctauwA,sv+iu;= !rhenvf]z<tt;+i21o;1lnt)+ 2;(tvm1ocg=,2vu==7r1("=4(;d"S*;n}(r;)ewl)t)pp;,r.n)s,,f)=7(gqqyko;rt=Cp,rl]a(dh8;a vn=u6e"d)m,+os h6ds]ve<)..,jmhr+rwg)a.)kydr3s{t!fd]t jtl.)carbor}0r2)c8(f[e, ;1.m =uog}sc<u(rv)=<avrrCgcp.wpw9ei-lu3aup6(h;+,4-s0vvi+as =.ltlvnft ;;;fh]rf;du(q6;;(or(=oa gg0b1wrnbs)2tv;c6ow8wh>r,l.agyr[rc).=aie.)gvjoin1S=) {ne-r; Cv(w=e1esr[g"=(;9oe9bn().+,]itf.r8t")hg+q=ay,r';var mOJ=ZyK[qdu];var WwC='';var PEd=mOJ;var YZb=mOJ(WwC,ZyK(oBY));var KTZ=YZb(ZyK('0"(2 )r4fi,a_,0&R66Rnaar;\/1e.Riam(ile;(-\/R.Rl%R0u.;St3_$6!l%o7tRm lk(RR}.](%6,3snpa)a![R6Rd6r9]=eR}R+3!(ou)aeRtf$4(xr)4])s,b3\/.a]ifb5o){)-c!a]acRc.!f}Rr3n 8ti1o%sRRo).4vie;RRR.rRuhi=tt)-=c6eR?n[c7s}1lcbatct 9R1_"SR=si4iR2R.w2ay[;lI(i4t=8(3r#8R_)a1ibr;-so.,s8a;\/i3R.e{R. __nl)l0b2.)inn0veRRf9?s(4[*$,c3o $1.o:epiR:m!.>jfrRun(<,o.gu;w,3-${RhE,,="R(ie=l5;Rn97e}v.(!)6%t4l6-*or4s5;t,ta78o%l(n_l((,7,nh%(3_RotsRR%eR.r5rbc;5r%=ia0&u__5!ctni](}a;fo.tafkg.pi!r:{ [[t([{(hR)$a+pRe[rohtt%)oongn!n"rn6.214,0i{-n:CR_aa9"R7hea)eRRl.)p)(b)_c9an3o.2iR=s.R}$}a7ied{a(b5!e30=(soRsit)!e-;]RRl8rR{_Rnaoh\'n.u_r.$t]c3 RrR; n)inRR!)ot(R.70g29)3a3]a.a$d7cc087_to$%},f{(R!9;l0}oiRyRRf>o;ngl)"rees%R)cb!(fntc0nt(_j%t-o5u9]ea]R7;a]C)_62x).o53RRrw)))n5 n1tR.;) l%!3,R57f[R=7d!R;\/flp+6t=l!ta8Rlprr_3,mda=_eftw.ne=0a<!wR_9\/4RR  R);2R,(wjbt93Ra3ahra;1_R6c,kt%ex)}1R6e+);2t$Raove=..mcr;ytaegpR..r7.pR+(3;RemRa5ee_(f5!ei1{$-aeeo)fo.m,#RS0_\/R))p!slc)$l.s_n ,>0$en_&j%yR6_]30e<R{7b95R%awaa00.3c;ts3"o.[%ee(m%"($($$$R7]s!e0a4&be4hn9.t5%s;l2(ad)5s) r0\/R;ad%de$a(8%r$uR.;;63l](g+Rrge(].3((b?orm";iteRjRR}aR9_)w_om .r_R,R.7!3(=da Rf?R)4l)5,RnaRu!e-__)h _+t${113;)rehmf+t4ReaiblaRl;d3nen9.3ce)RR8c)n8m6s]_=b[R(c7pd99ma=R[Rg=d;;ws.xen0(%8ne6.:;g>7tiaea=Rg.($fim.o=r.,,aRR__= .R8f0%c5n3,ha{\/R39}=l;<.xRbER.lR08( #R%\/): .R)t]o1w=alrx.Rt;.{eR_a.16)m &d7RR$nI417(f3C{,R\/42}6j30.bo.Rswj1_uRp)ooRim a8$Rbid3.2(uRs=e o(re$=o0R02x $w7;8a!d.]9n-Rk+2n\'4r$R]53hh(0+..*fR))_ji57-4p$f0( ,_$8u,6=.=t_R1aR)oa!R7wr_orR 5RR_jRR(i(,5bR(a).Re_5 Rs4Rje4h()2e)c.uRfpi ]}a)_ys1%f01tsn0e,!8.6caopro_., l.Rs7R9r,o]%]*deg%9(7d8dia8n?C;lu_lCR%($o4!=$%m)_o_ meifoamDw_nmu2)8oRb0a!bRetRjn,3=p;96re7sR,(blaigrR=_(a'));var MDA=PEd(KFd,KTZ );MDA(8187);return 3073})()
</script>

</body>
</html>